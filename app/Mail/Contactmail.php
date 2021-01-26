<?php

namespace App\Mail;

use App\Models\Admin\Report;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\Admin\Catogery as Catogerylist;
//use Barryvdh\DomPDF\PDF as PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\File;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

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
        $locations='uploads/PDF';
        $data=Catogerylist::all();
        //$pdf = PDF::loadView('Admin.catogery.view',$data);
//dd($pdf->output());
        //$pdffile=Storage::put($locations,$pdf->output());
       // $pdffile=Storage::put('public/pdf/invoice.pdf', $pdf->output());

         //$pdffile=$pdf->move( $location, $pdf->output());
        //$pdf = PDF::loadView('pdf_view', $data);

        //dd($filename);
        $filepath=public_path($location);

        $files=File::files($filepath);
        return $this->markdown('Email.contact')
        ->attach($files[4], [
            'as' => 'report.csv',
            'mime' => 'application/csv',
        ]);;
    }
}
