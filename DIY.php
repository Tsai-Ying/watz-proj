<?php require __DIR__ . '/__connect_db.php';
$pageName = 'DIY';  // 這裡放你的pagename
?>
<?php include __DIR__ . '/__html_head.php' ?>
<style>
    .container {
        width: 100%;
        min-height: 100vh;
        position: relative;
        background-size: cover;
        background-image: url(images/BG2.svg);
        background-repeat: repeat-y;
        user-select: none;
    }

    .diy-pattern {
        width: 100%;
        height: 100vh;
        position: absolute;
        z-index: 0;
        display: none;
    }

    .diy-pattern div {
        width: calc(100% / 3);
        height: 100vh;
    }

    .diy-pattern div img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    .wrapper {
        width: 1200px;
        flex-direction: column;
        justify-content: center;
        align-items: space-between;
    }

    .btn-top {
        z-index: 1;
    }

    .block-top {
        width: 100%;
        height: 100vh;
        text-align: center;
        flex-direction: column;
    }

    .block-top>h1 {
        margin: 200px 0 60px;
        font-family: 'Fredoka One';
        color: #03588C;
        letter-spacing: 5px;
        z-index: 1;
    }

    .block-top>h1:hover {
        color: #0388A6;
    }

    .block-top>div {
        justify-content: space-evenly;
        align-items: center;
    }

    .diy-socks {
        width: 300px;
        height: 400px;
    }

    .diy-socks img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: drop-shadow(2px 2px 2px rgb(61, 61, 61));
    }

    .img-title-bgc {
        width: 300px;
        position: relative;
        align-self: flex-end;
        margin-top: 30px;
        cursor: pointer;
    }

    .img-title-bgc .svg {
        width: 280px;
    }

    .img-title-bgc>h1 {
        color: white;
        position: absolute;
        font-family: 'Fredoka One';
        letter-spacing: 5px;
        font-size: 2rem;
        margin-top: 10px;
        cursor: pointer;
    }

    .img-title-bgc .cls-1 {
        fill: #FF9685;
        transition: .4s;
    }

    .img-title-bgc:hover .cls-1 {
        fill: #0388A6;
    }

    .block-bottom {
        flex-direction: column;
        margin: 0px 60px 150px;
        position: relative;
        padding-top: 100px;
    }

    .tutorial {
        align-self: flex-end;
        position: relative;
        width: 70px;
        height: 70px;
        cursor: pointer;
        margin-bottom: 20px;
    }

    .tutorial:hover {
        transform: scale(1.1);
    }

    .tutorial#tutor2 {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 3;
        display: none;
        padding-top: 100px;
    }

    .img-btn-closebg img {
        width: 70px;
    }

    .img-btn-closebg {
        position: absolute;
    }

    .img-btn-closebg div {
        font-size: 60px;
        transform: rotate(45deg);
        font-weight: 900;
        margin: -75px 0 0 17.5px;
    }

    .img-questionmark-circle img {
        width: 70px;
    }

    .img-questionmark-circle {
        position: absolute;
    }

    .img-questionmark {
        position: absolute;
        margin: 15px 0 0 27px;
    }

    .img-questionmark img {
        width: 20px;
    }

    .dash-box {
        width: 1080px;
        height: 800px;
        position: absolute;
        margin-top: 90px;
        z-index: 3;
        display: none;
        padding-top: 100px;
    }

    .step1 {
        top: 5px;
        right: 10px;
    }

    .step2 {
        top: 225px;
        right: 10px;
    }

    .clean-all {
        bottom: 100px;
        right: 290px;
    }

    .step4 {
        bottom: 100px;
        right: 30px;
    }

    .step4-1 {
        display: none;
    }

    .step3 {
        bottom: 240px;
        right: 510px;
    }

    .block-bottom .dash-box h3 {
        color: white;
        font-weight: 400;
        position: absolute;
    }

    .flexbox {
        flex-direction: row;
        justify-content: space-between;
        position: relative;
        z-index: 0;
    }

    .cls-1 {
        fill: red;
    }

    .diy-area {
        display: none;
        width: 290px;
        height: 480px;
        margin-left: 150px;
    }

    .appear {
        display: block;
    }

    .box-right {
        width: 450px;
        height: 800px;
        background: #FCF2C1;
        border-radius: 15px;
        position: relative;
        z-index: 2;
    }

    .socks-color {
        width: 100%;
        height: 225px;
        border: 2px solid transparent;
        flex-direction: column;
        margin-bottom: 10px;
        position: relative;
    }

    .dash1 {
        width: 450px;
        height: 215px;
        border: 2px dashed #F2DE79;
        position: absolute;
        top: 0;
        right: 0;
    }

    .pattern-with-shape {
        width: 100%;
        height: 410px;
        border: 2px solid transparent;
        flex-direction: column;
        margin-bottom: 10px;
        position: relative;

    }

    .dash2 {
        width: 450px;
        height: 415px;
        border: 2px dashed #F2DE79;
        top: 220px;
        right: 0;
        position: absolute;
    }

    .btn-box {
        width: 100%;
        height: 140px;
        position: relative;
        justify-content: space-between;
        align-items: center;
    }

    .dash-left,
    .dash-right {
        position: absolute;
        width: 220px;
        height: 160px;
        border: 2px dashed #F2DE79;
        bottom: 0;
        right: 0;
    }

    .dash-left {
        right: 230px;
    }

    .dash-side {
        width: 50px;
        height: 225px;
        border: 2px dashed #F2DE79;
        position: absolute;
        bottom: 0;
        right: 950px;
    }

    .btn-left,
    .btn-right {
        width: 49%;
        height: 140px;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .socks-color>h3,
    .pattern h3,
    .shape h3 {
        margin: 30px 0 0 30px;
    }

    .sockscolor-dots {
        width: 420px;
        height: 140px;
        padding: 15px 0 0 30px;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        cursor: pointer;
    }

    .sockscolor-dots img {
        width: 50px;
        margin-right: 21px;
        opacity: 0;
    }

    .sockscolor-dots li div:hover img {
        opacity: 1;
    }

    .color {
        width: 40px;
        height: 40px;
        background: grey;
        border-radius: 50%;
        position: absolute;
        margin-top: -51.5px;
        margin-left: 5px;
    }

    .color#a1 {
        background: #03588C;
    }

    .color#a2 {
        background: #F2DE79;
    }

    .color#a3 {
        background: #0388A6;
    }

    .color#a3 {
        background: #FF9685;
    }

    .color#a4 {
        background: #AA9BDC;
    }

    .color#a5 {
        background: #C24343;
    }

    .color#a6 {
        background: #C2437A;
    }

    .color#a7 {
        background: #337A3A;
    }

    .color#a8 {
        background: #F88C00;
    }

    .color#a9 {
        background: #0388A6;
    }

    .color#a10 {
        background: #E5B48E;
    }

    .img-pattern {
        flex-wrap: wrap;
        width: 420px;
        height: 153px;
        padding: 15px 0 0 30px;
        margin-bottom: -40px;
    }

    .img-pattern div {
        width: 55px;
        margin: 0 20px 0 0;
        cursor: pointer;
        z-index: 0;
    }

    .shape-flex {
        flex-wrap: wrap;
        width: 420px;
        height: 153px;
    }

    .shape-flex div {
        width: 40px;
        height: 40px;
        margin: 15px 10px 0 30px;
        cursor: pointer;
        z-index: 0;
    }

    .img-strawberry,
    .img-cherry {
        width: 32px;
        margin-left: 4px;
    }

    .img-icecream {
        width: 25px;
        margin: -3px 0 0 8px;
    }

    .btn-box {
        justify-content: center;
        align-items: center;
    }

    .btn-box button {
        width: 180px;
        z-index: 1;
    }

    .btn-clear {
        background: #03588C;
    }

    .btn-clear:hover {
        background: #0388A6;
    }

    .btn-coral:hover {
        background: #0388A6;
    }

    .shape-color {
        width: 500px;
        height: 225px;
        background: white;
        border-radius: 15px;
        position: absolute;
        z-index: 0;
        bottom: 0;
        right: 0;
        overflow: hidden;
    }

    .shape-color-dots {
        width: 450px;
        height: 100%;
        /* border: 1px solid red; */
        position: absolute;
        top: 0;
        right: 0;
    }

    .sockscolor-dots#ul2 {
        padding: 50px 50px 0 0;
        margin: 10px 0 0 80px;
    }

    .sockscolor-dots#ul2 li {
        margin-bottom: 15px;
    }

    .socks-color#ul3 {
        display: none;
    }

    .shape-color h3 {
        color: #FF9685;
        font-family: 'Fredoka One';
        letter-spacing: 5px;
        transform: rotate(270deg);
        position: absolute;
        top: 100px;
        left: -25px;
        cursor: pointer;
    }

    .move-left {
        transform: translateX(-100%);
    }

    .color#b1 {
        background: #03588C;
    }

    .color#b2 {
        background: #F2DE79;
    }

    .color#b3 {
        background: #0388A6;
    }

    .color#b3 {
        background: #FF9685;
    }

    .color#b4 {
        background: #AA9BDC;
    }

    .color#b5 {
        background: #C24343;
    }

    .color#b6 {
        background: #C2437A;
    }

    .color#b7 {
        background: #337A3A;
    }

    .color#b8 {
        background: #F88C00;
    }

    .color#b9 {
        background: #0388A6;
    }

    .color#b10 {
        background: #E5B48E;
    }

    .modal {
        width: 100vw;
        height: 100vh;
        background: black;
        opacity: .6;
        position: fixed;
        top: 0;
        z-index: 2;
        display: none;
    }

    footer {
        z-index: 0;
    }

    @media screen and (max-width: 1200px) {
        .wrapper {
            width: 990px;
        }

        .diy-socks img {
            width: 250px;
            height: 340px;
        }

        .box-right {
            width: 350px;
            height: 750px;
        }

        .diy-area {
            margin-left: 100px;
        }

        .shape-color {
            width: 400px;
            height: 180px;
            padding-top: 10px;
        }

        .shape-color h3 {
            top: 77px;
        }

        .sockscolor-dots {
            width: 350px;
            height: 120px;
            padding: 0 5px 0 15px;
        }

        .sockscolor-dots {
            margin-top: 20px;
        }

        .sockscolor-dots li {
            justify-content: space-between;
            margin: 0 5px;
        }

        .sockscolor-dots li img {
            margin: 0 6px -1px 4px;
            width: 45px;
            /* opacity: 1; */
        }

        .image-select-circle {
            margin: 0;
        }

        .color {
            margin: -46px 0 0 8px;
            width: 37px;
            height: 37px;
        }

        .pattern-with-shape {
            height: 350px;
        }

        .pattern h3 {
            margin-top: 0;
        }

        .img-pattern {
            width: 350px;
        }

        .img-pattern div {
            width: 40px;
        }

        .shape h3 {
            margin-top: 10px;
        }

        .shape-flex {
            width: 350px;
            padding: 10px 0 0 12px;
        }

        .shape-flex div {
            margin: 10px 12px 0;
        }

        .sockscolor-dots#ul2 {
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 0;
            margin: 25px 0 0 50px;
        }

        .btn-box button {
            width: 160px;
        }

        .dash-box {
            width: 870px;
            height: 750px;
        }

        .dash1,
        .dash2 {
            width: 350px;
        }

        .dash-left,
        .dash-right {
            width: 173px;
        }

        .dash-left {
            right: 176px;
        }

        .dash2 {
            height: 360px;
        }

        .dash-side {
            right: 750px;
            height: 180px;
        }

        .clean-all {
            bottom: 120px;
            right: 210px;
        }

        .step4 {
            bottom: 120px;
            right: 0;
        }

        .step3 {
            right: 440px;
            bottom: 200px;
        }

    }

    @media screen and (max-width: 992px) {
        body {
            height: calc(100vh + 160px);
        }

        .wrapper {
            width: 100vw;
            height: 100vh;
            margin: 0;
            align-items: center;
        }

        .diy-pattern {
            display: none;
        }

        .block-top,
        .shape-color {
            display: none;
        }

        .block-bottom {
            width: 90vw;
            margin: 0;
            padding: 0;
        }

        .flexbox {
            flex-direction: column;
        }

        .box-left {
            width: 90vw;
            height: 30vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 2vw;
        }

        .box-right {
            background: white;
            width: 90vw;
            height: 50vh;
        }

        .diy-area {
            width: 100%;
            height: 100%;
            margin: 5vw 0 0 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .diy-area img {
            width: 25vw;
            height: 25vh;
        }

        .box-right {
            width: 90vw;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .socks-color,
        .pattern-with-shape,
        .socks-color#ul3 {
            width: 80%;
            height: 14vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .socks-color h3,
        .pattern-with-shape h3,
        .socks-color#ul3 h3 {
            margin: 1vh 0 1vh 0;
            width: 100%;
        }

        .sockscolor-dots {
            width: 100%;
            height: 12vh;
            margin: 0;
            padding: 0;
        }

        .pattern-with-shape {
            width: 80%;
            height: 10vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .img-pattern-empty,
        .shape {
            display: none;
        }

        .img-pattern {
            width: 100%;
            height: fit-content;
            padding: 0;
        }

        .pattern h3 {
            margin: 0;
        }

        .tutorial {
            position: absolute;
            z-index: 2;
        }

        .btn-box {
            width: 80%;
            height: 8vh;
        }

        .btn-box button {
            width: 90%;
            height: 45px;
        }

        .btn-left,
        .btn-right {
            height: fit-content;
        }

        .sockscolor-dots li img {
            margin: 0 6px -1px 4px;
        }

        .tutorial#tutor2 {
            padding: 0;
        }

        .step4,
        .dash-side,
        .step3 {
            display: none;
        }

        .dash-box {
            margin-top: calc(30vh + 2vw);
            width: 90vw;
            height: 50vh;
            /* border: 1px solid red; */
        }

        .dash1 {
            width: 100%;
            height: 14.5vh;
            top: 0;
            right: 0;
        }

        .dash2 {
            width: 100%;
            height: 26.5vh;
            top: 15vh;
        }

        .step2 {
            top: 15.5vh;
        }

        .dash-left,
        .dash-right {
            width: 49.7%;
            height: 7.8vh;
        }

        .dash-left {
            left: 0;
        }

        .clean-all {
            bottom: 4.5vh;
            left: 20%;
        }

        .step4-1 {
            display: block;
            bottom: 4.5vh;
            right: 15%;
        }

    }

    @media screen and (max-width: 576px) {
        .container {
            background-size: cover;
            background-image: url(images/BG-mobile2.svg);
            background-repeat: repeat-y;
        }

        .diy-area {
            padding-top: 2vh;
        }

        .diy-area img {
            width: 40vw;
        }

        .box-right {
            justify-content: space-evenly;
        }

        .color {
            margin: -46px 0 0 8px;
            width: 25px;
            height: 25px;
        }

        .sockscolor-dots li img {
            width: 32px;
            height: 32px;
            margin: 0 6px 12px 5px
        }

        .img-pattern img {
            width: 30px;
        }

        .btn-box {
            height: 5vh;
        }

        .btn-box button {
            height: 30px;
        }

        .step1,
        .step2,
        .step4-1,
        .clean-all {
            font-size: .8rem;
            white-space: nowrap;
        }

        .clean-all {
            bottom: 5vh;
            left: 17%;
        }

        .step4-1 {
            display: block;
            bottom: 5vh;
            right: 10%;
        }

    }
</style>


<div class="container flex">
    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <div class="diy-pattern flex spot mobile-none">
        <div class="pattern-bg1">
            <img src="images/socks-bg1.svg" alt="">
        </div>
        <div class="pattern-bg2">
            <img src="images/socks-bg2.svg" alt="">
        </div>
        <div class="pattern-bg3">
            <img src="images/socks-bg3.svg" alt="">
        </div>
    </div>
    <div class="wrapper flex">
        <div class="block-top flex mobile-none">
            <h1 class="transition">Create your own WATZ !</h1>
            <div class="flex transition">
                <div class="diy-socks"><img class="transition" src="images/linebox-02.png" alt=""></div>
                <div class="diy-socks"><img class="transition" src="images/linebox2-05.png" alt=""></div>
                <div class="diy-socks"><img class="transition" src="images/linebox2-04.png" alt=""></div>
            </div>
            <div class="img-title-bgc flex transition go-next">
                <img class="svg icon" src="images/title-bgc.svg" alt="">
                <h1>START</h1>
            </div>
        </div>
        <div class="block-bottom flex">
            <div class="tutorial transition">
                <div class="img-questionmark-circle"><img src="images/questionmark circle.svg" alt=""></div>
                <div class="img-questionmark"><img src="images/questionmark.svg" alt=""></div>
            </div>
            <div class="tutorial transition" id="tutor2">
                <div class="img-btn-closebg">
                    <img src="images/btn-closebg.svg" alt="">
                    <div>+</div>
                </div>
            </div>
            <div class="dash-box">
                <h3 class="step1">Step1. 選擇襪子底色</h3>
                <div class="dash1"></div>
                <h3 class="step2">Step2. 選擇襪子樣板或圖案</h3>
                <div class="dash2"></div>
                <h3 class="clean-all">清除樣式</h3>
                <div class="dash-left"></div>
                <h3 class="step4 mobile-none">Step4. 完成啦!</h3>
                <h3 class="step4-1">Step3. 完成啦!</h3>
                <div class="dash-right"></div>
                <h3 class="step3">Step3. 點選此處選擇圖樣顏色</h3>
                <div class="dash-side"></div>
            </div>
            <div class="flexbox flex transition">
                <div class="box-left transition">
                    <!-- <img class="diy-area transition" src="images/pattern-white.svg" alt=""> -->

                    <svg class="diy-area transition pattern-watz appear" version="1.1" id="pattern-watz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66.1 108" style="enable-background:new 0 0 66.1 108;" xml:space="preserve">
                        <style type="text/css">
                            .socks-color {
                                fill: #FFFFFF;
                                stroke: #404040;
                                stroke-width: 3;
                            }

                            .socks-path {
                                fill: #404040;
                            }

                            .socks-border {
                                fill: #404040;
                            }
                        </style>
                        <g id="圖層_2_1_">
                            <g id="圖層_1-2">
                                <g id="Group_84">
                                    <path id="Path_4446" class="socks-color" d="M64.6,59.5c0.1,2.3-1,4.5-2.8,5.9c-1.8,1.3-3.7,2.4-5.7,3.3c-4.9,2.3-9.2,5.7-12.6,10
				                        c-2.4,3.4-4.6,7-6.5,10.7c-1.8,3.4-3.9,6.7-6.3,9.8c-5.4,6.9-13.6,9.1-21.7,5.7c-3.6-1.5-6.2-4.7-7-8.5C1.2,93,1.3,89.4,2.4,86
			                        	c1.4-4.5,3.7-8.6,6.7-12.2c4.2-5.4,8.8-10.4,13.4-15.4c2.3-2.6,4.6-5.2,6.7-7.9c1.6-2.1,2.4-4.6,2.4-7.2
				                        c-0.1-8.2-0.2-16.5-0.3-24.7c0-3.9,0-7.9-0.1-11.8c-0.1-1.4,0.7-2.8,2.1-3.3c1.5-0.7,3.1-1.1,4.7-1.3c6.2-1,12.5-0.9,18.7,0.2
				                        c1.5,0.3,3,0.7,4.5,1.3c0.9,0.2,1.5,1.1,1.4,2c-0.2,3.6-0.4,7.2-0.6,10.8c-0.7,9-0.6,18.1,0.1,27.1c0.4,4,1.2,8,2,11.9
				                        C64.3,56.8,64.5,58.1,64.6,59.5z" />
                                    <path id="Path_4447" class="socks-path" d="M35.3,31.5c2-1.3,4-2.9,6-4.2l0,0c-3.6-1.6-7.1-3.5-10.4-5.5c0.3,3.9,0.6,7.8,0.9,11.7
				                        C33,32.9,34.2,32.2,35.3,31.5z" />
                                    <path id="Path_4448" class="socks-path" d="M43,67.9c-0.1-1.7-0.3-3.4-0.4-5.1c-0.1-1.5-0.4-2.9-0.4-4.4c0-0.5,0-1,0-1.5
				                        c0-0.2,0-0.4,0-0.5l0,0c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1-0.1,0-0.2L42,55.8c0,0-0.1-0.1-0.1-0.1l0,0c-1.1-0.6-2.3-1-3.5-1.4
				                        c-1.6-0.5-3.3-0.8-4.9-1.2c-1.9-0.5-3.9-1-5.8-1.7c-0.4,0.6-0.9,1.2-1.4,1.8c-3.6,3.9-7,7.9-10.5,11.8c-4,4.6-8.1,9.1-11.2,14.3
			                        	c-2.8,4.6-4.3,9.5-3.3,14.8c0.9,4.7,3.4,8.5,8.5,10.3c4.1,1.5,8.5,1.6,12.7,0.6c4.5-1.1,8.4-4,10.8-8c2.6-4,5-8.1,7.1-12.3
			                        	c1.1-2.2,2.4-4.2,3.8-6.1C43.7,75,43.3,71.4,43,67.9z" />
                                    <path id="Path_4449" class="socks-path" d="M58.4,43c-0.3-2.1-0.6-4.3-0.8-6.4c-3.7-0.7-7.2-1.7-10.6-3.2c-0.9,0.6-1.8,1.1-2.6,1.8
				                        c-2.8,2.1-5.8,4.9-9.2,6.3c0,0.4,0.1,0.8,0.1,1.2c0.1,0.7,0.1,1.3,0.1,2c0.4,0.5,0.8,1,1.3,1.4c3,1.3,6.2,2.3,9.5,2.9
				                        c1,0,2.1,0,3.1-0.1c0.7-0.6,1.4-1.1,2.1-1.5C53.6,45.7,55.9,44.3,58.4,43z" />
                                    <path id="Path_4450" class="socks-path" d="M63.9,58c-0.1-0.9-0.3-1.8-0.5-2.7c-0.6-2.1-1.2-4.2-1.6-6.4c-0.5,0.2-1,0.5-1.4,0.7
				                        c-4.1,2.3-8.2,6-9.6,10.6c-0.7,2.4-0.7,5,0,7.4c0.3,1.3,0.6,2.5,0.9,3.8c1.6-1.3,3.3-2.4,5.2-3.3c1.4-0.8,2.7-1.6,4-2.5
				                        C63.4,64.1,64.7,61,63.9,58z" />
                                    <path id="Path_4451" class="socks-path" d="M32.4,14.2c2,1.4,4,2.8,6.1,4.1c3.2,2,6.6,3.9,10.1,5.5c1.2-0.8,2.5-1.6,3.7-2.4
				                        c3.4-2.3,6.6-5,9.5-8.1c0-2.7-0.1-5.4-0.1-8.1C61.8,4.2,61.1,3.2,60,3c-2.5-0.5-5-1-7.2-1.5c-2.9,0.1-5.5,0.1-8,0.2
				                        c-1.7,0.1-3.4,0.3-5.1,0.6c-2,0.4-3.9,0.9-5.8,1.6c-1.5,0.4-2.4,2-2,3.5C32.2,9.6,32.3,11.9,32.4,14.2z" />
                                    <path id="Path_4452" class="socks-path" d="M60.8,23.9c-2,1.8-4.2,3.5-6.5,5L54.1,29c2.3,0.9,4.6,1.5,7,2c-0.1-2.4-0.2-4.9-0.2-7.3
				                        L60.8,23.9z" />
                                </g>
                            </g>
                        </g>
                        <g id="圖層_2_3_">
                            <g id="圖層_1-2_2_">
                                <g id="Path_4454_1_">
                                    <path class="socks-border" d="M16.5,108c-2.6,0-5.4-0.6-8-1.7c-4-1.7-7-5.2-7.9-9.5c-0.9-3.7-0.8-7.6,0.3-11.2c1.5-4.7,3.9-8.9,7-12.7
				                        c3.5-4.6,7.5-8.9,11.4-13.2l2.1-2.3c2.6-2.8,4.7-5.2,6.6-7.8c1.4-1.8,2.1-4,2-6.3c-0.1-8.3-0.2-16.6-0.3-24.8
				                        c0-3.8,0-7.8-0.1-11.7c-0.2-2.1,1.1-4,3-4.7c1.6-0.7,3.3-1.2,5-1.4c6.3-1,12.8-0.9,19.2,0.2c1.6,0.3,3.1,0.8,4.6,1.3
				                        c1.6,0.4,2.7,1.9,2.5,3.6c-0.1,1.5-0.2,3-0.2,4.5c-0.1,2.1-0.2,4.2-0.3,6.2c-0.7,8.9-0.6,18,0.1,26.9c0.3,3.4,1,6.8,1.7,10.2
				                        l0.3,1.6c0.3,1.4,0.5,2.8,0.5,4.3c0.1,2.8-1.2,5.5-3.4,7.2c-1.8,1.4-3.8,2.5-5.9,3.5c-4.7,2.2-8.8,5.5-12,9.6
				                        c-2.3,3.3-4.5,6.8-6.3,10.4c-1.9,3.5-4,6.9-6.4,10.1C27.9,105.3,22.4,108,16.5,108z M46.8,3c-2.9,0-5.8,0.2-8.7,0.7
				                        c-1.5,0.2-2.9,0.6-4.3,1.2l-0.1,0c-0.7,0.2-1.2,0.9-1.1,1.7l0,0.1c0.1,3.9,0.1,8,0.1,11.8c0.1,8.1,0.2,16.5,0.3,24.7
				                        c0.1,2.9-0.9,5.8-2.7,8.2c-2,2.7-4.2,5.1-6.8,8l-2.1,2.3c-3.8,4.2-7.8,8.5-11.2,13c-2.9,3.5-5.1,7.5-6.5,11.7
				                        c-1,3.1-1,6.5-0.2,9.7c0.7,3.4,3,6.1,6.1,7.4c7.4,3.1,14.9,1.2,19.9-5.3c2.3-3,4.3-6.2,6.1-9.6c1.9-3.8,4.1-7.4,6.6-10.9
				                        c3.5-4.5,8.1-8.1,13.2-10.5c1.9-0.9,3.7-1.9,5.4-3.2c1.5-1.1,2.3-2.8,2.2-4.6v0c-0.1-1.3-0.2-2.6-0.5-3.8l-0.3-1.6
				                        c-0.7-3.4-1.4-6.9-1.7-10.5c-0.8-9.1-0.8-18.3-0.1-27.4c0.1-2,0.2-4.1,0.3-6.2c0.1-1.5,0.2-3,0.2-4.5l0-0.1
				                        c0-0.1-0.1-0.3-0.2-0.3L60.6,5c-1.4-0.5-2.8-0.9-4.3-1.2C53.2,3.3,50,3,46.8,3z" />
                                </g>
                            </g>
                        </g>
                    </svg>

                    <svg class="diy-area transition pattern-stripe" version="1.1" id="pattern-stripe" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66.1 108" style="enable-background:new 0 0 66.1 108;" xml:space="preserve">
                        <style type="text/css">
                            .socks-color {
                                fill: #FFFFFF;
                                stroke: #404040;
                                stroke-width: 3;
                            }

                            .socks-path {
                                fill: none;
                                stroke: #404040;
                            }

                            .stroke-width {
                                stroke-width: 5;
                            }

                            .round {
                                stroke-linecap: round;
                            }

                            .socks-border {
                                fill: #404040;
                            }
                        </style>
                        <g id="圖層_2_1_">
                            <g id="圖層_1-2">
                                <g id="Group_83">
                                    <path id="Path_4445" class="socks-color" d="M64.6,59.5c0.1,2.3-1,4.5-2.8,5.9c-1.8,1.3-3.7,2.4-5.7,3.3c-4.9,2.3-9.2,5.7-12.6,10
				                        c-2.4,3.4-4.6,7-6.5,10.7c-1.8,3.4-3.9,6.7-6.3,9.8c-5.4,6.9-13.6,9.1-21.7,5.7c-3.6-1.5-6.2-4.7-7-8.5C1.2,93,1.3,89.4,2.4,86
				                        c1.4-4.5,3.7-8.6,6.7-12.2c4.2-5.4,8.8-10.4,13.4-15.4c2.3-2.6,4.6-5.2,6.7-7.9c1.6-2.1,2.4-4.6,2.4-7.2
				                        c-0.1-8.2-0.2-16.5-0.3-24.7c0-3.9,0-7.9-0.1-11.8c-0.1-1.4,0.7-2.8,2.1-3.3c1.5-0.7,3.1-1.1,4.7-1.3c6.2-1,12.5-0.9,18.7,0.2
				                        c1.5,0.3,3,0.7,4.5,1.3c0.9,0.2,1.5,1.1,1.4,2c-0.2,3.6-0.4,7.2-0.6,10.8c-0.7,9-0.6,18.1,0.1,27.1c0.4,4,1.2,8,2,11.9
				                        C64.3,56.8,64.5,58.1,64.6,59.5z" />
                                    <line id="Line_1" class="socks-path stroke-width" x1="31.1" y1="10.1" x2="61.9" y2="10.1" />
                                    <line id="Line_1-2" class="socks-path stroke-width" x1="31.1" y1="20.6" x2="61.9" y2="20.6" />
                                    <line id="Line_1-3" class="socks-path stroke-width" x1="31.1" y1="31.1" x2="61.9" y2="31.1" />
                                    <line id="Line_1-4" class="socks-path stroke-width" x1="31.1" y1="41.7" x2="61.9" y2="41.7" />
                                    <line id="Line_1-5" class="socks-path round stroke-width" x1="29.9" y1="52.2" x2="61.9" y2="52.2" />
                                    <line id="Line_1-6" class="socks-path round stroke-width" x1="19.9" y1="62.7" x2="61.2" y2="64.2" />
                                    <line id="Line_1-7" class="socks-path round stroke-width" x1="11.6" y1="73.2" x2="45.1" y2="75" />
                                    <line id="Line_1-8" class="socks-path stroke-width" x1="4.1" y1="83.7" x2="37.9" y2="86.7" />
                                    <line id="Line_1-9" class="socks-path round stroke-width" x1="3.4" y1="95.8" x2="29.6" y2="98.7" />
                                </g>
                            </g>
                        </g>
                        <g id="圖層_2_3_">
                            <g id="圖層_1-2_2_">
                                <g id="Path_4454_1_">
                                    <path class="socks-border" d="M16.5,108c-2.6,0-5.4-0.6-8-1.7c-4-1.7-7-5.2-7.9-9.5c-0.9-3.7-0.8-7.6,0.3-11.2c1.5-4.7,3.9-8.9,7-12.7
				                        c3.5-4.6,7.5-8.9,11.4-13.2l2.1-2.3c2.6-2.8,4.7-5.2,6.6-7.8c1.4-1.8,2.1-4,2-6.3c-0.1-8.3-0.2-16.6-0.3-24.8
				                        c0-3.8,0-7.8-0.1-11.7c-0.2-2.1,1.1-4,3-4.7c1.6-0.7,3.3-1.2,5-1.4c6.3-1,12.8-0.9,19.2,0.2c1.6,0.3,3.1,0.8,4.6,1.3
				                        c1.6,0.4,2.7,1.9,2.5,3.6c-0.1,1.5-0.2,3-0.2,4.5c-0.1,2.1-0.2,4.2-0.3,6.2c-0.7,8.9-0.6,18,0.1,26.9c0.3,3.4,1,6.8,1.7,10.2
				                        l0.3,1.6c0.3,1.4,0.5,2.8,0.5,4.3c0.1,2.8-1.2,5.5-3.4,7.2c-1.8,1.4-3.8,2.5-5.9,3.5c-4.7,2.2-8.8,5.5-12,9.6
				                        c-2.3,3.3-4.5,6.8-6.3,10.4c-1.9,3.5-4,6.9-6.4,10.1C27.9,105.3,22.4,108,16.5,108z M46.8,3c-2.9,0-5.8,0.2-8.7,0.7
				                        c-1.5,0.2-2.9,0.6-4.3,1.2l-0.1,0c-0.7,0.2-1.2,0.9-1.1,1.7l0,0.1c0.1,3.9,0.1,8,0.1,11.8c0.1,8.1,0.2,16.5,0.3,24.7
				                        c0.1,2.9-0.9,5.8-2.7,8.2c-2,2.7-4.2,5.1-6.8,8l-2.1,2.3c-3.8,4.2-7.8,8.5-11.2,13c-2.9,3.5-5.1,7.5-6.5,11.7
				                        c-1,3.1-1,6.5-0.2,9.7c0.7,3.4,3,6.1,6.1,7.4c7.4,3.1,14.9,1.2,19.9-5.3c2.3-3,4.3-6.2,6.1-9.6c1.9-3.8,4.1-7.4,6.6-10.9
				                        c3.5-4.5,8.1-8.1,13.2-10.5c1.9-0.9,3.7-1.9,5.4-3.2c1.5-1.1,2.3-2.8,2.2-4.6v0c-0.1-1.3-0.2-2.6-0.5-3.8l-0.3-1.6
				                        c-0.7-3.4-1.4-6.9-1.7-10.5c-0.8-9.1-0.8-18.3-0.1-27.4c0.1-2,0.2-4.1,0.3-6.2c0.1-1.5,0.2-3,0.2-4.5l0-0.1
				                        c0-0.1-0.1-0.3-0.2-0.3L60.6,5c-1.4-0.5-2.8-0.9-4.3-1.2C53.2,3.3,50,3,46.8,3z" />
                                </g>
                            </g>
                        </g>
                    </svg>

                    <svg class="diy-area transition pattern-dotted" version="1.1" id="pattern-dotted" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66.1 108" style="enable-background:new 0 0 66.1 108;" xml:space="preserve">
                        <style type="text/css">
                            .socks-color {
                                fill: #FFFFFF;
                                stroke: #404040;
                                stroke-width: 3;
                            }

                            .socks-path {
                                fill: #404040;
                            }

                            .socks-border {
                                fill: #404040;
                            }
                        </style>
                        <g id="圖層_2_1_">
                            <g id="圖層_1-2">
                                <g id="Group_82">
                                    <path id="Path_4444" class="socks-color" d="M64.6,59.5c0.1,2.3-1,4.5-2.8,5.9c-1.8,1.3-3.7,2.4-5.7,3.3c-4.9,2.3-9.2,5.7-12.6,10
				                        c-2.4,3.4-4.6,7-6.5,10.7c-1.8,3.4-3.9,6.7-6.3,9.8c-5.4,6.9-13.6,9.1-21.7,5.7c-3.6-1.5-6.2-4.7-7-8.5C1.2,93,1.3,89.4,2.4,86
				                        c1.4-4.5,3.7-8.6,6.7-12.2c4.2-5.4,8.8-10.4,13.4-15.4c2.3-2.6,4.6-5.2,6.7-7.9c1.6-2.1,2.4-4.6,2.4-7.2
				                        c-0.1-8.2-0.2-16.5-0.3-24.7c0-3.9,0-7.9-0.1-11.8c-0.1-1.4,0.7-2.8,2.1-3.3c1.5-0.7,3.1-1.1,4.7-1.3c6.2-1,12.5-0.9,18.7,0.2
				                        c1.5,0.3,3,0.7,4.5,1.3c0.9,0.2,1.5,1.1,1.4,2c-0.2,3.6-0.4,7.2-0.6,10.8c-0.7,9-0.6,18.1,0.1,27.1c0.4,4,1.2,8,2,11.9
				                        C64.3,56.8,64.5,58.1,64.6,59.5z" />
                                    <circle id="Ellipse_40" class="socks-path" cx="39.2" cy="15" r="7.5" />
                                    <circle id="Ellipse_41" class="socks-path" cx="55.2" cy="35" r="7.5" />
                                    <circle id="Ellipse_42" class="socks-path" cx="33.2" cy="57" r="7.5" />
                                    <circle id="Ellipse_43" class="socks-path" cx="58.2" cy="59" r="7.5" />
                                    <circle id="Ellipse_44" class="socks-path" cx="8.1" cy="93" r="7.5" />
                                    <circle id="Ellipse_45" class="socks-path" cx="33.2" cy="82" r="7.5" />
                                </g>
                            </g>
                        </g>
                        <g id="圖層_2_3_">
                            <g id="圖層_1-2_2_">
                                <g id="Path_4454_1_">
                                    <path class="socks-border" d="M16.5,108c-2.6,0-5.4-0.6-8-1.7c-4-1.7-7-5.2-7.9-9.5c-0.9-3.7-0.8-7.6,0.3-11.2c1.5-4.7,3.9-8.9,7-12.7
				                        c3.5-4.6,7.5-8.9,11.4-13.2l2.1-2.3c2.6-2.8,4.7-5.2,6.6-7.8c1.4-1.8,2.1-4,2-6.3c-0.1-8.3-0.2-16.6-0.3-24.8
				                        c0-3.8,0-7.8-0.1-11.7c-0.2-2.1,1.1-4,3-4.7c1.6-0.7,3.3-1.2,5-1.4c6.3-1,12.8-0.9,19.2,0.2c1.6,0.3,3.1,0.8,4.6,1.3
				                        c1.6,0.4,2.7,1.9,2.5,3.6c-0.1,1.5-0.2,3-0.2,4.5c-0.1,2.1-0.2,4.2-0.3,6.2c-0.7,8.9-0.6,18,0.1,26.9c0.3,3.4,1,6.8,1.7,10.2
				                        l0.3,1.6c0.3,1.4,0.5,2.8,0.5,4.3c0.1,2.8-1.2,5.5-3.4,7.2c-1.8,1.4-3.8,2.5-5.9,3.5c-4.7,2.2-8.8,5.5-12,9.6
				                        c-2.3,3.3-4.5,6.8-6.3,10.4c-1.9,3.5-4,6.9-6.4,10.1C27.9,105.3,22.4,108,16.5,108z M46.8,3c-2.9,0-5.8,0.2-8.7,0.7
				                        c-1.5,0.2-2.9,0.6-4.3,1.2l-0.1,0c-0.7,0.2-1.2,0.9-1.1,1.7l0,0.1c0.1,3.9,0.1,8,0.1,11.8c0.1,8.1,0.2,16.5,0.3,24.7
				                        c0.1,2.9-0.9,5.8-2.7,8.2c-2,2.7-4.2,5.1-6.8,8l-2.1,2.3c-3.8,4.2-7.8,8.5-11.2,13c-2.9,3.5-5.1,7.5-6.5,11.7
				                        c-1,3.1-1,6.5-0.2,9.7c0.7,3.4,3,6.1,6.1,7.4c7.4,3.1,14.9,1.2,19.9-5.3c2.3-3,4.3-6.2,6.1-9.6c1.9-3.8,4.1-7.4,6.6-10.9
				                        c3.5-4.5,8.1-8.1,13.2-10.5c1.9-0.9,3.7-1.9,5.4-3.2c1.5-1.1,2.3-2.8,2.2-4.6v0c-0.1-1.3-0.2-2.6-0.5-3.8l-0.3-1.6
				                        c-0.7-3.4-1.4-6.9-1.7-10.5c-0.8-9.1-0.8-18.3-0.1-27.4c0.1-2,0.2-4.1,0.3-6.2c0.1-1.5,0.2-3,0.2-4.5l0-0.1
				                        c0-0.1-0.1-0.3-0.2-0.3L60.6,5c-1.4-0.5-2.8-0.9-4.3-1.2C53.2,3.3,50,3,46.8,3z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    <svg class="diy-area transition pattern-cherry" version="1.1" id="pattern-cherry" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66.1 108" style="enable-background:new 0 0 66.1 108;" xml:space="preserve">
                        <style type="text/css">
                            .socks-color {
                                fill: #FFFFFF;
                                stroke: #404040;
                                stroke-width: 3;
                            }

                            .socks-path {
                                fill: #404040;
                            }

                            .socks-border {
                                fill: #404040;
                            }
                        </style>
                        <path id="Path_4445" class="socks-color" d="M64.6,59.5c0.1,2.3-1,4.5-2.8,5.9c-1.8,1.3-3.7,2.4-5.7,3.3c-4.9,2.3-9.2,5.7-12.6,10
	                    c-2.4,3.4-4.6,7-6.5,10.7c-1.8,3.4-3.9,6.7-6.3,9.8c-5.4,6.9-13.6,9.1-21.7,5.7c-3.6-1.5-6.2-4.7-7-8.5C1.2,93,1.3,89.4,2.4,86
                        c1.4-4.5,3.7-8.6,6.7-12.2c4.2-5.4,8.8-10.4,13.4-15.4c2.3-2.6,4.6-5.2,6.7-7.9c1.6-2.1,2.4-4.6,2.4-7.2c-0.1-8.2-0.2-16.5-0.3-24.7
                        c0-3.9,0-7.9-0.1-11.8c-0.1-1.4,0.7-2.8,2.1-3.3c1.5-0.7,3.1-1.1,4.7-1.3c6.2-1,12.5-0.9,18.7,0.2c1.5,0.3,3,0.7,4.5,1.3
                        c0.9,0.2,1.5,1.1,1.4,2c-0.2,3.6-0.4,7.2-0.6,10.8c-0.7,9-0.6,18.1,0.1,27.1c0.4,4,1.2,8,2,11.9C64.3,56.8,64.5,58.1,64.6,59.5z" />
                        <g>
                            <g id="圖層_2_114_">
                                <g id="圖層_1-2_113_">
                                    <g id="cherry_91_">
                                        <path id="Path_4465_91_" class="socks-path" d="M61.3,38.5c-0.5-0.4-1.1-0.5-1.7-0.4c-1-0.7-1.9-1.5-2.7-2.4c0.3,0,0.5-0.1,0.8-0.1
				                    	c0.2,0,0.3-0.1,0.5-0.2c0.4-0.3,0.8-1.1,0.9-1.6l0,0c0.1-0.4-0.2-0.8-0.6-0.9l0,0c-0.4,0-0.7,0-1.1,0c-0.2-0.3-0.4-0.6-0.7-0.9
				                    	c-0.3-0.3-0.8-0.3-1.1,0.1l0,0l0,0c-0.4,0.4-0.7,1.2-0.7,1.8c0,0.4,0.3,1,0.7,1.4c-0.8,1.4-1.3,3-1.5,4.6
				                    	c-1.1,0.5-1.6,1.7-1.1,2.8s1.7,1.6,2.8,1.1s1.6-1.7,1.1-2.8c-0.4-0.8-1.2-1.3-2.1-1.3c0.2-1.3,0.7-2.6,1.3-3.9
				                    	c0.8,1,1.7,1.9,2.7,2.6c-1,0.7-1.2,2-0.6,3c0.7,1,2,1.2,3,0.5s1.2-2,0.6-3C61.6,38.8,61.4,38.6,61.3,38.5z M54,41.6
				                    	c-0.3,0.1-0.5-0.1-0.6-0.3c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3C54.4,41.2,54.2,41.5,54,41.6z M55.8,34.3
				                    	c-0.1-0.2-0.2-0.3-0.2-0.5c0-0.3,0.2-0.9,0.5-1.3h0.1l0,0l0,0c0.2,0.2,0.3,0.4,0.5,0.6c0,0-0.1,0-0.1,0.1
				                    	C56.2,33.4,55.9,33.8,55.8,34.3z M56.4,34.9C56.3,34.9,56.3,34.9,56.4,34.9c0.1-0.5,0.4-1.1,0.6-1.3c0.1-0.1,0.2-0.1,0.3-0.1
				                    	l0,0c0.3-0.1,0.7-0.1,1.1-0.1c0,0,0.1,0,0.1,0.1l0,0l0,0c-0.1,0.5-0.4,1-0.6,1.2S56.9,35,56.4,34.9C56.4,35,56.4,35,56.4,34.9
				                    	L56.4,34.9z M59.1,40c-0.3,0.1-0.5-0.1-0.6-0.3c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3C59.5,39.6,59.4,39.9,59.1,40
				                    	L59.1,40L59.1,40z" />
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_75_">
                                <g id="圖層_1-2_74_">
                                    <g id="cherry_52_">
                                        <path class="socks-path" d="M55.8,69.7c-0.1-0.3,0.1-0.5,0.3-0.6s0.3,0,0.4,0.1c0.5-0.3,1-0.6,1.6-0.9c-0.3-0.1-0.6-0.2-1-0.2
					                	c0.2-1.3,0.7-2.6,1.3-3.9c0.8,1,1.7,1.9,2.7,2.6c-0.1,0.1-0.2,0.1-0.3,0.2c0.4-0.2,0.8-0.4,1.1-0.6h-0.1c-1-0.7-1.9-1.5-2.7-2.4
					                	c0.3,0,0.5-0.1,0.8-0.1c0.2,0,0.3-0.1,0.5-0.2c0.4-0.3,0.8-1.1,0.9-1.6c0.1-0.4-0.2-0.8-0.6-0.9l0,0c-0.4,0-0.7,0-1.1,0
					                	c-0.2-0.3-0.4-0.6-0.7-0.9c-0.3-0.3-0.8-0.3-1.1,0.1l0,0l0,0c-0.4,0.4-0.7,1.2-0.7,1.8c0,0.4,0.3,1,0.7,1.4
					                	c-0.8,1.4-1.3,3-1.5,4.6c-0.8,0.3-1.2,1.1-1.3,1.9C55.4,70,55.6,69.8,55.8,69.7z M59.4,62.2c0.1-0.1,0.2-0.1,0.3-0.1l0,0
					                	C60,62,60.4,62,60.8,62c0,0,0.1,0,0.1,0.1l0,0c-0.1,0.5-0.4,1-0.6,1.2c-0.2,0.2-0.9,0.3-1.3,0.2l0,0l0,0c0,0,0,0,0-0.1
					                	C58.9,62.9,59.2,62.3,59.4,62.2z M58.5,61C58.5,60.9,58.6,60.9,58.5,61C58.6,61,58.6,61,58.5,61c0.3,0.2,0.4,0.4,0.6,0.6
					                	c0,0-0.1,0-0.1,0.1c-0.3,0.2-0.6,0.7-0.8,1.2c-0.1-0.2-0.2-0.3-0.2-0.5C58,62,58.2,61.3,58.5,61z" />
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_48_">
                                <g id="圖層_1-2_44_">
                                    <g id="cherry_33_">
                                        <path class="socks-path" d="M35.4,4.1c0.1-0.5,0.2-1,0.3-1.5c-0.3,0.1-0.5,0.1-0.8,0.2c-0.1,0.5-0.2,1-0.3,1.4c-1,0.5-1.5,1.8-1.1,2.8
					            	    c0.5,1.1,1.7,1.6,2.8,1.1s1.6-1.7,1.1-2.8C37.1,4.5,36.3,4,35.4,4.1z M34.7,6c-0.3,0.1-0.5-0.1-0.6-0.3
					            	    c-0.1-0.3,0.1-0.5,0.3-0.6s0.5,0,0.6,0.3C35.1,5.6,34.9,5.9,34.7,6z" />
                                        <path class="socks-path" d="M41.9,2.9c-0.5-0.4-1.1-0.5-1.7-0.4C40,2.3,39.7,2.2,39.5,2c0,0,0,0-0.1,0c-0.3,0-0.6,0-0.9,0.1h-0.1
				            	    	c0.3,0.3,0.6,0.5,0.9,0.8c-1,0.7-1.2,2-0.6,3c0.7,1,2,1.2,3,0.5s1.2-2,0.6-3C42.3,3.2,42.1,3,41.9,2.9z M39.8,4.4L39.8,4.4
				            	    	L39.8,4.4c-0.3,0.1-0.5-0.1-0.6-0.3c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3C40.2,4.1,40,4.3,39.8,4.4z" />
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_44_">
                                <g id="圖層_1-2_43_">
                                    <g id="cherry_32_">
                                        <path id="Path_4465_32_" class="socks-path" d="M62,15c-0.5-0.4-1.1-0.5-1.7-0.4c-1-0.7-1.9-1.5-2.7-2.4c0.3,0,0.5-0.1,0.8-0.1
                                            c0.2,0,0.3-0.1,0.5-0.2c0.4-0.3,0.8-1.1,0.9-1.6l0,0c0.1-0.4-0.2-0.8-0.6-0.9l0,0c-0.4,0-0.7,0-1.1,0c-0.2-0.3-0.4-0.6-0.7-0.9
                                            c-0.3-0.3-0.8-0.3-1.1,0.1l0,0l0,0c-0.4,0.4-0.7,1.2-0.7,1.8c0,0.4,0.3,1,0.7,1.4c-0.8,1.4-1.3,3-1.5,4.6
                                            c-1.1,0.5-1.6,1.7-1.1,2.8s1.7,1.6,2.8,1.1s1.6-1.7,1.1-2.8c-0.4-0.8-1.2-1.3-2.1-1.3c0.2-1.3,0.7-2.6,1.3-3.9
                                            c0.8,1,1.7,1.9,2.7,2.6c-1,0.7-1.2,2-0.6,3c0.7,1,2,1.2,3,0.5s1.2-2,0.6-3C62.4,15.3,62.2,15.1,62,15z M54.7,18.1
                                            c-0.3,0.1-0.5-0.1-0.6-0.3c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3C55.2,17.7,55,18,54.7,18.1z M56.5,10.8
                                            c-0.1-0.2-0.2-0.3-0.2-0.5c0-0.3,0.2-0.9,0.5-1.3h0.1l0,0l0,0c0.2,0.2,0.3,0.4,0.5,0.6c0,0-0.1,0-0.1,0.1
                                            C57,9.8,56.7,10.3,56.5,10.8z M57.1,11.4L57.1,11.4c0.1-0.5,0.4-1.1,0.6-1.3C57.8,10,57.9,10,58,10l0,0c0.3-0.1,0.7-0.1,1.1-0.1
                                            c0,0,0.1,0,0.1,0.1l0,0l0,0c-0.1,0.5-0.4,1-0.6,1.2C58.3,11.4,57.6,11.5,57.1,11.4L57.1,11.4L57.1,11.4z M59.9,16.5
                                            c-0.3,0.1-0.5-0.1-0.6-0.3c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3S60.1,16.4,59.9,16.5L59.9,16.5L59.9,16.5z" />
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_38_">
                                <g id="圖層_1-2_37_">
                                    <g id="cherry_28_">
                                        <path id="Path_4465_28_" class="socks-path" d="M41.9,28.5c-0.5-0.4-1.1-0.5-1.7-0.4c-1-0.7-1.9-1.5-2.7-2.4c0.3,0,0.5-0.1,0.8-0.1
					            	    c0.2,0,0.3-0.1,0.5-0.2c0.4-0.3,0.8-1.1,0.9-1.6l0,0c0.1-0.4-0.2-0.8-0.6-0.9l0,0c-0.4,0-0.7,0-1.1,0c-0.2-0.3-0.4-0.6-0.7-0.9
				            	    	s-0.8-0.3-1.1,0.1l0,0l0,0c-0.4,0.4-0.7,1.2-0.7,1.8c0,0.4,0.3,1,0.7,1.4c-0.8,1.4-1.3,3-1.5,4.6c-1.1,0.5-1.6,1.7-1.1,2.8
				            	    	c0.5,1.1,1.7,1.6,2.8,1.1s1.6-1.7,1.1-2.8c-0.4-0.8-1.2-1.3-2.1-1.3c0.2-1.3,0.7-2.6,1.3-3.9c0.8,1,1.7,1.9,2.7,2.6
				            	    	c-1,0.7-1.2,2-0.6,3c0.7,1,2,1.2,3,0.5s1.2-2,0.6-3C42.3,28.8,42.1,28.7,41.9,28.5z M34.7,31.6c-0.3,0.1-0.5-0.1-0.6-0.3
				            	    	c-0.1-0.3,0.1-0.5,0.3-0.6s0.5,0.1,0.6,0.3C35.1,31.3,34.9,31.5,34.7,31.6z M36.4,24.3c-0.1-0.2-0.2-0.3-0.2-0.5
				            	    	c0-0.3,0.2-0.9,0.5-1.3h0.1l0,0l0,0c0.2,0.2,0.3,0.4,0.5,0.6c0,0-0.1,0-0.1,0.1C36.9,23.4,36.6,23.9,36.4,24.3z M37,25L37,25
				            	    	c0.1-0.5,0.4-1.1,0.6-1.3c0.1-0.1,0.2-0.1,0.3-0.1l0,0c0.3-0.1,0.7-0.1,1.1-0.1c0,0,0.1,0,0.1,0.1l0,0l0,0
				            	    	c-0.1,0.5-0.4,1-0.6,1.2C38.2,24.9,37.5,25.1,37,25L37,25L37,25z M39.8,30c-0.3,0.1-0.5-0.1-0.6-0.3s0.1-0.5,0.3-0.6
				            	    	s0.5,0.1,0.6,0.3C40.2,29.7,40,29.9,39.8,30L39.8,30L39.8,30z" />
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_29_">
                                <g id="圖層_1-2_28_">
                                    <g id="cherry_23_">
                                        <path id="Path_4465_23_" class="socks-path" d="M41.9,54.1c-0.5-0.4-1.1-0.5-1.7-0.4c-1-0.7-1.9-1.5-2.7-2.4c0.3,0,0.5-0.1,0.8-0.1
					            	    c0.2,0,0.3-0.1,0.5-0.2c0.4-0.3,0.8-1.1,0.9-1.6l0,0c0.1-0.4-0.2-0.8-0.6-0.9l0,0c-0.4,0-0.7,0-1.1,0c-0.2-0.3-0.4-0.6-0.7-0.9
					            	    c-0.3-0.3-0.8-0.3-1.1,0.1l0,0l0,0c-0.4,0.4-0.7,1.2-0.7,1.8c0,0.4,0.3,1,0.7,1.4c-0.8,1.4-1.3,3-1.5,4.6
					            	    c-1.1,0.5-1.6,1.7-1.1,2.8s1.7,1.6,2.8,1.1s1.6-1.7,1.1-2.8c-0.4-0.8-1.2-1.3-2.1-1.3c0.2-1.3,0.7-2.6,1.3-3.9
					            	    c0.8,1,1.7,1.9,2.7,2.6c-1,0.7-1.2,2-0.6,3c0.7,1,2,1.2,3,0.5s1.2-2,0.6-3C42.3,54.4,42.1,54.3,41.9,54.1z M34.7,57.2
					            	    c-0.3,0.1-0.5-0.1-0.6-0.3c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3C35.1,56.9,34.9,57.1,34.7,57.2z M36.4,49.9
					            	    c-0.1-0.2-0.2-0.3-0.2-0.5c0-0.3,0.2-0.9,0.5-1.3h0.1l0,0l0,0c0.2,0.2,0.3,0.4,0.5,0.6c0,0-0.1,0-0.1,0.1
					            	    C36.9,49,36.6,49.5,36.4,49.9z M37,50.6L37,50.6c0.1-0.5,0.4-1.1,0.6-1.3c0.1-0.1,0.2-0.1,0.3-0.1l0,0c0.3-0.1,0.7-0.1,1.1-0.1
					            	    c0,0,0.1,0,0.1,0.1l0,0l0,0c-0.1,0.5-0.4,1-0.6,1.2C38.2,50.6,37.5,50.7,37,50.6L37,50.6L37,50.6z M39.8,55.6
					            	    c-0.3,0.1-0.5-0.1-0.6-0.3c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3C40.2,55.3,40,55.6,39.8,55.6L39.8,55.6L39.8,55.6z
					            	    " />
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_28_">
                                <g id="圖層_1-2_27_">
                                    <g id="cherry_22_">
                                        <path class="socks-path" d="M13.6,68.1c0.1-0.5,0.2-1,0.3-1.4c-0.4,0.6-0.8,1.2-1.2,1.8c-0.2,0.4-0.6,0.6-0.9,0.8
					            	    c-0.3,0.6-0.4,1.2-0.1,1.8c0.5,1.1,1.7,1.6,2.8,1.1s1.6-1.7,1.1-2.8C15.3,68.6,14.5,68.1,13.6,68.1z M12.9,70
					            	    c-0.3,0.1-0.5-0.1-0.6-0.3c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3C13.3,69.7,13.1,70,12.9,70z" />
                                        <path class="socks-path" d="M20.6,67.4c-0.1-0.2-0.3-0.4-0.5-0.5c-0.5-0.4-1.1-0.5-1.7-0.4c-0.9-0.7-1.8-1.4-2.5-2.3
					            	    c-0.1,0.1-0.2,0.2-0.3,0.4c0,0-0.1,0.1-0.1,0.2c0.7,0.8,1.4,1.5,2.2,2.1c-1,0.7-1.2,2-0.6,3c0.7,1,2,1.2,3,0.5
					            	    C21,69.7,21.3,68.4,20.6,67.4z M18,68.5L18,68.5L18,68.5c-0.3,0.1-0.5-0.1-0.6-0.3s0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3
					            	    C18.4,68.1,18.3,68.4,18,68.5z" />
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_21_">
                                <g id="圖層_1-2_19_">
                                    <g id="cherry_18_">
                                        <path class="socks-path" d="M40.8,83.6c0.1-0.1,0.2-0.2,0.2-0.3c0.2-0.4,0.4-0.7,0.6-1c0.3-0.5,0.7-1,1-1.4c-0.1-0.2-0.1-0.4-0.3-0.5
					            	    c-0.1-0.2-0.3-0.4-0.5-0.5c-0.5-0.4-1.1-0.5-1.7-0.4c-1-0.7-1.9-1.5-2.7-2.4c0.3,0,0.5-0.1,0.8-0.1c0.2,0,0.3-0.1,0.5-0.2
					            	    c0.4-0.3,0.8-1.1,0.9-1.6c0.1-0.4-0.2-0.8-0.6-0.9l0,0c-0.4,0-0.7,0-1.1,0c-0.2-0.3-0.4-0.6-0.7-0.9c-0.2-0.4-0.7-0.4-1-0.1l0,0
					            	    l0,0c-0.4,0.4-0.7,1.2-0.7,1.8c0,0.4,0.3,1,0.7,1.4c-0.8,1.4-1.3,3-1.5,4.6c-1.1,0.5-1.6,1.7-1.1,2.8c0.5,1.1,1.7,1.6,2.8,1.1
					            	    s1.6-1.7,1.1-2.8c-0.4-0.8-1.2-1.3-2.1-1.3c0.2-1.3,0.7-2.6,1.3-3.9c0.8,1,1.7,1.9,2.7,2.6c-1,0.7-1.2,2-0.6,3
					            	    C39.3,83.3,40.1,83.6,40.8,83.6z M34.7,82.8c-0.3,0.1-0.5-0.1-0.6-0.3c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3
					            	    C35.1,82.5,34.9,82.8,34.7,82.8z M36.4,75.6c-0.1-0.2-0.2-0.3-0.2-0.5c0-0.3,0.2-0.9,0.5-1.3h0.1l0,0c0.2,0.2,0.3,0.4,0.5,0.6
					            	    c0,0-0.1,0-0.1,0.1C36.9,74.6,36.6,75.1,36.4,75.6z M37.1,76.2C37,76.2,37,76.2,37.1,76.2L37.1,76.2C37,76.2,37,76.2,37.1,76.2
					            	    c0-0.6,0.4-1.1,0.6-1.3c0.1-0.1,0.2-0.1,0.3-0.1l0,0c0.3-0.1,0.7-0.1,1.1-0.1c0,0,0.1,0,0.1,0.1l0,0c-0.1,0.5-0.4,1-0.6,1.2
					            	    S37.5,76.3,37.1,76.2z M39.8,81.3L39.8,81.3L39.8,81.3c-0.3,0.1-0.5-0.1-0.6-0.3c-0.1-0.3,0.1-0.5,0.3-0.6
					            	    c0.3-0.1,0.5,0.1,0.6,0.3C40.2,80.9,40,81.2,39.8,81.3z" />
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_20_">
                                <g id="圖層_1-2_18_">
                                    <g id="cherry_17_">
                                        <path id="Path_4465_17_" class="socks-path" d="M20.1,92.6c-0.5-0.4-1.1-0.5-1.7-0.4c-1-0.7-1.9-1.5-2.7-2.4c0.3,0,0.5-0.1,0.8-0.1
					            	    c0.2,0,0.3-0.1,0.5-0.2c0.4-0.3,0.8-1.1,0.9-1.6l0,0c0.1-0.4-0.2-0.8-0.6-0.9l0,0c-0.4,0-0.7,0-1.1,0c-0.2-0.3-0.4-0.6-0.7-0.9
					            	    s-0.8-0.3-1.1,0.1l0,0l0,0c-0.4,0.4-0.7,1.2-0.7,1.8c0,0.4,0.3,1,0.7,1.4c-0.8,1.4-1.3,3-1.5,4.6c-1.1,0.5-1.6,1.7-1.1,2.8
					            	    c0.5,1.1,1.7,1.6,2.8,1.1s1.6-1.7,1.1-2.8c-0.4-0.8-1.2-1.3-2.1-1.3c0.2-1.3,0.7-2.6,1.3-3.9c0.8,1,1.7,1.9,2.7,2.6
					            	    c-1,0.7-1.2,2-0.6,3c0.7,1,2,1.2,3,0.5s1.2-2,0.6-3C20.5,92.9,20.3,92.7,20.1,92.6z M12.9,95.7c-0.3,0.1-0.5-0.1-0.6-0.3
					            	    c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3S13.1,95.6,12.9,95.7z M14.7,88.4c-0.1-0.2-0.2-0.3-0.2-0.5
					            	    c0-0.3,0.2-0.9,0.5-1.3h0.1l0,0l0,0c0.2,0.2,0.3,0.4,0.5,0.6c0,0-0.1,0-0.1,0.1C15.1,87.4,14.8,87.9,14.7,88.4z M15.2,89
					            	    L15.2,89c0.1-0.5,0.4-1.1,0.6-1.3c0.1-0.1,0.2-0.1,0.3-0.1l0,0c0.3-0.1,0.7-0.1,1.1-0.1c0,0,0.1,0,0.1,0.1l0,0l0,0
					            	    c-0.1,0.5-0.4,1-0.6,1.2C16.4,89,15.8,89.1,15.2,89C15.3,89,15.3,89,15.2,89L15.2,89z M18,94.1c-0.3,0.1-0.5-0.1-0.6-0.3
					            	    c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3C18.4,93.7,18.3,94,18,94.1L18,94.1L18,94.1z" />
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g id="圖層_2_3_">
                            <g id="圖層_1-2_2_">
                                <g id="Path_4454_1_">
                                    <path class="socks-border" d="M16.6,108c-2.6,0-5.4-0.6-8-1.7c-4-1.7-7-5.2-7.9-9.5c-0.9-3.7-0.8-7.6,0.3-11.2c1.5-4.7,3.9-8.9,7-12.7
				            	    c3.5-4.6,7.5-8.9,11.4-13.2l2.1-2.3c2.6-2.8,4.7-5.2,6.6-7.8c1.4-1.8,2.1-4,2-6.3C30,35,29.9,26.7,29.8,18.5
				            	    c0-3.8,0-7.8-0.1-11.7c-0.2-2.1,1.1-4,3-4.7c1.6-0.7,3.3-1.2,5-1.4c6.3-1,12.8-0.9,19.2,0.2c1.6,0.3,3.1,0.8,4.6,1.3
				            	    c1.6,0.4,2.7,1.9,2.5,3.6c-0.1,1.5-0.2,3-0.2,4.5c-0.1,2.1-0.2,4.2-0.3,6.2c-0.7,8.9-0.6,18,0.1,26.9c0.3,3.4,1,6.8,1.7,10.2
				            	    l0.3,1.6c0.3,1.4,0.5,2.8,0.5,4.3c0.1,2.8-1.2,5.5-3.4,7.2c-1.8,1.4-3.8,2.5-5.9,3.5c-4.7,2.2-8.8,5.5-12,9.6
				            	    c-2.3,3.3-4.5,6.8-6.3,10.4c-1.9,3.5-4,6.9-6.4,10.1C28,105.3,22.5,108,16.6,108z M46.9,3c-2.9,0-5.8,0.2-8.7,0.7
				            	    c-1.5,0.2-2.9,0.6-4.3,1.2h-0.1c-0.7,0.2-1.2,0.9-1.1,1.7v0.1c0.1,3.9,0.1,8,0.1,11.8c0.1,8.1,0.2,16.5,0.3,24.7
				            	    c0.1,2.9-0.9,5.8-2.7,8.2c-2,2.7-4.2,5.1-6.8,8l-2.1,2.3c-3.8,4.2-7.8,8.5-11.2,13c-2.9,3.5-5.1,7.5-6.5,11.7
				            	    c-1,3.1-1,6.5-0.2,9.7c0.7,3.4,3,6.1,6.1,7.4c7.4,3.1,14.9,1.2,19.9-5.3c2.3-3,4.3-6.2,6.1-9.6c1.9-3.8,4.1-7.4,6.6-10.9
				            	    c3.5-4.5,8.1-8.1,13.2-10.5c1.9-0.9,3.7-1.9,5.4-3.2c1.5-1.1,2.3-2.8,2.2-4.6l0,0c-0.1-1.3-0.2-2.6-0.5-3.8L62.3,54
				            	    c-0.7-3.4-1.4-6.9-1.7-10.5c-0.8-9.1-0.8-18.3-0.1-27.4c0.1-2,0.2-4.1,0.3-6.2c0.1-1.5,0.2-3,0.2-4.5V5.3C61,5.2,60.9,5,60.8,5
				            	    h-0.1c-1.4-0.5-2.8-0.9-4.3-1.2C53.3,3.3,50.1,3,46.9,3z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    
                </div>
                <div class="box-right ">
                    <div class="socks-color flex">
                        <h3>Socks Color</h3>
                        <ul class="sockscolor-dots flex">
                            <li class="flex">
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-top" id="a1">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-top" id="a2">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-top" id="a3">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-top" id="a4">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-top" id="a5">
                                    </div>
                                </div>
                            </li>
                            <li class="flex">
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-top" id="a6">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-top" id="a7">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-top" id="a8">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-top" id="a9">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-top" id="a10">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="pattern-with-shape">
                        <div class="pattern">
                            <h3>Pattern</h3>
                            <div class=" img-pattern flex">
                                <div class="img-pattern-watz">
                                    <img src="images/pattern-watz.svg" alt="">
                                </div>
                                <div class="img-pattern-stripe">
                                    <img src="images/pattern-stripe.svg" alt="">
                                </div>
                                <div class="img-pattern-dotted">
                                    <img src="images/pattern-dotted.svg" alt="">
                                </div>
                                <div class="img-pattern-cherry">
                                    <img src="images/pattern-cherry.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="pattern mobile-none">
                            <h3></h3>
                            <div class=" img-pattern flex">
                                <div class="img-pattern-icecream">
                                    <img src="images/pattern-icecream.svg" alt="">
                                </div>
                                <div class="img-pattern-rhombus">
                                    <img src="images/pattern-rhombus.svg" alt="">
                                </div>
                                <div class="img-pattern-pizza">
                                    <img src="images/pattern-pizza.svg" alt="">
                                </div>
                                <div class="img-pattern-strawberry mobile-none">
                                    <img src="images/pattern-strawberry.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="shape mobile-none">
                            <h3>Shape</h3>
                            <div class="shape-flex flex">
                                <div><img src="images/shape-triangle.svg" alt=""></div>
                                <div><img src="images/shape-circle.svg" alt=""></div>
                                <div><img src="images/shape-square.svg" alt=""></div>
                                <div><img src="images/shape-rhombus.svg" alt=""></div>
                                <div><img src="images/shape-heart.svg" alt=""></div>
                                <div><img class="img-strawberry" src="images/shape-strawberry.svg" alt=""></div>
                                <div><img src="images/shape-watermelon.svg" alt=""></div>
                                <div><img class="img-cherry" src="images/shape-cherry.svg" alt=""></div>
                                <div><img class="img-icecream" src="images/shape-icecreem.svg" alt=""></div>
                                <div><img src="images/shape-pizza.svg" alt=""></div>
                            </div>
                        </div> -->
                    </div>
                    <div class="socks-color flex mobile-show" id="ul3">
                        <h3>Shape Color</h3>
                        <ul class="sockscolor-dots flex">
                            <li class="flex">
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-bottom" id="b1">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-bottom" id="b2">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-bottom" id="b3">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-bottom" id="b4">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-bottom" id="b5">
                                    </div>
                                </div>
                            </li>
                            <li class="flex">
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-bottom" id="b6">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-bottom" id="b7">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-bottom " id="b8">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-bottom" id="b9">
                                    </div>
                                </div>
                                <div>
                                    <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                    <div class="color color-bottom" id="b10">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-box flex">
                        <div class="btn-left flex">
                            <button class="btn-blue btn-clear">Clear</button>
                        </div>
                        <div class="btn-right flex">
                            <button class="btn-coral btn-finish">Finish</button>
                        </div>
                    </div>
                </div>
                <div class="shape-color flex ">
                    <h3 class="color-active">COLOR</h3>
                    <ul class="sockscolor-dots flex" id="ul2">
                        <li class="flex">
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color color-bottom" id="b1">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color color-bottom" id="b2">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color color-bottom" id="b3">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color color-bottom" id="b4">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color color-bottom" id="b5">
                                </div>
                            </div>
                        </li>
                        <li class="flex">
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color color-bottom" id="b6">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color color-bottom" id="b7">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color color-bottom" id="a8">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color color-bottom" id="b9">
                                </div>
                            </div>
                            <div>
                                <img class=" img-select-circle" src="images/select circle.svg" alt="">
                                <div class="color color-bottom" id="b10">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal"></div>
    <?php include __DIR__ . '/__html_footer.php' ?>
</div>
<?php include __DIR__ . '/__scripts.php' ?>

<script>
    // 定義tutorial的function
    const openTutorial = () => {
        $(".modal").fadeIn(500);
        $(".modal").css({
            "display": "block"
        })
        $(".tutorial#tutor2").css({
            "display": "block"
        })
        $(".dash-box").css("display", "block")
        $(".shape-color").addClass("transition")
        $(".shape-color").addClass("move-left")
    };

    const closeTutorial = () => {
        $(".modal").fadeOut(500);
        $(".tutorial#tutor2").css("display", "none")
        $(".dash-box").css("display", "none")
        $(".shape-color").removeClass("move-left")
    };


    // 定義mousemove function
    let hasMouseMove = false;

    const followCursor = () => {
        hasMouseMove = true;
        $(window).mousemove(function(e) {
            console.log('triggered')
            if ($(window).width() > 992) {
                $(".spot").css("display", "flex")
                $(".spot").css("clip-path", `circle(140px at ${e.pageX}px ${e.pageY - 30}px`)
            }
        })
    };


    // anchor point
    $(".go-next").click(function() {
        let nextPosition = $(".block-bottom").offset().top;
        console.log(nextPosition)
        $("html").animate({
            scrollTop: nextPosition
        })
        openTutorial();
    })

    // shape-color move left
    $(".color-active").click(function(event) {
        console.log("click", event)
        // $(this).css({
        //     transform: "translateX(-500px)",
        // })
        $(".shape-color").addClass("transition")
        $(".shape-color").toggleClass("move-left")
    })



    // 打開使用說明
    $(".tutorial").click(function() {
        // console.log("click")
        openTutorial();
    })


    $(".tutorial#tutor2").click(function() {
        closeTutorial();
    })


    // mousemove
    if ($(window).width() > 992) {
        if (!hasMouseMove) {
            followCursor();
        }
    } else {
        openTutorial();
    }

    $(window).resize(function() {
        console.log('triggered');
        if ($(window).width() > 992) {
            if (!hasMouseMove) {
                followCursor();
            }
            closeTutorial();
        } else {
            $(".spot").css("display", "none")
            $(".diy-pattern").css("display", "none")
            openTutorial();
        }
    })

    //DIY change Pattern
    $(".img-pattern-watz img").click(function() {
        $(".pattern-watz").addClass("appear")
        $(".pattern-cherry").removeClass("appear")
        $(".pattern-stripe").removeClass("appear")
        $(".pattern-dotted").removeClass("appear")
    })
    $(".img-pattern-stripe img").click(function() {
        $(".pattern-watz").removeClass("appear")
        $(".pattern-cherry").removeClass("appear")
        $(".pattern-stripe").addClass("appear")
        $(".pattern-dotted").removeClass("appear")
    })
    $(".img-pattern-dotted img").click(function() {
        $(".pattern-watz").removeClass("appear")
        $(".pattern-cherry").removeClass("appear")
        $(".pattern-stripe").removeClass("appear")
        $(".pattern-dotted").addClass("appear")
    })
    $(".img-pattern-cherry img").click(function() {
        $(".pattern-watz").removeClass("appear")
        $(".pattern-cherry").addClass("appear")
        $(".pattern-stripe").removeClass("appear")
        $(".pattern-dotted").removeClass("appear")
    })

    //change socks color
    $(".color-top").click(function() {
        let color = $(this).css("background-color")
        console.log(color)
        $(".socks-color").css("fill", color)
    })

    //change shape color
    $(".color-bottom").click(function() {
        let shapecolor = $(this).css("background-color")
        console.log(shapecolor)
        $(".socks-path").css({
            "fill": shapecolor,
            "stroke": shapecolor
        })
    })
</script>

<?php require __DIR__ . '/__html_foot.php' ?>