<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Form_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('form');
        if ($id != null) {
            $this->db->where('pap_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('pap_id', $id);
        $this->db->delete('form');
    }


    public function add($post)
    {
        $params = [
            'nama_enumerator' => $post['name_enum'],
            'nomor_enumerator' => $post['nomor_enum'],
            'nama_kabupaten' => $post['na_kab'],
            'kecamatan' => $post['kecamatan'],
            'desa' => $post['desa'],
            'kampung' => $post['kampung'],
            'nama_kk' => $post['name_kk'],
            'usia_kk' => $post['usia_kk'],
            'nama_responden' => $post['name_responden'],
            'usia_responden' => $post['usia_responden'],
            'jenis_kelamin' => implode(',', $post['jk']),
            'nomor_res' => $post['nomor_res'],
            'agama_res' => $post['agama_res'],
            'lama_tinggal' => $post['lama_tinggal'],
            'suku_asal' => $post['suku_asal'],
            'jumlah_anggota' => $post['jumlah_anggota'],
            'pendidikan_terakhir_kk' => $post['pendidikan_terakhir_kk'],
            'pendidikan_terakhir_responden' => $post['pendidikan_terakhir_responden'],
            'pencarian_utama' => implode(',', $post['pencarian_utama']),
            'pencarian_kedua' => implode(',', $post['pencarian_kedua']),
            'keterampilan_kk' => implode(',', $post['keterampilan_kk']),
            'asal_keterampilan_kk' => implode(',', $post['asal_keterampilan_kk']),
            'keterampilan_responden' => implode(',', $post['keterampilan_responden']),
            'asal_keterampilan_responden' => implode(',', $post['asal_keterampilan_responden']),
            'kegiatan_kk' => $post['kegiatan_kk'],
            'makan_sehari' => $post['makan_sehari'],
            'tempat_berobat' => $post['tempat_berobat'],
            'jaminan_kesehatan' => $post['jaminan_kesehatan'],
            'penilaian_puskesmas' => $post['penilaian_puskesmas'],
            'kendala_pendidikan' => $post['kendala_pendidikan'],
            'kondisi_pendidikan' => $post['kondisi_pendidikan'],
            'biaya_pendidikan' => $post['biaya_pendidikan'],
            'total_lahan' => $post['total_lahan'],
            'luas_proyek_lahan' => $post['luas_proyek_lahan'],
            'total_proyek_lahan' => $post['total_proyek_lahan'],
            'jenis_tanaman_lahan' => $post['jenis_tanaman_lahan'],
            'status_lahan' => $post['status_lahan'],
            'hasil_pertanian' => $post['hasil_pertanian'],
            'jual_pertanian' => $post['jual_pertanian'],
            'hasil_peternakan' => $post['hasil_peternakan'],
            'jual_peternakan' => $post['jual_peternakan'],
            'hasil_budidaya' => $post['hasil_budidaya'],
            'jual_budidaya' => $post['jual_budidaya'],
            'hasil_ikan' => $post['hasil_ikan'],
            'jual_ikan' => $post['jual_ikan'],
            'hasil_hutan' => $post['hasil_hutan'],
            'jual_hutan' => $post['jual_hutan'],
            'hasil_tambang' => $post['hasil_tambang'],
            'izin_tambang' => $post['izin_tambang'],
            'jual_tambang' => $post['jual_tambang'],
            'status_rumah' => $post['status_rumah'],
            'luas_bangunan' => $post['luas_bangunan'],
            'luas_lahan' => $post['luas_lahan'],
            'tipe_bangunan' => $post ['tipe_bangunan'],
            'material_bangunan' => $post['material_bangunan'],
            'kondisi_bangunan' => $post['kondisi_bangunan'],
            'rumah_dibangun' => $post['rumah_dibangun'],
            'mck_dibangun' => $post['mck_dibangun'],
            'sumber_dana' => $post['sumber_dana'],
            'jumlah_orang' => $post['jumlah_orang'],
            'sirkulasi_rumah' => $post['sirkulasi_rumah'],
            'pencahayaan_rumah' => $post['pencahayaan_rumah'],
            'barang_dimiliki' => $post['barang_dimiliki'],
            'bangunan_usaha' => $post['bangunan_usaha'],
            'sumber_penerangan' => $post['sumber_penerangan'],
            'sumber_air' => $post['sumber_air'],
            'air_minum' => $post['air_minum'],
            'sarana_mandi' => $post['sarana_mandi'],
            'pengelolaan_sampah' => $post['pengelolaan_sampah'],
            'pengelolaan_cair' => $post['pengelolaan_cair'],
            'jumlah_sepeda' => $post['jumlah_sepeda'],
            'jumlah_motor' => $post['jumlah_motor'],
            'jumlah_mobil' => $post['jumlah_mobil'],
            'jumlah_truck' => $post['jumlah_truck'],
            'transportasi' => $post['transportasi'],
            'menggunakan_hp' => $post['menggunakan_hp'],
            'uang_lahan' => $post['uang_lahan'],
            'alasan_lahan' => $post['alasan_lahan'],
            'usaha_dagang' => $post['usaha_dagang'],
            'omzet_dagang' => $post['omzet_dagang'],
            'gaji_perbulan' => $post['gaji_perbulan'],
            'jumlah_gaji' => $post['jumlah_gaji'],
            'kiriman_lain' => $post['kiriman_lain'],
            'jumlah_kiriman' => $post['jumlah_kiriman'],
            'dana_pensiun' => $post['dana_pensiun'],
            'jumlah_dana_pensiun' => $post['jumlah_dana_pensiun'],
            'sumber_lain' => $post['sumber_lain'],
            'jumlah_sumber' => $post['jumlah_sumber'],
            'total_keseluruhan' => $post['total_keseluruhan'],
            'pengeluaran_sebulan' => $post['pengeluaran_sebulan'],
            'banding_pendapatan' => $post['banding_pendapatan'],
            'alasan_banding' => $post['alasan_banding'],
            'pendapatan_cukup' => $post['pendapatan_cukup'],
            'alasan_pendapat' => $post['alasan_pendapat'],
            'masalah_ekonomi' => $post['masalah_ekonomi'],
            'bentuk_bantuan' => $post['bentuk_bantuan'],
            'punya_rekening' => $post['punya_rekening'],
            'pinjaman_mendesak' => $post['pinjaman_mendesak'],
            'keperluan_meminjam' => $post['keperluan_meminjam'],
            'kerjasama_lingkungan' => $post['kerjasama_lingkungan'],
            'banyak_kerjasama' => $post['banyak_kerjasama'],
            'partisipasi_kerjasama' => $post['partisipasi_kerjasama'],
            'kegiatan_aktif' => $post['kegiatan_aktif'],
            'kegiatan_agama' => $post['kegiatan_agama'],
            'sumber_pengetahuan' => $post['sumber_pengetahuan'],
            'terlibat_organisasi' => $post['terlibat_organisasi'],
            'nama_organisasi' => $post['nama_organisasi'],
            'posisi_organisasi' => $post['posisi_organisasi'],
            'tingkat_partisipasi' => $post['tingkat_partisipasi'],
            'manfaat_organisasi' => $post['manfaat_organisasi'],
            'keamanan_lingkungan' => $post['keamanan_lingkungan'],
            'alasan_keamanan' => $post['alasan_keamanan'],
            'pernah_konflik' => $post['pernah_konflik'],
            'alasan_konflik' => $post['alasan_konflik'],
            'terlibat_konflik' => $post['terlibat_konflik'],
            'pihak_konflik' => $post['pihak_konflik'],
            'mekanisme_konflik' => $post['mekanisme_konflik'],
            'bencana_alam' => $post['bencana_alam'],
            'pendapat_serd' => $post['pendapat_serd'],
            'manfaat_serd' => $post['manfaat_serd'],
            'saran_serd' => $post['saran_serd']
        ];
        $this->db->insert('form', $params);
    }
    public function edit($post)
    {
        $params = [
            'nama_enumerator' => $post['name_enum'],
            'nomor_enumerator' => $post['nomor_enum'],
            'nama_kabupaten' => $post['na_kab'],
            'kecamatan' => $post['kecamatan'],
            'desa' => $post['desa'],
            'kampung' => $post['kampung'],
            'nama_kk' => $post['name_kk'],
            'usia_kk' => $post['usia_kk'],
            'nama_responden' => $post['name_responden'],
            'usia_responden' => $post['usia_responden'],
            'jenis_kelamin' => implode(',', $post['jk']),
            'nomor_res' => $post['nomor_res'],
            'agama_res' => $post['agama_res'],
            'lama_tinggal' => $post['lama_tinggal'],
            'suku_asal' => $post['suku_asal'],
            'jumlah_anggota' => $post['jumlah_anggota'],
            'pendidikan_terakhir_kk' => $post['pendidikan_terakhir_kk'],
            'pendidikan_terakhir_responden' => $post['pendidikan_terakhir_responden'],
            'pencarian_utama' => implode(',', $post['pencarian_utama']),
            'pencarian_kedua' => implode(',', $post['pencarian_kedua']),
            'keterampilan_kk' => implode(',', $post['keterampilan_kk']),
            'asal_keterampilan_kk' => implode(',', $post['asal_keterampilan_kk']),
            'keterampilan_responden' => implode(',', $post['keterampilan_responden']),
            'asal_keterampilan_responden' => implode(',', $post['asal_keterampilan_responden']),
            'kegiatan_kk' => $post['kegiatan_kk'],
            'makan_sehari' => $post['makan_sehari'],
            'tempat_berobat' => $post['tempat_berobat'],
            'jaminan_kesehatan' => $post['jaminan_kesehatan'],
            'penilaian_puskesmas' => $post['penilaian_puskesmas'],
            'kendala_pendidikan' => $post['kendala_pendidikan'],
            'kondisi_pendidikan' => $post['kondisi_pendidikan'],
            'biaya_pendidikan' => $post['biaya_pendidikan'],
            'total_lahan' => $post['total_lahan'],
            'luas_proyek_lahan' => $post['luas_proyek_lahan'],
            'total_proyek_lahan' => $post['total_proyek_lahan'],
            'jenis_tanaman_lahan' => $post['jenis_tanaman_lahan'],
            'status_lahan' => $post['status_lahan'],
            'hasil_pertanian' => $post['hasil_pertanian'],
            'jual_pertanian' => $post['jual_pertanian'],
            'hasil_peternakan' => $post['hasil_peternakan'],
            'jual_peternakan' => $post['jual_peternakan'],
            'hasil_budidaya' => $post['hasil_budidaya'],
            'jual_budidaya' => $post['jual_budidaya'],
            'hasil_ikan' => $post['hasil_ikan'],
            'jual_ikan' => $post['jual_ikan'],
            'hasil_hutan' => $post['hasil_hutan'],
            'jual_hutan' => $post['jual_hutan'],
            'hasil_tambang' => $post['hasil_tambang'],
            'izin_tambang' => $post['izin_tambang'],
            'jual_tambang' => $post['jual_tambang'],
            'status_rumah' => $post['status_rumah'],
            'luas_bangunan' => $post['luas_bangunan'],
            'luas_lahan' => $post['luas_lahan'],
            'tipe_bangunan' => $post ['tipe_bangunan'],
            'material_bangunan' => $post['material_bangunan'],
            'kondisi_bangunan' => $post['kondisi_bangunan'],
            'rumah_dibangun' => $post['rumah_dibangun'],
            'mck_dibangun' => $post['mck_dibangun'],
            'sumber_dana' => $post['sumber_dana'],
            'jumlah_orang' => $post['jumlah_orang'],
            'sirkulasi_rumah' => $post['sirkulasi_rumah'],
            'pencahayaan_rumah' => $post['pencahayaan_rumah'],
            'barang_dimiliki' => $post['barang_dimiliki'],
            'bangunan_usaha' => $post['bangunan_usaha'],
            'sumber_penerangan' => $post['sumber_penerangan'],
            'sumber_air' => $post['sumber_air'],
            'air_minum' => $post['air_minum'],
            'sarana_mandi' => $post['sarana_mandi'],
            'pengelolaan_sampah' => $post['pengelolaan_sampah'],
            'pengelolaan_cair' => $post['pengelolaan_cair'],
            'jumlah_sepeda' => $post['jumlah_sepeda'],
            'jumlah_motor' => $post['jumlah_motor'],
            'jumlah_mobil' => $post['jumlah_mobil'],
            'jumlah_truck' => $post['jumlah_truck'],
            'transportasi' => $post['transportasi'],
            'menggunakan_hp' => $post['menggunakan_hp'],
            'uang_lahan' => $post['uang_lahan'],
            'alasan_lahan' => $post['alasan_lahan'],
            'usaha_dagang' => $post['usaha_dagang'],
            'omzet_dagang' => $post['omzet_dagang'],
            'gaji_perbulan' => $post['gaji_perbulan'],
            'jumlah_gaji' => $post['jumlah_gaji'],
            'kiriman_lain' => $post['kiriman_lain'],
            'jumlah_kiriman' => $post['jumlah_kiriman'],
            'dana_pensiun' => $post['dana_pensiun'],
            'jumlah_dana_pensiun' => $post['jumlah_dana_pensiun'],
            'sumber_lain' => $post['sumber_lain'],
            'jumlah_sumber' => $post['jumlah_sumber'],
            'total_keseluruhan' => $post['total_keseluruhan'],
            'pengeluaran_sebulan' => $post['pengeluaran_sebulan'],
            'banding_pendapatan' => $post['banding_pendapatan'],
            'alasan_banding' => $post['alasan_banding'],
            'pendapatan_cukup' => $post['pendapatan_cukup'],
            'alasan_pendapat' => $post['alasan_pendapat'],
            'masalah_ekonomi' => $post['masalah_ekonomi'],
            'bentuk_bantuan' => $post['bentuk_bantuan'],
            'punya_rekening' => $post['punya_rekening'],
            'pinjaman_mendesak' => $post['pinjaman_mendesak'],
            'keperluan_meminjam' => $post['keperluan_meminjam'],
            'kerjasama_lingkungan' => $post['kerjasama_lingkungan'],
            'banyak_kerjasama' => $post['banyak_kerjasama'],
            'partisipasi_kerjasama' => $post['partisipasi_kerjasama'],
            'kegiatan_aktif' => $post['kegiatan_aktif'],
            'kegiatan_agama' => $post['kegiatan_agama'],
            'sumber_pengetahuan' => $post['sumber_pengetahuan'],
            'terlibat_organisasi' => $post['terlibat_organisasi'],
            'nama_organisasi' => $post['nama_organisasi'],
            'posisi_organisasi' => $post['posisi_organisasi'],
            'tingkat_partisipasi' => $post['tingkat_partisipasi'],
            'manfaat_organisasi' => $post['manfaat_organisasi'],
            'keamanan_lingkungan' => $post['keamanan_lingkungan'],
            'alasan_keamanan' => $post['alasan_keamanan'],
            'pernah_konflik' => $post['pernah_konflik'],
            'alasan_konflik' => $post['alasan_konflik'],
            'terlibat_konflik' => $post['terlibat_konflik'],
            'pihak_konflik' => $post['pihak_konflik'],
            'mekanisme_konflik' => $post['mekanisme_konflik'],
            'bencana_alam' => $post['bencana_alam'],
            'pendapat_serd' => $post['pendapat_serd'],
            'manfaat_serd' => $post['manfaat_serd'],
            'saran_serd' => $post['saran_serd']
        ];
        $this->db->where('pap_id', $post['id']);
        $this->db->update('form', $params);
    }

    public function get_sum_count_if()
    {
        $sql = "SELECT count(if(jenis_kelamin='pria',jenis_kelamin, NULL)) as jml_pria,
                        count(if(jenis_kelamin='wanita',jenis_kelamin, NULL)) as jml_wanita,
                        count(if(suku_asal='minangkabau',suku_asal, NULL)) as suku_minangkabau,
                        count(if(suku_asal='jawa',suku_asal, NULL)) as suku_jawa,
                        count(if(suku_asal='sunda',suku_asal, NULL)) as suku_sunda,
                        count(if(suku_asal='batak',suku_asal, NULL)) as suku_batak,
                        count(if(suku_asal='melayu',suku_asal, NULL)) as suku_melayu,
                        count(if(suku_asal='lainnya',suku_asal, NULL)) as suku_lainnya,

                        count(if(agama_res='islam',agama_res, NULL)) as agama_islam,
                        count(if(agama_res='protestan',agama_res, NULL)) as agama_protestan,
                        count(if(agama_res='katolik',agama_res, NULL)) as agama_katolik,
                        count(if(agama_res='hindu,',agama_res, NULL)) as agama_hindu,
                        count(if(agama_res='budha',agama_res, NULL)) as agama_budha,
                        count(if(agama_res='konghucu,',agama_res, NULL)) as agama_konghucu,
                        count(if(agama_res='lainnya',agama_res, NULL)) as agama_lainnya,

                        count(if(lama_tinggal='dari lahir',lama_tinggal, NULL)) as lama_lahir,
                        count(if(lama_tinggal='>1th',lama_tinggal, NULL)) as lama_1th,
                        count(if(lama_tinggal='>1-5th',lama_tinggal, NULL)) as lama_5th,
                        count(if(lama_tinggal='5-10th',lama_tinggal, NULL)) as lama_10th,
                        count(if(lama_tinggal='>10th',lama_tinggal, NULL)) as lama_10thh,

                        count(if(usia_responden='<25th',usia_responden, NULL)) as usia_25th,
                        count(if(usia_responden='25-35th',usia_responden, NULL)) as usia_25thh,
                        count(if(usia_responden='36-45th',usia_responden, NULL)) as usia_36th,
                        count(if(usia_responden='46-55th',usia_responden, NULL)) as usia_46th,
                        count(if(usia_responden='56-60th',usia_responden, NULL)) as usia_56th,
                        count(if(usia_responden='61-65th',usia_responden, NULL)) as usia_61th,
                        count(if(usia_responden='>65th',usia_responden, NULL)) as usia_65th,

                        count(if(pendidikan_terakhir_responden='tidak sekolah',pendidikan_terakhir_responden, NULL)) as pendidikan_ts,
                        count(if(pendidikan_terakhir_responden='tidak tamat sd',pendidikan_terakhir_responden, NULL)) as pendidikan_tts,
                        count(if(pendidikan_terakhir_responden='tamat sd',pendidikan_terakhir_responden, NULL)) as pendidikan_tsd,
                        count(if(pendidikan_terakhir_responden='tamat sltp',pendidikan_terakhir_responden, NULL)) as pendidikan_tsltp,
                        count(if(pendidikan_terakhir_responden='tamat slta',pendidikan_terakhir_responden, NULL)) as pendidikan_tslta,
                        count(if(pendidikan_terakhir_responden='tamat akademi d3',pendidikan_terakhir_responden, NULL)) as pendidikan_tad3,
                        count(if(pendidikan_terakhir_responden='sarjana',pendidikan_terakhir_responden, NULL)) as pendidikan_tsarjana,
                        count(if(pendidikan_terakhir_responden='pascasarjana',pendidikan_terakhir_responden, NULL)) as pendidikan_tpasca,
                        count(if(pendidikan_terakhir_responden='lainnya',pendidikan_terakhir_responden, NULL)) as pendidikan_lainnya,

                        count(if(keterampilan_responden='bertani',keterampilan_responden, NULL)) as keterampilan_bertani,
                        count(if(keterampilan_responden='berternak',keterampilan_responden, NULL)) as keterampilan_berternak,
                        count(if(keterampilan_responden='montir',keterampilan_responden, NULL)) as keterampilan_montir,
                        count(if(keterampilan_responden='pertukangan',keterampilan_responden, NULL)) as keterampilan_pertukangan,
                        count(if(keterampilan_responden='listrik',keterampilan_responden, NULL)) as keterampilan_listrik,
                        count(if(keterampilan_responden='memancing',keterampilan_responden, NULL)) as keterampilan_memancing,
                        count(if(keterampilan_responden='berdagang',keterampilan_responden, NULL)) as keterampilan_berdagang,
                        count(if(keterampilan_responden='supir',keterampilan_responden, NULL)) as keterampilan_supir,
                        count(if(keterampilan_responden='penjahit',keterampilan_responden, NULL)) as keterampilan_penjahit,
                        count(if(keterampilan_responden='memasak',keterampilan_responden, NULL)) as keterampilan_memasak,
                        count(if(keterampilan_responden='lainnya',keterampilan_responden, NULL)) as keterampilan_lainnya,
                        count(if(keterampilan_responden='tidak ada',keterampilan_responden, NULL)) as keterampilan_tidak,

                        count(if(asal_keterampilan_responden='otodidak',asal_keterampilan_responden,NULL)) as asal_otodidak,
                        count(if(asal_keterampilan_responden='kursus',asal_keterampilan_responden,NULL)) as asal_kursus,
                        count(if(asal_keterampilan_responden='program pemerintah',asal_keterampilan_responden,NULL)) as asal_program,
                        count(if(asal_keterampilan_responden='lsm',asal_keterampilan_responden,NULL)) as asal_lsm,
                        count(if(asal_keterampilan_responden='turun menurun',asal_keterampilan_responden,NULL)) as asal_turun,
                        count(if(asal_keterampilan_responden='pelatihan perusahaan',asal_keterampilan_responden,NULL)) as asal_pelatihan,

                        count(if(status_lahan='pribadi',status_lahan, NULL)) as status_pribadi,
                        count(if(status_lahan='orang tua',status_lahan, NULL)) as status_orang,
                        count(if(status_lahan='bersama',status_lahan, NULL)) as status_bersama,
                        count(if(status_lahan='lainnya',status_lahan, NULL)) as status_lainnya,

                        count(if(status_rumah='milik sendiri',status_rumah, NULL)) as status_sendiri,
                        count(if(status_rumah='milik orang tua',status_rumah, NULL)) as status_orang,
                        count(if(status_rumah='mengontrak',status_rumah, NULL)) as status_mengontrak,
                        count(if(status_rumah='menumpang',status_rumah, NULL)) as status_menumpang,

                        count(if(sumber_dana='pribadi',sumber_dana, NULL)) as sumber_pribadi,
                        count(if(sumber_dana='bantuan kerabat',sumber_dana, NULL)) as sumber_kerabat,
                        count(if(sumber_dana='pinjaman',sumber_dana, NULL)) as sumber_pinjaman,
                        count(if(sumber_dana='bantuan pemerintah',sumber_dana, NULL)) as sumber_pemerintah,
                        count(if(sumber_dana='bantuan lainnya',sumber_dana, NULL)) as sumber_lainnya,

                        count(if(penilaian_puskesmas='baik',penilaian_puskesmas, NULL)) as penilaian_baik,
                        count(if(penilaian_puskesmas='sedang',penilaian_puskesmas, NULL)) as penilaian_sedang,
                        count(if(penilaian_puskesmas='buruk',penilaian_puskesmas, NULL)) as penilaian_buruk,

                        count(if(kondisi_pendidikan='baik',kondisi_pendidikan, NULL)) as kondisi_baik,
                        count(if(kondisi_pendidikan='sedang',kondisi_pendidikan, NULL)) as kondisi_sedang,
                        count(if(kondisi_pendidikan='buruk',kondisi_pendidikan, NULL)) as kondisi_buruk,

                        count(if(tipe_bangunan='permanen',tipe_bangunan, NULL)) as tipe_permanen,
                        count(if(tipe_bangunan='semi permanen',tipe_bangunan, NULL)) as tipe_semi,
                        count(if(tipe_bangunan='tidak permanen',tipe_bangunan, NULL)) as tipe_tidak,

                        count(if(kondisi_bangunan='terawat',kondisi_bangunan, NULL)) as kondisi_terawat,
                        count(if(kondisi_bangunan='kurang',kondisi_bangunan, NULL)) as kondisi_kurang,
                        count(if(kondisi_bangunan='rusak',kondisi_bangunan, NULL)) as kondisi_rusak,

                        count(if(sirkulasi_rumah='ada',sirkulasi_rumah, NULL)) as sirkulasi_ada,
                        count(if(sirkulasi_rumah='tidak',sirkulasi_rumah, NULL)) as sirkulasi_tidak,

                        count(if(pencahayaan_rumah='baik',pencahayaan_rumah, NULL)) as pencahayaan_baik,
                        count(if(pencahayaan_rumah='sedang',pencahayaan_rumah, NULL)) as pencahayaan_sedang,
                        count(if(pencahayaan_rumah='buruk',pencahayaan_rumah, NULL)) as pencahayaan_buruk,

                        count(if(sumber_penerangan='pln',sumber_penerangan, NULL)) as sumber_pln,
                        count(if(sumber_penerangan='lampu minyak',sumber_penerangan, NULL)) as sumber_lampu,
                        count(if(sumber_penerangan='genset pribadi',sumber_penerangan, NULL)) as sumber_gensetp,
                        count(if(sumber_penerangan='genset desa',sumber_penerangan, NULL)) as sumber_gensetd,
                        count(if(sumber_penerangan='genset tetangga',sumber_penerangan, NULL)) as sumber_gensett,
                        count(if(sumber_penerangan='sumber lainnya',sumber_penerangan, NULL)) as sumber_lainnya,

                        count(if(sumber_air='pdam',sumber_air, NULL)) as sumber_pdam,
                        count(if(sumber_air='pipanisasi desa',sumber_air, NULL)) as sumber_pipanisasi,
                        count(if(sumber_air='sumur',sumber_air, NULL)) as sumber_sumur,
                        count(if(sumber_air='mata air',sumber_air, NULL)) as sumber_mata,
                        count(if(sumber_air='sungai',sumber_air, NULL)) as sumber_sungai,
                        count(if(sumber_air='sumber lainnya',sumber_air, NULL)) as sumber_lain,

                        count(if(air_minum='sungai',air_minum, NULL)) as air_sungai,
                        count(if(air_minum='sumur',air_minum, NULL)) as air_sumur,
                        count(if(air_minum='mineral',air_minum, NULL)) as air_mineral,
                        count(if(air_minum='hujan',air_minum, NULL)) as air_hujan,
                        count(if(air_minum='mata air',air_minum, NULL)) as air_mata,
                        count(if(air_minum='pdam',air_minum, NULL)) as air_pdam,
                        count(if(air_minum='sumber lainnya',air_minum, NULL)) as air_lainnya,

                        count(if(sarana_mandi='kamar mandi keluarga',sarana_mandi, NULL)) as sarana_keluarga,
                        count(if(sarana_mandi='kamar mandi umum',sarana_mandi, NULL)) as sarana_umum,
                        count(if(sarana_mandi='sungai',sarana_mandi, NULL)) as sarana_sungai,
                        count(if(sarana_mandi='sembarang tempat',sarana_mandi, NULL)) as sarana_tempat,
                        count(if(sarana_mandi='lainnya',sarana_mandi, NULL)) as sarana_lainnya,

                        count(if(pengelolaan_sampah='petugas kebersihan',pengelolaan_sampah, NULL)) as pengelolaan_petugas,
                        count(if(pengelolaan_sampah='dibakar',pengelolaan_sampah, NULL)) as pengelolaan_dibakar,
                        count(if(pengelolaan_sampah='buang kesungai',pengelolaan_sampah, NULL)) as pengelolaan_sungai,
                        count(if(pengelolaan_sampah='buang sembarangan',pengelolaan_sampah, NULL)) as pengelolaan_sembarangan,
                        count(if(pengelolaan_sampah='lainnya',pengelolaan_sampah, NULL)) as pengelolaan_lainnya,

                        count(if(pengelolaan_cair='pembuangan septictank',pengelolaan_cair, NULL)) as cair_septictank,
                        count(if(pengelolaan_cair='disalurkan parit',pengelolaan_cair, NULL)) as cair_parit,
                        count(if(pengelolaan_cair='disalurkan sungai',pengelolaan_cair, NULL)) as cair_sungai,
                        count(if(pengelolaan_cair='lainnya',pengelolaan_cair, NULL)) as cair_lainnya,

                        count(if(transportasi='umum',transportasi, NULL)) as transportasi_umum,
                        count(if(transportasi='ojek',transportasi, NULL)) as transportasi_ojek,
                        count(if(transportasi='travel',transportasi, NULL)) as transportasi_travel,
                        count(if(transportasi='lainnya',transportasi, NULL)) as transportasi_lainnya,
                        count(if(transportasi='tidak',transportasi, NULL)) as transportasi_tidak,

                        count(if(usaha_dagang='iya',usaha_dagang, NULL)) as usaha_iya,
                        count(if(usaha_dagang='tidak',usaha_dagang, NULL)) as usaha_tidak,
                        
                        count(if(gaji_perbulan='iya',gaji_perbulan, NULL)) as gaji_iya,
                        count(if(gaji_perbulan='tidak',gaji_perbulan, NULL)) as gaji_tidak,

                        count(if(kiriman_lain='iya',kiriman_lain, NULL)) as kiriman_iya,
                        count(if(kiriman_lain='tidak',kiriman_lain, NULL)) as kiriman_tidak,

                        count(if(dana_pensiun='iya',dana_pensiun, NULL)) as dana_iya,
                        count(if(dana_pensiun='tidak',dana_pensiun, NULL)) as dana_tidak,

                        count(if(sumber_lain='iya',sumber_lain, NULL)) as sumber_iya,
                        count(if(sumber_lain='tidak',sumber_lain, NULL)) as sumber_tidak,

                        count(if(banding_pendapatan='meningkat',banding_pendapatan, NULL)) as banding_meningkat,
                        count(if(banding_pendapatan='sama',banding_pendapatan, NULL)) as banding_sama,
                        count(if(banding_pendapatan='menurun',banding_pendapatan, NULL)) as banding_menurun,

                        count(if(pendapatan_cukup='lebih',pendapatan_cukup, NULL)) as pendapatan_lebih,
                        count(if(pendapatan_cukup='cukup',pendapatan_cukup, NULL)) as pendapatan_cukup,
                        count(if(pendapatan_cukup='kurang',pendapatan_cukup, NULL)) as pendapatan_kurang,

                        count(if(bentuk_bantuan='uang',bentuk_bantuan, NULL)) as bentuk_uang,
                        count(if(bentuk_bantuan='barang pokok',bentuk_bantuan, NULL)) as bentuk_pokok,
                        count(if(bentuk_bantuan='barang produksi',bentuk_bantuan, NULL)) as bentuk_produksi,
                        count(if(bentuk_bantuan='bentuk lainnya',bentuk_bantuan, NULL)) as bentuk_lainnya,
                        count(if(bentuk_bantuan='tidak pernah',bentuk_bantuan, NULL)) as bentuk_tidak,

                        count(if(punya_rekening='iya',bentuk_bantuan, NULL)) as punya_iya,
                        count(if(punya_rekening='tidak',bentuk_bantuan, NULL)) as punya_tidak




























                FROM form ";
        $result = $this->db->query($sql);
        return $result->row();
    }
}
