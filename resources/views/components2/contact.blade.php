<div class="row contact-section">
    <!-- Colonne gauche : Coordonnées -->
    <div class="col-md-6 contact-info">
        <h2 class="fw-bold mb-4 text-pink">Informations de contact</h2>

        <p><i class="fas fa-map-marker-alt me-2 text-pink"></i> 123 Rue de la Cuisine, 75000 Paris, France</p>
        <p><i class="fas fa-phone me-2 text-pink"></i> <a href="tel:+33123456789">+33 1 23 45 67 89</a></p>
        <p><i class="fas fa-envelope me-2 text-pink"></i> <a href="mailto:contact@cuisineaz.com">contact@cuisineaz.com</a></p>

        <h5 class="mt-4 text-pink">Horaires d'ouverture</h5>
        <ul class="list-unstyled">
            <li>Lundi - Vendredi : 9h - 18h</li>
            <li>Samedi : 10h - 14h</li>
            <li>Dimanche : Fermé</li>
        </ul>

       
    </div>

    <!-- Colonne droite : Formulaire -->
    <div class="col-md-6">
        <h3 class="mb-4 text-pink">Formulaire de contact</h3>
        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-pink">Envoyer</button>
        </form>
    </div>
</div>
<style>
    .btn-pink {
    background-color: #e91e63;
    color: white;
    border: none;
    padding: 10px 20px;
    font-weight: 500;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn-pink:hover {
    background-color: #d81b60;
}

</style>
