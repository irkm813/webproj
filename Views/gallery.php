<?php
$counter=0;
$directory = './Content/Images/Gallery';
$pattern = $directory . '/*.{jpg,png,gif}';
$images = glob($pattern, GLOB_BRACE);

echo '<div class="row gallery-container">';

foreach ($images as $image) {

  if ($counter%2==0){

    echo '<div class="col-lg-4 col-md-12 mb-4 mb-lg-0 align-baseline">';
  }

  echo 
    '<img
      src="' . $image . '"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />';

  if ($counter%2>0){
    echo '</div>' ;
  }
  $counter = $counter+1;
}

echo '</div>' ;

?>