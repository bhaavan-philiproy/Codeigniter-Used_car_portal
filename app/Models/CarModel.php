<?php

namespace App\Models;

use CodeIgniter\Model;

class CarModel extends Model
{
    protected $table      = 'car';
    protected $primaryKey = 'Id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['Uid','Company','Model','Color','Year','Type','Img','Price','Status','Buyerid','created_at','updated_at','deleted_at'];

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