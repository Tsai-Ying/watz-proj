<?php require __DIR__ . '/__connect_db.php';
$pageName = 'aboutWATZ';  // 這裡放你的pagename
?>
<?php include __DIR__ . '/__html_head.php' ?>

<!-- 自己另外的CSS插件 <link> 請放這邊 (nav.css及google fonts共用的不用放) -->

<style>
        /* -----------------empty-cart---------------        */


        .container {
            width: 100vw;
            min-height: 100vh;
            user-select: none;
            overflow: hidden;
        }

        .block1 {
            position: relative;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .bg-1 {
            width: 100vw;
            height: 100vh;

        }

        .bg-1 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo {
            width: 450px;
            position: absolute;
        }

        .logo img {
            width: 100%;
            height: 100%;
            filter: drop-shadow(8px 8px 6px rgba(105, 105, 105, 0.7));
        }

        .scroll-down {
            position: absolute;
            flex-direction: column;
            right: 50px;
            bottom: 30px;
            animation: mouse-scroll 1s infinite alternate;
        }
        @-webkit-keyframes mouse-scroll {
            to {
                transform: translate(0, -30px);
            }
            
        }

        .scroll-down h3 {
            writing-mode: vertical-lr;
            margin-bottom: 20px;
        }

        .scroll-down img {
            width: 30px;
        }

        .block2 {
            width: 100vw;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .bg-line {
            /* border: 1px solid blue; */
            align-items: center;
        }

        .bg-line li {
            width: calc(100vw / 4);
            height: calc(100vw / 4);
        }

        .bg-line li img {
            width: 100%;
            height: 100%;
            object-fit: cover;

        }

        .center-frame {
            position: absolute;
            flex-direction: column;
            justify-content: space-between;

        }

        .watzbox {
            width: 450px;
            height: 450px;
            margin-bottom: 40px;
        }

        .watzbox img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .seemore {
            width: 200px;
            height: 45px;
            background-color: #0388A6;
            position: absolute;
            right: -20px;
            bottom: -10px;
            outline: none;
            box-shadow: none;
            align-items: center;
            justify-content: center;
        }

        .seemore h3 {
            color: #ffffff;
        }

        .seemore:hover {
            background-color: #FF9685;
        }

        .block3 {
            /* width: 100vw;
            height: 100vh; */
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .bg-3 {
            width: 100vw;
            height: 100vh;
            justify-content: flex-start;
        }

        .bg-3 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .block3 .pic {
            width: 550px;
            position: absolute;
            z-index: 1;
        }

        .path-up {
            position: absolute;
            left: 30px;
            top: 0;
            width: 700px;
        }

        .path-down {
            position: absolute;
            right: 0px;
            bottom: 0;
            width: 700px;
        }

        .block3 .seemore {
            position: absolute;
            right: 15%;
            bottom: 30%;
            background-color: #B95376;
        }
        .block3 .seemore:hover{
            background-color: #0388A6;
        }

        .block4 {
            height: 100vh;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .bg4 {
            width: 55vw;
            height: 100vh;
            position: absolute;
            right: 0;
        }

        .bg4 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .info{
            height: 100vh;
            /* position: absolute; */
            z-index: 1;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* border: 1px solid greenyellow; */
        }
        .info img{
            width: 450px;
        }
        .info .title{
            align-items: center;
            justify-content: center;
            margin: 20px 0;
        }
        .info .title h1{
            position: absolute;
            color: #E7EC99;
        }
        .title img{
            width: 650px;
            height: 100px;
        }
        .info .style1{
            transform: translateX(-60%);
        }
        .block5{
            width: 100vw;
            height: 100vh;
        }
        .block5 img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        footer{
            position: absolute;
            bottom: 0;
        }

    </style>

<div class="container flex">
    <!-- 如果container有其它class要自己加上 -->

    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <div class="block1 flex">
            <div class="bg-1">
                <img src="images/irregular/kv-web.jpg" alt="">
            </div>
            <div class="logo">
                <img src="images/irregular/WATZ_irregular_LOGO.png" alt="">
            </div>
            <div class="scroll-down flex">
                <h3>SCROLL</h3>
                <img src="images/irregular/scroll-down.svg" alt="">
            </div>
        </div>
        <div class="block2 flex">
            <ul class="bg-line flex">
                <li class="">
                    <img src="images/irregular/square1-1.jpg" alt="">
                </li>
                <li class="">
                    <img src="images/irregular/square1-2.svg" alt="">
                </li>
                <li class="">
                    <img src="images/irregular/square1-3.svg" alt="">
                </li>
                <li class="">
                    <img src="images/irregular/square1-4.jpg" alt="">
                </li>
            </ul>
            <ul class="bg-line flex">
                <li class="">
                    <img src="images/irregular/square2-1.jpg" alt="">
                </li>
                <li class="">
                    <img src="images/irregular/square2-2.svg" alt="">
                </li>
                <li class="">
                    <img src="images/irregular/square2-3.svg" alt="">
                </li>
                <li class="">
                    <img src="images/irregular/square2-4.jpg" alt="">
                </li>
            </ul>
            <ul class="bg-line flex">
                <li class="">
                    <img src="images/irregular/square3-1.jpg" alt="">
                </li>
                <li class="">
                    <img src="images/irregular/square3-2.svg" alt="">
                </li>
                <li class="">
                    <img src="images/irregular/square3-3.svg" alt="">
                </li>
                <li class="">
                    <img src="images/irregular/square3-4.jpg" alt="">
                </li>
            </ul>
            <ul class="bg-line flex">
                <li class="">
                    <img src="images/irregular/square4-1.jpg" alt="">
                </li>
                <li class="">
                    <img src="images/irregular/square4-2.svg" alt="">
                </li>
                <li class="">
                    <img src="images/irregular/square4-3.jpg" alt="">
                </li>
                <li class="">
                    <img src="images/irregular/square4-4.jpg" alt="">
                </li>
            </ul>
            <div class="center-frame flex">
                <div class="watzbox">
                    <img id="watzbox" src="images/watzbox2-1.png" alt="">
                </div>
                <button class="seemore btn-coral flex">
                    <h3>See More</h3>
                </button>
            </div>
        </div>
        <div class="block3 flex">
            <div class="bg-3 flex">
                <img src="images/irregular/bg3-left.svg" alt="">
                <img src="images/irregular/bg3-right.svg" alt="">
            </div>
            <img class="path-up" src="images/irregular/Path-down.svg" alt="">
            <img class="pic" src="images/irregular/WATZ_irregular.png" alt="">
            <img class="path-down" src="images/irregular/Path-up.svg" alt="">
            <button class="seemore btn-coral flex">
                <h3>See More</h3>
            </button>
        </div>
        <div class="block4 flex">
            <div class="bg4 flex">
                <img src="images/irregular/popcorn.jpg" alt="">
            </div>
            <div class="info flex">
                <img class="style1" src="images/irregular/style1.jpg" alt="">
                <div class="title flex">
                    <h1>styling yourself</h1>
                    <img src="images/irregular/brush.svg" alt="">
                </div>
                <img src="images/irregular/style2.jpg" alt="">
            </div>
        </div>
        <div class="block5">
                <img src="images/irregular/bg5.jpeg" alt="">

        </div>

    <?php include __DIR__ . '/__html_footer.php' ?>
</div>
<?php include __DIR__ . '/__scripts.php' ?>

<script>
    $("#watzbox").hover(function() {
        $(this).attr("src", "images/watzbox2-2.png");
    }, function() {
        $(this).attr("src", "images/watzbox2-1.png");
    })
</script>

<?php require __DIR__ . '/__html_foot.php' ?>