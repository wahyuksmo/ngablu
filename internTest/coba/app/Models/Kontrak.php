<?php

namespace App\Models;

use CodeIgniter\Model;

class Kontrak extends Model
{
    protected $table = 'kontrak';

    
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function tampildata() {
        return $this->db->table('kontrak')->get()->getResultArray();
    }
}
