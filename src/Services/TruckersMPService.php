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

    /**
     * Get data for a TruckersMP player using their Steam ID.
     */
    public function getPlayerInfo(string $steamId): object
    {
        $response = $this->client->get("https://api.truckersmp.com/v2/player/{$steamId}");
        return json_decode($response->getBody()->getContents());
    }

    /**
     * Get VTC information by its ID.
     */
    public function getVtc(int $vtcId): object
    {
        $response = $this->client->get("https://api.truckersmp.com/v2/vtc/{$vtcId}");
        return json_decode($response->getBody()->getContents());
    }

    /**
     * Get members of a VTC.
     */
    public function getVtcMembers(int $vtcId): object
    {
        $response = $this->client->get("https://api.truckersmp.com/v2/vtc/{$vtcId}/members");
        return json_decode($response->getBody()->getContents());
    }

    /**
     * Get events by VTC ID (optional).
     */
    public function getVtcEvents(int $vtcId): object
    {
        $response = $this->client->get("https://api.truckersmp.com/v2/vtc/{$vtcId}/events");
        return json_decode($response->getBody()->getContents());
    }
}

