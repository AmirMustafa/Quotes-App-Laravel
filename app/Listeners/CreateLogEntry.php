<?php

namespace App\Listeners;

use App\Events\QuoteCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\QuoteLog;

class CreateLogEntry
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  QuoteCreated  $event
     * @return void
     */
    public function handle(QuoteCreated $event)   //automatically seeding the events fired
    {
        $author = $event->author_name;                 //Storing author passed in quotes
        $log_entry = new QuoteLog();              //creating object instance
        $log_entry->author = $author;             //saving author value in author property of log_entry
        $log_entry->save();                       //save function to run above 
    }
}
