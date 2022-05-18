<?php

return [
    //video
    'dyVideoUpload' => \Huangtingbb\DyApi\VideoManager\Dy\VideoUpload::class,
    'dyVideoCreate' => \Huangtingbb\DyApi\VideoManager\Dy\VideoCreate::class,
    'dyImageUpload' => \Huangtingbb\DyApi\VideoManager\Dy\ImageUpload::class,

    //oauth
    'getDyAccessToken' => \Huangtingbb\DyApi\Oauth\DyAccessToken::class,
    'refreshDyAccessToken' => \Huangtingbb\DyApi\Oauth\RefreshAccessToken::class,
    'renewRefreshToken' => \Huangtingbb\DyApi\Oauth\RenewRefreshToken::class,

    //data
    //user
    'getDataExternalUserVideo' => \Huangtingbb\DyApi\Data\User\Video::class,
    'getDataExternalUserFans' => \Huangtingbb\DyApi\Data\User\Fans::class,
    'getDataExternalUserLike' => \Huangtingbb\DyApi\Data\User\Like::class,
    'getDataExternalUserComment' => \Huangtingbb\DyApi\Data\User\Comment::class,
    'getDataExternalUserShare' => \Huangtingbb\DyApi\Data\User\Share::class,
    'getDataExternalUserProfile' => \Huangtingbb\DyApi\Data\User\Profile::class,
    //video
    'getDataExternalVideoBase' => \Huangtingbb\DyApi\Data\Video\Base::class,
    'getDataExternalVideoComment' => \Huangtingbb\DyApi\Data\Video\Comment::class,
    'getDataExternalVideoLike' => \Huangtingbb\DyApi\Data\Video\Like::class,
    'getDataExternalVideoShare' => \Huangtingbb\DyApi\Data\Video\Share::class,
    'getDataExternalVideoPlay' => \Huangtingbb\DyApi\Data\Video\Play::class,

    //goods
    'getGoodsTemplate' => \Huangtingbb\DyApi\LifeService\Goods\TemplateGet::class,
    'getGoodsProductDraft' => \Huangtingbb\DyApi\LifeService\Goods\ProductDraftGet::class,
    'getGoodsProductList' => \Huangtingbb\DyApi\LifeService\Goods\ProductDraftList::class,
    'getGoodsProductOnline' => \Huangtingbb\DyApi\LifeService\Goods\ProductOnlineGet::class,
    'getGoodsProductOnlineList' => \Huangtingbb\DyApi\LifeService\Goods\ProductOnlineList::class,
    'saveGoodsProduct' => \Huangtingbb\DyApi\LifeService\Goods\ProductSave::class,
    'freeAuditEditGoodsProduct' => \Huangtingbb\DyApi\LifeService\Goods\ProductFreeAudit::class,
    'operateGoodsProductStatus' => \Huangtingbb\DyApi\LifeService\Goods\ProductOperate::class,
    'syncGoodsProductStock' => \Huangtingbb\DyApi\LifeService\Goods\ProductStockSync::class,

    //poi cps
    "getPoiPlanList" => \Huangtingbb\DyApi\LifeService\Poi\PlanList::class,
];
