<?php
/**
 * Google Tag Manager block.
 *
 * @package   Divante\GoogleTagManager
 * @author    Adam Sprada <adam@sprada.pl>
 * @copyright 2017 Divante Sp. z o.o.
 * @license   See LICENSE for license details.
 */

namespace Divante\GoogleTagManager\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Divante\GoogleTagManager\Helper\Data as GtmHelper;

/**
 * Class Gtm.
 */
class Gtm extends Template
{
    /**
     * Google Tag Manager helper.
     *
     * @var GtmHelper
     */
    protected $gtmHelper = null;

    /**
     * Gtm constructor.
     *
     * @param Context   $context
     * @param GtmHelper $gtmHelper
     * @param array     $data
     */
    public function __construct(Context $context, GtmHelper $gtmHelper, array $data = [])
    {
        parent::__construct($context, $data);

        $this->gtmHelper = $gtmHelper;
    }

    /**
     * Get Account ID.
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->gtmHelper->getAccountId();
    }

    /**
     * {@inheritdoc}
     */
    protected function _toHtml()
    {
        if (!$this->gtmHelper->isEnabled()) {
            return '';
        }

        return parent::_toHtml();
    }
}
