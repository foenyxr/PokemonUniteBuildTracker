<?php
          foreach($pokemon as $poke){
            echo '<div class="col-md-2 mt-2 mb-2">
                    <div class="card ' . '">
                      <img class="card-img-top" src="'. $poke["image_url"] .'" alt="Card image cap" style="background-color: #DFDFDF;">
                      <div class="card-body">
                        <h5 class="card-title">' . $poke['Name'] . '</h5>
                        <span class="badge bg-warning">' . $poke['Role'] . '</span>
                        <span class="badge bg-secondary">' . $poke['Style'] . '</span>
                      </div>
                    </div>
                  </div>';  
          }
        ?>