<?php
namespace App\Models;
use CodeIgniter\Model;

class Pitanje2Model extends Model
{    
    
    protected $table      = 'kontakt2';    
    protected $primaryKey = 'idK';
    protected $useAutoIncrement = true;
    protected $returnType     = 'object';
    protected $allowedFields = ['idK', 'email', 'pitanje', 'odgovor', 'vreme'];
    
}