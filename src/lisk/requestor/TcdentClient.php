<?php
/**
 * LiskPhp - A PHP wrapper for the LISK API
 * Copyright (c) 2017  Marcus Puchalla <cb0@0xcb0.com>
 *
 * LiskPhp is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * LiskPhp is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with LiskPhp.  If not, see <http://www.gnu.org/licenses/>.
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