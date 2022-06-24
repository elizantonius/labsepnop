<?php

namespace App\Models;

use CodeIgniter\Model;

class Krs extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'krs';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'npm', 'nama_mhs', 'ta_id', 'user_id', 'id_mahasiswa', 'jenis_kelamin', 'tanggal_lahir', 'id_perguruan_tinggi', 'id_agama', 'nama_agama', 'id_prodi', 'nama_program_studi', 'nama_status_mahasiswa', 'id_periode','password', 'created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
