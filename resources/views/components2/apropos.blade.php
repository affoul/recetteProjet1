<section id="a-propos" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="text-pink fw-bold">À propos de nous</h2>
      <p class="lead">Une passion pour la cuisine, partagée avec amour.</p>
    </div>
    <div class="row align-items-center mb-5">
      <div class="col-md-6">
        <img src="https://source.unsplash.com/600x400/?chef,kitchen" class="img-fluid rounded shadow" alt="Notre cuisine">
      </div>
      <div class="col-md-6">
        <p>
          Chez <strong>MonSiteRecette</strong>, nous croyons que la cuisine est bien plus qu’un simple repas. C’est un moment de partage, de créativité, et de plaisir.
        </p>
        <p>
          Nos recettes sont élaborées avec soin par une équipe de chefs passionnés, afin de vous offrir des plats savoureux et faciles à réaliser. Que vous soyez amateur ou expert, vous trouverez ici l'inspiration pour chaque moment gourmand.
        </p>
        <a href="/recettes" class="btn btn-pink mt-3">Découvrir nos recettes</a>
      </div>
    </div>

    <!-- Présentation des chefs -->
    <div class="text-center mb-4">
      <h3 class="text-pink">Rencontrez nos chefs</h3>
      <p class="text-muted">Des experts passionnés derrière chaque recette</p>
    </div>

    <ul class="nav nav-pills justify-content-center mb-4" id="chefTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="chef1-tab" data-bs-toggle="pill" data-bs-target="#chef1" type="button" role="tab">
          Chef Lina
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="chef2-tab" data-bs-toggle="pill" data-bs-target="#chef2" type="button" role="tab">
          Chef Karim
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="chef3-tab" data-bs-toggle="pill" data-bs-target="#chef3" type="button" role="tab">
          Chef Sophie
        </button>
      </li>
    </ul>

    <div class="tab-content text-center" id="chefTabsContent">
      <!-- Chef 1 -->
      <div class="tab-pane fade show active" id="chef1" role="tabpanel">
        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle mb-3" width="120" height="120" alt="Chef Lina">
        <h5 class="fw-bold">Chef Lina</h5>
        <p class="text-muted">Spécialiste des desserts gourmands, Lina apporte douceur et créativité à chaque bouchée.</p>
      </div>
      <!-- Chef 2 -->
      <div class="tab-pane fade" id="chef2" role="tabpanel">
        <img src="https://randomuser.me/api/portraits/men/22.jpg" class="rounded-circle mb-3" width="120" height="120" alt="Chef Karim">
        <h5 class="fw-bold">Chef Karim</h5>
        <p class="text-muted">Expert en cuisine méditerranéenne, Karim marie les saveurs traditionnelles avec des touches modernes.</p>
      </div>
      <!-- Chef 3 -->
      <div class="tab-pane fade" id="chef3" role="tabpanel">
        <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle mb-3" width="120" height="120" alt="Chef Sophie">
        <h5 class="fw-bold">Chef Sophie</h5>
        <p class="text-muted">Chef vegan et innovante, Sophie crée des plats sains sans jamais sacrifier le goût.</p>
      </div>
    </div>
  </div>
</section>

<style>

    .text-pink {
  color: #e83e8c;
}

.btn-pink {
  background-color: #e83e8c;
  color: white;
  border: none;
  transition: 0.3s ease;
}

.btn-pink:hover {
  background-color: #d63384;
  color: white;
}

</style>