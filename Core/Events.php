<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace Trd\InfoBlock\Core;

use Doctrine\DBAL\Exception;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use OxidEsales\EshopCommunity\Internal\Framework\Database\QueryBuilderFactoryInterface;

class Events
{
    /**
     * Execute action on activate event
     */
    public static function onActivate()
    {
        $container = ContainerFactory::getInstance()->getContainer();
        $queryBuilderFactory = $container->get(QueryBuilderFactoryInterface::class);
        $queryBuilder = $queryBuilderFactory->create();
        $conn = $queryBuilder->getConnection();

        $query = "CREATE TABLE `oxtrd_article_prepayment` (
                      `OXID` char(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
                      `OXSHOPID` int(11) NOT NULL,
                      `PREPAYMENT` float DEFAULT 0,
                      `PRE_MONTH` TINYINT(2) DEFAULT 0 COMMENT 'Number of months of payment',
                      `PREPAYMENT_MONTH` float DEFAULT 0 COMMENT 'Payment amount',
                      PRIMARY KEY (`OXID`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
        $conn->executeQuery($query);

//        $db = DatabaseProvider::getDb();
//        $db->execute($query);

        var_export('activated!');
    }

    /**
     * Execute action on activate event
     */
    public static function onDeactivate()
    {
        $container = ContainerFactory::getInstance()->getContainer();
        $queryBuilderFactory = $container->get(QueryBuilderFactoryInterface::class);
        $queryBuilder = $queryBuilderFactory->create();
        $conn = $queryBuilder->getConnection();

        $query = "DROP TABLE IF EXISTS `oxtrd_article_prepayment`";
        $conn->executeQuery($query);

//        $db = DatabaseProvider::getDb();
//        $db->execute($query);

        var_export('deactivated!');
    }
}