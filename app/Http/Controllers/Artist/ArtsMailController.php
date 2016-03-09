<?php

namespace App\Http\Controllers\Artist;


use App\Http\Controllers\Controller;
use Html2Text\Html2Text;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class ArtsMailController extends Controller
{
    //
    public function sendMail()
    {
        $dets = array('msg' => Request::input('mailDets'),'subject' => Request::input('subjectH'), 'to' => Request::input('toH'), 'file' =>Request::file('file'));
        $rules = array('msg' => 'required','subject' => 'required','to' => 'required|email');
        $messages = array('msg.required' => 'The email body is required', 'to.required' => 'The recipient\'s address is required', 'to.email' => 'The recepient address is not of the correct format');
        $validator = Validator::make($dets, $rules, $messages);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else {

            Mail::send(array(),array(), function ($message) use ($dets) {
                $message->from('paintbuddyProj@gmail.com', 'PaintBuddy Team');
                $message->to($dets['to']);
                $message->subject($dets['subject']);
                $message->setBody($dets['msg'], 'text/html');
                if(isset($dets['file']))
                  $message->attach(Request::file('file'), ['as' => 	Request::file('file')->getClientOriginalName(), 'mime' => Request::file('file')->getClientOriginalExtension()]);
            });
            if(count(Mail::failures()) > 0 ){
                return Redirect::back()->withInput()->withErrors('Mail was not sucessfully sent. Please try again');
            }
            else
                 return Redirect::back()->with('success', true)->with('message','Mail sucessfully sent');
        }
    }
}
