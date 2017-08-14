<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Blocks;

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

    function setEndpoint()
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

    function setType()
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