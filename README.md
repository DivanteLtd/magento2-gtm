## Overview
Divante Google Tag Manager is a basic module for Magento 2 to install your individual GTM ID on every shop page.

## Installation details
Follow the steps to get well without trouble with the installation process.

#### Step 1 - Install module using Composer
```
composer require divante-ltd/magento2-gtm
```

#### Step 2 - Enable module
```
php -f bin/magento module:enable Divante_GoogleTagManager
php -f bin/magento setup:upgrade
```

#### Step 3 - Configure module

Enable module and provide your Google Tag Manager credentials in admin panel:
```
Stores > Configuration > Sales > Google API > Google Tag Manager
```
