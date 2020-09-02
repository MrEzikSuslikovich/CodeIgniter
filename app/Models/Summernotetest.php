<?php namespace App\Models;

use CodeIgniter\Model;

class Summernotetest extends Model
{
    protected $table = 'news2';
    protected $allowedFields = ['id', 'title','text'];
    public function getNews($slug = false)
    {
        if ($slug === false)
        {
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['slug' => $slug])
                    ->first();
    }
}