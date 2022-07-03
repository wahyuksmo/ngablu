<?php

namespace App\Models;

use CodeIgniter\Model;

class Karyawan extends Model
{

   protected $table = 'pegawai';
   protected $primaryKey = 'id_pegawai';
   protected $allowedFields = ['id_jabatan','id_kontrak','nama_pegawai'];
    
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function tampildata() {
        return $this->db->table('pegawai')
        ->join('jabatan_pegawai', 'jabatan_pegawai.id_jabatan = pegawai.id_jabatan')
        ->join('kontrak', 'kontrak.id_kontrak = pegawai.id_kontrak')
        ->get()->getResultArray();
    }

    public function ambilid($id) {
        return $this->db->table('pegawai')->getWhere(['id_pegawai' => $id]);
    }


}
