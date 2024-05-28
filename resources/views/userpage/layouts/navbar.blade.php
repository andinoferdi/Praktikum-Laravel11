<nav class="main-nav">
    <!-- ***** Logo Start ***** -->
    <a href="index.html" class="logo">
        <img src="assets/images/logo.png" alt="" style="width: 158px;">
    </a>
    <!-- ***** Logo End ***** -->
    <!-- ***** Menu Start ***** -->
    <ul class="nav">
        <li><a href="index.html" class="active">Home</a></li>
        <li><a href="shop.html">Our Shop</a></li>
        <li><a href="product-details.html">Product Details</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        @if (Route::has('login'))
            @auth
                <li><a href="#" id="logout">Logout</a></li>
            @else
                <li><a href="/login">Login</a></li>
            @endauth
        @endif


    </ul>
    <a class='menu-trigger'>
        <span>Menu</span>
    </a>
    <!-- ***** Menu End ***** -->
</nav>
