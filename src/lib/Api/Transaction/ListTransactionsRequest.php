<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 18:34
 */

namespace Lisk\Api\Transaction;

use Lisk\AbstractRequest;
use Lisk\Cli\Parameters;


class ListTransactionsRequest extends AbstractRequest
{
    private $blockId;
    private $senderId;
    private $recipientId;
    private $limit;
    private $offset;
    private $orderBy;

    function setEndpoint()
    {
        $this->endpoint = "/api/transactions";
    }

    public function getPayload()
    {
        $params = [];

        //do a bit of transformation to support AND condition.
        if ($this->blockId !== null) {
            if (strpos($this->blockId, "AND:") === 0) {
                $params["AND:" . Parameters::BLOCKID] = substr($this->blockId, 4);
            } else {
                $params[Parameters::BLOCKID] = $this->blockId;
            }
        }


        if ($this->senderId !== null) {
            if (strpos($this->senderId, "AND:") === 0) {
                $params["AND:" . Parameters::SENDERID] = substr($this->senderId, 4);
            } else {
                $params[Parameters::SENDERID] = $this->senderId;
            }

        }
        if ($this->recipientId !== null) {
            if (strpos($this->recipientId, "AND:") === 0) {
                $params["AND:" . Parameters::RECIPIENTID] = substr($this->recipientId, 4);
            } else {
                $params[Parameters::RECIPIENTID] = $this->recipientId;
            }
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
    public function getBlockId()
    {
        return $this->blockId;
    }

    /**
     * @param mixed $blockId
     * @return ListTransactionsRequest
     */
    public function setBlockId($blockId)
    {
        $this->blockId = $blockId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * @param mixed $senderId
     * @return ListTransactionsRequest
     */
    public function setSenderId($senderId)
    {
        $this->senderId = $senderId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * @param mixed $recipientId
     * @return ListTransactionsRequest
     */
    public function setRecipientId($recipientId)
    {
        $this->recipientId = $recipientId;
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
     * @return ListTransactionsRequest
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
     * @return ListTransactionsRequest
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
     * @return ListTransactionsRequest
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }


}