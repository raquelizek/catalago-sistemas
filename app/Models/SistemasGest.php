<?php

namespace App\Models;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemasGest extends Model
{
    protected $fillable = ['dev', 'atuacao', 'auth', 'diretsi', 'sistnm', 'sissig', 'endereco', 'dns', 'pdti', 'gac', 'gds', 'gnt', 'siapegnt', 'gns', 'siapegns', 'git', 'siapegit', 'gis', 'siapegis', 'prsei', 'numerosei', 'obsv'];
    protected $table = 'sistemasgestao';
}


