<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class UserSaved
{

    use SerializesModels;

    /**
     * @var \App\User
     */
    public $user;

    public function __construct($user)
    {
        // All dispatched model events will receive an instance
        // of the model itself. Usually, we'll just assign
        // it as a property of this event class
        $this->user = $user;
    }
}