<?php require __DIR__ . '/__connect_db.php';
$pageName = 'member-login-signup';  // 這裡放你的pagename
?>
<?php include __DIR__ . '/__html_head.php' ?>

<!-- 自己另外的CSS插件 <link> 請放這邊 (nav.css及google fonts共用的不用放) -->

<style>
    body {
        width: 100vw;
        background-image: url(images/BG2.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .wrapper {
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin-bottom: 80px;
        position: relative;
    }

    .member-bblock {
        top: calc(50vh + 70px);
        transform: translateY(-50%);
        width: 465px;
        height: 545px;
        position: absolute;
    }

    .bsignup {
        width: 400px;
        height: 545px;
        position: absolute;
    }

    .member-bblock li {
        width: 400px;
        height: 545px;
        position: absolute;
    }

    .tag {
        position: absolute;
        background: #F2DE79;
        border-radius: 15px;
        width: 70px;
        height: 140px;
        right: -65px;
        top: 50%;
        transform: translate(0, -50%);
        /* z-index: -1; */
        cursor: pointer;
    }

    .tag h5 {
        writing-mode: vertical-lr;
        letter-spacing: 3px;
        font-weight: 400;
        position: absolute;
        right: 15%;
        top: 50%;
        transform: translate(-12%, -50%);
        cursor: pointer;

    }

    .tag-signup {
        top: 90%;
        transform: translate(0, -90%);
        background: #0388A6;
        cursor: pointer;

    }

    .tag-signup h5 {
        color: #ffffff;
        cursor: pointer;

    }

    .member-login {
        background: #F2DE79;
        width: 420px;
        height: 545px;
        border-radius: 15px;
        align-items: center;
        flex-direction: column;
        position: relative;

    }

    .member-login.signup {
        background: #0388A6;
        position: absolute;
    }

    @media screen and (max-width: 992px) {
        body {
            background-image: url(images/BG-mobile2.svg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .wrapper {
            width: 100%;
        }

        .member-bblock {
            width: 85vw;
            height: 103vw;
        }

        .bsignup {
            position: absolute;
            width: 80vw;
            height: 103vw;
        }

        .member-bblock li {
            width: 80vw;
            height: 103vw;

        }

        .member-login {
            width: 80vw;
            height: 103vw;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }

        .tag {
            width: 20vw;
            height: 25vw;
            border-radius: 10px;
            right: -6vw;
        }

        .tag h5 {
            font-size: 12px;
            right: 8%;
            top: 40%;
            transform: translate(-10%, -23%);
        }
    }

    /* ---------------------------------form--------------------------------------- */
    .member-login h2 {
        font-family: 'Fredoka One', cursive;
        text-align: center;
        margin-top: 70px;
        margin-bottom: 70px;
        /* padding: 72px; */
        letter-spacing: 4px;
        /* margin-bottom: 2px; */
        color: #404040;
    }

    .member-login.signup h2 {
        color: #ffffff;
    }

    @media screen and (max-width: 992px) {
        .member-login h2 {
            font-size: 32px;
            /* padding: 40px; */
            margin-top: 40px;
            margin-bottom: 40px;
        }
    }

    /* ---------------------------------text---------------------------------------- */
    .bg-inputwrapper {
        flex-direction: column;
        justify-content: space-evenly;
    }

    .input-wrapper {
        background: #ffffff;
        width: 292px;
        height: 45px;
        border-radius: 2px;
        justify-content: flex-start;
        align-items: center;
        margin-bottom: 20px;
    }

    .member-login img {
        width: 24px;
        height: 24px;
        margin: 11px 16px;
    }

    .member-input {
        border: transparent;
        outline: none;
        width: 292px;
        height: 45px;
    }

    @media screen and (max-width: 992px) {
        .member-input {
            width: 70vw;
            height: 8vw;
            font-size: 16px;
        }

        .bg-inputwrapper {
            flex-direction: column;
            justify-content: space-evenly;
            height: 32vw;
        }

        .input-wrapper {
            width: 60vw;
            height: 9vw;
            margin-bottom: 15px;
        }

        .input-wrapper img {
            width: 3vw;
            height: 4vw;
            margin: 6px 12px;
            /* margin: 6px 12px 6px 7px; */
        }
    }

    /* ------------------------------------input---------------------------------------- */
    .remember {
        margin: 20px 0 20px 0;
        width: 292px;
        height: 45px;
        justify-content: space-between;
        align-items: center;
    }

    .agree {
        width: 292px;
        height: 45px;
        justify-content: center;
        align-items: center;

    }

    .agree h6 {
        color: #ffffff;
        letter-spacing: 2px;
        align-items: center;
    }

    .member-login.signup a {
        color: #F2DE79;
        font-size: 12px;
        letter-spacing: 2px;
    }

    .member-checkbox {
        margin: 0px 10px 0px 0px;
    }

    .member-remember h6 {
        color: #404040;
        font-weight: 400;
        letter-spacing: 1px;
    }

    .member-forget {
        width: 100px;
        text-align: right;
    }

    .member-forget a {
        color: #0388A6;
        font-size: 12px;
        cursor: pointer;
        letter-spacing: 3px;

    }

    .member-remember {
        justify-content: flex-start;
        align-items: center;
        width: 292px;
        height: 45px;
    }

    @media screen and (max-width: 992px) {
        .remember {
            width: 182px;
            margin: 0;
        }

        .member-forget {
            width: 150px;
        }

        .member-forget a {
            letter-spacing: 1px;
        }

        .agree {
            width: 70vw;
            height: 8vw;
        }
    }

    /* ---------------------------------h6 or a--------------------------------------------------- */
    .btn-login {
        width: 212px;
        height: 45px;
        background: #03588C;
        color: #ffffff;
        letter-spacing: 4px;
        font-size: 14px;
        border: none;
        cursor: pointer;
        border-radius: 2px;
        margin-top: 20px;
    }

    .member-login h5 {
        font-weight: 400;
        letter-spacing: 1px;
        margin-top: 35px;
    }

    .member-login a {
        color: #0388A6;
    }

    .box-signup {
        z-index: 10;
    }



    @media screen and (max-width: 992px) {
        .btn-login {
            width: 150px;
            height: 40px;
            margin-top: 10px;
        }

        .member-login h5 {
            display: none;
        }

        .btn-login a {
            display: none;
        }
    }
</style>

<div class="container flex">
    <!-- 如果container有其它class要自己加上 -->

    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <div class="wrapper flex">
        <ul class="member-bblock">
            <div class="bsignup" id="tab1">
                <li class="box-signup" id="box-signup">
                    <form class="member-login flex signup">
                        <h2>JOIN US</h2>
                        <div class="bg-inputwrapper flex">
                            <div class="input-wrapper flex">
                                <img src="images/icon-account.svg" alt="">
                                <input class="member-input" type="text" placeholder="Email">
                            </div>
                            <div class="input-wrapper flex">
                                <img src="images/icon-password.svg" alt="">
                                <input class="member-input" type="text" placeholder="Password">
                            </div>
                            <div class="input-wrapper flex">
                                <img src="images/icon-confirmPassword.svg" alt="">
                                <input class="member-input" type="text" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="agree flex">
                            <input class="member-checkbox" type="checkbox" name="" id="">
                            <h6>同意</h6><a href="">會員條款</a>
                            <h6>與</h6><a href="">隱私權政策</a>
                        </div>
                        <button class="btn-blue btn-login">註冊會員</button>
                    </form>
                </li>
                <div class="tag tag-signup" id="tag-signup">
                    <h5>註冊帳號</h5>
                </div>
            </div>

            <!------------------------signup------------------------------------------>
            <div class="bsignup blogin" id="tab2">
                <li class="box-login" id="box-login">
                    <form class="member-login flex">
                        <h2>LOG IN</h2>
                        <div class="input-wrapper flex">
                            <img src="images/icon-account.svg" alt="">
                            <input class="member-input" type="text" placeholder="Email">
                        </div>
                        <div class="input-wrapper flex">
                            <img src="images/icon-password.svg" alt="">
                            <input class="member-input" type="text" placeholder="Password">
                        </div>
                        <div class="remember flex">
                            <div class="member-remember flex">
                                <input class="member-checkbox flex" type="checkbox" name="" id="">
                                <h6 class="flex">Remember me</h6>
                            </div>
                            <div class="member-forget">
                                <a href="">忘記密碼</a>
                            </div>
                        </div>
                        <button class="btn-blue btn-login">登入帳號</button>
                        <h5>還不是會員?點這邊
                            <a href="">加入會員!</a>
                        </h5>
                    </form>
                </li>
                <div class="tag tag-login" id="tag-login">
                    <h5>登入會員</h5>
                </div>
            </div>

        </ul>

    </div>

    <?php include __DIR__ . '/__html_footer.php' ?>
</div>
<?php include __DIR__ . '/__scripts.php' ?>

<script>
    $('#tag-login').click(function() {
        $('#box-login').css("z-index", "11");
    })

    $('#tag-signup').click(function() {
        $('#box-login').removeAttr('style');
    })
</script>

<?php require __DIR__ . '/__html_foot.php' ?>