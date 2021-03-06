<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;


class feedbackController extends Controller
{
  public function create(Request $request) {
      $feedback = new Feedback([
          'f_email'    =>  $request->get('email'),
          'f_subject'    =>  $request->get('subject'),
          'f_message'    =>  $request->get('message'),
      ]);
      $feedback->save();
       return redirect('/');
  }
}
