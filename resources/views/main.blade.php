<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unico</title>


    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="logo">
                <img src="../assets/logo.png" alt="" align="center">
    </div>

    <header>
        <nav>
        <input type="checkbox" id="check">
        <label for="check" class="hamburger-btn">
            <ion-icon name="menu-outline" class="open"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
        </label>
        <ul class="nav-list">
            <li><a href="{{ route('user.index') }}">User List</a></li>
            <li><a href="{{ route('postlogout') }}">Log Out</a></li>
        </ul>



        </nav>

    </header>

    <main>

        <div class="container">
        <div class="search">
            <input type="text" class="form-control" placeholder="Search" align="center">
            {{-- <div class="search-icon">
                <ion-icon name="search-outline"></ion-icon>
            </div>
            <div class="cancel-icon">
                <ion-icon name="close-circle-outline"></ion-icon>
            </div> --}}
            <div class="search-data"></div>
        </div>

        <div class="main-image">
            <img src="../assets/keramik.jpg" alt="">

        </div>

        <div class="main-menu">
            <a href=""><img src="../assets/card_giftcard_24pxsad.svg" alt="My Happy SVG" /><br>Material</a>
            <a href=""><img src="../assets/build_24px_outlined.svg" alt="My Happy SVG" /><br>Tools</a>
            <a href=""><img src="../assets/perm_data_setting_24px_outlined.svg" alt="My Happy SVG" /><br>Fitting</a>

        </div>
        <div class="main-menu1">

            <a href=""><img src="../assets/build_24px_outlined.svg" alt="My Happy SVG" /><br>Cheramic</a>
            <a href=""><img src="../assets/layers_24px_outlined.svg" alt="My Happy SVG" /><br>Acrylic</a>
            <a href=""><img src="../assets/category_24px_outlined.svg" alt="My Happy SVG" /><br>Other</a>


        </div>


        </div>
    </main>

    <footer>
        <div class="footer-content">
            <ul align="center">
                <li><a href=""><ion-icon name="home-outline"></ion-icon><br>Home</a></li>
              <li><a href=""><ion-icon name="cart-outline"></ion-icon><br>Cart</a></li>
               <li><a href="{{ route('user.detail') }}"><ion-icon name="person-outline"></ion-icon><br>Account</a></li></ul>




        </div>

    </footer>


    <script>

    </script>

    <script src="../assets/js/main.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
