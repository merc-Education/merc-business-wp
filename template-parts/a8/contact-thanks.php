<span id="a8sales"></span>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script>
    const init = async () => {
        const url = new URL(window.location.href);
        const params = url.searchParams;
        const orderNum = params.get('ordernum') ? params.get('ordernum') : Math.random().toString(32).substring(2);
        await a8sales({
            "pid": "s00000023284001",
            "order_number": orderNum,
            "currency": "JPY",
            "items": [{
                "code": "a8",
                "price": 3000,
                "quantity": 1
            }, ],
            "total_price": 3000,
        });
    }
    init();
</script>