<?php

namespace RdStation\Crm;

class Deals extends \RdStation\Core\RdStationCrm{
    
    public function list(array $query = []){
        $query['token'] = $this->getToken();
        
        try{
            $response = $this->http->get('deals', [
                "query" => $query,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (\GuzzleHttp\Exception\ServerException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
                        
        } catch (\GuzzleHttp\Exception\ClientException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\GuzzleHttp\Exception\RequestException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\Exception $ex) {
            throw new \RdStation\Exceptions\RdStationException($ex);
        }
    }
    
    public function create(array $body){
        try{
            $response = $this->http->post('deals', [
                "query" => [
                    'token' => $this->getToken(),
                ],
                'json' => $body,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (\GuzzleHttp\Exception\ServerException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
                        
        } catch (\GuzzleHttp\Exception\ClientException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\GuzzleHttp\Exception\RequestException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\Exception $ex) {
            throw new \RdStation\Exceptions\RdStationException($ex);
        }
    }
    
    public function update($id, array $body){
        try{
            $response = $this->http->put(sprintf('deals/%s', $id), [
                "query" => [
                    'token' => $this->getToken(),
                ],
                'json' => $body,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (\GuzzleHttp\Exception\ServerException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
                        
        } catch (\GuzzleHttp\Exception\ClientException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\GuzzleHttp\Exception\RequestException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\Exception $ex) {
            throw new \RdStation\Exceptions\RdStationException($ex);
        }
    }
    
    public function details($id){
        try{
            $response = $this->http->get(sprintf('deals/%s', $id), [
                "query" => [
                    'token' => $this->getToken(),
                ],
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (\GuzzleHttp\Exception\ServerException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
                        
        } catch (\GuzzleHttp\Exception\ClientException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\GuzzleHttp\Exception\RequestException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\Exception $ex) {
            throw new \RdStation\Exceptions\RdStationException($ex);
        }
    }
    
    public function createProduct($id, array $body){
        try{
            $response = $this->http->post(sprintf('deals/%s/deal_products', $id), [
                "query" => [
                    'token' => $this->getToken(),
                ],
                'json' => $body,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (\GuzzleHttp\Exception\ServerException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
                        
        } catch (\GuzzleHttp\Exception\ClientException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\GuzzleHttp\Exception\RequestException $ex) {
            
            throw \RdStation\Exceptions\RdStationException::fromGuzzleException($ex);
            
        } catch (\Exception $ex) {
            throw new \RdStation\Exceptions\RdStationException($ex);
        }
    }
}
