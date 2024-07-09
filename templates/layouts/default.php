<!-- templates/layouts/default.php -->
<?php 

$this->insert('layouts/header', $templatArr->getterArr());

$this->insert('layouts/'.$page, $templatArr->getterArr());

$this->insert('layouts/footer', $templatArr->getterArr());
?>

