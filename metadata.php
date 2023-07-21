<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'oxtrd/paymentinfoblock',
    'title'       => 'Payment info block',
    'description' => '',
    'version'     => '1.0.0',
    'author'      => 'trudmeta',
    'email'       => 'trudmeta@gmail.com',
    'events'      => [
        'onActivate'   => \Trd\InfoBlock\Core\Events::class.'::onActivate',
        'onDeactivate' => \Trd\InfoBlock\Core\Events::class.'::onDeactivate',
    ],
    'extend'      => [
        \OxidEsales\Eshop\Application\Controller\Admin\ArticleMain::class => \Trd\InfoBlock\Application\Controller\Admin\ArticleController::class,
        \OxidEsales\Eshop\Application\Controller\Admin\ArticleList::class => \Trd\InfoBlock\Application\Controller\Admin\ArticleListController::class,
        \OxidEsales\Eshop\Application\Component\Widget\ArticleDetails::class  => \Trd\InfoBlock\Application\Controller\ArticleDetails::class,
    ],
    'blocks'      => [
        [
            'template' => 'article_main.tpl',
            'block'    => 'admin_article_main_form',
            'file'     => 'Application/views/blocks/admin/article_main.tpl'
        ],
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block'    => 'details_productmain_title',
            'file'     => 'Application/views/blocks/page/details/inc/productmain.tpl'
        ],
    ],
    'settings'    => [],
];