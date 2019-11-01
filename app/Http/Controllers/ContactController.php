<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;
use Alert;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
         ]);

         $contact = new Contact();
         $contact->name = $request->input('name');
         $contact->email = $request->input('email');
         $contact->subject = $request->input('subject');
         $contact->message = $request->input('message');

         $contact->save();
         
         //request details of the sender
         $data = array(
             'name' => $request->name,
             'email' => $request->email,
             'subject' => $request->subject,
             'user_message' => $request->message,
         );

         //send details to adminstrator
         Mail::send('emails.email', $data, function($message) use ($data){
             $message->from($data['email']);
             $message->to('musumbidenis@gmail.com');
             $message->subject($data['subject']);

         });

        //reply message to the sender
        Mail::send('emails.reply', $data, function($message) use ($data){
             $message->from('musumbidenis@gmail.com');
             $message->to($data['email']);
             $message->subject('Confirmation');
        
        });

        return back()->with('toast_success', 'Request sent successfully');
    }

    public function book(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'message' => 'required',
         ]);

         //request details of the sender
         $data = array(
             'name' => $request->name,
             'email' => $request->email,
             'tel' => $request->tel,
             'event_description' => $request->message,
         );

         //send details to adminstrator
         Mail::send('emails.booking', $data, function($message) use ($data){
             $message->from($data['email']);
             $message->to('musumbidenis@gmail.com');
             $message->subject('Event booking');

         });

         //reply message to the sender
         Mail::send('emails.reply', $data, function($message) use ($data){
            $message->from('musumbidenis@gmail.com');
            $message->to($data['email']);
            $message->subject('Confirmation');

        });
        
        return redirect('/')->with('toast_success', 'Request sent successfully.');;
    }

    public function subscription(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
         ]);

         //request details of the sender
         $data = array(
            'email' => $request->email,
        );


        //send message to the user
         Mail::send('emails.subscription', $data, function($message) use ($data){
            $message->from('musumbidenis@gmail.com');
            $message->to($data['email']);
            $message->subject('Subscription');

        });
        
        return redirect('/')->with('toast_success', 'Thank you for subscribing');
    }
}
