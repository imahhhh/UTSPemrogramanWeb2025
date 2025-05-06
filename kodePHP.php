<?php
if (isset($_GET[' nama '])) {
    $nama =
htmlspecialchars($_GET[' nama ']) ;
    echo "Helo, $nama!" ;
} else {
    echo "Halo, Siti Muslimah";
}
?>