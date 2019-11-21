<?php 
require '../../functions/contractor.php';
require '../layouts/config.php';
startPage();
?>
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