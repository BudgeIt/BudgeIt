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
  Scenario: Guests see a "Register" link
    Given I am a guest
    When I am on the homepage
    Then I should see "Register" in the "a.register" element
  Scenario: Register button goes to /auth/register
    Given I am a guest
    And I am on the homepage
    When I follow "Register"
    Then the url should match "/auth/register"
