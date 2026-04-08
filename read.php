<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirleft - Guide Pratique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; }
        .hero-mirleft { background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1539139103213-ed200818ec9b?auto=format&fit=crop&w=500&q=80'); background-size: cover; color: white; padding: 40px 20px; border-radius: 0 0 30px 30px; }
        .card-custom { border: none; border-radius: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .souk-badge { background-color: #fd7e14; color: white; font-weight: bold; border-radius: 10px; padding: 5px 15px; }
    </style>
</head>
<body>

<div class="hero-mirleft text-center mb-4">
    <h1 class="fw-bold">Bienvenue à Mirleft</h1>
    <p>Guide des services essentiels</p>
</div>

<div class="container">
    <div class="card card-custom p-3 mb-4 border-start border-danger border-5">
        <h6 class="text-danger fw-bold text-uppercase small">Urgences Locales</h6>
        <div class="d-flex justify-content-between align-items-center mt-2">
            <div>
                <span class="d-block fw-bold">Gendarmerie Royale</span>
                <small class="text-muted">Sécurité & Aide</small>
            </div>
            <a href="tel:177" class="btn btn-danger btn-sm px-3 rounded-pill">177</a>
        </div>
        <hr>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <span class="d-block fw-bold">Ambulance / Pompiers</span>
                <small class="text-muted">Protection Civile</small>
            </div>
            <a href="tel:150" class="btn btn-danger btn-sm px-3 rounded-pill">150</a>
        </div>
    </div>

    <div class="card card-custom p-3 mb-4">
        <div class="d-flex align-items-center mb-2">
            <i class="bi bi-shop fs-4 text-warning me-2"></i>
            <h6 class="mb-0 fw-bold">Marchés et Souks</h6>
        </div>
        <p class="small text-muted">Le grand <strong>Souk hebdomadaire</strong> de Mirleft a lieu tous les :</p>
        <div class="text-center">
            <span class="souk-badge">CHAQUE LUNDI</span>
        </div>
        <a href="https://www.google.com/maps/search/Souk+Mirleft" target="_blank" class="btn btn-outline-dark btn-sm w-100 mt-3 rounded-pill">Voir le lieu sur Maps</a>
    </div>

    <div class="row g-3">
        <div class="col-6">
            <div class="card card-custom p-3 h-100 text-center">
                <i class="bi bi-capsule text-primary fs-3 mb-2"></i>
                <span class="fw-bold d-block">Pharmacie</span>
                <a href="https://www.google.com/maps/search/Pharmacie+Mirleft" target="_blank" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-6">
            <div class="card card-custom p-3 h-100 text-center">
                <i class="bi bi-bank text-success fs-3 mb-2"></i>
                <span class="fw-bold d-block">ATM / Cash</span>
                <a href="https://www.google.com/maps/search/ATM+Banque+Mirleft" target="_blank" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-custom p-3 text-center">
                <i class="bi bi-geo-alt-fill text-info fs-3 mb-2"></i>
                <span class="fw-bold d-block">Hôpital / Centre de Santé</span>
                <small class="text-muted">Centre de Santé Urbain de Mirleft</small>
                <a href="https://www.google.com/maps/search/Centre+de+santé+Mirleft" target="_blank" class="stretched-link mt-2 text-decoration-none">Y aller</a>
            </div>
        </div>
    </div>

    <footer class="text-center my-5 small text-muted">
        <p>Mirleft Digital Guide<br>Scannez pour l'essentiel.</p>
    </footer>
</div>

</body>
</html>