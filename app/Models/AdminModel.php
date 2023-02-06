<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{    
    
    protected $table      = 'admin';    
    protected $primaryKey = 'username';
    protected $useAutoIncrement = true;
    protected $returnType     = 'object';
    protected $allowedFields = ['username', 'password'];
    
}