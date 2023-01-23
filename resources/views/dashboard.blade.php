<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Heal The World</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="header">


        <div class="container-fluid">
            <div class="menu row">
                <div class="log col-lg-6">
                    <h1>HEAL THE WORLD</h1>
                    <p>You are not alone</p>
                </div>
                <div class="nav col-lg-6">
                    <nav>

                        <span>
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <span>
                            <i class="fa-solid fa-bell"></i>
                        </span>
                        <span>
                            <i class="fa-solid fa-user"></i>
                            <!-- <div class="profile-image">
                            </div> -->
                        </span>
                    </nav>
                </div>
            </div>
            <section class="contents">
                <div class="row-container">
                    <div class="col-lg-2 sidebar">
                        <div class="nav-item">
                            <a href="#"><span> <i class="fa-solid fa-users-rays"></i></span> Community</a>
                        </div>
                        <div class="nav-item">
                            <a href="#"><span><i class="fa-solid fa-blog"></i></span> My Post</a>
                        </div>
                        <div class="nav-item">
                            <a href="#"><span><i class="fa-solid fa-user-doctor"></i></span> Therapies</a>
                        </div>
                        <div class="nav-item">
                            <a href="#"> <span><i class="fa-solid fa-user"></i></span> Profile</a>
                        </div>
                        <div class="nav-item">
                            <a href="#"><span><i class="fa-solid fa-circle-info"></i></span> Help</a>
                        </div>

                    </div>
                    <div class="col-lg-10 body-content">
                        <div class="blog">
                            <div class="row">
                                <div class="col-lg-8">


                                    <div class="blog-box">
                                        <div class="head">
                                            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                                width="50" height="50" alt="">Mugisha Eric
                                        </div>
                                        <div class="content">
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                        </div>
                                        <div class="footer">

                                            <span> 12 &nbsp;<i class="fa-solid fa-comment"></i></span>

                                        </div>
                                    </div>
                                    <div class="blog-box">
                                        <div class="head">
                                            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                                width="50" height="50" alt="">Mugisha Eric
                                        </div>
                                        <div class="content">
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                        </div>
                                        <div class="footer">

                                            <span> 12 &nbsp;<i class="fa-solid fa-comment"></i></span>

                                        </div>
                                    </div>
                                    <div class="blog-box">
                                        <div class="head">
                                            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                                width="50" height="50" alt="">Mugisha Eric
                                        </div>
                                        <div class="content">
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                            this is post example and this is it
                                        </div>
                                        <div class="footer">

                                            <span> 12 &nbsp;<i class="fa-solid fa-comment"></i></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/5356469735.js" crossorigin="anonymous"></script>
</body>

</html>