<?php

namespace App\Listeners;

use App\Events\QuoteCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;       //Mail Facade must be included in order to use it

class SendUserNotification
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
    public function handle(QuoteCreated $event)
    {
        $author = $event->author_name;
        $email = $event->author_email;

        //Mail Facade is used, inside email folder in view usernotification.blade.php is there from where content of the mail is served

        Mail::send('email.user_notification', ['name' => $author], function($message) use($email, $author) {    // in the "use" function write all the variables using 
            $message->from('amirengg15@gmail.com', 'Amir Mustafa');     //From part of Mail
            $message->to($email, $author);                              //to part of Mail
            $message->subject('Thank You for your Quote!');             //Subject part of Mail
        });
    }
}
