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
use Lisk\Api\Apps\CreateAccountResponse;
use Lisk\Api\Apps\GetAllInstalledAppsRequest;
use Lisk\Api\Apps\GetAllInstalledAppsResponse;
use Lisk\Api\Apps\GetAppRequest;
use Lisk\Api\Apps\GetAppResponse;
use Lisk\Api\Apps\GetAppsRequest;
use Lisk\Api\Apps\GetAppsResponse;
use Lisk\Api\Apps\GetCategoriesRequest;
use Lisk\Api\Apps\GetCategoriesResponse;
use Lisk\Api\Apps\GetInstalledAppsRequest;
use Lisk\Api\Apps\GetInstalledAppsResponse;
use Lisk\Api\Apps\InstallAppRequest;
use Lisk\Api\Apps\InstallingAppRequest;
use Lisk\Api\Apps\InstallingAppResponse;
use Lisk\Api\Apps\LaunchAppRequest;
use Lisk\Api\Apps\LaunchAppResponse;
use Lisk\Api\Apps\LaunchedAppsRequest;
use Lisk\Api\Apps\LaunchedAppsResponse;
use Lisk\Api\Apps\RegisterAppRequest;
use Lisk\Api\Apps\RegisterAppResponse;
use Lisk\Api\Apps\SearchAppsRequest;
use Lisk\Api\Apps\SearchAppsResponse;
use Lisk\Api\Apps\StopAppRequest;
use Lisk\Api\Apps\StopAppResponse;
use Lisk\Api\Apps\UninstallAppRequest;
use Lisk\Api\Apps\UninstallAppResponse;
use Lisk\Api\Apps\UninstallingAppRequest;
use Lisk\Api\Apps\UninstallingAppResponse;
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
use Lisk\Api\Delegate\DisableForgingRequest;
use Lisk\Api\Delegate\DisableForgingResponse;
use Lisk\Api\Delegate\EnableForgingRequest;
use Lisk\Api\Delegate\EnableForgingResponse;
use Lisk\Api\Delegate\GetDelegateCountRequest;
use Lisk\Api\Delegate\GetDelegateCountResponse;
use Lisk\Api\Delegate\GetDelegateListRequest;
use Lisk\Api\Delegate\GetDelegateListResponse;
use Lisk\Api\Delegate\GetDelegateRequest;
use Lisk\Api\Delegate\GetDelegateResponse;
use Lisk\Api\Delegate\GetDelegateVotersRequest;
use Lisk\Api\Delegate\GetDelegateVotersResponse;
use Lisk\Api\Delegate\GetDelegateVotesRequest;
use Lisk\Api\Delegate\GetDelegateVotesResponse;
use Lisk\Api\Delegate\GetForgedByAccountRequest;
use Lisk\Api\Delegate\GetForgedByAccountResponse;
use Lisk\Api\Delegate\GetNextForgerRequest;
use Lisk\Api\Delegate\GetNextForgerResponse;
use Lisk\Api\Delegate\SearchDelegateRequest;
use Lisk\Api\Delegate\SearchDelegateResponse;
use Lisk\Api\Loader\BlockStatusRequest;
use Lisk\Api\Loader\BlockStatusResponse;
use Lisk\Api\Loader\LoadingStatusRequest;
use Lisk\Api\Loader\LoadingStatusResponse;
use Lisk\Api\Loader\SynchronizationStatusRequest;
use Lisk\Api\Loader\SynchronizationStatusResponse;
use Lisk\Api\MultiSignature\CreateAccountRequest as CreateMultiSignatureAccountRequest;
use Lisk\Api\MultiSignature\CreateAccountResponse as CreateMultiSignatureAccountResponse;
use Lisk\Api\MultiSignature\GetAccountsRequest;
use Lisk\Api\MultiSignature\GetAccountsResponse;
use Lisk\Api\MultiSignature\GetPendingTransactionsRequest;
use Lisk\Api\MultiSignature\GetPendingTransactionsResponse;
use Lisk\Api\MultiSignature\SignPendingTransactionRequest;
use Lisk\Api\MultiSignature\SignPendingTransactionResponse;
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

    /**
     * @param null $publicKey
     * @param null $username
     * @return GetDelegateResponse
     */
    public function getDelegate($publicKey = null, $username = null)
    {
        return new GetDelegateResponse($this->client->query(
            (new GetDelegateRequest())
                ->setUsername($username)
                ->setPublicKey($publicKey))
        );
    }

    /**
     * @param null $publicKey
     * @return GetDelegateResponse
     */
    public function getDelegateByPubKey($publicKey = null)
    {
        return new GetDelegateResponse($this->client->query(
            (new GetDelegateRequest())
                ->setPublicKey($publicKey))
        );
    }

    /**
     * @param null $username
     * @return GetDelegateResponse
     */
    public function getDelegateByUsername($username = null)
    {
        return new GetDelegateResponse($this->client->query(
            (new GetDelegateRequest())
                ->setUsername($username))
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

    public function getDelegateVotes($address)
    {
        return new GetDelegateVotesResponse($this->client->query(new GetDelegateVotesRequest($address)));
    }

    /**
     * @param $publicKey
     * @return GetDelegateVotersResponse
     */
    public function getDelegateVoters($publicKey)
    {
        return new GetDelegateVotersResponse($this->client->query(new GetDelegateVotersRequest($publicKey)));
    }

    public function enableForging($secret)
    {
        return new EnableForgingResponse($this->client->query(new EnableForgingRequest($secret)));
    }

    public function disableForging($secret)
    {
        return new DisableForgingResponse($this->client->query(new DisableForgingRequest($secret)));
    }

    /**
     * @param $generatorPublicKey
     * @param null $start
     * @param null $end
     * @return GetForgedByAccountResponse
     */
    public function getForgedByAccount($generatorPublicKey, $start = null, $end = null)
    {
        return new GetForgedByAccountResponse($this->client->query(
            new GetForgedByAccountRequest($generatorPublicKey, $start, $end)));
    }


    public function getNextForger($limit = null)
    {
        return new GetNextForgerResponse($this->client->query(new GetNextForgerRequest($limit)));
    }

    //Apps
    public function registerApp(
        $secret,
        $category,
        $name,
        $type,
        $link,
        $secondSecret = null,
        $publicKey = null,
        $description = null,
        $tags = null,
        $icon = null
    ) {
        $request = new RegisterAppRequest($secret, $category, $name, $type, $link);
        if ($secondSecret !== null) {
            $request->setSecondSecret($secondSecret);
        }
        if ($publicKey !== null) {
            $request->setPublicKey($publicKey);
        }
        if ($description !== null) {
            $request->setDescription($description);
        }
        if ($tags !== null) {
            $request->setTags($tags);
        }
        if ($icon !== null) {
            $request->setIcon($icon);
        }

        return new RegisterAppResponse($this->client->query($request));
    }


    public function getApps(
        $category = null,
        $name = null,
        $appType = null,
        $link = null,
        $limit = null,
        $offset = null,
        $orderBy = null
    ) {

        $request = new GetAppsRequest();

        if ($category !== null) {
            $request->setCategory($category);
        }

        if ($name !== null) {
            $request->setName($name);
        }

        if ($appType !== null) {
            $request->setAppType($appType);
        }

        if ($link !== null) {
            $request->setLink($link);
        }

        if ($limit !== null) {
            $request->setLimit($limit);
        }

        if ($offset !== null) {
            $request->setOffset($offset);
        }

        if ($orderBy !== null) {
            $request->setOrderBy($orderBy);
        }

        return new GetAppsResponse($this->client->query($request));
    }

    public function getApp($id)
    {
        return new GetAppResponse($this->client->query(new GetAppRequest($id)));
    }

    public function searchApps($q = null, $category = null, $installed = null)
    {
        return new SearchAppsResponse($this->client->query(new SearchAppsRequest($q, $category, $installed)));
    }

    /**
     * ToDo: Not working with error message "Error: Invalid master passphrase"
     * @param $id
     * @return CreateAccountResponse
     */
    public function installApp($id)
    {
        return new CreateAccountResponse($this->client->query(new InstallAppRequest($id)));
    }

    public function getInstalledApps()
    {
        return new GetInstalledAppsResponse($this->client->query(new GetInstalledAppsRequest()));
    }

    public function getAllInstalledApps()
    {
        return new GetAllInstalledAppsResponse($this->client->query(new GetAllInstalledAppsRequest()));
    }

    public function uninstallApp($id)
    {
        return new UninstallAppResponse($this->client->query(new UninstallAppRequest($id)));
    }

    public function launchApp($id, $params = [])
    {
        return new LaunchAppResponse($this->client->query(new LaunchAppRequest($id, $params)));
    }

    public function installingApp()
    {
        return new InstallingAppResponse($this->client->query(new InstallingAppRequest()));
    }

    public function uninstallingApp()
    {
        return new UninstallingAppResponse($this->client->query(new UninstallingAppRequest()));
    }

    public function launchedApps()
    {
        return new LaunchedAppsResponse($this->client->query(new LaunchedAppsRequest()));
    }

    public function getCategories()
    {
        return new GetCategoriesResponse($this->client->query(new GetCategoriesRequest()));
    }

    public function stopApp($id)
    {
        return new StopAppResponse($this->client->query(new StopAppRequest($id)));
    }

    //MultiSignature
    public function createMultiSignatureAccount($secret, $lifetime, $min, $keysgroup, $secondSecret = null)
    {
        return new CreateMultiSignatureAccountResponse(
            $this->client->query(
                new CreateMultiSignatureAccountRequest($secret, $lifetime, $min, $keysgroup, $secondSecret)
            )
        );
    }

    public function getMultiSignatureAccounts($publicKey)
    {
        return new GetAccountsResponse($this->client->query(new GetAccountsRequest($publicKey)));
    }


    public function getPendingTransactions($publicKey)
    {
        return new GetPendingTransactionsResponse($this->client->query(new GetPendingTransactionsRequest($publicKey)));
    }

    public function signPendingTransaction($secret, $transactionId, $publicKey = null)
    {
        return new SignPendingTransactionResponse($this->client->query(
            new SignPendingTransactionRequest($secret, $transactionId, $publicKey)
        ));
    }

}
