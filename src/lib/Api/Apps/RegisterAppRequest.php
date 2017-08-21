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

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;


class RegisterAppRequest extends AbstractRequest
{

    private $secret;
    private $secondSecret;
    private $publicKey;
    private $category;
    private $name;
    private $description;
    private $tags;
    private $appType;
    private $link;
    private $icon;

    public function __construct($secret, $category, $name, $type = 0, $link)
    {
        parent::__construct();
        $this->secret = $secret;
        $this->category = $category;
        $this->name = $name;
        $this->appType = $type;
        $this->link = $link;
    }

    public function setEndpoint()
    {
        $this->endpoint = "/api/dapps";
    }

    public function getPayload()
    {

        $arr = [
            Parameters::SECRET => $this->secret,
            Parameters::CATEGORY => intval($this->category),
            Parameters::NAME => $this->name,
            Parameters::TYPE => intval($this->appType),
            Parameters::LINK => $this->link
        ];

        if ($this->getSecondSecret() !== null) {
            $arr[Parameters::SECOND_SECRET] = $this->secondSecret;
        }

        if ($this->getPublicKey() !== null) {
            $arr[Parameters::SENDER_PUBLIC_KEY] = $this->publicKey;
        }

        if ($this->getDescription() !== null) {
            $arr[Parameters::DESCRIPTION] = $this->description;
        }

        if ($this->getTags() !== null) {
            $arr[Parameters::TAGS] = $this->tags;
        }

        if ($this->getIcon() !== null) {
            $arr[Parameters::ICON] = $this->icon;
        }


        return $arr;
    }

    /**
     * @return mixed
     */
    public function getSecondSecret()
    {
        return $this->secondSecret;
    }

    /**
     * @param mixed $secondSecret
     */
    public function setSecondSecret($secondSecret)
    {
        $this->secondSecret = $secondSecret;
    }

    /**
     * @return mixed
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @param mixed $publicKey
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return mixed
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    public function setType()
    {
        $this->type = self::PUT;
    }

    /**
     * @return mixed
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param mixed $secret
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }


}