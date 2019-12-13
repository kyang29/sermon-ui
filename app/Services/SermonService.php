<?php

namespace App\Services;

use GuzzleHttp\Client;

class SermonService {

    public function getSermons($page, $take){
        $client = new Client();
        $getSermonsUrl = env('API_URL') . '/Sermons/List';
        $sermonQuery = $client->get($getSermonsUrl,
                            ['query' => [
                                'page' => $page,
                                'take' => $take
                            ]]);
        $sermons = json_decode($sermonQuery->getBody(), true);
        return $sermons;
    }

}
