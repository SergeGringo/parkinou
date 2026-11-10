<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/PARKINOU.png" type="image/png">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/slick-theme.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>Parkinou</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="../images/PARKINOU.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="working.php">Comment ça marche</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="solutions.php">Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aide.php">Aide</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Récupérer tous les liens de la navigation
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            // Ajouter un écouteur d'événements sur chaque lien
            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    // Retirer la classe "active" de tous les liens
                    navLinks.forEach(nav => nav.classList.remove('active'));
                    // Ajouter la classe "active" au lien cliqué
                    this.classList.add('active');
                });
            });
        });
    </script>