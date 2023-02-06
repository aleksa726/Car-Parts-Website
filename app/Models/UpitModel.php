<?php
namespace App\Models;
use CodeIgniter\Model;

class UpitModel extends Model
{    
    
    protected $table      = 'upit';    
    protected $primaryKey = 'idU';
    protected $useAutoIncrement = true;
    protected $returnType     = 'object';
    protected $allowedFields = ['idK', 'ime', 'prezime', 'email', 'marka', 'model', 'godiste', 'kubikaza', 'tekst', 'odgovor', 'vreme'];
    
}