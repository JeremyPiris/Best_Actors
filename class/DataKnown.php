<?php
class DataKnown {

    private $apiKey;

    public function __construct(string $apiKey) 
    {
        $this->apiKey = $apiKey;
    }

    public function getKnown(string $actorId): ?array
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

        foreach($data['knownFor'] as $known) {
            $results[] = [
                'kf_title' => $known['fullTitle'],
                'kf_role' => $known['role'],
                'kf_image' => $known['image'],
                'kf_search' => $known['id']
            ];
        }

        curl_close($curl);
        return $results;

    }

}