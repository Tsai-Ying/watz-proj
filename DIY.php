<?php require __DIR__ . '/__connect_db.php';
$pageName = 'DIY';  // 這裡放你的pagename
?>
<?php include __DIR__ . '/__html_head.php' ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
<title>WATZ - DIY</title>
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

    .pattern-bg1,
    .pattern-bg3 {
        width: 40vw;
        height: 100vh;
    }

    .pattern-bg2 {
        width: 20vw;
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
        margin: 15vh 0 60px;
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
        background: #0388A6;
    }

    .color#a5 {
        background: #C24343;
    }

    .color#a6 {
        background: #C2437A;
    }

    .color#a7 {
        background: #4B644A;
    }

    .color#a8 {
        background: #B4CFBB;
    }

    .color#a9 {
        background: #71697A;
    }

    .color#a10 {
        background: #E8DBC5;
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

    .img-pattern-area img {
        width: 100%;
        height: 100%;
        object-fit: contain;
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
        background: #F2DECF;
    }

    .color#b2 {
        background: #F0A202;
    }

    .color#b3 {
        background: #F2EFC7;
    }

    .color#b3 {
        background: #F2EFC7;
    }

    .color#b4 {
        background: #D7A6B3;

    }

    .color#b5 {
        background: #6E4555;
    }

    .color#b6 {
        background: #5AB1BB;
    }

    .color#b7 {
        background: #C4C8D4;
    }

    .color#b8 {
        background: #E43F6F;
    }

    .color#b9 {
        background: #7C9885;
    }

    .color#b10 {
        background: #A9927D;
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

        .diy-pattern div {
            width: calc(100vw / 3);
            height: 100vh;
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
            height: 300px;
            margin-top: 60px;
        }

        .pattern h3 {
            margin-top: 0;
        }

        .img-pattern {
            width: 350px;
        }

        .img-pattern div {
            width: 45px;
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
            /* width: 100%;
            height: 100%; */
            width: 25vw;
            height: 25vh;
            margin: 5vw 0 0 0;
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
            flex-wrap: nowrap;
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

        .pattern-with-shape {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .pattern2 {
            margin-top: 27px;
        }

        .img-pattern div {
            width: 35px;
        }

    }

    @media screen and (max-width: 576px) {
        .container {
            background-size: cover;
            background-image: url(images/BG-mobile2.svg);
            background-repeat: repeat-y;
        }

        .diy-area {
            /* padding-top: 2vh; */
            width: 35vw;
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

        .pattern h3 {
            margin: -40px 0 0 0;
        }

        .btn-box {
            height: 5vh;
        }

        .btn-box button {
            height: 30px;
        }

        .dash1 {
            height: 16vh;
        }

        .dash2 {
            height: 25vh;
            top: 16.5vh;
        }

        .step2 {
            top: 17vh;
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

    .stroke-width {
        stroke-width: 5;
        stroke: #404040;
    }

    .round {
        stroke-linecap: round;
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

                    <svg class="diy-area transition pattern-watz appear" version="1.1" id="pattern-watz" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66.1 108" style="enable-background:new 0 0 66.1 108;" xml:space="preserve">
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

                    <svg class="diy-area transition pattern-icecream" version="1.1" id="pattern-icecream" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66.1 108" style="enable-background:new 0 0 66.1 108;" xml:space="preserve">
                        <path id="Path_4445" class="socks-color" d="M64.6,59.5c0.1,2.3-1,4.5-2.8,5.9c-1.8,1.3-3.7,2.4-5.7,3.3c-4.9,2.3-9.2,5.7-12.6,10
                        c-2.4,3.4-4.6,7-6.5,10.7c-1.8,3.4-3.9,6.7-6.3,9.8c-5.4,6.9-13.6,9.1-21.7,5.7c-3.6-1.5-6.2-4.7-7-8.5C1.2,93,1.3,89.4,2.4,86
                        c1.4-4.5,3.7-8.6,6.7-12.2c4.2-5.4,8.8-10.4,13.4-15.4c2.3-2.6,4.6-5.2,6.7-7.9c1.6-2.1,2.4-4.6,2.4-7.2c-0.1-8.2-0.2-16.5-0.3-24.7
                        c0-3.9,0-7.9-0.1-11.8c-0.1-1.4,0.7-2.8,2.1-3.3c1.5-0.7,3.1-1.1,4.7-1.3c6.2-1,12.5-0.9,18.7,0.2c1.5,0.3,3,0.7,4.5,1.3
                        c0.9,0.2,1.5,1.1,1.4,2c-0.2,3.6-0.4,7.2-0.6,10.8c-0.7,9-0.6,18.1,0.1,27.1c0.4,4,1.2,8,2,11.9C64.3,56.8,64.5,58.1,64.6,59.5z" />
                        <g id="圖層_2_100_">
                            <g id="圖層_1-2_99_">
                                <g id="Group_109_98_">
                                    <g id="Group_108_98_">
                                        <path class="socks-path" d="M47,74.9c-1.9-0.6-3.9,0.4-4.7,2.4c-0.1,0.5-0.1,1.1-0.1,1.6c-0.3,0.1-0.4,0.3-0.5,0.5
                               c-0.3,0.5,0,1.1,0.6,1.2c0.1,0,0.4,0,0.5,0c0.1,0,0.1,0,0.1,0c0.4-1.1,1.2-2.1,2.4-2.6C45.4,76.8,46,75.7,47,74.9z" />
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g>
                            <g id="圖層_2_101_">
                                <g id="圖層_1-2_100_">
                                    <g id="Group_109_99_">
                                        <g id="Group_108_99_">
                                            <path class="socks-path" d="M63,46.1c-0.6-0.8-0.9-1.9-1-2.9c-0.3,0.4-0.6,0.8-0.8,1.3c-0.1,0.5-0.1,1.1-0.1,1.6
                               c-0.3,0.1-0.4,0.3-0.5,0.5c-0.3,0.5,0,1.1,0.6,1.2c0.1,0,0.4,0,0.5,0c0.1,0,0.1,0,0.1,0c0,0.1,0,0.1,0,0.1
                               c-0.3,0.5,0,1.1,0.6,1.2c0.1,0.1,0.1,0.1,0.2,0.1c0.1-0.5,0.2-1.1,0.4-1.6C62.9,47.1,62.9,46.6,63,46.1z" />
                                        </g>
                                    </g>
                                    <g id="Group_111_99_">
                                        <g id="Group_110_99_">
                                            <path class="socks-path" d="M62.6,50.3c-0.6,0-1.1-0.4-1.5-0.9l-0.5,8l0.8,0.2l2.7-4.1C63.2,52.6,62.7,51.5,62.6,50.3z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_97_">
                                <g id="圖層_1-2_96_">
                                    <g id="Group_109_95_">
                                        <g id="Group_108_95_">
                                            <path class="socks-path" d="M31.8,24.3c-0.4-0.1-0.8-0.2-1.2-0.2c0.1,0.1,0.1,0.3,0.2,0.5c0.1,0.4,0.1,0.9,0.2,1.3
                                c0,0.7-0.1,1.3-0.4,1.9c0,0,0,0.1-0.1,0.1c0.3,0.9,0.4,1.9,0.2,2.8c0.1,0.6,0.1,1.3,0,1.9c0.3-0.1,0.6-0.3,0.7-0.5
                                c0,0,0-0.1,0-0.3c0-0.1,0.1-0.3,0.3-0.3c0.1,0,0.3,0,0.3,0.1c0.1,0.1,0.4,0.3,0.5,0.3c0.4,0.1,0.9-0.2,1.1-0.6
                                c0.1-0.3,0.1-0.5,0-0.8c0.4-0.5,0.8-0.9,0.9-1.5C35,27.1,33.8,24.9,31.8,24.3z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_96_">
                                <g id="圖層_1-2_95_">
                                    <g id="Group_109_94_">
                                        <g id="Group_108_94_">
                                            <path id="Path_4466_94_" class="socks-path" d="M47.2,58c0.1,0.3,0.1,0.5,0,0.8c-0.1,0.4-0.7,0.7-1.1,0.6c-0.1,0-0.4-0.1-0.5-0.3
                                c0-0.1-0.1-0.1-0.3-0.1l0,0c-0.1,0-0.3,0.1-0.3,0.3c0,0.1,0,0.3,0,0.3c-0.1,0.4-0.7,0.7-1.2,0.6c-0.4-0.1-0.8-0.5-0.7-1
                                c0-0.1-0.1-0.3-0.3-0.4l0,0c-0.1,0-0.3,0-0.4,0c-0.3,0.1-0.5,0.1-0.7,0l0,0c-0.5-0.1-0.8-0.6-0.6-1.2l0,0c0,0,0,0,0-0.1l0,0
                                c0,0,0,0-0.1,0c-0.1,0-0.4,0-0.5,0c-0.5-0.1-0.8-0.6-0.6-1.2c0.1-0.3,0.3-0.4,0.5-0.5c0-0.5,0-1.1,0.1-1.6c0.8-2,2.9-3,4.7-2.4
                                c2,0.6,3.2,2.9,2.6,4.9C48,57,47.6,57.5,47.2,58z" />
                                        </g>
                                    </g>
                                    <g id="Group_111_94_">
                                        <g id="Group_110_94_">
                                            <path id="Path_4467_94_" class="socks-path" d="M45,60.8l-4.1,6.3l-0.8-0.2l0.5-8c0.4,0.5,0.9,0.9,1.6,0.9c0,0.1,0.1,0.4,0.3,0.5
                                c0.3,0.3,0.5,0.5,0.9,0.6c0.1,0,0.1,0,0.3,0C44.2,61.1,44.6,60.9,45,60.8z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_94_">
                                <g id="圖層_1-2_93_">
                                    <g id="Group_109_92_">
                                        <g id="Group_108_92_">
                                            <path id="Path_4466_92_" class="socks-path" d="M28.5,89c0.1,0.3,0.1,0.5,0,0.8c-0.1,0.4-0.7,0.7-1.1,0.6c-0.1,0-0.4-0.1-0.5-0.3
                                c0-0.1-0.1-0.1-0.3-0.1l0,0c-0.1,0-0.3,0.1-0.3,0.3c0,0.1,0,0.3,0,0.3c-0.1,0.4-0.7,0.7-1.2,0.6c-0.4-0.1-0.8-0.5-0.7-1
                                c0-0.1-0.1-0.3-0.3-0.4l0,0c-0.1,0-0.3,0-0.4,0c-0.3,0.1-0.5,0.1-0.7,0l0,0c-0.5-0.1-0.8-0.6-0.6-1.2l0,0c0,0,0,0,0-0.1l0,0
                                c0,0,0,0-0.1,0c-0.1,0-0.4,0-0.5,0c-0.5-0.1-0.8-0.6-0.6-1.2c0.1-0.3,0.3-0.4,0.5-0.5c0-0.5,0-1.1,0.1-1.6c0.8-2,2.9-3,4.7-2.4
                                c2,0.6,3.2,2.9,2.6,4.9C29.3,88,29,88.6,28.5,89z" />
                                        </g>
                                    </g>
                                    <g id="Group_111_92_">
                                        <g id="Group_110_92_">
                                            <path id="Path_4467_92_" class="socks-path" d="M26.4,91.8l-4.1,6.3l-0.8-0.2l0.5-8c0.4,0.5,0.9,0.9,1.6,0.9c0,0.1,0.1,0.4,0.3,0.5
						c0.3,0.3,0.5,0.5,0.9,0.6c0.1,0,0.1,0,0.3,0C25.5,92.1,26,91.9,26.4,91.8z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_93_">
                                <g id="圖層_1-2_92_">
                                    <g id="Group_109_91_">
                                        <g id="Group_108_91_">
                                            <path class="socks-path" d="M22.3,57.9c-0.5,1.1-1.5,2.1-2.9,2.4c-0.1,1.2-0.6,2.4-1.4,3.2c0,0,0,0,0,0c-0.3,0.5,0,1.1,0.6,1.2
						c0.1,0.1,0.4,0.1,0.7,0c0.1,0,0.3,0,0.4,0c0.1,0.1,0.3,0.3,0.3,0.4c-0.1,0.5,0.3,0.9,0.7,1c0.5,0.1,1.1-0.2,1.2-0.6
						c0,0,0-0.1,0-0.3c0-0.1,0.1-0.3,0.3-0.3s0.3,0,0.3,0.1c0.1,0.1,0.4,0.3,0.5,0.3c0.4,0.1,0.9-0.2,1.1-0.6c0.1-0.3,0.1-0.5,0-0.8
						c0.4-0.4,0.8-0.9,0.9-1.5C25.3,60.7,24.2,58.6,22.3,57.9z" />
                                        </g>
                                    </g>
                                    <g id="Group_111_91_">
                                        <g id="Group_110_91_">
                                            <path id="Path_4467_91_" class="socks-path" d="M21.8,67l-4.1,6.3L16.8,73l0.5-8c0.4,0.5,0.9,0.9,1.6,0.9c0,0.1,0.1,0.4,0.3,0.5
						c0.3,0.3,0.5,0.5,0.9,0.6c0.1,0,0.1,0,0.3,0C20.8,67.2,21.2,67.1,21.8,67z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_92_">
                                <g id="圖層_1-2_91_">
                                    <g id="Group_109_90_">
                                        <g id="Group_108_90_">
                                            <path class="socks-path" d="M6.4,93.2c-1.8-0.6-3.7,0.2-4.6,2c0.6,1.1,0.8,2.4,0.6,3.6c0.6,0.3,1.1,0.8,1.4,1.3c0,0,0,0,0,0
						c0.1,0.1,0.3,0.3,0.3,0.4c0,0,0,0,0,0.1c0.1,0.3,0.3,0.5,0.4,0.8c0.1,0.1,0.2,0.1,0.3,0.2c0.5,0.1,1.1-0.2,1.2-0.6
						c0,0,0-0.1,0-0.3c0-0.1,0.1-0.3,0.3-0.3c0.1,0,0.3,0,0.3,0.1c0.1,0.1,0.4,0.3,0.5,0.3c0.4,0.1,0.9-0.2,1.1-0.6
						c0.1-0.3,0.1-0.5,0-0.8c0.4-0.4,0.8-0.9,0.9-1.5C9.7,96,8.5,93.8,6.4,93.2z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_89_">
                                <g id="圖層_1-2_88_">
                                    <g id="Group_109_87_">
                                        <g id="Group_108_87_">
                                            <path id="Path_4466_87_" class="socks-path" d="M58.9,27.3c0.1,0.3,0.1,0.5,0,0.8c-0.1,0.4-0.7,0.7-1.1,0.6c-0.1,0-0.4-0.1-0.5-0.3
						c0-0.1-0.1-0.1-0.3-0.1l0,0c-0.1,0-0.3,0.1-0.3,0.3c0,0.1,0,0.3,0,0.3c-0.1,0.4-0.7,0.7-1.2,0.6c-0.4-0.1-0.8-0.5-0.7-1
						c0-0.1-0.1-0.3-0.3-0.4l0,0c-0.1,0-0.3,0-0.4,0c-0.3,0.1-0.5,0.1-0.7,0l0,0c-0.5-0.1-0.8-0.6-0.6-1.2l0,0c0,0,0,0,0-0.1l0,0
						c0,0,0,0-0.1,0s-0.4,0-0.5,0c-0.5-0.1-0.8-0.6-0.6-1.2c0.1-0.3,0.3-0.4,0.5-0.5c0-0.5,0-1.1,0.1-1.6c0.8-2,2.9-3,4.7-2.4
						c2,0.6,3.2,2.9,2.6,4.9C59.7,26.3,59.5,26.9,58.9,27.3z" />
                                        </g>
                                    </g>
                                    <g id="Group_111_87_">
                                        <g id="Group_110_87_">
                                            <path id="Path_4467_87_" class="socks-path" d="M56.9,30.1l-4.1,6.3l-0.8-0.2l0.5-8c0.4,0.5,0.9,0.9,1.6,0.9c0,0.1,0.1,0.4,0.3,0.5
						c0.3,0.3,0.5,0.5,0.9,0.6c0.1,0,0.1,0,0.3,0C55.9,30.4,56.5,30.4,56.9,30.1z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2_88_">
                                <g id="圖層_1-2_87_">
                                    <g id="Group_109_86_">
                                        <g id="Group_108_86_">
                                            <path id="Path_4466_86_" class="socks-path" d="M45.7,9.2c0.1,0.3,0.1,0.5,0,0.8c-0.1,0.4-0.7,0.7-1.1,0.6c-0.1,0-0.4-0.1-0.5-0.3
						c0-0.1-0.1-0.1-0.3-0.1l0,0c-0.1,0-0.3,0.1-0.3,0.3c0,0.1,0,0.3,0,0.3c-0.1,0.4-0.7,0.7-1.2,0.6c-0.4-0.1-0.8-0.5-0.7-1
						c0-0.1-0.1-0.3-0.3-0.4l0,0c-0.1,0-0.3,0-0.4,0c-0.3,0.1-0.5,0.1-0.7,0l0,0c-0.5-0.1-0.8-0.6-0.6-1.2l0,0c0,0,0,0,0-0.1l0,0
						c0,0,0,0-0.1,0s-0.4,0-0.5,0c-0.5-0.1-0.8-0.6-0.6-1.2c0.1-0.3,0.3-0.4,0.5-0.5c0-0.5,0-1.1,0.1-1.6c0.6-1.9,2.9-3,4.7-2.4
						c2,0.6,3.2,2.9,2.6,4.9C46.5,8.3,46.1,8.8,45.7,9.2z" />
                                        </g>
                                    </g>
                                    <g id="Group_111_86_">
                                        <g id="Group_110_86_">
                                            <path id="Path_4467_86_" class="socks-path" d="M43.5,12l-4.1,6.3l-0.8-0.2l0.5-8c0.4,0.5,0.9,0.9,1.6,0.9c0,0.1,0.1,0.4,0.3,0.5
						c0.3,0.3,0.5,0.5,0.9,0.6c0.1,0,0.1,0,0.3,0C42.6,12.3,43.1,12.3,43.5,12z" />
                                        </g>
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

                    <svg class="diy-area transition pattern-rhombus" version="1.1" id="pattern-rhombus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66.1 108" style="enable-background:new 0 0 66.1 108;" xml:space="preserve">
                        <path id="Path_4445" class="socks-color" d="M64.6,59.5c0.1,2.3-1,4.5-2.8,5.9c-1.8,1.3-3.7,2.4-5.7,3.3c-4.9,2.3-9.2,5.7-12.6,10
                        c-2.4,3.4-4.6,7-6.5,10.7c-1.8,3.4-3.9,6.7-6.3,9.8c-5.4,6.9-13.6,9.1-21.7,5.7c-3.6-1.5-6.2-4.7-7-8.5C1.2,93,1.3,89.4,2.4,86
                        c1.4-4.5,3.7-8.6,6.7-12.2c4.2-5.4,8.8-10.4,13.4-15.4c2.3-2.6,4.6-5.2,6.7-7.9c1.6-2.1,2.4-4.6,2.4-7.2c-0.1-8.2-0.2-16.5-0.3-24.7
                        c0-3.9,0-7.9-0.1-11.8c-0.1-1.4,0.7-2.8,2.1-3.3c1.5-0.7,3.1-1.1,4.7-1.3c6.2-1,12.5-0.9,18.7,0.2c1.5,0.3,3,0.7,4.5,1.3
                        c0.9,0.2,1.5,1.1,1.4,2c-0.2,3.6-0.4,7.2-0.6,10.8c-0.7,9-0.6,18.1,0.1,27.1c0.4,4,1.2,8,2,11.9C64.3,56.8,64.5,58.1,64.6,59.5z" />
                        <g>
                            <g id="圖層_2_37_">
                                <g id="圖層_1-2_36_">
                                    <path class="socks-path" d="M63.1,5.6l-5.8,5.8l5.4,5.4C62.7,13.1,63,9.4,63.1,5.6z" />
                                </g>
                            </g>
                            <g id="圖層_2_36_">
                                <g id="圖層_1-2_35_">
                                    <path class="socks-path" d="M61.8,37.5c0.3-2.7,0.5-5.4,0.6-8.1l-5,5l4.5,4.5C61.8,38.5,61.7,38,61.8,37.5z" />
                                </g>
                            </g>
                            <g id="圖層_2_35_">
                                <g id="圖層_1-2_30_">
                                    <path class="socks-path" d="M63.3,62.9c1.4-1.6,2-3.2,2.3-4.9c0-0.1,0-0.3,0-0.4c0-2.4-1.5-4.2-1.9-6.5c0-0.1,0-0.1,0-0.2l-6.3,6.3
                        l5.8,5.8C63.2,63,63.2,63,63.3,62.9z" />
                                </g>
                            </g>
                            <g id="圖層_2_27_">
                                <g id="圖層_1-2_24_">
                                    <path class="socks-path" d="M47.3,1.5c-0.1,0-0.2,0-0.3,0h-2.7l-9.9,9.9l11.5,11.5l11.5-11.5L47.3,1.5z" />
                                </g>
                            </g>
                            <g id="圖層_2_24_">
                                <g id="圖層_1-2_23_">

                                    <rect id="Rectangle_87_16_" x="37.7" y="26.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -10.8831 42.4652)" class="socks-path" width="16.2" height="16.2" />
                                </g>
                            </g>
                            <g id="圖層_2_23_">
                                <g id="圖層_1-2_20_">

                                    <rect id="Rectangle_87_15_" x="37.7" y="49.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -27.1255 49.1512)" class="socks-path" width="16.2" height="16.2" />
                                </g>
                            </g>
                            <path class="socks-path" d="M45.9,76.7c1.2-1.6,2.7-2.9,4.2-3.7l-4.3-4.3L34.4,80.3l5.7,5.7C41.3,82.5,43.6,79.7,45.9,76.7z" />
                            <g id="圖層_2_19_">
                                <g id="圖層_1-2_17_">
                                    <path class="socks-path" d="M34.4,11.4L31,8c0.2,1,0.3,2.1,0.3,3.1c0.1,1.1,0.1,2.2,0,3.4L34.4,11.4z" />
                                </g>
                            </g>
                            <g id="圖層_2_18_">
                                <g id="圖層_1-2_16_">
                                    <path class="socks-path" d="M30.6,30.6c0,0.3,0,0.5,0,0.8c-0.2,2.2,0.1,4.4,0.2,6.6l3.6-3.6L30.6,30.6z" />
                                </g>
                            </g>
                            <g id="圖層_2_17_">
                                <g id="圖層_1-2_15_">
                                    <path class="socks-path" d="M27.7,50.6c-0.6,1.8-1.8,3.4-3.4,4.8c-0.3,0.2-0.5,0.5-0.8,0.7c-0.1,0.7-0.2,1.4-0.6,2.1
                        c-1,2.3-2.8,4.2-5,5.6l5,5l11.5-11.5L27.7,50.6z" />
                                </g>
                            </g>

                            <rect id="Rectangle_87_9_" x="14.8" y="72.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -50.0833 39.7241)" class="socks-path" width="16.2" height="16.2" />
                            <g id="圖層_2_14_">
                                <g id="圖層_1-2_13_">
                                    <path class="socks-path" d="M30.4,99.2l-7.5-7.5l-11.5,11.5l3.4,3.4c2.2-0.4,4.4-0.4,6.7-0.5c0.4-0.7,0.9-1.3,1.7-1.8
                        c2.1-1.4,4.1-2.5,6.3-3.6C29.7,100.2,30,99.7,30.4,99.2z" />
                                </g>
                            </g>
                            <g id="圖層_2_5_">
                                <g id="圖層_1-2_4_">
                                    <path class="socks-path" d="M7.1,75.9c-1.8,2.4-3.5,5.1-4.8,7.9c0,0.1,0,0.2,0,0.3c-0.3,2.1-0.5,4.2-1,6.3l10.2-10.2L7.1,75.9z" />
                                </g>
                            </g>
                            <g id="圖層_2_4_">
                                <g id="圖層_1-2_3_">
                                    <path class="socks-path" d="M7.3,103.9c0.4,0.3,0.7,0.6,1,1c0.4,0.1,0.8,0.2,1.2,0.3l2-2L0.6,92.4c0,0.3,0.1,0.5,0.1,0.8
                        c0.1,2.5,0.2,5.1,1.9,7.1C3.8,101.8,5.8,102.6,7.3,103.9z" />
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

                    <svg class="diy-area transition pattern-pizza" version="1.1" id="pattern-pizza" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66.1 108" style="enable-background:new 0 0 66.1 108;" xml:space="preserve">

                        <path id="Path_4445" class="socks-color" d="M64.6,59.5c0.1,2.3-1,4.5-2.8,5.9c-1.8,1.3-3.7,2.4-5.7,3.3c-4.9,2.3-9.2,5.7-12.6,10
                        c-2.4,3.4-4.6,7-6.5,10.7c-1.8,3.4-3.9,6.7-6.3,9.8c-5.4,6.9-13.6,9.1-21.7,5.7c-3.6-1.5-6.2-4.7-7-8.5C1.2,93,1.3,89.4,2.4,86
                        c1.4-4.5,3.7-8.6,6.7-12.2c4.2-5.4,8.8-10.4,13.4-15.4c2.3-2.6,4.6-5.2,6.7-7.9c1.6-2.1,2.4-4.6,2.4-7.2c-0.1-8.2-0.2-16.5-0.3-24.7
                        c0-3.9,0-7.9-0.1-11.8c-0.1-1.4,0.7-2.8,2.1-3.3c1.5-0.7,3.1-1.1,4.7-1.3c6.2-1,12.5-0.9,18.7,0.2c1.5,0.3,3,0.7,4.5,1.3
                        c0.9,0.2,1.5,1.1,1.4,2c-0.2,3.6-0.4,7.2-0.6,10.8c-0.7,9-0.6,18.1,0.1,27.1c0.4,4,1.2,8,2,11.9C64.3,56.8,64.5,58.1,64.6,59.5z" />
                        <g>
                            <g id="圖層_2_64_">
                                <g id="圖層_1-2_63_">
                                    <path class="socks-path" d="M23.5,105.8c0.1-0.2,0.3-0.3,0.5-0.5c-0.2-0.1-0.6-0.2-0.8-0.2c-0.3,0-0.8-0.2-1.2-0.3
                        c-0.3-0.2-0.7-0.5-0.8-0.7c-0.3-0.3-0.7-0.7-1-0.7s-0.7,0-1,0.2c-0.3,0.2-0.5,0.2-0.8,0.3l-0.5,2.4c0.3,0,0.5-0.1,0.8-0.1
                        c0.7,0,1.4,0.1,1.9,0.4c0.4-0.5,0.9-0.9,1.6-0.9c0.3,0,0.6,0.1,0.9,0.2C23.2,105.9,23.3,105.9,23.5,105.8z M20.1,105.8h-0.8V105
                        h0.8V105.8z" />
                                    <path class="socks-path" d="M24.9,104.7c0.3-0.3,0.7-0.6,1.1-0.9c-1.9-1.8-4.4-2.9-7.1-2.9l-0.3,2c0.2,0,0.3-0.2,0.3-0.2
                        c0.3-0.2,0.7-0.2,1.2-0.3c0.2,0,0.3,0,0.3,0c0.5,0.2,1,0.5,1.3,0.8c0.2,0.2,0.5,0.3,0.7,0.5c0.3,0.2,0.7,0.2,0.8,0.2
                        C24.1,104.3,24.6,104.4,24.9,104.7C24.9,104.7,24.9,104.7,24.9,104.7z" />
                                </g>
                            </g>
                            <g id="圖層_2_4_">
                                <g id="圖層_1-2_3_">
                                    <path class="socks-path" d="M55,69.9C55,69.9,55,69.9,55,69.9c-0.4-0.2-0.8-0.5-0.9-0.7c-0.3-0.3-0.7-0.7-1-0.7s-0.7,0-1,0.2
                        c-0.3,0.2-0.5,0.2-0.8,0.3l-0.7,3.5c0.2,0,0.4,0.1,0.6,0.2c0.4-0.5,1-1,1.6-1.3C53.3,70.8,54,70.3,55,69.9C55,70,55,70,55,69.9z
                        M52.8,71.1h-0.8v-0.8h0.8V71.1z" />
                                    <path class="socks-path" d="M55.5,69.4c0,0,0.1,0,0.2,0c0.1,0,0.1-0.1,0.2-0.1c0.4-0.4,1-0.8,1.6-1c-1.6-1.1-3.5-1.7-5.6-1.8l-0.3,2
                        c0,0,0.2-0.2,0.3-0.2c0.5-0.2,0.8-0.3,1.2-0.3c0,0,0.2,0,0.3,0c0.5,0,1,0.5,1.3,0.8C55,69.1,55.1,69.2,55.5,69.4z" />
                                </g>
                            </g>
                            <g id="圖層_2_62_">
                                <g id="圖層_1-2_61_">
                                    <path class="socks-path" d="M4.7,88.9c-0.3-0.2-0.5-0.5-0.8-0.8c-0.2-0.3-0.3-0.7-0.5-1c-0.2-0.3-0.2-0.8-0.5-1c0.2-0.3-0.3-0.3-0.7-0.3
                        c0,0-0.1,0-0.1,0c-0.1,0.4-0.3,0.7-0.4,1.1c0.7,0.3,1.3,1,1.3,1.8c0,1.1-0.7,2-1.7,2.1c0.1,0.4,0.1,0.8,0.1,1.3
                        c0.3,0.2,0.6,0.5,0.7,0.8l3.2-1c0-0.3,0.2-0.5,0.2-0.8c0.2-0.3,0.2-0.8,0.2-1.2C5.4,89.4,5.1,89.3,4.7,88.9z M4.1,91.5H3.2v-0.8
                        h0.8V91.5z" />
                                    <path class="socks-path" d="M6.3,91.5L8.1,91c-0.5-3.5-2.6-6.4-5.5-7.9c0,0.6-0.1,1.2-0.3,1.8c0,0,0,0.1,0,0.1c0.5,0,1.1,0.2,1.5,0.5
                        c0.3,0.3,0.5,1,0.8,1.5c0,0.3,0.2,0.5,0.3,0.8c0.2,0.3,0.5,0.5,0.7,0.7c0.3,0.3,0.8,0.7,1,1.2c0.2,0.5,0,1-0.2,1.5
                        C6.3,91.1,6.3,91.3,6.3,91.5z" />
                                </g>
                            </g>
                            <g id="圖層_2_61_">
                                <g id="圖層_1-2_52_">
                                    <path id="Path_4461_13_" class="socks-path" d="M24,82.3l0.5-2.2c0.5,0.2,0.8,0.7,0.8,1.3c0,0.3-0.2,0.5-0.5,0.7
                        C24.7,82.3,24.4,82.5,24,82.3z" />
                                    <circle id="Ellipse_46_32_" class="socks-path" cx="28.9" cy="80" r="1.3" />
                                    <path id="Path_4462_32_" class="socks-path" d="M26.4,84c0.5-1,1.8-1.5,2.9-0.8c0.3,0.2,0.7,0.5,0.8,0.8l3.2-1c0-0.3,0.2-0.5,0.2-0.8
                        c0.2-0.3,0.2-0.8,0.2-1.2c-0.2-0.3-0.5-0.5-0.8-0.8c-0.3-0.2-0.5-0.5-0.8-0.8c-0.2-0.3-0.3-0.7-0.5-1c-0.2-0.3-0.2-0.8-0.5-1
                        c-0.2-0.2-0.7-0.3-1-0.3c-0.3,0-0.8-0.2-1.2-0.3c-0.3-0.2-0.7-0.5-0.8-0.7c-0.3-0.3-0.7-0.7-1-0.7s-0.7,0-1,0.2
                        c-0.3,0.2-0.5,0.2-0.8,0.3l-0.7,3.5c1,0.2,1.7,1.3,1.3,2.3c-0.2,1-1.2,1.5-2,1.3l-0.5,3l2.9-0.8C26.2,84.9,26.2,84.5,26.4,84z
                        M31.2,82h0.8v0.8h-0.8V82z M28.7,78c1.2,0,2.2,0.8,2.2,2s-0.8,2.2-2,2.2s-2.2-0.8-2.2-2l0,0C26.7,79,27.5,78,28.7,78L28.7,78z
                        M26,77.1h0.8V78H26V77.1z M25.5,84.7h-0.8v-0.8h0.8V84.7z" />
                                    <path id="Path_4463_32_" class="socks-path" d="M34.3,82.8c0-0.2,0-0.3,0.2-0.3c0.2-0.5,0.3-1,0.2-1.5c-0.2-0.5-0.7-0.8-1-1.2
                        c-0.2-0.2-0.5-0.3-0.7-0.7c-0.2-0.3-0.3-0.5-0.3-0.8c-0.2-0.5-0.3-1-0.7-1.3c-0.3-0.3-1-0.5-1.5-0.5c-0.3,0-0.7-0.2-0.8-0.2
                        c-0.3-0.2-0.5-0.3-0.7-0.5C28.6,75.5,28,75,27.5,75c-0.2,0-0.3,0-0.3,0c-0.3,0-0.7,0.2-1.2,0.3c-0.2,0-0.3,0.2-0.3,0.2l0.3-2
                        c5.2,0.2,9.6,4,10.2,9.2L34.3,82.8L34.3,82.8z" />
                                    <path id="Path_4464_20_" class="socks-path" d="M29.6,84.4L27,85.2c0-0.7,0.3-1.2,1-1.3C28.6,83.5,29.2,83.8,29.6,84.4z" />
                                </g>
                            </g>
                            <g id="圖層_2_5_">
                                <g id="圖層_1-2_5_">
                                    <path class="socks-path" d="M26,59.6c-0.3-0.2-0.5-0.5-0.8-0.8c-0.2-0.3-0.3-0.7-0.5-1c0-0.2-0.2-0.3-0.2-0.5c-0.3,0.3-0.5,0.7-0.8,1
                        c0.2,0.3,0.3,0.7,0.3,1c0,1.2-0.8,2.2-2,2.2c-0.5,0-0.8-0.2-1.3-0.3c-0.2,0.2-0.2,0.2-0.3,0.3c-0.7,0.5-1.2,1-1.8,1.5
                        c0,0.2-0.2,0.2-0.2,0.3l0,0v0.8h-0.5c-0.3,0.5-0.5,1-1,1.3l2.2-0.7c0-0.5,0-0.8,0.2-1.2c0.5-1,1.8-1.5,2.9-0.8
                        c0.3,0.2,0.7,0.5,0.8,0.8l3.2-1c0-0.3,0.2-0.5,0.2-0.8c0.2-0.3,0.2-0.8,0.2-1.2C26.6,60.1,26.4,59.9,26,59.6z M24.2,62.1v-0.8H25
                        v0.8H24.2z" />
                                    <path class="socks-path" d="M25.9,55.2c-0.2,0.3-0.5,0.8-0.8,1.2c0.2,0.3,0.3,0.7,0.3,1c0,0.3,0.2,0.7,0.3,0.8s0.3,0.5,0.7,0.7
                        c0.3,0.3,0.8,0.7,1,1.2s0,1-0.2,1.5c0,0.2,0,0.3-0.2,0.3l0,0l1.8-0.7C28.7,59.1,27.6,56.9,25.9,55.2z" />
                                    <path id="Path_4464_1_" class="socks-path" d="M22.5,63.6L20,64.4c0-0.7,0.3-1.2,1-1.3C21.5,62.9,22.2,63.1,22.5,63.6z" />
                                </g>
                            </g>
                            <g id="圖層_2_6_">
                                <g id="圖層_1-2_11_">
                                    <path id="Path_4461_2_" class="socks-path" d="M42.8,52l0.5-2.2c0.5,0.2,0.8,0.7,0.8,1.3c0,0.3-0.2,0.5-0.5,0.7C43.3,52,43,52.1,42.8,52
                        z" />
                                    <circle id="Ellipse_46_9_" class="socks-path" cx="47.5" cy="49.6" r="1.3" />
                                    <path id="Path_4462_9_" class="socks-path" d="M45.2,53.6c0.5-1,1.8-1.5,2.9-0.8c0.3,0.2,0.7,0.5,0.8,0.8l3.2-1c0-0.3,0.2-0.5,0.2-0.8
                        c0.2-0.3,0.2-0.8,0.2-1.2c-0.2-0.3-0.5-0.5-0.8-0.8c-0.3-0.2-0.5-0.5-0.8-0.8c-0.2-0.3-0.3-0.7-0.5-1c-0.2-0.3-0.2-0.8-0.5-1
                        c-0.2-0.2-0.7-0.3-1-0.3c-0.3,0-0.8-0.2-1.2-0.3c-0.3-0.2-0.7-0.5-0.8-0.7c-0.3-0.3-0.7-0.7-1-0.7c-0.3,0-0.7,0-1,0.2
                        c-0.3,0.2-0.5,0.2-0.8,0.3l-0.5,3.7c1,0.2,1.7,1.3,1.3,2.3c-0.2,1-1.2,1.5-2,1.3l-0.5,3L45,55C44.8,54.5,45,54.1,45.2,53.6z
                        M49.9,51.6h0.8v0.8h-0.8V51.6z M47.5,47.6c1.2,0,2.2,0.8,2.2,2c0,1.2-0.8,2.2-2,2.2s-2.2-0.8-2.2-2l0,0
                        C45.5,48.6,46.3,47.6,47.5,47.6L47.5,47.6z M44.7,46.8h0.8v0.8h-0.8V46.8z M44.2,54.3h-0.8v-0.8h0.8V54.3z" />
                                    <path id="Path_4463_9_" class="socks-path" d="M52.9,52.5c0-0.2,0-0.3,0.2-0.3c0.2-0.5,0.3-1,0.2-1.5c-0.2-0.5-0.7-0.8-1-1.2
                        c-0.2-0.2-0.5-0.3-0.7-0.7c-0.2-0.3-0.3-0.5-0.3-0.8c-0.2-0.5-0.3-1-0.7-1.3c-0.3-0.3-1-0.5-1.5-0.5c-0.3,0-0.7-0.2-0.8-0.2
                        c-0.3-0.2-0.5-0.3-0.7-0.5c-0.3-0.3-0.8-0.8-1.3-0.8c-0.2,0-0.3,0-0.3,0c-0.3,0-0.7,0.2-1.2,0.3c-0.2,0-0.3,0.2-0.3,0.2l0.3-2
                        c5.2,0.2,9.6,4,10.2,9.2L52.9,52.5L52.9,52.5z" />
                                    <path id="Path_4464_2_" class="socks-path" d="M48.2,54l-2.5,0.8c0-0.7,0.3-1.2,1-1.3C47.2,53.1,47.9,53.5,48.2,54z" />
                                </g>
                            </g>
                            <g id="圖層_2_12_">
                                <g id="圖層_1-2_12_">
                                    <path class="socks-path" d="M35.2,26c-0.2-0.3-0.5-0.5-0.8-0.8c-0.3-0.2-0.5-0.5-0.8-0.8c-0.2-0.3-0.3-0.7-0.5-1c-0.2-0.3-0.2-0.8-0.5-1
                        c-0.3-0.2-0.7-0.3-1-0.3c-0.3,0-0.7-0.1-1-0.2c0,0.1-0.1,0.2-0.1,0.3c0.1,0.3,0.1,0.6,0.1,0.8c1,0.1,1.9,0.9,1.9,2
                        c0,1-0.7,1.9-1.6,2.1c0,0.3-0.1,0.7-0.1,1c0,0,0.1,0,0.1,0c0.3,0.2,0.7,0.5,0.8,0.8l3.2-1c0-0.3,0.2-0.5,0.2-0.8
                        C35.2,26.7,35.4,26.4,35.2,26z M33.7,27.7h-0.8v-0.8h0.8V27.7z" />
                                    <path class="socks-path" d="M30.9,18.6c0.1,0.7,0.1,1.4-0.1,2c0.3,0.1,0.6,0.2,0.8,0.2c0.5,0,1,0.2,1.5,0.5c0.3,0.3,0.5,0.8,0.7,1.3
                        c0,0.3,0.2,0.7,0.3,0.8c0.2,0.2,0.3,0.5,0.7,0.7c0.3,0.3,0.8,0.7,1,1.2c0.2,0.5,0,1-0.2,1.5c0,0.1,0,0.2-0.1,0.3l1.7-0.6
                        C37.1,23.2,34.5,20.1,30.9,18.6z" />
                                </g>
                            </g>
                            <g id="圖層_2_13_">
                                <g id="圖層_1-2_13_">
                                    <path id="Path_4461_3_" class="socks-path" d="M56.1,28.5l0.5-2.2c0.5,0.2,0.8,0.7,0.8,1.3c0,0.3-0.2,0.5-0.5,0.7
                        C56.7,28.5,56.4,28.6,56.1,28.5z" />
                                    <circle id="Ellipse_46_11_" class="socks-path" cx="60.9" cy="26.1" r="1.3" />
                                    <path class="socks-path" d="M61.9,29.8c0.2-0.7,0.4-1.4,0.8-1.9c-0.1-0.2-0.1-0.3-0.2-0.5c-0.4,0.5-0.9,0.9-1.6,0.9
                        c-1.2,0-2.2-0.8-2.2-2c0-1.2,0.8-2.2,2-2.2c0.4,0,0.7,0.1,1.1,0.3c-0.1-0.4-0.2-0.9-0.3-1.3c-0.3-0.1-0.6-0.2-0.8-0.3
                        c-0.3-0.2-0.7-0.5-0.8-0.7c-0.3-0.3-0.7-0.7-1-0.7c-0.3,0-0.7,0-1,0.2c-0.3,0.2-0.5,0.2-0.8,0.3l-0.7,3.5c1,0.2,1.7,1.3,1.3,2.3
                        c-0.2,1-1.2,1.5-2,1.3l-0.5,3l2.9-0.8c0.2-0.3,0.2-0.7,0.3-1.2c0.5-1,1.8-1.5,2.9-0.8C61.5,29.4,61.7,29.6,61.9,29.8z M57.6,30.8
                        h-0.8V30h0.8V30.8z M58.1,24.1v-0.8h0.8v0.8H58.1z" />
                                    <path class="socks-path" d="M62,20.4c-1.2-0.5-2.5-0.8-3.9-0.9l-0.3,2c0,0,0.2-0.2,0.3-0.2c0.5-0.2,0.8-0.3,1.2-0.3c0,0,0.2,0,0.3,0
				        c0.5,0,1,0.5,1.3,0.8c0.2,0.2,0.3,0.3,0.6,0.5C61.6,21.7,61.7,21,62,20.4z" />
                                    <path id="Path_4464_7_" class="socks-path" d="M61.6,30.5l-2.5,0.8c0-0.7,0.3-1.2,1-1.3C60.6,29.6,61.3,30,61.6,30.5z" />
                                </g>
                            </g>
                            <g id="圖層_2_14_">
                                <g id="圖層_1-2_14_">
                                    <path id="Path_4461_6_" class="socks-path" d="M43.9,5.5l0.5-2.2c0.5,0.2,0.8,0.7,0.8,1.3c0,0.3-0.2,0.5-0.5,0.7
			        	C44.4,5.5,44.1,5.7,43.9,5.5z" />
                                    <circle id="Ellipse_46_12_" class="socks-path" cx="48.8" cy="3.2" r="1.3" />
                                    <path class="socks-path" d="M52.6,3.3c-0.3-0.2-0.5-0.5-0.8-0.8c-0.1-0.2-0.2-0.3-0.2-0.5c-0.4,0-0.8-0.1-1.2-0.1
				        c0.3,0.3,0.5,0.8,0.5,1.2c0,1.2-0.8,2.2-2,2.2c-1.2,0-2.2-0.8-2.2-2c0-0.7,0.3-1.4,0.8-1.8c-0.3,0-0.6-0.1-0.9-0.1
			        	c-0.6,0.3-1.2,0.5-2,0.6l-0.1,0.7c1,0.2,1.7,1.3,1.3,2.3c-0.2,1-1.2,1.5-2,1.3l-0.5,3l2.9-0.8c-0.2-0.5,0-0.8,0.2-1.3
			        	c0.5-1,1.8-1.5,2.9-0.8c0.3,0.2,0.7,0.5,0.8,0.8l3.2-1c0-0.3,0.2-0.5,0.2-0.8c0.2-0.3,0.2-0.8,0.2-1.2C53.3,3.8,53,3.7,52.6,3.3z
                        M45.3,7.9h-0.8V7h0.8V7.9z M51.8,6H51V5.2h0.8V6z" />
                                    <path class="socks-path" d="M53.4,2.1c-0.3,0-0.6,0-0.9,0c0,0.1,0.1,0.1,0.1,0.2c0.2,0.3,0.5,0.5,0.7,0.7c0.3,0.3,0.8,0.7,1,1.2
				        c0.2,0.5,0,1-0.2,1.5C54,5.7,54,5.9,54,6l2-0.2c-0.1-1.1-0.5-2.2-1-3.2C54.4,2.6,53.9,2.4,53.4,2.1z" />
                                    <path id="Path_4464_8_" class="socks-path" d="M49.3,7.5l-2.5,0.8c0-0.7,0.3-1.2,1-1.3C48.3,6.7,48.9,7,49.3,7.5z" />
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

                    <svg class="diy-area transition pattern-strawberry" version="1.1" id="pattern-strawberry" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66.1 108" style="enable-background:new 0 0 66.1 108;" xml:space="preserve">

                        <path id="Path_4445" class="socks-color" d="M64.6,59.5c0.1,2.3-1,4.5-2.8,5.9c-1.8,1.3-3.7,2.4-5.7,3.3c-4.9,2.3-9.2,5.7-12.6,10
                        c-2.4,3.4-4.6,7-6.5,10.7c-1.8,3.4-3.9,6.7-6.3,9.8c-5.4,6.9-13.6,9.1-21.7,5.7c-3.6-1.5-6.2-4.7-7-8.5C1.2,93,1.3,89.4,2.4,86
                        c1.4-4.5,3.7-8.6,6.7-12.2c4.2-5.4,8.8-10.4,13.4-15.4c2.3-2.6,4.6-5.2,6.7-7.9c1.6-2.1,2.4-4.6,2.4-7.2c-0.1-8.2-0.2-16.5-0.3-24.7
                        c0-3.9,0-7.9-0.1-11.8c-0.1-1.4,0.7-2.8,2.1-3.3c1.5-0.7,3.1-1.1,4.7-1.3c6.2-1,12.5-0.9,18.7,0.2c1.5,0.3,3,0.7,4.5,1.3
                        c0.9,0.2,1.5,1.1,1.4,2c-0.2,3.6-0.4,7.2-0.6,10.8c-0.7,9-0.6,18.1,0.1,27.1c0.4,4,1.2,8,2,11.9C64.3,56.8,64.5,58.1,64.6,59.5z" />
                        <g>
                            <g id="圖層_2_84_">
                                <g id="圖層_1-2_83_">
                                    <path class="socks-path" d="M39.6,81.1c0.3,0.1,0.6,0.3,1,0.5c0.3-0.5,0.6-1,0.9-1.5c-0.6-0.1-1.2,0.1-1.6,0.4c-0.1-0.8-0.6-1.5-1.4-1.8L38,78.4
                        c-0.2-0.1-0.4,0-0.4,0.2l-0.2,0.5c-0.2,0.4-0.2,0.8-0.2,1.3C38.1,80.4,38.9,80.8,39.6,81.1z" />
                                    <path class="socks-path" d="M37,90c0.4-1.3,0.8-2.5,1.3-3.7c-0.1-0.1-0.1-0.2,0-0.3c0-0.1,0.1-0.2,0.2-0.2c0.5-1.2,1.1-2.5,1.7-3.6
                        c-0.3-0.2-0.6-0.3-0.9-0.4c-0.7-0.3-1.6-0.7-2.6-0.8c-1.1-0.1-2.2,0.6-2.5,1.6c-0.7,1.5-0.7,3.2-0.2,4.8c0.4,1.2,1.1,2.3,1.7,2.6
                        C36,90.1,36.5,90.1,37,90z M38,83.9c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4c-0.1,0.2-0.3,0.2-0.4,0.2
                        C38,84.3,37.9,84.1,38,83.9z M37.2,87.5L37.2,87.5c-0.1,0.2-0.3,0.2-0.4,0.2l0,0c-0.2-0.1-0.2-0.3-0.2-0.4s0.3-0.2,0.4-0.2
                        S37.3,87.3,37.2,87.5z M36.2,83.5C36,83.4,35.9,83.2,36,83s0.3-0.3,0.4-0.2c0.2,0.1,0.3,0.3,0.2,0.4l0,0
                        C36.6,83.5,36.4,83.5,36.2,83.5L36.2,83.5z M36.3,85.1c0.1-0.2,0.3-0.2,0.4-0.2s0.2,0.3,0.2,0.4l0,0c-0.1,0.2-0.3,0.2-0.4,0.2
                        C36.3,85.5,36.2,85.3,36.3,85.1z" />
                                </g>
                            </g>
                            <g id="圖層_2_83_">
                                <g id="圖層_1-2_82_">
                                    <path class="socks-path" id="Path_4457_29_" d="M12.7,68.6c-0.1-0.4,0-0.9,0.2-1.3l0.2-0.5l0,0c0.1-0.2,0.3-0.2,0.4-0.2l0.5,0.2
                        c0.7,0.3,1.3,1,1.4,1.8c0.7-0.5,1.5-0.6,2.3-0.2l0.5,0.2l0,0c0.2,0.1,0.2,0.3,0.2,0.4l-0.2,0.5c-0.2,0.4-0.5,0.7-0.8,1
                        c-0.7-0.6-1.6-1-2.2-1.2C14.5,69.1,13.6,68.7,12.7,68.6z" />
                                    <path class="socks-path" id="Path_4458_49_" d="M17.1,71.4c-0.7-0.7-1.6-1.1-2.3-1.4s-1.6-0.7-2.6-0.8c-1.1-0.1-2.2,0.6-2.5,1.6
                        C9,72.3,9,74,9.5,75.6c0.4,1.2,1.1,2.3,1.7,2.6c0.6,0.3,1.9,0.1,3.1-0.5c1.5-0.7,2.7-1.9,3.3-3.4C18.1,73.4,17.9,72.1,17.1,71.4z
                        M11.7,71.7c-0.2-0.1-0.3-0.3-0.2-0.4s0.3-0.3,0.4-0.2c0.2,0.1,0.3,0.3,0.2,0.4l0,0l0,0C12.1,71.7,11.9,71.8,11.7,71.7L11.7,71.7
                        z M12,73.8c-0.2-0.1-0.2-0.3-0.2-0.4c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4l0,0C12.3,73.8,12.1,73.9,12,73.8z
                        M12.2,75.9C12,75.8,12,75.6,12,75.5c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4l0,0C12.6,75.9,12.4,76,12.2,75.9
                        L12.2,75.9z M13.7,72.6c-0.2-0.1-0.2-0.3-0.2-0.4c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4l0,0
                        C14.1,72.6,13.9,72.7,13.7,72.6z M14,74.7c-0.2-0.1-0.3-0.3-0.2-0.4c0.1-0.2,0.3-0.3,0.4-0.2s0.3,0.3,0.2,0.4l0,0
                        C14.3,74.7,14.1,74.8,14,74.7z M15.7,73.5c-0.2-0.1-0.2-0.3-0.2-0.4c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4l0,0
                        C16,73.5,15.8,73.5,15.7,73.5L15.7,73.5L15.7,73.5L15.7,73.5z" />
                                </g>
                            </g>
                            <g id="圖層_2_2_">
                                <g id="圖層_1-2_1_">
                                    <path class="socks-path" id="Path_4457_1_" d="M15.8,90.4c-0.1-0.4,0-0.9,0.2-1.3l0.2-0.5l0,0c0.1-0.2,0.3-0.2,0.4-0.2l0.5,0.2
                        c0.7,0.3,1.3,1,1.4,1.8c0.7-0.5,1.5-0.6,2.3-0.2l0.5,0.2l0,0c0.2,0.1,0.2,0.3,0.2,0.4l-0.2,0.5c-0.2,0.4-0.5,0.7-0.8,1
                        c-0.7-0.6-1.6-1-2.2-1.2C17.6,90.9,16.7,90.5,15.8,90.4z" />
                                    <path class="socks-path" id="Path_4458_1_" d="M20.2,93.2c-0.7-0.7-1.6-1.1-2.3-1.4c-0.7-0.3-1.6-0.7-2.6-0.8c-1.1-0.1-2.2,0.6-2.5,1.6
                        c-0.7,1.5-0.7,3.2-0.2,4.8c0.4,1.2,1.1,2.3,1.7,2.6c0.6,0.3,1.9,0.1,3.1-0.5c1.5-0.7,2.7-1.9,3.3-3.4
                        C21.2,95.1,21,93.9,20.2,93.2z M14.8,93.5c-0.2-0.1-0.3-0.3-0.2-0.4s0.3-0.3,0.4-0.2c0.2,0.1,0.3,0.3,0.2,0.4l0,0l0,0
                        C15.2,93.5,15,93.6,14.8,93.5L14.8,93.5z M15.1,95.6c-0.2-0.1-0.2-0.3-0.2-0.4C15,95,15.2,95,15.3,95c0.2,0.1,0.2,0.3,0.2,0.4
                        l0,0C15.4,95.6,15.2,95.7,15.1,95.6z M15.3,97.7c-0.2-0.1-0.2-0.3-0.2-0.4c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4l0,0
                        C15.7,97.7,15.5,97.8,15.3,97.7L15.3,97.7z M16.8,94.4c-0.2-0.1-0.2-0.3-0.2-0.4c0.1-0.2,0.3-0.2,0.4-0.2
                        c0.2,0.1,0.2,0.3,0.2,0.4l0,0C17.2,94.4,17,94.5,16.8,94.4z M17.1,96.5c-0.2-0.1-0.3-0.3-0.2-0.4s0.3-0.3,0.4-0.2
                        s0.3,0.3,0.2,0.4l0,0C17.4,96.5,17.2,96.6,17.1,96.5z M18.8,95.3c-0.2-0.1-0.2-0.3-0.2-0.4s0.3-0.2,0.4-0.2
                        c0.2,0.1,0.2,0.3,0.2,0.4l0,0C19.2,95.3,19,95.3,18.8,95.3L18.8,95.3L18.8,95.3L18.8,95.3z" />
                                </g>
                            </g>
                            <g id="圖層_2_4_">
                                <g id="圖層_1-2_3_">
                                    <path class="socks-path" d="M62.8,55.7c0.5,0.2,1.1,0.5,1.6,0.8c-0.3-0.6-0.5-1.2-0.7-1.8c-0.2,0.1-0.4,0.2-0.6,0.3c-0.1-0.8-0.6-1.5-1.4-1.8
                        L61.3,53c-0.2-0.1-0.4,0-0.4,0.2l-0.2,0.5c-0.2,0.4-0.2,0.8-0.2,1.3C61.3,55,62.2,55.4,62.8,55.7z" />
                                    <path class="socks-path" d="M63.2,63.4c1.3-1.7,2-3.6,1.6-5.7c-0.7-0.6-1.6-1-2.2-1.3c-0.7-0.3-1.6-0.7-2.6-0.8c-1.1-0.1-2.2,0.6-2.5,1.6
                        c-0.7,1.5-0.7,3.2-0.2,4.8c0.4,1.2,1.1,2.3,1.7,2.6c0.6,0.3,1.9,0.1,3.1-0.5C62.5,63.9,62.9,63.6,63.2,63.4z M63.2,59.3
                        c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4c-0.1,0.2-0.3,0.2-0.4,0.2l0,0C63.2,59.7,63.2,59.5,63.2,59.3z M59.4,58
                        c-0.2-0.1-0.3-0.3-0.2-0.4c0.1-0.2,0.3-0.3,0.4-0.2s0.3,0.3,0.2,0.4l0,0C59.8,58,59.6,58.1,59.4,58L59.4,58z M59.5,59.7
                        c0.1-0.2,0.3-0.2,0.4-0.2s0.2,0.3,0.2,0.4l0,0c-0.1,0.2-0.3,0.2-0.4,0.2C59.5,60.1,59.5,59.9,59.5,59.7z M60.4,62.1L60.4,62.1
                        c-0.1,0.2-0.3,0.2-0.4,0.2l0,0c-0.2-0.1-0.2-0.3-0.2-0.4s0.3-0.2,0.4-0.2S60.5,61.9,60.4,62.1z M61.3,58.5
                        c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4c-0.1,0.2-0.3,0.2-0.4,0.2C61.3,58.8,61.2,58.6,61.3,58.5z M61.7,61
                        c-0.2-0.1-0.3-0.3-0.2-0.4c0.1-0.2,0.3-0.3,0.4-0.2c0.2,0.1,0.3,0.3,0.2,0.4l0,0C62.1,61,61.9,61.1,61.7,61z" />
                                </g>
                            </g>
                            <g id="圖層_2_5_">
                                <g id="圖層_1-2_5_">
                                    <path class="socks-path" id="Path_4457_3_" d="M32.2,29.8c-0.1-0.4,0-0.9,0.2-1.3l0.2-0.5l0,0c0.1-0.2,0.3-0.2,0.4-0.2l0.5,0.2
                        c0.7,0.3,1.3,1,1.4,1.8c0.7-0.5,1.5-0.6,2.3-0.2l0.5,0.2l0,0c0.2,0.1,0.2,0.3,0.2,0.4l-0.2,0.5c-0.2,0.4-0.5,0.7-0.8,1
                        c-0.7-0.6-1.6-1-2.2-1.2C34,30.3,33.2,29.9,32.2,29.8z" />
                                    <path class="socks-path" d="M36.7,32.5c-0.7-0.7-1.6-1.1-2.3-1.4s-1.6-0.7-2.6-0.8c-0.4,0-0.7,0-1,0.1c0,1.1,0.1,2.2,0.2,3.3
                        c0.2,0.5,0.3,1.1,0.2,1.7c0,0.2-0.1,0.3-0.1,0.5c0.1,1.1,0.1,2.3,0,3.4c0.7,0.1,1.7-0.1,2.7-0.6c1.5-0.7,2.7-1.9,3.3-3.4
                        C37.7,34.5,37.5,33.3,36.7,32.5z M31.3,32.9c-0.2-0.1-0.3-0.3-0.2-0.4c0.1-0.2,0.3-0.3,0.4-0.2c0.2,0.1,0.3,0.3,0.2,0.4l0,0
                        C31.6,32.9,31.4,33,31.3,32.9L31.3,32.9z M31.3,34.5c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4l0,0
                        c-0.1,0.2-0.3,0.2-0.4,0.2C31.3,34.9,31.3,34.7,31.3,34.5z M32.2,36.9L32.2,36.9c-0.1,0.2-0.3,0.2-0.4,0.2l0,0
                        c-0.2-0.1-0.2-0.3-0.2-0.4s0.3-0.2,0.4-0.2C32.2,36.5,32.3,36.7,32.2,36.9z M33.1,33.3c0.1-0.2,0.3-0.2,0.4-0.2
                        c0.2,0.1,0.2,0.3,0.2,0.4c-0.1,0.2-0.3,0.2-0.4,0.2C33.1,33.7,33,33.5,33.1,33.3z M34,35.7L34,35.7c-0.1,0.2-0.3,0.3-0.4,0.2
                        c-0.2-0.1-0.3-0.3-0.2-0.4c0.1-0.2,0.3-0.3,0.4-0.2C34,35.3,34,35.5,34,35.7z M35.7,34.5c-0.1,0.2-0.3,0.2-0.4,0.2l0,0
                        c-0.2-0.1-0.2-0.3-0.2-0.4s0.3-0.2,0.4-0.2C35.7,34.1,35.8,34.3,35.7,34.5z" />
                                </g>
                            </g>
                            <g id="圖層_2_6_">
                                <g id="圖層_1-2_11_">
                                    <path class="socks-path" id="Path_4457_7_" d="M50.2,39.1c-0.1-0.4,0-0.9,0.2-1.3l0.2-0.5l0,0c0.1-0.2,0.3-0.2,0.4-0.2l0.5,0.2
                        c0.7,0.3,1.3,1,1.4,1.8c0.7-0.5,1.5-0.6,2.3-0.2l0.5,0.2l0,0c0.2,0.1,0.2,0.3,0.2,0.4L55.7,40c-0.2,0.4-0.5,0.7-0.8,1
                        c-0.7-0.6-1.6-1-2.2-1.2C52,39.6,51.1,39.2,50.2,39.1z" />
                                    <path class="socks-path" id="Path_4458_4_" d="M54.7,41.8c-0.7-0.7-1.6-1.1-2.3-1.4c-0.7-0.3-1.6-0.7-2.6-0.8c-1.1-0.1-2.2,0.6-2.5,1.6
                        c-0.7,1.5-0.7,3.2-0.2,4.8c0.4,1.2,1.1,2.3,1.7,2.6c0.6,0.3,1.9,0.1,3.1-0.5c1.5-0.7,2.7-1.9,3.3-3.4
                        C55.7,43.8,55.5,42.6,54.7,41.8z M49.2,42.2c-0.2-0.1-0.3-0.3-0.2-0.4c0.1-0.2,0.3-0.3,0.4-0.2c0.2,0.1,0.3,0.3,0.2,0.4l0,0l0,0
                        C49.6,42.2,49.4,42.3,49.2,42.2L49.2,42.2z M49.5,44.3c-0.2-0.1-0.2-0.3-0.2-0.4c0.1-0.2,0.3-0.2,0.4-0.2
                        c0.2,0.1,0.2,0.3,0.2,0.4l0,0C49.9,44.3,49.7,44.4,49.5,44.3z M49.8,46.4c-0.2-0.1-0.2-0.3-0.2-0.4s0.3-0.2,0.4-0.2
                        c0.2,0.1,0.2,0.3,0.2,0.4l0,0C50.1,46.4,49.9,46.4,49.8,46.4L49.8,46.4z M51.2,43.1C51,43,51,42.8,51,42.7
                        c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4l0,0C51.6,43.1,51.4,43.1,51.2,43.1z M51.5,45.2c-0.2-0.1-0.3-0.3-0.2-0.4
                        s0.3-0.3,0.4-0.2s0.3,0.3,0.2,0.4l0,0C51.9,45.1,51.7,45.2,51.5,45.2z M53.2,43.9c-0.2,0-0.2-0.2-0.2-0.4
                        c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4l0,0C53.6,43.9,53.4,44,53.2,43.9L53.2,43.9L53.2,43.9L53.2,43.9z" />
                                </g>
                            </g>
                            <g id="圖層_2_12_">
                                <g id="圖層_1-2_12_">
                                    <path class="socks-path" id="Path_4457_8_" d="M56.8,14.7c-0.1-0.4,0-0.9,0.2-1.3l0.2-0.5l0,0c0.1-0.2,0.3-0.2,0.4-0.2l0.5,0.2
                        c0.7,0.3,1.3,1,1.4,1.8c0.7-0.5,1.5-0.6,2.3-0.2l0.5,0.2l0,0c0.2,0.1,0.2,0.3,0.2,0.4l-0.2,0.5c-0.2,0.4-0.5,0.7-0.8,1
                        c-0.7-0.6-1.6-1-2.2-1.2S57.7,14.8,56.8,14.7z" />
                                    <path class="socks-path" id="Path_4458_5_" d="M61.3,17.4c-0.7-0.7-1.6-1.1-2.3-1.4c-0.7-0.3-1.6-0.7-2.6-0.8c-1.1-0.1-2.2,0.6-2.5,1.6
                        c-0.7,1.5-0.7,3.2-0.2,4.8c0.4,1.2,1.1,2.3,1.7,2.6c0.6,0.3,1.9,0.1,3.1-0.5c1.5-0.7,2.7-1.9,3.3-3.4
                        C62.3,19.4,62.1,18.2,61.3,17.4z M55.8,17.8c-0.2-0.1-0.3-0.3-0.2-0.4c0.1-0.2,0.3-0.3,0.4-0.2c0.2,0.1,0.3,0.3,0.2,0.4l0,0l0,0
                        C56.2,17.8,56,17.9,55.8,17.8L55.8,17.8z M56.1,19.9c-0.2-0.1-0.2-0.3-0.2-0.4c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4
                        l0,0C56.5,19.9,56.3,20,56.1,19.9z M56.4,22c-0.2-0.1-0.2-0.3-0.2-0.4c0.1-0.2,0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4l0,0
                        C56.7,22,56.5,22.1,56.4,22L56.4,22z M57.8,18.7c-0.2-0.1-0.2-0.3-0.2-0.4s0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4l0,0
                        C58.2,18.7,58,18.7,57.8,18.7z M58.1,20.8c-0.2-0.1-0.3-0.3-0.2-0.4s0.3-0.3,0.4-0.2c0.2,0.1,0.3,0.3,0.2,0.4l0,0
                        C58.5,20.8,58.3,20.8,58.1,20.8z M59.8,19.5c-0.2-0.1-0.2-0.3-0.2-0.4s0.3-0.2,0.4-0.2c0.2,0.1,0.2,0.3,0.2,0.4l0,0
                        C60.2,19.5,60,19.6,59.8,19.5L59.8,19.5L59.8,19.5L59.8,19.5z" />
                                </g>
                            </g>
                            <g id="圖層_2_13_">
                                <g id="圖層_1-2_13_">
                                    <path class="socks-path" id="Path_4457_9_" d="M36.2,7.4c-0.1-0.4,0-0.9,0.2-1.3l0.2-0.5l0,0c0.1-0.2,0.3-0.2,0.4-0.2l0.5,0.2c0.7,0.3,1.3,1,1.4,1.8
                        c0.7-0.5,1.5-0.6,2.3-0.2l0.5,0.2l0,0c0.2,0.1,0.2,0.3,0.2,0.4l-0.2,0.5c-0.2,0.4-0.5,0.7-0.8,1c-0.7-0.6-1.6-1-2.2-1.2
                        C37.9,7.9,37.1,7.5,36.2,7.4z" />
                                    <path class="socks-path" id="Path_4458_11_" d="M40.6,10.2c-0.7-0.7-1.6-1.1-2.3-1.4c-0.7-0.3-1.6-0.7-2.6-0.8c-1.1-0.1-2.2,0.6-2.5,1.6
                        c-0.7,1.5-0.7,3.2-0.2,4.8c0.4,1.2,1.1,2.3,1.7,2.6c0.6,0.3,1.9,0.1,3.1-0.5c1.5-0.7,2.7-1.9,3.3-3.4
                        C41.6,12.1,41.4,10.9,40.6,10.2z M35.2,10.5c-0.2-0.1-0.3-0.3-0.2-0.4c0.1-0.2,0.3-0.3,0.4-0.2c0.2,0.1,0.3,0.3,0.2,0.4l0,0l0,0
                        C35.6,10.5,35.4,10.6,35.2,10.5L35.2,10.5z M35.4,12.6c-0.2-0.1-0.2-0.3-0.2-0.4c0.1-0.2,0.3-0.2,0.4-0.2
                        c0.2,0.1,0.2,0.3,0.2,0.4l0,0C35.8,12.6,35.6,12.7,35.4,12.6z M35.7,14.7c-0.2-0.1-0.2-0.3-0.2-0.4s0.3-0.2,0.4-0.2
                        s0.2,0.3,0.2,0.4l0,0C36.1,14.7,35.9,14.8,35.7,14.7L35.7,14.7z M37.2,11.4C37,11.3,37,11.1,37,11c0.1-0.2,0.3-0.2,0.4-0.2
                        c0.2,0.1,0.2,0.3,0.2,0.4l0,0C37.5,11.4,37.3,11.5,37.2,11.4z M37.4,13.5c-0.2-0.1-0.3-0.3-0.2-0.4s0.3-0.3,0.4-0.2
                        c0.2,0.1,0.3,0.3,0.2,0.4l0,0C37.8,13.5,37.6,13.6,37.4,13.5z M39.2,12.3C39,12.2,38.9,12,39,11.8s0.3-0.2,0.4-0.2
                        c0.2,0.1,0.2,0.3,0.2,0.4l0,0C39.5,12.3,39.3,12.3,39.2,12.3L39.2,12.3L39.2,12.3L39.2,12.3z" />
                                </g>
                            </g>
                            <g id="圖層_2_14_">
                                <g id="圖層_1-2_14_">
                                    <path class="socks-path" d="M55.5,2.7L55.5,2.7L55.5,2.7C55.4,3,55.2,3,55,3l0,0c-0.2-0.1-0.2-0.2-0.2-0.4c-1-0.2-1.9-0.4-2.8-0.7
                        c0.1,0.3,0.1,0.6,0.2,0.9C52.6,4,53.3,5,54,5.3s1.9,0.1,3.1-0.5c0.9-0.4,1.6-1,2.2-1.7C58,3.1,56.7,2.9,55.5,2.7z" />
                                </g>
                            </g>
                            <g id="圖層_2_81_">
                                <g id="圖層_1-2_80_">
                                    <path class="socks-path" id="Path_4457_28_" d="M34.5,58c-0.1-0.4,0-0.9,0.2-1.3l0.2-0.5l0,0C35,56,35.2,56,35.3,56l0.5,0.2c0.7,0.3,1.3,1,1.4,1.8
                        c0.7-0.5,1.5-0.6,2.3-0.2L40,58l0,0c0.2,0.1,0.2,0.3,0.2,0.4L39.9,59c-0.2,0.4-0.5,0.7-0.8,1c-0.7-0.6-1.6-1-2.2-1.2
                        C36.3,58.5,35.4,58.1,34.5,58z" />
                                    <path class="socks-path" id="Path_4458_47_" d="M38.9,60.8c-0.7-0.7-1.6-1.1-2.3-1.4c-0.7-0.3-1.6-0.7-2.6-0.8c-1.1-0.1-2.2,0.6-2.5,1.6
                        c-0.7,1.5-0.7,3.2-0.2,4.8c0.4,1.2,1.1,2.3,1.7,2.6c0.6,0.3,1.9,0.1,3.1-0.5c1.5-0.7,2.7-1.9,3.3-3.4
                        C40,62.8,39.8,61.5,38.9,60.8z M33.5,61.1c-0.2-0.1-0.3-0.3-0.2-0.4c0.1-0.2,0.3-0.3,0.4-0.2C34,60.6,34,60.8,34,61l0,0l0,0
                        C33.9,61.1,33.7,61.2,33.5,61.1L33.5,61.1z M33.8,63.2c-0.2-0.1-0.2-0.3-0.2-0.4c0.1-0.2,0.3-0.2,0.4-0.2
                        c0.2,0.1,0.2,0.3,0.2,0.4l0,0C34.2,63.2,34,63.3,33.8,63.2z M34.1,65.3c-0.2-0.1-0.2-0.3-0.2-0.4s0.3-0.2,0.4-0.2
                        c0.2,0.1,0.2,0.3,0.2,0.4l0,0C34.4,65.3,34.2,65.4,34.1,65.3L34.1,65.3z M35.5,62c-0.2-0.1-0.2-0.3-0.2-0.4s0.3-0.2,0.4-0.2
                        c0.2,0.1,0.2,0.3,0.2,0.4l0,0C35.9,62,35.7,62.1,35.5,62z M35.8,64.1c-0.2-0.1-0.3-0.3-0.2-0.4s0.3-0.3,0.4-0.2
                        c0.2,0.1,0.3,0.3,0.2,0.4l0,0C36.2,64.1,36,64.2,35.8,64.1z M37.5,62.9c-0.2-0.1-0.2-0.3-0.2-0.4c0.1-0.2,0.3-0.2,0.4-0.2
                        c0.2,0.1,0.2,0.3,0.2,0.4l0,0C37.9,62.9,37.7,63,37.5,62.9L37.5,62.9L37.5,62.9L37.5,62.9z" />
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
                                <div class="img-pattern-area" id="pattern-watz">
                                    <img src="images/pattern-watz.svg" alt="">
                                </div>
                                <div class="img-pattern-area" id="pattern-stripe">
                                    <img src="images/pattern-stripe.svg" alt="">
                                </div>
                                <div class="img-pattern-area" id="pattern-dotted">
                                    <img src="images/pattern-dotted.svg" alt="">
                                </div>
                                <div class="img-pattern-area" id="pattern-cherry">
                                    <img src="images/pattern-cherry.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="pattern mobile-none pattern2">
                            <h3></h3>
                            <div class=" img-pattern flex">
                                <div class="img-pattern-area" id="pattern-icecream">
                                    <img src="images/pattern-icecream.svg" alt="">
                                </div>
                                <div class="img-pattern-area" id="pattern-rhombus">
                                    <img src="images/pattern-rhombus.svg" alt="">
                                </div>
                                <div class="img-pattern-area" id="pattern-pizza">
                                    <img src="images/pattern-pizza.svg" alt="">
                                </div>
                                <div class="img-pattern-area" id="pattern-strawberry">
                                    <img src="images/pattern-strawberry.svg" alt="">
                                </div>
                            </div>
                        </div>
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
                                <div class="color color-bottom" id="b8">
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
            if ($(window).width() > 992) {
                $(".spot").css("display", "flex")
                $(".spot").css("clip-path", `circle(140px at ${e.pageX}px ${e.pageY - 30}px`)
            }
        })
    };


    // anchor point
    $(".go-next").click(function() {
        let nextPosition = $(".block-bottom").offset().top;
        $("html").animate({
            scrollTop: nextPosition
        })
        openTutorial();
    })

    // 點了pattern shapecolor自動滑出
    $('.img-pattern').click(function() {
        $(".shape-color").addClass("transition")
        $(".shape-color").addClass("move-left")
    })

    // shape-color move left
    $(".color-active").click(function(event) {
        $(".shape-color").addClass("transition")
        $(".shape-color").toggleClass("move-left")
    })



    // 打開使用說明
    $(".tutorial").click(function() {
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


    let currentImage = '';
    let currentColor = '';

    // 預設襪子花紋
    const defaultCustom = {
        "bottomColor": "#FFFFFF",
        "pattern": "pattern-watz",
        "patternColor": "#404040"
    };
    let customStyle = Object.assign({}, defaultCustom);

    // 若是localStorage出錯 則回復為空值
    try {
        customStyle = localStorage.getItem('customStyle') ?
            JSON.parse(localStorage.getItem('customStyle')) : Object.assign({}, defaultCustom)
    } catch (err) {
        customStyle = Object.assign({}, defaultCustom);
    }

    // 返回修改
    $('svg .socks-color').css('fill', customStyle["bottomColor"]);
    $('svg .socks-path').css('fill', customStyle["patternColor"]);
    $('svg .stroke-width').css('stroke', customStyle["patternColor"]);

    let currentID = customStyle["pattern"]

    $(`#${currentID}`).addClass("appear");
    $(`#${currentID}`).siblings().removeClass("appear");


    //DIY change Pattern
    $(".img-pattern-area").click(function(event) {

        const currentTargetId = event.currentTarget.id;

        $(`.diy-area#${currentTargetId}`).addClass("appear")
        $(`.diy-area#${currentTargetId}`).siblings().removeClass("appear")

        currentImage = currentTargetId;
        $('.socks-path').css("fill", currentColor);
        $(".stroke-width").css({
            "fill": currentColor,
            "stroke": currentColor
        })
        customStyle.pattern = currentTargetId;
        storeLocal()
    })


    //change socks color
    $(".color-top").click(function() {
        let color = $(this).css("background-color")
        $(".socks-color").css("fill", color)
        customStyle.bottomColor = color;
        storeLocal()
    })

    //change shape color
    $(".color-bottom").click(function() {
        let shapecolor = $(this).css("background-color")
        currentColor = shapecolor;

        if (currentImage === 'pattern-stripe') {
            $(".stroke-width").css({
                "fill": shapecolor,
                "stroke": shapecolor
            })
        } else {
            $(".socks-path").css({
                "fill": shapecolor,
            })
        }
        customStyle.patternColor = shapecolor;
        storeLocal()
    })

    // localstorage 轉為JSON字串
    function storeLocal() {
        localStorage.setItem('customStyle', JSON.stringify(customStyle));
    }

    // clear btn
    $('.btn-clear').click(function() {
        if (currentImage === 'pattern-stripe') {
            $(".stroke-width").css({
                "fill": "none",
                "stroke": "#404040"
            })
            $(".socks-color").css({
                "fill": "#FFFFFF",
                "stroke": "#404040"
            })
            currentColor = "#404040";
            customStyle.bottomColor = "#FFFFFF";
            customStyle.pattern = 'pattern-stripe';
            customStyle.patternColor = "#404040";
            storeLocal()
        } else {
            $(".socks-path").css({
                "fill": "#404040",
            })
            $(".socks-color").css({
                "fill": "#FFFFFF",
                "stroke": "#404040"
            })
            currentColor = "#404040";
            customStyle.bottomColor = "#FFFFFF";
            customStyle.patternColor = "#404040";
            storeLocal()
        }
    })

    //finish btn
    $('.btn-finish').click(function() {
        location.href = '<?= WEB_ROOT ?>/DIY-finished.php';
    })
</script>

<?php require __DIR__ . '/__html_foot.php' ?>