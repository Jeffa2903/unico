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
                <br>List User
    </div>

    <header>
        <nav>
        <a href="{{ route('back') }}" class="back"> <ion-icon name="chevron-back-outline"></ion-icon></a>


        </nav>

    </header>

    <main>
        @foreach ($user as $data )
        <div class="container-user">
            <div class="foto-user">
                <img src="../assets/org.jpg" alt="">
            </div>
            <div class="info-user">
                <h5>{{ $data->firtsname }}{{ $data->lastname }}</h5>
                <h6>{{ $data->email }}</h6>
            </div>
           </div>
        @endforeach


    </main>

    <footer>
        <div class="footer-content">
            <ul>
                <li><a href="{{ route('home') }}"><ion-icon name="home-outline"></ion-icon><br>Home</a></li>
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
