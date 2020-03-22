<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faculty;

class addfaculty extends Controller
{
  public function create(Request $request) {
    $Faculty = new faculty([
        'name'    =>  $request->get('name'),
        'department'    =>  $request->get('department'),
        'courses'    =>  $request->get('courses'),
        'areaofexpertise'    =>  $request->get('areaofexpertise'),
        'professionalInterest'    =>  $request->get('professionalInterest')
    ]);
    $Faculty->save();
     return redirect('/home');
}
}
