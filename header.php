<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new-scrum</title>

    
    <!-- 正しいリンク -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reset.css">
    <!-- css/scss -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon/favicon.ico">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/favicon/apple-touch-icon-152x152.png">

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="inner h__wrap">
            <div class="h__logo">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/img/h-logo.png" alt="scrum">
                </a>
            </div>
            <nav class="h__nav">
                <ul class="h__list">
                    <li class="h__list-item">
                        <a href="/about">about</a>
                    </li>
                    <li  class="h__list-item">
                        <a href="/service">service</a>
                    </li>
                    <li class="h__list-item">
                        <a href="/service#icon4">work</a>
                    </li>
                    <li class="h__list-item">
                        <a href="/works">news</a>
                    </li>
                    <li class="h__list-item">
                        <a href="/contact">contact</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="inner sp__wrap">
            <div class="sp__logo">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/img/h-logo.png" alt="scrum">
                </a>
            </div>
            <div class="openbtn">
                <label class="sp__label"></label>
                <label class="sp__label"></label>
                <label class="sp__label"></label>
            </div>
            <div class="sp__nav">
                <!-- header-nav -->
                <nav class="header__sp-nav">
                    <ul class="sp__list">
                        <li class="sp__list-item">
                            <a href="/about">about</a>
                        </li>
                        <li  class="sp__list-item">
                            <a href="/service">service</a>
                        </li>
                        <li class="sp__list-item">
                            <a href="/service#icon4">work</a>
                        </li>
                        <li class="sp__list-item">
                            <a href="/works">news</a>
                        </li>
                        <li class="sp__list-item">
                            <a href="/contact">contact</a>
                        </li>
                    </ul>
                </nav>

                <div class="sp__sns">
                    <a href="https://twitter.com/manabou119235">
                        <img src="<?php echo get_template_directory_uri() ?>/img/twitter-icon.png" alt="twitter">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/github-icon.png" alt="github">
                    </a>
                </div>
            </div>
        </div>
    </header>