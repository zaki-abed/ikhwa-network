<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function sendEmail(Request $request)
    {
        // التحقق من البيانات المدخلة
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:10',
            'file' => 'nullable|file|mimes:pdf,docx,jpg,png',
            'description' => 'nullable|string',
            'option' => 'nullable|string',
        ]);

        // dd($request);

        // إرسال البريد الإلكتروني
        Mail::to('zaki.abed2541@gmail.com')->send(new ContactFormMail($request));

        return back()->with('success', 'تم إرسال الرسالة بنجاح!');
    }
}
