@extends('layouts.master')

@push('style')
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
            background-color: #f8f9fa;
            /* Lighter background for overall page */
        }

        .navbar {
            background-color: #e6ccff;
            /* Changed to match image-gallery */
            border-bottom: none;
            /* Removed border */
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

        /* Specific styles for the Careers page hero */
        .careers-hero {
            background-color: #e6ccff;
            padding: 100px 0 60px;
            text-align: center;
        }

        .careers-hero h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #1e1e1e;
        }

        .careers-hero p {
            font-size: 1.2rem;
            color: #333;
            max-width: 800px;
            margin: 0 auto 30px;
        }

        /* Culture Section */
        .culture-section {
            padding: 80px 0;
            background-color: #ffffff;
            text-align: center;
        }

        .culture-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 40px;
        }

        .culture-section p {
            font-size: 1.1rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto 50px;
            line-height: 1.6;
        }

        .culture-item {
            text-align: center;
            padding: 20px;
            margin-bottom: 30px;
        }

        .culture-item i {
            font-size: 3rem;
            color: #571c87;
            margin-bottom: 20px;
        }

        .culture-item h4 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .culture-item p {
            font-size: 0.95rem;
            color: #777;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Job Offers Section */
        .job-offers-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .job-offers-section h2 {
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
            /* Push apply button to bottom */
            min-height: 250px;
            /* Ensure cards have some height */
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

        .job-card .btn-apply {
            background-color: #571c87;
            /* Purple button */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            align-self: flex-start;
            /* Align button to start of its flex container */
        }

        .job-card .btn-apply:hover {
            background-color: #4a1773;
        }

        /* Call to Action Section */
        .call-to-action-section {
            padding: 80px 0;
            text-align: center;
            background-color: #e6ccff;
            /* Light purple background */
        }

        .call-to-action-section h2 {
            font-size: 3rem;
            font-weight: bold;
            color: #1e1e1e;
            margin-bottom: 20px;
        }

        .call-to-action-section p {
            font-size: 1.2rem;
            color: #333;
            max-width: 700px;
            margin: 0 auto 40px;
        }

        .call-to-action-section .btn {
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 1.1rem;
            margin: 0 10px;
        }

        .call-to-action-section .btn-dark {
            background-color: #1e1e1e;
            color: #fff;
            border: none;
        }

        .call-to-action-section .btn-outline-dark {
            border: 2px solid #1e1e1e;
            color: #1e1e1e;
        }

        /* Re-use existing global styles for footer */
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

        /* Responsive adjustments */
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

            .careers-hero h1 {
                font-size: 2.5rem;
            }

            .culture-section h2 {
                font-size: 2rem;
            }

            .job-offers-section h2 {
                font-size: 2rem;
            }

            .call-to-action-section h2 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 767.98px) {
            .careers-hero h1 {
                font-size: 2rem;
            }

            .careers-hero p {
                font-size: 1rem;
            }

            .culture-section h2 {
                font-size: 1.8rem;
            }

            .job-offers-section h2 {
                font-size: 1.8rem;
            }

            .call-to-action-section h2 {
                font-size: 2rem;
            }

            .call-to-action-section .btn {
                display: block;
                width: 80%;
                margin: 15px auto;
            }
        }
    </style>
@endpush

@section('content')
    <section class="careers-hero">
        <div class="container">
            <h1>Rejoignez l'Aventure OnYVa</h1>
            <p>Façonnez l'avenir des connexions spontanées avec nous. Découvrez nos opportunités de carrière et apportez
                votre talent à une équipe dynamique et innovante.</p>
        </div>
    </section>

    <section class="culture-section">
        <div class="container">
            <h2>Notre Culture & Avantages</h2>
            <p>Chez OnYVa, nous favorisons un environnement de travail collaboratif, créatif et stimulant où chaque
                membre de l'équipe peut s'épanouir et avoir un impact réel.</p>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="culture-item">
                        <i class="bi bi-lightbulb"></i>
                        <h4>Innovation & Créativité</h4>
                        <p>Nous encourageons la pensée novatrice et la résolution créative de problèmes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="culture-item">
                        <i class="bi bi-people"></i>
                        <h4>Collaboration d'Équipe</h4>
                        <p>Le travail d'équipe et le soutien mutuel sont au cœur de notre succès.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="culture-item">
                        <i class="bi bi-graph-up"></i>
                        <h4>Croissance Personnelle</h4>
                        <p>Des opportunités d'apprentissage continu et de développement de carrière.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="culture-item">
                        <i class="bi bi-heart"></i>
                        <h4>Équilibre Vie Pro/Perso</h4>
                        <p>Nous valorisons la flexibilité et le bien-être de nos employés.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="culture-item">
                        <i class="bi bi-emoji-sunglasses"></i>
                        <h4>Environnement Fun</h4>
                        <p>Profitez d'un environnement de travail dynamique et convivial.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="culture-item">
                        <i class="bi bi-globe"></i>
                        <h4>Impact Mondial</h4>
                        <p>Contribuez à connecter des millions de personnes à travers le monde.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="job-offers-section">
        <div class="container">
            <h2>Nos Offres d'Emploi Actuelles</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="job-card">
                        <div>
                            <h3>Développeur Full-Stack (Senior)</h3>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Télétravail</span>
                                <span><i class="bi bi-briefcase"></i> CDI</span>
                            </div>
                            <p>Nous recherchons un développeur Full-Stack expérimenté pour notre équipe principale. Vous
                                travaillerez sur l'ensemble de notre stack technique.</p>
                        </div>
                        <a href="job-detail" class="btn btn-apply">Voir les détails</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="job-card">
                        <div>
                            <h3>UX/UI Designer (Mid-level)</h3>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Paris, France</span>
                                <span><i class="bi bi-briefcase"></i> CDI</span>
                            </div>
                            <p>Créez des expériences utilisateur intuitives et esthétiques pour notre application mobile
                                et web.</p>
                        </div>
                        <a href="job-detail" class="btn btn-apply">Voir les détails</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="job-card">
                        <div>
                            <h3>Responsable Marketing Digital</h3>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Paris, France</span>
                                <span><i class="bi bi-briefcase"></i> CDI</span>
                            </div>
                            <p>Développez et exécutez nos stratégies de marketing digital pour accroître notre
                                visibilité.</p>
                        </div>
                        <a href="#" class="btn btn-apply">Voir les détails</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="job-card">
                        <div>
                            <h3>Spécialiste Support Client</h3>
                            <div class="job-meta">
                                <span><i class="bi bi-geo-alt"></i> Télétravail</span>
                                <span><i class="bi bi-briefcase"></i> CDD</span>
                            </div>
                            <p>Aidez nos utilisateurs à tirer le meilleur parti d'OnYVa en fournissant un support
                                exceptionnel.</p>
                        </div>
                        <a href="#" class="btn btn-apply">Voir les détails</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <p class="lead">Aucun poste qui vous correspond ? Envoyez-nous une candidature spontanée !</p>
                <a href="spontaneous" class="btn btn-dark">Candidature Spontanée</a>
            </div>
        </div>
    </section>

    <section class="call-to-action-section">
        <div class="container">
            <h2>Prêt à relever le défi ?</h2>
            <p>Découvrez comment vous pouvez contribuer à notre mission de connecter les gens de manière spontanée et
                significative.</p>
            <div>
                <a href="all-jobs" class="btn btn-dark">Voir tous les postes</a>
                <a href="culture" class="btn btn-outline-dark">En savoir plus sur notre culture</a>
            </div>
        </div>
    </section>
@endsection
