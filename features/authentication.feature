Feature: Authentication
  In order to secure user data
  As a developer
  I want to ensure authentication behaves as expected

  Scenario: Guests see a "Log In" link
    Given I am a guest
    When I am on the homepage
    Then I should see "Log In" in the "a.log-in" element

  Scenario: Log In button goes to /auth/login
    Given I am a guest
    And I am on the homepage
    When I follow "Log In"
    Then the url should match "/auth/login"
    And I should see a "form#log-in" element

  Scenario: Guests see a "Register" link
    Given I am a guest
    When I am on the homepage
    Then I should see "Register" in the "a.register" element

  Scenario: Register button goes to /auth/register
    Given I am a guest
    And I am on the homepage
    When I follow "Register"
    Then the url should match "/auth/register"
    And I should see a "form#register" element

  Scenario: Register form creates user, logs me in, redirects to home
    Given I am a guest
    And A user "john.doe@example.com" does not exist
    And I am on "/auth/register"
    When I fill in the following:
      | name                  | John Doe             |
      | email                 | john.doe@example.com |
      | password              | Password1            |
      | password_confirmation | Password1            |
    And I press "Register"
    Then I should be on the homepage
    And A user "john.doe@example.com" should exist
    And I should be logged in as "john.doe@example.com"
