<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Appointment;

class Newappointment extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public $appt;

    public function __construct(Appointment $app)
    {
        $this->appt = $app;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.newappointment')
                    ->to(['pmnjuno@gmail.com'])
                    ->subject($this->appt->name . ' Request For an Appointment');
    }
}
