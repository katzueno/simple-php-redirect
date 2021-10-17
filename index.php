<?php

/*
 * Very Simple PHP Redirect
 * By @katzueno
 * Version: 0.9.0
 *
 * LICENSE: GNU GENERAL PUBLIC LICENSE V3
 *
 * Read readme.md for further instructions.
 * https://github.com/katzueno/simple-php-redirect
 */

/**
 * New domain to redirect to
 * @var string
 */
$newDomain = "http://katzueno.com";
/**
 * Site name in English
 * @var string
 */
$siteNameEn = "Katz Ueno Website";
/**
 * Site name in Japanese
 * @var string
 */
$siteNameJa = "Katz Ueno 個人サイト";
/**
 * Seconds to wait until redirect
 * @var number
 */
$sec = 10;

/**
 * Get request URL
 */
$URL = $_SERVER['REQUEST_URI'];
http_response_code(301);
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="refresh" content="<?=$sec;?>;URL=<?=$newDomain.$URL;?>">
    <title><?=$siteName;?> has moved to new domain.</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Redirecting to the new site" />
    <style>
        body {
            font-size: 1.2rem;
        }

        .info_box{
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
            padding: 40px 20px 0;
        }
        h1{
            text-align: center;
        }
        .logo{
            max-width: 600px;
            width: 100%;
        }

        .tx_bold{
            font-weight: bold;
            text-align: center;
        }
        .mt20{
            margin-top: 20px;
        }

        .datetime {
            font-size: 1.4rem;
        }

        .border{
            border:1px solid #666;
        }
    </style>
</head>

<body>
<div class="info_box">
    <h1><?=$siteNameEn;?><br>Has Moved</h1>
    <p class="mt20">&quot;<?=$siteNameEn;?>&quot; has moved to new domain. Please update your bookmark</p>
    <p class="mt20">&quot;<?=$siteNameJa;?>&quot; のドメインが変更になりました。ブックマークを更新してください。</p>
    <div class="border">
        <h3 class="tx_bold">New URL / 新アドレス</h3>
        <p class="mt20 tx_bold"><strong class="tx_bold"><?=$newDomain . $URL;?></strong></p>
        <p class="mt20">
            This page will be redirected to new URL in <?=$sec;?> seconds. <br>
            このページは <?=$sec;?> 秒後に自動的に新アドレスにリダイレクトされます。
        </p>
    </div>
</div>
</body>
</html>