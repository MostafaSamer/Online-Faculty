<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class feedback extends Controller
{
    public function create(Request $request) {
        $feedback = new Feedback([
            'f_email'    =>  $request->get('mail'),
            'f_subject'    =>  $request->get('supject'),
            'f_message'    =>  $request->get('message'),
        ]);
        $feedback->save();
         return redirect()->route('/')
    }

}
