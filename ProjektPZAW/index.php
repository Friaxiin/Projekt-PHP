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
<body class="container-fluid">
    <div class="row height">
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

        <main>
            <section class="sect1">
                <div class="card col-2">
                    <div class="card-body">
                        <h5 class="card-title">Tytuł</h5>
                        <p class="card-text">Kontent</p>
                        <a href="#" class="card-link">Przejdź do oferty</a>
                    </div>
                </div>
            </section>
    
            <div class="main height">
                Main
            </div>
        
            <section class="sect2">
                Ostatnio oglądane
            </section>
        </main>
    
    
        <footer class="row justify-content-end">
            <div>
                <p>Kontakt:</p>
                <p>E-mail: email@gmail.com</p>
                <p>Tel: 123123123</p>
            </div> 
        </footer>
    </div>

    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>