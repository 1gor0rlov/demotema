<?php
/* Template Name: Templejt2 */
?>
<?php //get_header(); ?>

<?php

$name = $_POST['ime'];
$email = $_POST['email'];
$kljuc = $_POST['kljuc'];
$var = 'igor';

$kljuc = md5($kljuc);

$var = md5($var);

// echo $kljuc;
// var_dump($_POST);
if ($kljuc == $var) {
  echo 'Ime: ' . $name . ' E-mail: ' . $email . ' Kljuc: ' . $kljuc;
} else {
  echo 'Greska!';
}

// echo json_encode($array);
?>

<?php //get_footer(); ?>
