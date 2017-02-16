<?php

namespace Restvel\Base\Composer;

use Composer\Script\Event;
use Illuminate\Foundation\ComposerScripts;

class Script extends ComposerScripts
{
    /**
     * Handle the pre-install Composer event.
     *
     * @param  \Composer\Script\Event  $event
     * @return void
     */
    public static function preInstall(Event $event)
    {
        //
    }
}
