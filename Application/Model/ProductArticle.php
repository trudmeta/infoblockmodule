<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace Trd\InfoBlock\Application\Model;

use OxidEsales\Eshop\Core\Model\BaseModel;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use OxidEsales\EshopCommunity\Internal\Framework\Database\QueryBuilderFactoryInterface;

class ProductArticle extends BaseModel
{
    /**
     * Core database table name. $sCoreTable could be only original data table name and not view name.
     *
     * @var string
     */
    protected $_sCoreTable = 'oxtrd_article_prepayment';

    public function __construct()
    {
        parent::__construct();
        $this->init($this->_sCoreTable);
    }
}