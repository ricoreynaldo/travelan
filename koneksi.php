<?php
$hostname = "localhost"; //hostname
$username = "root"; //username untuk login ke mysql
$password = ""; //password untuk login ke mysql
$database = "db_tiket2"; //nama database yang akan dikoneksikan/diakses
//membuat koneksi
$konek = new mysqli($hostname, $username, $password, $database);
//mengecek koneksi
if ($konek->connect_error) {
    //jika terjadi error, matikan proses dengan die() atau exit()
    die('Maaf koneksi gagal: ' . $konek->connect_error);
}