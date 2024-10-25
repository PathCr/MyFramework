<?php

use S_Sait\View;

/** @var View $this */

?>

<?php $this->getPart('/parts/header'); ?>

<?php echo $this->content ?>

<?php $this->getPart('parts/footer'); ?>