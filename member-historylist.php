<?php require __DIR__ . '/__connect_db.php';
$pageName = 'member-historylist';  // 這裡放你的pagename
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
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .wrapper ul li h5 {
            font-weight: 400;
        }

        .bg-orderpage {

            width: 1200px;
            align-items: center;
            justify-content: space-between;
        }

        .order-title {
            flex-direction: column;
        }

        .order h4 {
            display: none;
        }

        .title {
            width: 937px;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 20px;
        }
        .title h4{
            margin-right: 50px;
        }
        .box2 {
            width: 133px;
        }

        .order {
            justify-content: flex-start;
            align-items: center;
            background: #ffffff;
            width: 937px;
            height: 65px;
            margin-bottom: 10px;
        }
        .order-block{
            width: 50vw;
        }
        .order-block h5{
            margin-right: 50px;
        }
        .selector {
            width: 120px;
            flex-direction: column;
            justify-content: flex-start;
            margin-right: 20%;
        }

        .box {
            width: 120px;
            height: 70px;
            justify-content: flex-start;

        }

        .selector a {
            padding: 10px;
            margin-bottom: 10px;
            border-bottom: 4px solid transparent;
            transition: .2s;

        }

        .selector a:hover {
            border-bottom: 4px solid #FF9685;
        }

        .btn-coral {
            width: 130px;
            height: 45px;
            
        }
        .btn-coral:hover{
            background: #F2DE79;
            color: #707070;
        }
        .btn-blue.gray {
            width: 130px;
            background: #707070;
            margin-left: 20px;
        }
        .btn-blue.gray:hover{
            background: #03588C;
        }
        .btn{
            width: 600px;
            justify-content: space-evenly;
        }
        ul h4,
        ul h5 {
            display: inline-block;
            width: 100px;
            text-align: center;
        }

        @media screen and (max-width: 992px) {
            body {
                background-image: url(images/BG-mobile2.svg);
                background-position: center;
            }

            .wrapper {
                height: 150vh;
                width: 100%;
            }

            .bg-orderpage {
                flex-direction: column;
            }

            .title {
                display: none;
            }
            .order-block{
                width: 280px;
                flex-direction: column;
                justify-content: flex-start;
            }
            .between{
                justify-content: flex-start;
            }
            .order h4 {
                display: block;
                align-items: flex-start;
            }

            .order {
                flex-direction: column;
                width: 325px;
                height: 210px;
                border-radius: 15px;
                justify-content: space-evenly;
                margin-bottom: 30px;
            }
            .btn{
                width: 280px;
                justify-content: space-between;
            }
            .btn-coral {
                width: 130px;
                height: 40px;
            }
            
            .btn-blue.gray {
                width: 130px;
                height: 40px;

            }

            .selector {
                width: 94vw;
                flex-direction: row;
                justify-content: center;
                margin-top: 20px;
                margin-right: 0;
            }

            .box {
                width: 30vw;
                height: 10vw;
                line-height: 30px;
                text-align: center;
                margin-top: 15px;
            }

            .selector a {
                white-space: nowrap;
            }
            ul h4,ul h5{
                text-align: unset;
            }
        }
</style>

<div class="container flex">
    <!-- 如果container有其它class要自己加上 -->

    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <div class="wrapper flex">
            <div class="bg-orderpage flex">
                <div class="flex">
                    <div class="selector flex">
                        <div class="box"><a href="<?= WEB_ROOT ?>/member-profile.php">會員資料</a></div>
                        <div class="box"><a href="<?= WEB_ROOT ?>/member-historylist.php">訂單紀錄</a></div>
                        <div class="box"><a href="<?= WEB_ROOT ?>/member-historylist.php">會員條款</a></div>
                        <div class="box"><a href="<?= WEB_ROOT ?>/member-historylist.php">隱私權政策</a></div>
                    </div>
                </div>
                <div class="flex">
                    <ul class="order-title flex">
                        <li class="title flex">
                            <h4>訂單編號</h4>
                            <h4>訂購時間</h4>
                            <h4>訂購金額</h4>
                            <h4>出貨狀態</h4>
                            <div class="box2"></div>
                            <div class="box2"></div>
                        </li>

                        <li class="order flex">
                            <div class="order-block flex">
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂單編號</h4></div>
                                    <div class=" flex"><h5>20200730</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂購時間</h4></div>
                                    <div class="flex"><h5>2020/07/30</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂購金額</h4></div>
                                    <div class="flex"><h5>2,200</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">出貨狀態</h4></div>
                                    <div class="flex"><h5>待出貨</h5></div>
                                </div>
                            </div>
                            <div class="btn flex">
                                <button class="btn-coral">詳細訂單</button>
                                <button class="btn-blue gray">退貨申請</button>
                            </div>
                        </li>
                        <li class="order flex">
                            <div class="order-block flex">
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂單編號</h4></div>
                                    <div class="flex"><h5>20200730</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂購時間</h4></div>
                                    <div class="flex"><h5>2020/07/30</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂購金額</h4></div>
                                    <div class="flex"><h5>2,200</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">出貨狀態</h4></div>
                                    <div class="flex"><h5>待出貨</h5></div>
                                </div>
                            </div>
                            <div class="btn flex">
                                <button class="btn-coral">詳細訂單</button>
                                <button class="btn-blue gray">退貨申請</button>
                            </div>
                        </li>
                        <li class="order flex">
                            <div class="order-block flex">
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂單編號</h4></div>
                                    <div class="flex"><h5>20200730</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂購時間</h4></div>
                                    <div class="flex"><h5>2020/07/30</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂購金額</h4></div>
                                    <div class="flex"><h5>2,200</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">出貨狀態</h4></div>
                                    <div class="flex"><h5>待出貨</h5></div>
                                </div>
                            </div>
                            <div class="btn flex">
                                <button class="btn-coral">詳細訂單</button>
                                <button class="btn-blue gray">退貨申請</button>
                            </div>
                        </li>
                        <li class="order flex">
                            <div class="order-block flex">
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂單編號</h4></div>
                                    <div class="flex"><h5>20200730</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂購時間</h4></div>
                                    <div class="flex"><h5>2020/07/30</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂購金額</h4></div>
                                    <div class="flex"><h5>2,200</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">出貨狀態</h4></div>
                                    <div class="flex"><h5>待出貨</h5></div>
                                </div>
                            </div>
                            <div class="btn flex">
                                <button class="btn-coral">詳細訂單</button>
                                <button class="btn-blue gray">退貨申請</button>
                            </div>
                        </li>
                        <li class="order flex">
                            <div class="order-block flex">
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂單編號</h4></div>
                                    <div class="flex"><h5>20200730</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂購時間</h4></div>
                                    <div class="flex"><h5>2020/07/30</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂購金額</h4></div>
                                    <div class="flex"><h5>2,200</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">出貨狀態</h4></div>
                                    <div class="flex"><h5>待出貨</h5></div>
                                </div>
                            </div>
                            <div class="btn flex">
                                <button class="btn-coral">詳細訂單</button>
                                <button class="btn-blue gray">退貨申請</button>
                            </div>
                        </li>
                        <li class="order flex">
                            <div class="order-block flex">
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂單編號</h4></div>
                                    <div class="flex"><h5>20200730</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂購時間</h4></div>
                                    <div class="flex"><h5>2020/07/30</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">訂購金額</h4></div>
                                    <div class="flex"><h5>2,200</h5></div>
                                </div>
                                <div class="between flex">
                                    <div class="flex"><h4 class="flex">出貨狀態</h4></div>
                                    <div class="flex"><h5>待出貨</h5></div>
                                </div>
                            </div>
                            <div class="btn flex">
                                <button class="btn-coral">詳細訂單</button>
                                <button class="btn-blue gray">退貨申請</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    <?php include __DIR__ . '/__html_footer.php' ?>
</div>
<?php include __DIR__ . '/__scripts.php' ?>

<script>
    // 這邊放你自己寫的JS
</script>

<?php require __DIR__ . '/__html_foot.php' ?>