<?php

namespace App\Models;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemasGest extends Model
{

 
    protected $fillable = ['dev', 'atuacao', 'auth', 'diretsi', 'sistnm', 'sissig', 'endereco', 'dns', 'pdti', 'gac', 'gds', 'gnt', 'siapegnt', 'gns', 'siapegns', 'git', 'siapegit', 'gis', 'siapegis', 'prsei', 'numerosei', 'obsv'];
    public $table = 'sistemasgestao';
}

$query = "SELECT ID FROM USERS";
$result = mysqli_query($dbConnection, $query);

if(empty($result)) {
                $query = "CREATE TABLE SISTEMASGESTAO (
                          ID int(11) AUTO_INCREMENT,
                          EMAIL varchar(255) NOT NULL,
                          PASSWORD varchar(255) NOT NULL,
                          PERMISSION_LEVEL int,
                          APPLICATION_COMPLETED int,
                          APPLICATION_IN_PROGRESS int,
                          PRIMARY KEY  (ID)
                          )";
                $result = mysqli_query($dbConnection, $query);
}

