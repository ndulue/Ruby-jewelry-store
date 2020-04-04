<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class indexSub implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Request $request)
    {
        $request->validate([
            'subscribe' => 'required|email|max:50'
        ]);

        return[
            'subscribe.required' => 'filling in your email address',
            'subscribe.email' => 'enter email address',
            'subscribe.max:' => 'Maximum of 50 characters'
        ];

        return redirect()->route('success.layout', with([
            'message' => 'Thank for subscribing to our new letter, you will be updated on our lastest product'
        ]));
    }
}
