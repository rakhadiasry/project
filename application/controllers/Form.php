<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->model('form_m');
    }
	public function index()
	{
        $data['row'] = $this->form_m->get();
		$this->template->load('template', 'form/form_data',$data);
    }
    

    public function add(){
        $form = new stdClass();
        $form->nama_enumerator = null;
        $form->nomor_enumerator = null;
        $form->nama_kabupaten = null;
        $form->kecamatan = null;
        $form->desa = null;
        $form->kampung = null;
        $form->pap_id = null;
        $form->nama_kk = null;
        $form->usia_kk = null;
        $form->nama_responden = null;
        $form->usia_responden = null;
        $form->jenis_kelamin = null;
        $form->nomor_res = null;
        $form->agama_res = null;
        $form->lama_tinggal = null;
        $form->suku_asal = null;
        $form->jumlah_anggota = null;
        $form->pendidikan_terakhir = null; 
        $form->pencarian_utama = null;
        $form->pencarian_kedua = null;
        $form->keterampilan_kk = null;
        $form->asal_keterampilan_kk = null;
        $form->keterampilan_responden = null;
        $form->asal_keterampilan_responden = null;
        $form->kegiatan_kk = null;
        $form->makan_sehari = null;
        $form->tempat_berobat = null;
        $form->jaminan_kesehatan = null;
        $form->penilaian_puskesmas = null;
        $form->kendala_pendidikan = null;
        $form->kondisi_pendidikan = null;
        $form->biaya_pendidikan = null;
        // $form->total_lahan = null;
        // $form->luas_proyek_lahan = null;
        // $form->jenis_tanaman_lah an = null;
        // $form->status_lahan = null;
        // $form->sisa_lahan = null;
        // $form->hasil_pertanian = null;
        // $form->jual_pertanian = null;
        // $form->hasil_peternakan = null;
        // $form->jual_peternakan = null;
        // $form->hasil_budidaya = null;
        // $form->jual_budidaya = null;
        // $form->hasil_ikan = null;
        // $form->jual_ikan = null;
        // $form->hasil_hutan = null;
        // $form->jual_hutan = null;
        // $form->hasil_tambang = null;
        // $form->izin_tambang = null;
        // $form->jual_tambang = null;
        // $form->status_rumah = null;
        // $form->luas_bl = null;
        // $form->material_bangunan = null;
        // $form->kondisi_bangunan = null;
        // $form->rumah_dibangun = null;
        // $form->mck_dibangun = null; 
        // $form->sumber_dana = null;
        // $form->jumlah_orang = null;
        // $form->sirkulasi_udara = null;
        // $form->pencahayaan_rumah = null;
        // $form->barang_dimiliki = null;
        // $form->bangunan_usaha = null;
        // $form->sumber_penerangan = null;
        // $form->sumber_air = null;
        // $form->air_minum = null;
        // $form->sarana_mandi = null;
        // $form->pengelolaan_sampah = null;
        // $form->pengelolaan_cair = null;
        // $form->jumlah_kendaraan = null;
        // $form->transportasi = null;
        // $form->menggunakan_hp = null;
        // $form->uang_lahan = null;
        // $form->usaha_dagang = null;
        // $form->omzet_dagang = null;
        // $form->gaji_perbulan = null;
        // $form->jumlah_gaji = null;
        // $form->kiriman_lain = null;
        // $form->jumlah_kiriman = null;
        // $form->dana_pensiun = null;
        // $form->jumlah_dana_pensiun = null;
        // $form->sumber_lain = null;
        // $form->jumlah_sumber = null;
        // $form->total_keseluruhan = null;
        // $form->pengeluaran_sebulan = null;
        // $form->banding_pendapatan = null;
        // $form->pendapatan_cukup = null;
        // $form->masalah_ekonomi = null;
        // $form->bentuk_bantuan = null;
        // $form->punya_rekening = null;
        // $form->pinjaman_mendesak = null;
        // $form->keperluan_meminjam = null;
        // $form->kerjasama_lingkungan= null;
        // $form->banyak_kerjasama= null;
        // $form->partisipasi_kerjasama = null;
        // $form->kegiatan_aktif = null;
        // $form->kegiatan_agama = null;
        // $form->sumber_pengetahuan = null;
        // $form->terlibat_organisasi = null;
        // $form->nama_organisasi = null;
        // $form->posisi_organisasi = null;
        // $form->tingkat_partisipasi= null;
        // $form->manfaat_organisasi = null;
        // $form->keamanan_lingkungan= null;
        // $form->alasan_keamanan= null;
        // $form->pernah_konflik = null;
        // $form->alasan_konflik = null;
        // $form->terlibat_konflik = null ;
        // $form->pihak_konflik = null;
        // $form->mekanisme_konflik = null;
        // $form->bencana_alam = null;
        // $form->pendapat_serd = null;
        // $form->manfaat_serd = null ;
        // $form->saran_serd = null ;
        $data = array(
            'page' => 'add',
            'row' => $form
        );

        $this->template->load('template', 'form/form_multi',$data );
    }

    public function edit($id){
        $query = $this->form_m->get($id);
        if($query->num_rows() > 0){
            $form = $query->row();

            $data = array(
                'page' => 'edit',
                'row' => $form,
            );
            $this->template->load('template', 'form/form_multi',$data);
        }else{
            echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='".site_url('form')."';</script>";
        }
    }

    public function process(){
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->form_m->add($post);
        }else if(isset($_POST['edit'])){
            $this->form_m->edit($post);
        }
         
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil di simpan');</script>";
        }
        echo "<script>window.location='".site_url('form')."';</script>";
    }


    public function del($id)
    {
        $this->form_m->del($id);
       
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil di hapus');</script>";
        }
        echo "<script>window.location='".site_url('form')."';</script>";
    }
}
