<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use HasFactory;
    protected $table    = 'landingpage';
    protected $fillable = ['fullname', 'email', 'phone', 'content'];

    public function createLandingpage($data)
    {
        return $this->create($data);
    }
}
