<span id="a8sales"></span>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script>
    const orderNum = Math.random().toString(32).substring(2)
    a8sales({
        "pid": "s00000023284001",
        "order_number": orderNum,
        "currency": "JPY",
        "items": [{
            "code": "a8",
            "price": 10000,
            "quantity": 1
        }, ],
        "total_price": 10000,
    });
</script>