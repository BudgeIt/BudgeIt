<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;
use Laracasts\Behat\Context\Migrator;

class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{

    use Migrator;

    /**
     * @Given I am a guest
     */
    public function iAmAGuest()
    {
        if(\Auth::check()){
            \Auth::logout();
        }
    }

}
