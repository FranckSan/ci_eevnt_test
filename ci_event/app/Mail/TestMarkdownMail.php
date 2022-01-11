<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];
    public $url = "{{route('dashboard')}}";

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
                    ->markdown('email.markdown_test');
    }
}
