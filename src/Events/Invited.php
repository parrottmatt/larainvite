<?php

namespace Junaidnasir\Larainvite\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Invited
{
    use Dispatchable, SerializesModels;

    public $invitation;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($invitation)
    {
        $this->invitation = $invitation;
    }
}
