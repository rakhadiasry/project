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
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Enumerator</th>
                        <th>Nomor Hp </th>
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
                        <th>Pendidikan Terakhir Kepala Keluarga</th>
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
                        <th>Total luas lahan sebelum proyek</th>
                        <th>Luas lahan terkena proyek</th>
                        <th>Total luas lahan setelah proyek</th>
                        <th>Jenis tanaman lahan bebas</th>
                        <th>Status lahan dibebaskan</th>
                        <th>Hasil Pertanian</th>
                        <th>Pertanian dijual ke</th>
                        <th>Hasil peternakan</th>
                        <th>Hasil ternak dijual ke</th>
                        <th>Hasil budidaya perikanan</th>
                        <th>Hasil budidaya dijual</th>
                        <th>Hasil tangkapan ikan</th>
                        <th>Hasil tangkapan ikan dijual </th>
                        <th>Hasil hutan</th>
                        <th>Kemana hasil hutan dijual</th>
                        <th>Hasil galian/tambang</th>
                        <th>Mendapatkan izin dari pemerintah ?</th>
                        <th>Hasil galian/tambang dijual </th>
                        <th>Status kepemilikan rumah</th>
                        <th>Luas bangunan</th>
                        <th>Luas lahan</th>
                        <th>Tipe Bangunan</th>
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
                        <th>Jumlah sepeda</th>
                        <th>Jumlah motor</th>
                        <th>Jumlah mobil</th>
                        <th>Jumlah truck</th>
                        <th>Transporatasi yang biasa dipakai</th>
                        <th>Jumlah hp yang dimiliki</th>
                        <th>Uang setelah pembebasan</th>
                        <th>Digunakan untuk apa uang nya</th>
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
                        <th>Alasan pendapatan tahun lalu</th>
                        <th>Apakah pendapatan cukup untuk kebutuhan </th>
                        <th>Alasan pendapat kebutuhan Sehari-hari</th>
                        <th>Masalah ekonomi yang dihadapi</th>
                        <th>Dalam bentuk apa dapat bantuan</th>
                        <th>Punya rekening bank ?</th>
                        <th>Pinjangan dalam keadaan terdesak</th>
                        <th>Keperluan meminjam terdesak</th>

                        <th>Ada kerjasama gotong royong</th>
                        <th>Seberapa sering </th>
                        <th>partisipasi dalam kegiatan gotong royong </th>
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

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td> <?= $no++ ?>.</td>
                            <td><?= $data->nama_enumerator ?></td>
                            <td><?= $data->nomor_enumerator ?></td>
                            <td><?= $data->nama_kabupaten ?></td>
                            <td><?= $data->kecamatan ?></td>
                            <td><?= $data->desa ?></td>
                            <td><?= $data->kampung ?></td>
                            <td><?= $data->nama_kk ?></td>
                            <td><?= $data->usia_kk ?></td>
                            <td><?= $data->nama_responden ?></td>
                            <td><?= $data->usia_responden ?></td>
                            <td><?= $data->jenis_kelamin ?></td>
                            <td><?= $data->nomor_res ?></td>
                            <td><?= $data->agama_res ?></td>
                            <td><?= $data->lama_tinggal ?></td>
                            <td><?= $data->suku_asal ?></td>
                            <td><?= $data->jumlah_anggota ?></td>
                            <td><?= $data->pendidikan_terakhir_kk ?></td>
                            <td><?= $data->pendidikan_terakhir_responden ?></td>
                            <td><?= $data->pencarian_utama ?></td>
                            <td><?= $data->pencarian_kedua ?></td>
                            <td><?= $data->keterampilan_kk ?></td>
                            <td><?= $data->asal_keterampilan_kk ?></td>
                            <td><?= $data->keterampilan_responden ?></td>
                            <td><?= $data->asal_keterampilan_responden ?></td>
                            <td><?= $data->kegiatan_kk ?></td>
                            <td><?= $data->makan_sehari ?></td>
                            <td><?= $data->tempat_berobat ?></td>
                            <td><?= $data->jaminan_kesehatan ?></td>
                            <td><?= $data->penilaian_puskesmas ?></td>
                            <td><?= $data->kendala_pendidikan ?></td>
                            <td><?= $data->kondisi_pendidikan ?></td>
                            <td><?= $data->biaya_pendidikan ?></td>
                            <td><?= $data->total_lahan ?></td>
                            <td><?= $data->luas_proyek_lahan ?></td>
                            <td><?= $data->total_proyek_lahan ?></td>
                            <td><?= $data->jenis_tanaman_lahan ?></td>
                            <td><?= $data->status_lahan ?></td>
                            <td><?= $data->hasil_pertanian ?></td>
                            <td><?= $data->jual_pertanian ?></td>
                            <td><?= $data->hasil_peternakan ?></td>
                            <td><?= $data->jual_peternakan ?></td>
                            <td><?= $data->hasil_budidaya ?></td>
                            <td><?= $data->jual_budidaya ?></td>
                            <td><?= $data->hasil_ikan ?></td>
                            <td><?= $data->jual_ikan ?></td>
                            <td><?= $data->hasil_hutan ?></td>
                            <td><?= $data->jual_hutan ?></td>
                            <td><?= $data->hasil_tambang ?></td>
                            <td><?= $data->izin_tambang ?></td>
                            <td><?= $data->jual_tambang ?></td>
                            <td><?= $data->status_rumah ?></td>
                            <td><?= $data->luas_bangunan ?></td>
                            <td><?= $data->luas_lahan ?></td>
                            <td><?= $data->tipe_bangunan?> </td>
                            <td><?= $data->material_bangunan ?></td>
                            <td><?= $data->kondisi_bangunan ?></td>
                            <td><?= $data->rumah_dibangun ?></td>
                            <td><?= $data->mck_dibangun ?></td>
                            <td><?= $data->sumber_dana ?></td>
                            <td><?= $data->jumlah_orang ?></td>
                            <td><?= $data->sirkulasi_rumah ?></td>
                            <td><?= $data->pencahayaan_rumah ?></td>
                            <td><?= $data->barang_dimiliki ?></td>
                            <td><?= $data->bangunan_usaha ?></td>
                            <td><?= $data->sumber_penerangan ?></td>
                            <td><?= $data->sumber_air ?></td>
                            <td><?= $data->air_minum ?></td>
                            <td><?= $data->sarana_mandi ?></td>
                            <td><?= $data->pengelolaan_sampah ?></td>
                            <td><?= $data->pengelolaan_cair ?></td>
                            <td><?= $data->jumlah_sepeda ?></td>
                            <td><?= $data->jumlah_motor ?></td>
                            <td><?= $data->jumlah_mobil ?></td>
                            <td><?= $data->jumlah_truck ?></td>
                            <td><?= $data->transportasi ?></td>
                            <td><?= $data->menggunakan_hp ?></td>
                            <td><?= $data->uang_lahan ?></td>
                            <td><?= $data->alasan_lahan ?></td>
                            <td><?= $data->usaha_dagang ?></td>
                            <td><?= $data->omzet_dagang ?></td>
                            <td><?= $data->gaji_perbulan ?></td>
                            <td><?= $data->jumlah_gaji ?></td>
                            <td><?= $data->kiriman_lain ?></td>
                            <td><?= $data->jumlah_kiriman ?></td>
                            <td><?= $data->dana_pensiun ?></td>
                            <td><?= $data->jumlah_dana_pensiun ?></td>
                            <td><?= $data->sumber_lain ?></td>
                            <td><?= $data->jumlah_sumber ?></td>
                            <td><?= $data->total_keseluruhan ?></td>
                            <td><?= $data->pengeluaran_sebulan ?></td>
                            <td><?= $data->banding_pendapatan ?></td>
                            <td><?= $data->alasan_banding ?></td>
                            <td><?= $data->pendapatan_cukup ?></td>
                            <td><?= $data->alasan_pendapat ?></td>
                            <td><?= $data->masalah_ekonomi ?></td>
                            <td><?= $data->bentuk_bantuan ?></td>
                            <td><?= $data->punya_rekening ?></td>
                            <td><?= $data->pinjaman_mendesak ?></td>
                            <td><?= $data->keperluan_meminjam ?></td>

                            <td><?= $data->kerjasama_lingkungan ?></td>
                            <td><?= $data->banyak_kerjasama ?></td>
                            <td><?= $data->partisipasi_kerjasama ?></td>
                            <td><?= $data->kegiatan_aktif ?></td>
                            <td><?= $data->kegiatan_agama ?></td>
                            <td><?= $data->sumber_pengetahuan ?></td>
                            <td><?= $data->terlibat_organisasi ?></td>
                            <td><?= $data->nama_organisasi ?></td>
                            <td><?= $data->posisi_organisasi ?></td>
                            <td><?= $data->tingkat_partisipasi ?></td>
                            <td><?= $data->manfaat_organisasi ?></td>

                            <td><?= $data->keamanan_lingkungan ?></td>
                            <td><?= $data->alasan_keamanan ?></td>
                            <td><?= $data->pernah_konflik ?></td>
                            <td><?= $data->alasan_konflik ?></td>
                            <td><?= $data->terlibat_konflik ?></td>
                            <td><?= $data->pihak_konflik ?></td>
                            <td><?= $data->mekanisme_konflik ?></td>
                            <td><?= $data->bencana_alam ?></td>
                            <td><?= $data->pendapat_serd ?></td>
                            <td><?= $data->manfaat_serd ?></td>
                            <td><?= $data->saran_serd ?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('form/edit/' . $data->pap_id) ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="<?= site_url('form/del/' . $data->pap_id) ?>" onclick="return confirm('Apakah anda yakin hapus data?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Delete
                                </a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="box-header" align="center">
            <p style="font-size:6vw;">Hasil Analisis Grafik</p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart Jenis Kelamin PAP</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="jmlkChart" style="height:100px"></canvas>
                        <i> Pria <i><?= $dataif->jml_pria ?></i></i><br>
                        <i> Wanita <i><?= $dataif->jml_wanita ?></i></i> 
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart Suku Asal PAP</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-7" >
                            <i> Minangkabau <i><?= $dataif->suku_minangkabau ?></i></i> <br>
                            <i> Jawa <i><?= $dataif->suku_jawa ?></i></i> <br>
                            <i> Sunda <i><?= $dataif->suku_sunda ?></i></i> <br>
                        </div>
                        <div class="col-md-5">
                            <i> Melayu <i><?= $dataif->suku_melayu ?></i></i>
                            <i> Batak <i><?= $dataif->suku_batak ?></i></i>
                            <i> Lainnya <i><?= $dataif->suku_lainnya ?></i></i>
                        </div>
                    </div>
                    
            </div>
            </div>
        <div class="col-md-3">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart Agama PAP</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-6">
                            <i> Islam <i><?= $dataif->agama_islam ?></i></i> <br>
                            <i> Protestan <i><?= $dataif->agama_protestan ?></i></i> <br>
                            <i> Katolik <i><?= $dataif->agama_katolik ?></i></i> <br>
                            <i> Lainnya <i><?= $dataif->agama_lainnya ?></i></i>

                        </div>
                        <div class="col-md-6">
                            <i> Hindu <i><?= $dataif->agama_hindu ?></i></i><br>
                            <i> Budha <i><?= $dataif->agama_budha ?></i></i>
                            <i> Konghucu <i><?= $dataif->agama_konghucu ?></i></i>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart Lama Tinggal PAP</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-6">
                            <i> Dari Lahir <i> : <?= $dataif->lama_lahir ?></i></i> <br>
                            <i> >1th <i> : <?= $dataif->lama_1th ?></i></i> <br>
                            <i> >1-5th <i> : <?= $dataif->lama_5th ?></i></i> <br>

                        </div>
                        <div class="col-md-6">
                            <i> 5-10th <i> : <?= $dataif->lama_10th ?></i></i><br>
                            <i> >10th <i> : <?= $dataif->lama_10thh ?></i></i>
                        </div>
                    </div>
                    
            </div>
        </div>
        </div>
<div class="row">
    <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart Usia PAP</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-6">
                            <i> <?="<25th"?> <i> : <?= $dataif->usia_25th ?></i></i> <br>
                            <i> 25-35th <i> : <?= $dataif->usia_25thh ?></i></i> <br>
                            <i> 36th-45th <i> : <?= $dataif->usia_36th ?></i></i> <br>
                            <i> 46th-55th <i> : <?= $dataif->usia_46th ?></i></i><br>

                        </div>
                        <div class="col-md-6">
                            <i> 56th-60th <i> : <?= $dataif->usia_56th ?></i></i><br>
                            <i> 61th-65th <i> : <?= $dataif->usia_61th ?></i></i><br>
                            <i> <?=">65"?> <i> : <?= $dataif->usia_65th ?></i></i><br>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart Pendidikan PAP</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="row">
                        <div class="col-md-6">
                            <i>Tidak Sekolah <i> : <?= $dataif->pendidikan_ts ?></i></i> <br>
                            <i>Tidak Tamat SD <i> : <?= $dataif->pendidikan_tts ?></i></i> <br>
                            <i>Tamat SD <i> : <?= $dataif->pendidikan_tsd ?></i></i> <br>
                            <i>Tamat SLTP <i> : <?= $dataif->pendidikan_tsltp ?></i></i> <br>
                            <i>Tamat SLTA <i> : <?= $dataif->pendidikan_tslta?></i></i> <br>

                        </div>
                        <div class="col-md-6">
                            <i>Akamdemi/D3 <i> : <?= $dataif->pendidikan_tad3 ?></i></i><br>
                            <i>Sarjana <i> : <?= $dataif->pendidikan_tsarjana ?></i></i><br>
                            <i>Pascasarjana<i> : <?= $dataif->pendidikan_tpasca ?></i></i><br>
                            <i>Lainnya<i> : <?= $dataif->pendidikan_lainnya ?></i></i><br>

                        </div>
                        </div>
                    </div>
                    
            </div>
        </div> <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart Keterampilan PAP</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="row">
                        <div class="col-md-6">
                            <i> Bertani <i> : <?= $dataif->keterampilan_bertani ?></i></i> <br>
                            <i> Berternak <i> : <?= $dataif->keterampilan_berternak ?></i></i> <br>
                            <i> Montir <i> : <?= $dataif->keterampilan_montir ?></i></i> <br>
                            <i> Pertukangan <i> : <?= $dataif->keterampilan_pertukangan ?></i></i> <br>
                            <i> Listrik<i> : <?= $dataif->keterampilan_listrik?></i></i> <br>
                            <i> Memancing<i> : <?= $dataif->keterampilan_memancing?></i></i> <br>
                        </div>
                        <div class="col-md-6">
                        <i> Berdagang <i> : <?= $dataif->keterampilan_berdagang?></i></i> <br>
                        <i> Supir<i> : <?= $dataif->keterampilan_supir?></i></i> <br>   
                        <i> Penjahit<i> : <?= $dataif->keterampilan_penjahit?></i></i> <br>
                        <i> Memasak<i> : <?= $dataif->keterampilan_memasak?></i></i> <br>
                        <i> Lainnya<i> : <?= $dataif->keterampilan_lainnya ?></i></i> <br>
                        <i> Tidak ada <i> : <?= $dataif->keterampilan_tidak ?></i></i> <br>
                    </div>
                        </div>
                    </div>
                    
            </div>
        </div> 
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart Asal Keterampilan PAP</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-6">
                            <i> Otodidak <i> : <?= $dataif->asal_otodidak ?></i></i> <br>
                            <i> Kursus <i> : <?= $dataif->asal_kursus ?></i></i> <br>
                            <i> Lsm <i> : <?= $dataif->asal_lsm ?></i></i> <br>
                        </div>
                        <div class="col-md-6">
                            <i> Program pemerintah<i> : <?= $dataif->asal_program ?></i></i><br>
                            <i> Turun Menurun <i> : <?= $dataif->asal_turun?></i></i><br>
                            <i> Pelatihan Perusahaan <i> : <?= $dataif->asal_pelatihan?></i></i>

                        </div>
                    </div>
                    
            </div>
        </div>
        
</div>
<div class="row">
<div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart Penilaian Puskesmas</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Baik <i> : <?= $dataif->penilaian_baik?></i></i> <br>
                            <i> Sedang <i> : <?= $dataif->penilaian_sedang ?></i></i> <br>
                            <i> Buruk <i> : <?= $dataif->penilaian_buruk ?></i></i> <br>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart Kondisi Pendidikan</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Baik <i> : <?= $dataif->kondisi_baik?></i></i> <br>
                            <i> Sedang <i> : <?= $dataif->kondisi_sedang ?></i></i> <br>
                            <i> Buruk <i> : <?= $dataif->kondisi_buruk ?></i></i> <br>
                        </div>
                    </div>
                    
            </div>
        </div>
<div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart Sumber Dana Rumah PAP</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-6">
                            <i> Pribadi <i> : <?= $dataif->sumber_pribadi ?></i></i> <br>
                            <i> Bantuan Kerabat <i> : <?= $dataif->sumber_pribadi ?></i></i> <br>
                            <i> Pinjaman <i> : <?= $dataif->sumber_pribadi ?></i></i> <br>
                        </div>
                        <div class="col-md-6">
                            <i> Bantuan Pemerintah<i> : <?= $dataif->sumber_pemerintah ?></i></i><br>
                            <i> Lainnya <i> : <?= $dataif->sumber_lainnya?></i></i>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart Status Lahan PAP</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-6">
                            <i> Pribadi <i> : <?= $dataif->status_pribadi ?></i></i> <br>
                            <i> Orang Tua <i> : <?= $dataif->status_orang ?></i></i> <br>
                        </div>
                        <div class="col-md-6">
                            <i> Bersama<i> : <?= $dataif->status_bersama ?></i></i><br>
                            <i> Lainnya <i> : <?= $dataif->status_lainnya ?></i></i>
                        </div>
                    </div>
                    
            </div>
        </div>
       
</div>
<div class="row">
    <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tipe Bangunan Rumah</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Permanen <i> : <?= $dataif->tipe_permanen ?></i></i> <br>
                            <i> Semi Permanen <i> : <?= $dataif->tipe_semi ?></i></i> <br>
                            <i> Tidak Permanen<i> : <?= $dataif->tipe_tidak ?></i></i> <br>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Kondisi Bangunan Rumah</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Bagus & Terawat <i> : <?= $dataif->kondisi_terawat ?></i></i> <br>
                            <i> Kurang Terawat <i> : <?= $dataif->kondisi_kurang?></i></i> <br>
                            <i> Usang & Rusak<i> : <?= $dataif->kondisi_rusak ?></i></i> <br>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sirkulasi Udara Rumah</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Ada <i> : <?= $dataif->sirkulasi_ada ?></i></i> <br>
                            <i> Tidak ada <i> : <?= $dataif->sirkulasi_tidak?></i></i> <br>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pencahayaan Rumah</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Baik <i> : <?= $dataif->pencahayaan_baik ?></i></i> <br>
                            <i> Sedang <i> : <?= $dataif->pencahayaan_sedang?></i></i> <br>
                            <i> Buruk <i> : <?= $dataif->pencahayaan_buruk?></i></i> <br>

                        </div>
                    </div>
                    
            </div>
        </div>
</div>
<div class="row">
<div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sumber Penerangan</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-6">
                            <i> Pln <i> : <?= $dataif->sumber_pln ?></i></i> <br>
                            <i> Lampu Minyak <i> : <?= $dataif->sumber_lampu?></i></i> <br>
                            <i> Genset Pribadi<i> : <?= $dataif->sumber_gensetp?></i></i> <br>
                        </div>
                        <div class="col-md-6">
                            <i> Genset Desa <i> : <?= $dataif->sumber_gensetd ?></i></i> <br>
                            <i> Genset Tetangga <i> : <?= $dataif->sumber_gensett?></i></i> <br>
                            <i> Sumber Lainnya<i> : <?= $dataif->sumber_lainnya?></i></i> <br>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sumber Air</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-6">
                            <i> Pdam <i> : <?= $dataif->sumber_pdam ?></i></i> <br>
                            <i> Pipa Desa <i> : <?= $dataif->sumber_pipanisasi?></i></i> <br>
                            <i> Sumur<i> : <?= $dataif->sumber_sumur?></i></i> <br>
                        </div>
                        <div class="col-md-6">
                            <i> Mata Air <i> : <?= $dataif->sumber_mata ?></i></i> <br>
                            <i> Sungai <i> : <?= $dataif->sumber_sungai?></i></i> <br>
                            <i> Sumber Lainya<i> : <?= $dataif->sumber_lain?></i></i> <br>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Air Minum </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-6">
                            <i> Sungai <i> : <?= $dataif->air_sungai ?></i></i> <br>
                            <i> Sumur <i> : <?= $dataif->air_sumur?></i></i> <br>
                            <i> Mineral<i> : <?= $dataif->air_mineral?></i></i> <br>
                        </div>
                        <div class="col-md-6">
                            <i> Hujan <i> : <?= $dataif->air_hujan ?></i></i> <br>
                            <i> Mata Air <i> : <?= $dataif->air_mata?></i></i> <br>
                            <i> Pdam<i> : <?= $dataif->air_pdam?></i></i> <br>
                            <i> Sumber Lain<i> : <?= $dataif->air_lainnya?></i></i><br>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sarana Mandi </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-6">
                            <i> Sarana Keluarga <i> : <?= $dataif->sarana_keluarga ?></i></i> <br>
                            <i> Sarana Umum <i> : <?= $dataif->sarana_umum?></i></i> <br>
                            <i> Sungai<i> : <?= $dataif->sarana_sungai?></i></i> <br>
                        </div>
                        <div class="col-md-6">
                            <i> Hujan <i> : <?= $dataif->sarana_tempat ?></i></i> <br>
                            <i> Mata Air <i> : <?= $dataif->sarana_lainnya?></i></i> <br>
                        </div>
                    </div>
                    
            </div>
        </div>
</div>
<div class="row">
<div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pengelolaan Sampah RT</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-6">
                            <i> Diangkut Petugas <i> : <?= $dataif->pengelolaan_petugas ?></i></i> <br>
                            <i> Dibakar <i> : <?= $dataif->pengelolaan_dibakar?></i></i> <br>
                            <i> Sungai<i> : <?= $dataif->pengelolaan_sungai?></i></i> <br>
                        </div>
                        <div class="col-md-6">
                            <i> Sembarangan <i> : <?= $dataif->pengelolaan_sembarangan ?></i></i> <br>
                            <i> Lainnya <i> : <?= $dataif->pengelolaan_lainnya?></i></i> <br>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pengelolaan Sampah Cair</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Septictank <i> : <?= $dataif->cair_septictank ?></i></i> <br>
                            <i> Parit<i> : <?= $dataif->cair_parit?></i></i> <br>
                            <i> Kesungai<i> : <?= $dataif->cair_sungai?></i></i> <br>
                            <i> Lainnya<i> : <?= $dataif->cair_lainnya?></i></i> <br>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Transportasi </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Umum <i> : <?= $dataif->transportasi_umum ?></i></i> <br>
                            <i> Ojek<i> : <?= $dataif->transportasi_ojek?></i></i> <br>
                            <i> Travel<i> : <?= $dataif->transportasi_travel?></i></i> <br>
                            <i> Lainnya<i> : <?= $dataif->transportasi_lainnya?></i></i> <br>
                            <i> Tidak<i> : <?= $dataif->transportasi_tidak?></i></i> <br>

                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">PAP Berdagang </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Iya <i> : <?= $dataif->usaha_iya ?></i></i> <br>
                            <i> Tidak<i> : <?= $dataif->usaha_tidak?></i></i> <br>
                        
                        </div>
                    </div>
                    
            </div>
        </div>
</div>
<div class="row">
<div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">PAP Mendapatkan Gaji  </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Iya <i> : <?= $dataif->gaji_iya ?></i></i> <br>
                            <i> Tidak<i> : <?= $dataif->gaji_tidak?></i></i> <br>
                        
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Uang Kiriman PAP  </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Iya <i> : <?= $dataif->kiriman_iya ?></i></i> <br>
                            <i> Tidak<i> : <?= $dataif->kiriman_tidak?></i></i> <br>
                        </div>
                    </div>  
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Dana Pensiun PAP  </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Iya <i> : <?= $dataif->dana_iya ?></i></i> <br>
                            <i> Tidak<i> : <?= $dataif->dana_tidak?></i></i> <br>
                        </div>
                    </div>  
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sumber Lain</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Iya <i> : <?= $dataif->sumber_iya ?></i></i> <br>
                            <i> Tidak<i> : <?= $dataif->sumber_tidak?></i></i> <br>
                        </div>
                    </div>  
            </div>
        </div>
        </div>
    <div class="row">
    <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Penilaian Pendapatan</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Meningkat <i> : <?= $dataif->banding_meningkat ?></i></i> <br>
                            <i> Sama<i> : <?= $dataif->banding_sama?></i></i> <br>
                            <i> Menurun<i> : <?= $dataif->banding_menurun?></i></i> <br>
                        </div>
                    </div>  
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pendapatan cukup</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Lebih <i> : <?= $dataif->banding_meningkat ?></i></i> <br>
                            <i> Cukup<i> : <?= $dataif->banding_sama?></i></i> <br>
                            <i> Kurang<i> : <?= $dataif->banding_menurun?></i></i> <br>
                        </div>
                    </div>  
            </div>
        </div>

        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Bentuk Bantuan</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-6">
                            <i> Uang <i> : <?= $dataif->bentuk_uang ?></i></i> <br>
                            <i> Barang Pokok<i> : <?= $dataif->bentuk_pokok?></i></i> <br>
                            <i> Barang Produksi<i> : <?= $dataif->bentuk_produksi?></i></i> <br>
                        </div>
                        <div class="col-md-6">
                            <i> Lainnya<i> : <?= $dataif->bentuk_lainnya ?></i></i> <br>
                            <i> Tidak Pernah<i> : <?= $dataif->bentuk_tidak?></i></i> <br>
                        </div>
                    </div>  
            </div>
        </div>
        <div class="col-md-3">  
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Memiliki Rekening</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="sukuChart" style="height:100px"></canvas>
                        <div class="col-md-12">
                            <i> Iya <i> : <?= $dataif->punya_iya?></i></i> <br>
                            <i> Tidak<i> : <?= $dataif->punya_tidak?></i></i> <br>
                        </div>

                    </div>  
            </div>
        </div>
    </div>
</div>
</section>