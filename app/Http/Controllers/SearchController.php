<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\faculty;
class SearchController extends Controller
{
    public function search (Request $request)
    {
      $search = $request->get('search');
      $factiles = DB::table('faculties')->where('name','like' ,'%'.$search.'%')->paginate(5);
      return view ('ListFaculty.listfaculty')->with('faclties',$factiles);
    }

}
