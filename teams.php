<!DOCTYPE html>
<head>
    <title>Teams</title>
    <link rel="icon" href="f1 logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

<style>
    .flip-card {
  
  padding-left: 250px;
  width: 800px;
  height: 350px;
  perspective: 1000px;
}

.flip-card-inner {
  position: absolute;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(-180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  overflow: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  
  color: black;
}

.flip-card-back {
  
  
  transform: rotateY(180deg);
}

.container img{
    display:block;
    border: 0.5px solid black;
    object-fit: scale-down;
}

.flip-card-back .card-group .card img{
    display:flex;
    border: 0.5px solid black;
    object-fit: cover;
}


</style>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="index.php"><img src="f1 logo.png" width="40" height="30" class="d-inline-block align-top mx-2">Formula 1</a>
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
            <a class="nav-link text-light" href="meme.php">Meme</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="show_faq.php">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  
<br>

<div class="container-fluid">

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <div class="card">
      <img src="f1_images/alfa_romeo.png" alt="Avatar" width="128px" height="220px" class="card-img-top">
       <div class="card-body">
        <h5 class="card-title">Alfa Romeo F1 Team ORLEN</h5>
        <p class="card-text">Team Chief: Frédéric Vasseur</p>
        
        <p class="card-text">Constructors Championship: N/A</p>
       </div>
    </div>
    </div>
    
    
    
    <!-- card back -->
      <div class="flip-card-back">

                <div class="card-group">
            <!-- card1 -->
                        <div class="card">
                        <img src="f1_images/bottas_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Name:Valtteri Bottas</h5>
                                    <p class="card-text">Country: Finland</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                </div>
                        </div>
                    <!-- card 2 --->
                    <div class="card">
                    <img src="f1_images/zhou_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top" style="float:right;">
                            <div class="card-body">
                                <h5 class="card-title">Name: Zhou Guanyu</h5>
                                <p class="card-text">Country: China</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                            </div>
                    </div>
            
            </div>
    </div>
  </div>
</div>
<!-- end of container 1-->
</div>
<br>
<!-- team 2 -->
<div class="container-fluid">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <div class="card">
      <img src="f1_images/alphatauri.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top" style="object-fit: contain;">
       <div class="card-body">
        <h5 class="card-title">	Scuderia AlphaTauri</h5>
        <p class="card-text">Team Chief: Franz Tost</p>
        
        <p class="card-text">Constructors Championship: N/A</p>
       </div>
    </div>
    </div>
    
    
    
    <!-- card back -->
      <div class="flip-card-back">

                <div class="card-group">
            <!-- card1 -->
                        <div class="card">
                        <img src="f1_images/gasly_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Name:Pierre Gaslys</h5>
                                    <p class="card-text">Country: France</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                </div>
                        </div>
            
            <!-- card 2 --->
                    <div class="card">
                    <img src="f1_images/yuki_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Name: Yuki Tsunoda</h5>
                                <p class="card-text">Country: Japan</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                            </div>
                    </div>
            
            </div>
    </div>
  </div>
</div>

<!-- end of container2 -->
</div>

<br>
<!-- team 3 -->
<div class="container-fluid">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <div class="card" style="width:800px; height:170px;">
      <img src="f1_images/alphine.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top mx-auto d-block" style="object-fit: contain;">
       <div class="card-body">
        <h5 class="card-title">	BWT Alpine F1 Team</h5>
        <p class="card-text">Team Chief: Otmar Szafnauer</p>
        
        <p class="card-text">Constructors Championship: 2</p>
       </div>
    </div>
    </div>
    
    
    
    <!-- card back -->
      <div class="flip-card-back">

                <div class="card-group">
            <!-- card1 -->
                        <div class="card">
                        <img src="f1_images/alonso_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Name:Fernando Alonso</h5>
                                    <p class="card-text">Country: Spain</p>
                                    <p class="card-text">Driver's Championship: 2</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                </div>
                        </div>
            
            <!-- card 2 --->
                    <div class="card">
                    <img src="f1_images/ocon_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Name: Esteban Ocon</h5>
                                <p class="card-text">Country: France</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                            </div>
                    </div>
            
            </div>
    </div>
  </div>
</div>

<!-- end of container3 -->
</div>

<br>
<!-- team 4 -->
<div class="container-fluid">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <div class="card">
      <img src="f1_images/aston_martin.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top" style="object-fit: cover;">
       <div class="card-body">
        <h5 class="card-title">Aston Martin Aramco Cognizant F1 Team</h5>
        <p class="card-text">Team Chief: Mike Krack</p>
        
        <p class="card-text">Constructors Championship: N/A</p>
       </div>
    </div>
    </div>
    
    
    
    <!-- card back -->
      <div class="flip-card-back">

                <div class="card-group">
            <!-- card1 -->
                        <div class="card">
                        <img src="f1_images/vettel_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Name:Sebastian Vettel</h5>
                                    <p class="card-text">Country: Germany</p>
                                    <p class="card-text">Driver's Championship: 4</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                </div>
                        </div>
            
            <!-- card 2 --->
                    <div class="card">
                    <img src="f1_images/stroll_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Name: Lance Stroll</h5>
                                <p class="card-text">Country: Canada</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                            </div>
                    </div>
            
            </div>
    </div>
  </div>
</div>

<!-- end of container4 -->
</div>

<br>
<!-- team 5 -->
<div class="container-fluid">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <div class="card">
      <img src="f1_images/ferrari.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
       <div class="card-body">
        <h5 class="card-title">	Scuderia Ferrari</h5>
        <p class="card-text">Team Chief: Mattia Binotto</p>
        
        <p class="card-text">Constructors Championship: 16</p>
       </div>
    </div>
    </div>
    
    
    
    <!-- card back -->
      <div class="flip-card-back">

                <div class="card-group">
            <!-- card1 -->
                        <div class="card">
                        <img src="f1_images/leclerc_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Name:Charles Leclerc</h5>
                                    <p class="card-text">Country: Monaco</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                </div>
                        </div>
            
            <!-- card 2 --->
                    <div class="card">
                    <img src="f1_images/sainz_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Name: Carlos Sainz</h5>
                                <p class="card-text">Country: Spain</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                            </div>
                    </div>
            
            </div>
    </div>
  </div>
</div>

<!-- end of container5 -->
</div>

<br>
<!-- team 6 -->
<div class="container-fluid">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <div class="card">
      <img src="f1_images/haas.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
       <div class="card-body">
        <h5 class="card-title">Haas F1 Team</h5>
        <p class="card-text">Team Chief: Guenther Steiner</p>
        
        <p class="card-text">Constructors Championship: N/A</p>
       </div>
    </div>
    </div>
    
    
    
    <!-- card back -->
      <div class="flip-card-back">

                <div class="card-group">
            <!-- card1 -->
                        <div class="card">
                        <img src="f1_images/mick_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Name:Mick Schumacher</h5>
                                    <p class="card-text">Country: Germany</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                </div>
                        </div>
            
            <!-- card 2 --->
                    <div class="card">
                    <img src="f1_images/k-mag_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Name: Kevin Magnussen</h5>
                                <p class="card-text">Country: Denmark</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                            </div>
                    </div>
            
            </div>
    </div>
  </div>
</div>

<!-- end of container6 -->
</div>

<br>
<!-- team 7 -->
<div class="container-fluid">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <div class="card">
      <img src="f1_images/mclaren.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
       <div class="card-body">
        <h5 class="card-title">McLaren F1 Team</h5>
        <p class="card-text">Team Chief: Andreas Seidl</p>
        
        <p class="card-text">Constructors Championship: 8</p>
       </div>
    </div>
    </div>
    
    
    
    <!-- card back -->
      <div class="flip-card-back">

                <div class="card-group">
            <!-- card1 -->
                        <div class="card">
                        <img src="f1_images/daniel_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Name:Daniel Ricciardo</h5>
                                    <p class="card-text">Country: Australia</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                </div>
                        </div>
            
            <!-- card 2 --->
                    <div class="card">
                    <img src="f1_images/lando_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Name: Lando Norris</h5>
                                <p class="card-text">Country: United Kingdom</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                            </div>
                    </div>
            
            </div>
    </div>
  </div>
</div>

<!-- end of container7 -->
</div>

<br>
<!-- team 8 -->
<div class="container-fluid">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <div class="card">
      <img src="f1_images/mercedes.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
       <div class="card-body">
        <h5 class="card-title">	Mercedes-AMG Petronas F1 Team</h5>
        <p class="card-text">Team Chief: Toto Wolff</p>
        
        <p class="card-text">Constructors Championship: 8</p>
       </div>
    </div>
    </div>
    
    
    
    <!-- card back -->
      <div class="flip-card-back">

                <div class="card-group">
            <!-- card1 -->
                        <div class="card">
                        <img src="f1_images/lewis_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Name:Lewis Hamilton</h5>
                                    <p class="card-text">Country: United Kingdom</p>
                                    <p class="card-text">Driver's Championship: 7</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                </div>
                        </div>
            
            <!-- card 2 --->
                    <div class="card">
                    <img src="f1_images/albon_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Name: George Russell</h5>
                                <p class="card-text">Country: United Kingdom</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                            </div>
                    </div>
            
            </div>
    </div>
  </div>
</div>

<!-- end of container8 -->
</div>

<br>
<!-- team 9 -->
<div class="container-fluid">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <div class="card">
      <img src="f1_images/redbull.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
       <div class="card-body">
        <h5 class="card-title">	Oracle Red Bull Racing</h5>
        <p class="card-text">Team Chief: Christian Horner</p>
        
        <p class="card-text">Constructors Championship: 5</p>
       </div>
    </div>
    </div>
    
    
    
    <!-- card back -->
      <div class="flip-card-back">

                <div class="card-group">
            <!-- card1 -->
                        <div class="card">
                        <img src="f1_images/max_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Name:Max Verstappen</h5>
                                    <p class="card-text">Country: Netherland</p>
                                    <p class="card-text">Driver's Championship: 2</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                </div>
                        </div>
            
            <!-- card 2 --->
                    <div class="card">
                    <img src="f1_images/checo_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Name: Sergio Perez</h5>
                                <p class="card-text">Country: Mexico</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                            </div>
                    </div>
            
            </div>
    </div>
  </div>
</div>

<!-- end of container9 -->
</div>

<br>
<!-- team 10 -->
<div class="container-fluid">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <div class="card">
      <img src="f1_images/williams.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
       <div class="card-body">
        <h5 class="card-title">	Williams Racing</h5>
        <p class="card-text">Team Chief: Jost Capito</p>
        
        <p class="card-text">Constructors Championship: 9</p>
       </div>
    </div>
    </div>
    
    
    
    <!-- card back -->
      <div class="flip-card-back">

                <div class="card-group">
            <!-- card1 -->
                        <div class="card">
                        <img src="f1_images/latifi_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Name:Nicholas Latifi</h5>
                                    <p class="card-text">Country: Canada</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                    <p class="card-text">Driver's Championship: N/A</p>
                                </div>
                        </div>
            
            <!-- card 2 --->
                    <div class="card">
                    <img src="f1_images/albon_profile.jpg" alt="Avatar" width="128px" height="220px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Name: Alexander Albon</h5>
                                <p class="card-text">Country: Thailand</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                                <p class="card-text">Driver's Championship: N/A</p>
                            </div>
                    </div>
            
            </div>
    </div>
  </div>
</div>

<!-- end of container10 -->
</div>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>



</body>
</html>
