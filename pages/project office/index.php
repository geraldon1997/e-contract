<?php 
require '../../functions/contract.php';
require '../layouts/config.php';
startPage();
?>
<a href="../../forms/contract creation form.php" 
    style="
        width:10%; 
        margin-left:20px; 
        background-color:blue; 
        border:none; 
        color:aliceblue;
        text-decoration:none;
        font-size:1.2em;
        font-weight: bold;
        padding:5px;
        border-radius:5px;"
    >create contract</a>
    <hr>
<div class="details">
    <table border=1>
        <th>contract no</th>
        <th>subject</th>
        <th>sender</th>
        <th>expire date</th>
        <th>type</th>
        <th>status</th>
        <?php
            $c = new Contract();
            $c->read();
        ?>
    </table>
</div>

<?php endPage(); ?>