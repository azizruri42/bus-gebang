<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">

    <title>Bus Gebang</title>
</head>
<body>
    
    <div class="main-page container-fluid">
        <div class="header-page row">
            <div class="col-md">
                <img class="img-fluid" src="<?php echo base_url('assets/images/ttpg.jpg') ?>">
            </div>
            <div class="col-md text-center brand-title">
                <h1 class="font-weight-bold">BUS-GEBANG.COM</h1>
                <h2 class="mt-5">TIKET BUS SEMPATI STAR ONLINE</h2>
            </div>
        </div>
        <div class="container-fluid py-2 header-info">
            <p class="mb-0">
                <span id="now-time"></span>
                <span class="font-weight-bold ml-3">Reservasi: 021 4870 2800</span>
            </p>
        </div>
        <div class="page-body container-fluid row">
            <div class="col-md-2 py-5" style="background: #E6F3FF">
                <div class="nav flex-column nav-pills" aria-orientation="vertical">
                    <a class="nav-link" href="<?php echo base_url("internal") ?>">Divisi Internal</a>
                    <a class="nav-link" href="#v-pills-profile" >Agen</a>
                    <a class="nav-link" href="#v-pills-messages">Kantor</a>
                    <a class="nav-link" href="#v-pills-settings">Tentang Kami</a>
                </div>
            </div>
            <div class="col-md p-3">
                <p class="text-center mb-0">
                SELAMAT DATANG MARI BERGABUNG DENGAN KAMI <br>
                Website ini adalah sebuah media untuk pemesanan tiket bus dengan cara yang sangat mudah. Anda cukup mengisi colom Kota Tujuan sesuai dengan tujuan anda, Isi tanggal berangkat sesuai tanggal yg akan anda rencanakan kemudian isi jumlah kursi sesuai berapa orang yang akan berangkat setelah itu klik kotak <b>CARI TIKET</b>
                </p>
                <hr>
                <p class="text-center">Kami akan melayani perjalanan melalui</p>
                <P class="font-weight-bold text-center">Lintas Timur Sumatra</P>
                <p class="text-center">Sesuai dengan KOTA TUJUAN</p>
                <p class="text-center font-weight-bold">Palembang, Jambi, Pekan Baru, Medan</p>
                <p class="text-center">
                Adapun rekan rekan yg mempunyai tujuan ke daerah ACEH NANGROE SALAM Kami akan mentransitkan anda dengan bus yang sama di Kantor pusat Medan sesuai tujuan Anda.
                </p>
                <h5 class="font-weight-bold text-center">Untuk Keterangan Lebih Lanjut Silahkan Menghubungi</h5>
                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=082114049412" class="btn btn-lg btn-success" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    0821-1404-9412
                    </a>
                </div>
            </div>
            <div class="col-md py-3">
                <form>
                    <div class="form-group">
                        <label for="input-asal"><i class="fal fa-bus fa-fw"></i><b>Asal</b></label>
                        <select class="form-control form-control-sm" id="input-asal"></select>
                    </div>
                    <div class="form-group">
                        <label for="input-tujuan-akhir"><i class="far fa-map-marker-alt fa-fw"></i><b>Tujuan Akhir</b></label>
                        <select class="form-control form-control-sm" id="input-tujuan-akhir"></select>
                    </div>
                    <div class="form-group">
                        <label for="input-kota-tujuan"><i class="far fa-map-marker-alt fa-fw"></i><b>Kota Tujuan</b></label>
                        <select class="form-control form-control-sm" id="input-kota-tujuan">
                            <option value="" selected>Pilih satu</option>
                            <option value="">Aek Kanopan</option>
                            <option value="">Banda Aceh</option>
                            <option value="">Bandar Jaya</option>
                            <option value="">Binjay</option>
                            <option value="">Duri</option>
                            <option value="">Lampung</option>
                            <option value="">Langsa</option>
                            <option value="">Lhokseumawe</option>
                            <option value="">Lhoksukon</option>
                            <option value="">Limapuluh</option>
                            <option value="">Lubuk Pakam</option>
                            <option value="">Menggala</option>
                            <option value="">Palembang</option>
                            <option value="">Pangkalan Kerinci</option>
                            <option value="">Sigli</option>
                            <option value="">Tapak Tuan</option>
                            <option value="">Tebing Tinggi</option>
                            <option value="">Tulang Bawang</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-keberangkatan"><i class="far fa-calendar-week fa-fw"></i><b>Tanggal Keberangkatan</b></label>
                        <input type="date" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="input-jumlah-kursi"><i class="far fa-loveseat fa-fw"></i><b>Jumlah Kursi</b></label>
                        <select class="form-control form-control-sm" id="input-jumlah-kursi">
                            <option value="" selected>Pilih jumlah kursi</option>
                            <option value="">1 Kursi</option>
                            <option value="">2 Kursi</option>
                            <option value="">3 Kursi</option>
                            <option value="">4 Kursi</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary container-fluid">Cari Tiket</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url("assets/js/jquery.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/app.js") ?>"></script>
</body>
</html>