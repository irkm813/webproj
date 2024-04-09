<?php
$counter = 0;
$directory = './Content/Images/Gallery';
$pattern = $directory . '/*.{jpg,png,gif}';
$images = glob($pattern, GLOB_BRACE);
?>

<div class="row gallery-container">
  <h1>Galéria<h1>
      <h3> Kép feltöltése </h3>
      <?php if (isset($_SESSION["user"])) { ?>
        <form method="post" action="/uploadimg" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-primary">Feltöltés</button>
        </form>
      <?php
      } else { ?>
        <h5> Kép feltöltéséhez jelentkezz be!</h5>
        <?php }
      foreach ($images as $image) {
        if ($counter % 2 == 0) { ?>
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <?php } ?>
          <img src="<?= $image ?>" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
          <?php
          if ($counter % 2 > 0) { ?>
          </div>
      <?php
          }
          $counter = $counter + 1;
        }
      ?>
</div>
</div>