<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $params;

    public function __construct($params)
    {
        //
        // $this->from=[
        //     ['address' => 'contact@upcompany.co', 'name' => 'Upcompany']
        // ];
        $this->subject="Upcompany Site Web - ".$params['subject'];
        $this->replyTo=[
            ['address' =>$params['email'], 'name' =>$params['name']]
        ];
        $this->params=$params;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $data=$this->params;
        return $this->view('admin.email.contact-mail')
                    ->with([
                        'name' => $data['name'],
                        'email' =>$data['email'],
                        'telephone' => $data['phone'],
                        'subject' => $data['subject'],
                        'msg' => $data['message']
                     ]);
    }
}
