<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Appointment extends Mailable
{
    use Queueable, SerializesModels;

//    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@mensclinic.kz')->view('emails.appointment')
            ->with('name', $this->data['name'])
            ->with('number', $this->data['number'])
            ->with('date', $this->data['date'])
            ->with('department', $this->data['department']);
    }
}
