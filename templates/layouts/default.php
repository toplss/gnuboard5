<!-- templates/layouts/default.php -->

<?php 
$this->insert('layouts/header');

$this->insert('layouts/'.$page, ['result' =>  $result]);

$this->insert('layouts/footer')    
?>

