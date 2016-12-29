<?php
namespace Rob2022\UkBankHolidays;

use GuzzleHttp\Client as GuzzleClient;
use stdClass;

class Retriever
{
    /**
     * @var GuzzleClient
     */
    private $guzzle;

    /**
     * @var string
     */
    private $jsonUrl;

    /**
     * @param \GuzzleHttp\Client $guzzleClient
     * @param string|null $jsonUrl
     */
    public function __construct(GuzzleClient $guzzleClient, string $jsonUrl = null)
    {
        $this->jsonUrl = !empty($jsonUrl) ? $jsonUrl : 'https://www.gov.uk/bank-holidays.json';
        $this->guzzle = $guzzleClient;
    }

    /**
     * @return \stdClass
     */
    public function retrieve():stdClass
    {
        $request = $this->guzzle->get($this->jsonUrl);

        return json_decode($request->getBody());
    }
}