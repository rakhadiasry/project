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
                                <input type="radio" name="lama_tinggal" value="dari_lahir" <?php if($row->lama_tinggal=='dari_lahir')  {echo "checked";}?>><i>Dari Lahir</i>
                                <input type="radio" name="lama_tinggal" value="<1th" <?php if($row->lama_tinggal=='<1th')  {echo "checked";}?>> <i>Kurang > 1 tahun</i>
                                <input type="radio" name="lama_tinggal" value="1-5th" <?php if($row->lama_tinggal=='1-5th')  {echo "checked";}?>> <i>> 1- 5 tahun</i>
                                <br>
                                <input type="radio" name="lama_tinggal" value="5-10th" <?php if($row->lama_tinggal=='5-10th')  {echo "checked";}?>> <i>5- 10 tahun</i>
                                <input type="radio" name="lama_tinggal" value=">10th" <?php if($row->lama_tinggal=='>10th')  {echo "checked";}?>> <i>> 10 tahun</i>
                            </div>
                            <div class="form-group">
                                <label> Suku Asal</label><br>
                                <input type="radio"name="suku_asal" value="melayu" <?php if($row->suku_asal=='melayu')  {echo "checked";}?>> <i>Melayu</i>
                                <input type="radio" name="suku_asal" value="batak" <?php if($row->suku_asal=='batak')  {echo "checked";}?>> <i>Batak</i>
                                <input type="radio" name="suku_asal" value="minangkabau" <?php if($row->suku_asal=='minangkabau')  {echo "checked";}?>> <i>Minangkabau</i>
                                <br>
                                <input type="radio" name="suku_asal" value="jawa" <?php if($row->suku_asal=='jawa')  {echo "checked";}?>> <i>Jawa</i>
                                <input type="radio" name="suku_asal" value="sunda" <?php if($row->suku_asal=='sunda')  {echo "checked";}?>> <i>Sunda</i>
                            </div>
                            <div class="form-group">
                                <label> Jumlah Anggota Keluarga</label>
                                <input type="textarea" name="jumlah_anggota" value="<?=$row->jumlah_anggota?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Pendidikan Terakhir</label><br>
                                <input type="checkbox"name="pendidikan_terakhir" value="tidak_sekolah" <?php if($row->pendidikan_terakhir=='tidak_sekolah')  {echo "checked";}?>> <i>Tidak Sekolah</i>
                                <input type="checkbox" name="pendidikan_terakhir" value="tidak_tamat_sd" <?php if($row->pendidikan_terakhir=='tidak_tamat_sd')  {echo "checked";}?>> <i>Tidak Tamat SD</i>
                                <input type="checkbox" name="pendidikan_terakhir" value="tamat_sd" <?php if($row->pendidikan_terakhir=='tamat_sd')  {echo "checked";}?>> <i>Tamat SD</i>
                                <br>
                                <input type="checkbox" name="pendidikan_terakhir" value="tamat_sltp" <?php if($row->pendidikan_terakhir=='tamat_sltp')  {echo "checked";}?>> <i>Tamat SLTP</i>
                                <input type="checkbox" name="pendidikan_terakhir" value="tamat_slta" <?php if($row->pendidikan_terakhir=='tamat_slta')  {echo "checked";}?>> <i>Tamat SLTA</i>
                                <input type="checkbox" name="pendidikan_terakhir" value="tamat_akademi/d3" <?php if($row->pendidikan_terakhir=='tamat_akademi/d3')  {echo "checked";}?>> <i>Tamat Akademi/D3</i><br>
                                <input type="checkbox" name="pendidikan_terakhir" value="sarjana" <?php if($row->pendidikan_terakhir=='sarjana')  {echo "checked";}?>> <i>Sarjana</i>
                                <input type="checkbox" name="pendidikan_terakhir" value="pascasarjana" <?php if($row->pendidikan_terakhir=='pascasarjana')  {echo "checked";}?>> <i>Pascasarjana</i>
                            </div>
                            <div class="form-group">
                                <label> Mata Pencarian Utama (Kepala Keluarga)</label><br>
                                <input type="checkbox"name="pencarian_utama[]" value="pns" <?php if($row->pencarian_utama=='pns')  {echo "checked";}?>> <i>PNS</i>
                                <input type="checkbox" name="pencarian_utama[]" value="karyawan_swasta" <?php if($row->pencarian_utama=='karyawan_swasta')  {echo "checked";}?>> <i>Karyawan Swasta</i>
                                <input type="checkbox" name="pencarian_utama[]" value="honorer" <?php if($row->pencarian_utama=='honorer')  {echo "checked";}?>> <i>Honorer</i>
                                <br>
                                <input type="checkbox" name="pencarian_utama[]" value="petani" <?php if($row->pencarian_utama=='petani')  {echo "checked";}?>> <i>Petani</i>
                               <input type="checkbox" name="pencarian_utama[]" value="peternak" <?php if($row->pencarian_utama=='peternak')  {echo "checked";}?>> <i>Peternak</i>
                                <input type="checkbox" name="pencarian_utama[]" value="pedagang" <?php if($row->pencarian_utama=='pedagang')  {echo "checked";}?>> <i>Pedagang</i><br>
                                <input type="checkbox" name="pencarian_utama[]" value="buruh" <?php if($row->pencarian_utama=='buruh')  {echo "checked";}?>> <i>Buruh</i>
                                <input type="checkbox" name="pencarian_utama[]" value="supir" <?php if($row->pencarian_utama=='supir')  {echo "checked";}?>> <i>Supir</i>
                                <input type="checkbox" name="pencarian_utama[]" value="wirausaha" <?php if($row->pencarian_utama=='wirausaha')  {echo "checked";}?>> <i>Wirausaha</i>
                            </div>
                            <div class="form-group">
                                <label> Mata Pencarian Sampingan (Kepala Keluarga & anggota)</label><br>
                                <input type="checkbox"name="pencarian_kedua[]" value="pns" <?php if($row->pencarian_kedua=='pns')  {echo "checked";}?>> <i>PNS</i>
                                <input type="checkbox" name="pencarian_kedua[]" value="karyawan_swasta" <?php if($row->pencarian_kedua=='karyawan_swasta')  {echo "checked";}?>> <i>Karyawan Swasta</i>
                                <input type="checkbox" name="pencarian_kedua[]" value="honorer" <?php if($row->pencarian_kedua=='honorer')  {echo "checked";}?>> <i>Honorer</i>
                                <br>
                                <input type="checkbox" name="pencarian_kedua[]" value="petani" <?php if($row->pencarian_kedua=='petani')  {echo "checked";}?>> <i>Petani</i>
                                <input type="checkbox" name="pencarian_kedua[]" value="peternak" <?php if($row->pencarian_kedua=='peternak')  {echo "checked";}?>> <i>Peternak</i>
                                <input type="checkbox" name="pencarian_kedua[]" value="pedagang" <?php if($row->pencarian_kedua=='pedagang')  {echo "checked";}?>> <i>Pedagang</i><br>
                                <input type="checkbox" name="pencarian_kedua[]" value="buruh" <?php if($row->pencarian_kedua=='buruh')  {echo "checked";}?>> <i>Buruh</i>
                                <input type="checkbox" name="pencarian_kedua[]" value="supir" <?php if($row->pencarian_kedua=='supir')  {echo "checked";}?>> <i>Supir</i>
                                <input type="checkbox" name="pencarian_kedua[]" value="wirausaha" <?php if($row->pencarian_kedua=='wirausaha')  {echo "checked";}?>> <i>Wirausaha</i>
                            </div>
                            <div class="form-group">
                                <label> Jenis Keterampilan kepala keluarga kuasai</label><br>
                                <input type="checkbox"name="keterampilan_kk[]" value="bertani" <?php if($row->keterampilan_kk=='bertani')  {echo "checked";}?>> <i>Bertani</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="berternak" <?php if($row->keterampilan_kk=='berternak')  {echo "checked";}?>> <i>Beternak</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="montir/mekanik" <?php if($row->keterampilan_kk=='montir/mekanik')  {echo "checked";}?>> <i>Montir/Mekanik</i>
                                <br>
                                <input type="checkbox" name="keterampilan_kk[]" value="pertukangan_kayu/batu" <?php if($row->keterampilan_kk=='pertukangan_kayu/batu')  {echo "checked";}?>> <i>Pertukangan kayu/batu</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="listrik" <?php if($row->keterampilan_kk=='listrik')  {echo "checked";}?>> <i>Listrik</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="memancing"<?php if($row->keterampilan_kk=='memancing')  {echo "checked";}?>> <i>Memancing</i><br>
                                <input type="checkbox" name="keterampilan_kk[]" value="berdagang" <?php if($row->keterampilan_kk=='berdagang')  {echo "checked";}?>> <i>Berdagang</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="supir" <?php if($row->keterampilan_kk=='supir')  {echo "checked";}?>> <i>Supir</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="penjahit/bordir" <?php if($row->keterampilan_kk=='penjahit/bordir')  {echo "checked";}?>> <i>Penjahit/bordir</i>
                                <input type="checkbox" name="keterampilan_kk[]" value="memasak" <?php if($row->keterampilan_kk=='memasak')  {echo "checked";}?>> <i>Memasak</i>
                            </div>
                            <div class="form-group">
                                <label> Asal keterampilan keterampilan kepala keluarga</label><br>
                                <input type="checkbox" name="asal_keterampilan_kk[]" value="otodidak" <?php if($row->asal_keterampilan_kk=='otodidak')  {echo "checked";}?>> <i>Belajar Sendiri</i>
                                <input type="checkbox" name="asal_keterampilan_kk[]" value="kursus" <?php if($row->asal_keterampilan_kk=='kursus')  {echo "checked";}?>> <i>Mengikuti kursus</i><br>
                                <input type="checkbox" name="asal_keterampilan_kk[]" value="program_pemerintah" <?php if($row->asal_keterampilan_kk=='program_pemerintah')  {echo "checked";}?>> <i>Program Pemerintah</i>
                                <br>
                                <input type="checkbox" name="asal_keterampilan_kk[]" value="lsm"<?php if($row->asal_keterampilan_kk=='lsm/ngo')  {echo "checked";}?>> <i>Lsm atau NGO</i>
                                <input type="checkbox" name="asal_keterampilan_kk[]" value="turun_menurun"<?php if($row->asal_keterampilan_kk=='turun_menurun')  {echo "checked";}?>> <i>Turun Menurun</i><br>
                                <input type="checkbox" name="asal_keterampilan_kk[]" value="pelatihan_perusahaan" <?php if($row->asal_keterampilan_kk=='pelatihan_perusahaan')  {echo "checked";}?>> <i>Program pelatihan perusahaan</i><br>
                            </div>
                            <div class="form-group">
                                <label> Jenis keterampilan responden kuasai</label><br>
                                <input type="checkbox" name="keterampilan_responden[]" value="bertani" <?php if($row->keterampilan_responden=='bertani')  {echo "checked";}?>> <i>Bertani</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="berternak" <?php if($row->keterampilan_responden=='berternak')  {echo "checked";}?>> <i>Beternak</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="montir/mekanik" <?php if($row->keterampilan_responden=='montir/mekanik')  {echo "checked";}?>> <i>Montir/Mekanik</i>
                                <br>
                                <input type="checkbox" name="keterampilan_responden[]" value="pertukangan_kayu/batu" <?php if($row->keterampilan_responden=='pertukangan_kayu/batu')  {echo "checked";}?>> <i>Pertukangan kayu/batu</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="listrik" <?php if($row->keterampilan_responden=='listrik')  {echo "checked";}?>> <i>Listrik</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="memancing"<?php if($row->keterampilan_responden=='memancing')  {echo "checked";}?>> <i>Memancing</i><br>
                                <input type="checkbox" name="keterampilan_responden[]" value="berdagang" <?php if($row->keterampilan_responden=='berdagang')  {echo "checked";}?>> <i>Berdagang</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="supir" <?php if($row->keterampilan_responden=='supir')  {echo "checked";}?>> <i>Supir</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="penjahit/bordir" <?php if($row->keterampilan_responden=='penjahit/bordir')  {echo "checked";}?>> <i>Penjahit/bordir</i>
                                <input type="checkbox" name="keterampilan_responden[]" value="memasak" <?php if($row->keterampilan_responden=='memasak')  {echo "checked";}?>> <i>Memasak</i>                            
                                </div>
                            <div class="form-group">
                                <label> Asal keterampilan keterampilan responden</label><br>
                         <input type="checkbox" name="asal_keterampilan_responden[]" value="otodidak" <?php if($row->asal_keterampilan_responden=='otodidak')  {echo "checked";}?>> <i>Belajar Sendiri</i>
                                <input type="checkbox" name="asal_keterampilan_responden[]" value="kursus" <?php if($row->asal_keterampilan_responden=='kursus')  {echo "checked";}?>> <i>Mengikuti kursus</i><br>
                                <input type="checkbox" name="asal_keterampilan_responden[]" value="program_pemerintah" <?php if($row->asal_keterampilan_responden=='program_pemerintah')  {echo "checked";}?>> <i>Program Pemerintah</i>
                                <br>
                                <input type="checkbox" name="asal_keterampilan_responden[]" value="lsm/ngo"<?php if($row->asal_keterampilan_responden=='lsm/ngo')  {echo "checked";}?>> <i>Lsm atau NGO</i>
                                <input type="checkbox" name="asal_keterampilan_responden[]" value="turun_menurun"<?php if($row->asal_keterampilan_responden=='turun_menurun')  {echo "checked";}?>> <i>Turun Menurun</i><br>
                                <input type="checkbox" name="asal_keterampilan_responden[]" value="pelatihan_perusahaan" <?php if($row->asal_keterampilan_responden=='pelatihan_perusahaan')  {echo "checked";}?>> <i>Program pelatihan perusahaan</i><br>
                            </div>
                           <div class="form-group">
                                <label>Kegiatan apa saja yang bapak & ibu lakukan sehari-hari (kepala keluarga)</label>
                                <input type="textarea" name="kegiatan_kk" class="form-control" value="<?=$row->kegiatan_kk?>" required>
                            </div>
                            <div class="form-group">
                                <label>Berapa kali keluarga makan dalam sehari</label><br>
                                <input type="radio" name="makan_sehari" value="1x" <?php if($row->makan_sehari=='1x')  {echo "checked";}?>>Satu kali
                                <input type="radio" name="makan_sehari" value="2x" <?php if($row->makan_sehari=='2x')  {echo "checked";}?>>Dua kali
                                <input type="radio" name="makan_sehari" value="3x" <?php if($row->makan_sehari=='3x')  {echo "checked";}?>>Tiga kali
                            </div>
                            <div class="form-group">
                                <label>Tempat berobat & alasan</label>
                                <input type="text" name="tempat_berobat" class="form-control" value="<?=$row->tempat_berobat?>" required>
                            </div>
                            <div class="form-group">
                                <label>Memiliki jaminan kesehatan</label>
                                <input type="textarea" name="jaminan_kesehatan" class="form-control" value="<?=$row->jaminan_kesehatan?>" required>
                            </div>
                             <div class="form-group">
                                <label>Penilaian terhadap pelayanyan fasilitas kesehatan (puskesmas,polindes,pustu,klinik dll)</label><br>
                                <input type="radio" name="penilaian_puskesmas" value="baik" <?php if($row->penilaian_puskesmas=='baik')  {echo "checked";}?>>Baik
                                <input type="radio" name="penilaian_puskesmas" value="sedang" <?php if($row->penilaian_puskesmas=='sedang')  {echo "checked";}?>>Biasa saja
                                <input type="radio" name="penilaian_puskesmas" value="buruk" <?php if($row->penilaian_puskesmas=='buruk')  {echo "checked";}?>>Buruk
                            </div> 
                            <div class="form-group">
                                <label>Apakah ada kendala dalam pendidikan anak</label>
                                <input type="textarea" name="kendala_pendidikan" class="form-control" value="<?=$row->kendala_pendidikan?>" required>
                            </div>
                            <div class="form-group">
                                <label>Kondisi sekolah yang ada di desa/kecamatan</label><br>
                                <input type="radio" name="kondisi_pendidikan" value="baik" <?php if($row->kondisi_pendidikan=='baik')  {echo "checked";}?>>Baik
                                <input type="radio" name="kondisi_pendidikan" value="sedang" <?php if($row->kondisi_pendidikan=='sedang')  {echo "checked";}?>>Biasa saja
                                <input type="radio" name="kondisi_pendidikan" value="buruk" <?php if($row->kondisi_pendidikan=='buruk')  {echo "checked";}?>>Buruk
                            </div> 
                            <div class="form-group">
                                <label>Total biaya pengeluaran untuk pendidikan</label>
                                <input type="textarea" name="biaya_pendidikan" class="form-control" value="<?=$row->biaya_pendidikan?>" required>
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