<?php

namespace App\Jobs;

use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      $campagin = request()->all();
      dd($campagin);

      // $subscribers = Newsletter::all()->toArray();
      $subscriber = 'yousef.ashraf@ivas.com.eg';

      // foreach ($subscribers as $subscriber)
      // {
          \Mail::send('emails.campgain', ['campagin' => $campagin], function ($m) use($subscriber, $campagin) {
              $m->from(env('MAIL_USERNAME'), 'Eltalhy');
              $m->to($subscriber['']);
              $m->subject($campagin['name']);
          });
      // }
    }
}
