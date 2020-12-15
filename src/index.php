<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/index.css">

  <link rel="stylesheet" href="components/areaFileSelector/areaFileSelector.css">
  <link rel="stylesheet" href="components/animatedInput/animatedInput.css">

  <title>Doação Natalina</title>
</head>
<body>

  <main>
    <h1 class="title">Faça um doação Natalina!</h1>
    <form action="donation.php" method="POST" enctype="multipart/form-data" class="row">
      <section class="left-side">
        <p class="description">
          Você vai tornar alguém da comunidade de Passo Largo mais feliz.
        </p>

        <div class="user-data-container">
          <div class="input-wrapper">
            <input type="text" class="animated-input" name="name" required="required">
            <span>Nome Completo</span>
          </div>

          <div class="input-wrapper">
            <input type="text" class="animated-input" name="phone" required="required">
            <span>Telefone</span>
          </div>

        </div>

        <div class="donations-container">
          <h3 class="description dark">
            Cadastre aqui o que você vai doar do dia 18/12
          </h3>

          <div class="row">
            <div class="input-wrapper">
              <input type="number" class="animated-input" name="clothes" required="required">
              <span>Roupas (Unidades)</span>
            </div>

            <div class="input-wrapper">
              <input type="number" class="animated-input" name="food" required="required">
              <span>Alimentos (Kg)</span>
            </div>
          </div>

          <div class="input-wrapper">
            <input type="number" class="animated-input" name="money" required="required">
            <span>Valor em dinheiro (R$)</span>
          </div>

        </div>

      </section>

      <section class="right-side">
        <label class="custom-file-upload">
          <input type="file" onchange="loadImagePreview()" name="photo"/>

          <div class="default">
            <img src="assets/upload.svg" alt="upload">
            Selecione sua foto
          </div>

          <img class="upload-preview" id="uploadPreview">
        </label>

        <p class="description">
          Ao clicar em Confirmar Doação você está se
          comprometendo à levar esses itens.
        </p>

        <button type="submit">
          Confirmar Doação
        </button>
      </section>
    </form>
  </main>

  <script src="components/areaFileSelector/areaFileSelector.js"></script>
</body>
</html>

