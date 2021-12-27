<?php
session_start();

if (!($dosya = fopen("kisiler.txt", "r")))
{
    $dosya = fopen("kisiler.txt", "w");
}
else
{
    $dosya = fopen("kisiler.txt", "a");
}

if(isset($_POST['kayit']))
{
    $ad = $_POST['_ad'];
    $soyad = $_POST['_soyad'];
    $mail = $_POST['mail'];
    $cinsiyet = $_POST['cinsiyet'];
    $parola = $_POST['parola'];

    $kisi = $mail . " " . $parola . " ";
    fwrite($dosya, $kisi);

    fclose($dosya);

    header('refresh:3; url=index.php');
}

if (isset($_POST['giris']))
{
    $gmail = $_POST["mail"];
    $gparola = $_POST["parola"];

    $dosya = fopen('kisiler.txt', 'r');
    $kayitlimaildizi = array();
    $kayitliparoladizi = array();

    function mail_sifre_okuma($dosya, $kayitlimaildizi, $kayitliparoladizi)
    {
        global $kayitliparola, $kayitlimail;
        while (($oku = fgetc($dosya)) != ' ')
        {
            array_push($kayitlimaildizi, $oku);
        }

        while (($oku = fgetc($dosya)) != ' ')
        {
            array_push($kayitliparoladizi, $oku);
        }
 
        $kayitlimail = implode("", $kayitlimaildizi);
        $kayitliparola = implode("", $kayitliparoladizi);
    }
    
    $kontrol = 0;
    while(!feof($dosya))
    {
        mail_sifre_okuma($dosya, $kayitlimaildizi, $kayitliparoladizi);

        if (($gmail == $kayitlimail) && ($gparola == $kayitliparola))
        {
            $kontrol = 1;
            $_SESSION['mail'] = $_POST['mail'];
            header("refresh:2; url=giris.php");
            break;
        }
    }
 
    if ($kontrol == 0)
    {
        echo "Hatalı Giriş Yaptınız";
    }
    fclose($dosya);
}

?>
