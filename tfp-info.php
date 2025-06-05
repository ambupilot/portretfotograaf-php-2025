<?php
require_once 'classes/Page.php';
$page = new Page('tfp-info');
include 'includes/header.php';
?>
<section>
    <?php $page->renderContent(); ?>
</section>
<?php include 'includes/footer.php'; ?>
