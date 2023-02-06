<?php
namespace App\Models;
use CodeIgniter\Model;

class PitanjeModel extends Model
{    
    protected $table      = 'kontakt';    
    protected $primaryKey = 'idK';
    protected $useAutoIncrement = true;
    protected $returnType     = 'object';
    protected $allowedFields = ['idK', 'ime', 'prezime', 'email', 'pitanje', 'odgovor', 'vreme'];
    
}