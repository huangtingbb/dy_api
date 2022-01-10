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
];
