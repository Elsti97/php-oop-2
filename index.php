<?php
include_once __DIR__ . './classes/prodotto.php';
include_once __DIR__ . '/classes/category.php';
include_once __DIR__ . '/classes/giocattoli.php';
include_once __DIR__ . '/classes/accessori.php';
include_once __DIR__ . '/classes/cibo.php';

$category = [
  'Gatto' => new category('<i class="fa-solid fa-cat"></i>', ' Gatto'),
  'Cane' => new category('<i class="fa-solid fa-dog"></i>', ' Cane'),
  'Uccelli' => new category('<i class="fa-solid fa-dove"></i>', ' Uccello'),
  'Pesci' => new category('<i class="fa-solid fa-fish"></i>', ' Pesci')
];

$prodotti = [
  new cibo('https://picsum.photos/300/200?random=1', 'Royal Canin', '43.99', $category['Cane'], '545', 'prosciutto, riso'),
  new cibo('https://picsum.photos/300/200?random=2', 'Almo Nature', '44.99', $category['Cane'], '600', 'manzo, cereali'),
  new accessori('https://picsum.photos/300/200?random=3', 'Voliera Ferplast Bella Casa', '184.99', $category['Uccelli'], 'Materiale: Legno', 'M L 83 x P 67 x H 153 cm'),
  new giocattoli('https://picsum.photos/300/200?random=4', 'Topini di peluche Trixie', '4.99', $category['Gatto'], 'Morbido con codina in corda', '8,5cm x 10cm'),
];

?>




<!doctype html>
<html lang="en">

<head>
  <title>PHP OOP 2</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <header>
  </header>
  <main>

    <div class="container">
      <h1>Boolshop</h1>

      <div class="row">
        <h2>I nostri prodotti</h2>
        <?php foreach ($prodotti as $elem) { ?>
          <div class="card m-3" style="width: 18rem">
            <img src="<?php echo $elem->immagine ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo ($elem->nome) ?>
              </h5>
              <p>Prezzo:
                <?php echo ($elem->prezzo) ?> €
              </p>

              <p>
                <?php echo ($elem->category->nome);
                echo ($elem->category->icona); ?>
              </p>
              <?php
              if ($elem instanceof cibo) {
                echo '<p>Peso: ' . $elem->peso . 'g</p>';
                echo '<p>Ingredienti: ' . $elem->ingredienti . '</p>';
              } else if ($elem instanceof giocattoli) {
                echo '<p>Caratteristiche:' . $elem->caratteristiche . '</p>';
                echo '<p>Dimensioni: ' . $elem->dimensioni . '</p>';
              } else if ($elem instanceof accessori) {
                echo '<p>' . $elem->materiale . '</p>';
                echo '<p>Dimensioni: ' . $elem->dimensioni . '</p>';
              } ?>
            </div>

          </div>
        <?php } ?>
      </div>
    </div>



  </main>
  <footer>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>