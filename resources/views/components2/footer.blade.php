<footer>
    <div class="container text-md-left">
        <div class="row">

            <!-- Logo & Description -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <h5 class="text-uppercase">MonSiteRecette</h5>
                <img src="{{ asset('images/logo.png') }}" alt="Logo MonSiteRecette" style="width: 150px;" class="mb-3">
                <p>
                    Commandez des recettes savoureuses en quelques clics. Personnalisez vos plats selon vos goûts et recevez-les rapidement chez vous.
                </p>
            </div>

            <!-- Liens utiles -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h5 class="text-uppercase">Liens</h5>
                <p><a href="/">Accueil</a></p>
                <p><a href="/recettes">Recettes</a></p>
                <p><a href="/contact">Contact</a></p>
                <p><a href="/a-propos">À propos</a></p>
            </div>

            <!-- Aide -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h5 class="text-uppercase">Aide</h5>
                <p><a href="#">Conditions</a></p>
                <p><a href="#">Confidentialité</a></p>
                <p><a href="#">Support</a></p>
            </div>

            <!-- Contact -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
                <h5 class="text-uppercase">Contact</h5>
                <p><i class="fas fa-home me-2"></i> Paris, France</p>
                <p><i class="fas fa-envelope me-2"></i> contact@monsiterecette.com</p>
                <p><i class="fas fa-phone me-2"></i> +33 1 23 45 67 89</p>
            </div>
        </div>

        <!-- Réseaux sociaux -->
        <div class="row justify-content-center mt-3">
            <div class="col-auto">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <!-- Droits d’auteur -->
        <div class="row text-center mt-4">
            <div class="col-12">
                <p class="text-muted mb-0">© 2025 MonSiteRecette. Tous droits réservés.</p>
            </div>
        </div>
    </div>

    <style>
        footer {
            background: linear-gradient(45deg, #ff66b2, #ffffff);
            color: rgb(0, 0, 0);
            padding-top: 3rem;
            padding-bottom: 2rem;
            margin-top: -30px;
        }
        
        footer a {
            color: rgb(5, 5, 5);
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s;
        }
        
        footer a:hover {
            color: #ff66b2;
        }
        
        footer i {
            font-size: 1.5em;
            margin: 0 8px;
            color: white;
            transition: color 0.3s;
        }
        
        footer i:hover {
            color: #ff66b2;
        }
        
        footer h5 {
            color: #000000;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        </style>
        
</footer>
