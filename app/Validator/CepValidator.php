<?php

namespace App\Validator;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class CepValidator implements ValidatorInterface


{

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function validate($attribute, $value, $parameters, $validator)
    {
        $cepUrl = "http://viacep.com.br/ws/{$value}/json/";
    
        try{
        
            $response = $this->client->request('GET', $cepUrl);
            $content = json_decode($response->getBody(), true);
            return isset($content['erro']) ? false:true;

        }catch(ClientException $e){
            return false;
        }

    }
}