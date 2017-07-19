<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $content;
    public function __construct($content)
    {
        $this->content=$content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //$content digunakan untuk mengambil data dari class controller
        return $this
        ->from($this->content['email'], $this->content['nama']) //email from sender
        ->subject($this->content['subject']) //untuk subjectnya
        ->replyTo($this->content['email'], $this->content['nama']) //force replay email, jika tidak ada ini akan otomotis ke penyedia email
        ->view('front.emails') //content dari email akan di tampilkan di halaman view
        ;
    }
}
