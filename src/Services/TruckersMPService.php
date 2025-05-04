<?php

namespace WoTVenxie\TruckersMPApiClient\Services;

use GuzzleHttp\Client;

class TruckersMPService
{
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getPlayer($steamId): object
    {
        $response = $this->client->get("https://api.truckersmp.com/v2/player/{$steamId}");
        return json_decode($response->getBody()->getContents());
    }

    public function getVtc($id): object
    {
        $response = $this->client->get("https://api.truckersmp.com/v2/vtc/{$id}");
        return json_decode($response->getBody()->getContents());
    }

    public function getVtcMembers($id): object
    {
        $response = $this->client->get("https://api.truckersmp.com/v2/vtc/{$id}/members");
        return json_decode($response->getBody()->getContents());
    }

    public function getEvent($eventId): object
    {
        $response = $this->client->get("https://api.truckersmp.com/v2/events/{$eventId}");
        return json_decode($response->getBody()->getContents());
    }
}

