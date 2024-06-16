<?php
save_invit($conn);

Header("Location:index.php?page=profile&n_user=".$_GET['n_user']);

?>