<?php
/**
 * Created by PhpStorm.
 * User: cb0
 * Date: 09.07.17
 * Time: 17:27
 */

namespace Lisk;


use Lisk\Api\Account\BalanceRequest;
use Lisk\Api\Account\BalanceResponse;
use Lisk\Api\Account\DelegatesRequest;
use Lisk\Api\Account\DelegatesResponse;
use Lisk\Api\Account\GeneratePublicKeyRequest;
use Lisk\Api\Account\GeneratePublicKeyResponse;
use Lisk\Api\Account\GetPublicKeyRequest;
use Lisk\Api\Account\GetPublicKeyResponse;
use Lisk\Api\Account\OpenRequest;
use Lisk\Api\Account\OpenResponse;
use Lisk\Api\Account\VoteDelegatesRequest;
use Lisk\Api\Account\VoteDelegatesResponse;
use Lisk\Api\Blocks\GetBlockchainFeeRequest;
use Lisk\Api\Blocks\GetBlockchainFeeResponse;
use Lisk\Api\Blocks\GetBlockchainFeesRequest;
use Lisk\Api\Blocks\GetBlockchainFeesResponse;
use Lisk\Api\Blocks\GetBlockchainHeightRequest;
use Lisk\Api\Blocks\GetBlockchainHeightResponse;
use Lisk\Api\Blocks\GetBlockchainMilestoneRequest;
use Lisk\Api\Blocks\GetBlockchainMilestoneResponse;
use Lisk\Api\Blocks\GetBlockchainNethashRequest;
use Lisk\Api\Blocks\GetBlockchainNethashResponse;
use Lisk\Api\Blocks\GetBlockchainRewardRequest;
use Lisk\Api\Blocks\GetBlockchainRewardResponse;
use Lisk\Api\Blocks\GetBlockRequest;
use Lisk\Api\Blocks\GetBlockResponse;
use Lisk\Api\Blocks\GetBlocksRequest;
use Lisk\Api\Blocks\GetBlocksResponse;
use Lisk\Api\Blocks\GetStatusInfoRequest;
use Lisk\Api\Blocks\GetStatusInfoResponse;
use Lisk\Api\Blocks\GetTotalSupplyRequest;
use Lisk\Api\Blocks\GetTotalSupplyResponse;
use Lisk\Api\Delegate\CreateDelegateRequest;
use Lisk\Api\Delegate\CreateDelegateResponse;
use Lisk\Api\Delegate\GetDelegateCountRequest;
use Lisk\Api\Delegate\GetDelegateCountResponse;
use Lisk\Api\Delegate\GetDelegateListRequest;
use Lisk\Api\Delegate\GetDelegateListResponse;
use Lisk\Api\Delegate\SearchDelegateRequest;
use Lisk\Api\Delegate\SearchDelegateResponse;
use Lisk\Api\Loader\BlockStatusRequest;
use Lisk\Api\Loader\BlockStatusResponse;
use Lisk\Api\Loader\LoadingStatusRequest;
use Lisk\Api\Loader\LoadingStatusResponse;
use Lisk\Api\Loader\SynchronizationStatusRequest;
use Lisk\Api\Loader\SynchronizationStatusResponse;
use Lisk\Api\Peer\GetPeerListResponse;
use Lisk\Api\Peer\GetPeerRequest;
use Lisk\Api\Peer\GetPeerResponse;
use Lisk\Api\Peer\GetPeerVersionRequest;
use Lisk\Api\Peer\GetPeerVersionResponse;
use Lisk\Api\Signatures\AddSecondSignatureRequest;
use Lisk\Api\Signatures\AddSecondSignatureResponse;
use Lisk\Api\Signatures\GetSignatureFeeRequest;
use Lisk\Api\Signatures\GetSignatureFeeResponse;
use Lisk\Api\Transaction\GetQueuedTransactionRequest;
use Lisk\Api\Transaction\GetQueuedTransactionResponse;
use Lisk\Api\Transaction\GetUnconfirmedTransactionRequest;
use Lisk\Api\Transaction\GetUnconfirmedTransactionResponse;
use Lisk\Api\Transaction\ListQueuedTransactionsRequest;
use Lisk\Api\Transaction\ListQueuedTransactionsResponse;
use Lisk\Api\Transaction\ListTransactionsRequest;
use Lisk\Api\Transaction\ListTransactionsResponse;
use Lisk\Api\Transaction\ListUnconfirmedTransactionsRequest;
use Lisk\Api\Transaction\ListUnconfirmedTransactionsResponse;
use Lisk\Api\Transaction\SendTransactionRequest;
use Lisk\Api\Transaction\SendTransactionResponse;
use Lisk\Requestor\TcdentClient;

class Client
{
    /** @var string Endpoint to which request should be send. */
    private $endpoint = "";

    /** @var null|TcdentClient */
    private $client = null;

    public function __construct(string $endpoint)
    {
        $this->endpoint = $endpoint;
        $this->client = new TcdentClient($this->endpoint);
    }

    /**
     * @param string $address
     * @return BalanceResponse
     * @throws Error
     * @throws \Exception
     */
    public function getBalance(string $address): BalanceResponse
    {
        $request = new BalanceRequest($address);
        $jsonResponse = $this->client->query($request);
        $balanceResponse = new BalanceResponse($jsonResponse);
        return $balanceResponse;
    }

    public function getPublicKey(string $address): GetPublicKeyResponse
    {
        return new GetPublicKeyResponse($this->client->query(new GetPublicKeyRequest($address)));
    }

    public function openAccount(string $secret)
    {
        return new OpenResponse($this->client->query(new OpenRequest($secret)));
    }

    public function generatePublicKey($secret)
    {
        return new GeneratePublicKeyResponse($this->client->query(new GeneratePublicKeyRequest($secret)));
    }

    public function getAccountInfo($address)
    {
        return new ListTransactionsResponse($this->client->query(new ListTransactionsRequest($address)));
    }

    public function getDelegates($address)
    {
        return new DelegatesResponse($this->client->query(new DelegatesRequest($address)));
    }

    /**
     * ToDo: NOT Working with exception: "a.asset.votes.join is not a function"
     * Check again or make github PR request!
     *
     * @param $delegates
     * @param $secret
     * @param null $secondSecret
     * @param null $publicKey
     * @return VoteDelegatesResponse
     */
    public function voteDelegates($delegates, $secret, $secondSecret = null, $publicKey = null)
    {
        return new VoteDelegatesResponse(
            $this->client->query(
                new VoteDelegatesRequest($delegates, $secret, $publicKey, $secondSecret)));
    }

    public function getLoadingStatus()
    {
        return new LoadingStatusResponse($this->client->query(new LoadingStatusRequest()));
    }

    public function getSynchronizationStatus()
    {
        return new SynchronizationStatusResponse($this->client->query(new SynchronizationStatusRequest()));
    }

    public function getBlockStatus()
    {
        return new BlockStatusResponse($this->client->query(new BlockStatusRequest()));
    }

    public function listTransactions(
        $blockId = null,
        $senderId = null,
        $recipientId = null,
        $limit = null,
        $offset = null,
        $orderBy = null
    ) {
        $request = (new ListTransactionsRequest())
            ->setBlockId($blockId)
            ->setSenderId($senderId)
            ->setRecipientId($recipientId)
            ->setLimit($limit)
            ->setOffset($offset)
            ->setOrderBy($orderBy);
        return new ListTransactionsResponse($this->client->query($request));
    }

    public function sendTransaction($secret, $amount, $recipientId, $publicKey = null, $secondSecret = null)
    {
        $request = (new SendTransactionRequest())
            ->setSecret($secret)
            ->setAmount($amount)
            ->setRecipientId($recipientId);
        if ($publicKey !== null) {
            $request->setPublicKey($publicKey);
        }
        if ($secondSecret !== null) {
            $request->setSecondSecret($secondSecret);
        }
        return new SendTransactionResponse($this->client->query($request));
    }

    public function getTransaction($id)
    {
        return new GetBlocksResponse($this->client->query(new GetBlocksRequest($id)));
    }

    public function getUnconfirmedTransaction($id)
    {
        return new GetUnconfirmedTransactionResponse($this->client->query(new GetUnconfirmedTransactionRequest($id)));
    }


    public function listUnconfirmedTransactions()
    {
        return new ListUnconfirmedTransactionsResponse($this->client->query(new ListUnconfirmedTransactionsRequest()));
    }


    public function listQueuedTransactions()
    {
        return new ListQueuedTransactionsResponse($this->client->query(new ListQueuedTransactionsRequest()));
    }


    public function getQueuedTransaction($id)
    {
        return new GetQueuedTransactionResponse($this->client->query(new GetQueuedTransactionRequest($id)));
    }

    public function getPeerList(
        $state = null,
        $os = null,
        $version = null,
        $limit = null,
        $offset = null,
        $orderBy = null
    ) {
        $request = (new CreateDelegateRequest())
            ->setState($state)
            ->setOs($os)
            ->setVersion($version)
            ->setLimit($limit)
            ->setOffset($offset)
            ->setOrderBy($orderBy);
        return new GetPeerListResponse($this->client->query($request));
    }

    public function getPeerVersion()
    {
        return new GetPeerVersionResponse($this->client->query(new GetPeerVersionRequest()));
    }

    public function getPeer($ip, $port)
    {
        return new GetPeerResponse($this->client->query(new GetPeerRequest($ip, $port)));
    }

    public function getBlocks(
        $totalFee = null,
        $totalAmount = null,
        $previousBlock = null,
        $height = null,
        $generatorPublicKey = null,
        $limit = null,
        $offset = null,
        $orderBy = null
    ) {
        $request = (new GetBlocksRequest())
            ->setTotalFee($totalFee)
            ->setTotalAmount($totalAmount)
            ->setPreviousBlock($previousBlock)
            ->setHeight($height)
            ->setGeneratorPublicKey($generatorPublicKey)
            ->setLimit($limit)
            ->setOffset($offset)
            ->setOrderBy($orderBy);
        return new GetBlocksResponse($this->client->query($request));
    }

    public function getBlock($id)
    {
        return new GetBlockResponse($this->client->query(new GetBlockRequest($id)));
    }

    public function getBlockchainFee()
    {
        return new GetBlockchainFeeResponse($this->client->query(new GetBlockchainFeeRequest()));
    }


    public function getBlockchainFees()
    {
        return new GetBlockchainFeesResponse($this->client->query(new GetBlockchainFeesRequest()));
    }

    public function getBlockchainReward()
    {
        return new GetBlockchainRewardResponse($this->client->query(new GetBlockchainRewardRequest()));
    }

    public function getTotalSupply()
    {
        return new GetTotalSupplyResponse($this->client->query(new GetTotalSupplyRequest()));
    }

    public function getBlockchainHeight()
    {
        return new GetBlockchainHeightResponse($this->client->query(new GetBlockchainHeightRequest()));
    }

    public function getStatusInfos()
    {
        return new GetStatusInfoResponse($this->client->query(new GetStatusInfoRequest()));
    }


    public function getBlockchainNethash()
    {
        return new GetBlockchainNethashResponse($this->client->query(new GetBlockchainNethashRequest()));
    }


    public function getBlockchainMilestone()
    {
        return new GetBlockchainMilestoneResponse($this->client->query(new GetBlockchainMilestoneRequest()));
    }

    //signature

    public function getSignatureFee()
    {
        return new GetSignatureFeeResponse($this->client->query(new GetSignatureFeeRequest()));
    }

    public function addSecondSignature($secret, $secondSecret, $publicKey = null)
    {
        return new AddSecondSignatureResponse(
            $this->client->query(new AddSecondSignatureRequest($secret, $secondSecret, $publicKey))
        );
    }

    //delegates

    public function createDelegate($secret, $username, $secondSecret = null)
    {
        return new CreateDelegateResponse($this->client->query(
            new CreateDelegateRequest($secret, $username, $secondSecret))
        );
    }

    public function getDelegateList($limit = null, $offset = null, $orderBy = null)
    {
        return new GetDelegateListResponse($this->client->query(
            new GetDelegateListRequest($limit, $offset, $orderBy))
        );
    }

    public function searchDelegate($username = null, $orderBy = null)
    {
        return new SearchDelegateResponse($this->client->query(
            new SearchDelegateRequest($username, $orderBy))
        );
    }

    public function getDelegateCount()
    {
        return new GetDelegateCountResponse($this->client->query(new GetDelegateCountRequest()));
    }
}
