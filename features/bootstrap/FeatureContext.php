<?php

use App\User;
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
        if (Auth::check()) {
            Auth::logout();
        }
    }

    /**
     * @Given A user :email does not exist
     */
    public function aUserDoesNotExist($email)
    {
        $user = User::where('email', $email)->first();
        if ($user) {
            $user->delete();
        }
    }

    /**
     * @Then A user :email should exist
     */
    public function aUserShouldExist($email)
    {
        $user = User::where('email', $email)->first();
        PHPUnit_Framework_Assert::assertNotEmpty($user);
        PHPUnit_Framework_Assert::assertEquals($email, $user->email);
    }

    /**
     * @Then I should be logged in as :email
     */
    public function iShouldBeLoggedInAs($email)
    {
        $logged_in = Auth::user();
        PHPUnit_Framework_Assert::assertNotEmpty($logged_in);
        PHPUnit_Framework_Assert::assertEquals($email, $logged_in->email);
    }

}
