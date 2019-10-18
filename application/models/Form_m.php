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
            'total_proyek_lahan' => $post['total_proyek_lahan'],
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
            'total_proyek_lahan' => $post['total_proyek_lahan'],
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
                        count(if(suku_asal='jawa',suku_asal, NULL)) as suku_jawa
                FROM form ";
        $result = $this->db->query($sql);
        return $result->row();
    }
}
