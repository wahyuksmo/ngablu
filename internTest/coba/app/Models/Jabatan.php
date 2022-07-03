<?php

namespace App\Models;

use CodeIgniter\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan_pegawai';



    public function __construct()
    {
        $this->db = db_connect();
    }

    public function tampildata() {
        return $this->db->table('jabatan_pegawai')->get()->getResultArray();
    }




    
}
