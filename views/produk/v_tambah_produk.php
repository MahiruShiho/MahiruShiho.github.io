<?php 
    include_once '../template/header.php';
    include_once '../template/sidebar.php';
    include_once '../template/topbar.php';
    include_once '../../controllers/c_produk.php';
    include_once '../../controllers/c_outlet.php';


    $perintah = new c_produk();
    $perintah2 = new c_outlet();
    ?>

    <div class="row" style="background-color: white;">
        <div class="col">
        </div>
        <div class="col-5" style=" height:648px;">
            <h2 style="margin-top:80px; margin-bottom:30px; text-align: center;">Tambah Produk</h2>
            <form action="../../routers/r_produk.php?aksi=tambah" method="POST">
                <div class="mb-3">
                    <!-- <label for="exampleInputEmail1" class="form-label">ID</label> --> <input type="text"
                        class="form-control" name="id" hidden>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Paket</label> <input type="text"
                        class="form-control" name="namaket">
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"></label>
                <select name="jenispak" id="" class="form-select">
                    <option>Jenis Paket</option>
                    <option value="kilon">Teing naon ieu</option>
                    <option value="selimut">Selimut</option>
                    <option value="bed_cover">Sepray</option>
                    <option value="kaos">Kaos</option>
                    <option value="lain">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"></label>
                    <select name="id_outlet" id="" class="form-select">
                    <option>Outlet</option>
                    <?php foreach ($perintah2->getoutlet() as $data2) { ?>
                        <option value="<?php echo $data2->id ?>"><?= $data2->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga</label> <input type="text"
                        class="form-control" name="harga">
                </div>
                <button style="" type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
        <div class="col" style="background-color: white;">
        </div>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"
    integrity="sha384-u10knCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTP00mMi466C8"
    crossorigin="anonymous"></script>
    <script src="../assets/js/bundle.js?ver=3.1.2"></script>
    <script src="../assets/js/scripts.js?ver=3.1.2"></script>
</body>
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</html>