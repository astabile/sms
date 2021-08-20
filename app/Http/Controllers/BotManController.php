<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnboardingConversation;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            $botman->startConversation(new OnboardingConversation);
        });

        $botman->listen();
    }
}
