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

namespace Lisk\Model;


use Lisk\Cli\Parameters;

class Block
{
    private $id;
    private $version;
    private $timestamp;
    private $height;
    private $previousBlock;
    private $numberOfTransactions;
    private $totalAmount;
    private $totalFee;
    private $reward;
    private $payloadLength;
    private $payloadHash;
    private $generatorPublicKey;
    private $generatorId;
    private $blockSignature;
    private $confirmations;
    private $totalForged;

    public function fromArray($values)
    {
        $this->setId($values[Parameters::ID]);
        $this->setVersion($values[Parameters::VERSION]);
        $this->setTimestamp($values[Parameters::TIMESTAMP]);
        $this->setHeight($values[Parameters::HEIGHT]);
        $this->setPreviousBlock($values[Parameters::PREVIOUSBLOCK]);
        $this->setNumberOfTransactions($values[Parameters::NUMBEROFTRANSACTIONS]);
        $this->setTotalAmount($values[Parameters::TOTALAMOUNT]);
        $this->setTotalFee($values[Parameters::TOTALFEE]);
        $this->setReward($values[Parameters::REWARD]);
        $this->setPayloadLength($values[Parameters::PAYLOADLENGTH]);
        $this->setPayloadHash($values[Parameters::PAYLOADHASH]);
        $this->setGeneratorPublicKey($values[Parameters::GENERATORPUBLICKEY]);
        $this->setGeneratorId($values[Parameters::GENERATORID]);
        $this->setBlockSignature($values[Parameters::BLOCKSIGNATURE]);
        $this->setConfirmations($values[Parameters::CONFIRMATIONS]);
        $this->setTotalForged($values[Parameters::TOTALFORGED]);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
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
     */
    public function setHeight($height)
    {
        $this->height = $height;
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
     */
    public function setPreviousBlock($previousBlock)
    {
        $this->previousBlock = $previousBlock;
    }

    /**
     * @return mixed
     */
    public function getNumberOfTransactions()
    {
        return $this->numberOfTransactions;
    }

    /**
     * @param mixed $numberOfTransactions
     */
    public function setNumberOfTransactions($numberOfTransactions)
    {
        $this->numberOfTransactions = $numberOfTransactions;
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
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
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
     */
    public function setTotalFee($totalFee)
    {
        $this->totalFee = $totalFee;
    }

    /**
     * @return mixed
     */
    public function getReward()
    {
        return $this->reward;
    }

    /**
     * @param mixed $reward
     */
    public function setReward($reward)
    {
        $this->reward = $reward;
    }

    /**
     * @return mixed
     */
    public function getPayloadLength()
    {
        return $this->payloadLength;
    }

    /**
     * @param mixed $payloadLength
     */
    public function setPayloadLength($payloadLength)
    {
        $this->payloadLength = $payloadLength;
    }

    /**
     * @return mixed
     */
    public function getPayloadHash()
    {
        return $this->payloadHash;
    }

    /**
     * @param mixed $payloadHash
     */
    public function setPayloadHash($payloadHash)
    {
        $this->payloadHash = $payloadHash;
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
     */
    public function setGeneratorPublicKey($generatorPublicKey)
    {
        $this->generatorPublicKey = $generatorPublicKey;
    }

    /**
     * @return mixed
     */
    public function getGeneratorId()
    {
        return $this->generatorId;
    }

    /**
     * @param mixed $generatorId
     */
    public function setGeneratorId($generatorId)
    {
        $this->generatorId = $generatorId;
    }

    /**
     * @return mixed
     */
    public function getBlockSignature()
    {
        return $this->blockSignature;
    }

    /**
     * @param mixed $blockSignature
     */
    public function setBlockSignature($blockSignature)
    {
        $this->blockSignature = $blockSignature;
    }

    /**
     * @return mixed
     */
    public function getConfirmations()
    {
        return $this->confirmations;
    }

    /**
     * @param mixed $confirmations
     */
    public function setConfirmations($confirmations)
    {
        $this->confirmations = $confirmations;
    }

    /**
     * @return mixed
     */
    public function getTotalForged()
    {
        return $this->totalForged;
    }

    /**
     * @param mixed $totalForged
     */
    public function setTotalForged($totalForged)
    {
        $this->totalForged = $totalForged;
    }

}