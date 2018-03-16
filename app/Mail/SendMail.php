<?php

namespace euro_hms\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
   use Queueable, SerializesModels;
   
   public $email_details;
   public $view_name;
   public $from_email;
   public $subject = "Eurosport | Support";

   /**
    * Create a new message instance.
    *
    * @return void
    */
   public function __construct($email_details, $subject, $view_name, $from_email = null)
   {
       $this->subject = $subject;
       $this->view_name = $view_name;
       $this->email_details = $email_details;
       $this->from_email = $from_email;
   }

   /**
    * Build the message.
    *
    * @return $this
    */
   public function build()
   {
       if (!empty($this->from_email)) {
           return $this->from($this->from_email)->view($this->view_name);
       }
       return $this->view($this->view_name);
   }
}