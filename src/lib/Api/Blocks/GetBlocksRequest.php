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
 */namespace Lisk\Api\Blocks;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;

class GetBlocksRequest extends AbstractRequest
{


    private $totalFee;
    private $totalAmount;
    private $previousBlock;
    private $height;
    private $generatorPublicKey;
    private $limit;
    private $offset;
    private $orderBy;

    public function setEndpoint()
    {
        $this->endpoint = "/api/blocks";
    }

    public function getPayload()
    {
        $params = [];

        if ($this->totalFee !== null) {
            $params[Parameters::TOTALFEE] = $this->totalFee;
        }
        if ($this->totalAmount !== null) {
            $params[Parameters::TOTALAMOUNT] = $this->totalAmount;
        }
        if ($this->previousBlock !== null) {
            $params[Parameters::PREVIOUSBLOCK] = $this->previousBlock;
        }
        if ($this->height !== null) {
            $params[Parameters::HEIGHT] = $this->height;
        }
        if ($this->generatorPublicKey !== null) {
            $params[Parameters::GENERATORPUBLICKEY] = $this->generatorPublicKey;
        }
        if ($this->limit !== null) {
            $params[Parameters::LIMIT] = $this->limit;
        }
        if ($this->offset !== null) {
            $params[Parameters::OFFSET] = $this->offset;
        }
        if ($this->orderBy !== null) {
            $params[Parameters::ORDERBY] = $this->orderBy;
        }

        return $params;
    }

    public function setType()
    {
        $this->type = self::GET;
    }

    /**
     * @return mixed
     */
    public function getTotalFee()
    {
        return $this->totalFee;
    }

    /**
     * @param mixed $totalFee
     * @return GetBlocksRequest
     */
    public function setTotalFee($totalFee)
    {
        $this->totalFee = $totalFee;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param mixed $totalAmount
     * @return GetBlocksRequest
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPreviousBlock()
    {
        return $this->previousBlock;
    }

    /**
     * @param mixed $previousBlock
     * @return GetBlocksRequest
     */
    public function setPreviousBlock($previousBlock)
    {
        $this->previousBlock = $previousBlock;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     * @return GetBlocksRequest
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGeneratorPublicKey()
    {
        return $this->generatorPublicKey;
    }

    /**
     * @param mixed $generatorPublicKey
     * @return GetBlocksRequest
     */
    public function setGeneratorPublicKey($generatorPublicKey)
    {
        $this->generatorPublicKey = $generatorPublicKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param mixed $limit
     * @return GetBlocksRequest
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param mixed $offset
     * @return GetBlocksRequest
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param mixed $orderBy
     * @return GetBlocksRequest
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }




}