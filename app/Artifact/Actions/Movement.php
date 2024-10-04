<?php

namespace App\Artifact\Actions;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Movement
{
    private $client;
    private $server;
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->client = new Client();
        $this->server = config('artifact.server');
    }

    public function goTo($character, $body)
    {
        $url = $this->server . '/my/' . $character . '/action/move';

        try {
            $response = $this->client->post($url, [
                'headers' => config('artifact.headers'),
                'json' => $body
            ]);

            $data = json_decode($response->getBody(), true);
            return $data;
        } catch (RequestException $e) {
            return [
                'error' => $e->getMessage(),
                'response' => $e->hasResponse() ? $e->getResponse()->getBody()->getContents() : null
            ];
        }

        return $url;
    }

}
