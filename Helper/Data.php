<?php
/**
 * Divante GoogleTagManager helper.
 *
 * @package   Divante\GoogleTagManager
 * @author    Adam Sprada <adam@sprada.pl>
 * @copyright 2017 Divante Sp. z o.o.
 * @license   See LICENSE for license details.
 */

namespace Divante\GoogleTagManager\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 */
class Data extends AbstractHelper
{
    /**
     * Google Tag Manager active config data
     */
    const XML_PATH_GTM_ACTIVE = 'google/gtm/active';

    /**
     * Google Tag Manager account id config data
     */
    const XML_PATH_GTM_ACCOUNT = 'google/gtm/account';

    /**
     * Google Tag Manager ga included config data
     */
    const XML_PATH_GTM_GA_INCLUDED = 'google/gtm/ga_included';

    /**
     * Check if Google Tag Manager is enabled.
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getAccountId()
               && $this->scopeConfig->isSetFlag(
                self::XML_PATH_GTM_ACTIVE,
                ScopeInterface::SCOPE_STORE
            );
    }

    /**
     * Get Google Tag Manager account ID.
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_GTM_ACCOUNT, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Check if Google Tag Manager is enabled and Google Analytics tracking code is included through it.
     *
     * @return bool
     */
    public function isGoogleAnalyticsEnabled()
    {
        return $this->isEnabled()
               && $this->scopeConfig->isSetFlag(
                self::XML_PATH_GTM_GA_INCLUDED,
                ScopeInterface::SCOPE_STORE
            );
    }
}
