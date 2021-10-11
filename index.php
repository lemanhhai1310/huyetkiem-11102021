<?php $data["title"] = "Trang chủ"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="">
    <div class="uk-container">
        <div class="uk-child-width-1-2 uk-flex-middle" uk-grid>
            <div>
                <img src="images/title.png" alt="">
            </div>
            <div>
                <img src="images/class.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="home__content">
    <div class="uk-container">
        <script>
            function hover(element) {
                element.setAttribute('src', 'images/button_download_hover.png');
            }

            function unhover(element) {
                element.setAttribute('src', 'images/button_download.png');
            }
        </script>
        <div><a href=""><img class="home__content__imgdownload" src="images/button_download.png" onmouseover="hover(this);" onmouseout="unhover(this);" alt=""></a></div>
        <div class="uk-position-relative uk-display-inline-block">
            <img class="home__content__img1" src="images/bg_menu.png" alt="">
            <ul class="uk-subnav home__content__nav1 uk-child-width-expand uk-position-cover">
                <li class="uk-active"><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
        <div class="uk-grid-small uk-grid-30-m" uk-grid>
            <div class="uk-width-expand">
                <ul class="uk-subnav home__content__subnav uk-child-width-expand" uk-switcher="connect: .my-class">
                    <li class="uk-active"><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
                <div class="home__content__boxNews uk-background-norepeat uk-background-center-center uk-background-cover uk-padding-small" data-src="images/bg_list_news.png" uk-img>
                    <ul class="uk-switcher my-class">
                        <li>
                            <div class="uk-grid-small uk-grid-20-m" uk-grid>
                                <div class="uk-width-1-3">
                                    <div class="uk-cover-container">
                                        <img src="images/thumbnails_hot_news.png" alt="" uk-cover>
                                        <canvas width="466" height="242"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-h3 home__content__boxNews__title"><a href="">Bùng Nổ Hoạt Động Kính Hồ Tranh Đoạt tại Kiếm Thế Huyết Kiếm</a></h3>
                                    <p class="home__content__boxNews__desc">Kính Hồ Tranh Đoạt Tiên Thảo là hoạt động diễn ra hàng tuần. Đây chính là dịp để các cá nhân, Bang Hội - Liên
                                        <a href="">(Xem Thêm)</a></p>
                                </div>
                                <div class="uk-width-1-1">
                                    <div class="uk-child-width-1-2 uk-grid-small uk-grid-30-m" uk-grid>
                                        <?php for ($i=0;$i<=5;$i++): ?>
                                            <div>
                                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-text-center home__content__boxNews__date">
                                                            <div>08</div>
                                                            <div>10</div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <h4 class="uk-h4 uk-margin-remove home__content__boxNews__txt"><a href="">Bùng Nổ Hoạt Động Kính Hồ Tranh Đoạt Tiên Thảo tại TLBB Mỹ Nhân</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-grid-small uk-grid-20-m" uk-grid>
                                <div class="uk-width-1-3">
                                    <div class="uk-cover-container">
                                        <img src="https://lh3.googleusercontent.com/z_xKK-jKQgCRLnmqaKskK3sSd7uIBEsRJp_Db-0jd0s4P78Ts26IG8ObFsUH_2nKSXOiF3tQf82cN805x-imgbEaF6-nMz6-o30dMV7t060lyqV69AA-edzukSi4XY71OenY8yqY=s0" alt="" uk-cover>
                                        <canvas width="466" height="242"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-h3 home__content__boxNews__title"><a href="">Bùng Nổ Hoạt Động Kính Hồ Tranh Đoạt tại Kiếm Thế Huyết Kiếm</a></h3>
                                    <p class="home__content__boxNews__desc">Kính Hồ Tranh Đoạt Tiên Thảo là hoạt động diễn ra hàng tuần. Đây chính là dịp để các cá nhân, Bang Hội - Liên
                                        <a href="">(Xem Thêm)</a></p>
                                </div>
                                <div class="uk-width-1-1">
                                    <div class="uk-child-width-1-2 uk-grid-small uk-grid-30-m" uk-grid>
                                        <?php for ($i=0;$i<=5;$i++): ?>
                                            <div>
                                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-text-center home__content__boxNews__date">
                                                            <div>08</div>
                                                            <div>10</div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <h4 class="uk-h4 uk-margin-remove home__content__boxNews__txt"><a href="">Bùng Nổ Hoạt Động Kính Hồ Tranh Đoạt Tiên Thảo tại TLBB Mỹ Nhân</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-grid-small uk-grid-20-m" uk-grid>
                                <div class="uk-width-1-3">
                                    <div class="uk-cover-container">
                                        <img src="https://lh6.googleusercontent.com/v3-W9kvsxLz0pudJD8YpXwgEZ8xBHQQ7cnogD7HYMZKAXi4XX8_A1VDjpeRV_e0C_erDvu7-5zgB2cE9aDNlRmmoYeRF69hx7GhSwvHAul1rYPFhsnNOtEDBeOBXjpO1WLgwi0_g=s0" alt="" uk-cover>
                                        <canvas width="466" height="242"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-h3 home__content__boxNews__title"><a href="">Bùng Nổ Hoạt Động Kính Hồ Tranh Đoạt tại Kiếm Thế Huyết Kiếm</a></h3>
                                    <p class="home__content__boxNews__desc">Kính Hồ Tranh Đoạt Tiên Thảo là hoạt động diễn ra hàng tuần. Đây chính là dịp để các cá nhân, Bang Hội - Liên
                                        <a href="">(Xem Thêm)</a></p>
                                </div>
                                <div class="uk-width-1-1">
                                    <div class="uk-child-width-1-2 uk-grid-small uk-grid-30-m" uk-grid>
                                        <?php for ($i=0;$i<=5;$i++): ?>
                                            <div>
                                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-text-center home__content__boxNews__date">
                                                            <div>08</div>
                                                            <div>10</div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <h4 class="uk-h4 uk-margin-remove home__content__boxNews__txt"><a href="">Bùng Nổ Hoạt Động Kính Hồ Tranh Đoạt Tiên Thảo tại TLBB Mỹ Nhân</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-grid-small uk-grid-20-m" uk-grid>
                                <div class="uk-width-1-3">
                                    <div class="uk-cover-container">
                                        <img src="images/thumbnails_hot_news.png" alt="" uk-cover>
                                        <canvas width="466" height="242"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-h3 home__content__boxNews__title"><a href="">Bùng Nổ Hoạt Động Kính Hồ Tranh Đoạt tại Kiếm Thế Huyết Kiếm</a></h3>
                                    <p class="home__content__boxNews__desc">Kính Hồ Tranh Đoạt Tiên Thảo là hoạt động diễn ra hàng tuần. Đây chính là dịp để các cá nhân, Bang Hội - Liên
                                        <a href="">(Xem Thêm)</a></p>
                                </div>
                                <div class="uk-width-1-1">
                                    <div class="uk-child-width-1-2 uk-grid-small uk-grid-30-m" uk-grid>
                                        <?php for ($i=0;$i<=5;$i++): ?>
                                            <div>
                                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-text-center home__content__boxNews__date">
                                                            <div>08</div>
                                                            <div>10</div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <h4 class="uk-h4 uk-margin-remove home__content__boxNews__txt"><a href="">Bùng Nổ Hoạt Động Kính Hồ Tranh Đoạt Tiên Thảo tại TLBB Mỹ Nhân</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-grid-small uk-grid-20-m" uk-grid>
                                <div class="uk-width-1-3">
                                    <div class="uk-cover-container">
                                        <img src="images/thumbnails_hot_news.png" alt="" uk-cover>
                                        <canvas width="466" height="242"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-h3 home__content__boxNews__title"><a href="">Bùng Nổ Hoạt Động Kính Hồ Tranh Đoạt tại Kiếm Thế Huyết Kiếm</a></h3>
                                    <p class="home__content__boxNews__desc">Kính Hồ Tranh Đoạt Tiên Thảo là hoạt động diễn ra hàng tuần. Đây chính là dịp để các cá nhân, Bang Hội - Liên
                                        <a href="">(Xem Thêm)</a></p>
                                </div>
                                <div class="uk-width-1-1">
                                    <div class="uk-child-width-1-2 uk-grid-small uk-grid-30-m" uk-grid>
                                        <?php for ($i=0;$i<=5;$i++): ?>
                                            <div>
                                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-text-center home__content__boxNews__date">
                                                            <div>08</div>
                                                            <div>10</div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <h4 class="uk-h4 uk-margin-remove home__content__boxNews__txt"><a href="">Bùng Nổ Hoạt Động Kính Hồ Tranh Đoạt Tiên Thảo tại TLBB Mỹ Nhân</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="uk-subnav home__content__nav2 uk-child-width-expand" uk-switcher="connect: .my-class2">
                    <li class="uk-active"><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
                <ul class="uk-switcher my-class2 uk-margin-medium-bottom">
                    <li>
                        <div class="uk-grid-5 uk-child-width-1-3" uk-grid>
                            <div>
                                <div class="uk-cover-container">
                                    <img src="images/thum_event1.png" alt="" uk-cover>
                                    <canvas width="538" height="344"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-cover-container">
                                    <img src="images/thums_event2.png" alt="" uk-cover>
                                    <canvas width="538" height="344"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-cover-container">
                                    <img src="images/thums_event3.png" alt="" uk-cover>
                                    <canvas width="538" height="344"></canvas>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="uk-child-width-1-6 uk-grid-small uk-grid-20-m uk-margin-medium-bottom" uk-grid uk-switcher="connect: .my-class1">
                    <?php
                    $data = array(
                        'images/caibang.png',
                        'images/thieulam.png',
                        'images/doanthi.png',
                        'images/vodang.png',
                        'images/ngamy.png',
                        'images/minhgiao.png',

                        'images/duongmon.png',
                        'images/thienvuong.png',
                        'images/ngudoc.png',
                        'images/thuyyen.png',
                        'images/conlon.png',
                        'images/thiennhan.png',
                    );
                    foreach ($data as $k=>$v): ?>
                    <div>
                        <a href=""><img class="home__content__itemLink" src="<?= $v ?>" alt=""></a>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="uk-text-center">
                    <ul class="my-class1 uk-switcher">
                        <li><img src="images/monphai_img.png" alt=""></li>
                        <li><img src="https://kt2009.mobi/img/class_thieulam.png" alt=""></li>
                        <li><img src="images/monphai_img.png" alt=""></li>
                        <li><img src="https://kt2009.mobi/img/class_thieulam.png" alt=""></li>
                        <li><img src="images/monphai_img.png" alt=""></li>
                        <li><img src="https://kt2009.mobi/img/class_thieulam.png" alt=""></li>
                        <li><img src="images/monphai_img.png" alt=""></li>
                        <li><img src="https://kt2009.mobi/img/class_thieulam.png" alt=""></li>
                        <li><img src="images/monphai_img.png" alt=""></li>
                        <li><img src="https://kt2009.mobi/img/class_thieulam.png" alt=""></li>
                        <li><img src="images/monphai_img.png" alt=""></li>
                        <li><img src="https://kt2009.mobi/img/class_thieulam.png" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="uk-width-auto">
                <aside class="home__aside">
                    <div>
                        <img class="uk-width-1-1" src="images/baotri.png" alt="">
                    </div>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true">

                        <ul class="uk-slider-items uk-child-width-1-1">
                            <li>
                                <img class="uk-width-1-1" src="images/slider1.png" alt="">
                            </li>
                            <li>
                                <img class="uk-width-1-1" src="images/slider2.png" alt="">
                            </li>
                        </ul>

                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-position-bottom-center"></ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>
                    <div class="home__aside__hoatdong uk-card-body uk-background-norepeat uk-background-top-center" data-src="images/bg_hoatdong.png" uk-img>
<!--                        <marquee direction="up" scrolldelay="200" onMouseOver="this.stop()" onMouseOut="this.start()">-->
                            <div class="slider">
                                <div>Lâu Lan Cổ Thành</div>
                                <div>Công Thành Chiến</div>
                                <div>Tống Kim</div>
                                <div>Thi Đấu Loạn Phái</div>
                                <div>Tranh Đoạt Lãnh Thổ</div>
                                <div>Tiêu Dao Cốc</div>
                                <div>Bạch Hổ Đường</div>
                                <div>Bao Vạn Đồng</div>
                                <div>Bí Cảnh</div>
                                <div>Khiêu Chiến Du Long</div>
                                <div>Hải Tặc</div>
                                <div>Thương Hội</div>
                                <div>Quân Doanh</div>

                            </div>
<!--                        </marquee>-->
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<div class="home__alert" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <img src="images/warning18.png" alt="">
</div>
<?php require "template-parts/layouts/footer.php"; ?>