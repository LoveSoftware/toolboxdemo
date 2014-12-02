Feature: As a customer I want to store UUIDs so I can uniquely identify things

  Scenario: As a customer I want to create a new UUID
    When I create a UUID
    Then the response should contain a uuid

  Scenario: As a customer I want to retrieve a list of all UUIDs
    When I get a list of UUIDS
    Then the response should contain a list of UUIDs