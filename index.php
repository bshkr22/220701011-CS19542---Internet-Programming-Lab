<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background: #000;
            color: #fff;
        }

        .center {
            display: block;
            margin: 0 auto;
            width: 100%;
            max-height: 600px;
            object-fit: cover;
        }

        .image-container {
            position: relative;
            width: 100%;
            height: 600px;
            overflow: hidden;
        }

        .image-title {
            position: absolute;
            top: 50%;  /* Start at the center */
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 3rem;
            text-align: center;
            z-index: 10;
            transition: top 1s ease;  /* Smooth transition */
        }

        .content {
            padding: 20px 20px; /* Reduced padding by half */
            margin-top: -40px; /* Move text a bit up */
            max-width: 900px;
            margin: 0 auto;
        }

        .content p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
    </style>

    <title>Formula 1</title>
    <link rel="icon" href="f1 logo.png">
</head>
<body>
    <div class="container-fluid">
        <!-- Name Bar -->
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand" href="index.php">
                <img src="fia_logo.png" width="50" height="40" alt="" class="d-inline-block align-top mx-2">
                Fédération Internationale de l'Automobile
            </a>
            <form class="form-inline">
                <input type="button" class="btn btn-danger my-2 my-sm-0" onclick="login_page()" value="Login"/>
                <input type="button" class="btn btn-danger my-2 my-sm-0" onclick="register_page()" value="Register" />
            </form>
        </nav>  
    </div>

    <div class="abi bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="index.php">
                    <img src="f1 logo.png" width="40" height="30" class="d-inline-block align-top mx-2">Formula 1
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="true" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="teams.php">Teams</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="race_details.php">Race</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="f1_slang.php">Terminologies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="table.php">Race outcomes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#" id="for_fun">Meme</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="show_faq.php">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>

        <div class="image-container">
            <h3 class="image-title" id="scroll-title">Formula 1 Explained</h3>
            <img src="f1-linup.jpg" class="center" alt="Formula 1 Race" title="Formula 1 Race">
        </div>

        <div class="content">
            <p>Formula One (F1) is a series of races held at different venues around the world, featuring the fastest open-wheel, open-cabin, single-seated, four-wheeled autos in the world. There have been a few years when even six-wheeled cars participated in F1.</p>
            <p>The word <b>Formula</b>, included in the name, refers to a set of rules that the constructors of the car, its mechanics, and the drivers have to strictly follow during the tenure that they are members of F1.</p>
            <p>The word <b>One</b> comes from the grading FIA issues to the racing tracks, the approved cars, and the drivers’ licenses. The <i>One</i> is also to distinguish F1 from street car racing and also to indicate that it is the ultimate in formula racing.</p>
            <p>Formula One is governed by the Fédération Internationale de l’Automobile (FIA), owned by the Formula One Group. The organization amends, alters, and introduces rules to Formula One to ensure the safety of participants, promote fair play, and ensure that spectators get a good experience.</p>
            <p>There are 10 teams and 20 drivers in total who take part in the World Constructors Championship (WCC) and World Drivers Championship (WDC), respectively, aiming to be crowned the fastest in the world.</p>
            <p>The first world championship race was held in 1950 at Silverstone in the United Kingdom.</p>
            <p align="center">And this sums up F1 in general.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script> 

    <script>
        function login_page(){
            window.location.replace("http://localhost:8080/login.php");
        }

        function register_page(){
            window.location.replace("http://localhost:8080/register.php");
        }

        $(document).ready(function(){
            $("#for_fun").click(function(){
                alert("login before you see the meme page");
                window.location.replace("http://localhost:8080/login.php");
            });

            // Scroll animation for the title
            $(window).scroll(function() {
                var scrollPosition = $(this).scrollTop();
                var newTop = Math.min(50 + scrollPosition / 2, 95) + '%';  // Adjusted to move lower
                $('#scroll-title').css('top', newTop);
            });
        });
    </script>
</body>
</html>
