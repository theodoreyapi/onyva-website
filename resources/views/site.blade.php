<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OnYVa – L'application sociale et professionnelle locale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
        }

        .hero {
            background: linear-gradient(135deg, #571c87, #571c874d);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .section-title {
            color: #571c87;
            margin-top: 60px;
            margin-bottom: 30px;
        }

        .btn-purple {
            background-color: #571c87;
            color: white;
            border: none;
        }

        .btn-purple:hover {
            background-color: #3f1364;
            color: white;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1030;
        }

        footer {
            background: #1a1a1a;
            color: #ccc;
            padding: 40px 0;
        }

        .app-screenshot {
            max-width: 100%;
            border-radius: 1rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .card-download {
            position: relative;
            background-color: #571c874d;
            border-radius: 16px;
            padding-left: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            min-height: 280px;
            overflow: visible;
            /* Pour permettre à l'image de dépasser */
        }

        .card-download .image-overlap {
            position: relative;
            /* plus besoin d’absolu si on veut une gestion plus naturelle */
            max-width: 300px;
            height: 500px;
            margin-right: -40px;
            margin-top: -120px;
            /* ou -60px selon le style souhaité */
        }

        .card-download h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-download p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .card-download {
                flex-direction: column;
                text-align: center;
                padding: 30px 20px;
            }

            .card-download .image-overlap {
                margin: 20px auto 0;
                max-width: 180px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #571c87;">
        <div class="container">
            <a class="navbar-brand" href="#">OnYVa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#apropos">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fonctionnement">Fonctionnement</a></li>
                    <li class="nav-item"><a class="nav-link" href="#telechargement">Télécharger</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 animate__animated animate__fadeInLeft">Découvrez <strong>OnYVa</strong></h1>
                    <p class="lead animate__animated animate__fadeInLeft animate__delay-1s">L’app qui vous connecte
                        localement pour des activités sociales ou professionnelles</p>
                    <a href="#telechargement"
                        class="btn btn-purple btn-lg mt-4 animate__animated animate__fadeInUp animate__delay-2s">Télécharger
                        l'app</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ URL::asset('assets/accueil3.png') }}"
                        class="img-fluid animate__animated animate__fadeInRight" alt="App Mockup">
                </div>
            </div>
        </div>
    </section>

    <!-- Fonctionnement -->
    <section id="fonctionnement" class="container py-5">
        <h2 class="text-center section-title">Comment ça marche</h2>
        <div class="row align-items-center mb-5 animate__animated animate__fadeInUp">
            <div class="col-md-6">
                <h4>1. Proposez une activité</h4>
                <p>Vous avez une idée ? Proposez-la en quelques clics : plage, sport, café, projet pro…</p>
                <p>Publiez une invitation dans votre commune pour une sortie ou un projet pro.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ URL::asset('assets/create.png') }}" style="height: 500px" alt="étape 1" class="img-fluid">
            </div>
        </div>
        <div
            class="row align-items-center mb-5 flex-md-row-reverse animate__animated animate__fadeInUp animate__delay-1s">
            <div class="col-md-6">
                <h4>2. Choisissez les communes ciblées</h4>
                <p>Définissez où envoyer l’invitation. Les utilisateurs de ces zones recevront une alerte.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ URL::asset('assets/commune2.png') }}" style="height: 500px" alt="étape 2"
                    class="img-fluid">
            </div>
        </div>
        <div class="row align-items-center mb-5 animate__animated animate__fadeInUp">
            <div class="col-md-6">
                <h4>3. Jusqu'à 5 personnes acceptent</h4>
                <p>Les premiers intéressés sont réunis dans un chat de 24h pour s’organiser.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ URL::asset('assets/5persos.png') }}" style="height: 500px" alt="étape 1"
                    class="img-fluid">
            </div>
        </div>
        <div
            class="row align-items-center mb-5 flex-md-row-reverse animate__animated animate__fadeInUp animate__delay-1s">
            <div class="col-md-6">
                <h4>4. Discutez et finalisez</h4>
                <p>Le groupe reste actif pendant 24h pour échanger, décider du lieu et de l’heure.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ URL::asset('assets/organise2.png') }}" style="height: 500px" alt="étape 2"
                    class="img-fluid">
            </div>
        </div>
        <div class="row align-items-center mb-5 animate__animated animate__fadeInUp">
            <div class="col-md-6">
                <h4>5. Profitez !</h4>
                <p>Il ne reste plus qu’à se rencontrer. Simple, local, humain.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ URL::asset('assets/pret.png') }}" style="height: 500px" alt="étape 1" class="img-fluid">
            </div>
        </div>
    </section>

    <!-- À propos -->
    <section id="apropos" class="py-5 bg-light">
        <div class="container">
            <div class="card p-4 shadow border-0">
                <h2 class="section-title text-center">À propos de nous</h2>
                <p class="text-center mb-0">OnYVa est une plateforme sociale et professionnelle qui facilite les
                    rencontres et les sorties en communauté selon vos intérêts et votre localisation.</p>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Téléchargement -->
    <section id="telechargement" class="py-5">
        <div class="container">
            <div class="card-download">
                <div class="flex-grow-1">
                    <h3 class="" style="color: #571c87">Téléchargez l'application OnYVa</h3>
                    <p>Disponible très bientôt sur Android et iOS.</p>
                    <a href="#" class="btn btn-purple me-2">📱 Android</a>
                    <a href="#" class="btn btn-outline-dark">🍏 iOS</a>
                </div>
                <div>
                    <img src="{{ URL::asset('assets/telecharger.png') }}" height="100" alt="Aperçu app"
                        class="image-overlap">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="bg-light py-5">
        <div class="container">
            <h2 class="section-title text-center">Contact</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>📍 Adresse</h5>
                    <p>Abidjan, Côte d’Ivoire</p>
                    <h5>📞 Téléphone</h5>
                    <p>+225 07 00 00 00 00</p>
                    <h5>✉️ Email</h5>
                    <p>contact@onyva.app</p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Votre email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Votre message"></textarea>
                        </div>
                        <button class="btn btn-purple w-100">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>OnYVa</h5>
                    <p>Créer des liens autour de vous, simplement.</p>
                </div>
                <div class="col-md-4">
                    <h5>Liens utiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="#apropos" class="text-light">À propos</a></li>
                        <li><a href="#fonctionnement" class="text-light">Fonctionnement</a></li>
                        <li><a href="#telechargement" class="text-light">Télécharger</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Suivez-nous</h5>
                    <a href="#" class="text-light me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-light me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-light me-2"><i class="bi bi-twitter"></i></a>
                    <a href="https://wa.me/2250700000000" class="text-light"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
            <hr class="text-secondary">
            <p class="text-center small">&copy; 2025 OnYVa. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<!-- Bandeau d'annonce OnYVa -->
<div id="bandeau-on-y-va"
    style="background-color:#571c87; color:white; padding: 15px 20px; text-align:center; position: fixed; bottom: 0; width: 100%; z-index: 9999;">
    <span style="font-size: 1rem;">
        🚀 <strong>OnYVa est disponible !</strong> Découvrez l'app qui vous connecte localement.
    </span>
    <a href="https://play.google.com/store/apps/details?id=com.onyva.app" target="_blank"
        style="background-color:#fff; color:#571c87; padding:8px 16px; margin-left:15px; border-radius:5px; font-weight:bold; text-decoration:none;">
        Télécharger
    </a>
    <button onclick="document.getElementById('bandeau-on-y-va').style.display='none'"
        style="background:none; border:none; color:white; font-size:1.2rem; margin-left:10px;">×</button>
</div>
