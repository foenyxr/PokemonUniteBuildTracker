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
          <h1 class="display-6 mt-5 mb-5">Edit info</h1>
        </div>
      </div>
    </div>
  </div>
  
<?php include 'reusable/conn.php' ?>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="inc/editroster.php" method="POST">
            <div class="mb-3">
              <label for="pokeName" class="form-label">Pokemon name</label>
              <input type="text" class="form-control" id="pokeName" aria-describedby="pokeName" name="pokeName" >
            </div>
            <div class="mb-3">
              <label for="pokeImage" class="form-label">Image URL</label>
              <input type="text" class="form-control" id="pokeImage" name="pokeImage">
            </div>
            <div class="mb-3">
              <label for="pokeRole" class="form-label">Role</label>
              <input type="text" class="form-control" id="pokeRole" name="pokeRole">
            </div>
            <div class="mb-3">
              <label for="pokeStyle" class="form-label">Style</label>
              <input type="text" class="form-control" id="pokeStyle" name="pokeStyle">
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
          <form action="inc/deleteroster.php" method="POST">
            <div class="mb-3">
              <label for="pokeName" class="form-label">Pokemon name</label>
              <input type="text" class="form-control" id="pokeName" aria-describedby="pokeName" name="pokeName" >
            </div>            
            <button type="submit" class="btn btn-primary">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>


</body>
</html>