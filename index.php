<?php
session_start();
if (!isset($_SESSION['loginname'])) {
    header('Location:login.php');
}
require_once 'inc/data/products.php';
require_once 'inc/head.php';

if (isset($_GET['add_to_cart'])) {
    switch ($_GET['add_to_cart']) {
        case 46:
            setcookie('46', '1', time() + 2 * 24 * 3600);
            break;
        case 36:
            setcookie('36', '1', time() + 2 * 24 * 3600);
            break;
        case 58:
            setcookie('58', '1', time() + 2 * 24 * 3600);
            break;
        case 32:
            setcookie('32', '1', time() + 2 * 24 * 3600);
            break;
    }
 var_dump($_COOKIE);

}
?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
