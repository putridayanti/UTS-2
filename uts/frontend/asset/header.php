<header class="header">
    <div class="flex">
        <a href="index.php" class="logo"></a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="view_products.php">Produk</a>
            <a href="about.php">tentang</a>
            <a href="contact.php">Contact</a>
        </nav>
    <div class="icons">
        <i class="bx bxs-user" id="user-btn"></i>
        <a href="wishlist.php" class="cart-btn"><i class="bx bx-heart"></i><sup>0</sup></a>
        <a href="cart.php" class="cart-btn"><i class="bx bx-cart-download"></i><sup>0</sup></i></a>
        <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
    </div>
    <div class="user-box">
        <p>username : <span><?php //echo $_SESSION['user_name']?></span></p>
        <p>email : <span><?php //echo $_SESSION['user_email']?></span></p>
        <a href="login.php" class="btn">Login</a>
        <a href="register.php" class="btn">Register</a>
        <form  method="POST">
            <button type="submit" name="logout" class="logout-btn">Logout</button>
        </form>
    </div>
    </div>
</header>