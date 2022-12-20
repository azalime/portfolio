<!-- TABLEAU DE BORD (ADMIN UNIQUEMENT) -->

<?php require_once '../assets/inc/back/head.php' ?>
<title>Tableau de bord</title>

<?php require_once '../core/authentificationAdmin.php' ?>

<body>

    <?php require_once '../assets/inc/back/header.php' ?>

    <main>
        <div class="bg-dark mb-2" style="border: 2px solid #666;">
            <h4 class="text-center pt-2">TABLEAU DE BORD</h4>
        </div>
        <?php
        if (isset($_SESSION["message"])) {
            echo '<p class="alert alert-success fs-5 text-center p-1">' . $_SESSION["message"] . '</p>';
            unset($_SESSION["message"]);
        };
        ?>
        <div class="card bg-dark" style="border: 2px solid #666;">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis magnam fuga beatae sit sunt dolorum, iste quae harum nulla recusandae vel amet soluta nam cumque, velit molestias numquam explicabo quo?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis magnam fuga beatae sit sunt dolorum, iste quae harum nulla recusandae vel amet soluta nam cumque, velit molestias numquam explicabo quo?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis magnam fuga beatae sit sunt dolorum, iste quae harum nulla recusandae vel amet soluta nam cumque, velit molestias numquam explicabo quo?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis magnam fuga beatae sit sunt dolorum, iste quae harum nulla recusandae vel amet soluta nam cumque, velit molestias numquam explicabo quo?</p>
        </div>
    </main>

    <?php require_once '../assets/inc/back/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>