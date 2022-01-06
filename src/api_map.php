<?php

return [
    //video
    'dyVideoUpload' => \Huangtingbb\DyApi\VideoManager\dy\VideoUpload::class,
    'dyVideoCreate' => \Huangtingbb\DyApi\VideoManager\dy\VideoCreate::class,
    'dyImageUpload' => \Huangtingbb\DyApi\VideoManager\dy\ImageUpload::class,

    //oauth
    'getDyAccessToken' => \Huangtingbb\DyApi\Oauth\DyAccessToken::class,
];
