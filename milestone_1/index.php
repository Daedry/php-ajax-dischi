<?php

include __DIR__ . '/./layout/db.php';

include __DIR__ . '/./layout/head.php';

include __DIR__ . '/./layout/header.php';

// include __DIR__ . '/../layout/main.php';

?>

<main>
    <div class="container">
        <div class="wrapper d-flex wrap cg-2">
            <?php include __DIR__ . '/./partials/card.php'; ?>
        </div>
        <!-- /.wrapper -->
    </div>
    <!-- /.container -->
</main>

<?php

include __DIR__ . '/./layout/footer.php';
