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
          <form action="inc/filterroster.php" method="GET">
            <div class="row">
              <h4>Filter by: </h4>
              <div class="col">
                <h5>Roles: </h5>
                <button type="submit" name="pokeRole" value="attacker" class="btn btn-small btn-danger">
                  Attacker
                </button>
                <button type="submit" name="Role" value="defender" class="btn btn-small btn-success">
                  Defender
                </button>
                <button type="submit" name="Role" value="allrounder" class="btn btn-small btn-primary">
                  All rounder
                </button>
                <button type="submit" name="Role" value="supporter" class="btn btn-small btn-warning">
                  Supporter
                </button>
                <button type="submit" name="Role" value="speedster" class="btn btn-small btn-secondary">
                  Speedster
                </button>
              </div>
              <div class="col">
                <h5>Styles: </h5>
                <button type="submit" name="Style" value="melee" class="btn btn-small btn-info">
                  Melee
                </button>
                <button type="submit" name="Style" value="ranged" class="btn btn-small btn-dark">
                  Ranged
                </button>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
  
  <?php include 'reusable/conn.php' ?>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <?php include 'content/unitedeck.php' ?>
      </div>
    </div>
  </div>
</body>
</html>
