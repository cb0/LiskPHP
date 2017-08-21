# LiskPhp - A PHP wrapper for the LISK API

This is php wrapper for LISK API written in OOP style.

It's supposed to be a full implementation of the API.

Included in here is a CLI Parser which makes it possible to call all actions from command line.
e.g.:
```
php api.php getBlocks --height=2967414
```

### API compatibility

Currently supports Lisp API Version 0.8

See https://docs.lisk.io/docs/lisk-api

### Completeness

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
- [x] Apps
- [ ] Multi-signature

## Installation

It's a composer based package. \
Currently NOT available on packagist or elsewhere.\
I'll add the package there as soon as it's finished.

## Usage:

```
$client = new \Lisk\Client('http://testnet.lisk.io:7000');
//get the balance 
$balance = $client->getBalance("YOUR_LISK_ADDRESS");

```
And many many functions more.... [ToBeDocumented]

## ToDo:

- [1] complete API
- [2] complete documentation
- [3] put package on packagist
- [...] more

## Support

If you want to support me please consider voting for my lisk delegate
- **pelops** (6669300595452632273L) on MainNet
- **pelops_testnet** (3697531586899904038L) on TestNet


## License

License under GNU General Public License v3.0

Copyright (c) 2017  Marcus Puchalla <cb0@0xcb0.com>

LiskPhp is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

LiskPhp is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with LiskPhp.  If not, see <http://www.gnu.org/licenses/>.
