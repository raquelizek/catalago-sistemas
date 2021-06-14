<?php

namespace App\Models;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysqli;

class SistemasGest extends Model
{

 
    protected $fillable = ['dev', 'atuacao', 'auth', 'diretsi', 'sistnm', 'sissig', 'endereco', 'dns', 'pdti', 'gac', 'gds', 'gnt', 'siapegnt', 'gns', 'siapegns', 'git', 'siapegit', 'gis', 'siapegis', 'prsei', 'numerosei', 'obsv'];
    public $table = 'sistemasgestao';
}


//último código adicionado 10/06 para criar a tabela se não existir e os campos!!!!!!!!!!
$db_Host = "127.0.0.1";
$db_username = 'root';
$db_password = '';
$db_primaryDatabase = 'catalogosistemas';


$conn = new mysqli($db_Host, $db_username, $db_password, $db_primaryDatabase);
if (mysqli_connect_errno()) {
    printf("Não foi possível conectar ao banco de dados: %s\n", mysqli_connect_error());
    exit();
}
                $query = "CREATE TABLE IF NOT EXISTS exemplo (
                          ID int(11) AUTO_INCREMENT,
                          EMAIL varchar(255) NOT NULL,
                          PASSWORD varchar(255) NOT NULL,
                          PERMISSION_LEVEL int,
                          APPLICATION_COMPLETED int,
                          APPLICATION_IN_PROGRESS int,
                          PRIMARY KEY  (ID)
                          )";
                $result = mysqli_query($conn, $query);


                if (!Schema::hasTable('tblCategory')) {
                    Schema::create('tblCategory', function($table){
                           $table->engine = 'InnoDB';
                           $table->increments('CategoryID');
                           $table->string('Category', 40);
                           $table->unique('Category', 'tblCategory_UK_Category');
                           $table->timestamps();
                   }
               }


               

