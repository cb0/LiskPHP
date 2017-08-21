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

namespace Lisk\Api\Apps;

use Lisk\AbstractResponse;
use Lisk\Model\App;

class GetAppResponse extends AbstractResponse
{
    private $app;

    public function success($jsonResponse)
    {

        $app = $jsonResponse['dapp'];

        $appObj = (new App())
            ->setName($app['name'])
            ->setDescription($app['description'])
            ->setTags($app['tags'])
            ->setLink($app['link'])
            ->setType($app['type'])
            ->setCategory($app['category'])
            ->setIcon($app['icon'])
            ->setTransactionId($app['transactionId']);

        $this->apps = $appObj;
    }

    /**
     * @return mixed
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * @param mixed $app
     */
    public function setApp($app)
    {
        $this->app = $app;
    }



}