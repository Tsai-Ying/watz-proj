<?php require __DIR__ . '/__connect_db.php';
$pageName = '';  // 這裡放你的pagename


$qs = [];
$perPage = 12;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate_id = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
// $search = isset($_GET['search']) ? $_GET['search'] : '';

$where = "WHERE 1";
// if ($cate_id) {
//     $where .= " AND `category_sid`=$cate_id ";
//     $qs['cate'] = $cate_id;
// }

$rows = [];
$totalPages = 0;
$t_sql = "SELECT COUNT(1) FROM `product` $where";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

if ($totalRows > 0) {
    $totalPages = ceil($totalRows / $perPage);
    if ($page < 1) {
        header('Location: product-list.php');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: product-list.php?page=' . $totalPages);
        exit;
    }
    $sql = sprintf("SELECT * FROM `product` %s LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
}

// $c_sql = "SELECT * FROM `categories` ";

// $cates = $pdo->query($c_sql)->fetchAll();
?>
<?php include __DIR__ . '/__html_head.php' ?>

<!--jquery-plugin-vegas  -->
<link rel="stylesheet" href="css/vegas.min.css">
<!--jquery-plugin-vegas  -->
<!-- <link rel="stylesheet" href="css/help.css"> -->

<style>
    /* -------------- */
    <?php include __DIR__ . '/product-helpcss.php' ?>body {
        background-size: cover;
        background-image: url("images/BG3.svg");
        background-repeat: repeat-y;
        /* overflow-x: hidden; */
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
        height: 70px;
        width: 70px;
        position: fixed;
        right: 3.5vw;
        top: 55vh;
        z-index: 21;
        background-color: #FF9685;
        border: white 5px solid;
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
            right: 3vw;
            top: 58vh;
            border: white 3px solid;
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
        width: 35px;
        height: 35px;
        align-items: center;
        justify-content: center;
        margin: 3px;
        position: relative;
    }

    .img-select-circle {
        width: 30px;
        height: 30px;
        position: absolute;
        opacity: 0;
    }

    .img-select-circle:hover {
        opacity: 1;
    }

    /* .color-active {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 1px solid #707070;
        } */

    .color-btn-box li button {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        align-items: center;
    }

    .btn-border {
        border: transparent;
    }

    .color-btn1 {
        background: #FF8B78;

    }

    .color-btn2 {
        background: #FFE45E;
    }

    .color-btn3 {
        background: #29A6C2;
    }

    .color-btn4 {
        background: #AADF3A;
    }

    .color-btn5 {
        background: #DFB5DF;
    }

    .color-btn6 {
        background: #A57E70;
    }

    .color-btn7 {
        background: #FFFFFF;
        border: 1px solid #707070;
    }

    .color-btn8 {
        background: #636363;
    }

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

    /* .type-active {
            background: #F2DE79;
           
        } */

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
        justify-content: space-between;
    }

    .single-product-box {
        width: 250px;
        /* height: 300px; */
        flex-direction: column;
        margin-bottom: 5px;
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
        height: 60px;
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

    .page-active {
        border-bottom: 0.5px solid #404040;
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

        .single-product-box {
            width: 40vw;
        }

        .product-top-img {
            width: 40vw;
            height: 48vw;
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
                        <h3>1. 你平常最常穿的襪子子長度?</h3>
                    </div>
                    <div class="box-bottom flex">
                        <div class="bottom-left flex goPrev"> <img class="" src="images/arrow-left.svg" alt="">
                        </div>
                        <form action="" class="bottom-right flex">
                            <div class="BR-left flex ">
                                <div class="radio-group flex ">
                                    <div class="block-img ">
                                        <label for="block2-btn1" class="cursor">
                                            <img src="images/test-lengthA.svg" alt="">
                                        </label>
                                    </div>
                                    <h5>隱形襪</h5>
                                    <div>
                                        <input type="radio" class="radio-input goNext cursor" id="block2-btn1" name="number">
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
                                        <input type="radio" class="radio-input goNext" id="block2-btn2" name="number">
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
                                        <input type="radio" class="radio-input goNext" id="block2-btn3" name="number">
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
                                        <input type="radio" class="radio-input goNext" id="block2-btn4" name="number">
                                        <label for="block2-btn4" class="radio-label">
                                            <span class="radio-button"></span>
                                        </label>
                                        </input>
                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>
                </li>
                <li class="block3 flex">
                    <div class="box-top flex">
                        <h3>2. 你穿著以下哪種服裝感到最自在？</h3>
                    </div>
                    <div class="box-bottom  flex">
                        <div class="bottom-left flex goPrev"> <img class="" src="images/arrow-left.svg" alt="">
                        </div>
                        <form action="" class="bottom-right flex">
                            <div class="BR-left flex">
                                <div class="radio-group flex block3-group">
                                    <div class="block-img">
                                        <label for="block3-btn1" class="cursor">
                                            <img src="images/test-wearA.png" alt="">
                                        </label>
                                    </div>
                                    <h5 class="block3-text">古著文青風</h5>
                                    <div>
                                        <input type="radio" class="radio-input goNext" id="block3-btn1" name="number">
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
                                        <input type="radio" class="radio-input goNext" id="block3-btn2" name="number">
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
                                        <input type="radio" class="radio-input goNext" id="block3-btn3" name="number">
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
                                        <input type="radio" class="radio-input goNext" id="block3-btn4" name="number">
                                        <label for="block3-btn4" class="radio-label">
                                            <span class="radio-button"></span>
                                        </label>
                                        </input>
                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>
                </li>
                <li class="block4 flex">
                    <div class="box-top flex">
                        <h3>3. 想穿去哪裡呢 ?</h3>
                    </div>
                    <div class="box-bottom  flex">
                        <div class="bottom-left flex goPrev"> <img class="" src="images/arrow-left.svg" alt="">
                        </div>
                        <form action="" class="bottom-right flex">
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

                        </form>
                    </div>
                </li>
                <li class="block5 flex">
                    <div class="box-top flex">
                        <h3>4. 穿衣色系偏向?</h3>
                    </div>
                    <div class="block5-box-bottom flex">
                        <div class="bottom-left flex goPrev"> <img class="" src="images/arrow-left.svg" alt="">
                        </div>
                        <form action="" class="block5-bottom-right flex">
                            <div class="BR-left flex">
                                <div class="radio-group flex">
                                    <div class="block-img block5-pic">
                                        <label for="block5-btn1" class="cursor ">
                                            <img src="images/test-colorA.svg" alt="">
                                        </label>
                                    </div>
                                    <h5>粉嫩色系</h5>
                                    <div>
                                        <input type="radio" class="radio-input" id="block5-btn1" name="number">
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
                                        <input type="radio" class="radio-input" id="block5-btn2" name="number">
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
                                        <input type="radio" class="radio-input " id="block5-btn3" name="number">
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
                                        <input type="radio" class="radio-input" id="block5-btn4" name="number">
                                        <label for="block5-btn4" class="radio-label">
                                            <span class="radio-button"></span>
                                        </label>
                                        </input>
                                    </div>

                                </div>
                            </div>
                        </form>
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
        </div>

    </div>
    <div class="wrapper flex">

        <div class="block flex">
            <div class="selector flex">
                <ul class="box-series">

                    <p>Series</p>

                    <li> <label class="cursor">
                            <input type="checkbox" name="series1" value="series1" class="cursor">夏日特輯</label></li>
                    <li> <label class="cursor"><input type="checkbox" name="series2" value="series2" class="cursor">群魔亂舞</label></li>
                    <li><label class="cursor"><input type="checkbox" name="series3" value="series3" class="cursor">灰姑娘的水晶襪</label></li>
                    <li> <label class="cursor"><input type="checkbox" name="series4" value="series4" class="cursor">素色流行</label></li>
                    <li> <label class="cursor"><input type="checkbox" name="series5" value="series5" class="cursor">幾何色塊</label></li>
                    <li> <label class="cursor"><input type="checkbox" name="series6" value="series6" class="cursor">美式風格</label></li>
                </ul>
                <div class="box-color">
                    <p>Color</p>
                    <ul class="color-btn-box flex">
                        <li class="flex"> <img class="img-select-circle transition active" src="images/select circle.svg" alt=""><button class="color-btn1 btn-border cursor"></button></li>
                        <li class="flex">
                            <img class="img-select-circle transition active" src="images/select circle.svg" alt=""><button class="color-btn2 btn-border cursor"></button></li>
                        <li class="flex">
                            <img class="img-select-circle transition active" src="images/select circle.svg" alt=""><button class="color-btn3 btn-border cursor"></button></li>
                        <li class="flex">
                            <img class="img-select-circle transition active" src="images/select circle.svg" alt=""><button class="color-btn4 btn-border cursor"></button></li>
                        <li class="flex">
                            <img class="img-select-circle transition active" src="images/select circle.svg" alt=""><button class="color-btn5 btn-border cursor"></button></li>
                        <li class="flex"> <img class="img-select-circle transition active" src="images/select circle.svg" alt=""><button class="color-btn6 btn-border cursor"></button></li>
                        <li class="flex"> <img class="img-select-circle transition active" src="images/select circle.svg" alt=""><button class="color-btn7 cursor"></button></li>
                        <li class="flex"> <img class="img-select-circle transition active" src="images/select circle.svg" alt=""><button class="color-btn8 btn-border cursor"></button></li>
                    </ul>
                </div>
                <div class="box-type ">
                    <p>Type</p>
                    <div class="type-box flex">
                        <div class="img-selector flex"><img src="images/selector.svg"></div>
                        <ul class="type-btn-box">
                            <li> <label class="type-active cursor"><input type="checkbox" name="type1" value="type1" class="cursor">長襪</label></li>
                            <li><label class="type-active cursor"><input type="checkbox" name="type2" value="type2" class="cursor">短襪</label></li>
                            <li> <label class="cursor"><input type="checkbox" name="type3" value="type3" class="cursor">踝襪</label></li>
                            <li> <label class="cursor"><input type="checkbox" name="type4" value="type4" class="cursor">隱形襪</label></li>
                        </ul>
                    </div>
                    <div class="select-check-btn cursor">確認</div>
                </div>

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
                                <h5>素色流行</h5>
                            </a>
                        </div>
                        <div class="right-select-rwd flex">
                            <button class="btn-mo-select flex">進階篩選</button>
                            <div class="right-select-box flex">
                                <select class="right-select flex">
                                    <option>最新上架</option>
                                    <option>熱門程度</option>
                                    <option>$低到高</option>
                                    <option>$高到低</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <ul class="product-box
                        flex">
                        <?php foreach ($rows as $r) : ?>

                            <li class="single-product-box flex">
                                <div class="product-top-img flex">
                                    <img src='images/product/<?= $r['img_ID'] ?>-1.jpg?' alt="">
                                </div>
                                <div class="product-text flex">
                                    <h5><?= $r['product_name'] ?></h5>
                                    <img src="images/color1.svg" alt="">
                                </div>
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

                <div class="pagination flex">
                    <div class="page-btn flex">
                        <span class="page-disabled"><i></i>PREV</span>
                        <a href="#">＜</a>
                        <span class="page-current page-active">1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <span>...</span>
                        <a href="#">7</a>
                        <a href="#">＞</a>
                        <a class="page-next" href="#">NEXT<i></i></a>
                    </div>
                </div>
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
                src: "images/product/asym06-1.jpg"
            },
            {
                src: "images/product/asym06-2.jpg"
            },
            {
                src: "images/product/asym10-1.jpg"
            },
            {
                src: "images/product/asym02-2.jpg"
            }
        ]
    });

    // ----------- selector  --------------
    $(document).ready(function() {
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



    });

    // --- selector hover ---
    // 系列

    // $(document).ready(function(){
    //   $("p").mouseenter(function(){
    //     $("p").css("background-color","yellow");
    //   });
    //   $("p").mouseleave(function(){
    //     $("p").css("background-color","lightgray");
    //   });
    //   $("#btn1").click(function(){
    //     $("p").mouseenter();
    //   });  
    //   $("#btn2").click(function(){
    //     $("p").mouseleave();
    //   }); 
    // });

    //----- 滑動 -------
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

        $("#blockPhoto ul").css("left", 0 - slideIndex * slideWidth)
    }

    slider()


    // ------- X close --------
    $(document).ready(function() {
        $('#close-btn').click(function() {
            $('.help-bg').fadeOut(500);
            return false;
        });
    });
    // ------------ 幫我搭 ---------------

    $(document).ready(function() {
        $('.help-bg').hide();
        $('#product-help-btn').click(function() {
            $('.help-bg').slideDown(800);
            return false;
        });
    });
</script>

<?php require __DIR__ . '/__html_foot.php' ?>