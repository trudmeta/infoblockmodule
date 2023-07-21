<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace Trd\InfoBlock\Application\Controller\Admin;

use OxidEsales\Eshop\Core\Field;
use OxidEsales\Eshop\Core\Registry as EshopRegistry;
use Trd\InfoBlock\Application\Model\Article;
use Trd\InfoBlock\Application\Model\ProductArticle;

class ArticleController extends ArticleController_parent
{
    /**
     * Saves changes of article parameters.
     */
    public function save()
    {
        parent::save();

        $sOxId = $this->getEditObjectId();
        $shopId = EshopRegistry::getConfig()->getShopId();

        $request = EshopRegistry::get(\OxidEsales\Eshop\Core\Request::class);
        $aParams = $request->getRequestEscapedParameter('editval');

        $product = oxNew(ProductArticle::class);
        $product->setId($sOxId);
        $product->oxtrd_article_prepayment__oxshopid = new Field($shopId);

        if (!empty($aParams['oxarticles__oxtrd_prepayment']) &&
            !empty($aParams['oxarticles__oxtrd_pre_month']) &&
            !empty($aParams['oxarticles__oxtrd_prepayment_month'])) {

            $product->oxtrd_article_prepayment__prepayment = new Field($aParams['oxarticles__oxtrd_prepayment']);
            $product->oxtrd_article_prepayment__pre_month = new Field($aParams['oxarticles__oxtrd_pre_month']);
            $product->oxtrd_article_prepayment__prepayment_month = new Field($aParams['oxarticles__oxtrd_prepayment_month']);
            $product->save();

        }
    }
    /**
     * Render method.
     *
     * @return string
     */
    public function render()
    {
        $fromParent = parent::render();

        $sOxId = $this->getEditObjectId();

        $product = oxNew(ProductArticle::class);
        $product->load($sOxId);
        $prepayment = $product->oxtrd_article_prepayment__prepayment->value;
        $pre_month = $product->oxtrd_article_prepayment__pre_month->value;
        $prepayment_month = $product->oxtrd_article_prepayment__prepayment_month->value;
        $this->addTplParam('prepayment', $prepayment);
        $this->addTplParam('pre_month', $pre_month);
        $this->addTplParam('prepayment_month', $prepayment_month);

        return $fromParent;
    }
}