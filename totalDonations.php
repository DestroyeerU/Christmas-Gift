<!DOCTYPE html>
<html lang="pt-br">

<?php
  require('scripts/databaseManager.php');

  $donationsSaved = readDonations();
  $donationsGoal = readDonationsGoal();

  $foodSaved = $donationsSaved['food'];
  $moneySaved =  $donationsSaved['money'];
  $clothesSaved = $donationsSaved['clothes'];

  $foodGoal = $donationsGoal['food'];
  $moneyGoal =  $donationsGoal['money'];
  $clothesGoal = $donationsGoal['clothes'];

  $food = "$foodSaved/$foodGoal";
  $money = "$moneySaved/$moneyGoal";
  $clothes = "$clothesSaved/$clothesGoal";
?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styles/donationObjects.css">
  <link rel="stylesheet" href="styles/totalDonations.css">
  <title>Doação Natalina</title>
</head>
<body>

  <main>
    <section class="center">
      <h1 class="title">Total de Doações!</h1>
      <h3 class="description dark">
        Essas são todas as doações arrecadadas até o momento
      </h3>

      <div class="donations">
        <div class="donation">
          <img src="assets/clothe.png" alt="roupa">
          <span class="details">
            <?php echo "$clothes peças de roupa" ?>
          </span>
        </div>

        <div class="donation">
          <img src="assets/fork-knife-crossed.png" alt="roupa">
          <span class="details">
            <?php echo "$food kilogramas de alimentos" ?>
          </span>
        </div>

        <div class="donation">
          <img src="assets/money-bag.png" alt="roupa">
          <span class="details">
            <?php echo "R$ $money de dinheiro" ?>
          </span>
        </div>
      </div>
    </section>
  </main>
</body>
</html>

