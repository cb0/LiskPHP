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


use Lisk\Cli\Account\Balance;
use Lisk\Cli\Account\Delegates;
use Lisk\Cli\Account\GeneratePublicKey;
use Lisk\Cli\Account\GetPublicKey;
use Lisk\Cli\Account\Open;
use Lisk\Cli\Account\VoteDelegates;
use Lisk\Cli\Apps\GetAllInstalledApps;
use Lisk\Cli\Apps\GetApp;
use Lisk\Cli\Apps\GetApps;
use Lisk\Cli\Apps\GetCategories;
use Lisk\Cli\Apps\GetInstalledApps;
use Lisk\Cli\Apps\InstallApp;
use Lisk\Cli\Apps\InstallingApp;
use Lisk\Cli\Apps\LaunchApp;
use Lisk\Cli\Apps\LaunchedApps;
use Lisk\Cli\Apps\RegisterApp;
use Lisk\Cli\Apps\SearchApps;
use Lisk\Cli\Apps\StopApp;
use Lisk\Cli\Apps\UninstallApp;
use Lisk\Cli\Apps\UninstallingApp;
use Lisk\Cli\Blocks\GetBlock;
use Lisk\Cli\Blocks\GetBlockchainFee;
use Lisk\Cli\Blocks\GetBlockchainFees;
use Lisk\Cli\Blocks\GetBlockchainHeight;
use Lisk\Cli\Blocks\GetBlockchainMilestone;
use Lisk\Cli\Blocks\GetBlockchainNethash;
use Lisk\Cli\Blocks\GetBlockchainReward;
use Lisk\Cli\Blocks\GetBlocks;
use Lisk\Cli\Blocks\GetStatusInfos;
use Lisk\Cli\Blocks\GetTotalSupply;
use Lisk\Cli\Delegate\CreateDelegate;
use Lisk\Cli\Delegate\DisableForging;
use Lisk\Cli\Delegate\EnableForging;
use Lisk\Cli\Delegate\GetDelegate;
use Lisk\Cli\Delegate\GetDelegateCount;
use Lisk\Cli\Delegate\GetDelegateList;
use Lisk\Cli\Delegate\GetDelegateVoters;
use Lisk\Cli\Delegate\GetDelegateVotes;
use Lisk\Cli\Delegate\GetForgedByAccount;
use Lisk\Cli\Delegate\GetNextForger;
use Lisk\Cli\Delegate\SearchDelegate;
use Lisk\Cli\Loader\BlockStatus;
use Lisk\Cli\Loader\LoadingStatus;
use Lisk\Cli\Loader\SynchronizationStatus;
use Lisk\Cli\MultiSignature\CreateAccount;
use Lisk\Cli\MultiSignature\GetAccounts;
use Lisk\Cli\MultiSignature\GetPendingTransactions;
use Lisk\Cli\MultiSignature\SignPendingTransaction;
use Lisk\Cli\Peer\GetPeer;
use Lisk\Cli\Peer\GetPeerList;
use Lisk\Cli\Peer\GetPeerVersion;
use Lisk\Cli\Signatures\AddSecondSignature;
use Lisk\Cli\Signatures\GetSignatureFee;
use Lisk\Cli\Transaction\GetQueuedTransaction;
use Lisk\Cli\Transaction\GetTransaction;
use Lisk\Cli\Transaction\GetUnconfirmedTransaction;
use Lisk\Cli\Transaction\ListQueuedTransactions;
use Lisk\Cli\Transaction\ListTransactions;
use Lisk\Cli\Transaction\ListUnconfirmedTransactions;
use Lisk\Cli\Transaction\SendTransaction;

class ActionFactory
{
    public function create(string $actionName)
    {
        switch ($actionName) {
            //Account
            case "info":
                return new LoadingStatus();
            case "openAccount":
                return new Open();
            case "getBalance":
                return new Balance();
            case "getPublicKey":
                return new GetPublicKey();
            case "generatePublicKey":
                return new GeneratePublicKey();
            case "getDelegates":
                return new Delegates();
            case "voteDelegates":
                return new VoteDelegates();
            //Loading
            case "getLoadingStatus":
                return new LoadingStatus();
            case "getSyncStatus":
                return new SynchronizationStatus();
            case "getBlockStatus":
                return new BlockStatus();
            //Transactions
            case "listTransactions":
                return new ListTransactions();
            case "sendTransaction":
                return new SendTransaction();
            case "getTransaction":
                return new GetTransaction();
            case "getUnconfirmedTransaction":
                return new GetUnconfirmedTransaction();
            case "listUnconfirmedTransactions":
                return new ListUnconfirmedTransactions();
            case "listQueuedTransactions":
                return new ListQueuedTransactions();
            case "getQueuedTransaction":
                return new GetQueuedTransaction();
            //Peers
            case "getPeerList":
                return new GetPeerList();
            case "getPeerVersion";
                return new GetPeerVersion();
            case "getPeer":
                return new GetPeer();
            //Blocks
            case "getBlocks":
                return new GetBlocks();
            case "getBlock":
                return new GetBlock();
            case "getBlockchainFee":
                return new GetBlockchainFee();
            case "getBlockchainFees":
                return new GetBlockchainFees();
            case "getBlockchainReward":
                return new GetBlockchainReward();
            case "getTotalSupply":
                return new GetTotalSupply();
            case "getBlockchainHeight":
                return new GetBlockchainHeight();
            case "getStatusInfos":
                return new GetStatusInfos();
            case "getBlockchainNethash":
                return new GetBlockchainNethash();
            case "getBlockchainMilestone":
                return new GetBlockchainMilestone();
            //Signatures
            case "getSignatureFee":
                return new GetSignatureFee();
            case "addSecondSignature":
                return new AddSecondSignature();
            //Delegate
            case "createDelegate":
                return new CreateDelegate();
            case "getDelegate":
                return new GetDelegate();
            case "getDelegateList":
                return new GetDelegateList();
            case "searchDelegate";
                return new SearchDelegate();
            case "getDelegateCount":
                return new GetDelegateCount();
            case "getDelegateVotes":
                return new GetDelegateVotes();
            case "getDelegateVoters":
                return new GetDelegateVoters();
            case "enableForging":
                return new EnableForging();
            case "disableForging":
                return new DisableForging();
            case "getForgedByAccount":
                return new GetForgedByAccount();
            case "getNextForger":
                return new GetNextForger();
            //Apps
            case "registerApp":
                return new RegisterApp();
            case "getApps":
                return new GetApps();
            case "getApp":
                return new GetApp();
            case 'searchApps':
                return new SearchApps();
            case 'installApp':
                return new InstallApp();
            case 'getInstalledApps':
                return new GetInstalledApps();
            case 'getAllInstalledApps':
                return new GetAllInstalledApps();
            case 'uninstallApp':
                return new UninstallApp();
            case 'launchApp':
                return new LaunchApp();
            case 'installingApp':
                return new InstallingApp();
            case 'uninstallingApp':
                return new UninstallingApp();
            case 'launchedApps':
                return new LaunchedApps();
            case 'getCategories':
                return new GetCategories();
            case 'stopApp':
                return new StopApp();
            //MultiSignature
            case 'createMultiSignatureAccount':
                return new CreateAccount();
            case 'getMultiSignatureAccounts':
                return new GetAccounts();
            case 'getPendingTransactions':
                return new GetPendingTransactions();
            case 'signPendingTransaction':
                return new SignPendingTransaction();
            default:
                throw new \Exception(sprintf("Action '%s' not implemented", $actionName));
        }
    }
}