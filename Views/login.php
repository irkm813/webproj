<?php
include "raw-data.php";
if (isset($_GET["error"])) { ?>
    <div class="alert alert-<?= $loginErrors[$_GET["error"]]["style"] ?>" role="alert">
        <?= $loginErrors[$_GET["error"]]["text"] ?>
    </div>
<?php } ?>