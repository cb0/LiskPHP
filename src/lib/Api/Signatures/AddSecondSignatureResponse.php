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

namespace Lisk\Api\Signatures;

use Lisk\AbstractResponse;

class AddSecondSignatureResponse extends AbstractResponse
{
    private $type;
    private $amount;
    private $senderPublicKey;
    private $requesterPublicKey;
    private $timestamp;
    private $assetPubKey;
    private $signature;
    private $publicKey;
    private $recipientId;
    private $id;
    private $fee;
    private $senderId;
    private $relays;
    private $receivedAt;

    public function success($params)
    {
        $transaction = $params['transaction'];

        $this->type = $transaction['type'];
        $this->amount = $transaction['amount'];
        $this->senderPublicKey = $transaction['senderPublicKey'];
        $this->requesterPublicKey = $transaction['requesterPublicKey'];
        $this->timestamp = $transaction['timestamp'];
        $this->assetPubKey = $transaction['assetPubKey'];
        $this->signature = $transaction['signature'];
        $this->publicKey = $transaction['publicKey'];
        $this->recipientId = $transaction['recipientId'];
        $this->id = $transaction['id'];
        $this->fee = $transaction['fee'];
        $this->senderId = $transaction['senderId'];
        $this->relays = $transaction['relays'];
        $this->receivedAt = $transaction['receivedAt'];

    }
}