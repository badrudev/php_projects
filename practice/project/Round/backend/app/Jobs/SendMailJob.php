<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $mails;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mails)
    {
        $this->mails = $mails;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // foreach($this->$mails as $mail){
           
        //     \Mail::to($mail)->send(new \App\Mail\SendMail());
        // }
        foreach($this->mails as $user){
            \Mail::to($user)->send(new \App\Mail\SendMail());
        }
        // dd($this->mails[0]);
        
    }
}
