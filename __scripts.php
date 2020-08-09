<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous"></script>
<script src="js/nav.js"></script>

<script>
    const cart_count = $('.cart_count');
    const cart_short_list = $('.cart-short-list');

    //將資料送到api取得結果

    $.get('cart-handle.php', function(data) {
        setCartCount(data); //將取得的結果送到function處理
    }, 'json');


    function setCartCount(data) {
        let count = 0;
        cart_short_list.empty(); //先清空再append新的內容
        if (data && data.cart && data.cart.length) {
            for (let i in data.cart) {
                let item = data.cart[i];
                let subtotal = item['price'] * item['qty']
                count += item['qty'];
                cart_short_list.append(`
                <div class="nav-eachsock-list flex">
                    <div class="nav-img-product">
                        <img src="images/product/${item['img_ID']}-1.jpg" alt="">
                    </div>
                    <div class="nav-socks-nameNprice flex">
                        <h5 class="nav-socks-title">${item['product_name']}</h5>
                        <div class="qtyNprice flex">
                        <h5>× ${item['qty']}</h5>
                        <h5 class="nav-socks-price">NT$ ${subtotal}</h5>
                        </div>
                    </div>
                </div>`)
            }
            cart_count.css('background', '#FF9685');
            cart_count.text(count);

        } else {
            cart_short_list.append(`
            <div class="nav-icon-empty-cart>    
                <img class="img-empty-cart" src="images/cart-empty.svg" alt="">
                <h3 class="nav-empty-cart">購物車空空的。</h3>
            </div>`)

            cart_count.css('background', 'transparent');
            cart_count.text('');
        }
    }

    $('.a-cart').click(function() {
        $('.box-cart-short').toggleClass('show')
    })
</script>