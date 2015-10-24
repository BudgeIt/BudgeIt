Feature: Authentication
  In order to secure user data
  As a developer
  I want to ensure authentication behaves as expected

  Scenario: Guests see a "Log In" link
    Given I am a guest
    When I am on the homepage
    Then I should see an "a.log-in" element
    And I should see "Log In" in the "a.log-in" element
