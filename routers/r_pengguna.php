<?php
include '../controllers/c_pengguna.php';
$data = new c_pengguna();
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$outlet = $_POST['id_outlet'];
$role = $_POST['role'];

if ($_GET['aksi'] == 'tambah') {
    $data->insert_data($id, $nama, $username, $password, $outlet, $role);
} elseif ($_GET['aksi'] == 'update') {
    $data->update($id, $nama, $username, $password, $outlet, $role);
} elseif ($_GET['aksi'] == 'hapus') {
    $id = $_GET['id'];
    $data->hapus($id);
}
?>