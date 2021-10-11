<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Huyet Kiem - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative uk-background-norepeat">
    <div class="header">
        <div class="uk-container uk-padding-remove">
            <nav class="home__navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-center">

                    <div class="uk-navbar-center-left uk-visible@m" data-src="images/bg_nav_left.png" uk-img>
                        <div>
                            <ul class="uk-navbar-nav">
                                <li><a href="#">Trang CHỦ</a></li>
                                <li><a href="#">TIN TỨC</a></li>
                                <li><a href="#">SỰ KIỆN</a></li>
                            </ul>
                        </div>
                    </div>
                    <a class="uk-navbar-item uk-logo" href="#"><img src="images/logo.png" alt=""></a>
                    <div class="uk-navbar-center-right uk-visible@m" data-src="images/bg_nav_right.png" uk-img>
                        <div>
                            <ul class="uk-navbar-nav">
                                <li><a href="#">HƯỚNG DẪN</a></li>
                                <li><a href="#">CỘNG ĐỒNG</a></li>
                                <li><a href="#">FANPAGE</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
    </div>