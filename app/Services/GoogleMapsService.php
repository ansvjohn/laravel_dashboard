<?php

namespace App\Services;

use GuzzleHttp\Client;

class GoogleMapsService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://maps.googleapis.com/maps/api/',
            'timeout' => 5.0,
        ]);
    }

    public function geocode($address)
    {
        $response = $this->client->get('geocode/json', [
            'query' => [
                'address' => $address,
                'key' => env('GOOGLE_MAPS_API_KEY'),
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
