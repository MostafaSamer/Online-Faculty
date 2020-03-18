<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;

class addfaculty extends Controller
{
  public function create(Request $request) {
    $feedback = new Feedback([
        'name'    =>  $request->get('name'),
        'department'    =>  $request->get('department'),
        'courses'    =>  $request->get('courses'),
        'areaofexpertise'    =>  $request->get('areaofexpertise'),
        'professionalinterest'    =>  $request->get('professionalinterest')
    ]);
    $feedback->save();
     return redirect('/');
}
}
