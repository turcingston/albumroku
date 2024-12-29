<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jmeno = htmlspecialchars($_POST['jmeno']);
    $prijmeni = htmlspecialchars($_POST['prijmeni']);
    $pohlavi = htmlspecialchars($_POST['pohlavi']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $nazev = htmlspecialchars($_POST['nazev']);
    $umelec = htmlspecialchars($_POST['umelec']);
    $zanr = htmlspecialchars($_POST['zanr']);
    $hodnoceni = (int)$_POST['hodnoceni'];
    $explicitni = isset($_POST['explicitni']) ? 'Ano' : 'Ne';
    $komentar = htmlspecialchars($_POST['komentar']);
    $datum = date('d.m.Y H:i');

    $data = "$datum;$jmeno;$prijmeni;$pohlavi;$email;$nazev;$umelec;$zanr;$hodnoceni;$explicitni;$komentar\n";

    file_put_contents('data.txt', $data, FILE_APPEND);

    header('Location: zobrazit_hodnoceni.php');
    exit;
}
?>