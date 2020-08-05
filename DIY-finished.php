<?php require __DIR__ . '/__connect_db.php';
$pageName = 'DIY-finished';
?>
<?php include __DIR__ . '/__html_head.php' ?>
<link rel="shortcut icon" href="images/favicon.svg">
<style>
    .container {
        width: 100%;
        min-height: 100vh;
        position: relative;
        background-size: cover;
        background-image: url(images/BG2.svg);
        background-repeat: repeat-y;
    }

    .wrapper {
        width: 1200px;
        height: calc(100vh - 160px);
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .block {
        width: 500px;
        height: 500px;
        /* border: 1px solid red; */
        position: relative;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 100px 0 30px;
    }

    .img-bling {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .img-bling {
        position: absolute;
    }

    .img-pattern-watz {
        z-index: 1;
        width: 380px;
        height: 380px;
        object-fit: contain;
    }

    h2 {
        color: #03588C;
    }

    .btn {
        width: 480px;
        margin: 10px 0 40px;
        justify-content: space-between;
    }

    .btn-coral:hover, .btn-blue:hover {
    background: #0388A6;
    }

    .btn button {
        width: 230px;
    }

    footer {
        position: absolute;
        bottom: 0;
        z-index: 0;
    }

    @media screen and (max-width: 1200px) {
        .wrapper {
            width: 100vw;
            height: 100vh;
            margin-bottom: 20vh;
        }
    }

    @media screen and (max-width: 992px) {
        .wrapper {
            margin-bottom: 25vh;
        }
        .block {
            width: 50vw;
            height: 50vw;
        }

        .img-pattern-watz {
            width: 40vw;
            height: 40vw;
        }

        .btn {
            width: 280px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn button {
            width: 150px;
            margin-bottom: 10px;
        }
    }

    @media screen and (max-width: 576px) {
        .container {
            background-size: cover;
            background-image: url(images/BG-mobile2.svg);
            background-repeat: repeat-y;
        }

        .wrapper {
            margin-bottom: 15vh;
        }

        .block {
            width: 70vw;
            height: 70vw;
        }

        .img-pattern-watz {
            width: 60vw;
            height: 60vw;
        }

        .wrapper h2 {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .btn {
            width: 280px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn button {
            width: 150px;
            margin-bottom: 10px;
        }
    }
</style>

<div class="container flex">
    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>
        
    <div class="wrapper flex transition">
        <div class="block flex transition">
                <img class="img-bling transition" src="images/bling.svg" alt="">
                <img class="img-pattern-watz transition" src="images/pattern-watz.svg" alt="">
            </div>
            <h2 class="transition">恭喜完成專屬於你的WATZ襪子!</h2>
            <div class="btn flex transition">
                <button class="btn-blue">我還要修改</button>
                <button class="btn-coral">加入購物車</button>
            </div>
        </div>
    <?php include __DIR__ . '/__html_footer.php' ?>
</div>
<?php include __DIR__ . '/__scripts.php' ?>
<?php require __DIR__ . '/__html_foot.php' ?>