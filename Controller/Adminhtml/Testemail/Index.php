<?php
/**
 * Copyright © Landofcoder LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.landofcoder.com | support@landofcoder.com
 */

namespace Lof\SmtpApp\Controller\Adminhtml\Testemail;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Index extends Action
{
    /**
     * Authorization level of a basic admin session
     */
    const ADMIN_RESOURCE = 'Lof_SmtpApp::lof_smtpapp';

    /**
     * Index action
     *
     * @return ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_LAYOUT);
    }
}
