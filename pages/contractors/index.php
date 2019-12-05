<?php 
require '../../functions/contractor.php';
require '../layouts/config.php';
startPage();
?>
<a href="../../forms/contractor registration form.php" 
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
    >register contractor</a>
    <hr>
<div class="details">
    <table border=1>
        <th>S / N</th>
        <th>company name</th>
        <th>tax no</th>
        <th>address</th>
        <th>business type</th>
        <th>business nature</th>
        <?php 
            $c = new Contractor(); 
            $c->read(); 
        ?>
    </table>
</div>

<?php endPage(); ?>