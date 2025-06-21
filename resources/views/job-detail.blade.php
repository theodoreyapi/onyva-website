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

        .job-detail-section {
            padding: 80px 0;
            background-color: #ffffff;
        }

        .job-detail-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 40px;
        }

        .job-detail-card h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        .job-detail-card .job-meta {
            font-size: 1.1rem;
            color: #777;
            margin-bottom: 30px;
        }

        .job-detail-card .job-meta span {
            margin-right: 25px;
        }

        .job-detail-card h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #571c87;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .job-detail-card p,
        .job-detail-card ul {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .job-detail-card ul {
            list-style: disc;
            margin-left: 20px;
        }

        .job-detail-card ul li {
            margin-bottom: 10px;
        }

        .job-detail-card .btn-apply-lg {
            background-color: #571c87;
            color: #fff;
            border: none;
            padding: 15px 35px;
            border-radius: 10px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
            margin-top: 30px;
            display: inline-block;
        }

        .job-detail-card .btn-apply-lg:hover {
            background-color: #4a1773;
        }

        .back-to-jobs {
            margin-top: 40px;
            text-align: center;
        }

        .back-to-jobs a {
            color: #571c87;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .back-to-jobs a:hover {
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

            .job-detail-card h1 {
                font-size: 2rem;
            }

            .job-detail-card h2 {
                font-size: 1.6rem;
            }

            .job-detail-card p,
            .job-detail-card ul {
                font-size: 1rem;
            }

            .job-detail-card .btn-apply-lg {
                width: 100%;
                padding: 12px 25px;
                font-size: 1.1rem;
            }
        }
    </style>
@endpush

@section('content')
    <section class="job-detail-section">
        <div class="container">
            <div class="job-detail-card animate__animated animate__fadeInUp">
                <h1>Développeur Full-Stack (Senior)</h1>
                <div class="job-meta">
                    <span><i class="bi bi-geo-alt"></i> Télétravail</span>
                    <span><i class="bi bi-briefcase"></i> CDI</span>
                    <span><i class="bi bi-calendar"></i> Publié le 18 Juin 2025</span>
                </div>

                <h2>À propos du poste</h2>
                <p>Nous recherchons un(e) Développeur(se) Full-Stack Senior passionné(e) pour rejoindre notre équipe agile
                    et contribuer à la construction et à l'amélioration continue de notre plateforme innovante. Vous serez
                    responsable de la conception, du développement et de la maintenance de nos applications front-end et
                    back-end, garantissant des performances, une évolutivité et une sécurité optimales.</p>

                <h2>Vos missions</h2>
                <ul>
                    <li>Concevoir et développer des fonctionnalités robustes et performantes pour nos applications web et
                        mobiles.</li>
                    <li>Participer à l'architecture des solutions techniques et à la prise de décisions technologiques.</li>
                    <li>Assurer la qualité du code par des revues de code, des tests unitaires et d'intégration.</li>
                    <li>Collaborer étroitement avec les Product Owners, les designers UX/UI et les autres développeurs.</li>
                    <li>Optimiser les performances des applications et résoudre les problèmes techniques.</li>
                    <li>Veille technologique et proposition de nouvelles approches.</li>
                </ul>

                <h2>Compétences requises</h2>
                <ul>
                    <li>Maîtrise de JavaScript/TypeScript, React/Angular/Vue.js pour le front-end.</li>
                    <li>Expérience solide avec Node.js, Python/Django, Ruby on Rails ou Go pour le back-end.</li>
                    <li>Familiarité avec les bases de données SQL (PostgreSQL, MySQL) et NoSQL (MongoDB, Redis).</li>
                    <li>Connaissance des services cloud (AWS, Azure, GCP) et des outils CI/CD.</li>
                    <li>Excellente compréhension des API RESTful et GraphQL.</li>
                    <li>Capacité à travailler en équipe et à communiquer efficacement.</li>
                    <li>Minimum 5 ans d'expérience pertinente en développement Full-Stack.</li>
                </ul>

                <h2>Ce que nous offrons</h2>
                <ul>
                    <li>Un environnement de travail stimulant et innovant en télétravail complet.</li>
                    <li>Des projets ambitieux et l'opportunité d'avoir un impact significatif.</li>
                    <li>Une culture d'entreprise axée sur la collaboration et le développement personnel.</li>
                    <li>Des avantages sociaux compétitifs (mutuelle, tickets restaurant, congés supplémentaires...).</li>
                    <li>Budget de formation et de conférences.</li>
                </ul>

                <p class="text-center">Prêt à nous rejoindre ?</p>
                <div class="text-center">
                    <a href="#" class="btn btn-apply-lg">Postuler à cette offre</a>
                </div>
            </div>
            <div class="back-to-jobs">
                <a href="all-jobs"><i class="bi bi-arrow-left"></i> Retour aux offres d'emploi</a>
            </div>
        </div>
    </section>
@endsection
