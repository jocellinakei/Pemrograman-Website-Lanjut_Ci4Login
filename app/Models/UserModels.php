<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model
{
    protected $table = 'users'; // Sesuaikan nama tabel di database
    protected $primaryKey = 'id'; // Primary key di tabel

    protected $allowedFields = ['firstname', 'email', 'password']; // Kolom-kolom yang boleh diisi
}
