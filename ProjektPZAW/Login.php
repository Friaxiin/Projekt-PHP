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
            <a href="index.php">nagłówek</a>
        </header>
        <nav class="col-5">
            <div class="dropdown">
                <a href="index.php"><i class='bx bx-home-alt-2'></i></a>
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
            <div class="row">
                <div class="col-4">
                    <h2>FAQ</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Acc 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Acc 2</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Acc 3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <form action="" method="post">
                        <input type="text" placeholder="Login" id="login">
                        <input type="password" placeholder="Hasło" id="password">
                        <p>Dane osobowe</p>
                        <input type="text" placeholder="Imię" id="firstName">
                        <input type="text" placeholder="Nazwisko" id="surname">
                        <input type="text" placeholder="Data urodzenia" onfocus="(this.type='date')" onblur="(this.type='text')" id="dateOfBirth">
                        <input type="" placeholder="Email" id="email">
                        <input type="" placeholder="Numer telefonu" id="telNumber">
                        <input type="" placeholder="Miejsce zamieszkania" id="placeOfResidence">
                        <p>Doświadczenie zawodowe</p>
                        <input type="" placeholder="Obecne zatrudnienie" id="currentPosition">
                        <input type="" placeholder="Opis zatrudnienia" id="desriptionOfPosition">
                        <input type="" placeholder="Podsumowanie profesji" id="positionSummary">
                        <input type="" placeholder="" id="">
                        <p>Umiejętności</p>
                        <input type="" placeholder="Znane języki" id="languages">
                        <input type="" placeholder="Umiejętności" id="skills">
                        <input type="" placeholder="Certyfikaty (tytuł + data uzyskania)" id="certificates">
                        <input type="" placeholder="Linki" id="links">
                        <input type="text" placeholder="Zdjęcie profilowe" onfocus="(this.type='file')" id="profilePicture">
                        <input type="submit" value="Zarejestruj">
                    </form>
                </div>
            </div>
            
        </main>
    
    
        <footer>
            stopka
        </footer>
    </div>

    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>