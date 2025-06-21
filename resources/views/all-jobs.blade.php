@extends('layouts.master')

@push('style')
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #e6ccff;
            border-bottom: none;
        }

        .navbar .nav-link {
            color: #333;
            font-weight: 500;
        }

        .navbar .nav-link:hover {
            color: #571c87;
        }

        .navbar-brand {
            font-family: 'Fredoka', cursive;
            font-size: 24px;
            font-weight: bold;
        }

        .all-jobs-hero {
            background-color: #e6ccff;
            padding: 100px 0 60px;
            text-align: center;
        }

        .all-jobs-hero h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #1e1e1e;
        }

        .all-jobs-hero p {
            font-size: 1.2rem;
            color: #333;
            max-width: 800px;
            margin: 0 auto 30px;
        }

        .all-jobs-section {
            padding: 80px 0;
            background-color: #ffffff;
        }

        .all-jobs-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 50px;
        }

        .job-card {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 250px;
        }

        .job-card h3 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .job-card .job-meta {
            font-size: 0.95rem;
            color: #777;
            margin-bottom: 15px;
        }

        .job-card .job-meta span {
            margin-right: 15px;
        }

        .job-card p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .job-card .btn-details {
            background-color: #571c87;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            align-self: flex-start;
        }

        .job-card .btn-details:hover {
            background-color: #4a1773;
        }

        .back-to-careers {
            margin-top: 40px;
            text-align: center;
        }

        .back-to-careers a {
            color: #571c87;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .back-to-careers a:hover {
            color: #4a1773;
        }


        /* Footer (re-used styles) */
        .footer-section {
            background-color: #1e1e1e;
            color: #fff;
            padding: 80px 0 20px;
            font-size: 0.95rem;
        }

        .footer-section h5 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 25px;
            color: #fff;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #fff;
        }

        .footer-section .footer-logo {
            font-family: 'Fredoka', cursive;
            font-size: 28px;
            font-weight: bold;
            color: #fff;
            margin-bottom: 25px;
            display: block;
        }

        .footer-section .newsletter-form .form-control {
            background-color: #333;
            border: 1px solid #555;
            color: #fff;
            padding: 10px 15px;
            border-radius: 8px;
        }

        .footer-section .newsletter-form .form-control::placeholder {
            color: #bbb;
        }

        .footer-section .newsletter-form .btn-subscribe {
            background-color: #e6ccff;
            color: #1e1e1e;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            margin-left: 10px;
            transition: background-color 0.3s ease;
        }

        .footer-section .newsletter-form .btn-subscribe:hover {
            background-color: #d1b3f0;
        }

        .footer-section .newsletter-text {
            color: #ccc;
            font-size: 0.85rem;
            margin-top: 15px;
            line-height: 1.5;
        }

        .footer-section .newsletter-text a {
            color: #e6ccff;
            text-decoration: none;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 20px;
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-bottom .copyright {
            color: #ccc;
        }

        .footer-bottom .bottom-links a {
            color: #ccc;
            text-decoration: none;
            margin-right: 20px;
            transition: color 0.3s ease;
        }

        .footer-bottom .bottom-links a:hover {
            color: #fff;
        }

        .footer-bottom .footer-social-icons a {
            color: #ccc;
            font-size: 1.2rem;
            margin-left: 15px;
            transition: color 0.3s ease;
        }

        .footer-bottom .footer-social-icons a:hover {
            color: #fff;
        }

        @media (max-width: 991.98px) {

            .footer-section .col-lg-2,
            .footer-section .col-lg-3,
            .footer-section .col-lg-4 {
                margin-bottom: 30px;
                text-align: center;
            }

            .footer-section .newsletter-form .input-group {
                flex-direction: column;
                align-items: center;
            }

            .footer-section .newsletter-form .btn-subscribe {
                margin-left: 0;
                margin-top: 15px;
                width: 100%;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .footer-bottom .copyright {
                margin-bottom: 15px;
            }

            .footer-bottom .bottom-links a {
                display: block;
                margin-bottom: 10px;
                margin-right: 0;
            }

            .footer-bottom .footer-social-icons {
                margin-top: 15px;
            }

            .all-jobs-hero h1,
            .all-jobs-section h2 {
                font-size: 2.2rem;
            }

            .all-jobs-hero p {
                font-size: 1rem;
            }
        }

        @media (max-width: 767.98px) {

            .all-jobs-hero h1,
            .all-jobs-section h2 {
                font-size: 1.8rem;
            }

            .job-card h3 {
                font-size: 1.6rem;
            }

            .job-card p {
                font-size: 0.9rem;
            }
        }
    </style>
@endpush

@section('content')
    <section class="all-jobs-hero">
        <div class="container">
            <h1>Toutes Nos Offres d'Emploi</h1>
            <p>Explorez toutes les opportunités passionnantes de rejoindre l'équipe OnYVa et de contribuer à notre mission.
                Trouvez le rôle qui vous correspond !</p>
        </div>
    </section>

    <section class="all-jobs-section">
        <div class="container">
            <h2>Postes Disponibles</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="job-card animate__animated animate__fadeInUp">
                        <div>
                            <h3>Développeur Full-Stack (Senior)</h3>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Télétravail</span>
                                <span><i class="bi bi-briefcase"></i> CDI</span>
                            </div>
                            <p>Nous recherchons un développeur Full-Stack expérimenté pour notre équipe principale. Vous
                                travaillerez sur l'ensemble de notre stack technique.</p>
                        </div>
                        <a href="job-detail" class="btn btn-details">Voir les détails</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="job-card animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                        <div>
                            <h3>UX/UI Designer (Mid-level)</h3>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Paris, France</span>
                                <span><i class="bi bi-briefcase"></i> CDI</span>
                            </div>
                            <p>Créez des expériences utilisateur intuitives et esthétiques pour notre application mobile et
                                web.</p>
                        </div>
                        <a href="job-detail" class="btn btn-details">Voir les détails</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="job-card animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <div>
                            <h3>Responsable Marketing Digital</h3>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Paris, France</span>
                                <span><i class="bi bi-briefcase"></i> CDI</span>
                            </div>
                            <p>Développez et exécutez nos stratégies de marketing digital pour accroître notre visibilité.
                            </p>
                        </div>
                        <a href="job-detail" class="btn btn-details">Voir les détails</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="job-card animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                        <div>
                            <h3>Spécialiste Support Client</h3>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Télétravail</span>
                                <span><i class="bi bi-briefcase"></i> CDD</span>
                            </div>
                            <p>Aidez nos utilisateurs à tirer le meilleur parti d'OnYVa en fournissant un support
                                exceptionnel.</p>
                        </div>
                        <a href="job-detail" class="btn btn-details">Voir les détails</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="job-card animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <div>
                            <h3>Ingénieur DevOps</h3>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Télétravail</span>
                                <span><i class="bi bi-briefcase"></i> CDI</span>
                            </div>
                            <p>Optimisez nos infrastructures, nos pipelines CI/CD et garantissez la stabilité de nos
                                systèmes.</p>
                        </div>
                        <a href="job-detail" class="btn btn-details">Voir les détails</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="job-card animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                        <div>
                            <h3>Chef de Projet (Tech)</h3>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Paris, France</span>
                                <span><i class="bi bi-briefcase"></i> CDI</span>
                            </div>
                            <p>Menez des projets techniques de bout en bout, de la conception à la livraison.</p>
                        </div>
                        <a href="job-detail" class="btn btn-details">Voir les détails</a>
                    </div>
                </div>
            </div>
            <div class="back-to-careers">
                <p class="lead">Aucun poste qui vous correspond ?</p>
                <a href="spontaneous" class="btn btn-dark text-white">Envoyer une Candidature Spontanée</a>
            </div>
        </div>
    </section>
@endsection
