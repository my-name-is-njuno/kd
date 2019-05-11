<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MessageController extends Controller
{
    
    public function store(Request $r)
    {

        if($r->ajax()) {

            $this->validate($r, [
                'cname'=>'required',
                'csubject'=>'required',
                'cmessage'=>'required',
                'cemail'=>'required'
            ]);


            $app = new Message();

            $app->name= $r->cname;
            $app->subject= $r->csubject;
            $app->message= $r->cmessage;
            $app->email= $r->cemail;
            

            $app->save();
            return response()->json(['success'=>'Message sent Successfully, You will be contacted Soon. Thank You']);
        }
            

        
    }
}
