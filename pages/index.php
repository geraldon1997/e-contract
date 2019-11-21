<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: http://localhost/e-contract/');
}
require 'layouts/config.php';

startPage();
?>
<div class="img-box">
    <div class="slides">
        <img src="img/download.jpeg" alt="">
    </div>

    <div class="slides">
        <img src="img/Highway_401_Windsor-Essex_Parkway_Construction.jpg" alt="">
    </div>

    <div class="slides">
        <img src="img/road-construction (1).jpg" alt="">
    </div>

    <div class="slides">
        <img src="img/road-construction.jpg" alt="">
    </div>
</div>

<script src="slide.js"></script>

<?php endPage(); ?>