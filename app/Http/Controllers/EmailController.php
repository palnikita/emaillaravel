<?php

namespace App\Http\Controllers;
use App\Models\email;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EmailController extends Controller
{


    public function send(){
        return view("email");
    }

    public function form(){
        return view("form");
    }

    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'recipient_email' => 'required|email',
            'subject' => 'required|string',
            'messagee' => 'required|string',
        ]);
        email::create($validatedData);
    
        $data = [
            'recipient_email' => $request->input('recipient_email'),
            'subject' => $request->input('subject'),
            'messagee' => $request->input('messagee'),
        ];
    
        // Handle file upload if the file input exists
     
    
        // Send email with attachments
        Mail::to($request->input('recipient_email'))
            ->send(new EmailNotification($data['subject'], $data['messagee'], $data['recipient_email']));
    
        return view('email', $data)->with('success', 'Email sent successfully!');
    }
    
    
    
}

