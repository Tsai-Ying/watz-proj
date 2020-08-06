<?php require __DIR__ . '/__connect_db.php';
$pageName = 'aboutWATZ';  // 這裡放你的pagename
?>
<?php include __DIR__ . '/__html_head.php' ?>

<!-- 自己另外的CSS插件 <link> 請放這邊 (nav.css及google fonts共用的不用放) -->

<style>
    body {
        background-size: cover;
        background-image: url(images/BG3.svg);
        background-repeat: repeat-y;
    }

    .container {
        overflow: none;
    }

    .nav {
        position: fixed;
    }

    .wrapper {
        width: 1200px;
        justify-content: space-between;
        margin-top: 120px;
        /* border: 1px solid gold; */
    }

    .block-left {
        width: 67%;
        /* border: 1px solid rgb(100, 248, 63); */
    }

    .block-right {
        width: 30%;
        /* border: 1px solid rgb(34, 220, 245); */
    }

    .block-fixed {
        width: 100%;
        right: calc(50vw - 600px);
        flex-direction: column;
        position: sticky;
        top: 120px;
    }

    @media screen and (max-width: 1200px) {
        .wrapper {
            width: 90vw;
        }
    }

    @media screen and (max-width: 992px) {
        .wrapper {
            flex-direction: column;
            justify-content: flex-start;
        }

        .container {
            overflow: hidden;
        }

        .block-left {
            width: 100%;
        }

        .block-right {
            width: 100%;
            margin-top: 30px;
        }
    }

    @media screen and (max-width: 576px) {
        .wrapper {
            margin-top: 80px;
        }
    }

    /* ------------------process------------------ */

    .buy-process {
        width: 100%;
        background-color: #ffffff;
        border-radius: 15px;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
    }

    .buy-process-frame {
        width: 90%;
        justify-content: space-between;
        /* border: 1px solid palevioletred; */
    }

    .each-process {
        width: 130px;
        /* height: 55px; */
        background-color: #F8F4EB;
        border-radius: 2px;
        margin: 20px 0;
        align-items: center;
        justify-content: center;
    }

    .each-process h3 {
        margin: 10px 0;
    }

    .each-process h6 {
        margin-left: 10px;
    }

    .each-process.here {
        background-color: #F2DE79;
    }

    @media screen and (max-width: 1200px) {
        .each-process {
            width: 120px;
        }
    }

    @media screen and (max-width: 992px) {
        .each-process {
            width: 22%;
        }

        .each-process h3 {
            margin: 10px;
        }

        .each-process h6 {
            margin: 0 5px;
        }
    }

    @media screen and (max-width: 576px) {
        .each-process {
            width: 22%;
            height: 70px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .each-process h3 {
            margin: 0px;
        }

        .each-process.first h6 {
            margin-right: 0;
        }

        .each-process h6 {
            /* margin-right: 0px; */
            text-align: center;
        }
    }

    /* -----------choose box------------- */

    .box-watzbox {
        /* width: 800px; */
        background-color: #ffffff;
        border-radius: 15px;
        margin-top: 30px;
        flex-direction: column;
        align-items: center;
        position: relative;
    }

    .box-watzbox-frame {
        width: 90%;
        margin: 40px 0;
        /* border: 1px solid pink; */
    }

    .box-watzbox-title h3 {
        color: #03588C;
        margin: 0 5px;
    }

    .box-watzbox-title img {
        width: 40px;
        transform: rotate(180deg);
        margin-right: 20px;
        transition: .5s;
    }

    .box-watzbox-title img.close {
        transform: rotate(0deg);
    }

    .box-watzbox h4 {
        color: #707070;
        margin-top: 20px;
    }

    .watzbox-choose {
        align-items: center;
        justify-content: space-evenly;
    }

    .img-watzbox img {
        width: 200px;
        opacity: .3;
        cursor: pointer;
    }

    .img-watzbox.active img {
        opacity: 1;
    }

    .img-watzbox:hover img {
        opacity: 1;
    }

    .button {
        width: 70px;
        height: 40px;
        border: 1px solid #F2DE79;
        border-radius: 2px;
        background-color: #ffffff;
        margin: 15px;
        color: #707070;
        outline: none;
        text-align: center;
        cursor: pointer;
    }

    .button.active {
        border-radius: 2px;
        background-color: #F2DE79;
    }

    .button:hover {
        background-color: #f2de79a6;
    }

    .step3 {
        width: 600px;
        opacity: 1;
        align-items: center;
        position: absolute;
        bottom: -90px;
        display: none;
    }

    .step3 img {
        width: 50px;
    }

    .step3 h4 {
        color: #FF9685;
    }

    .step3 h5 {
        color: #FF9685;
        display: none;
    }

    .step3.show {
        display: flex;
    }

    @media screen and (max-width: 1200px) {
        .img-watzbox img {
            width: 180px;
        }
    }

    @media screen and (max-width: 992px) {
        .img-watzbox img {
            width: 160px;
        }
    }

    @media screen and (max-width: 576px) {
        .img-watzbox img {
            width: 100px;
        }

        .button {
            margin: 10px;
        }

        .step3 img {
            width: 40px;
        }

        .step3 h4 {
            display: none;
        }

        .step3 h5 {
            display: block;
        }
    }

    /* -------------order list-------------- */

    .box-product {
        /* width: 800px; */
        background-color: #ffffff;
        border-radius: 15px;
        margin-top: 30px;
        flex-direction: column;
        align-items: center;
    }

    .box-product-frame {
        width: 90%;
        margin: 30px 0;
        /* border: 2px solid #be5656; */
        flex-direction: column;
        align-items: center;
        justify-content: start;
    }

    .eachsock-list {
        width: 100%;
        align-items: center;
        justify-content: space-between;
        border-bottom: 2px solid #E2E2E2;
        /* border: 1px solid orange; */
        margin: 20px 0;
    }

    .boxChooseDetail {
        display: none;
    }

    .boxChooseDetail.addInBox {
        display: flex;
    }

    .add-box-frame {
        width: 25px;
        height: 25px;
    }

    .add-box {
        width: 25px;
        height: 25px;
        border: 2px solid #F2DE79;
        cursor: pointer;
        /* flex-direction: column; */
        align-items: center;
        justify-content: center;
        display: none;
    }

    .add-box.show {
        display: flex;
    }

    .add-box p {
        font-weight: 900;
        font-size: 1.2rem;
        line-height: 21px;
        letter-spacing: 0;
        color: #F2DE79;
        cursor: pointer;
    }

    .remove-box {
        width: 25px;
        height: 25px;
        border: 2px solid #F2DE79;
        cursor: pointer;
        /* flex-direction: column; */
        align-items: center;
        justify-content: center;
    }

    .remove-box.show {
        opacity: 1;
    }

    .remove-box p {
        font-weight: 900;
        font-size: 1.2rem;
        line-height: 21px;
        letter-spacing: 0;
        color: #F2DE79;
        cursor: pointer;
    }

    .box-product .line {
        width: 90%;
        border-top: 2px solid #E2E2E2;
    }

    .img-socks {
        width: 110px;
        margin-bottom: 5px;
    }

    .img-socks img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-detail {
        width: 75%;
        height: 100px;
        justify-content: space-between;
        /* border: 1px solid green; */
    }

    .sock-name {
        width: 30%;
        flex-grow: 1;
        flex-direction: column;
        justify-content: space-between;
    }

    .socks-amount-choose {
        width: 70%;
        align-items: flex-end;
        justify-content: space-evenly;
    }

    .quantity-choose {
        width: 100px;
        height: 30px;
        border: 1px solid black;
        align-items: center;
        justify-content: space-between;
    }

    .minus,
    .plus {
        width: 30px;
        height: 25px;
        border-radius: 4px;
        text-align: center;
        cursor: pointer;
    }

    .quantity-input {
        height: 25px;
        width: 40px;
        text-align: center;
        font-size: 14px;
        border: 1px solid transparent;
        border-radius: 2px;
        outline: none;
    }

    .remove {
        width: 20px;
        height: 20px;
        background: url(images/remove.svg);
        cursor: pointer;
    }

    @media screen and (max-width: 1200px) {
        .img-socks {
            width: 90px;
        }

        .quantity-choose {
            width: 80px;
        }
    }

    @media screen and (max-width: 992px) {
        .product-detail {
            height: 90px;
        }
    }

    @media screen and (max-width: 576px) {
        .img-socks {
            width: 70px;
        }

        .sock-name {
            width: 60%;
        }

        .product-detail {
            width: 60%;
            height: 125px;
            flex-direction: column;
        }

        .socks-amount-choose {
            width: 95%;
            margin: 10px 0;
            justify-content: space-between;
        }

        .quantity-choose {
            width: 70px;
        }
    }

    /* --------------right fix part------------- */
    /* --------------box-shipping------------- */
    .shipping-shoose {
        /* width: 350px; */
        background-color: #ffffff;
        border-radius: 15px;
        flex-direction: column;
        align-items: center;
        margin-bottom: 30px;
    }

    .shipping-shoose-frame {
        width: 80%;
        margin: 20px 0px;
        flex-direction: column;
        align-items: flex-start;
    }

    .shipping-shoose h3 {
        color: #03588C;
    }

    .shipping-shoose p {
        color: #FF9685;
        text-decoration: underline;
    }

    .shipping-btn {
        width: 100%;
    }

    .conv-store {
        width: 100px;
    }

    @media screen and (max-width: 1200px) {
        .shipping-shoose-frame {
            width: 90%;
        }
    }

    @media screen and (max-width: 992px) {
        .shipping-shoose {
            margin: 0;
            border-radius: 15px 15px 0 0;
            margin-bottom: 0px;
        }
    }

    /* --------------total-price------------- */
    .total-price {
        background-color: #ffffff;
        border-radius: 15px;
        flex-direction: column;
        align-items: center;
    }

    .total-price-frame {
        width: 90%;
        flex-direction: column;
        align-items: center;
    }

    .total-price h3 {
        color: #03588C;
        margin: 30px;
        align-self: flex-start;
    }

    .coupon {
        width: 90%;
        align-items: center;
        justify-content: center;
    }

    .coupon input {
        width: 75%;
        height: 40px;
        border: 1px solid #F2DE79;
        border-radius: 2px 0 0 2px;
        outline: none;
    }

    .coupon .button {
        height: 40px;
        margin: 0;
        background-color: #F2DE79;
        border-radius: 0 2px 2px 0;
    }

    .coupon button:hover {
        background-color: #03588C;
        border: 1px solid #03588C;
        color: #ffffff;
    }

    .total-price-detail {
        width: 90%;
        margin: 30px 0;
        /* border: 1px solid blue; */
        flex-direction: column;
    }

    .total-price ul li {
        width: 100%;
        height: 35px;
        justify-content: space-between;
        /* border: 1px solid yellowgreen; */
    }

    .line {
        height: 1px;
        border-top: 2px solid #E2E2E2;
        margin-bottom: 10px;
    }

    .btn-pay {
        width: 180px;
        height: 40px;
        border: none;
        background-color: #FF9685;
        color: #ffffff;
        margin-bottom: 30px;
        outline: none;
        cursor: pointer;
    }

    .btn-pay:hover {
        background-color: #0388A6;
    }

    footer {
        margin-top: 50px;
    }

    @media screen and (max-width: 1200px) {
        .coupon input {
            width: 100%;
        }
    }

    @media screen and (max-width: 992px) {
        .total-price {
            border-radius: 0 0 15px 15px;
        }

        .total-price h3 {
            margin: 10px 0px 20px 30px;
        }
    }

    @media screen and (max-width: 576px) {}
</style>

<div class="container flex">
    <!-- 如果container有其它class要自己加上 -->

    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <div class="wrapper flex" action="">
        <div class="block-left">
            <div class="buy-process flex">
                <ul class="buy-process-frame flex">
                    <li class="each-process first here flex">
                        <h3></h3>01</h3>
                        <h6>確認訂單<br>及運送方式</h6>
                    </li>
                    <li class="each-process flex">
                        <h3>02</h3>
                        <h6>填寫<br>訂購資料</h6>
                    </li>
                    <li class="each-process flex">
                        <h3>03</h3>
                        <h6>付款</h6>
                    </li>
                    <li class="each-process flex">
                        <h3>04</h3>
                        <h6>訂單完成</h6>
                    </li>
                </ul>
            </div>
            <div class="box-watzbox flex">
                <div class="box-watzbox-frame">
                    <div class="box-watzbox-title flex">
                        <img id="open-btn" src="images/arrow-top.svg" alt="">
                        <h3>客製你的WATZ box</h3>
                    </div>
                    <div class="hide-choose-box">
                        <h4>Step1 想要什麼包裝呢?</h4>
                        <ul class="watzbox-choose flex" id="">

                            <li class="img-watzbox">
                                <img class="transition" src="images/watzbox1-1.png" alt="">
                            </li>
                            <li class="img-watzbox">
                                <img class="transition" src="images/watzbox2-1.png" alt="">
                            </li>
                            <li class="img-watzbox">
                                <img class="transition" src="images/watzbox3-1.png" alt="">
                            </li>
                        </ul>
                        <h4>Step2 想放幾雙襪子呢?</h4>
                        <div class="pair-choose">
                            <button data-val="3" class="button pairBtns" type="button" href="#jdhfkj">3雙</button>
                            <button data-val="6" class="button pairBtns" href="#">6雙</button>
                            <button data-val="8" class="button pairBtns" href="#">8雙</button>
                        </div>
                        <div class="eachsock-list boxChooseDetail flex " id="boxChooseDetail">
                            <div class="remove-box removeBox flex">
                                <p>-</p>
                            </div>
                            <div class="img-socks"><img src="images/yellowline-01.jpg" alt=""></div>
                            <div class="product-detail flex">
                                <div class="sock-name flex">
                                    <h4>偶素襪子</h4>
                                    <div>
                                        <h6>中長襪</h6>
                                        <h6>22-25cm</h6>
                                        <h6>材質:100%純棉</h6>
                                    </div>
                                </div>
                                <div class="socks-amount-choose flex">
                                    <div class="quantity-choose flex">
                                        <span class="minus">-</span>
                                        <input class="quantity-input" type="text" value="1" />
                                        <span class="plus">-</span>
                                    </div>
                                    <h4>NT $180</h4>
                                    <span class="remove"></span>
                                </div>
                            </div>
                        </div>
                        <div class="step3 flex" id="step3">
                            <img src="images/dotted-line.svg" alt="">
                            <h4>Step3 請勾選3雙襪子到您的包裝盒裡</h4>
                            <h5>Step3 請勾選3雙襪子到<br>您的包裝盒裡</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-product flex">
                <ul class="box-product-frame flex">
                    <?php foreach ($_SESSION['cart'] as $i) : ?>
                        <li class="eachsock-list eachSocksList flex p_item" data-sid="<?= $i['sid'] ?>" data-price="<?= $i['price'] ?>" data-quantity="<?= $i['qty'] ?>">

                            <div class="add-box-frame">
                                <div class="add-box addBox flex">
                                    <p>+</p>
                                </div>
                            </div>
                            <div class="img-socks"><img src="images/product/<?= $i['img_ID'] ?>-1.jpg" alt=""></div>
                            <div class="product-detail flex">
                                <div class="sock-name flex">
                                    <h4><?= $i['product_name'] ?></h4>
                                    <div>
                                        <h6><?= $i['detail'] ?></h6>
                                    </div>
                                </div>
                                <div class="socks-amount-choose flex">
                                    <div class="quantity-choose flex">
                                        <span class="minus">-</span>
                                        <input class="quantity-input qty" type="text" value="1" />
                                        <span class="plus">+</span>
                                    </div>
                                    <h4 class="sub-total"></h4>
                                    <span class="remove remove-item"></span>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="block-right ">
            <div class="block-fixed flex">
                <div class="shipping-shoose flex">
                    <div class="shipping-shoose-frame flex">
                        <h3>寄送方式</h3>
                        <div class="shipping-btn flex">
                            <button class="button ShipBtn" href="#">宅配</button>
                            <button class="button conv-store ShipBtn" href="#">超商取貨</button>
                        </div>
                        <p>只差60元即享1000元免運！</p>
                    </div>
                </div>
                <div class="total-price flex">
                    <h3>結帳金額</h3>
                    <div class="total-price-frame flex">

                        <div class="coupon flex">
                            <input type="text" placeholder="輸入折扣代碼">
                            <button class="button">兌換</button>
                        </div>
                        <div class="total-price-detail flex">
                            <ul>
                                <li class="flex">
                                    <p>商品總計</p>
                                    <p id="productPrice"></p>
                                </li>
                                <li class="flex">
                                    <p>運費</p>
                                    <p>60</p>
                                </li>
                                <li class="flex">
                                    <p>折扣</p>
                                    <p>-20</p>
                                </li>
                                <div class="line"></div>
                                <li class="flex">
                                    <h4>結帳金額</h4>
                                    <h4 id="totalPrice"></h4>
                                </li>
                            </ul>
                        </div>
                        <?php if (isset($_SESSION['member'])) : ?>
                            <button class="btn-pay" onclick="javascript:location.href='<?= WEB_ROOT ?>/cart-payment.php?id=<?= $row['id'] ?>'">前往結帳</button>
                        <?php else : ?>
                            <button class="btn-pay" onclick="">前往結帳</button>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/__html_footer.php' ?>

<?php include __DIR__ . '/__scripts.php' ?>

<script>
    $(document).ready(function() {
        $('.minus').click(function() {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function() {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });

    $(".ShipBtn").click(function() {
        $(this).toggleClass('active')
            .siblings().removeClass('active');
    });

    $('.img-watzbox').click(function() {
        $(this).toggleClass('active')
            .siblings().removeClass('active');
    });


    $(document).ready(function() {
        $(".hide-choose-box").hide();
        $(".box-watzbox-title").click(function() {
            $(".hide-choose-box").slideToggle()
            $('#open-btn').toggleClass('close');
            $('.step3').removeClass('show');
            $('.add-box').removeClass('show');
        });
    });


    //襪子選擇而退出選項//
    const pairBtns = $('.pairBtns');

    pairBtns.click(function() {
        const me = this;
        pairBtns.each(function() {
            if (this !== me) {
                $(this).removeClass('active');
            }
        });
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.step3').addClass('show');
            $('.add-box').addClass('show');
        } else {
            $('.step3').removeClass('show');
            $('.add-box').removeClass('show');
        }

    });


    $('.addBox').click(function() {
        $('.boxChooseDetail').addClass('addInBox');
        $(".eachSocksList").css("display", "none");
    });
    $('.removeBox').click(function() {
        $('.boxChooseDetail').removeClass('addInBox');
        $(".eachSocksList").css("display", "flex");
    })



// php
    const dallorCommas = function(n) {
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    };

    function prepareCartTable() {
        $p_items = $('.p_item');
        let total = 0;

        if (!$p_items.length && $('#totalPrice').length) {
            // location.href = 'product-list.php';
            location.reload();
            return;
        }
        $p_items.each(function() {
            const sid = $(this).attr('data-sid');
            const price = $(this).attr('data-price');
            const quantity = $(this).attr('data-quantity');

            $(this).find('.price').text('NT $' + dallorCommas(price));
            $(this).find('.qty').val(quantity);
            $(this).find('.sub-total').text('$ ' + dallorCommas(quantity * price));
            total += quantity * price;
            $('#productPrice').text('NT $' + dallorCommas(total));
            $('#totalPrice').text('NT $' + dallorCommas(total-60-20));

        })
    }

    prepareCartTable();

    const qty_sel = $('.qty');
    qty_sel.on('change', function() {
        const p_item = $(this).closest('.p_item');
        const sid = p_item.attr('data-sid');
        // alert(sid +', '+ $(this).val() )
        const sendObj = {
            action: 'add',
            sid: sid,
            quantity: $(this).val()
        }
        $.get('cart-handle.php', sendObj, function(data) {
            setCartCount(data); // navbar
            p_item.attr('data-quantity', sendObj.quantity);
            prepareCartTable();
        }, 'json');
    });

    $('.remove-item').on('click', function() {
        const p_item = $('.p_item');
        const sid = p_item.attr('data-sid');
        const sendObj = {
            action: 'remove',
            sid: sid
        }
        $.get('cart-handle.php', sendObj, function(data) {
            setCartCount(data); // navbar
            p_item.remove();
            prepareCartTable();
        }, 'json');

    });

    const cart_count = $('.cart-count');  // span tag
    const cart_short_list = $('.cart-short-list');

    $.get('cart-handle.php', function (data) {
        setCartCount(data);
    }, 'json');

    function setCartCount(data) {
        let count = 0;
        if (data && data.cart && data.cart.length) {
            for (let i in data.cart) {
                let item = data.cart[i];
                count += item.quantity;
                cart_short_list.append(`<a class="dropdown-item"
                href="#">${item.bookname} ${item.quantity}</a>`)
            }
            cart_count.text(count);
        }
    }
</script>

<?php require __DIR__ . '/__html_foot.php' ?>