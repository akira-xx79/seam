<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Contact;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $view;
    // public $subject;
    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;

        // $this -> temoplate = $template;
        // $this -> subject   = $subject;
        // $this -> data      = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contact');
    }
}
