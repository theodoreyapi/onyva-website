<!-- Bandeau d'annonce OnYVa -->
<div id="bandeau-on-y-va"
    style="background-color:#571c87; color:white; padding: 15px 20px; text-align:center; position: fixed; bottom: 0; width: 100%; z-index: 9999;">
    <span style="font-size: 1rem;">
        🚀 <strong>OnYVa est disponible !</strong> Découvrez l'app qui vous connecte localement.
    </span>
    <a href="https://play.google.com/store/apps/details?id=com.onyva.app" target="_blank"
        style="background-color:#fff; color:#571c87; padding:8px 16px; margin-left:15px; border-radius:5px; font-weight:bold; text-decoration:none;">
        Android
    </a>
    <a href="https://play.google.com/store/apps/details?id=com.onyva.app" target="_blank"
        style="background-color:#fff; color:#571c87; padding:8px 16px; margin-left:15px; border-radius:5px; font-weight:bold; text-decoration:none;">
        IOS
    </a>
    <button onclick="document.getElementById('bandeau-on-y-va').style.display='none'"
        style="background:none; border:none; color:white; font-size:1.2rem; margin-left:10px;">×</button>
</div>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OnYVa – Connectez-vous spontanément</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap" rel="stylesheet">
    @stack('style')
</head>

<body>

    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')

    @include('layouts.script')
</body>

</html>
