<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NoteModel extends Model
{
    use HasFactory;

    protected $table = 'note';

    protected $fillable = ['title','content'];
}
