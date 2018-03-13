# CTK API SDK for PHP
SDK to help users connect easely with the CTK API using PHP.

# Overview
This SDK will require the user to send only the URL endpoint of thier service while interacting with the CTK API.

All client methods are easy-to-use and user should be able to execute all the endpoints without much coding.

# Installation

To install run the following command:

```
git clone https://github.com/CentraTech/CTK-API-SDK-PHP.git
```

After you have cloned it to the directoy of your choice, simply include the composer autoload file anywhere in your code:

````
<?php
include './vendor/autoload.php';

use Ctk\CtkClient;

$client = new CtkClient('{ENDPOINT_URL}');
````

You can also install SDK using composer:

````
composer require centratech/ctkwallet-sdk
````

# Feedback
Please feel free to report any bugs or issues regarding the PHP SDK a the Github issue tracker on this same repository