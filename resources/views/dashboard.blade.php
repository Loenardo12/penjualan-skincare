<!DOCTYPE html>
<html>

<head>
    <title>Beautiful Butterfly Skincare</title>
    <link rel="stylesheet" href="CSS/style2.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
</head>

<body>
    <div class="header">
        <img alt="Beautiful Butterfly Skincare Logo" height="50" src="assets/Logo-removebg-preview.png"
            width="150" />
        <div class="categories">
            <a href="/categories">
                Categories
                <i class="fa fa-chevron-down"> </i>
            </a>
        </div>
        <div class="search-bar">
            <input placeholder="Search" type="text" />
            <i class="fa fa-search"> </i>
        </div>
        <div class="icons">
            <a href="/mybag">
                <i class="fa fa-shopping-cart"> </i>
                <span class="cart-count"> (4) </span>
            </a>
            <a href="/loginuser">
                <i class="fa fa-user"> </i>
                <span> Masuk </span>
            </a>
        </div>
    </div>
    <div class="banner">
        <img alt="banner" src="assets/gambar.jpg" />
    </div>
    <div class="new-arrivals">
        <h2>NEW ARRIVALS</h2>


        <div class="products">
            <div class="product">

                @if (count($products) == 0)
                    <h3 style="text-align: center; color: red;">Data Kosong</h3>
                @endif
                @foreach ($products as $data)
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('img_products/' . $data->gambar) }}" alt="tidak ada gambar" />
                        </div>
                        <div class="card-content">
                            <h5>{{ $data->nama }}</h5>
                            <p class="description">{{ $data->deskripsi }}</p>
                            <p class="price">{{ $data->harga }}</p>
                           <form action="{{ url('/mybag/add') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $data->id_products }}">
                <button class="btn_belanja" type="submit">Beli</button>
            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</body>

</html>
