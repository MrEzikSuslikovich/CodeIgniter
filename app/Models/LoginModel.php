<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{
    protected $table = 'users';
    protected $allowFields = ['name','mobile_number'];
    
}