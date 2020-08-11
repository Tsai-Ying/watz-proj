<?php require __DIR__ . '/__connect_db.php';
$pageName = 'project summer';  // 這裡放你的pagename
?>
<?php include __DIR__ . '/__html_head.php' ?>

<!-- font-family: 'Josefin Sans', sans-serif; -->
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">


<style>
    .container {
        width: 100vw;
        min-height: 100vh;
        user-select: none;
    }

    .bg-left, .bg-right {
        width: calc(100vw / 2);
        height: 100vh;
        position: relative;
        z-index: -1;
    }

    .absolute {
        position: absolute;
    }

    .bg-blue, .bg-red {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .img-dot1 {
        width: 180px;
        top: 0;
        left: 80px;
        mix-blend-mode: multiply;
    }
    
    .img-text {
        width: 60px;
        top: 160px;
        left: 0;
        position: fixed;
        z-index: 1;
    }

    .img-pineapple {
        width: 460px;
        bottom: 0;
        left: -50px;
        mix-blend-mode: multiply;
    }

    .img-whiteline {
        width: 420px;
        top: 0;
        right: 0;
    }

    .wrapper {
        width: 1200px;
        justify-content: space-between;
        padding: 120px 0;
    }

    .btn-top {
        z-index: 1;
    }



    @media screen and (max-width: 1280px) {
        .wrapper {
            width: 950px;
            padding: 120px 20px;
        }
    }

    @media screen and (max-width: 992px) {
        .wrapper {
            width: 570px;
            padding: 120px 0;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

    }

    @media screen and (max-width: 576px) {
        .wrapper {
            width: 100vw;
            padding: 80px 0 0 0;
        }


    }
</style>


<div class="container flex">
    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>
    <div class="flex">
        <div class="bg-left">
            <img class="bg-blue" src="images/summer-bgblue.svg" alt="">
            <img class="img-dot1 absolute" src="images/summer-dot1.svg" alt="">
            <img class="img-pineapple absolute" src="images/summer-pineapple.svg" alt="">
            <img class="img-text fixed" src="images/summer-text.svg" alt="">
        </div>
        <div class="bg-right">
            <img class="bg-red" src="images/summer-bgred.svg" alt="">
            <img class="img-whiteline absolute" src="images/summer-whiteline.svg" alt="">
            <img class="img-orangeline absolute" src="images/summer-orangeline.svg" alt="">
            <img class="img-pinkpaint absolute" src="images/summer-pinkpaint.svg" alt="">
        </div>
    </div>

    <div class="wrapper flex transition">

    </div>
    <?php include __DIR__ . '/__html_footer.php' ?>
</div>
<?php include __DIR__ . '/__scripts.php' ?>

<script>
    /* // php 加入購物車

    const buy_btn = $('.buy_btn');

    buy_btn.click(function() {
        const p_item = $('.p_item');
        const sid = p_item.attr('data-sid');
        const qty = $('.qty').val();
        const sendObj = {
            action: 'add',
            sid,
            qty: qty
        }
        $.get('cart-handle.php', sendObj, function(data) {
            console.log(data);
            setCartCount(data);
        }, 'json');

        // alert(sid + ',' + qty)
        // 彈跳視窗
        $(".notice").addClass("animate__animated animate__flipInX animate__faster");
        $(".notice").addClass("success");
        setTimeout(function() {
            $(".notice").removeClass("success");
            $(".notice").removeClass("animate__animated animate__flipInX animate__faster");
        }, 800);
    }); */
</script>

<?php require __DIR__ . '/__html_foot.php' ?>