<?php

namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model 
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email','password'];


    protected $useTimestamps   = false;
    protected $dateFormate     = 'datetime';
    protected $createField     = 'create_at';
    protected $updateField     = 'update_at';
    protected $deleteField     = 'delete_at';


    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;


    protected $allowCallbacks  = true;
    protected $beforeInsert    = [];
    protected $afterInsert     = [];
    protected $beforeUpdate    = [];
    protected $afterUpdate     = [];
    protected $beforeFind      = [];
    protected $afterFind       = [];
    protected $beforeDelete    = [];
    protected $afterDelete     = [];

}
?>