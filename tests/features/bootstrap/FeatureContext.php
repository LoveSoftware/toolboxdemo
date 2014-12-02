<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;



/**
 * Features context.
 */
class FeatureContext extends BehatContext
{

    /**
     * An instance of the api's client
     *
     * @var GuzzleHttp\Command\Guzzle\GuzzleClient
     */
    protected $client;

    /**
     * The last response from the api
     *
     * @var array
     */
    protected $response;

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        $this->client = \PhpToolDemo\Client::create();
    }


    /**
     * @When /^I create a UUID$/
     */
    public function iCreateAUuid()
    {
        $this->response = $this->client->createUuid();
    }

    /**
     * @Then /^the response should contain a uuid$/
     */
    public function theResponseShouldContainAUuid()
    {
        if(!isset($this->response['uuid'])) {
            throw new \Exception("No UUID in the response");
        }
    }

    /**
     * @When /^I get a list of UUIDS$/
     */
    public function iGetAListOfUuids()
    {
        $this->response = $this->client->getUuids();
    }

    /**
     * @Then /^the response should contain a list of UUIDs$/
     */
    public function theResponseShouldContainAListOfUuids()
    {
        if(!isset($this->response['uuids'])) {
            throw new \Exception('No UUIDs in the reponse');
        }
    }


}
