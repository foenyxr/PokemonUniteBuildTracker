<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PokémonUnite - Build Tracker</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php include 'reusable/nav.php' ?>
  
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-6 mt-5 mb-5">Current available pokémon in Unite (Patch 1.14.2.10) </h1>
        </div>
      </div>
    </div>
  </div>
  
  <?php include 'reusable/conn.php' ?>

  <div class="container-fluid">
    <div class="container">
      <div class="row">

        <?php include 'pages/unitedeck.php' ?>

      </div>
    </div>
  </div>
</body>
</html>
