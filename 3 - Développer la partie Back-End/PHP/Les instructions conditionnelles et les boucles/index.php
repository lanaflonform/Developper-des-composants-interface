<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control Flow et Boucles</title>
</head>

<body>
<section>
  <h1>Exercice 1</h1>
  <h3>Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...</h3>
  <?php foreach (range(1, 150, 2) as $number): ?>
    <p><?= $number ?></p>
  <?php endforeach; ?>
</section>

<hr>

<section>
  <h1>Exercice 2</h1>
  <h3>Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers.</h3>
  <?php for ($i = 1; $i <= 500; $i++): ?>
    <p>Je dois faire des sauvegardes régulières de mes fichiers</p>
  <?php endfor; ?>
</section>

<hr>

<section>
  <h1>Exercice 3</h1>
  <h3>Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12}</h3>

  <table>
    <thead>
    <tr>
      <?php foreach (range(-1, 12) as $number): ?>
        <?php if ($number == -1): ?>
          <th></th>
        <?php else: ?>
          <th><?= $number ?></th>
        <?php endif; ?>
      <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php for ($i = 0; $i <= 12; $i++): ?>
      <tr>
        <td><?= $i ?></td>
        <?php for ($j = 0; $j <= 12; $j++): ?>
          <td><?= $i * $j ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
    </tbody>
  </table>
</section>

</body>
</html>
