# LiskPhp - A PHP wrapper for the LISK API

This is php wrapper for LISK API written in OOP style.

It's supposed to be a full implementation of the API.

Included in here is a CLI Parser which makes it possible to call all actions from command line.
e.g.:
```
php api.php getBlocks --height=2967414
```

###API compatibility
Currently supports Lisp API Version 0.8

See https://docs.lisk.io/docs/lisk-api

###Completeness
This list shows the api sections that are currently supported.
As you can see it is not complete yet. However the sections marked as complete 
should already work.

- [x] Accounts
- [x] Loader
- [x] Transactions
- [x] Peers
- [x] Blocks
- [x] Signatures
- [x] Delegates
- [ ] Apps
- [ ] Multi-signature

##Installation
It's a composer based package. \
Currently NOT available on packagist or elsewhere.\
I'll add the package there as soon as it's finished.

##Usage:
```
$client = new \Lisk\Client('http://testnet.lisk.io:7000');
//get the balance 
$balance = $client->getBalance("YOUR_LISK_ADDRESS");

```
And many many functions more.... [ToBeDocumented]

##ToDo:
- [1] complete API
- [2] complete documentation
- [3] put package on packagist
- [...] more

##Support
If you want to support me please consider voting for my lisk delegate
- **pelops** (6669300595452632273L) on MainNet
- **pelops_testnet** (3697531586899904038L) on TestNet
