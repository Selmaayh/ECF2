<?php require_once __DIR__ . '/templates/header.php'; ?>
 
 <?php if (!empty($clients)):  ?>
     <div class="container mt-5">
     <h2 class="mb-4">📋 Liste des client</h2>
 
     <table class="table table-striped table-bordered">
         <thead class="table-dark">
             <tr>
                 <th>ID</th>
                 <th>Nom</th>
                 <th>Prenom</th>
                 <th>Email</th>
                 <th>Téléphone</th>
                 <th>Adresse</th>
             </tr>
         </thead>
         <tbody>
             <?php foreach ($clients as $client): ?>
                 <tr>
                     <td><?= htmlspecialchars($client['Id_client']) ?></td>
                     <td><?= htmlspecialchars($client['Nom_client']) ?></td>
                     <td><?= htmlspecialchars($client['Prenom']) ?></td>
                     <td><?= htmlspecialchars($client['Email']) ?></td>
                     <td><?= htmlspecialchars($client['N__de_telephone']) ?></td>
                     <td><?= htmlspecialchars($client['adresse']) ?></td>
                     <td>
                         <a href="?id_client=<?= $client['Id_client'] ?>&action=voir&page=listClient" class="btn btn-info btn-sm">Voir</a>
                         <a href="?id_client=<?= $client['Id_client'] ?>&action=modifier&page=listClient" class="btn btn-warning btn-sm">Modifier</a>
                         <a href="?id_client=<?= $client['Id_client'] ?>&action=supprimer&page=listClient" 
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?')">
                             Supprimer
                         </a>
                     </td>
                 </tr>
             <?php endforeach; ?>
         </tbody>
     </table>
 </div>
 <?php else: ?>
     <p style="text-align: center;">Aucun client trouvé.</p>
 <?php endif; ?>
 
 <?php require_once __DIR__ . '/templates/footer.php'; ?>