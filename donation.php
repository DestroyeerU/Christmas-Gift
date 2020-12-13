<!DOCTYPE html>
<html lang="pt-br">

<?php
  require('scripts/databaseManager.php');

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $clothes = $_POST['clothes'];
  $food = $_POST['food'];
  $money = $_POST['money'];

  $fileName= $_FILES['photo']['name'];
  $fullTempPath = $_FILES['photo']['tmp_name'];
  $hasFile = $fileName !== "";

  $rootPath = getcwd();
  $fullFileNamePath = $rootPath . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR. $fileName;

  $directoryImagePath = 'images' . DIRECTORY_SEPARATOR . $fileName;

  move_uploaded_file($fullTempPath, $fullFileNamePath);

  $donationsSaved = readDonations();

  $clothesUpdated = $clothes + $donationsSaved['clothes'];
  $foodUpdated = $food + $donationsSaved['food'];
  $moneyUpdated = $money + $donationsSaved['money'];

  updateDonations($clothesUpdated, $foodUpdated, $moneyUpdated);
?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/donation.css">
  <link rel="stylesheet" href="styles/donationObjects.css">
  <title>Doação Natalina</title>

  <style>
    main .row {
      justify-content: <?=!$hasFile ? "center" : "" ?>;
    }

    main > a {
      display: <?=!$hasFile ? "block": "none"?>;
    }

    .right-side {
      display: <?=!$hasFile ? "none" : "flex" ?>;
    }
  </style>
</head>
<body>

  <main>
    <div class="row">
      <section class="left-side">
        <h1 class="title">Obriagado pela Doação!</h1>
        <h3 class="description dark">
          No dia 18 leve os itens prometidos
          para o Centro Social Anna Neumman, Rua Esteves Jacinto, 18 - Centro!
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

      <section class="right-side">
        <div class="profile">
          <img src=" <?php echo $directoryImagePath ?> " alt="usuário">
          <span>
            <?php echo $name ?>
          </span>
        </div>

        <a href="/totalDonations.php" class="link">
          Confira o total de doações coletadas
        </a>
      </section>
    </div>

    <a href="/totalDonations.php" class="link">
      Confira o total de doações coletadas
    </a>
  </main>
</body>
</html>

