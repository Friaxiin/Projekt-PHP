<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid height">
        <div class="row height10 nav">
            <header class="col-7">
                <a href="index.php"><img src="" alt="logo"></a>
                <a href="index.php">Nazwa serwisu</a>
            </header>
            <nav class="col-5">
                <div class="dropdown">
                    <a href="#"><i class='bx bx-home-alt-2'></i></a>
                    <i class='bx bx-user-circle userBtn' id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="ProfilUzytkownika.php"><button class="dropdown-item" type="button">Mój profil</button></li>
                        <li><a href="Login.php"><button class="dropdown-item" type="button">Zaloguj się</button></li>
                    </ul>

                    <a href="Wyszukiwarka.php"><i class='bx bx-search-alt-2'></i></a>
                    <a href="ProfilePracodawcow.php"><i class='bx bx-briefcase-alt-2'></i></a>
                
                </div>
            </nav>
        </div>
        
        <div class="row">
            <main>
                <section class="" style="padding:15px">
                    <div class="row">
                        <h2>Najnowsze oferty</h2>
                    </div>
                    <div class="row">
                        <div class="card col-2" style="height:100%">
                            <div class="card-body">
                                <h5 class="card-title">Tytuł</h5>
                                <p class="card-text">Kontent</p>
                                <a href="#" class="card-link">Przejdź do oferty</a>
                            </div>
                        </div>

                        <div class="col-2"></div>

                        <div class="card col-2" style="height:100%">
                            <div class="card-body">
                                <h5 class="card-title">Tytuł</h5>
                                <p class="card-text">Kontent</p>
                                <a href="#" class="card-link">Przejdź do oferty</a>
                            </div>
                        </div>
                    </div>
                </section>
        
                <div class="main">
                    <div class="row">

                    </div>

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="padding:80px">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-1"></div>
                                    <div class="card col-2" style="height:100%">
                                        <div class="card-body">
                                        <h5 class="card-title">Tytuł</h5>
                                        <p class="card-text">Kontent</p>
                                        <a href="#" class="card-link">Przejdź do oferty</a>
                                        </div>
                                    </div>

                                    <div class="col-2"></div>
                                    
                                    <div class="card col-2" style="height:100%">
                                        <div class="card-body">
                                        <h5 class="card-title">Tytuł</h5>
                                        <p class="card-text">Kontent</p>
                                        <a href="#" class="card-link">Przejdź do oferty</a>
                                        </div>
                                    </div>

                                    <div class="col-2"></div>

                                    <div class="card col-2" style="height:100%">
                                        <div class="card-body">
                                        <h5 class="card-title">Tytuł</h5>
                                        <p class="card-text">Kontent</p>
                                        <a href="#" class="card-link">Przejdź do oferty</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                            <div class="row">
                                    <div class="col-1"></div>
                                    <div class="card col-2" style="height:100%">
                                        <div class="card-body">
                                        <h5 class="card-title">Tytuł</h5>
                                        <p class="card-text">Kontent</p>
                                        <a href="#" class="card-link">Przejdź do oferty</a>
                                        </div>
                                    </div>

                                    <div class="col-2"></div>
                                    
                                    <div class="card col-2" style="height:100%">
                                        <div class="card-body">
                                        <h5 class="card-title">Tytuł</h5>
                                        <p class="card-text">Kontent</p>
                                        <a href="#" class="card-link">Przejdź do oferty</a>
                                        </div>
                                    </div>

                                    <div class="col-2"></div>

                                    <div class="card col-2" style="height:100%">
                                        <div class="card-body">
                                        <h5 class="card-title">Tytuł</h5>
                                        <p class="card-text">Kontent</p>
                                        <a href="#" class="card-link">Przejdź do oferty</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                            <div class="row">
                                    <div class="col-1"></div>
                                    <div class="card col-2" style="height:100%">
                                        <div class="card-body">
                                        <h5 class="card-title">Tytuł</h5>
                                        <p class="card-text">Kontent</p>
                                        <a href="#" class="card-link">Przejdź do oferty</a>
                                        </div>
                                    </div>

                                    <div class="col-2"></div>
                                    
                                    <div class="card col-2" style="height:100%">
                                        <div class="card-body">
                                        <h5 class="card-title">Tytuł</h5>
                                        <p class="card-text">Kontent</p>
                                        <a href="#" class="card-link">Przejdź do oferty</a>
                                        </div>
                                    </div>

                                    <div class="col-2"></div>

                                    <div class="card col-2" style="height:100%">
                                        <div class="card-body">
                                        <h5 class="card-title">Tytuł</h5>
                                        <p class="card-text">Kontent</p>
                                        <a href="#" class="card-link">Przejdź do oferty</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            
                <section class="" style="padding:15px">
                    <div class="row">
                        <h2>Najnowsze oferty</h2>
                    </div>
                    <div class="row">
                        <div class="card col-2" style="height:100%">
                            <div class="card-body">
                                <h5 class="card-title">Tytuł</h5>
                                <p class="card-text">Kontent</p>
                                <a href="#" class="card-link">Przejdź do oferty</a>
                            </div>
                        </div>
                        
                        <div class="col-2"></div>

                        <div class="card col-2" style="height:100%">
                            <div class="card-body">
                                <h5 class="card-title">Tytuł</h5>
                                <p class="card-text">Kontent</p>
                                <a href="#" class="card-link">Przejdź do oferty</a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
            
        <div class="row footer">
            <footer>
                <div class="col-8">

                </div>
                <div class="col-4">
                    <p>Kontakt:</p>
                    <p>E-mail: email@gmail.com<br>
                    Tel: 123123123</p>
                </div>
            </footer>
        </div>
    </div>

    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>