<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];
    public $url = "http://127.0.0.1:8000/dashboard";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $info)
    {
        $this->data = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@cievent.ci')
                    ->subject('Mail de contact')
                    ->markdown('email.mailcontact');
    }
}
