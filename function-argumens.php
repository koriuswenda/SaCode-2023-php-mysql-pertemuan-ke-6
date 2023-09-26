<?php
function nama($nama, $alamat,  $umur =null)
{
    echo"Perkenalkan Nama Saya ". $nama .  "saya tinggal di". $alamat."<br>";
    echo "Umur Saya". $umur . "<br>";
};
nama('Calvin', 'Waena',20);
nama('Samuel', 'Sentani',21);
nama('Korius', 'Waena',22);
nama(' ', ' ',);

?>