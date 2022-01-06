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
    'getDataExternalUserVideo' => \Huangtingbb\DyApi\Data\User\Video::class,
    'getDataExternalUserFans' => \Huangtingbb\DyApi\Data\User\Fans::class,
];
