<?php

namespace App\Services;

use GuzzleHttp\Client;

class FirebaseService
{
    protected $client;
    protected $firebaseUrl;
    protected $firebaseToken;

    public function __construct()
    {
        $this->client = new Client();
        $this->firebaseUrl = env('FIREBASE_URL');
        $this->firebaseToken = env('FIREBASE_AUTH_TOKEN');
    }

    public function getData(string $path)
    {
        try {
            // $response = $this->client->get("{$this->firebaseUrl}/{$path}.json");

            $response = $this->client->get("{$this->firebaseUrl}/{$path}.json", [
                'query' => ['auth' => $this->firebaseToken]
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function deleteData(string $path)
    {
        try {
            // $response = $this->client->delete("{$this->firebaseUrl}/{$path}.json");

            $response = $this->client->delete("{$this->firebaseUrl}/{$path}.json", [
                'query' => ['auth' => $this->firebaseToken]
            ]);

            if ($response->getStatusCode() === 200) {
                return ['success' => true];
            }
            return ['error' => 'Failed to delete data from Firebase'];
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
