    <section class="content-header">
        <h1>
            Form Page PAP
            <small>Tester</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
            <li class="active">PAP</li>
    </section>

    <!-- Main content -->
    <section class="content">   

        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?=ucfirst($page)?> Pap </h3>
                <div class="pull-right">
                    <a href="<?= site_url('form') ?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Back
                    </a>

                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?=site_url('form/process')?>" method="post">
                            <div class="form-group">
                                <label> Nama Enumerator</label>
                                <input type="hidden" name="id" value="<?=$row->pap_id?>">
                                <input type="text" name="name_enum" value="<?=$row->nama_enumerator?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Nomor Enumerator</label>
                                <input type="text" name="nomor_enum" value="<?=$row->nomor_enumerator?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Nama Kabupaten</label>
                                <input type="text" name="na_kab" value="<?=$row->nama_kabupaten?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Kecamatan</label>
                                <input type="text" name="kecamatan" value="<?=$row->kecamatan?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Desa</label>
                                <input type="text" name="desa" value="<?=$row->desa?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Dusun/ Kampung</label>
                                <input type="text" name="kampung" value="<?=$row->kampung?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Nama Kepala Keluarga</label>
                                <input type="text" name="name_kk" value="<?=$row->nama_kk?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Usia Kepala Keluarga</label>
                                <input type="text" name="usia_kk" value="<?=$row->usia_kk?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Nama Responden</label>
                                <input type="text" name="name_responden" value="<?=$row->nama_responden?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Usia Responden</label>
                                <input type="text" name="usia_responden" value="<?=$row->usia_responden?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Jenis kelamin*</label><br>
                                <input type="checkbox" <?php if($row->jenis_kelamin=='pria') {echo "checked";} ?> name="jk[]" value="pria"> <i>Pria</i>
                                <input type="checkbox" <?php if($row->jenis_kelamin=='wanita') {echo "checked";} ?>  name="jk[]" value="wanita"> <i>Wanita</i>
                            </div>
                            <div class="form-group">
                                <label> Nomor Responden</label>
                                <input type="text" name="nomor_res" value="<?=$row->nomor_res?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Agama Responden</label><br>
                                <input type="radio"name="agama_res" value="islam" <?php if($row->agama_res=='islam')  {echo "checked";}?> /> <i>Islam</i>
                                <input type="radio" name="agama_res" value="kristen_protestan" <?php if($row->agama_res=='kristen_protestan')  {echo "checked";}?> /> <i>Kristen Protestan</i>
                                <input type="radio" name="agama_res" value="kristen_katolik"  <?php if($row->agama_res=='kristen_katolik')  {echo "checked";}?>><i>Kristen Katolik</i>
                                <br>
                                <input type="radio" name="agama_res" value="hindu" <?php if($row->agama_res=='hindu')  {echo "checked";}?> ><i>Hindu</i>
                                <input type="radio" name="agama_res" value="budha" <?php if($row->agama_res=='budha')  {echo "checked";}?>> <i>Budha</i>
                                <input type="radio" name="agama_res" value="konghucu" <?php if($row->agama_res=='konghucu')  {echo "checked";}?> ><i>Konghucu</i>
                            </div>
                            <div class="form-group">
                                <label> Lama Tinggal/ Menetap</label><br>
                                <input type="radio"name="lama_tinggal" value="dari_lahir" <?php if($row->lama_tinggal=='dari_lahir')  {echo "checked";}?>><i>Dari Lahir</i>
                                <input type="radio" name="lama_tinggal" value="<1th"> <i>Kurang > 1 tahun</i>
                                <input type="radio" name="lama_tinggal" value="1-5th"> <i>> 1- 5 tahun</i>
                                <br>
                                <input type="radio" name="lama_tinggal" value="5-10th"> <i>5- 10 tahun</i>
                                <input type="radio" name="lama_tinggal" value=">10th"> <i>> 10 tahun</i>
                            </div>
                            <div class="form-group">
                                <label> Suku Asal</label><br>
                                <input type="radio"name="suku_asal" value="melayu"> <i>Melayu</i>
                                <input type="radio" name="suku_asal" value="batak"> <i>Batak</i>
                                <input type="radio" name="suku_asal" value="minangkabau"> <i>Minangkabau</i>
                                <br>
                                <input type="radio" name="suku_asal" value="jawa"> <i>Jawa</i>
                                <input type="radio" name="suku_asal" value="sunda"> <i>Sunda</i>
                            </div>
                            <div class="form-group">
                                <label> Jumlah Anggota Keluarga</label>
                                <input type="textarea" name="jumlah_anggota" value="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Pendidikan Terakhir</label><br>
                                <input type="checkbox"name="pendidikan_akhir[]" value="tidak sekolah"> <i>Tidak Sekolah</i>
                                <input type="checkbox" name="pendidikan_akhir[]" value="tidak tamat sd"> <i>Tidak Tamat SD</i>
                                <input type="checkbox" name="pendidikan_akhir[]" value="tamat sd"> <i>Tamat SD</i>
                                <br>
                                <input type="checkbox" name="pendidikan_akhir[]" value="tamat sltp"> <i>Tamat SLTP</i>
                                <input type="checkbox" name="pendidikan_akhir[]" value="tamat slta"> <i>Tamat SLTA</i>
                                <input type="checkbox" name="pendidikan_akhir[]" value="tamat akademi/d3"> <i>Tamat Akademi/D3</i><br>
                                <input type="checkbox" name="pendidikan_akhir[]" value="sarjana"> <i>Sarjana</i>
                                <input type="checkbox" name="pendidikan_akhir[]" value="pascasarjana"> <i>Pascasarjana</i>
                            </div>
                            <div class="form-group">
                                <label> Mata Pencarian Utama (Kepala Keluarga)</label><br>
                                <input type="checkbox"name="pencarian_utama[]" value="pns"> <i>PNS</i>
                                <input type="checkbox" name="pencarian_utama[]" value="karyawan swasta"> <i>Karyawan Swasta</i>
                                <input type="checkbox" name="pencarian_utama[]" value="petani"> <i>Honorer</i>
                                <br>
                                <input type="checkbox" name="pencarian_utama[]" value="petani"> <i>Petani</i>
                                <input type="checkbox" name="pencarian_utama[]" value="peternak"> <i>Peternak</i>
                                <input type="checkbox" name="pencarian_utama[]" value="pedagang"> <i>Pedagang</i><br>
                                <input type="checkbox" name="pencarian_utama[]" value="buruh"> <i>Buruh</i>
                                <input type="checkbox" name="pencarian_utama[]" value="supir"> <i>Supir</i>
                                <input type="checkbox" name="pencarian_utama[]" value="wirausaha"> <i>Wirausaha</i>
                            </div>
                            <div class="form-group">
                                <label> Mata Pencarian Sampingan (Kepala Keluarga & anggota)</label><br>
                                <input type="checkbox"name="pencarian_kedua[]" value="pns"> <i>PNS</i>
                                <input type="checkbox" name="pencarian_kedua[]" value="karyawan swasta"> <i>Karyawan Swasta</i>
                                <input type="checkbox" name="pencarian_kedua[]" value="petani"> <i>Honorer</i>
                                <br>
                                <input type="checkbox" name="pencarian_kedua[]" value="petani"> <i>Petani</i>
                                <input type="checkbox" name="pencarian_kedua[]" value="peternak"> <i>Peternak</i>
                                <input type="checkbox" name="pencarian_kedua[]" value="pedagang"> <i>Pedagang</i><br>
                                <input type="checkbox" name="pencarian_kedua[]" value="buruh"> <i>Buruh</i>
                                <input type="checkbox" name="pencarian_kedua[]" value="supir"> <i>Supir</i>
                                <input type="checkbox" name="pencarian_kedua[]" value="wirausaha"> <i>Wirausaha</i>
                            </div>
                            <div class="form-group">
                                <label> Jenis Keterampilan kepala keluarga kuasai</label><br>
                                <input type="checkbox"name="keterampilan_kk[]" value="bertani"> <i>Bertani</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="berternak"> <i>Beternak</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="montir/mekanik"> <i>Montir/Mekanik</i>
                                <br>
                                <input type="checkbox" name="keterampilan_kk[]" value="pertukangan kayu/batu"> <i>Pertukangan kayu/batu</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="listrik"> <i>Listrik</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="memancing"> <i>Memancing</i><br>
                                <input type="checkbox" name="keterampilan_kk[]" value="berdagang"> <i>Berdagang</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="supir"> <i>Supir</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="penjahit/bordir"> <i>Penjahit/bordir</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="memasak"> <i>Memasak</i>
                            </div>
                            <div class="form-group">
                                <label> Asal keterampilan keterampilan kepala keluarga</label><br>
                                <input type="checkbox"name="asal_keterampilan_kk[]" value="pns"> <i>Belajar Sendiri</i>
                                <input type="checkbox" name="asal_keterampilan_kk[]" value="karyawan swasta"> <i>Beternak</i>
                                <input type="checkbox" name="asal_keterampilan_kk[]" value="petani"> <i>Montir/Mekanik</i>
                                <br>
                                <input type="checkbox" name="asal_keterampilan_kk[]" value="petani"> <i>Pertukangan kayu/batu</i>
                                <input type="checkbox" name="asal_keterampilan_kk[]" value="peternak"> <i>Listrik</i>
                                <input type="checkbox" name="asal_keterampilan_kk[]" value="pedagang"> <i>Memancing</i><br>
                                <input type="checkbox" name="asal_keterampilan_kk[]" value="buruh"> <i>Berdagang</i>
                            </div>
                            <div class="form-group">
                                <label> Jenis keterampilan responden kuasai</label><br>
                                <input type="checkbox"name="keterampilan_responden[]" value="bertani"> <i>Bertani</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="berternak"> <i>Beternak</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="montir/mekanik"> <i>Montir/Mekanik</i>
                                <br>
                                <input type="checkbox" name="keterampilan_responden[]" value="pertukangan kayu/batu"> <i>Pertukangan kayu/batu</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="listrik"> <i>Listrik</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="memancing"> <i>Memancing</i><br>
                                <input type="checkbox" name="keterampilan_responden[]" value="berdagang"> <i>Berdagang</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="supir"> <i>Supir</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="penjahit/bordir"> <i>Penjahit/bordir</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="memasak"> <i>Memasak</i>
                            </div>
                            <div class="form-group">
                                <label> Asal keterampilan keterampilan responden</label><br>
                                <input type="checkbox"name="asal_keterampilan_responden[]" value="pns"> <i>Belajar Sendiri</i>
                                <input type="checkbox" name="asal_keterampilan_responden[]" value="karyawan swasta"> <i>Beternak</i>
                                <input type="checkbox" name="asal_keterampilan_responden[]" value="petani"> <i>Montir/Mekanik</i>
                                <br>
                                <input type="checkbox" name="asal_keterampilan_responden[]" value="petani"> <i>Pertukangan kayu/batu</i>
                                <input type="checkbox" name="asal_keterampilan_responden[]" value="peternak"> <i>Listrik</i>
                                <input type="checkbox" name="asal_keterampilan_responden[]" value="pedagang"> <i>Memancing</i><br>
                                <input type="checkbox" name="asal_keterampilan_responden[]" value="buruh"> <i>Berdagang</i>
                            </div>
                            <div class="form-group">
                                <label>Kegiatan apa saja yang bapak & ibu lakukan sehari-hari (kepala keluarga)</label>
                                <input type="textarea" name="kegiatan_kk" class="form-control" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Berapa kali keluarga makan dalam sehari</label><br>
                                <input type="radio" name="makan_sehari" value="1x">Satu kali
                                <input type="radio" name="makan_sehari" value="2x">Dua kali
                                <input type="radio" name="makan_sehari" value="3x">Tiga kali
                            </div>
                            <div class="form-group">
                                <label>Tempat berobat & alasan</label>
                                <input type="text" name="tempat_berobat" class="form-control" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Memiliki jaminan kesehatan</label>
                                <input type="textarea" name="jaminan_kesehatan" class="form-control" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Penilaian terhadap pelayanyan fasilitas kesehatan (puskesmas,polindes,pustu,klinik dll)</label><br>
                                <input type="radio" name="makan_sehari" value="baik">Baik
                                <input type="radio" name="makan_sehari" value="sedang">Biasa saja
                                <input type="radio" name="makan_sehari" value="buruk">Buruk
                            </div>
                            <div class="form-group">
                                <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Save
                                </button>
                                <button type="Reset" class="btn btn-warning btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            
            </div>
        </div>

    </section>