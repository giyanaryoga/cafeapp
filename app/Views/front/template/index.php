<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('front/template/header'); ?>
</head>

<body>
    <!-- Responsive navbar-->
    <?= $this->include('front/template/nav'); ?>

    <!-- Page Content-->
    <?= $this->renderSection('page'); ?>

    <!-- Footer-->


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url(); ?>/js/scripts.js"></script>
</body>

</html>