<?php

if (!isset($_SESSION['user'])) {
## Redirect Home if not logged in
header('Location: index.php');
}

?>