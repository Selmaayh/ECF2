<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container mt-5">
    <h2>Détails de la tâche</h2>
    <p><strong>id :</strong> <?= htmlspecialchars($client['Id_client']) ?></p>
    <p><strong>nom :</strong> <?= htmlspecialchars($client['Nom_client']) ?></p>
    <p><strong>prenom :</strong> <?= htmlspecialchars($client['Prenom']) ?></p>
    <p><strong>email :</strong> <?= htmlspecialchars($client['Email']) ?></p>
    <p><strong>telephone:</strong> <?= htmlspecialchars($client['N__de_telephone']) ?></p>
    <p><strong>adresse:</strong> <?= htmlspecialchars($client['adresse']) ?></p>

    <a href="?id_client=<?= htmlspecialchars($client['Id_client']) ?>&action=modifier&page=listClient" class="btn btn-warning">Modifier</a>
    <a href="?" class="btn btn-secondary">Retour à la liste</a>
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>