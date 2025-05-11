<!-- Lien Bootstrap Icons (déjà inclus dans le <head>) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Header -->
<header class="site-header bg-dark text-white">
    <div class="container d-flex justify-content-between align-items-center py-4">
        <!-- Logo -->
        <a href="/" class="d-flex align-items-center text-white text-decoration-none">
            <img src="{{ asset('images/logo.png') }}" alt="Logo MonSiteRecette" class="me-2" style="height: 50px;">
            <span class="fs-3 fw-bold">MonSiteRecette</span>
        </a>

        <!-- Navigation -->
        <nav class="d-none d-md-block">
            <ul class="nav gap-4 mb-0 align-items-center">
                <!-- Menu déroulant Accueil -->
                <li class="nav-item dropdown-container position-relative">
    <a href="/accueil" class="nav-link text-white dropdown-toggle" role="button">
        Accueil
    </a>
    <ul class="dropdown-menu-custom shadow rounded border-0 mt-2">
        <li><a class="dropdown-item" href="/accueil#plats">Nos Plats Populaires</a></li>
        <li><a class="dropdown-item" href="/accueil#raison">Pourquoi nous choisir</a></li>
        <li><a class="dropdown-item" href="/accueil#avis">Avis clients</a></li>
        <li><a class="dropdown-item" href="/accueil#news">Newsletter</a></li>
        
    </ul>
</li>


                <!-- Autres liens normaux -->
                <li class="nav-item"><a href="/recettes" class="nav-link text-white">Recettes</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link text-white">Contact</a></li>
                <li class="nav-item"><a href="/a-propos" class="nav-link text-white">À propos</a></li>
            </ul>
        </nav>

        <!-- Icônes panier + compte -->
        <div class="d-none d-md-flex align-items-center gap-3">
            <a href="/recettes" class="text-white fs-4">
                <i class="bi bi-cart-fill"></i>
            </a>
            <a href="/dashboard" class="text-white fs-4">
                <i class="bi bi-person-circle"></i>
            </a>
        </div>
    </div>
</header>
