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

namespace Lisk\Cli;


class Parameters
{
    const ADDRESS = 'address';
    const SECRET = 'secret';
    const SECOND_SECRET = 'secondSecret';
    const SENDER_PUBLIC_KEY = 'publicKey';
    const VOTE_DELEGATES = 'delegates';

    const BLOCKID = 'blockId';
    const SENDERID = 'senderId';
    const RECIPIENTID = 'recipientId';
    const ID = 'id';
    const APPLICATIONID = 'id';

    const LIMIT = 'limit';
    const OFFSET = 'offset';
    const ORDERBY = 'orderBy';

    const AMOUNT = 'amount';

    const STATE = 'state';
    const OS = 'os';
    const VERSION = 'version';

    const IP = 'ip';
    const PORT = 'port';

    const FORGED_START = 'start';
    const FORGED_END = 'end';

    const TOTALFEE = 'totalFee';
    const TOTALAMOUNT = 'totalAmount';
    const PREVIOUSBLOCK = 'previousBlock';
    const GENERATORPUBLICKEY = 'generatorPublicKey';
    const HEIGHT = 'height';
    const TIMESTAMP = 'timestamp';
    const NUMBEROFTRANSACTIONS = 'numberOfTransactions';
    const REWARD = 'reward';

    const PAYLOADLENGTH = 'payloadLength';
    const PAYLOADHASH = 'payloadHash';
    const GENERATORID = 'generatorId';
    const BLOCKSIGNATURE = 'blockSignature';
    const CONFIRMATIONS = 'confirmations';
    const TOTALFORGED = 'totalForged';

    const DELEGATE_USERNAME = 'username';

    const START = 'start';
    const END = 'end';

    const CATEGORY = 'category';
    const NAME = 'name';
    const DESCRIPTION = 'description';
    const TAGS = 'tags';
    const TYPE = 'type';
    const LINK = 'link';
    const ICON = 'icon';

    const SEARCHCRITERIA = 'q';
    const INSTALLED = 'installed';

    const PARAMS = 'params';

    const LIFETIME = 'lifetime';
    const MINSIGNATURES = 'min';
    const KEYSGROUP = 'keysgroup';

    const TRANSACTIONID = 'transactionId';

    public static $descriptions = [
        self::ADDRESS => "Address of account",
        self::SECRET => "Secret key of account",
        self::SECOND_SECRET => "Secret key from second transaction, required if user uses second signature",
        self::SENDER_PUBLIC_KEY => "Public key of sender account, to verify secret passphrase in wallet.",
        self::VOTE_DELEGATES => "Array of string in the following format: [\"+DelegatePublicKey\"] OR [\"-DelegatePublicKey\"]. Use + to UPvote, - to DOWNvote.",
        self::BLOCKID => "Block id of transaction. (String)",
        self::SENDERID => "Sender address of transaction. (String)",
        self::RECIPIENTID => "Recipient of transaction. (String)",
        self::LIMIT => "Limit of transaction to send in response. Default is 20. (Number)",
        self::OFFSET => "Offset to load. (Integer number)",
        self::ORDERBY => "Name of column to order. After column name must go \"desc\" or \"asc\" to choose order type. Example: orderBy=timestamp:desc (String)",
        self::AMOUNT => "Amount of transaction * 10^8. Example: to send 1.1234 LISK, use 112340000 as amount",
        self::ID => "transaction Id: String of transaction (String)",
        self::STATE => "State of peer. 1 - disconnected. 2 - connected. 0 - banned. (Integer)",
        self::OS => "OS of peer. (String)",
        self::VERSION => "Version of peer. (String)",
        self::IP => "Ip of peer. (String); ",
        self::PORT => "Port of peer. (Integer)",
        self::TOTALFEE => 'total fee of block. (Integer)',
        self::TOTALAMOUNT => 'total amount of block. (Integer)',
        self::PREVIOUSBLOCK => 'previous block of need block. (String)',
        self::GENERATORPUBLICKEY => 'generator id of block in hex. (String)',
        self::HEIGHT => 'height of block. (Integer)',
        self::TIMESTAMP => 'Timestamp of block. Integer',
        self::REWARD => 'Reward block. Integer',
        self::PAYLOADLENGTH => 'Payload length of block. Integer',
        self::PAYLOADHASH => 'Payload hash of block. Integer',
        self::GENERATORID => 'Generator public key. Hex',
        self::BLOCKSIGNATURE => 'Block signature. Hex',
        self::CONFIRMATIONS => 'Block confirmations. Integer',
        self::TOTALFORGED => 'Total block forged. Integer',
        self::DELEGATE_USERNAME => 'Username of delegate. String from 1 to 20 characters.',
        self::START => 'Sets the start time of the search - timestamp UNIX time. (String)',
        self::END => 'Sets the endtime of the search - timestamp UNIX time. (String)',
        self::CATEGORY => 'DApp category. Integer. Required',
        self::NAME => 'DApp name. String. Required',
        self::DESCRIPTION => 'DApp description. String. Optional',
        self::TAGS => 'DApp tags. String. Optional',
        self::TYPE => 'DApp type. Integer. Required (Only type 0 is currently supported)',
        self::LINK => 'Link to DApp file. ZIP supported. String. Required',
        self::ICON => 'Link to icon file. PNG and JPG/JPEG supported. String. Optional',
        self::SEARCHCRITERIA => 'Search criteria. (String)',
        self::INSTALLED => 'Search installed apps only. 1 or 0. (Integer)',
        self::APPLICATIONID => 'Blockchain Application id to install',
        self::PARAMS => 'dapp launch params, not required, array',
        self::LIFETIME => 'request lifetime in hours (1-72). required.',
        self::MINSIGNATURES => 'minimum signatures needed to approve a tx or a change (1-16). integer. required',
        self::KEYSGROUP => '[array of public keys strings]. add \'+\' before publicKey to add an account. required. immutable.',
        self::TRANSACTIONID => 'id of transaction to sign. REQUIRED',
        self::FORGED_START => 'Sets the start time of the search - timestamp UNIX time. (String)',
        self::FORGED_END => 'Sets the endtime of the search - timestamp UNIX time. (String)'
    ];
}