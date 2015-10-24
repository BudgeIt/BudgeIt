Feature: Authentication
  In order to secure user data
  As a developer
  I want to ensure authentication behaves as expected

  Scenario: Guests see a "Log In" link
    Given I am a guest
    When I am on the homepage
    Then I should see "Log In" in the "a.log-in" element

  Scenario: Guests see a "Register" link
    Given I am a guest
    When I am on the homepage
    Then I should see "Register" in the "a.register" element
