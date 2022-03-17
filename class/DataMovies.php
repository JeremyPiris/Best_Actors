<?php
class DataMovies {

    private $apiKey;

    public function __construct(string $apiKey) 
    {
        $this->apiKey = $apiKey;
    }

    public function getFilmo(string $actorId): ?array
    {
        $curl = curl_init("https://imdb-api.com/fr/API/Name/{$this->apiKey}/{$actorId}");

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_TIMEOUT         => 1
        ]);

        $data = curl_exec($curl);
        if ($data === false || curl_getinfo($curl, CURLINFO_HTTP_CODE !== 200)) {
            return null;
        } 

        $data = json_decode($data, true);

        foreach($data['castMovies'] as $movie) {
            $results[] = [
                'filmoid' => $movie['id'],
                'filmotitle' => $movie['title'],
                'filmoyear' => $movie['year'],
                'filmojob' => $movie['role']
            ];
        }

        curl_close($curl);
        return $results;

    }

}