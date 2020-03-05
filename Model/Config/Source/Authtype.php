<?php
/**
 * Copyright © Landofcoder LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.landofcoder.com | support@landofcoder.com
 */
namespace Lof\SmtpApp\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Authtype
 * @package Lof\SmtpApp\Model\Config\Source
 */
class Authtype implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'none', 'label' => __('None')],
            ['value' => 'ssl', 'label' => 'SSL'],
            ['value' => 'tls', 'label' => 'TLS']
        ];
    }
}
