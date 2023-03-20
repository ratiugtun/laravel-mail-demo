<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\SendDemo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
 
class SendDemoEmailController extends Controller
{
    /**
     * Ship the given order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function demo(Request $request)
    {
        Mail::to( new class($request->email) {
            public $email;

            public function __construct($email)
            {
                $this->email = $email;
            }
        })->send(new SendDemo($request->subject, $request->message));
    }
}