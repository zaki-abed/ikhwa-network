<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ContactFormMail extends Mailable
{
    use SerializesModels;

    public $request;

    // تمرير البيانات عبر الكونستركتر
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function build()
    {
        return $this->subject('رسالة من نموذج الاتصال')
                    ->view('emails.contact-form') // عرض البريد الإلكتروني
                    ->with([
                        'full_name' => $this->request->full_name,
                        'email' => $this->request->email,
                        'phone' => $this->request->phone,
                        'description' => $this->request->description,
                        'option' => $this->request->option,
                    ])
                    ->attach($this->request->file('file')->getRealPath(), [
                        'as' => $this->request->file('file')->getClientOriginalName(),
                        'mime' => $this->request->file('file')->getMimeType(),
                    ]);
    }
}
