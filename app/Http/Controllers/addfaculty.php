<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faculty;
use App\feedback;
use App;
use PDF;

class addfaculty extends Controller
{
  public function create(Request $request) {
    $this->validate($request,[
        'cover_image'=>'image|nullable|max:2048|mimes:jpeg,png,jpg,gif'
    ]);

    if ($request->hasfile('cover_image')) {
        //get file name with ext
        $filenamewithext= $request->file('cover_image')->getClientOriginalName();
        //get file name
        $filemane=pathinfo($filenamewithext,PATHINFO_FILENAME);
        //git ext
        $extension=$request->file('cover_image')->getClientOriginalExtension();
        //file name to store
        $filenametostore=$filemane.'_'.time().'.'.$extension;
        //upload image
        $path=$request->file('cover_image')->storeAs('public/cover_image',$filenametostore);
    }
    else {
            $filenametostore='noimage.png';
    }

    $Faculty = new faculty([
        'name'    =>  $request->get('name'),
        'department'    =>  $request->get('department'),
        'courses'    =>  $request->get('courses'),
        'areaofexpertise'    =>  $request->get('areaofexpertise'),
        'professionalInterest'    =>  $request->get('professionalInterest')
    ]);
    $Faculty->cover_image=$filenametostore;
    $Faculty->save();
    return redirect('/home');
}

public function listfaculty()
{
    $factiles=faculty::OrderBy('name')->paginate(5);
    return view('ListFaculty.listfaculty')->with('faclties',$factiles);
}
public function listfeedback()
{
    $factiles=feedback::OrderBy('created_at', 'desc')->paginate(5);
    return view('Listfeedback.listfeedback')->with('faclties',$factiles);
}

  /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faculty=faculty::find($id);
        return view('ListFaculty.show')->with('faculty',$faculty);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $faculty=faculty::find($id);

        return view('updatefaculty.edit')->with('faculty',$faculty);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post-> delete ();
      return redirect('/Online-Faculty/public/listfaculty')->with('success','Faculty deleted');

    }
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'cover_image'=>'image|nullable|max:2048|mimes:jpeg,png,jpg,gif'
        ]);

        if ($request->hasfile('cover_image')) {
            //get file name with ext
            $filenamewithext= $request->file('cover_image')->getClientOriginalName();
            //get file name
            $filemane=pathinfo($filenamewithext,PATHINFO_FILENAME);
            //git ext
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //file name to store
            $filenametostore=$filemane.'_'.time().'.'.$extension;
            //upload image
            $path=$request->file('cover_image')->storeAs('public/cover_image',$filenametostore);
        }

        $Faculty= faculty::find($id);
        $Faculty->name = $request->input('name');
        $Faculty->department = $request->input('department');
        $Faculty->courses = $request->input('courses');
        $Faculty->areaofexpertise = $request->input('areaofexpertise');
        $Faculty->professionalInterest = $request->input('professionalInterest');
        if ($request->hasfile('cover_image')) {
            $Faculty->cover_image=$filenametostore;
        }
        $Faculty->save();
        return redirect('/Online-Faculty/public/listfaculty')->with('success','Faculty updated');
    }
    public function pdf($id){
        $faculty=faculty::find($id);

        // $pdf = PDF::loadView('ListFaculty/show',compact('faculty'));
        // return $pdf->download('faculty.pdf');
        $pdf = App::make('dompdf.wrapper');

        $pdf->loadHTML('<h1 class="nav-link">'.
                        $faculty->name.'
                        </h1>
                        <img src="./storage/cover_image/'.$faculty->cover_image.'" alt=""><br><br>
                        <p>Area Of Expertise: '.$faculty->areaofexpertise.'</p>
                        <hr>
                        <h3>Department</h3>

                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <p>'.$faculty->department.'</p>
                                </div>
                            </div>

                        <hr>
                        <h3>Courses</h3>
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <p>'.$faculty->courses.'</p>
                                </div>
                            </div>

                        <hr>
                        <p>Professional Interest: '.$faculty->professionalInterest.'</p>');
        return $pdf->stream();
    }
    public function deletefaculty($id)
        {
          $post = faculty::find($id);
          $post-> delete ();
          return redirect('/Online-Faculty/public/listfaculty')->with('success','Faculty deleted');

        }
}
