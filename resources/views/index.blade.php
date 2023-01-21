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


        <div class="container">
            <div class=" row">
                <div class="log col-lg-6">
                    <h1>HEAL THE WORLD</h1>
                    <p>You are not alone</p>
                </div>
                <div class="nav col-lg-6">
                    <nav>
                        <!-- <span>
                            Home
                        </span>
                        <span>
                            How It Works
                        </span> -->
                        <span class="login">
                            Login
                        </span>
                        <span class="btn-borded">
                            Join Now
                        </span>
                    </nav>
                </div>
            </div>
            <div class='home'>
                <div class="row content">
                    <div class="text col-lg-6">
                        <h2>
                            You Have to improve
                            your mental health
                        </h2>
                        <p>Good mental health throughout life can increase resilience, helping protect against mental
                            illness and act as a buffer for normal stressors and hardships that everyone experiences</p>
                        <div class="btn-container">
                            <button class="btn-borded">
                                Get Appointment
                            </button>
                            <button class="btn-outlined">
                                Read More
                            </button>
                        </div>

                    </div>
                    <div class="image col-lg-6">
                        <img src="./storage/images/img.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>