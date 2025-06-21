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

        .culture-hero {
            background-color: #e6ccff;
            padding: 100px 0 60px;
            text-align: center;
        }

        .culture-hero h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #1e1e1e;
        }

        .culture-hero p {
            font-size: 1.2rem;
            color: #333;
            max-width: 800px;
            margin: 0 auto 30px;
        }

        .culture-section-detail {
            padding: 80px 0;
            background-color: #ffffff;
        }

        .culture-section-detail h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 40px;
            text-align: center;
        }

        .culture-section-detail .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            padding: 30px;
            text-align: center;
        }

        .culture-section-detail .card i {
            font-size: 3.5rem;
            color: #571c87;
            margin-bottom: 20px;
        }

        .culture-section-detail .card h3 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .culture-section-detail .card p {
            font-size: 1.05rem;
            color: #555;
            line-height: 1.7;
        }

        .values-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .values-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 40px;
            text-align: center;
        }

        .value-item {
            text-align: center;
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.03);
            margin-bottom: 30px;
            height: 100%;
            /* Ensure cards are same height */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .value-item i {
            font-size: 3rem;
            color: #571c87;
            margin-bottom: 20px;
        }

        .value-item h4 {
            font-size: 1.6rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .value-item p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }

        .team-section {
            padding: 80px 0;
            background-color: #ffffff;
            text-align: center;
        }

        .team-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 40px;
        }

        .team-section p.lead {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 50px;
        }

        .team-photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
        }

        .team-photo-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .team-photo-grid img:hover {
            transform: translateY(-5px);
        }

        .btn-careers-cta {
            background-color: #571c87;
            color: #fff;
            border: none;
            padding: 15px 35px;
            border-radius: 10px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
        }

        .btn-careers-cta:hover {
            background-color: #4a1773;
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

            .culture-hero h1,
            .culture-section-detail h2,
            .values-section h2,
            .team-section h2 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 767.98px) {

            .culture-hero h1,
            .culture-section-detail h2,
            .values-section h2,
            .team-section h2 {
                font-size: 1.8rem;
            }

            .culture-hero p,
            .culture-section-detail .card p,
            .value-item p,
            .team-section p.lead {
                font-size: 1rem;
            }

            .culture-section-detail .card h3,
            .value-item h4 {
                font-size: 1.4rem;
            }
        }
    </style>
@endpush

@section('content')
    <section class="culture-hero">
        <div class="container">
            <h1>Découvrez OnYVa : Notre Culture, Nos Valeurs</h1>
            <p>Plus qu'une entreprise, nous sommes une communauté de passionnés qui s'engage à créer des liens authentiques
                et à innover pour un monde plus connecté. Découvrez ce qui nous rend uniques.</p>
        </div>
    </section>

    <section class="culture-section-detail">
        <div class="container">
            <h2>Ce qui nous rend uniques</h2>
            <div class="row mt-5">
                <div class="col-md-6 col-lg-4">
                    <div class="card animate__animated animate__fadeInUp">
                        <i class="bi bi-lightbulb"></i>
                        <h3>Esprit d'Innovation</h3>
                        <p>Nous encourageons la curiosité, l'expérimentation et l'adoption de nouvelles technologies pour
                            rester à la pointe.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <i class="bi bi-people"></i>
                        <h3>Collaboration & Confiance</h3>
                        <p>Le travail d'équipe, le respect mutuel et une communication ouverte sont les piliers de notre
                            réussite.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <i class="bi bi-award"></i>
                        <h3>Excellence & Qualité</h3>
                        <p>Nous visons l'excellence dans tout ce que nous faisons, de nos produits à nos interactions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                        <i class="bi bi-growth"></i>
                        <h3>Développement Continu</h3>
                        <p>Nous investissons dans la croissance personnelle et professionnelle de nos collaborateurs.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card animate__animated animate__fadeInUp" data-wow-delay="0.8s">
                        <i class="bi bi-emoji-heart-eyes"></i>
                        <h3>Passion & Impact</h3>
                        <p>Nous sommes passionnés par notre mission et fiers de l'impact positif que nous avons sur la vie
                            des gens.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card animate__animated animate__fadeInUp" data-wow-delay="1s">
                        <i class="bi bi-hand-thumbs-up"></i>
                        <h3>Agilité & Adaptation</h3>
                        <p>Nous sommes flexibles, réactifs et prêts à nous adapter aux changements du marché et des
                            technologies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="values-section">
        <div class="container">
            <h2>Nos Valeurs Fondamentales</h2>
            <div class="row mt-5">
                <div class="col-md-6 col-lg-4">
                    <div class="value-item animate__animated animate__fadeInUp">
                        <i class="bi bi-person-fill-check"></i>
                        <h4>Respect</h4>
                        <p>Nous valorisons la diversité, l'inclusion et traitons chacun avec dignité et respect, à la fois
                            en interne et en externe.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="value-item animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <i class="bi bi-share-fill"></i>
                        <h4>Transparence</h4>
                        <p>Nous croyons en une communication ouverte et honnête, partageant les informations pour favoriser
                            la confiance.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="value-item animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <i class="bi bi-stars"></i>
                        <h4>Audace</h4>
                        <p>Nous osons sortir des sentiers battus, prendre des initiatives et viser l'impossible pour
                            innover.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="value-item animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                        <i class="bi bi-arrow-through-heart"></i>
                        <h4>Engagement</h4>
                        <p>Nous nous engageons pleinement envers nos objectifs, nos utilisateurs et notre équipe.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="value-item animate__animated animate__fadeInUp" data-wow-delay="0.8s">
                        <i class="bi bi-globe-americas"></i>
                        <h4>Responsabilité</h4>
                        <p>Nous assumons nos actions et leurs conséquences, en cherchant toujours à améliorer notre impact.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="value-item animate__animated animate__fadeInUp" data-wow-delay="1s">
                        <i class="bi bi-people-fill"></i>
                        <h4>Empathie</h4>
                        <p>Nous nous mettons à la place de nos utilisateurs et de nos collègues pour mieux comprendre leurs
                            besoins et offrir des solutions adaptées.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <h2>Rejoignez Notre Équipe !</h2>
            <p class="lead">Nous sommes fiers de bâtir une équipe diversifiée et passionnée. Découvrez un aperçu de notre
                vie d'équipe.</p>
            <div class="team-photo-grid">
                <img src="https://via.placeholder.com/300x200?text=Équipe+Réunion+1" alt="Team Meeting">
                <img src="https://via.placeholder.com/300x200?text=Team+Lunch" alt="Team Lunch">
                <img src="https://via.placeholder.com/300x200?text=Événement+Entreprise" alt="Company Event">
                <img src="https://via.placeholder.com/300x200?text=Team+Brainstorm" alt="Team Brainstorm">
                <img src="https://via.placeholder.com/300x200?text=Happy+Hours" alt="Happy Hours">
                <img src="https://via.placeholder.com/300x200?text=Team+Building" alt="Team Building">
            </div>
            <a href="careers" class="btn btn-careers-cta">Voir nos Offres d'Emploi</a>
        </div>
    </section>
@endsection
