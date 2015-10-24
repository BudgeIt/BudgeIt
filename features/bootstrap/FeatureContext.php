<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{

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
