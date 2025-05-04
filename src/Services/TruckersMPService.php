<?php

namespace WoTVenxie\TruckersMPApiClient\Services;

use GuzzleHttp\Client;

class TruckersMPService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getPlayerInfo($steamId)
    {
        $response = $this->client->get("https://api.truckersmp.com/v2/players/{$steamId}");
        return json_decode($response->getBody()->getContents());
    }
}
