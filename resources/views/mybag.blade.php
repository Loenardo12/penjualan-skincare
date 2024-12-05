<html>

<head>
    <title>Beautiful Butterfly Skincare</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .header {
            background-color: #C1CFA1;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header img {
            height: 100px;
        }

        .header .search-bar {
            flex-grow: 1;
            margin: 0 20px;
            display: flex;
            align-items: center;
        }

        .header .search-bar input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .header .search-bar i {
            margin-left: -30px;
            color: #ccc;
        }

        .header .nav-links {
            display: flex;
            align-items: center;
        }

        .header .nav-links a {
            margin-left: 20px;
            text-decoration: none;
            color: #000;
        }

        .header .nav-links a i {
            margin-right: 5px;
        }

        .container {
            padding: 20px;
        }

        .product {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #fff;
            padding: 20px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        .product img {
            width: 100px;
            height: auto;
        }

        .product-details {
            flex-grow: 1;
            margin-left: 20px;
        }

        .product-price,
        .product-quantity,
        .product-total {
            text-align: center;
        }

        .product-quantity {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .product-quantity button {
            background-color: #ccc;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 50%;
        }

        .product-quantity input {
            width: 30px;
            text-align: center;
            border: 1px solid #ccc;
            margin: 5px 0;
            border-radius: 50%;
        }

        .checkout {
            text-align: right;
            margin-top: 20px;
        }

        .checkout button {
            background-color: #A5B68D;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img alt="Beautiful Butterfly Skincare Logo" height="50" src="assets/Logo-removebg-preview.png" width="150" />
        <div class="search-bar">
            <input placeholder="Search" type="text" />
            <i class="fas fa-search"> </i>
        </div>
        <div class="nav-links">
            <a href="/mybag">
                <i class="fas fa-shopping-bag"> </i>
                My Bag(0)
            </a>
            <a href="/profile">
                <i class="fas fa-user"> </i>
                My Account
            </a>
        </div>
    </div>
    <div class="container">
        @if (session('bag'))
            @foreach (session('bag') as $id => $details)
                <div class="product" data-id="{{ $id }}">
                    <img src="{{ asset('img_products/' . $details['image']) }}" alt="{{ $details['name'] }}"
                        width="100" height="100" />
                    <div class="product-details">
                        <p>{{ $details['name'] }}</p>
                    </div>
                    <div class="product-price">
                        <p>Harga Satuan</p>
                        <p>RP {{ $details['price'] }}</p>
                    </div>
                    <div class="product-quantity">
                        <p>Kuantitas</p>
                        <div>
                            <button class="minus-btn" data-id="{{ $id }}">-</button>
                            <input type="text" id="quantity-{{ $id }}" value="{{ $details['quantity'] }}"
                                readonly />
                            <button class="plus-btn" data-id="{{ $id }}">+</button>
                        </div>
                    </div>
                    <div class="product-total">
                        <p>Total Harga</p>
                        <p>RP {{ $details['price'] * $details['quantity'] }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p>Keranjang masih kosong.</p>
        @endif

        <div class="checkout">
            <button onclick="window.location.href='/checkout'">CHECKOUT</button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const minusButtons = document.querySelectorAll('.minus-btn');
            const plusButtons = document.querySelectorAll('.plus-btn');

            minusButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productId = this.dataset.id;
                    const quantityInput = document.getElementById('quantity-' + productId);
                    let currentQuantity = parseInt(quantityInput.value);

                    if (currentQuantity > 1) {
                        currentQuantity--;
                        quantityInput.value = currentQuantity;
                        updateTotalPrice(productId, currentQuantity);
                    }
                });
            });

            plusButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productId = this.dataset.id;
                    const quantityInput = document.getElementById('quantity-' + productId);
                    let currentQuantity = parseInt(quantityInput.value);

                    currentQuantity++;
                    quantityInput.value = currentQuantity;
                    updateTotalPrice(productId, currentQuantity);
                });
            });

            function updateTotalPrice(productId, quantity) {
                const priceElement = document.querySelector(
                    `.product[data-id="${productId}"] .product-price p:nth-of-type(2)`);
                const price = parseInt(priceElement.innerText.replace(/RP\s+/g, '').replace(/\./g, ''));

                const totalPriceElement = document.querySelector(
                    `.product[data-id="${productId}"] .product-total p:nth-of-type(2)`);
                totalPriceElement.innerText = 'RP ' + (price * quantity).toLocaleString();
            }
        });
    </script>
</body>

</html>
