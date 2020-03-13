<?php
namespace App\Services;

use App\Repositories\Interfaces\ElementInterface;
use GuzzleHttp\Client;

class ElementService
{

    protected $elementRepository;

    protected $client;

    protected $apiUrl;

    protected $header;

    public function __construct(ElementInterface $elementRepository, Client $client)
    {
        $this->elementRepository = $elementRepository;
        $this->client = $client;

        $this->header = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];

    }

    public function storeFetchedElements(object $fetchedElements) {
        if ($fetchedElements) {
            foreach ($fetchedElements->elements AS $element) {
                $this->elementRepository->saveFetchedElements($element);
            }
            return true;

        } else {
            return false;
        }

    }

    public function fetchElementsGuzzle() {
        // There's an issue with the way Guzzle handles the request. The response body gets null via Guzzle but
        // has a value when the endpoint is accessed via Postman. It might have something to do with the URL.
        $res = $this->client->request('GET', 'https://fantasy.premierleague.com/api/bootstrap-static/', [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ]);

        $statusCode = $res->getStatusCode();
        $header = $res->getHeader('content-type')[0];
        $body = $res->getBody();
        
        // I will use file_get_contents for now
        $body = file_get_contents('https://fantasy.premierleague.com/api/bootstrap-static/');
        return json_decode($body);
    }
}