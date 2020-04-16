<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $firstname;
    public $mail;
    public $number;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom,$prenom,$email,$tel,$message)
    {
        $this->name = $nom;
        $this->firstname = $prenom;
        $this->msg = $message;
        $this->number = $tel;
        $this->mail = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->mail)->view('contact.viewMail',compact('name,firstname,msg,number,mail'));
    }
}
