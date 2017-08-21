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

namespace Lisk\Cli\Blocks;


use Lisk\Api\Loader\BlockStatusResponse;
use Lisk\Cli\AbstractCliAction;
use Lisk\Cli\Parameters;
use Lisk\Client;

class GetBlocks extends AbstractCliAction
{

    private $totalFee;
    private $totalAmount;
    private $previousBlock;
    private $height;
    private $generatorPublicKey;
    private $limit;
    private $offset;
    private $orderBy;

    /**
     * Get Account Information
     *
     * Request information about an account.
     *
     * @param Client $client
     * @param array $args
     * @return BlockStatusResponse
     */
    public function call(Client $client, array $args)
    {
        return call_user_func_array([$client, 'getBlocks'], $this->getArguments($args));
    }

    public function setRequiredArguments()
    {
        $this->requiredArguments = [

        ];
    }

    protected function checkRequirements($args)
    {
        parent::checkRequirements($args);
        if (empty($args)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "'getBlocks' requires at least one parameter. Options: '%s'",
                    implode(",", $this->optionalArguments)
                )
            );
        }
    }

    protected function setOptionalArguments()
    {
        $this->optionalArguments = [
            Parameters::TOTALFEE,
            Parameters::TOTALAMOUNT,
            Parameters::PREVIOUSBLOCK,
            Parameters::HEIGHT,
            Parameters::GENERATORPUBLICKEY,
            Parameters::LIMIT,
            Parameters::OFFSET,
            Parameters::ORDERBY
        ];
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
     * @return GetBlocks
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
     * @return GetBlocks
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
     * @return GetBlocks
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
     * @return GetBlocks
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
     * @return GetBlocks
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
     * @return GetBlocks
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
     * @return GetBlocks
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
     * @return GetBlocks
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }


}