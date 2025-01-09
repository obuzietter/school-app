<?php

namespace App\Services;

use GuzzleHttp\Client;

class FirebaseService
{
    protected $client;
    protected $firebaseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->firebaseUrl = env('FIREBASE_URL');
    }

    public function getData(string $path)
    {
        try {
            $response = $this->client->get("{$this->firebaseUrl}/{$path}.json");
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function deleteData(string $path)
    {
        try {
            $response = $this->client->delete("{$this->firebaseUrl}/{$path}.json");
            if ($response->getStatusCode() === 200) {
                return ['success' => true];
            }
            return ['error' => 'Failed to delete data from Firebase'];
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
