<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace Trd\InfoBlock\Application\Controller;

use Trd\InfoBlock\Application\Model\ProductArticle;

class ArticleDetails extends ArticleDetails_parent
{
    /**
     * Render product details.
     *
     * @return string
     */
    public function render()
    {
        $oProduct = $this->getProduct();
        $sOxId = $oProduct->getId();

        $product = oxNew(ProductArticle::class);
        $product->load($sOxId);

        $prepayment = $product->oxtrd_article_prepayment__prepayment->value;
        $pre_month = $product->oxtrd_article_prepayment__pre_month->value;
        $prepayment_month = $product->oxtrd_article_prepayment__prepayment_month->value;

        $this->addTplParam('prepayment', $prepayment);
        $this->addTplParam('pre_month', $pre_month);
        $this->addTplParam('prepayment_month', $prepayment_month);

        $fromParent = parent::render();

        return $fromParent;
    }
}