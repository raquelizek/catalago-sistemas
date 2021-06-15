<?php

namespace App\Models;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
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
            

               if (!Schema::hasTable('sistemasgestao')) {
               Schema::create('sistemasgestao', function($table){
                $table->id();
                $table->timestamps();
                $table->string('dev');
                $table->string('atuacao');
                $table->string('auth');
                $table->string('diretsi');
                $table->string('sistnm');
                $table->string('sissig');
                $table->string('endereco');
                $table->string('dns')->nullable();
                $table->string('pdti')->nullable();
                $table->string('gac')->nullable();
                $table->string('gds')->nullable();
                $table->string('gnt')->nullable();
                $table->string('siapegnt')->unique();
                $table->string('gns')->nullable();
                $table->string('siapegns')->unique();
                $table->string('git')->nullable();
                $table->string('siapegit')->unique();
                $table->string('gis')->nullable();
                $table->string('siapegis')->unique();
                $table->string('prsei')->nullable();
                $table->string('numerosei')->nullable();
                $table->text('obsv')->nullable();
            });
        }
        