<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table='sections';
    protected $fillable = [
        'name',
        'title'];
        public function post(){
            return $this->hasMany(Post::class, 'section_id', 'id');
        }
}
