<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMail;

class ContactController extends controller
{
    public function index()
    {
        return view('pages.contacts');
    }

    // {
    //     try {
    //         Log::info('reCAPTCHA token: ' . $request->input('g-recaptcha-response'));

    //         $validator = Validator::make($request->all(), [
    //             'name' => 'required',
    //             'email' => 'required|email',
    //             'message' => 'required',
    //             'tel' => 'required',
    //             'subject' => 'required',
    //             'g-recaptcha-response' => 'required|recaptchav3:contact,0.5'
    //         ]);

    //         if ($validator->fails()) {
    //             return back()->withErrors($validator)->withInput();
    //         }


    //         Log::info('reCAPTCHA validated successfully.');

    //         $data = [
    //             'name' => $request->name,
    //             'email' => trim($request->email),
    //             'message' => $request->message,
    //             'tel' => $request->tel,
    //             'subject' => $request->subject,
    //         ];

    //         Mail::send(new ContactMail($data));

    //         return back()->with('success', 'Thanks for contacting us!');
    //     } catch (\Exception $e) {
    //         Log::error('Error sending email: ' . $e->getMessage());
    //         return back()->with('error', 'Something went wrong!');
    //     }
    // }
    public function store(Request $request)
    {
        try {
            Log::info('reCAPTCHA token: ' . $request->input('g-recaptcha-response'));

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
                'tel' => 'required',
                'subject' => 'required',
                'g-recaptcha-response' => 'required|recaptchav3:contact,0.5'
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $input = $request->all();
            Mail::to('your-email@example.com')->send(new ContactMail($input));

            return back()->with('success', 'Merci de nous avoir contacté.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer plus tard.');
        }
    }
}
