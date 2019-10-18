<script>
    $(document).ready(function() {
        $('#select-all').click(function(event) {
            if (this.checked) {
                $('.checkbox1').each(function() {
                    this.checked = true;
                });
            } else {
                $('.checkbox1').each(function() {
                    this.checked = false;
                });
            }
        });
    });
</script>
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
            <h3 class="box-title"><?= ucfirst($page) ?> Pap </h3>
            <div class="pull-right">
                <a href="<?= site_url('form') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>

            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('form/process') ?>" method="post">
                        <div class="form-group">
                            <label> Nama Enumerator</label>
                            <input type="hidden" name="id" value="<?= $row->pap_id ?>">
                            <input type="text" name="name_enum" value="<?= $row->nama_enumerator ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Nomor Enumerator</label>
                            <input type="text" name="nomor_enum" value="<?= $row->nomor_enumerator ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Nama Kabupaten</label>
                            <input type="text" name="na_kab" value="<?= $row->nama_kabupaten ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Kecamatan</label>
                            <input type="text" name="kecamatan" value="<?= $row->kecamatan ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Desa</label>
                            <input type="text" name="desa" value="<?= $row->desa ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Dusun/ Kampung</label>
                            <input type="text" name="kampung" value="<?= $row->kampung ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Nama Kepala Keluarga</label>
                            <input type="text" name="name_kk" value="<?= $row->nama_kk ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Usia Kepala Keluarga</label><br>
                            <input type="radio" <?php if ($row->usia_kk == '<25th') {
                                                    echo "checked";
                                                } ?> name="usia_kk" value="<25th"> <i>kurang 25th</i><br>
                            <input type="radio" <?php if ($row->usia_kk == '25-35th') {
                                                    echo "checked";
                                                } ?> name="usia_kk" value="25-35th"> <i>25-35th</i><br>
                            <input type="radio" <?php if ($row->usia_kk == '36-45th') {
                                                    echo "checked";
                                                } ?> name="usia_kk" value="36-45th"> <i>36-45th</i><br>
                            <input type="radio" <?php if ($row->usia_kk == '46-55th') {
                                                    echo "checked";
                                                } ?> name="usia_kk" value="46-55th"> <i>46-55th</i><br>
                            <input type="radio" <?php if ($row->usia_kk == '56-60th') {
                                                    echo "checked";
                                                } ?> name="usia_kk" value="56-60th"> <i>56-60th</i><br>
                            <input type="radio" <?php if ($row->usia_kk == '61-65th') {
                                                    echo "checked";
                                                } ?> name="usia_kk" value="61-65th"> <i>61-65th</i><br>
                            <input type="radio" <?php if ($row->usia_kk == '>65th') {
                                                    echo "checked";
                                                } ?> name="usia_kk" value=">65th"> <i>lebih dari 65th</i><br>
                        </div>
                        <div class="form-group">
                            <label> Nama Responden</label>
                            <input type="text" name="name_responden" value="<?= $row->nama_responden ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Usia Responden</label><br>
                            <input type="radio" <?php if ($row->usia_responden == '<25th') {
                                                    echo "checked";
                                                } ?> name="usia_responden" value="<25th"> <i>kurang 25th</i><br>
                            <input type="radio" <?php if ($row->usia_responden == '25-35th') {
                                                    echo "checked";
                                                } ?> name="usia_responden" value="25-35th"> <i>25-35th</i><br>
                            <input type="radio" <?php if ($row->usia_responden == '36-45th') {
                                                    echo "checked";
                                                } ?> name="usia_responden" value="36-45th"> <i>36-45th</i><br>
                            <input type="radio" <?php if ($row->usia_responden == '46-55th') {
                                                    echo "checked";
                                                } ?> name="usia_responden" value="46-55th"> <i>46-55th</i><br>
                            <input type="radio" <?php if ($row->usia_responden == '56-60th') {
                                                    echo "checked";
                                                } ?> name="usia_responden" value="56-60th"> <i>56-60th</i><br>
                            <input type="radio" <?php if ($row->usia_responden == '61-65th') {
                                                    echo "checked";
                                                } ?> name="usia_responden" value="61-65th"> <i>61-65th</i><br>
                            <input type="radio" <?php if ($row->usia_responden == '>65th') {
                                                    echo "checked";
                                                } ?> name="usia_responden" value=">65th"> <i>lebih dari 65th</i><br>
                        </div>
                        <div class="form-group">
                            <label> Jenis kelamin*</label><br>
                            <input type="radio" <?php if ($row->jenis_kelamin == 'pria') {
                                                    echo "checked";
                                                } ?> name="jk[]" value="pria"> <i>Pria</i>
                            <input type="radio" <?php if ($row->jenis_kelamin == 'wanita') {
                                                    echo "checked";
                                                } ?> name="jk[]" value="wanita"> <i>Wanita</i>
                        </div>
                        <div class="form-group">
                            <label> Nomor Responden</label>
                            <input type="text" name="nomor_res" value="<?= $row->nomor_res ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Agama Responden</label><br>
                            <input type="radio" name="agama_res" value="islam" <?php if ($row->agama_res == 'islam') {
                                                                                    echo "checked";
                                                                                } ?> /> <i>Islam</i><br>
                            <input type="radio" name="agama_res" value="kristen protestan" <?php if ($row->agama_res == 'kristen protestan') {
                                                                                                echo "checked";
                                                                                            } ?> /> <i>Kristen Protestan</i> <br>
                            <input type="radio" name="agama_res" value="kristen katolik" <?php if ($row->agama_res == 'kristen katolik') {
                                                                                                echo "checked";
                                                                                            } ?>><i>Kristen Katolik</i> <br>
                            <input type="radio" name="agama_res" value="hindu" <?php if ($row->agama_res == 'hindu') {
                                                                                    echo "checked";
                                                                                } ?>><i>Hindu</i> <br>
                            <input type="radio" name="agama_res" value="budha" <?php if ($row->agama_res == 'budha') {
                                                                                    echo "checked";
                                                                                } ?>> <i>Budha</i> <br>
                            <input type="radio" name="agama_res" value="konghucu" <?php if ($row->agama_res == 'konghucu') {
                                                                                        echo "checked";
                                                                                    } ?>><i>Konghucu</i> <br>
                            <input type="radio" name="agama_res" value="lainnya" <?php if ($row->agama_res == 'lainnya') {
                                                                                        echo "checked";
                                                                                    } ?>><i>Lainnya</i> <br>

                        </div>
                        <div class="form-group">
                            <label> Lama Tinggal/ Menetap</label><br>
                            <input type="radio" name="lama_tinggal" value="dari lahir" <?php if ($row->lama_tinggal == 'dari lahir') {
                                                                                            echo "checked";
                                                                                        } ?>> <i>Dari Lahir</i> <br>
                            <input type="radio" name="lama_tinggal" value=">1th" <?php if ($row->lama_tinggal == '>1th') {
                                                                                        echo "checked";
                                                                                    } ?>> <i>> 1 tahun</i> <br>
                            <input type="radio" name="lama_tinggal" value="1-5th" <?php if ($row->lama_tinggal == '1-5th') {
                                                                                        echo "checked";
                                                                                    } ?>> <i>> 1- 5 tahun</i> <br>
                            <input type="radio" name="lama_tinggal" value="5-10th" <?php if ($row->lama_tinggal == '5-10th') {
                                                                                        echo "checked";
                                                                                    } ?>> <i>5- 10 tahun</i> <br>
                            <input type="radio" name="lama_tinggal" value=">10th" <?php if ($row->lama_tinggal == '>10th') {
                                                                                        echo "checked";
                                                                                    } ?>> <i>> 10 tahun</i> <br>
                        </div>
                        <div class="form-group">
                            <label> Suku Asal</label><br>
                            <input type="radio" name="suku_asal" value="melayu" <?php if ($row->suku_asal == 'melayu') {
                                                                                    echo "checked";
                                                                                } ?>> <i>Melayu</i> <br>
                            <input type="radio" name="suku_asal" value="batak" <?php if ($row->suku_asal == 'batak') {
                                                                                    echo "checked";
                                                                                } ?>> <i>Batak</i> <br>
                            <input type="radio" name="suku_asal" value="minangkabau" <?php if ($row->suku_asal == 'minangkabau') {
                                                                                            echo "checked";
                                                                                        } ?>> <i>Minangkabau</i> <br>
                            <input type="radio" name="suku_asal" value="jawa" <?php if ($row->suku_asal == 'jawa') {
                                                                                    echo "checked";
                                                                                } ?>> <i>Jawa</i> <br>
                            <input type="radio" name="suku_asal" value="sunda" <?php if ($row->suku_asal == 'sunda') {
                                                                                    echo "checked";
                                                                                } ?>> <i>Sunda</i> <br>
                            <input type="radio" name="suku_asal" value="lainnya" <?php if ($row->suku_asal == 'lainnya') {
                                                                                        echo "checked";
                                                                                    } ?>> <i>Suku Lainnya</i> <br>

                        </div>
                        <div class="form-group">
                            <label> Jumlah Anggota Keluarga</label>
                            <input type="textarea" name="jumlah_anggota" value="<?= $row->jumlah_anggota ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Pendidikan Terakhir Kepala Keluarga</label><br>
                            <input type="radio" name="pendidikan_terakhir_kk" value="tidak sekolah" <?php if ($row->pendidikan_terakhir_kk == 'tidak sekolah') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Tidak Sekolah</i> <br>
                            <input type="radio" name="pendidikan_terakhir_kk" value="tidak tamat sd" <?php if ($row->pendidikan_terakhir_kk == 'tidak tamat sd') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Tidak Tamat SD</i> <br>
                            <input type="radio" name="pendidikan_terakhir_kk" value="tamat sd" <?php if ($row->pendidikan_terakhir_kk == 'tamat sd') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Tamat SD</i> <br>
                            <input type="radio" name="pendidikan_terakhir_kk" value="tamat sltp" <?php if ($row->pendidikan_terakhir_kk == 'tamat sltp') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Tamat SLTP</i> <br>
                            <input type="radio" name="pendidikan_terakhir_kk" value="tamat slta" <?php if ($row->pendidikan_terakhir_kk == 'tamat slta') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Tamat SLTA</i> <br>
                            <input type="radio" name="pendidikan_terakhir_kk" value="tamat akademi d3" <?php if ($row->pendidikan_terakhir_kk == 'tamat akademi d3') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Tamat Akademi/D3</i><br>
                            <input type="radio" name="pendidikan_terakhir_kk" value="sarjana" <?php if ($row->pendidikan_terakhir_kk == 'sarjana') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Sarjana</i> <i><br>
                                <input type="radio" name="pendidikan_terakhir_kk" value="pascasarjana" <?php if ($row->pendidikan_terakhir_kk == 'pascasarjana') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Pascasarjana</i> <br>
                                <input type="radio" name="pendidikan_terakhir_kk" value="lainnya" <?php if ($row->pendidikan_terakhir_kk == 'lainnya') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Pendidikan Lainnya</i> <br>
                        </div>
                        <div class="form-group">
                            <label> Pendidikan Terakhir Responden</label><br>
                            <input type="radio" name="pendidikan_terakhir_responden" value="tidak sekolah" <?php if ($row->pendidikan_terakhir_responden == 'tidak sekolah') {
                                                                                                                echo "checked";
                                                                                                            } ?>> <i>Tidak Sekolah</i> <br>
                            <input type="radio" name="pendidikan_terakhir_responden" value="tidak tamat sd" <?php if ($row->pendidikan_terakhir_responden == 'tidak tamat sd') {
                                                                                                                echo "checked";
                                                                                                            } ?>> <i>Tidak Tamat SD</i> <br>
                            <input type="radio" name="pendidikan_terakhir_responden" value="tamat sd" <?php if ($row->pendidikan_terakhir_responden == 'tamat sd') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Tamat SD</i> <br>
                            <input type="radio" name="pendidikan_terakhir_responden" value="tamat sltp" <?php if ($row->pendidikan_terakhir_responden == 'tamat sltp') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Tamat SLTP</i> <br>
                            <input type="radio" name="pendidikan_terakhir_responden" value="tamat slta" <?php if ($row->pendidikan_terakhir_responden == 'tamat slta') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Tamat SLTA</i> <br>
                            <input type="radio" name="pendidikan_terakhir_responden" value="tamat akademi d3" <?php if ($row->pendidikan_terakhir_responden == 'tamat akademi d3') {
                                                                                                                    echo "checked";
                                                                                                                } ?>> <i>Tamat Akademi/D3</i><br>
                            <input type="radio" name="pendidikan_terakhir_responden" value="sarjana" <?php if ($row->pendidikan_terakhir_responden == 'sarjana') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Sarjana</i> <i><br>
                                <input type="radio" name="pendidikan_terakhir_responden" value="pascasarjana" <?php if ($row->pendidikan_terakhir_responden == 'pascasarjana') {
                                                                                                                    echo "checked";
                                                                                                                } ?>> <i>Pascasarjana</i> <br>
                                <input type="radio" name="pendidikan_terakhir_responden" value="lainnya" <?php if ($row->pendidikan_terakhir_responden == 'lainnya') {
                                                                                                                echo "checked";
                                                                                                            } ?>> <i>Pendidikan Lainnya</i> <br>
                        </div>
                        <div class="form-group">
                            <label> Mata Pencarian Utama (Kepala Keluarga)</label><br>
                            <input type="checkbox" name="pencarian_utama[]" value="pns" <?php if ($row->pencarian_utama == 'pns') {
                                                                                            echo "checked";
                                                                                        } ?>> <i>PNS</i> <br>
                            <input type="checkbox" name="pencarian_utama[]" value="karyawan" <?php if ($row->pencarian_utama == 'karyawan') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Karyawan Swasta</i> <br>
                            <input type="checkbox" name="pencarian_utama[]" value="honorer" <?php if ($row->pencarian_utama == 'honorer') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Honorer</i> <br>
                            <input type="checkbox" name="pencarian_utama[]" value="petani" <?php if ($row->pencarian_utama == 'petani') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Petani</i> <br>
                            <input type="checkbox" name="pencarian_utama[]" value="peternak" <?php if ($row->pencarian_utama == 'peternak') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Peternak</i> <br>
                            <input type="checkbox" name="pencarian_utama[]" value="pedagang" <?php if ($row->pencarian_utama == 'pedagang') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Pedagang</i><br>
                            <input type="checkbox" name="pencarian_utama[]" value="buruh" <?php if ($row->pencarian_utama == 'buruh') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Buruh</i> <br>
                            <input type="checkbox" name="pencarian_utama[]" value="supir" <?php if ($row->pencarian_utama == 'supir') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Supir</i> <br>
                            <input type="checkbox" name="pencarian_utama[]" value="wirausaha" <?php if ($row->pencarian_utama == 'wirausaha') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Wirausaha</i> <br>
                            <input type="checkbox" name="pencarian_utama[]" value="lainnya" <?php if ($row->pencarian_utama == 'lainnya') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Pekerjaan lainnya</i> <br>
                        </div>
                        <div class="form-group">
                            <label> Mata Pencarian lain (Kepala Keluarga & anggota)</label><br>
                            <input type="checkbox" name="pencarian_kedua[]" value="pns" <?php if ($row->pencarian_kedua == 'pns') {
                                                                                            echo "checked";
                                                                                        } ?>> <i>PNS</i> <br>
                            <input type="checkbox" name="pencarian_kedua[]" value="karyawan" <?php if ($row->pencarian_kedua == 'karyawan') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Karyawan Swasta</i> <br>
                            <input type="checkbox" name="pencarian_kedua[]" value="honorer" <?php if ($row->pencarian_kedua == 'honorer') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Honorer</i> <br>
                            <input type="checkbox" name="pencarian_kedua[]" value="petani" <?php if ($row->pencarian_kedua == 'petani') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Petani</i> <br>
                            <input type="checkbox" name="pencarian_kedua[]" value="peternak" <?php if ($row->pencarian_kedua == 'peternak') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Peternak</i> <br>
                            <input type="checkbox" name="pencarian_kedua[]" value="pedagang" <?php if ($row->pencarian_kedua == 'pedagang') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Pedagang</i><br>
                            <input type="checkbox" name="pencarian_kedua[]" value="buruh" <?php if ($row->pencarian_kedua == 'buruh') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Buruh</i> <br>
                            <input type="checkbox" name="pencarian_kedua[]" value="supir" <?php if ($row->pencarian_kedua == 'supir') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Supir</i> <br>
                            <input type="checkbox" name="pencarian_kedua[]" value="wirausaha" <?php if ($row->pencarian_kedua == 'wirausaha') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Wirausaha</i> <br>
                            <input type="checkbox" name="pencarian_kedua[]" value="lainnya" <?php if ($row->pencarian_kedua == 'lainnya') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Pekerjaan Lainnya</i> <br>
                        </div>
                        <div class="form-group">
                            <label> Jenis Keterampilan kepala keluarga kuasai</label><br>
                            <input type="checkbox" name="keterampilan_kk[]" value="bertani" <?php if ($row->keterampilan_kk == 'bertani') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Bertani</i> <br>
                            <input type="checkbox" name="keterampilan_kk[]" value="berternak" <?php if ($row->keterampilan_kk == 'berternak') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Beternak</i> <br>
                            <input type="checkbox" name="keterampilan_kk[]" value="montir" <?php if ($row->keterampilan_kk == 'montir') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Montir/Mekanik</i> <br>
                            <input type="checkbox" name="keterampilan_kk[]" value="pertukangan_kayu/batu" <?php if ($row->keterampilan_kk == 'pertukangan_kayu/batu') {
                                                                                                                echo "checked";
                                                                                                            } ?>> <i>Pertukangan kayu/batu</i> <br>
                            <input type="checkbox" name="keterampilan_kk[]" value="listrik" <?php if ($row->keterampilan_kk == 'listrik') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Listrik</i> <br>
                            <input type="checkbox" name="keterampilan_kk[]" value="memancing" <?php if ($row->keterampilan_kk == 'memancing') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Memancing</i><br>
                            <input type="checkbox" name="keterampilan_kk[]" value="berdagang" <?php if ($row->keterampilan_kk == 'berdagang') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Berdagang</i> <br>
                            <input type="checkbox" name="keterampilan_kk[]" value="supir" <?php if ($row->keterampilan_kk == 'supir') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Supir</i> <br>
                            <input type="checkbox" name="keterampilan_kk[]" value="penjahit" <?php if ($row->keterampilan_kk == 'penjahit') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Penjahit/bordir</i> <br>
                            <input type="checkbox" name="keterampilan_kk[]" value="memasak" <?php if ($row->keterampilan_kk == 'memasak') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Memasak</i> <br>
                            <input type="checkbox" name="keterampilan_kk[]" value="lainnya" <?php if ($row->keterampilan_kk == 'lainnya') {
                                                                                                echo "checked";
                                                                                            } ?>> <i>Jenis keterampilan lainnya</i> <br>

                        </div>
                        <div class="form-group" class="checkbox1">
                            <label> Asal keterampilan keterampilan kepala keluarga</label><br>
                            <input type="checkbox" name="asal_keterampilan_kk[]" value="otodidak" <?php if ($row->asal_keterampilan_kk == 'otodidak') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Belajar Sendiri</i> <br>
                            <input type="checkbox" name="asal_keterampilan_kk[]" value="kursus" <?php if ($row->asal_keterampilan_kk == 'kursus') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Mengikuti kursus</i><br>
                            <input type="checkbox" name="asal_keterampilan_kk[]" value="program pemerintah" <?php if ($row->asal_keterampilan_kk == 'program pemerintah') {
                                                                                                                echo "checked";
                                                                                                            } ?>> <i>Program Pemerintah</i> <br>
                            <input type="checkbox" name="asal_keterampilan_kk[]" value="lsm" <?php if ($row->asal_keterampilan_kk == 'lsm') {
                                                                                                    echo "checked";
                                                                                                } ?>> <i>Lsm atau NGO</i> <br>
                            <input type="checkbox" name="asal_keterampilan_kk[]" value="turun menurun" <?php if ($row->asal_keterampilan_kk == 'turun menurun') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Turun Menurun</i><br>
                            <input type="checkbox" name="asal_keterampilan_kk[]" value="pelatihan perusahaan" <?php if ($row->asal_keterampilan_kk == 'pelatihan perusahaan') {
                                                                                                                    echo "checked";
                                                                                                                } ?>> <i>Program pelatihan perusahaan</i><br>
                        </div>
                        <div class="form-group">
                            <label> Jenis keterampilan responden kuasai</label><br>
                            <input type="checkbox" name="keterampilan_responden[]" value="bertani" <?php if ($row->keterampilan_responden == 'bertani') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Bertani</i> <br>
                            <input type="checkbox" name="keterampilan_responden[]" value="berternak" <?php if ($row->keterampilan_responden == 'berternak') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Beternak</i> <br>
                            <input type="checkbox" name="keterampilan_responden[]" value="montir" <?php if ($row->keterampilan_responden == 'montir') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Montir/Mekanik</i> <br>
                            <input type="checkbox" name="keterampilan_responden[]" value="pertukangan" <?php if ($row->keterampilan_responden == 'pertukangan') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Pertukangan kayu/batu</i> <br>
                            <input type="checkbox" name="keterampilan_responden[]" value="listrik" <?php if ($row->keterampilan_responden == 'listrik') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Listrik</i> <br>
                            <input type="checkbox" name="keterampilan_responden[]" value="memancing" <?php if ($row->keterampilan_responden == 'memancing') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Memancing</i><br>
                            <input type="checkbox" name="keterampilan_responden[]" value="berdagang" <?php if ($row->keterampilan_responden == 'berdagang') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Berdagang</i> <br>
                            <input type="checkbox" name="keterampilan_responden[]" value="supir" <?php if ($row->keterampilan_responden == 'supir') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Supir</i> <br>
                            <input type="checkbox" name="keterampilan_responden[]" value="penjahit" <?php if ($row->keterampilan_responden == 'penjahit') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Penjahit/bordir</i> <br>
                            <input type="checkbox" name="keterampilan_responden[]" value="memasak" <?php if ($row->keterampilan_responden == 'memasak') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Memasak</i> <br>
                            <input type="checkbox" name="keterampilan_responden[]" value="lainnya" <?php if ($row->keterampilan_responden == 'lainnya') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Jenis keterampilan lainnya</i> <br>

                        </div>
                        <div class="form-group">
                            <label> Asal keterampilan keterampilan responden</label><br>
                            <input type="checkbox" name="asal_keterampilan_responden[]" value="otodidak" <?php if ($row->asal_keterampilan_responden == 'otodidak') {
                                                                                                                echo "checked";
                                                                                                            } ?>> <i>Belajar Sendiri</i> <br>
                            <input type="checkbox" name="asal_keterampilan_responden[]" value="kursus" <?php if ($row->asal_keterampilan_responden == 'kursus') {
                                                                                                            echo "checked";
                                                                                                        } ?>> <i>Mengikuti kursus</i><br>
                            <input type="checkbox" name="asal_keterampilan_responden[]" value="program pemerintah" <?php if ($row->asal_keterampilan_responden == 'program pemerintah') {
                                                                                                                        echo "checked";
                                                                                                                    } ?>> <i>Program Pemerintah</i> <br>
                            <input type="checkbox" name="asal_keterampilan_responden[]" value="lsm" <?php if ($row->asal_keterampilan_responden == 'lsm') {
                                                                                                        echo "checked";
                                                                                                    } ?>> <i>Lsm atau NGO</i> <br>
                            <input type="checkbox" name="asal_keterampilan_responden[]" value="turun menurun" <?php if ($row->asal_keterampilan_responden == 'turun menurun') {
                                                                                                                    echo "checked";
                                                                                                                } ?>> <i>Turun Menurun</i><br>
                            <input type="checkbox" name="asal_keterampilan_responden[]" value="pelatihan perusahaan" <?php if ($row->asal_keterampilan_responden == 'pelatihan perusahaan') {
                                                                                                                            echo "checked";
                                                                                                                        } ?>> <i>Program pelatihan perusahaan</i><br>
                        </div>
                        <div class="form-group">
                            <label>Kegiatan apa saja yang bapak & ibu lakukan sehari-hari (kepala keluarga)</label>
                            <input type="textarea" name="kegiatan_kk" class="form-control" value="<?= $row->kegiatan_kk ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Berapa kali keluarga makan dalam sehari</label><br>
                            <input type="radio" name="makan_sehari" value="1x" <?php if ($row->makan_sehari == '1x') {
                                                                                    echo "checked";
                                                                                } ?>>Satu kali <br>
                            <input type="radio" name="makan_sehari" value="2x" <?php if ($row->makan_sehari == '2x') {
                                                                                    echo "checked";
                                                                                } ?>>Dua kali <br>
                            <input type="radio" name="makan_sehari" value="3x" <?php if ($row->makan_sehari == '3x') {
                                                                                    echo "checked";
                                                                                } ?>>Tiga kali <br>
                        </div>
                        <div class="form-group">
                            <label>Tempat berobat & alasan</label>
                            <input type="text" name="tempat_berobat" class="form-control" value="<?= $row->tempat_berobat ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Memiliki jaminan kesehatan</label>
                            <input type="textarea" name="jaminan_kesehatan" class="form-control" value="<?= $row->jaminan_kesehatan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Penilaian terhadap pelayanyan fasilitas kesehatan (puskesmas,polindes,pustu,klinik dll)</label><br>
                            <input type="radio" name="penilaian_puskesmas" value="baik" <?php if ($row->penilaian_puskesmas == 'baik') {
                                                                                            echo "checked";
                                                                                        } ?>>Baik <br>
                            <input type="radio" name="penilaian_puskesmas" value="sedang" <?php if ($row->penilaian_puskesmas == 'sedang') {
                                                                                                echo "checked";
                                                                                            } ?>>Biasa saja <br>
                            <input type="radio" name="penilaian_puskesmas" value="buruk" <?php if ($row->penilaian_puskesmas == 'buruk') {
                                                                                                echo "checked";
                                                                                            } ?>>Buruk <br>
                        </div>
                        <div class="form-group">
                            <label>Apakah ada kendala dalam pendidikan anak</label>
                            <input type="textarea" name="kendala_pendidikan" class="form-control" value="<?= $row->kendala_pendidikan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kondisi sekolah yang ada di desa/kecamatan</label><br>
                            <input type="radio" name="kondisi_pendidikan" value="baik" <?php if ($row->kondisi_pendidikan == 'baik') {
                                                                                            echo "checked";
                                                                                        } ?>>Baik <br>
                            <input type="radio" name="kondisi_pendidikan" value="sedang" <?php if ($row->kondisi_pendidikan == 'sedang') {
                                                                                                echo "checked";
                                                                                            } ?>>Biasa saja <br>
                            <input type="radio" name="kondisi_pendidikan" value="buruk" <?php if ($row->kondisi_pendidikan == 'buruk') {
                                                                                            echo "checked";
                                                                                        } ?>>Buruk <br>
                        </div>
                        <div class="form-group">
                            <label>Total biaya pengeluaran untuk pendidikan</label>
                            <input type="textarea" name="biaya_pendidikan" class="form-control" value="<?= $row->biaya_pendidikan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Total luas lahan yang dimiliki sebelum pembebasan proyek</label>
                            <input type="textarea" name="total_lahan" class="form-control" value="<?= $row->total_lahan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Luas lahan yang terkena pembebasan proyek</label>
                            <input type="textarea" name="luas_proyek_lahan" class="form-control" value="<?= $row->luas_proyek_lahan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Total luas lahan setelah terkena pembebasan proyek</label>
                            <input type="textarea" name="total_proyek_lahan" class="form-control" value="<?= $row->total_proyek_lahan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis tanaman yang di tanam di atas lahan yang di bebaskan</label>
                            <input type="textarea" name="jenis_tanaman_lahan" class="form-control" value="<?= $row->jenis_tanaman_lahan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Status lahan yang di bebaskan</label><br>
                            <input type="radio" name="status_lahan" value="pribadi" <?php if ($row->status_lahan == 'pribadi') {
                                                                                        echo "checked";
                                                                                    } ?>>Milik Pribadi <br>
                            <input type="radio" name="status_lahan" value="orang tua" <?php if ($row->status_lahan == 'orang tua') {
                                                                                            echo "checked";
                                                                                        } ?>>Milik Orang Tua<br>
                            <input type="radio" name="status_lahan" value="bersama" <?php if ($row->status_lahan == 'bersama') {
                                                                                        echo "checked";
                                                                                    } ?>>Milik Komunitas/ Bersama <br>
                            <input type="radio" name="status_lahan" value="lainnya" <?php if ($row->status_lahan == 'lainnya') {
                                                                                        echo "checked";
                                                                                    } ?>>Status Lahan Lainnya<br>

                        </div>
                        <div class="form-group">
                            <label>Hasil pertanian di atas lahan yang di garap saat ini</label>
                            <input type="textarea" name="hasil_pertanian" class="form-control" value="<?= $row->hasil_pertanian ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kemana hasil jual pertanian?</label><br>
                            <input type="radio" name="jual_pertanian" value="tetangga" <?php if ($row->jual_pertanian == 'tetangga') {
                                                                                            echo "checked";
                                                                                        } ?>>Tetangga <br>
                            <input type="radio" name="jual_pertanian" value="pasar" <?php if ($row->jual_pertanian == 'pasar') {
                                                                                        echo "checked";
                                                                                    } ?>>Pasar Desa/Lokal<br>
                            <input type="radio" name="jual_pertanian" value="tengkulak" <?php if ($row->jual_pertanian == 'tengkulak') {
                                                                                            echo "checked";
                                                                                        } ?>>Tengkulak/Toke <br>
                            <input type="radio" name="jual_pertanian" value="pengumpul" <?php if ($row->jual_pertanian == 'pengumpul') {
                                                                                            echo "checked";
                                                                                        } ?>>Pedangang/ pengumpul <br>
                            <input type="radio" name="jual_pertanian" value="tidak" <?php if ($row->jual_pertanian == 'tidak') {
                                                                                        echo "checked";
                                                                                    } ?>>Tidak Ada <br>

                        </div>
                        <div class="form-group">
                            <label>Hasil peternakan di atas lahan yang di garap saat ini</label>
                            <input type="textarea" name="hasil_peternakan" class="form-control" value="<?= $row->hasil_peternakan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kemana hasil jual peternakan?</label><br>
                            <input type="radio" name="jual_peternakan" value="tetangga" <?php if ($row->jual_peternakan == 'tetangga') {
                                                                                            echo "checked";
                                                                                        } ?>>Tetangga <br>
                            <input type="radio" name="jual_peternakan" value="pasar" <?php if ($row->jual_peternakan == 'pasar') {
                                                                                            echo "checked";
                                                                                        } ?>>Pasar Desa/Lokal<br>
                            <input type="radio" name="jual_peternakan" value="tengkulak" <?php if ($row->jual_peternakan == 'tengkulak') {
                                                                                                echo "checked";
                                                                                            } ?>>Tengkulak/Toke <br>
                            <input type="radio" name="jual_peternakan" value="pengumpul" <?php if ($row->jual_peternakan == 'pengumpul') {
                                                                                                echo "checked";
                                                                                            } ?>>Pedangang/ pengumpul <br>
                            <input type="radio" name="jual_peternakan" value="tidak" <?php if ($row->jual_peternakan == 'tidak') {
                                                                                            echo "checked";
                                                                                        } ?>>Tidak Ada <br>

                        </div>
                        <div class="form-group">
                            <label>Hasil budidaya perikanan</label>
                            <input type="textarea" name="hasil_budidaya" class="form-control" value="<?= $row->hasil_budidaya ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kemana hasil jual perikanan?</label><br>
                            <input type="radio" name="jual_budidaya" value="tetangga" <?php if ($row->jual_budidaya == 'tetangga') {
                                                                                            echo "checked";
                                                                                        } ?>>Tetangga <br>
                            <input type="radio" name="jual_budidaya" value="pasar" <?php if ($row->jual_budidaya == 'pasar') {
                                                                                        echo "checked";
                                                                                    } ?>>Pasar Desa/Lokal<br>
                            <input type="radio" name="jual_budidaya" value="tengkulak" <?php if ($row->jual_budidaya == 'tengkulak') {
                                                                                            echo "checked";
                                                                                        } ?>>Tengkulak/Toke <br>
                            <input type="radio" name="jual_budidaya" value="pengumpul" <?php if ($row->jual_budidaya == 'pengumpul') {
                                                                                            echo "checked";
                                                                                        } ?>>Pedangang/ pengumpul <br>
                            <input type="radio" name="jual_budidaya" value="tidak" <?php if ($row->jual_budidaya == 'tidak') {
                                                                                        echo "checked";
                                                                                    } ?>>Tidak Ada <br>

                        </div>
                        <div class="form-group">
                            <label>Hasil tangkapan ikan</label>
                            <input type="textarea" name="hasil_ikan" class="form-control" value="<?= $row->hasil_ikan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kemana hasil jual tangkapan ikan?</label><br>
                            <input type="radio" name="jual_ikan" value="tetangga" <?php if ($row->jual_ikan == 'tetangga') {
                                                                                        echo "checked";
                                                                                    } ?>>Tetangga <br>
                            <input type="radio" name="jual_ikan" value="pasar" <?php if ($row->jual_ikan == 'pasar') {
                                                                                    echo "checked";
                                                                                } ?>>Pasar Desa/Lokal<br>
                            <input type="radio" name="jual_ikan" value="tengkulak" <?php if ($row->jual_ikan == 'tengkulak') {
                                                                                        echo "checked";
                                                                                    } ?>>Tengkulak/Toke <br>
                            <input type="radio" name="jual_ikan" value="pengumpul" <?php if ($row->jual_ikan == 'pengumpul') {
                                                                                        echo "checked";
                                                                                    } ?>>Pedangang/ pengumpul <br>
                            <input type="radio" name="jual_ikan" value="tidak" <?php if ($row->jual_ikan == 'tidak') {
                                                                                    echo "checked";
                                                                                } ?>>Tidak Ada <br>

                        </div>
                        <div class="form-group">
                            <label>Hasil hutan </label>
                            <input type="textarea" name="hasil_hutan" class="form-control" value="<?= $row->hasil_hutan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kemana hasil jual dari hutan?</label><br>
                            <input type="radio" name="jual_hutan" value="tetangga" <?php if ($row->jual_hutan == 'tetangga') {
                                                                                        echo "checked";
                                                                                    } ?>>Tetangga <br>
                            <input type="radio" name="jual_hutan" value="pasar" <?php if ($row->jual_hutan == 'pasar') {
                                                                                    echo "checked";
                                                                                } ?>>Pasar Desa/Lokal<br>
                            <input type="radio" name="jual_hutan" value="tengkulak" <?php if ($row->jual_hutan == 'tengkulak') {
                                                                                        echo "checked";
                                                                                    } ?>>Tengkulak/Toke <br>
                            <input type="radio" name="jual_hutan" value="pengumpul" <?php if ($row->jual_hutan == 'pengumpul') {
                                                                                        echo "checked";
                                                                                    } ?>>Pedangang/ pengumpul <br>
                            <input type="radio" name="jual_hutan" value="tidak" <?php if ($row->jual_hutan == 'tidak') {
                                                                                    echo "checked";
                                                                                } ?>>Tidak Ada <br>

                        </div>
                        <div class="form-group">
                            <label>Hasil galian/ pertambangan</label>
                            <input type="textarea" name="hasil_tambang" class="form-control" value="<?= $row->hasil_tambang ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Apakah dalam melakukan usaha penggalian dan pertambangan memiliki ijin dari pemerintah daerah?</label>
                            <input type="textarea" name="izin_tambang" class="form-control" value="<?= $row->izin_tambang ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kemana hasil jual pertambangan?</label><br>
                            <input type="radio" name="jual_tambang" value="tetangga" <?php if ($row->jual_tambang == 'tetangga') {
                                                                                            echo "checked";
                                                                                        } ?>>Tetangga <br>
                            <input type="radio" name="jual_tambang" value="pasar" <?php if ($row->jual_tambang == 'pasar') {
                                                                                        echo "checked";
                                                                                    } ?>>Pasar Desa/Lokal<br>
                            <input type="radio" name="jual_tambang" value="tengkulak" <?php if ($row->jual_tambang == 'tengkulak') {
                                                                                            echo "checked";
                                                                                        } ?>>Tengkulak/Toke <br>
                            <input type="radio" name="jual_tambang" value="pengumpul" <?php if ($row->jual_tambang == 'pengumpul') {
                                                                                            echo "checked";
                                                                                        } ?>>Pedangang/ pengumpul <br>
                            <input type="radio" name="jual_tambang" value="tidak" <?php if ($row->jual_tambang == 'tidak') {
                                                                                        echo "checked";
                                                                                    } ?>>Tidak Ada <br>

                        </div>
                        <div class="form-group">
                            <label>Status kepemilikan rumah</label><br>
                            <input type="radio" name="status_rumah" value="milik sendiri" <?php if ($row->status_rumah == 'milik sendiri') {
                                                                                                echo "checked";
                                                                                            } ?>>milik sendiri <br>
                            <input type="radio" name="status_rumah" value="milik orang tua" <?php if ($row->status_rumah == 'milik orang tua') {
                                                                                                echo "checked";
                                                                                            } ?>>milik orang tua<br>
                            <input type="radio" name="status_rumah" value="mengontrak" <?php if ($row->status_rumah == 'mengontrak') {
                                                                                            echo "checked";
                                                                                        } ?>>mengontrak <br>
                            <input type="radio" name="status_rumah" value="menumpang" <?php if ($row->status_rumah == 'menumpang') {
                                                                                            echo "checked";
                                                                                        } ?>>menumpang <br>
                        </div>
                        <div class="form-group">
                            <label>Luas Bangunan</label>
                            <input type="textarea" name="luas_bangunan" class="form-control" value="<?= $row->luas_bangunan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Luas Lahan</label>
                            <input type="textarea" name="luas_lahan" class="form-control" value="<?= $row->luas_lahan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Material Bangunan Rumah</label>
                            <input type="textarea" name="material_bangunan" class="form-control" value="<?= $row->material_bangunan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kondisi bangunan rumah</label><br>
                            <input type="radio" name="kondisi_bangunan" value="terawat" <?php if ($row->kondisi_bangunan == 'terawat') {
                                                                                            echo "checked";
                                                                                        } ?>>Bagus & Terawat <br>
                            <input type="radio" name="kondisi_bangunan" value="kurang" <?php if ($row->kondisi_bangunan == 'kurang') {
                                                                                            echo "checked";
                                                                                        } ?>> Kurang Terawat<br>
                            <input type="radio" name="kondisi_bangunan" value="rusak" <?php if ($row->kondisi_bangunan == 'rusak') {
                                                                                            echo "checked";
                                                                                        } ?>>Usang & Rusak <br>
                        </div>
                        <div class="form-group">
                            <label>Tahun dibangun rumah</label>
                            <input type="textarea" name="rumah_dibangun" class="form-control" value="<?= $row->rumah_dibangun ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Tahun dibangun mck</label>
                            <input type="textarea" name="mck_dibangun" class="form-control" value="<?= $row->mck_dibangun ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Sumber dana membangun rumah</label><br>
                            <input type="radio" name="sumber_dana" value="pribadi" <?php if ($row->sumber_dana == 'pribadi') {
                                                                                        echo "checked";
                                                                                    } ?>>Dana Pribadi <br>
                            <input type="radio" name="sumber_dana" value="bantuan kerabat" <?php if ($row->sumber_dana == 'bantuan kerabat') {
                                                                                                echo "checked";
                                                                                            } ?>>Bantuan Kerabat<br>
                            <input type="radio" name="sumber_dana" value="pinjaman" <?php if ($row->sumber_dana == 'pinjaman') {
                                                                                        echo "checked";
                                                                                    } ?>>Pinjaman <br>
                            <input type="radio" name="sumber_dana" value="bantuan pemerintah" <?php if ($row->sumber_dana == 'bantuan pemerintah') {
                                                                                                    echo "checked";
                                                                                                } ?>>Bantuan Pemerintah <br>
                            <input type="radio" name="sumber_dana" value="bantuan lainnya" <?php if ($row->sumber_dana == 'bantuan lainnya') {
                                                                                                echo "checked";
                                                                                            } ?>>Bantuan Lainnya<br>
                        </div>
                        <div class="form-group">
                            <label>Jumlah orang di dalam rumah</label>
                            <input type="textarea" name="jumlah_orang" class="form-control" value="<?= $row->jumlah_orang ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Sirkulasi udara didalam rumah</label><br>
                            <input type="radio" name="sirkulasi_rumah" value="ada" <?php if ($row->sirkulasi_rumah == 'ada') {
                                                                                        echo "checked";
                                                                                    } ?>>Ada
                            <input type="radio" name="sirkulasi_rumah" value="tidak" <?php if ($row->sirkulasi_rumah == 'tidak') {
                                                                                            echo "checked";
                                                                                        } ?>>Tidak ada
                        </div>
                        <div class="form-group">
                            <label>Penerangan cahaya didalam rumah</label><br>
                            <input type="radio" name="pencahayaan_rumah" value="baik" <?php if ($row->pencahayaan_rumah == 'baik') {
                                                                                            echo "checked";
                                                                                        } ?>>baik <br>
                            <input type="radio" name="pencahayaan_rumah" value="sedang" <?php if ($row->pencahayaan_rumah == 'sedang') {
                                                                                            echo "checked";
                                                                                        } ?>>sedang <br>
                            <input type="radio" name="pencahayaan_rumah" value="buruk" <?php if ($row->pencahayaan_rumah == 'buruk') {
                                                                                            echo "checked";
                                                                                        } ?>>buruk <br>
                        </div>
                        <div class="form-group">
                            <label>Barang yang dimiliki</label>
                            <input type="textarea" name="barang_dimiliki" class="form-control" value="<?= $row->barang_dimiliki ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Total bangunan untuk usaha jasa dan perdagangan</label>
                            <input type="textarea" name="bangunan_usaha" class="form-control" value="<?= $row->bangunan_usaha ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Sumber penerangan yang di gunakan</label><br>
                            <input type="radio" name="sumber_penerangan" value="pln" <?php if ($row->sumber_penerangan == 'pln') {
                                                                                            echo "checked";
                                                                                        } ?>>PLN<br>
                            <input type="radio" name="sumber_penerangan" value="lampu minyak" <?php if ($row->sumber_penerangan == 'lampu minyak') {
                                                                                                    echo "checked";
                                                                                                } ?>>Lampu Minyak <br>
                            <input type="radio" name="sumber_penerangan" value="genset pribadi" <?php if ($row->sumber_penerangan == 'genset pribadi') {
                                                                                                    echo "checked";
                                                                                                } ?>>Genset Pribadi<br>
                            <input type="radio" name="sumber_penerangan" value="genset desa" <?php if ($row->sumber_penerangan == 'genset desa') {
                                                                                                    echo "checked";
                                                                                                } ?>>Genset Desa <br>
                            <input type="radio" name="sumber_penerangan" value="genset tetangga" <?php if ($row->sumber_penerangan == 'genset tetangga') {
                                                                                                        echo "checked";
                                                                                                    } ?>>Genset Tetangga <br>
                            <input type="radio" name="sumber_penerangan" value="sumber lainnya" <?php if ($row->sumber_penerangan == 'sumber lainnya') {
                                                                                                    echo "checked";
                                                                                                } ?>>Sumber Lainnya <br>

                        </div>
                        <div class="form-group">
                            <label>Sumber air yang digunakan</label><br>
                            <input type="radio" name="sumber_air" value="pdam" <?php if ($row->sumber_air == 'pdam') {
                                                                                    echo "checked";
                                                                                } ?>>PDAM <br>
                            <input type="radio" name="sumber_air" value="pipanisasi desa" <?php if ($row->sumber_air == 'pipanisasi desa') {
                                                                                                echo "checked";
                                                                                            } ?>>Pipanisasi Desa <br>
                            <input type="radio" name="sumber_air" value="sumur" <?php if ($row->sumber_air == 'sumur') {
                                                                                    echo "checked";
                                                                                } ?>>Sumur<br>
                            <input type="radio" name="sumber_air" value="mata air" <?php if ($row->sumber_air == 'mata air') {
                                                                                        echo "checked";
                                                                                    } ?>>Mata Air <br>
                            <input type="radio" name="sumber_air" value="sungai" <?php if ($row->sumber_air == 'sungai') {
                                                                                        echo "checked";
                                                                                    } ?>>Sungai <br>
                            <input type="radio" name="sumber_air" value="sumber lainnya" <?php if ($row->sumber_air == 'sumber lainnya') {
                                                                                                echo "checked";
                                                                                            } ?>>Sumber Lainnya <br>

                        </div>
                        <div class="form-group">
                            <label>Sumber air untuk minum</label><br>
                            <input type="radio" name="air_minum" value="sungai" <?php if ($row->air_minum == 'sungai') {
                                                                                    echo "checked";
                                                                                } ?>>Air Sungai <br>
                            <input type="radio" name="air_minum" value="sumur" <?php if ($row->air_minum == 'sumur') {
                                                                                    echo "checked";
                                                                                } ?>>Air Sumur <br>
                            <input type="radio" name="air_minum" value="mineral" <?php if ($row->air_minum == 'mineral') {
                                                                                        echo "checked";
                                                                                    } ?>>Air Mineral/galon<br>
                            <input type="radio" name="air_minum" value="hujan" <?php if ($row->air_minum == 'hujan') {
                                                                                    echo "checked";
                                                                                } ?>>Air Hujan <br>
                            <input type="radio" name="air_minum" value="mata air" <?php if ($row->air_minum == 'mata air') {
                                                                                        echo "checked";
                                                                                    } ?>>Mata Air <br>
                            <input type="radio" name="air_minum" value="pdam" <?php if ($row->air_minum == 'pdam') {
                                                                                    echo "checked";
                                                                                } ?>>Air Pdam <br>
                            <input type="radio" name="air_minum" value="sumber lainnya" <?php if ($row->air_minum == 'sumber lainnya') {
                                                                                            echo "checked";
                                                                                        } ?>>Sumber Lainnya <br>

                        </div>
                        <div class="form-group">
                            <label>Sarana mandi & buang air besar keluarga</label><br>
                            <input type="radio" name="sarana_mandi" value="kamar mandi keluarga" <?php if ($row->sarana_mandi == 'kamar mandi keluarga') {
                                                                                                        echo "checked";
                                                                                                    } ?>>Kamar Mandi Keluarga <br>
                            <input type="radio" name="sarana_mandi" value="kamar mandi umum" <?php if ($row->sarana_mandi == 'kamar mandi umum') {
                                                                                                    echo "checked";
                                                                                                } ?>>Kamar Mandi Umum<br>
                            <input type="radio" name="sarana_mandi" value="sungai" <?php if ($row->sarana_mandi == 'sungai') {
                                                                                        echo "checked";
                                                                                    } ?>>Sungai <br>
                            <input type="radio" name="sarana_mandi" value="sembarang tempat" <?php if ($row->sarana_mandi == 'sembarang tempat') {
                                                                                                    echo "checked";
                                                                                                } ?>>Sembarang Tempat <br>
                            <input type="radio" name="sarana_mandi" value="lainnya" <?php if ($row->sarana_mandi == 'lainnya') {
                                                                                        echo "checked";
                                                                                    } ?>>Tempat lainnya <br>
                        </div>
                        <div class="form-group">
                            <label>Cara pengelolaan sampah rumah tangga </label><br>
                            <input type="radio" name="pengelolaan_sampah" value="petugas kebersihan" <?php if ($row->pengelolaan_sampah == 'petugas kebersihan') {
                                                                                                            echo "checked";
                                                                                                        } ?>>Diangkut Petugas Kebersihan <br>
                            <input type="radio" name="pengelolaan_sampah" value="dibakar" <?php if ($row->pengelolaan_sampah == 'dibakar') {
                                                                                                echo "checked";
                                                                                            } ?>>Dibakar<br>
                            <input type="radio" name="pengelolaan_sampah" value="buang kesungai" <?php if ($row->pengelolaan_sampah == 'buang kesungai') {
                                                                                                        echo "checked";
                                                                                                    } ?>>Dibuang Kesungai <br>
                            <input type="radio" name="pengelolaan_sampah" value="buang sembarangan" <?php if ($row->pengelolaan_sampah == 'buang sembarangan') {
                                                                                                        echo "checked";
                                                                                                    } ?>>Dibuang Sembarangan <br>
                            <input type="radio" name="pengelolaan_sampah" value="lainnya" <?php if ($row->pengelolaan_sampah == 'lainnya') {
                                                                                                echo "checked";
                                                                                            } ?>>Lainnya <br>

                        </div>
                        <div class="form-group">
                            <label>Cara pengelolaan limbah cair rumah tangga</label><br>
                            <input type="radio" name="pengelolaan_cair" value="pembuangan septictank" <?php if ($row->pengelolaan_cair == 'pembuangan septictank') {
                                                                                                            echo "checked";
                                                                                                        } ?>>Membuat Sarana Pembuangan Septictank<br>
                            <input type="radio" name="pengelolaan_cair" value="disalurkan parit" <?php if ($row->pengelolaan_cair == 'disalurkan parit') {
                                                                                                        echo "checked";
                                                                                                    } ?>>Disalurkan Ke Parit/Kubangan/Comberan<br>
                            <input type="radio" name="pengelolaan_cair" value="disalurkan sungai" <?php if ($row->pengelolaan_cair == 'disalurkan sungai') {
                                                                                                        echo "checked";
                                                                                                    } ?>>Disalurkan Kesungai <br>
                            <input type="radio" name="pengelolaan_cair" value="lainnya" <?php if ($row->pengelolaan_cair == 'lainnya') {
                                                                                            echo "checked";
                                                                                        } ?>>Lainnya <br>

                        </div>
                        <div class="form-group">
                            <label>Jumlah Sepeda yang dimiliki</label>
                            <input type="textarea" name="jumlah_sepeda" class="form-control" value="<?= $row->jumlah_sepeda ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Motor yang dimiliki</label>
                            <input type="textarea" name="jumlah_motor" class="form-control" value="<?= $row->jumlah_motor ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Mobil yang dimiliki</label>
                            <input type="textarea" name="jumlah_mobil" class="form-control" value="<?= $row->jumlah_mobil ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Truck yang dimiliki</label>
                            <input type="textarea" name="jumlah_truck" class="form-control" value="<?= $row->jumlah_truck ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Jika tidak ada, apa transportasi yang di gunakan </label><br>
                            <input type="radio" name="transportasi" value="umum" <?php if ($row->transportasi == 'umum') {
                                                                                        echo "checked";
                                                                                    } ?>>Angkutan Umum<br>
                            <input type="radio" name="transportasi" value="ojek" <?php if ($row->transportasi == 'ojek') {
                                                                                        echo "checked";
                                                                                    } ?>>Ojeg<br>
                            <input type="radio" name="transportasi" value="travel" <?php if ($row->transportasi == 'travel') {
                                                                                        echo "checked";
                                                                                    } ?>>Travel <br>
                            <input type="radio" name="transportasi" value="lainnya" <?php if ($row->transportasi == 'lainnya') {
                                                                                        echo "checked";
                                                                                    } ?>>Lainnya <br>
                            <input type="radio" name="transportasi" value="tidak" <?php if ($row->transportasi == 'tidak') {
                                                                                        echo "checked";
                                                                                    } ?>>tidak <br>
                        </div>
                        <div class="form-group">
                            <label>Apakah bapak/ibu menggunakan hp ? jika iya berapa jumlahnya</label>
                            <input type="textarea" name="menggunakan_hp" class="form-control" value="<?= $row->menggunakan_hp ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah uang yang terima dari hasil pembebasan lahan ?</label>
                            <input type="textarea" name="uang_lahan" class="form-control" value="<?= $row->uang_lahan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Digunakan untuk apa uang tersebut</label>
                            <input type="textarea" name="alasan_lahan" class="form-control" value="<?= $row->alasan_lahan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Apakah bapak/ibu berdagang? </label><br>
                            <input type="radio" name="usaha_dagang" value="iya" <?php if ($row->usaha_dagang == 'iya') {
                                                                                    echo "checked";
                                                                                } ?>>Iya<br>
                            <input type="radio" name="usaha_dagang" value="tidak" <?php if ($row->usaha_dagang == 'tidak') {
                                                                                        echo "checked";
                                                                                    } ?>>Tidak<br>
                        </div>
                        <div class="form-group">
                            <label>Jumlah omzet yang di dapatkan</label>
                            <input type="textarea" name="omzet_dagang" class="form-control" value="<?= $row->omzet_dagang ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Apakah bapak/ibu mendapatkan gaji ? </label><br>
                            <input type="radio" name="gaji_perbulan" value="iya" <?php if ($row->gaji_perbulan == 'iya') {
                                                                                        echo "checked";
                                                                                    } ?>>Iya<br>
                            <input type="radio" name="gaji_perbulan" value="tidak" <?php if ($row->gaji_perbulan == 'tidak') {
                                                                                        echo "checked";
                                                                                    } ?>>Tidak<br>
                        </div>
                        <div class="form-group">
                            <label>Jumlah gaji yang di dapatkan</label>
                            <input type="textarea" name="jumlah_gaji" class="form-control" value="<?= $row->jumlah_gaji ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Apakah bapak/ibu mendapatkan kiriman dari anak/kerabat? </label><br>
                            <input type="radio" name="kiriman_lain" value="iya" <?php if ($row->kiriman_lain == 'iya') {
                                                                                    echo "checked";
                                                                                } ?>>Iya<br>
                            <input type="radio" name="kiriman_lain" value="tidak" <?php if ($row->kiriman_lain == 'tidak') {
                                                                                        echo "checked";
                                                                                    } ?>>Tidak<br>
                        </div>
                        <div class="form-group">
                            <label>Jumlah kiriman lain yang di dapatkan</label>
                            <input type="textarea" name="jumlah_kiriman" class="form-control" value="<?= $row->jumlah_kiriman ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Apakah bapak/ibu mendapatkan dana pensiun? </label><br>
                            <input type="radio" name="dana_pensiun" value="iya" <?php if ($row->dana_pensiun == 'iya') {
                                                                                    echo "checked";
                                                                                } ?>>Iya<br>
                            <input type="radio" name="dana_pensiun" value="tidak" <?php if ($row->dana_pensiun == 'tidak') {
                                                                                        echo "checked";
                                                                                    } ?>>Tidak<br>
                        </div>
                        <div class="form-group">
                            <label>Jumlah dana pensiun yang didapatkan</label>
                            <input type="textarea" name="jumlah_dana_pensiun" class="form-control" value="<?= $row->jumlah_dana_pensiun ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Apakah ada dana lain selain dana yang sudah di sebutkan diatas ?? </label><br>
                            <input type="radio" name="sumber_lain" value="iya" <?php if ($row->sumber_lain == 'iya') {
                                                                                    echo "checked";
                                                                                } ?>>Iya<br>
                            <input type="radio" name="sumber_lain" value="tidak" <?php if ($row->sumber_lain == 'tidak') {
                                                                                        echo "checked";
                                                                                    } ?>>Tidak<br>
                        </div>
                        <div class="form-group">
                            <label>Jelaskan sumber dana yang di dapatkan serta jumlahnya</label>
                            <input type="textarea" name="jumlah_sumber" class="form-control" value="<?= $row->jumlah_sumber ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Total keseluruhan pendapatan rumah tangga per bulan</label>
                            <input type="textarea" name="total_keseluruhan" class="form-control" value="<?= $row->total_keseluruhan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Total pengeluaran setiap bulan nya</label>
                            <input type="textarea" name="pengeluaran_sebulan" class="form-control" value="<?= $row->pengeluaran_sebulan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Jika dibandingkan tahun sebelumnya, bagimana tingkat pendapat bapak/ibu saat ini ?</label><br>
                            <input type="radio" name="banding_pendapatan" value="meningkat" <?php if ($row->banding_pendapatan == 'meningkat') {
                                                                                                echo "checked";
                                                                                            } ?>>Meningkat<br>
                            <input type="radio" name="banding_pendapatan" value="sama" <?php if ($row->banding_pendapatan == 'sama') {
                                                                                            echo "checked";
                                                                                        } ?>>Sama saja<br>
                            <input type="radio" name="banding_pendapatan" value="menurun" <?php if ($row->banding_pendapatan == 'menurun') {
                                                                                                echo "checked";
                                                                                            } ?>>Menurun<br>
                        </div>
                        <div class="form-group">
                            <label>Jelaskan alasan nya?</label>
                            <input type="textarea" name="alasan_banding" class="form-control" value="<?= $row->alasan_banding ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Apakah pendapatan tersebut cukup untuk memenuhi keubuthan sehari-hari?</label><br>
                            <input type="radio" name="pendapatan_cukup" value="lebih" <?php if ($row->pendapatan_cukup == 'lebih') {
                                                                                            echo "checked";
                                                                                        } ?>>Lebih<br>
                            <input type="radio" name="pendapatan_cukup" value="cukup" <?php if ($row->pendapatan_cukup == 'cukup') {
                                                                                            echo "checked";
                                                                                        } ?>>Cukup<br>
                            <input type="radio" name="pendapatan_cukup" value="kurang" <?php if ($row->pendapatan_cukup == 'kurang') {
                                                                                            echo "checked";
                                                                                        } ?>>Kurang<br>
                        </div>
                        <div class="form-group">
                            <label>Jelaskan alasan nya?</label>
                            <input type="textarea" name="alasan_pendapat" class="form-control" value="<?= $row->alasan_pendapat ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kesulitan masalah ekonomi yang dihadapi</label>
                            <input type="textarea" name="masalah_ekonomi" class="form-control" value="<?= $row->masalah_ekonomi ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Dalam bentuk apa biasanya bapak/ibu mendapatkan bantuan</label><br>
                            <input type="radio" name="bentuk_bantuan" value="uang" <?php if ($row->bentuk_bantuan == 'uang') {
                                                                                        echo "checked";
                                                                                    } ?>>Uang<br>
                            <input type="radio" name="bentuk_bantuan" value="barang pokok" <?php if ($row->bentuk_bantuan == 'barang pokok') {
                                                                                                echo "checked";
                                                                                            } ?>>Kebutuhan barang pokok<br>
                            <input type="radio" name="bentuk_bantuan" value="barang produksi" <?php if ($row->bentuk_bantuan == 'barang produksi') {
                                                                                                    echo "checked";
                                                                                                } ?>>Kebutuhan barang produksi<br>
                            <input type="radio" name="bentuk_bantuan" value="lainnya" <?php if ($row->bentuk_bantuan == 'lainnya') {
                                                                                            echo "checked";
                                                                                        } ?>>Kebutuhan lainnya<br>

                        </div>
                        <div class="form-group">
                            <label>Apakah bapak/ibu memiliki rekening?</label><br>
                            <input type="radio" name="punya_rekening" value="iya" <?php if ($row->punya_rekening == 'iya') {
                                                                                        echo "checked";
                                                                                    } ?>>Iya<br>
                            <input type="radio" name="punya_rekening" value="tidak" <?php if ($row->punya_rekening == 'tidak') {
                                                                                        echo "checked";
                                                                                    } ?>>Tidak<br>
                        </div>
                        <div class="form-group">
                            <label>Jika memerlukan pinjaman karena mendesak/penting, dari mana ibu/bapak biasanya meminjam uang</label><br>
                            <input type="radio" name="pinjaman_mendesak" value="bank" <?php if ($row->pinjaman_mendesak == 'bank') {
                                                                                            echo "checked";
                                                                                        } ?>>Bank<br>
                            <input type="radio" name="pinjaman_mendesak" value="keluarga" <?php if ($row->pinjaman_mendesak == 'keluarga') {
                                                                                                echo "checked";
                                                                                            } ?>>Keluarga<br>
                            <input type="radio" name="pinjaman_mendesak" value="tetangga" <?php if ($row->pinjaman_mendesak == 'tetangga') {
                                                                                                echo "checked";
                                                                                            } ?>>Tetangga<br>
                            <input type="radio" name="pinjaman_mendesak" value="koperasi" <?php if ($row->pinjaman_mendesak == 'koperasi') {
                                                                                                echo "checked";
                                                                                            } ?>>Koperasi<br>
                            <input type="radio" name="pinjaman_mendesak" value="rentenir" <?php if ($row->pinjaman_mendesak == 'rentenir') {
                                                                                                echo "checked";
                                                                                            } ?>>Rentenir<br>
                            <input type="radio" name="pinjaman_mendesak" value="lainnya" <?php if ($row->pinjaman_mendesak == 'lainnya') {
                                                                                                echo "checked";
                                                                                            } ?>>lainnya<br>
                            <input type="radio" name="pinjaman_mendesak" value="tidak" <?php if ($row->pinjaman_mendesak == 'tidak') {
                                                                                            echo "checked";
                                                                                        } ?>>Tidak Pernah<br>

                        </div>
                        <div class="form-group">
                            <label>Alasan keperluan meminjam ?</label>
                            <input type="textarea" name="keperluan_meminjam" class="form-control" value="<?= $row->keperluan_meminjam ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Apakah di daerah ini dilakukan kerjasama/gotong royong untuk lingkungan?</label><br>
                            <input type="radio" name="kerjasama_lingkungan" value="ada" <?php if ($row->kerjasama_lingkungan == 'ada') {
                                                                                            echo "checked";
                                                                                        } ?>>Ada<br>
                            <input type="radio" name="kerjasama_lingkungan" value="tidak" <?php if ($row->kerjasama_lingkungan == 'tidak') {
                                                                                                echo "checked";
                                                                                            } ?>>Tidak ada<br>
                        </div>
                        <div class="form-group">
                            <label>Jika ada berapa kali diadakan</label><br>
                            <input type="radio" name="banyak_kerjasama" value="1 bulan" <?php if ($row->banyak_kerjasama == '1 bulan') {
                                                                                            echo "checked";
                                                                                        } ?>>1 Bulan Sekali<br>
                            <input type="radio" name="banyak_kerjasama" value="3 bulan" <?php if ($row->banyak_kerjasama == '3 bulan') {
                                                                                            echo "checked";
                                                                                        } ?>>3 Bulan Sekali<br>
                            <input type="radio" name="banyak_kerjasama" value="6 bulan" <?php if ($row->banyak_kerjasama == '6 bulan') {
                                                                                            echo "checked";
                                                                                        } ?>>6 Bulan Sekali<br>
                            <input type="radio" name="banyak_kerjasama" value="1 tahun" <?php if ($row->banyak_kerjasama == '1 tahun') {
                                                                                            echo "checked";
                                                                                        } ?>>1 Tahun Sekali<br>
                        </div>
                        <div class="form-group">
                            <label>Bagaimana partisipasi bapak/ibu dalam kegiatan gotong royong</label><br>
                            <input type="radio" name="partisipasi_kerjasama" value="sering" <?php if ($row->partisipasi_kerjasama == 'sering') {
                                                                                                echo "checked";
                                                                                            } ?>>Selalu Ikut<br>
                            <input type="radio" name="partisipasi_kerjasama" value="kadang" <?php if ($row->partisipasi_kerjasama == 'kadang') {
                                                                                                echo "checked";
                                                                                            } ?>>Kadang-kadang<br>
                            <input type="radio" name="partisipasi_kerjasama" value="absen" <?php if ($row->partisipasi_kerjasama == 'absen') {
                                                                                                echo "checked";
                                                                                            } ?>>Tidak pernah<br>
                        </div>
                        <div class="form-group">
                            <label>Kegiatan sosial kemasyarakatan yang aktif dilakukan</label>
                            <input type="textarea" name="kegiatan_aktif" class="form-control" value="<?= $row->kegiatan_aktif ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kegiatan sosial agama yang aktif dilakukan</label>
                            <input type="textarea" name="kegiatan_agama" class="form-control" value="<?= $row->kegiatan_agama ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Dari manakah sumber informasi yang di dapat mengenai pertanian, pelayanan kesehatan,lapangan kerja dan lain-lainya</label><br>
                            <input type="checkbox" name="sumber_pengetahuan" value="papan pengumuman" <?php if ($row->sumber_pengetahuan == 'papan pengumuman') {
                                                                                                            echo "checked";
                                                                                                        } ?>>Papan Pengumuman<br>
                            <input type="checkbox" name="sumber_pengetahuan" value="selebaran" <?php if ($row->sumber_pengetahuan == 'selebaran') {
                                                                                                    echo "checked";
                                                                                                } ?>>Selebaran<br>
                            <input type="checkbox" name="sumber_pengetahuan" value="radio" <?php if ($row->sumber_pengetahuan == 'radio') {
                                                                                                echo "checked";
                                                                                            } ?>>Radio<br>
                            <input type="checkbox" name="sumber_pengetahuan" value="televisi" <?php if ($row->sumber_pengetahuan == 'televisi') {
                                                                                                    echo "checked";
                                                                                                } ?>>Televisi<br>
                            <input type="checkbox" name="sumber_pengetahuan" value="media sosial" <?php if ($row->sumber_pengetahuan == 'media sosial') {
                                                                                                        echo "checked";
                                                                                                    } ?>>Media Sosial<br>
                            <input type="checkbox" name="sumber_pengetahuan" value="internet" <?php if ($row->sumber_pengetahuan == 'internet') {
                                                                                                    echo "checked";
                                                                                                } ?>>Internet<br>
                            <input type="checkbox" name="sumber_pengetahuan" value="tokoh masyarakat" <?php if ($row->sumber_pengetahuan == 'tokoh masyarakat') {
                                                                                                            echo "checked";
                                                                                                        } ?>>Tokoh Masyarakat<br>
                        </div>
                        <div class="form-group">
                            <label>Apakah bapak/ibu ikut terlibat organisasi?</label><br>
                            <input type="radio" name="terlibat_organisasi" value="ikut" <?php if ($row->terlibat_organisasi == 'ikut') {
                                                                                            echo "checked";
                                                                                        } ?>>Ikut<br>
                            <input type="radio" name="terlibat_organisasi" value="tidak" <?php if ($row->terlibat_organisasi == 'tidak') {
                                                                                                echo "checked";
                                                                                            } ?>>Tidak <br>
                        </div>
                        <div class="form-group">
                            <label>Jenis organisasi yang diikuti</label><br>
                            <input type="radio" name="nama_organisasi" value="kepemudaan" <?php if ($row->nama_organisasi == 'kepemudaan') {
                                                                                                echo "checked";
                                                                                            } ?>>Kepemudaan <br>
                            <input type="radio" name="nama_organisasi" value="keagamaan" <?php if ($row->nama_organisasi == 'keagamaan') {
                                                                                                echo "checked";
                                                                                            } ?>>Keagamaan<br>
                            <input type="radio" name="nama_organisasi" value="kesukuan" <?php if ($row->nama_organisasi == 'kesukuan') {
                                                                                            echo "checked";
                                                                                        } ?>>Kesukuan<br>
                            <input type="radio" name="nama_organisasi" value="profesi" <?php if ($row->nama_organisasi == 'profesi') {
                                                                                            echo "checked";
                                                                                        } ?>>Profesi<br>
                            <input type="radio" name="nama_organisasi" value="hobi" <?php if ($row->nama_organisasi == 'hobi') {
                                                                                        echo "checked";
                                                                                    } ?>>Hobi<br>
                            <input type="radio" name="nama_organisasi" value="pkk" <?php if ($row->nama_organisasi == 'pkk') {
                                                                                        echo "checked";
                                                                                    } ?>>PKK<br>
                            <input type="radio" name="nama_organisasi" value="lainnya" <?php if ($row->nama_organisasi == 'lainnya') {
                                                                                            echo "checked";
                                                                                        } ?>>Lainnya<br>
                            <input type="radio" name="nama_organisasi" value="tidak" <?php if ($row->nama_organisasi == 'tidak') {
                                                                                            echo "checked";
                                                                                        } ?>>Tidak Terlibat<br>


                        </div>
                        <div class="form-group">
                            <label>Posisi anda di dalam organisasi</label><br>
                            <input type="radio" name="posisi_organisasi" value="ketua" <?php if ($row->posisi_organisasi == 'ketua') {
                                                                                            echo "checked";
                                                                                        } ?>>Ketua <br>
                            <input type="radio" name="posisi_organisasi" value="pengurus" <?php if ($row->posisi_organisasi == 'pengurus') {
                                                                                                echo "checked";
                                                                                            } ?>>Pengurus<br>
                            <input type="radio" name="posisi_organisasi" value="anggota" <?php if ($row->posisi_organisasi == 'anggota') {
                                                                                                echo "checked";
                                                                                            } ?>>Anggota<br>
                            <input type="radio" name="posisi_organisasi" value="tidak" <?php if ($row->posisi_organisasi == 'tidak') {
                                                                                            echo "checked";
                                                                                        } ?>>Tidak Terlibat<br>

                        </div>
                        <div class="form-group">
                            <label>Partisipasi anda di dalam organisasi</label><br>
                            <input type="radio" name="tingkat_partisipasi" value="aktif" <?php if ($row->tingkat_partisipasi == 'aktif') {
                                                                                                echo "checked";
                                                                                            } ?>>Aktif <br>
                            <input type="radio" name="tingkat_partisipasi" value="kurang" <?php if ($row->tingkat_partisipasi == 'kurang') {
                                                                                                echo "checked";
                                                                                            } ?>>Kurang aktif<br>
                            <input type="radio" name="tingkat_partisipasi" value="tidak" <?php if ($row->tingkat_partisipasi == 'tidak') {
                                                                                                echo "checked";
                                                                                            } ?>>Tidak aktif<br>
                            <input type="radio" name="tingkat_partisipasi" value="tidak" <?php if ($row->tingkat_partisipasi == 'tidak') {
                                                                                                echo "checked";
                                                                                            } ?>>Tidak Terlibat<br>

                        </div>
                        <div class="form-group">
                            <label>Manfaat dari organisasi yang dilakukan</label>
                            <input type="textarea" name="manfaat_organisasi" class="form-control" value="<?= $row->manfaat_organisasi ?>">
                        </div>
                        <div class="form-group">
                            <label>Bagaimana kondisi keamanan lingkungan daerah ini</label><br>
                            <input type="radio" name="keamanan_lingkungan" value="aman" <?php if ($row->keamanan_lingkungan == 'aman') {
                                                                                            echo "checked";
                                                                                        } ?>>Aman <br>
                            <input type="radio" name="keamanan_lingkungan" value="kurang aman" <?php if ($row->keamanan_lingkungan == 'kurang aman') {
                                                                                                    echo "checked";
                                                                                                } ?>>Tidak Aman <br>
                            <input type="radio" name="keamanan_lingkungan" value="tidak aman" <?php if ($row->keamanan_lingkungan == 'tidak aman') {
                                                                                                    echo "checked";
                                                                                                } ?>>Kurang Aman <br>
                        </div>
                        <div class="form-group">
                            <label>Alasan Keamanan</label>
                            <input type="textarea" name="alasan_keamanan" class="form-control" value="<?= $row->alasan_keamanan ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Apakah pernah terjadi konflik di daerah ini ?</label><br>
                            <input type="radio" name="pernah_konflik" value="sering" <?php if ($row->pernah_konflik == 'sering') {
                                                                                            echo "checked";
                                                                                        } ?>>Ya, Sering <br>
                            <input type="radio" name="pernah_konflik" value="jarang" <?php if ($row->pernah_konflik == 'jarang') {
                                                                                            echo "checked";
                                                                                        } ?>>Jarang Terjadi <br>
                            <input type="radio" name="pernah_konflik" value="tidak" <?php if ($row->pernah_konflik == 'tidak') {
                                                                                        echo "checked";
                                                                                    } ?>>Tidak Pernah <br>
                        </div>
                        <div class="form-group">
                            <label>Apa alasan konflik terjadi?</label><br>
                            <input type="radio" name="alasan_konflik" value="perebutan tanah" <?php if ($row->alasan_konflik == 'perebutan tanah') {
                                                                                                    echo "checked";
                                                                                                } ?>>Perebutan Tanah <br>
                            <input type="radio" name="alasan_konflik" value="perebutan materi" <?php if ($row->alasan_konflik == 'perebutan materi') {
                                                                                                    echo "checked";
                                                                                                } ?>>Perebutan Materi <br>
                            <input type="radio" name="alasan_konflik" value="sara" <?php if ($row->alasan_konflik == 'sara') {
                                                                                        echo "checked";
                                                                                    } ?>>SARA<br>
                            <input type="radio" name="alasan_konflik" value="masalah politik" <?php if ($row->alasan_konflik == 'masalah politik') {
                                                                                                    echo "checked";
                                                                                                } ?>>Masalah Politik <br>
                            <input type="radio" name="alasan_konflik" value="kenakalan remaja" <?php if ($row->alasan_konflik == 'kenakalan remaja') {
                                                                                                    echo "checked";
                                                                                                } ?>>Kenakalan Remaja <br>
                            <input type="radio" name="alasan_konflik" value="lainnya" <?php if ($row->alasan_konflik == 'lainnya') {
                                                                                            echo "checked";
                                                                                        } ?>>Lainnya <br>
                            <input type="radio" name="alasan_konflik" value="tidak pernah" <?php if ($row->alasan_konflik == 'tidak pernah') {
                                                                                                echo "checked";
                                                                                            } ?>>Tidak Pernah <br>

                        </div>
                        <div class="form-group">
                            <label>Siapa saja pihak yang terlibat konflik?</label><br>
                            <input type="radio" name="terlibat_konflik" value="antar kelompok masyarakat" <?php if ($row->terlibat_konflik == 'antar kelompok masyarakat') {
                                                                                                                echo "checked";
                                                                                                            } ?>>antar kelompok masyarakat <br>
                            <input type="radio" name="terlibat_konflik" value="antar tetangga" <?php if ($row->terlibat_konflik == 'antar tetangga') {
                                                                                                    echo "checked";
                                                                                                } ?>>antar tetangga <br>
                            <input type="radio" name="terlibat_konflik" value="antar kelompok remaja" <?php if ($row->terlibat_konflik == 'antar kelompok remaja') {
                                                                                                            echo "checked";
                                                                                                        } ?>>antar kelompok remaja<br>
                            <input type="radio" name="terlibat_konflik" value="antar keluarga" <?php if ($row->terlibat_konflik == 'antar keluarga') {
                                                                                                    echo "checked";
                                                                                                } ?>>antar keluarga<br>
                            <input type="radio" name="terlibat_konflik" value="antar kampung" <?php if ($row->terlibat_konflik == 'antar kampung') {
                                                                                                    echo "checked";
                                                                                                } ?>> antar kampung<br>
                            <input type="radio" name="terlibat_konflik" value="masyarakat vs perusahaan" <?php if ($row->terlibat_konflik == 'masyarakat vs perusahaan') {
                                                                                                                echo "checked";
                                                                                                            } ?>> masyarakat vs perusahaan <br>
                            <input type="radio" name="terlibat_konflik" value="lainnya" <?php if ($row->terlibat_konflik == 'lainnya') {
                                                                                            echo "checked";
                                                                                        } ?>>Lainnya <br>

                        </div>
                        <div class="form-group">
                            <label>Pihak mana yang menyelesaikan konflik?</label><br>
                            <input type="radio" name="pihak_konflik" value="aparat pemerintah" <?php if ($row->pihak_konflik == 'aparat pemerintah') {
                                                                                                    echo "checked";
                                                                                                } ?>> aparat pemerintah <br>
                            <input type="radio" name="pihak_konflik" value="tokoh masyarakat" <?php if ($row->pihak_konflik == 'tokoh masyarakat') {
                                                                                                    echo "checked";
                                                                                                } ?>> tokoh masyarakat <br>
                            <input type="radio" name="pihak_konflik" value="aparat keamanan" <?php if ($row->pihak_konflik == 'aparat keamanan') {
                                                                                                    echo "checked";
                                                                                                } ?>> aparat keamanan<br>
                        </div>
                        <div class="form-group">
                            <label>Mekanisme penyelesaian konflik</label><br>
                            <input type="radio" name="mekanisme_konflik" value="secara kekeluargaan" <?php if ($row->mekanisme_konflik == 'secara kekeluargaan') {
                                                                                                            echo "checked";
                                                                                                        } ?>> secara kekeluargaan <br>
                            <input type="radio" name="mekanisme_konflik" value="musyawarah warga" <?php if ($row->mekanisme_konflik == ' musyawarah warga') {
                                                                                                        echo "checked";
                                                                                                    } ?>> musyawarah warga <br>
                            <input type="radio" name="mekanisme_konflik" value="jalur hukum" <?php if ($row->mekanisme_konflik == 'jalur hukum') {
                                                                                                    echo "checked";
                                                                                                } ?>>jalur hukum<br>
                            <input type="radio" name="mekanisme_konflik" value="secara adat" <?php if ($row->mekanisme_konflik == 'secara adat') {
                                                                                                    echo "checked";
                                                                                                } ?>>secara adat<br>
                            <input type="radio" name="mekanisme_konflik" value="lainnya" <?php if ($row->mekanisme_konflik == 'lainnya') {
                                                                                                echo "checked";
                                                                                            } ?>>Lainnya<br>

                        </div>
                        <div class="form-group">
                            <label>Bencana alam yang terjadi</label><br>
                            <input type="radio" name="bencana_alam" value="banjir" <?php if ($row->bencana_alam == 'banjir') {
                                                                                        echo "checked";
                                                                                    } ?>> banjir <br>
                            <input type="radio" name="bencana_alam" value="gempa" <?php if ($row->bencana_alam == 'gempa') {
                                                                                        echo "checked";
                                                                                    } ?>>gempa <br>
                            <input type="radio" name="bencana_alam" value="longsor" <?php if ($row->bencana_alam == ' longsor') {
                                                                                        echo "checked";
                                                                                    } ?>> longsor<br>
                            <input type="radio" name="bencana_alam" value="kebakaran" <?php if ($row->bencana_alam == 'kebakaran') {
                                                                                            echo "checked";
                                                                                        } ?>>kebakaran<br>
                            <input type="radio" name="bencana_alam" value="lainnya" <?php if ($row->bencana_alam == 'lainnya') {
                                                                                        echo "checked";
                                                                                    } ?>>lainnya<br>
                            <input type="radio" name="bencana_alam" value="tidak" <?php if ($row->bencana_alam == 'tidak') {
                                                                                        echo "checked";
                                                                                    } ?>>tidak ada<br>
                        </div>
                        <div class="form-group">
                            <label>Bagaimana pendapat bapak/ibu tentang perusahaan SERD</label>
                            <input type="textarea" name="pendapat_serd" class="form-control" value="<?= $row->pendapat_serd ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Program atau bantuan apa saja yang pernah di berikan kepada PAP</label>
                            <input type="textarea" name="manfaat_serd" class="form-control" value="<?= $row->manfaat_serd ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Saran dan harapan bapak/ibu kepada perusahaan serd</label>
                            <input type="textarea" name="saran_serd" class="form-control" value="<?= $row->saran_serd ?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
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