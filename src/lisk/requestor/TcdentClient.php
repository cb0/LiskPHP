<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:02
 */

namespace Lisk\Requestor;

use Lisk\AbstractRequest;
use Lisk\Error;
use RestClient;

class TcdentClient
{
    private $client = null;
    private $baseUrl = null;

    public function __construct($baseUrl, $headers = [], $format = "")
    {
        $this->baseUrl = $baseUrl;
        $this->client = new RestClient([
            'base_url' => $baseUrl,
            'format' => $format,
            'headers' => $headers,
        ]);
        $this->client->register_decoder('json', function ($data) {
            return json_decode($data, true);
        });
    }


    public function get($url, $payload = [])
    {
        $result = $this->client->get($url, $payload);
        if ($result->info->http_code == 200) {
            return $result->decode_response();
        } else {
            throw new Error($result->error);
        }
    }

    public function setOptions($key, $value)
    {
        $this->client->set_option($key, $value);
    }

    /**
     * @param AbstractRequest $request
     * @return mixed|Error
     * @throws Error
     * @throws \Exception
     */
    public function query(AbstractRequest $request)
    {
        $payload = $request->getPayload();
        $result = null;
        switch ($request->getType()) {
            case AbstractRequest::GET:
                $result = $this->client->get($request->getEndpoint(), $payload);
                break;
            case AbstractRequest::POST:
                $result = $this->client->post($request->getEndpoint(), $payload);
                break;
            case AbstractRequest::PUT:
                //ToDo: Use client here
                $data_string = json_encode($payload);
                $ch = curl_init();
                $endpoint = $this->baseUrl .  $request->getEndpoint();
                curl_setopt($ch, CURLOPT_URL, $endpoint);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result  = curl_exec($ch);
                curl_close($ch);
                return json_decode($result, true);
                break;
            default:
                throw new \Exception("Unknown method");
                break;
        }
        if ($result && $result->info->http_code == 200) {
            return $result->decode_response();
        } else {
            var_dump($result);
        }
    }
}