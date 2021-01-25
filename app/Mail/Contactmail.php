<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\File;
use Illuminate\Queue\SerializesModels;

class Contactmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $location='uploads/CSV';
        //dd($filename);
        $filepath=public_path($location);

        $files=File::files($filepath);
        return $this->markdown('Email.contact')
        ->attach($files[0], [
            'as' => 'report.csv',
            'mime' => 'application/csv',
        ]);;
    }
}
