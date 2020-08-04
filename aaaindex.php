<?php require __DIR__ . '/__connect_db.php';
$pageName = 'aboutWATZ';  // 這裡放你的pagename
?>
<?php include __DIR__ . '/__html_head.php' ?>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

<style>
    /* -------------區塊一------------- */
        
    .block1 {
            width: 100vw;
            height: 100vh;
            background: url(images/BG1.svg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            justify-content: center;
            align-items: center;
        }
        
        .block1-flexcontrol {
            width: 600px;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .box-kvTop{
            width: 600px;
        }
        
        .box-kvTop img {
            width: 200px;
        }
        
        .box-kvBottom img {
            height: 130px;
            padding: 10px;
        }
        
        @media screen and (max-width: 992px) {
            .block1 {
                background: url(images/BG-mobile1.svg) center center no-repeat;
                background-size: cover;
            }
            .block1-flexcontrol {
                width: 80vw;
                
            }
            .box-kvTop{
                width: auto;
            }
            .box-kvTop img {
                width: 26vw;
                margin: 20px 0;
            }
            .box-kvBottom {
                margin-left: 3vw;
                width: 70vw;
                justify-content: space-evenly;
            }
            .box-wa {
                order: -1;
            }
            .box-kvBottom img {
                height: 22vw;
            }
        }
        /* -------------區塊二------------- */
        
        .block2 {
            width: 100vw;
            height: 54vw;
            overflow: hidden;
            /* position: relative; */
        }
        
        .block2 img {
            width: 100vw;
            height: 54vw;
            object-fit: cover;
        }
        
        .slick-dots {
            height: 20px;
            width: 100%;
            bottom: 10px;
            position: absolute;
            left: 0;
            justify-content: center;
            align-items: center;
        }
        
        .slick-dots li {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            border: 1px solid #fff;
            margin: 0 5px;
        }
        
        .slick-dots li button:before {
            font-family: 'slick';
            font-size: 17px;
            line-height: 15px;
            position: absolute;
            top: 0;
            left: -2px;
            width: 15px;
            height: 15px;
            content: •;
            text-align: center;
            opacity: .25;
            color: white;
        }
        
        .slick-dots li.slick-active button:before {
            opacity: 1;
            color: white;
        }
        
        .slick-dotted.slick-slider {
            margin-bottom: 0;
        }
        
        @media screen and (max-width: 992px) {
            .block2 {
                height: 100vh;
                overflow: hidden;
                /* position: relative; */
            }
            .block2 img {
                height: 100vh;
                object-fit: cover;
            }
            .slick-dots {
                height: 20px;
                width: 100%;
                bottom: 10px;
                position: absolute;
                left: 0;
                justify-content: center;
                align-items: center;
            }
            .slick-dots li {
                width: 15px;
                height: 15px;
                border-radius: 50%;
                border: 1px solid #fff;
                margin: 0 5px;
            }
            .slick-dots li button:before {
                font-family: 'slick';
                font-size: 17px;
                line-height: 15px;
                position: absolute;
                top: 0;
                left: -2px;
                width: 15px;
                height: 15px;
                content: •;
                text-align: center;
                opacity: .25;
                color: white;
            }
        }
        /* -------------區塊三------------- */
        
        .block3 {
            width: 100vw;
            height: 100vh;
            background: url(images/BG2.svg);
            background-size: cover;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .img-boxtitle-img {
            height: 145px;
            width: 385px;
            position: relative;
            justify-content: center;
            align-items: center;
        }
        
        .img-boxtitle-img img {
            height: 120px;
            top: 0;
            position: absolute;
        }
        
        .img-boxtitle-img h1 {
            font-family: 'Fredoka One', cursive;
            color: #fff;
            z-index: 1;
        }
        
        .block3 .giftbox {
            width: 900px;
            justify-content: space-between;
            margin-top: 10vh;
        }
        
        .block3 .giftbox .gift {
            flex-direction: column;
            align-items: center;
            width: 250px;
        }
        
        .block3 .gift h3 {
            color: #0388A6;
            margin-top: 30px;
            white-space: nowrap;
        }
        
        .block3 .giftbox img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        @media screen and (max-width: 992px) {
            .block3 .giftbox {
                width: 70vw;
                margin-top: 3vh;
            }
            .block3 .giftbox .gift {
                width: 20vw;
            }
        }
        
        @media screen and (max-width: 576px) {
            .img-boxtitle-img {
                width: 50vw;
            }
            .img-boxtitle-img img {
                width: 100%;
                height: 100%;
                top: 0;
                position: absolute;
            }
            .img-boxtitle-img h1 {
                font-size: 1.4rem;
            }
            .block3 .giftbox {
                justify-content: center;
                align-items: center;
                width: 80vw;
                height: 40vh;
                margin-top: 0;
                /* overflow: hidden; */
            }
            .block3 .giftbox img {
                width: 65vw;
                object-fit: contain;
                margin: 0 auto;
            }
            .block3 .giftbox h3 {
                text-align: center;
            }
            .slick-prev:before {
                left: 0;
                top: 50%;
                z-index: 1;
                color: #03588C;
                opacity: 1;
            }
            .slick-next:before {
                z-index: 1;
                color: #03588C;
                opacity: 1;
            }
        }
        /* -------------區塊四 plugin-------------*/
        
        .block4 {
            height: 100vh;
            background-color: #fff;
            align-items: center;
            overflow: hidden;
            flex-direction: column;
        }
        
        .slider-product {
            height: 20vw;
            width: 100vw;
            background: #fff;
            margin-top: 15vh;
            z-index: 1;
        }
        
        .slider-product img {
            width: 16.6vw;
            height: 20vw;
            object-fit: cover;
            border-left: 5px solid #fff;
        }
        
        .block4-bg {
            justify-content: center;
            position: relative;
            width: 100vw;
        }
        
        .block4-bg .img-BG-dotted1 {
            width: 500px;
            position: absolute;
            left: 0;
            transform: translate(-50%, -60%);
        }
        
        .block4-bg .img-BG-dotted2 {
            position: absolute;
            width: 300px;
            right: 0;
            transform: translate(5%, -60%);
        }
        
        .block4-bg span {
            font-size: 135px;
            font-family: 'Fredoka One', cursive;
            color: #0388A6;
            opacity: .2;
            transform: translateY(-38%);
            white-space: nowrap;
        }
        
        @media screen and (max-width: 1200px) {
            .slider-product {
                height: 25vw;
            }
            .slider-product img {
                width: 20vw;
                height: 25vw;
            }
        }
        
        @media screen and (max-width: 992px) {
            .slider-product {
                height: 39vw;
            }
            .slider-product img {
                width: 33vw;
                height: 39vw;
            }
        }
        
        @media screen and (max-width: 576px) {
            .slider-product {
                margin-top: 80px;
                width: 100vw;
                height: 120vw;
            }
            .slider-product img {
                width: 100vw;
                height: 120vw;
                border: 0;
            }
            .block4-bg {
                position: relative;
                width: 100vw;
            }
            .block4-bg .img-BG-dotted1 {
                width: 250px;
                position: absolute;
                left: 0;
                transform: translate(-50%, -65%);
            }
            .block4-bg .img-BG-dotted2 {
                position: absolute;
                width: 150px;
                right: 0;
                transform: translate(5%, -65%);
            }
            .block4-bg span {
                font-size: 40px;
                transform: translateY(0);
            }
        }
        
        footer {
            position: absolute;
            bottom: 0;
        }
</style>

<div class="container flex">

    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <!---區塊一：主視覺---->
    <div class="block1 flex">
            <div class="block1-flexcontrol flex">
                <div class="box-kvTop flex">
                    <div class="">
                        <img id="kvSocks1" src="/images/product/index-clear-01.png" alt="">
                    </div>
                    <div class="">
                        <img id="kvSocks2" src="/images/product/index-clear-02.png" alt="">
                    </div>
                    <div class="">
                        <img id="kvSocks3" src="/images/product/index-clear-03.png" alt="">
                    </div>
                </div>
                <div class="box-kvBottom box-wa flex">
                    <div class="img-logo-w">
                        <img src="images/logo-w.svg" alt="">
                    </div>
                    <div class="img-logo-a">
                        <img src="images/logo-a.svg" alt="">
                    </div>
                </div>
                <div class="box-kvBottom box-tz flex">
                    <div class="img-logo-t">
                        <img src="images/logo-t.svg" alt="">
                    </div>
                    <div class="img-logo-z">
                        <img src="images/logo-z.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!---區塊二：slider---->

        <div class="block2">
            <div>
                <a href=""><img src="images/index-slider1.png" alt=""></a>
            </div>
            <div>
                <a href=""><img src="images/index-slider2.png" alt=""></a>
            </div>
            <div>
                <a href=""><img src="images/index-slider3.png" alt=""></a>
            </div>
        </div>
        <!---區塊三：禮盒---->
        <div class="block3 flex">
            <div class="img-boxtitle-img flex">
                <h1>WATZ BOX</h1>
                <img class="transition" src="images/title-bgc.svg" alt="">
            </div>
            <div class="giftbox flex">
                <div class="gift flex transition">
                    <a href="">
                        <img id="watzbox1" src="images/watzbox1-1.png" alt="">
                    </a>
                    <h3>芒果派對</h3>
                </div>
                <div class="gift flex transition">
                    <a href="">
                        <img id="watzbox2" src="images/watzbox2-1.png" alt="">
                    </a>
                    <h3>群魔亂舞</h3>
                </div>
                <div class="gift flex transition">
                    <a href="">
                        <img id="watzbox3" src="images/watzbox3-1.png" alt="">
                    </a>
                    <h3>灰姑娘的水晶襪</h3>
                </div>
            </div>
        </div>
        <!---區塊四：plugin---->
        <div class="block4 flex">
            <div class="slider-product">
                <div>
                    <a href=""><img src="images/product/blueyellowsquare-05.jpg" alt=""></a>
                </div>
                <div>
                    <a href=""><img src="images/product/banana-02.jpeg" alt=""></a>
                </div>
                <div>
                    <a href=""><img src="images/product/blueyellowsquare-05.jpg" alt=""></a>
                </div>
                <div>
                    <a href=""><img src="images/product/banana-02.jpeg" alt=""></a>
                </div>
                <div>
                    <a href=""><img src="images/product/blueyellowsquare-05.jpg" alt=""></a>
                </div>
                <div>
                    <a href=""><img src="images/product/banana-02.jpeg" alt=""></a>
                </div>
                <div>
                    <a href=""><img src="images/product/blueyellowsquare-05.jpg" alt=""></a>
                </div>
                <div>
                    <a href=""><img src="images/product/banana-02.jpeg" alt=""></a>
                </div>
                <div>
                    <a href=""><img src="images/product/blueyellowsquare-05.jpg" alt=""></a>
                </div>
            </div>
            <div class="block4-bg flex">
                <img class="img-BG-dotted1" src="images/BG-dotted1.svg" alt="">
                <span>SOCKS GALLERY</span>
                <img class="img-BG-dotted2" src="images/BG-dotted2.svg" alt="">
            </div>
        </div>

    <?php include __DIR__ . '/__html_footer.php' ?>
</div>
<?php include __DIR__ . '/__scripts.php' ?>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    //kv Socks-Changing Animatie

    function sockChange(n) {
        changeSocks1(n);
        setInterval(function() {
            if (n > 3) n = 1;
            changeSocks1(n);
            n++;
        }, 1500);
    }

    function changeSocks1(n) {
        $("#kvSocks1").attr("src", "images/product/index-clear-0" + n + ".png");

        setTimeout(function() {
            changeSocks2(n);
        }, 500);

    }

    function changeSocks2(n, cb) {
        n = n + 3;
        $("#kvSocks2").attr("src", "images/product/index-clear-0" + n + ".png")

        setTimeout(function() {
            changeSocks3(n)
        }, 500);
    }

    function changeSocks3(n) {
        n = n + 3;
        $("#kvSocks3").attr("src", "images/product/index-clear-0" + n + ".png")
    }

    sockChange(1);


    // watz-box

    $("#watzbox1").hover(function() {
        $(this).attr("src", "images/watzbox1-2.png");
    }, function() {
        $(this).attr("src", "images/watzbox1-1.png");
    })

    $("#watzbox2").hover(function() {
        $(this).attr("src", "images/watzbox2-2.png");
    }, function() {
        $(this).attr("src", "images/watzbox2-1.png");
    })

    $("#watzbox3").hover(function() {
        $(this).attr("src", "images/watzbox3-2.png");
    }, function() {
        $(this).attr("src", "images/watzbox3-1.png");
    })

    //slick

    $(document).ready(function() {

        $('.block2').slick({
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            pauseOnHover: false
        });
    });

    $(document).ready(function() {

        if ($(window).width() < 576) {

            $('.giftbox').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false,
                // autoplaySpeed: 2000,
                cssEase: 'linear',
                arrows: true,
                speed: 800
            });
        }
    });


    $(document).ready(function() {

        if ($(window).width() < 1200 && $(window).width() > 992) {

            $('.slider-product').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 0,
                cssEase: 'linear',
                arrows: false,
                speed: 3000
            });
        }

        if ($(window).width() < 992 && $(window).width() > 576) {

            $('.slider-product').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 0,
                cssEase: 'linear',
                arrows: false,
                speed: 3000
            });
        }

        if ($(window).width() < 576) {

            $('.slider-product').slick({
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                pauseOnHover: false
            });
        }

        $('.slider-product').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            cssEase: 'linear',
            arrows: false,
            speed: 3000
        });
    });
</script>

<?php require __DIR__ . '/__html_foot.php' ?>