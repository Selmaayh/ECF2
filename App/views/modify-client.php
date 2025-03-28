<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container mt-5">
        <h2>Modifier la tâche</h2>
        <form action="?action=updateClient" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($client['Id_client']) ?>">
            <div class="mb-3">
                <label for="title" class="form-label">nom :</label>
                <input type="text" class="form-control" name="nom" value="<?= htmlspecialchars($client['Nom_client']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">prenom :</label>
                <input type="text" class="form-control" name="prenom" value="<?= htmlspecialchars($client['Prenom']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">email :</label>
                <input type="text" class="form-control" name="email" value="<?= htmlspecialchars($client['Email']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">telephone :</label>
                <input type="text" class="form-control" name="telephone" value="<?= htmlspecialchars($client['N__de_telephone']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">adresse :</label>
                <input type="text" class="form-control" name="adresse" value="<?= htmlspecialchars($client['adresse']) ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Mettre à jour</button>
        </form>
        <a href="?id_client=<?= htmlspecialchars($client['Id_client']) ?>&action=voir&page=listClient" class="btn btn-secondary mt-3">Annuler</a>
    </div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>