<?php
session_start();
if (!isset($_SESSION['loginname'])) {
    header('Location:login.php');
}
require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row">
        <h3>You will receive from Cookies Factory :</h3>
        <ul>
        <?php if (isset($_COOKIE['46'])) { ?>
            <li>   Pecan nuts              </li>
        <?php } ?>
        <?php if (isset($_COOKIE['36'])) { ?>
            <li>     Chocolate chips            </li>
        <?php } ?>
        <?php if (isset($_COOKIE['58'])) { ?>
            <li>     Full chocolate cookie            </li>
        <?php } ?>
        <?php if (isset($_COOKIE['32'])) { ?>
            <li>       M&M's&copy; cookies          </li>
        <?php } ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
