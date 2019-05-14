<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Touch Em All</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">

    <!-- Styles -->
    <style>
        @media screen and (min-device-width: 1200px) and (max-device-width: 1600px) and (-webkit-min-device-pixel-ratio: 2) and (min-resolution: 192dpi) {
            body {
                text-align: center;
                font-family: 'Coda', cursive;
            }

            #header {
                background-image: url(/img/plate.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                color: whitesmoke;
                font-family: 'Coda', cursive;
                text-align: center;
                font-weight: 500;
                padding-bottom: 300px;
                padding-top: 100px;
            }

            .button {
                background-color: grey;
                color: whitesmoke;
                padding: 50px;
                padding-left: 100px;
                padding-right: 100px;
                font-weight: 500;
                border: 5px solid black;
            }

            #About {
                color: red;
                border: 5px dotted red;
                width: 100%;
            }

            #footer {
                background-color: grey;
                color: whitesmoke;
                text-align: center;
            }

            .link {
                color: whitesmoke;
                font-size: 40px;
            }
        }

        /*iPhone X ------*/

        @media only screen and (min-device-width: 375px) and (max-device-height: 812px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3) {
            .button {
                background-color: grey;
                color: whitesmoke;
                padding: 10px;
                padding-left: 10px;
                padding-right: 10px;
                font-weight: 500;
                border: 5px solid black;
            }
            body {
                text-align: center;
                font-family: 'Coda', cursive;
            }
            #About {
                color: red;
                border: 5px dotted red;
                width: 100%;
            }
            #header {
                background-image: url(/img/plate.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                color: whitesmoke;
                font-family: 'Coda', cursive;
                text-align: center;
                /* font-weight: 500;
                padding-bottom: 300px;
                padding-top: 100px; */
            }
            #footer {
                background-color: grey;
                color: whitesmoke;
                text-align: center;
            }
            .link {
                color: whitesmoke;
                font-size: 20px;
            }
        }

        @media only screen and (min-device-width: 375px) and (max-device-height: 812px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3) {
            .button {
                background-color: grey;
                color: whitesmoke;
                padding: 10px;
                padding-left: 10px;
                padding-right: 10px;
                font-weight: 500;
                border: 2px solid black;
            }
            body {
                text-align: center;
                font-family: 'Coda', cursive;
            }
            #About {
                color: red;
                border: 5px dotted red;
                /* width: 100%; */
            }
            #header {
                background-image: url(/img/plate.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                color: whitesmoke;
                font-family: 'Coda', cursive;
                text-align: center;
                font-weight: 500;
                padding-bottom: 10px;
                padding-top: 10px;
            }
            #footer {
                background-color: grey;
                color: whitesmoke;
                text-align: center;
            }
            .link {
                color: whitesmoke;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="jumbotron jumbotron-fluid" id="header">
        <div class="container">
            <h1 class="display-4">Touch Em All</h1>
            <p class="lead">The place to plan your jounrey around the MLB.</p>
        </div>
        <div class="row pt-5">
            <div class="col-4 pt-5">
                <a href="{{ route('register') }}" class="button">Sign Up</a>
            </div>
            <div class="col-4 pt-5">
                <a href="{{ route('login') }}" class="button">Sign In</a>
            </div>
            <div class="col-4 pt-5">
                <a href="/stadium-list" class="button">Guest</a>
            </div>
        </div>
    </div>

    {{--
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-6">
                <a href="#" class="button">Sign Up / Sign In</a>
            </div>
            <div class="col-6">
                <a href="#" class="button">Continue as Guest</a>
            </div>
        </div>
    </div> --}}

    <div class="container pt-5 pb-3" id="About">
        <div class="col-12">
            <h1>Our Story</h1>
            <h4>
                The idea for this site started like most with a simple conversation. My brother and I are both avid baseball fans and were
                discussing the parks he had visited over the last year. We both want to see each stadium at least once and
                I realized I'm falling behind quickly with his recent adventures. Since I only find out about the parks he
                has visited in our conversations the wheels started turning.
        </div>
        <div class="col-12">
            <h1>Our Mission</h1>
            <ul>
                <li>Provide a way to track your journey through the MLB</li>
                {{-- <li>Check in on others journey</li> --}}
                <li>Provide Stadium Cost Averages</li>
                {{-- <li>Interactions among avid fans and newcomers</li> --}}
                <li>Informative service to attract more fans to stadiums</li>
            </ul>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row" id="footer">
            <div class="col-12">
                <a href="#" class="link">How To Link</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>