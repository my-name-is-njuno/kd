<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Message;

class Newmessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    

    public $message;

    public function __construct(Message $msg)
    {
        $this->message = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('mail.newmessage')
                    ->to(['pmnjuno@gmail.com'])
                    ->subject($this->message->name . ' New message For Lavington Green Dental');
    }
}
