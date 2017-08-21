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

    public function setEndpoint()
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

    public function setType()
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