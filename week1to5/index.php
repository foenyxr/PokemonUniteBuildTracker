<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
      <div class="row">
    
    <?php 
        $connect = mysqli_connect('localhost', 'root', 'root', 'inclasslabdb');

        if(!$connect) {
            echo 'Error code: '. mysqli_connect_errno();
            echo 'Error code: '. mysqli_connect_error();
            exit;
        }

        $query = 'SELECT * from colors';
        $result = mysqli_query($connect, $query);

        if(!$result) {
            echo 'error msg '. mysqli_error($connect);
            exit;
        } else {
            // echo 'the query found '. mysqli_num_rows($result);
        }
        
        foreach($result as $color) {
            echo
                        '<div class="col-md-3">
                            <div class="card mt-2 mb-2" style="">
                            <div class="card-header">
                            <h5 class="card-title">' . $color['Name'] . '</h5> </div>
                                <div class="card-body">
                                    <p class="card-text" style="background-color:' . $color['Hex'] . '; ">' . $color['Hex'] . '</p>
                                </div>
                            </div>
                        </div>';
        }
    
    ?>
</div>
</div>
</body>
</html>