<?php
include '../controllers/c_transaksi.php';
include_once '../controllers/c_pelanggan.php';

// // Register pelanggan
$data = new c_transaksi();
$produk = new c_pelanggan();

//Transaksi
$id = $_POST['id'];
$outlet = $_POST['id_outlet'];
$invoice = $_POST['invoice'];
$member = $_POST['id_member'];
$tgl = $_POST['tgl'];
$batass = $_POST['batass'];
// $tglbayar = $_POST['tglbayar'];
// $biayatam = $_POST['biayatam'];
// $diskon = $_POST['diskon'];
// $pajak = $_POST['pajak'];
$status = $_POST['status'];
$dibayar = $_POST['dibayar'];
$user = $_POST['id_user'];
$produk = $_POST['id_produk'];
$qty = $_POST['qty'];
$keterangan = $_POST['keterangan'];


if ($_GET['aksi'] == 'tambah2') {
    $data->insert_data2($id, $outlet, $invoice, $member, $tgl, $batass, $status, $dibayar, $user, $produk, $qty, $keterangan);
} elseif ($_GET['aksi'] == 'update') {
    $data->update($id, $status);
} elseif ($_GET['aksi'] == 'updat') {
     $data->update2($id, $dibayar);
} elseif ($_GET['aksi'] == 'hapus') {
    $id = $_GET['id'];
    $data->hapus($id);
}

// Transaksi


?>