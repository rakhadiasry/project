<section class="content-header">
    <h1>
        Form_data 
        <small>Test</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Data Pap</li>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data PAP</h3>
            <div class="pull-right">
                <a href="<?= site_url('form/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>

            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Enumerator</th>
                        <th>Nomor Hp    </th>
                        <th>Nama Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>Kampung</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>Usia KK</th>
                        <th>Nama Responden</th>
                        <th>Usia Responden</th>
                        <th>Jenis Kelamin</th> <!-- Radio button -->
                        <th>Nomor Hp Responden</th> <!-- nomor_res -->
                        <th>Agama/ Kepecayaan</th> <!-- Radio button -->
                        <th>Lama Tinggal</th> <!-- Radio button -->
                        <th>Suku Asal</th> <!-- Radio button -->
                        <th>Jumlah Anggota Keluarga</th> 
                        <th>Pendidikan Terakhir Responden</th> <!-- Radio button -->
                        <th>Mata Pencarian Utama KK</th> <!-- checkbox -->
                        <th>Mata Pencarian Kedua KK</th> <!-- checkbox -->
                        <th>Jenis Keterampilan KK</th> <!-- checkbox -->
                        <th>Asal Keterampilan KK</th> <!-- checkbox -->
                        <th>Jenis Keterampilan Responden</th> <!-- checkbox -->
                        <th>Asal Keterampilan Responden</th> <!-- checkbox -->
                        <th>Kegiatan Kepala Keluarga</th>
                        <th>Makan Dalam Sehari</th> <!-- radio -->
                        <th>Tempat Berobat & Alasan</th>
                        <th>Memiliki Jaminan Kesehatan</th> <!-- radio -->
                        <th>Penilaian pelayanan puskesmas</th>
                        <th>Kendala dalam Pendidikan anak</th>
                        <th>Kondisi sekolah anak</th>
                        <th>Total biaya pendidikan</th>
                        <th>Total luas lahan sebelum proyek</th>
                        <th>Luas lahan terkena proyek</th>
                        <th>Jenis tanaman lahan bebas</th>
                        <th>Status lahan dibebaskan</th> <!-- checkbox -->
                        <th>Sisa lahan yang dimiliki</th>
                        <th>Hasil yang di garap</th>
                        <th>Pertanian dijual ke</th> <!-- checkbox -->
                        <th>Hasil peternakan</th>
                        <th>Hasil ternak dijual ke</th> <!-- checkbox -->
                        <th>Hasil budidaya perikanan</th>
                        <th>Hasil budidaya dijual</th> <!-- checkbox -->
                        <th>Hasil tangkapan ikan</th> 
                        <th>Hasil tangkapan dijual </th><!-- checkbox -->
                        <th>Hasil hutan</th> 
                        <th>Kemana hasil hutan dijual</th> <!-- checkbox -->
                        <th>Hasil galian/tambang</th> 
                        <th>Mendapatkan izin dari pemerintah ?</th>
                        <th>Hasil galian/tambang dijual </th> <!-- checkbox -->
                        <th>Status kepemilikan rumah</th> <!-- radio -->ko
                        <th>Luas bangunan & lahan</th>
                        <th>Material bangunan rumah</th>
                        <th>Kondisi bangunan rumah</th> <!-- checkbox -->
                        <th>Tahun rumah di bangun</th>
                        <th>Tahun MCK di bangun</th>
                        <th>Sumber dana membangun rumah</th> <!-- checkbox -->
                        <th>Jumlah orang dalam rumah</th>
                        <th>Sirkulasi udara rumah </th> <!-- checkbox -->
                        <th>Penerangan/ Pencahayaan rumah </th> <!-- checkbox -->
                        <th>Barang yang dimiliki</th>
                        <th>Bangunan untuk usaha/ dagang</th>
                        <th>Sumber penerangan</th> <!-- checkbox -->
                        <th>Sumber air bersih</th> <!-- checkbox -->
                        <th>Sarana mandi & BAB</th> <!-- checkbox -->
                        <th>Pengelolaan sampah </th> <!-- checkbox -->
                        <th>Pengelolaan limbah cair</th> <!-- checkbox -->
                        <th>Jumlah kendaraan pribadi</th>
                        <th>Transporatasi yang biasa dipakai</th> <!-- checkbox -->
                        <th>Menggunakan HP? jumlah</th> 
                        <th>Uang setelah pembebasan & untuk apa</th>
                        <th>Memiliki usaha dagang</th> <!-- checkbox -->
                        <th>Omzet usaha dagang</th>
                        <th>Gaji perbulan </th>  <!-- checkbox -->
                        <th>Gaji yang di dapatkan</th>
                        <th>Kiriman dari orang lain</th> <!-- checkbox -->
                        <th>Jumlah kiriman</th> 
                        <th>Dana Pensiun</th> <!-- checkbox -->
                        <th>Jumlah dana pensiun</th>
                        <th>Sumber lain nya </th>
                        <th>Jumlah sumber lain nya</th>
                        <th>Total keseluruhan pendapatan perbulan</th>
                        <th>Pengeluaran sebulan </th>
                        <th>Pendapatan di banding tahun lalu </th>
                        <th>Apakah pendapatan cukup untuk kebutuhan </th>
                        <th>Masalah ekonomi yang dihadapi</th>
                        <th>Dalam bentuk apa dapat bantuan</th> <!-- checkbox -->
                        <th>Dari mana meminjam uang</th> <!-- checkbox -->
                        <th>Punya rekening bank ?</th> <!-- checkbox -->
                        <th>Pinjangan dalam keadaan terdesak</th><!-- checkbox -->
                        <th>Keperluan meminjam terdesak</th>
                        <!-- sumbar daya sosial -->
                        <th>Ada kerjasama gotong royong</th><!-- checkbox -->
                        <th>Seberapa sering </th> <!-- checkbox -->
                        <th>partisipasi dalam kegiatan gotong royong </th> <!-- checkbox -->
                        <th>Partisipasi anda dalam kegiatan masyarakat </th>
                        <th>Kegiatan yang aktif dilakukan</th>
                        <th>Kegiatan agama yang aktif</th>
                        <th>Sumber pengetahuan pertanian,kesehatan dll</th><!-- checkbox -->
                        <th>Ikut terlibat organisasi tertentu</th><!-- checkbox -->
                        <th>jika ikut, nama organisasi</th> <!-- checkbox -->
                        <th>posisi dalam organisasi</th> <!-- checkbox -->
                        <th>Tingkat partisipasi</th> <!-- checkbox -->
                        <th>Manfaat yang di peroleh organisasi</th> 
                        <th>Kondisi keamanan lingkungan</th> <!-- checkbox -->
                        <th>berikan alasan kemanan </th>
                        <th>Pernah terjadi konflik </th> <!-- checkbox -->
                        <th>Jika pernah jelaskan</th>
                        <th>Siapa saja yang terlibat</th> <!-- checkbox -->
                        <th>Pihak mana yang menyelesaikan</th> <!-- checkbox -->
                        <th>Mekanisme penyelesaian </th> <!-- checkbox -->
                        <th>Bencana yang sering terjadi</th><!-- checkbox -->
                        <!-- Persepsi-->
                        <th>Pendapat tentang perushaan SERD</th>
                        <th>Apa saja yang di berikan</th>
                        <th>Saran untuk perushaan SERD</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td> <?= $no++ ?>.</td>
                            <td><?= $data->nama_enumerator?></td>
                            <td><?= $data->nomor_enumerator?></td>
                            <td><?= $data->nama_kabupaten?></td>
                            <td><?= $data->kecamatan?></td>
                            <td><?= $data->desa?></td>
                            <td><?= $data->kampung?></td>
                            <td><?= $data->nama_kk ?></td>
                            <td><?= $data->usia_kk ?></td>
                            <td><?= $data->nama_responden ?></td>
                            <td><?= $data->usia_responden ?></td>
                            <td><?= $data->jenis_kelamin?></td>
                            <td><?= $data->nomor_res?></td>
                            <td><?= $data->agama_res?></td>
                            <td><?= $data->lama_tinggal?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('form/edit/'.$data->pap_id) ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="<?= site_url('form/del/'.$data->pap_id) ?>" onclick="return confirm('Apakah anda yakin hapus data?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>