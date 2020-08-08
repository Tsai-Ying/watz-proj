<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous"></script>
<script src="js/nav.js"></script>

<script>
    const cart_count = $('.cart_count');
    // const cart_short_list = $('.cart-short-list');

    $.get('cart-handle.php', function (data) {
        setCartCount(data);
    }, 'json');

    function setCartCount(data) {
        let count = 0;
        if (data && data.cart && data.cart.length) {
            for (let i in data.cart) {
                let item = data.cart[i];
                count += item['qty'];
                // cart_short_list.append(`<a class="dropdown-item"
                // href="#">${item.product_name} ${item.qty}</a>`)
            }
            cart_count.text(count);
        }
    }
</script>