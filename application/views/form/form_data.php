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
                        <th>Jenis Kelamin</th> 
                        <th>Nomor Hp Responden</th> 
                        <th>Agama/ Kepecayaan</th>
                        <th>Lama Tinggal</th> 
                        <th>Suku Asal</th>
                        <th>Jumlah Anggota Keluarga</th> 
                        <th>Pendidikan Terakhir Responden</th> 
                        <th>Mata Pencarian Utama KK</th> 
                        <th>Mata Pencarian Kedua KK</th>
                        <th>Jenis Keterampilan KK</th> 
                        <th>Asal Keterampilan KK</th>  
                        <th>Jenis Keterampilan Responden</th>
                        <th>Asal Keterampilan Responden</th> 
                        <th>Kegiatan Kepala Keluarga</th>
                        <th>Makan Dalam Sehari</th> 
                        <th>Tempat Berobat & Alasan</th>
                        <th>Memiliki Jaminan Kesehatan</th> 
                        <th>Penilaian pelayanan puskesmas</th>
                        <th>Kendala dalam Pendidikan anak</th>
                        <th>Kondisi sekolah anak</th>
                        <th>Total biaya pendidikan</th>
                      <!--  <th>Total luas lahan sebelum proyek</th>
                        <th>Luas lahan terkena proyek</th>
                        <th>Jenis tanaman lahan bebas</th>
                        <th>Status lahan dibebaskan</th> 
                        <th>Sisa lahan yang dimiliki</th>
                        <th>Hasil yang di garap</th>
                        <th>Pertanian dijual ke</th> 
                        <th>Hasil peternakan</th>
                        <th>Hasil ternak dijual ke</th> 
                        <th>Hasil budidaya perikanan</th>
                        <th>Hasil budidaya dijual</th> 
                        <th>Hasil tangkapan ikan</th> 
                        <th>Hasil tangkapan dijual </th>
                        <th>Hasil hutan</th> 
                        <th>Kemana hasil hutan dijual</th> 
                        <th>Hasil galian/tambang</th> 
                        <th>Mendapatkan izin dari pemerintah ?</th>
                        <th>Hasil galian/tambang dijual </th> 
                        <th>Status kepemilikan rumah</th> 
                        <th>Luas bangunan & lahan</th>
                        <th>Material bangunan rumah</th>
                        <th>Kondisi bangunan rumah</th> 
                        <th>Tahun rumah di bangun</th>
                        <th>Tahun MCK di bangun</th>
                        <th>Sumber dana membangun rumah</th>
                        <th>Jumlah orang dalam rumah</th>
                        <th>Sirkulasi udara rumah </th> 
                        <th>Penerangan/ Pencahayaan rumah </th> 
                        <th>Barang yang dimiliki</th>
                        <th>Bangunan untuk usaha/ dagang</th>
                        <th>Sumber penerangan</th>
                        <th>Sumber air bersih</th>
                        <th>Sumber air minum</th> 
                        <th>Sarana mandi & BAB</th>
                        <th>Pengelolaan sampah </th> 
                        <th>Pengelolaan limbah cair</th> 
                        <th>Jumlah kendaraan pribadi</th>
                        <th>Transporatasi yang biasa dipakai</th>
                        <th>Menggunakan HP? jumlah</th> 
                        <th>Uang setelah pembebasan & untuk apa</th>
                        <th>Memiliki usaha dagang</th>
                        <th>Omzet usaha dagang</th>
                        <th>Gaji perbulan </th>
                        <th>Gaji yang di dapatkan</th>
                        <th>Kiriman dari orang lain</th>
                        <th>Jumlah kiriman</th> 
                        <th>Dana Pensiun</th>
                        <th>Jumlah dana pensiun</th>
                        <th>Sumber lain nya </th>
                        <th>Jumlah sumber lain nya</th>
                        <th>Total keseluruhan pendapatan perbulan</th>
                        <th>Pengeluaran sebulan </th>
                        <th>Pendapatan di banding tahun lalu </th>
                        <th>Apakah pendapatan cukup untuk kebutuhan </th>
                        <th>Masalah ekonomi yang dihadapi</th>
                        <th>Dalam bentuk apa dapat bantuan</th> 
                        <th>Punya rekening bank ?</th> 
                        <th>Pinjangan dalam keadaan terdesak</th>
                        <th>Keperluan meminjam terdesak</th>
                        
                        <th>Ada kerjasama gotong royong</th>
                        <th>Seberapa sering </th> 
                        <th>partisipasi dalam kegiatan gotong royong </th> 
                        <th>Partisipasi anda dalam kegiatan masyarakat </th>
                        <th>Kegiatan yang aktif dilakukan</th>
                        <th>Kegiatan agama yang aktif</th>
                        <th>Sumber pengetahuan pertanian,kesehatan dll</th>
                        <th>Ikut terlibat organisasi tertentu</th>
                        <th>jika ikut, nama organisasi</th> 
                        <th>posisi dalam organisasi</th> 
                        <th>Tingkat partisipasi</th> 
                        <th>Manfaat yang di peroleh organisasi</th> 
                        <th>Kondisi keamanan lingkungan</th> 
                        <th>berikan alasan kemanan </th>
                        <th>Pernah terjadi konflik </th> 
                        <th>Jika pernah jelaskan</th>
                        <th>Siapa saja yang terlibat</th> 
                        <th>Pihak mana yang menyelesaikan</th> 
                        <th>Mekanisme penyelesaian </th> 
                        <th>Bencana yang sering terjadi</th>

                        <th>Pendapat tentang perushaan SERD</th>
                        <th>Apa saja yang di berikan</th>
                        <th>Saran untuk perushaan SERD</th>
                         -->
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
                            <td><?= $data->suku_asal?></td>
                            <td><?= $data->jumlah_anggota?></td>
                            <td><?= $data->pendidikan_terakhir?></td>
                            <td><?= $data->pencarian_utama?></td>
                            <td><?= $data->pencarian_kedua?></td>
                            <td><?= $data->keterampilan_kk?></td>
                            <td><?= $data->asal_keterampilan_kk?></td>
                            <td><?= $data->keterampilan_responden?></td>
                            <td><?= $data->asal_keterampilan_responden?></td>
                            <td><?= $data->kegiatan_kk?></td>
                            <td><?= $data->makan_sehari?></td>
                            <td><?= $data->tempat_berobat?></td>
                            <td><?= $data->jaminan_kesehatan?></td>
                            <td><?= $data->penilaian_puskesmas?></td>
                            <td><?= $data->kendala_pendidikan?></td>
                            <td><?= $data->kondisi_pendidikan?></td>
                            <td><?= $data->biaya_pendidikan?></td>
                            <!--<td><?= $data->total_lahan?></td>
                            <td><?= $data->luas_proyek_lahan?></td>
                            <td><?= $data->jenis_tanaman_lahan?></td>
                            <td><?= $data->status_lahan?></td>
                            <td><?= $data->sisa_lahan?></td>
                            <td><?= $data->hasil_pertanian?></td>
                            <td><?= $data->jual_pertanian?></td>
                            <td><?= $data->hasil_peternakan?></td>
                            <td><?= $data->jual_peternakan?></td>
                            <td><?= $data->hasil_budidaya?></td>
                            <td><?= $data->jual_budidaya?></td>
                            <td><?= $data->hasil_ikan?></td>
                            <td><?= $data->jual_ikan?></td>
                            <td><?= $data->hasil_hutan?></td>
                            <td><?= $data->jual_hutan?></td>
                            <td><?= $data->hasil_tambang?></td>
                            <td><?= $data->izin_tambang?></td>
                            <td><?= $data->jual_tambang?></td>
                            <td><?= $data->status_rumah?></td>
                            <td><?= $data->luas_bl?></td>
                            <td><?= $data->material_bangunan?></td>
                            <td><?= $data->kondisi_bangunan?></td>
                            <td><?= $data->rumah_dibangun?></td>
                            <td><?= $data->mck_dibangun?></td>
                            <td><?= $data->sumber_dana?></td>
                            <td><?= $data->jumlah_orang?></td>
                            <td><?= $data->sirkulasi_udara?></td>
                            <td><?= $data->pencahayaan_rumah?></td>
                            <td><?= $data->barang_dimiliki?></td>
                            <td><?= $data->bangunan_usaha?></td>
                            <td><?= $data->sumber_penerangan?></td>
                            <td><?= $data->sumber_air?></td>
                            <td><?= $data->air_minum?></td>
                            <td><?= $data->sarana_mandi?></td>
                            <td><?= $data->pengelolaan_sampah?></td>
                            <td><?= $data->pengelolaan_cair?></td>
                            <td><?= $data->jumlah_kendaraan?></td>
                            <td><?= $data->transportasi?></td>
                            <td><?= $data->menggunakan_hp?></td>
                            <td><?= $data->uang_lahan?></td>
                            <td><?= $data->usaha_dagang?></td>
                            <td><?= $data->omzet_dagang?></td>
                            <td><?= $data->gaji_perbulan?></td>
                            <td><?= $data->jumlah_gaji?></td>
                            <td><?= $data->kiriman_lain?></td>
                            <td><?= $data->jumlah_kiriman?></td>
                            <td><?= $data->dana_pensiun?></td>
                            <td><?= $data->jumlah_dana_pensiun?></td>
                            <td><?= $data->sumber_lain?></td>
                            <td><?= $data->jumlah_sumber?></td>
                            <td><?= $data->total_keseluruhan?></td>
                            <td><?= $data->pengeluaran_sebulan?></td>
                            <td><?= $data->banding_pendapatan?></td>
                            <td><?= $data->pendapatan_cukup?></td>
                            <td><?= $data->masalah_ekonomi?></td>
                            <td><?= $data->bentuk_bantuan?></td>
                            <td><?= $data->punya_rekening?></td>
                            <td><?= $data->pinjaman_mendesak?></td>
                            <td><?= $data->keperluan_meminjam?></td>
                            <td><?= $data->kerjasama_lingkungan?></td>
                            <td><?= $data->banyak_kerjasama?></td>
                            <td><?= $data->partisipasi_kerjasama?></td>
                            <td><?= $data->kegiatan_aktif?></td>
                            <td><?= $data->kegiatan_agama?></td>
                            <td><?= $data->sumber_pengetahuan?></td>
                            <td><?= $data->terlibat_organisasi?></td>
                            <td><?= $data->nama_organisasi?></td>
                            <td><?= $data->posisi_organisasi?></td>
                            <td><?= $data->tingkat_partisipasi?></td>
                            <td><?= $data->manfaat_organisasi?></td>
                            <td><?= $data->keamanan_lingkungan?></td>
                            <td><?= $data->alasan_keamanan?></td>
                            <td><?= $data->pernah_konflik?></td>
                            <td><?= $data->alasan_konflik?></td>
                            <td><?= $data->terlibat_konflik?></td>
                            <td><?= $data->pihak_konflik?></td>
                            <td><?= $data->mekanisme_konflik?></td>
                            <td><?= $data->bencana_alam?></td>
                            <td><?= $data->pendapat_serd?></td>
                            <td><?= $data->manfaat_serd?></td>
                            <td><?= $data->saran_serd?></td> -->
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