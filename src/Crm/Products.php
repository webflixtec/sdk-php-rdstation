<?php

namespace RdStation\Crm;

class Products extends \RdStation\Core\RdStationCrm{
    
    public function list(array $query = []){
        $query['token'] = $this->getToken();
        
        try{
            $response = $this->http->get('products', [
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
}
