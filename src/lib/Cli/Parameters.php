<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 12.08.17
 * Time: 12:51
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

    const LIMIT = 'limit';
    const OFFSET = 'offset';
    const ORDERBY = 'orderBy';

    const AMOUNT = 'amount';

    const STATE = 'state';
    const OS = 'os';
    const VERSION = 'version';

    const IP = 'ip';
    const PORT = 'port';


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
        self::END => 'Sets the endtime of the search - timestamp UNIX time. (String)'
    ];
}