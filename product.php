<?php require __DIR__ . '/__connect_db.php';
$pageName = 'product';  // 這裡放你的pagename



$perPage = 15;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;



$where = " WHERE 1";

$rows = [];
$totalPages = 0;
$t_sql = "SELECT COUNT(1) FROM `product` $where";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];


if ($totalRows > 0) {
    $totalPages = ceil($totalRows / $perPage);
    if ($page < 1) {
        header('Location: product.php');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: product.php?page=' . $totalPages);
        exit;
    }
    if (!empty($_GET['series'])) {
        $where .= sprintf(" AND `series` IN (%s) ", implode(',', $_GET['series']));
    }
    if (!empty($_GET['colors'])) {
        $where .= sprintf(" AND `color` IN (%s) ", implode(',', $_GET['colors']));
    }
    if (!empty($_GET['types'])) {
        $where .= sprintf(" AND `type` IN (%s) ", implode(',', $_GET['types']));
    }

    $sql = sprintf("SELECT * FROM `product` %s LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);

    $rows = $pdo->query($sql)->fetchAll();
}

$stmt = null;
$stmt = $pdo->query($sql);




?>
<?php include __DIR__ . '/__html_head.php' ?>

<!--jquery-plugin-vegas  -->
<link rel="stylesheet" href="css/vegas.min.css">
<!--jquery-plugin-vegas  -->


<style>
    /* -------------- */
    <?php include __DIR__ . '/product-helpcss.php' ?>body {
        background-size: cover;
        background-image: url("images/BG3.svg");
        background-repeat: repeat-y;
        /* overflow-x: hidden; */
        user-select: none;
    }

    .wrapper {
        flex-direction: column;
        margin-top: 50px;
    }

    .cursor {
        cursor: pointer;
    }

    footer {
        margin-top: 10vh;
    }

    /* ---------商品頁幫我搭Btn---------- */
    .product-help-btn {
        height: 85px;
        width: 85px;
        position: fixed;
        right: 2.9vw;
        top: 55vh;
        z-index: 21;
        background-color: #FF9685;
        border: white 3px solid;
        border-radius: 50%;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.5s;
        filter: drop-shadow(2px 2px 2px rgba(124, 124, 124, 0.637));
    }

    .product-help-btn:hover {
        background-color: #0388A6;
    }

    .product-help-btn img {
        width: 30px;
        height: 30px;
        filter: drop-shadow(3px 3px 0px rgba(70, 70, 70, 0.5));
    }

    .product-help-btn h3 {
        color: white;
        font-size: 0.6rem;
        filter: drop-shadow(2px 2px 0px rgba(124, 124, 124, 0.637));
    }

    @media screen and (max-width: 576px) {
        .product-help-btn {
            height: 60px;
            width: 60px;
            right: 3.1vw;
            top: 60vh;
            border: white 1px solid;
        }

        .product-help-btn img {
            width: 20px;
            height: 20px;
            filter: drop-shadow(2px 2px 0px rgba(70, 70, 70, 0.5));
        }

        .product-help-btn h3 {
            filter: drop-shadow(0px 0px 0px rgba(124, 124, 124, 0.637));

        }


    }

    /* -------vegas--------- */
    .vegas-box {
        width: 100vw;
        height: 500px;
        z-index: -1;
    }



    .block {
        min-height: 70vh;
        flex-direction: row;
        align-items: space-around;
        justify-content: space-between;
    }

    .selector,
    .block-right-bg {
        background: white;
        border-radius: 15px;
    }



    /* ---------------------- selector   ------------------------- */
    .selector {
        width: 300px;
        height: 860px;
        flex-direction: column;
        justify-content: space-evenly;
    }

    .form1 {
        flex-direction: column;
        justify-content: space-evenly;
        height: 860px;
    }

    .select-check-btn {
        display: none;
    }

    /* ---------selector series----------- */
    .box-series {
        width: 195px;
        margin-left: 20px;
    }

    .box-series li {
        padding: 8px;
        font-size: 1rem;
        font-weight: 400;
        padding: 5px 5px 5px 0;
    }

    .box-series p {
        padding-bottom: 15px;
    }

    .box-series li:hover {
        background: #F2DE79;
        transition: linear 1s;
    }



    .series-active {
        background: #F2DE79;
    }


    /* ---------selector color ----------- */

    .box-color {
        padding: 10px;
        width: 195px;
        margin-left: 20px;
    }

    .box-color p {
        font-weight: 400;
        padding-bottom: 15px;
    }

    .color-btn-box {
        flex-wrap: wrap;
    }

    .color-btn-box li {
        width: 30px;
        height: 30px;
        align-items: center;
        justify-content: center;
        margin: 3px;
        position: relative;
        /* background:url('images/select circle.svg')no-repeat; */
    }

    .img-select-circle {
        width: 30px;
        height: 30px;
        position: absolute;
        /* opacity: 1; */
        z-index: -20;
    }

    .img-select-circle:hover {
        opacity: 1;
    }

    .color-lb {
        padding: 0;
        margin-right: 3px;
        cursor: pointer;
        align-items: center;
        justify-content: center;

    }

    .color-in[type=checkbox] {
        display: none;
    }

    .color-in[type=checkbox]+span {
        display: inline-block;
        padding: 3px 6px;
        user-select: none;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        margin-left: 1px;
    }

    #color-in1[type=checkbox]+span {
        background-color: #FF8B78;
    }

    #color-in2[type=checkbox]+span {
        background-color: #FFE45E;
    }

    #color-in3[type=checkbox]+span {
        background-color: #29A6C2;
    }

    #color-in4[type=checkbox]+span {
        background-color: #AADF3A;
    }

    #color-in5[type=checkbox]+span {
        background-color: #DFB5DF;
    }

    #color-in6[type=checkbox]+span {
        background-color: #A57E70;
    }

    #color-in7[type=checkbox]+span {
        background-color: #FFFFFF;
        border: 1px solid #707070;
    }

    #color-in8[type=checkbox]+span {
        background-color: #636363;
    }

    /* .color-in1[type=checkbox]:checked+span {
        
    } */

    /* .color-active {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 1px solid #707070;
        } */

    /* .color-btn-box li button {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        align-items: center;
    }

    .btn-border {
        border: transparent;
    } */

    .color-btn-box li:hover {
        background: url("images/select circle.svg") no-repeat;
    }

    /* .color-active {
           background: url("images/select circle.svg") no-repeat;
           
        } */



    /* ----------selector type ----------- */
    .box-type {
        padding: 10px;
        width: 282px;
        height: 289px;
        margin-left: 20px;
    }

    .box-type p {
        font-weight: 400;
        padding-bottom: 10px;

    }

    .type-box {
        flex-direction: row;


    }

    .img-selector {
        width: 168px;
        height: 224px;
        object-fit: cover;
    }

    .img-selector img {
        width: 100%;
    }

    .type-btn-box li {
        font-size: 0.88rem;
        margin-top: 10px;
        padding-top: 4px;
        padding: 1px 1px 1px 0;

    }

    .type-btn-box li:hover {
        background: #F2DE79;
        transition: linear 1s;
    }

    .type-active {
        background: #F2DE79;

    }

    /* -------------------blocl-right---------------------- */
    .block-right {
        width: 855px;
        flex-direction: column;
    }

    .block-right-bg {
        width: 855px;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        padding-bottom: 40px;
    }

    /* ------------breadcrumb跟select------- */
    .top-box {
        width: 850px;
        height: 60px;
        justify-content: space-between;
        align-items: center;
    }

    .breadcrumb {
        width: 300px;
        height: 40px;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        padding-left: 10px;
    }

    .breadcrumb h5 {
        font-weight: 400;
        padding: 8px;
    }

    .btn-mo-select {
        display: none;
    }

    .right-select-rwd {
        width: 200px;

    }

    .right-select-box {
        margin-left: 55px;

    }

    .right-select {
        width: 100%;
        height: 30px;
        padding-left: 20px;
        padding-right: 30px;
        color: #686868;
        background-color: #ffffff;
        font-family: 'Noto Sans TC', sans-serif;
        font-weight: 400;
        letter-spacing: 2px;

    }

    .right-select::-ms-expand {
        display: none;
    }

    /* -------------商品攔---------- */

    .product-box {
        width: 830px;
        min-height: 400px;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start;
        /* border: 2px solid darkblue; */

    }

    .single-product-box {
        width: 250px;
        /* height: 300px; */
        flex-direction: column;
        margin: 5px 5px 5px 15px;
        padding: 5px 0px;
        /* padding: 5px; */
        /* padding: 5px;
        margin: 10px; */
        /* border: 2px solid navajowhite; */
    }

    .product-top-img {
        width: 250px;
        height: 300px;
        object-fit: cover;
        overflow: hidden;
    }

    .product-top-img img {
        width: 100%;
        max-height: 100%;
    }

    .product-text {
        padding-top: 5px;
    }

    .product-text h5 {
        /* text-align: center; */
        padding-right: 10px;
        font-weight: 400;
    }

    .product-text img {
        width: 13px;
        margin-right: 5px;
        /* align-items: center; */
    }

    /* -----------分頁----------- */
    .pagination {
        width: 830px;
        height: 30px;
        justify-content: flex-end;
    }

    .page-btn {
        align-items: center;

    }

    .page-btn span,
    .page-btn a {
        color: #404040;
        padding: 5px;
        margin: 2px;
        font-weight: 400;
        font-size: 0.813rem;
        letter-spacing: 2px;
        align-items: center;
    }

    .active {
        padding-bottom: 0px;
        margin-bottom: 0px;
        border-bottom: 0.5px solid #404040;
    }

    /* 商品欄悾悾 */
    .product-empty {
        width: 830px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    /* ------------ 幫我搭  -------------- */


    /* ----------  幫我搭  ---------------- */

    @media screen and (max-width:1200px) {
        .wrapper {
            width: 960px;
            justify-content: center;
        }

        .block-right {
            width: 600px;
        }

        .block-right-bg {
            width: 600px;
        }

        .top-box {
            width: 550px;
        }

        .product-box {
            width: 600px;
            justify-content: space-evenly;
        }

        .pagination {
            width: 600px;
        }

    }

    @media screen and (max-width:992px) {


        .remove {
            display: none;
        }

        .wrapper {
            width: 100vw;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .vegas-box {
            height: 40vh;
        }

        .selector {
            background: #faf0ce;
            position: absolute;
            left: 10px;
            top: 100px;
            width: 60vw;
            height: 120vh;
            /* min-height: 90vh; */
            justify-content: space-evenly;
            box-shadow: 10px 10px 5px #a0a0a088;
        }

        .select-check-btn {
            display: flex;
            position: absolute;
            background: #03588C;
            color: white;
            bottom: 4%;
            right: 2%;
            width: 90px;
            height: 50px;
            justify-content: center;
            align-items: center;
            transition: 0.5s;
            border: 2px;
        }

        .select-check-btn:hover {
            background: #FF9685;

        }

        .box-series {
            width: 40vw;
            margin-left: 20px;
            padding: 3px 3px 3px 0;
        }

        .box-color {
            padding: 10px;
            min-width: 40vw;
            margin-left: 20px;
        }


        .box-type {
            width: 55vw;
        }

        .block-right {
            width: 90vw;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        .block-right-bg {
            width: 93vw;
        }

        .top-box {
            height: 80px;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            width: 90vw;
            margin: 10px 0 10px 0;
        }

        .breadcrumb {
            width: 300px;
            height: 40px;
            padding-left: 0px;
        }

        .breadcrumb h5 {
            padding-left: 0;

        }

        .btn-mo-select {
            height: 30px;
            width: 100px;
            background: #F2DE79;
            border: 0;
            border-radius: 2px;
            color: #404040;
            font-family: 'Noto Sans TC', sans-serif;
            letter-spacing: 2px;
            outline: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: ease-in;
        }

        .right-select-rwd {
            width: 280px;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
        }

        .right-select {
            margin-left: 0px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .product-box {
            width: 90vw;
            justify-content: space-between;
        }

        .single-product-box {
            width: 25vw;
        }

        .product-top-img {
            width: 25vw;
            height: 30vw;
        }

        .product-text {
            height: 60px;
        }

        .product-text img {
            display: none;
        }

        .pagination {
            width: 80vw;
            justify-content: center;
        }


        .block {
            position: relative;
        }

        .selector-active {
            display: block;
            position: absolute;
        }

        footer {
            margin-top: 15vh;
        }
    }

    @media screen and (max-width: 576px) {
        body {
            background: white;
        }

        .wrapper {
            margin-top: 10px;
        }

        .vegas-box {
            height: 40vh;
        }

        .selector {
            top: 13vh;
            left: 1vh;
            right: 1vh;
            width: 80vw;
            height: 110vh;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .select-check-btn {
            bottom: 4%;
            right: 2%;
            width: 14vh;
            height: 7vh;

        }


        .box-series {
            width: 50vw;
            margin-left: 20px;
            padding: 2px 2px 2px 0;
        }

        .box-color {
            padding: 10px;
            min-width: 40vw;
            margin-left: 20px;
        }

        .box-type {
            padding: 10px;
            width: 80vw;
            height: 40vh;
            margin-left: 20px;
        }

        /* ---------------------- */
        .single-product-box {

            width: 40vw;
            flex-direction: column;
            margin: 2px 2px 2px 2px;

        }

        .product-top-img {

            object-fit: cover;
            overflow: hidden;
            width: 40vw;
            height: 48vw;
        }

        /* ---------------------- */

        .top-box {
            height: 80px;
        }

        .breadcrumb {
            width: 90vw;
        }

        .right-select-rwd {
            width: 90vw;
        }

        .right-select {
            margin-left: 0px;
        }





        footer {
            margin-top: 32vh;
        }

    }
</style>

<div class="container flex">

    <?php include __DIR__ . '/__navbar.php' ?>

    <div class=" vegas-box" id="example">
    </div>

    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <div class="product-help-btn flex cursor" id="product-help-btn">
        <img class="flex" src="images/magic.svg" alt="">
        <h3 class="cursor flex">幫我搭</h3>
    </div>
    <div class="help-bg flex">
        <div class="mask flex" id="blockPhoto">
            <form action="" name="form2" onsubmit="return false" method="get" class="flex form2">
                <ul class="flex">
                    <li class="block1 flex">
                        <div class="box1-title flex ">
                            <h2 class="flex">想知道哪種襪子<br>
                                最適合你嗎?</h2>
                            <h4 class="flex">找到最適合你的襪子!</h4>
                            <div class="img-centerkv flex">
                                <img class="flex" src="images/dapei-centerkv.svg" alt="">
                            </div>
                            <div class="help-btn flex goNext cursor">
                                <img class="flex" src="images/magic.svg" alt="">
                                <h3 class="cursor">幫我搭</h3>
                            </div>
                        </div>
                        <img class="float-img sock1 animation" src="images/product/index-clear-03.png" alt="">
                        <img class="float-img sock2 animation" src="images/product/index-clear-03.png" alt="">
                        <img class="float-img sock3 animation" src="images/product/index-clear-07.png" alt="">
                        <img class="float-img sock4 animation" src="images/product/index-clear-07.png" alt="">
                        <img class="float-img sock5 animation" src="images/product/index-clear-02.png" alt="">
                        <img class="float-img sock6 animation" src="images/product/index-clear-08.png" alt="">
                        <div class="end cursor" id="close-btn">+</div>
                    </li>
                    <li class="block2 flex ">
                        <div class="box-top flex">
                            <h3>1. 你平常最常穿的襪子長度?</h3>
                        </div>
                        <div class="box-bottom flex">
                            <div class="bottom-left flex goPrev"> <img class="" src="images/arrow-left.svg" alt="">
                            </div>
                            <div class="bottom-right flex form">
                                <div class="BR-left flex ">
                                    <div class="radio-group flex ">
                                        <div class="block-img ">
                                            <label for="block2-btn1" class="cursor">
                                                <img src="images/test-lengthA.svg" alt="">
                                            </label>
                                        </div>
                                        <h5>隱形襪</h5>
                                        <div>
                                            <input type="radio" class="radio-input goNext cursor" id="block2-btn1" name="types[]" value="4,3">
                                            <label for="block2-btn1" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>
                                    </div>
                                    <div class="radio-group flex">
                                        <div class="block-img">
                                            <label for="block2-btn2" class="cursor">
                                                <img src="images/test-lengthB.svg" alt="">
                                            </label>
                                        </div>
                                        <h5>踝襪</h5>
                                        <div>
                                            <input type="radio" class="radio-input goNext" id="block2-btn2" name="types[]" value="3,4">
                                            <label for="block2-btn2" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>

                                    </div>
                                </div>
                                <div class="BR-right flex ">
                                    <div class="radio-group flex">
                                        <div class="block-img">
                                            <label for="block2-btn3" class="cursor">
                                                <img src="images/test-lengthC.svg" alt="">
                                            </label>
                                        </div>
                                        <h5>短襪</h5>
                                        <div>
                                            <input type="radio" class="radio-input goNext" id="block2-btn3" name="types[]" value="2">
                                            <label for="block2-btn3" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>
                                    </div>
                                    <div class="radio-group flex">
                                        <div class="block-img">
                                            <label for="block2-btn4" class="cursor">
                                                <img src="images/test-lengthD.svg" alt="">
                                            </label>
                                        </div>
                                        <h5>長襪</h5>
                                        <div>
                                            <input type="radio" class="radio-input goNext" id="block2-btn4" name="types[]" value="1">
                                            <label for="block2-btn4" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="block3 flex">
                        <div class="box-top flex">
                            <h3>2. 你穿著以下哪種服裝感到最自在？</h3>
                        </div>
                        <div class="box-bottom  flex">
                            <div class="bottom-left flex goPrev"> <img class="" src="images/arrow-left.svg" alt="">
                            </div>
                            <div class="bottom-right flex">
                                <div class="BR-left flex">
                                    <div class="radio-group flex block3-group">
                                        <div class="block-img">
                                            <label for="block3-btn1" class="cursor">
                                                <img src="images/test-wearA.png" alt="">
                                            </label>
                                        </div>
                                        <h5 class="block3-text">古著文青風</h5>
                                        <div>
                                            <input type="radio" class="radio-input goNext" id="block3-btn1" name="series[]" value="4,5">
                                            <label for="block3-btn1" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>
                                    </div>
                                    <div class="radio-group flex block3-group">
                                        <div class="block-img">
                                            <label for="block3-btn2" class="cursor">
                                                <img src="images/test-wearB.png" alt="">
                                            </label>
                                        </div>
                                        <h5 class="block3-text">時下流行單品</h5>
                                        <div>
                                            <input type="radio" class="radio-input goNext" id="block3-btn2" name="series[]" value="1,2,3">
                                            <label for="block3-btn2" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>

                                    </div>
                                </div>
                                <div class="BR-right flex">
                                    <div class="radio-group flex block3-group">
                                        <div class="block-img">
                                            <label for="block3-btn3" class="cursor">
                                                <img src="images/test-wearC.png" alt="">
                                            </label>
                                        </div>
                                        <h5 class="block3-text">襯衫和長褲</h5>
                                        <div>
                                            <input type="radio" class="radio-input goNext" id="block3-btn3" name="series[]" value="4">
                                            <label for="block3-btn3" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>
                                    </div>
                                    <div class="radio-group flex block3-group">
                                        <div class="block-img">
                                            <label for="block3-btn4" class="cursor">
                                                <img src="images/test-wearD.png" alt="">
                                            </label>
                                        </div>
                                        <h5 class="block3-text">休閒洋裝</h5>
                                        <div>
                                            <input type="radio" class="radio-input goNext" id="block3-btn4" name="series[]" value="5,6">
                                            <label for="block3-btn4" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="block4 flex">
                        <div class="box-top flex">
                            <h3>3. 想穿去哪裡呢 ?</h3>
                        </div>
                        <div class="box-bottom  flex">
                            <div class="bottom-left flex goPrev"> <img class="" src="images/arrow-left.svg" alt="">
                            </div>
                            <div action="" class="bottom-right flex">
                                <div class="BR-left flex">
                                    <div class="radio-group flex">
                                        <div class="block-img">
                                            <label for="block4-btn1" class="cursor">
                                                <img src="images/test-doA.svg" alt="">
                                            </label>
                                        </div>
                                        <h5>朋友聚會</h5>
                                        <div>
                                            <input type="radio" class="radio-input goNext" id="block4-btn1" name="number">
                                            <label for="block4-btn1" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>
                                    </div>
                                    <div class="radio-group flex">
                                        <div class="block-img">
                                            <label for="block4-btn2" class="cursor">
                                                <img src="images/test-doB.svg" alt="">
                                            </label>
                                        </div>
                                        <h5>辦公室</h5>
                                        <div>
                                            <input type="radio" class="radio-input goNext" id="block4-btn2" name="number">
                                            <label for="block4-btn2" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>

                                    </div>
                                </div>
                                <div class="BR-right flex">
                                    <div class="radio-group flex">
                                        <div class="block-img">
                                            <label for="block4-btn3" class="cursor">
                                                <img src="images/test-doC.svg" alt="">
                                            </label>
                                        </div>
                                        <h5>露營踏青</h5>
                                        <div>
                                            <input type="radio" class="radio-input goNext" id="block4-btn3" name="number">
                                            <label for="block4-btn3" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>
                                    </div>
                                    <div class="radio-group flex">
                                        <div class="block-img">
                                            <label for="block4-btn4" class="cursor">
                                                <img src="images/test-doD.svg" alt="">
                                            </label>
                                        </div>
                                        <h5>逛街血拼</h5>
                                        <div>
                                            <input type="radio" class="radio-input goNext" id="block4-btn4" name="number">
                                            <label for="block4-btn4" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="block5 flex">
                        <div class="box-top flex">
                            <h3>4. 穿衣色系偏向?</h3>
                        </div>
                        <div class="block5-box-bottom flex">
                            <div class="bottom-left flex goPrev"> <img class="" src="images/arrow-left.svg" alt="">
                            </div>
                            <div action="" class="block5-bottom-right flex">
                                <div class="BR-left flex">
                                    <div class="radio-group flex">
                                        <div class="block-img block5-pic">
                                            <label for="block5-btn1" class="cursor ">
                                                <img src="images/test-colorA.svg" alt="">
                                            </label>
                                        </div>
                                        <h5>粉嫩色系</h5>
                                        <div>
                                            <input type="radio" class="radio-input" id="block5-btn1" name="colors[]" value="2,7">
                                            <label for="block5-btn1" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>
                                    </div>
                                    <div class="radio-group flex">
                                        <div class="block-img block5-pic">
                                            <label for="block5-btn2" class="cursor">
                                                <img src="images/test-colorB.svg" alt="">
                                            </label>
                                        </div>
                                        <h5>大地色系</h5>
                                        <div>
                                            <input type="radio" class="radio-input" id="block5-btn2" name="colors[]" value="4">
                                            <label for="block5-btn2" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>
                                    </div>
                                </div>
                                <div class="BR-right flex">
                                    <div class="radio-group flex">
                                        <div class="block-img block5-pic">
                                            <label for="block5-btn3" class="cursor">
                                                <img src="images/test-colorC.svg" alt="">
                                            </label>
                                        </div>
                                        <h5>黑白灰</h5>
                                        <div>
                                            <input type="radio" class="radio-input " id="block5-btn3" name="colors[]" value="7,8">
                                            <label for="block5-btn3" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>
                                    </div>
                                    <div class="radio-group flex">
                                        <div class="block-img block5-pic">
                                            <label for="block5-btn4" class="cursor">
                                                <img src="images/test-colorD.svg" alt="">
                                            </label>
                                        </div>
                                        <h5>繽紛色系</h5>
                                        <div>
                                            <input type="radio" class="radio-input" id="block5-btn4" name="colors[]" value="1,3,6">
                                            <label for="block5-btn4" class="radio-label">
                                                <span class="radio-button"></span>
                                            </label>
                                            </input>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="bottom-result flex cursor " id="close-bg">
                                <div class="block5-helpBtn flex goNext">
                                    <img class="flex" src="images/magic.svg" alt="">
                                    <h3 class="cursor">完成!</h3>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="block6 flex">
                        <div class="block6-box flex">
                            <div class="flex">
                                <img class="flex" src="images/magic.svg" alt="">
                            </div>
                            <h5 class="flex">讓我來 搜尋你的理想型....</h5>
                        </div>

                    </li>
                </ul>
            </form>
        </div>

    </div>
    <div class="wrapper flex">

        <div class="block flex">
            <div class="selector flex">
                <form name="form1" onsubmit="return false" method="get" class="flex form1">
                    <!-- <form name="form1" onsubmit="return false" > -->
                    <ul class="box-series">
                        <input type="hidden" name="page" id="page" value="">
                        <p>Series</p>

                        <li>
                            <label class="cursor series-check ">
                                <input type="checkbox" name="series[]" value="1" class="cursor" id="summerSeries">芒果派對</label>
                        </li>
                        <li>
                            <label class="cursor"><input type="checkbox" name="series[]" value="2" class="cursor" id="irregularSeries">群魔亂舞</label>
                        </li>
                        <li>
                            <label class="cursor"><input type="checkbox" name="series[]" value="3" class="cursor" id="crystalSeries">灰姑娘的水晶襪</label>
                        </li>
                        <li>
                            <label class="cursor"><input type="checkbox" name="series[]" value="4" class="cursor" id="plainSeries">素色流行</label>
                        </li>
                        <li>
                            <label class="cursor"><input type="checkbox" name="series[]" value="5" class="cursor" id="geomSeries">幾何色塊</label>
                        </li>
                        <li>
                            <label class="cursor"><input type="checkbox" name="series[]" value="6" class="cursor" id="americanSeries">美式風格</label>
                        </li>
                    </ul>
                    <div class="box-color">
                        <p>Color</p>
                        <ul class="color-btn-box flex">
                            <li class="flex">
                                <label class="cursor color-lb flex">
                                    <input type="checkbox" id="color-in1" name="colors[]" value="1" class="cursor flex color-in" />
                                    <span></span>
                                </label>
                            </li>
                            <li class="flex">
                                <label class="cursor color-lb flex">
                                    <input type="checkbox" id="color-in2" name="colors[]" value="2" class="cursor color-in flex" />
                                    <span></span>
                                </label>
                            </li>
                            <li class="flex">
                                <label class="cursor color-lb flex">
                                    <input type="checkbox" id="color-in3" name="colors[]" value="3" class="cursor color-in flex" />
                                    <span></span>
                                </label>
                            </li>
                            <li class="flex">
                                <label class="cursor color-lb flex">
                                    <input type="checkbox" id="color-in4" name="colors[]" value="4" class="cursor color-in flex" />
                                    <span></span>
                                </label>
                            </li>
                            <li class="flex">
                                <label class="cursor color-lb flex">
                                    <input type="checkbox" id="color-in5" name="colors[]" value="5" class="cursor color-in flex" />
                                    <span></span>
                                </label>
                            </li>
                            <li class="flex">
                                <label class="cursor color-lb flex">
                                    <input type="checkbox" id="color-in6" name="colors[]" value="6" class="cursor color-in flex" />
                                    <span></span>
                                </label>
                            </li>
                            <li class="flex">
                                <label class="cursor color-lb flex">
                                    <input type="checkbox" id="color-in7" name="colors[]" value="7" class="cursor color-in flex" />
                                    <span></span>
                                </label>
                            </li>
                            <li class="flex">
                                <label class="cursor color-lb flex">
                                    <input type="checkbox" id="color-in8" name="colors[]" value="8" class="cursor color-in flex" />
                                    <span></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="box-type ">
                        <p>Type</p>
                        <div class="type-box flex">
                            <div class="img-selector flex"><img src="images/selector.svg"></div>
                            <ul class="type-btn-box">
                                <li> <label class=" cursor"><input type="checkbox" name="types[]" value="1" class="cursor">長襪</label></li>
                                <li><label class=" cursor"><input type="checkbox" name="types[]" value="2" class="cursor">短襪</label></li>
                                <li> <label class="cursor"><input type="checkbox" name="types[]" value="3" class="cursor">踝襪</label></li>
                                <li> <label class="cursor"><input type="checkbox" name="types[]" value="4" class="cursor">隱形襪</label></li>
                            </ul>
                        </div>
                        <div class="select-check-btn cursor">確認</div>
                    </div>
                </form>
            </div>
            <div class="block-right flex">
                <div class="block-right-bg flex">
                    <div class="top-box flex">
                        <div class="breadcrumb flex">
                            <a href="" class="flex">
                                <h5>商品</h5>
                            </a>
                            <h5 class="flex">></h5>
                            <a href="" class="flex">
                                <h5>商品一覽</h5>
                            </a>
                        </div>
                        <div class="right-select-rwd flex">
                            <button class="btn-mo-select flex">進階篩選</button>
                            <div class="right-select-box flex">
                                <select class="right-select flex" name="rightSelect">
                                    <option value="new">最新上架</option>
                                    <option value="Popular">熱門程度</option>
                                    <option value="lowPrice">$低到高</option>
                                    <option value="highPrice">$高到低</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="product-empty flex">
                        <div><img src="images/product-kuku.svg" alt=""></div>
                        <h3>沒有找到你想要的襪子。</h3>
                    </div> -->
                    <ul class="product-box
                        flex">

                        <?php foreach ($rows as $r) : ?>
                            <li class="single-product-box flex sid=<?= $r['sid'] ?>">
                                <a href="product-detail.php?sid=<?= $r['sid'] ?>">
                                    <div class="product-top-img flex">
                                        <img src='images/product/<?= $r['img_ID'] ?>-1.jpg?' alt="">
                                    </div>
                                    <div class="product-text flex">
                                        <h5><?= $r['product_name'] ?>&nbsp &nbsp<?= $r['price'] ?>元</h5>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>


                        <!-- <li class="single-product-box flex">
                            <div class="product-top-img flex">
                                <img src="images/product/darkyellow-01.jpeg" alt="">
                            </div>
                            <div class="product-text flex">
                                <h5>01 偶素襪子 180元</h5>
                                <img src="images/color1.svg" alt="">
                                <img src="images/color2.svg" alt="">
                            </div>
                        </li>
                        <li class="single-product-box flex">
                            <div class="product-top-img flex">
                                <img src="images/product/eatermelom-06.jpg" alt="">
                            </div>
                            <div class="product-text flex">
                                <h5>01 偶素襪子 180元</h5>
                                <img src="images/color1.svg" alt="">
                            </div>
                        </li>
                        <li class="single-product-box flex">
                            <div class="product-top-img flex">
                                <img src="images/product/darkpink-01.jpg" alt="">
                            </div>
                            <div class="product-text flex">
                                <h5>01 偶素襪子 180元</h5>
                                <img src="images/color1.svg" alt="">
                            </div>
                        </li> -->
                    </ul>
                </div>

                <div class="flex">
                    <?php if (!empty($stmt)) : ?>
                        <ul class="pagination flex">
                            <li class="page-btn page-item <?= $page == 1 ? 'disabled' : '' ?>">
                                <a class="page-link" href="?page=<?= $page - 1 ?>">
                                    PREV
                                </a>
                            </li>
                            <?php
                            for ($i = $page - 2; $i <= $page + 2; $i++) :
                                if ($i < 1) continue;
                                if ($i > 9) break ?>
                                <li class="page-item page-btn  <?= $page == $i ? 'active' : '' ?>">
                                    <a class="page-current" href="?page=<?= $i ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                            <li class=" page-btn page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                                <a class="page-link" href="?page=<?= $page + 1 ?>">
                                    NEXT
                                </a>
                            </li>
                        </ul>

                    <?php endif; ?>
                </div>



                <!-- <a class="page-disabled"><i></i>PREV</a>
                        <a href="#">＜</a>
                        <a class="page-current page-active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                       
                        <a href="#">7</a>
                        <a href="#">＞</a>
                        <a class="page-next" href="#">NEXT<i></i></a> -->
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/__html_footer.php' ?>
<?php include __DIR__ . '/__scripts.php' ?>

<script src="js/vegas.min.js"></script>

<script>
    //  ----------- vegas -----------------
    $("#example").vegas({
        timer: false,
        align: 'bottom',
        autoplay: true,
        transition: 'slideLeft2',
        slides: [{
                src: "images/asym06-1.jpg"
            },
            {
                src: "images/asym06-2.jpg"
            },
            {
                src: "images/asym10-1.jpg"
            },
            {
                src: "images/asym02-2.jpg"
            }
        ]
    });

    // --------------------------- selector  ------------------------------

    if ($(window).width() <= 992) {

        $('.selector').hide();
        $('.btn-mo-select').click(function() {
            $('.selector').slideToggle(1000);
            return false;
        });

    };
    $('.select-check-btn').click(function() {
        $('.selector').slideUp(1000);
        return false;
    });


    // active狀態

    $('form[name=form1] input[name="series[]" ]').change(function() {
        if (this.checked) {
            $(this).parents("li").addClass("series-active");
        } else {
            $(this).parents("li").removeClass("series-active");
        }
    });

    $('form[name=form1] input[name="colors[]" ]').change(function() {
        if (this.checked) {
            $(this).parents("li").css({
                "background": "url('images/select circle.svg') no-repeat"
            });
        } else {
            $(this).parents("li").css({
                "background": "none"
            });
        }
    });


    $('form[name=form1] input[name="types[]" ]').change(function() {
        if (this.checked) {
            $(this).parents("li").addClass("type-active");
        } else {
            $(this).parents("li").removeClass("type-active");
        }
    });



    // ------------------  幫我搭------------------

    //滑動
    let slideIndex = 0;
    let slideCount = $("#blockPhoto ul").find("li").length;
    let slideWidth = $("#blockPhoto ul li").width();
    $("#blockPhoto ul").css("left", 0)

    function slider() {
        $(".goNext").click(function() {
            slideIndex = slideIndex + 1;
            goSlide()
            $("#blockPhoto ul").css("transition-delay", "600ms");
            $("#blockPhoto ul .block5").css("transition-delay", "50ms");
        });
        $(".goPrev").click(function() {
            slideIndex = slideIndex - 1;
            goSlide()
            $("#blockPhoto ul").css("transition-delay", "50ms");
        })
    }

    function goSlide() {
        if (slideIndex < 0) {
            slideIndex = slideCount - 1
        }
        if (slideIndex >= slideCount) {
            slideIndex = 0
        }

        $("#blockPhoto ul").css("left", 0 - slideIndex * slideWidth);

        if (slideIndex > 4) {
            setTimeout(function() {
                $('.help-bg').fadeOut()
            }, 5000);
        }

    }

    slider()


    // 幫我搭 Xclose 

    $('#close-btn').click(function() {
        $('.help-bg').fadeOut(500);
        return false;
    });

    //幫我搭 show/hide -----


    $('.help-bg').hide();
    $('#product-help-btn').click(function() {
        $('.help-bg').slideDown(800);
        return false;
    });


    // ----------- 商品圖hover --------------
    $(".product-top-img img").mouseenter(function() {
        $(this).attr("src", $(this).attr('src').replace("-1.jpg", "-2.jpg"));
    });

    $(".product-top-img img").mouseleave(function() {
        $(this).attr("src", $(this).attr('src').replace("-2.jpg", "-1.jpg"));
    });
</script>


<script>
    const productBox = $('.product-box');
    // ----------------------------
    $('form[name=form2] input[type=radio]').click(function() {
        $('#page').val('1');

        $.get('product-api.php', $(document.form2).serialize(), function(data) {
            console.log(data);

            pagination.empty();
            for (let s in data.pageBtns) {
                pagination.append(pageBtnTpl({
                    i: data.pageBtns[s],
                    isActive: data.pageBtns[s] == data.page
                }));
            }
            productBox.empty(); //先清空再append新的內容
            productGet(data);
          if( rows=Array(0)){
                productBox.append(` <div class="product-empty flex">
                        <div><img src="images/product-kuku.svg" alt=""></div>
                        <h3>沒有找到你想要的襪子。</h3>
                    </div> `)
            }
        }, 'json')
        handleHash2();
    });
    // ----------------------------
    $('form[name=form1] input[type=checkbox]').click(function() {
        $('#page').val('1');

        $.get('product-api.php', $(document.form1).serialize(), function(data) {
            console.log(data);

            pagination.empty();
            for (let s in data.pageBtns) {
                pagination.append(pageBtnTpl({
                    i: data.pageBtns[s],
                    isActive: data.pageBtns[s] == data.page
                }));
            }
            productBox.empty(); //先清空再append新的內容
            productGet(data);
            if( rows=Array(0)){
                productBox.append(` <div class="product-empty flex">
                        <div><img src="images/product-kuku.svg" alt=""></div>
                        <h3>沒有找到你想要的襪子。</h3>
                    </div> `)
            }
             
            


        }, 'json');
        handleHash();
    });
    // --------------------------------




    const pagination = $('.pagination');
    const tbody = $('.tbody');


    function pageBtnTpl(obj) {
        //obj.i 頁碼
        //obj.isActive 本頁頁碼active
        return `
                <li class="page-item page-btn ${obj.isActive ? 'active' : ''}">
                    <a class="page-current " href="#${obj.i}">${obj.i}</a>
                </li>`
    }



    //.hash抓頁面的hash(#)值
    function handleHash() {
        let h = location.hash.slice(1);
        h = parseInt(h) || 1; //如果h為NaN則值給1
        $('#page').val(h);
        // console.log($('#page').val())
        console.log($(document.form1).serialize())

        //取得api的資料
        $.get('product-api.php', $(document.form1).serialize(), function(data) {
            console.log(data);

            pagination.empty();
            pagination.append(`<li class="page-btn page-item ${data.page == 1 ? 'disabled' : ''} ">
                                <a class="page-link" href="#${data.page - 1 }">
                                    PREV
                                </a>
                            </li>`)
            for (let s in data.pageBtns) {
                pagination.append(pageBtnTpl({
                    i: data.pageBtns[s],
                    isActive: data.pageBtns[s] == data.page
                }));
            }
            pagination.append(`<li class=" page-btn page-item ${data.page == data.totalPages ? 'disabled' : ''}">
                                <a class="page-link" href="#${data.page + 1 }">
                                    NEXT
                                </a>
                            </li>`)

            productBox.empty(); //先清空再append新的內容
            productGet(data);
        }, 'json')
        if( rows=Array(0)){
                productBox.append(` <div class="product-empty flex">
                        <div><img src="images/product-kuku.svg" alt=""></div>
                        <h3>沒有找到你想要的襪子。</h3>
                    </div> `)
            }
    }

    function handleHash2() {
        let h = location.hash.slice(1);
        h = parseInt(h) || 1; //如果h為NaN則值給1
        $('#page').val(h);
        console.log($('#page').val())

        //取得api的資料
        $.get('product-api.php', $(document.form2).serialize(), function(data) {
            console.log(data);

            pagination.empty();
            pagination.append(`<li class="page-btn page-item ${data.page == 1 ? 'disabled' : ''} ">
                                <a class="page-link" href="#${data.page - 1 }">
                                    PREV
                                </a>
                            </li>`)
            for (let s in data.pageBtns) {
                pagination.append(pageBtnTpl({
                    i: data.pageBtns[s],
                    isActive: data.pageBtns[s] == data.page
                }));
            }
            pagination.append(`<li class=" page-btn page-item ${data.page == data.totalPages ? 'disabled' : ''}">
                                <a class="page-link" href="#${data.page + 1 }">
                                    NEXT
                                </a>
                            </li>`)

            productBox.empty(); //先清空再append新的內容
            productGet(data);
        }, 'json')
        if( rows=Array(0)){
                productBox.append(` <div class="product-empty flex">
                        <div><img src="images/product-kuku.svg" alt=""></div>
                        <h3>沒有找到你想要的襪子。</h3>
                    </div> `)
            }

    }


    function productGet(data) {

        if (data && data.rows) {
            for (let i in data.rows) {

                productBox.append(itemTpl(data.rows[i]));

                $(".product-top-img img").mouseenter(function() {
                    $(this).attr("src", $(this).attr('src').replace("-1.jpg", "-2.jpg"));
                });

                $(".product-top-img img").mouseleave(function() {
                    $(this).attr("src", $(this).attr('src').replace("-2.jpg", "-1.jpg"));
                });
            }
        }
    }



    function itemTpl(obj) {
        return `<li class="single-product-box flex sid=${obj['sid']}">
                    <a href="product-detail.php?sid=${obj['sid']}">
                        <div class="product-top-img flex">
                            <img src='images/product/${obj['img_ID']}-1.jpg?' alt="">
                        </div>
                        <div class="product-text flex">
                            <h5>${obj['product_name']}&nbsp &nbsp
                                ${obj['price']}元</h5>
                        </div>
                    </a>
                </li>`
    }

    // ------------------------------------

    // $(".right-select").change(function (data) {
    //             // console.log($(".right-select").val(data));
    //             let selectdata = $('select[name="rightSelect"]  option[="new"] ').val();
    //          if(data="new"){
    //             console.log("newOK");
    //          }
    //         });
    //         $('form[name=form1] input[name="colors[]" ]').change(function()
    // ---------------------
    function seriesProduct() {

        let h = location.hash.slice(1);
        h = parseInt(h) || 1; //如果h為NaN則值給1
        $('#page').val(h);


        // ----------
        let series = location.hash.slice(-1)

        console.log('series=' + series)

        // if (series==1){
        //         $('#summerSeries').prop('checked','true');
        //         console.log('123')
        // }else if(series==2){
        //         $('#irregularSeries').attr('checked');
        // }

        switch (series) {
            case '1':
                $('#summerSeries').prop('checked', 'true');
                console.log('summerSeriesChecked')
                break;

            case '2':
                $('#irregularSeries').prop('checked', 'true');
                console.log('irregularSeriesChecked')

                break;

            case '3':
                $('#crystalSeries').prop('checked', 'true');
                console.log('crystalSeriesChecked')
                break;

            case '4':
                $('#plainSeries').prop('checked', 'true');
                console.log('plainSeriesChecked')
                break;

            case '5':
                $('#geomSeries').prop('checked', 'true');
                console.log('geomSeriesChecked')
                break;

            case '6':
                $('#americanSeries').prop('checked', 'true');
                console.log('americanSeriesChecked')
                break;
        }

        const sendObj = location.hash.slice(1)

        // console.log(sendObj)



        // console.log(sendObj)
        $.get('product-api.php', sendObj, function(data) {
            console.log(data);

            pagination.empty();
            for (let s in data.pageBtns) {
                pagination.append(pageBtnTpl({
                    i: data.pageBtns[s],
                    isActive: data.pageBtns[s] == data.page
                }));
            }

            productBox.empty(); //先清空再append新的內容
            productGet(data);
            pagination.empty();
            pagination.append(`<li class="page-btn page-item ${data.page == 1 ? 'disabled' : ''} ">
                        <a class="page-link" href="#${data.page - 1 }">
                            PREV
                        </a>
                    </li>`)
            for (let s in data.pageBtns) {
                pagination.append(pageBtnTpl({
                    i: data.pageBtns[s],
                    isActive: data.pageBtns[s] == data.page
                }));
            }
            pagination.append(`<li class=" page-btn page-item ${data.page == data.totalPages ? 'disabled' : ''}">
                        <a class="page-link" href="#${data.page + 1 }">
                            NEXT
                        </a>
                    </li>`)

            productBox.empty(); //先清空再append新的內容
            productGet(data);
        }, 'json')
    }

    window.addEventListener('hashchange', handleHash); //在window監聽hashChange的event
    // handleHash();
    seriesProduct()
</script>

<?php require __DIR__ . '/__html_foot.php' ?>