<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace Trd\InfoBlock\Application\Controller\Admin;

use Exception;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use OxidEsales\EshopCommunity\Internal\Framework\Database\QueryBuilderFactoryInterface;

class ArticleListController extends ArticleListController_parent
{
    /**
     * Deletes from the oxtrd_article_prepayment table
     */
    public function deleteEntry()
    {
        $sOxId = $this->getEditObjectId();

        parent::deleteEntry();

        if ($sOxId) {

            try {

                $container = ContainerFactory::getInstance()->getContainer();
                $queryBuilderFactory = $container->get(QueryBuilderFactoryInterface::class);
                $queryBuilder = $queryBuilderFactory->create();
                $conn = $queryBuilder->getConnection();
                $query = "DELETE FROM `oxtrd_article_prepayment` WHERE OXID = :oxid";
                $stmt = $conn->prepare($query);
                $stmt->bindValue("oxid", $sOxId);
                $stmt->execute();

            } catch (Exception $exception) {
//            throw $exception;
            }
        }
    }
}