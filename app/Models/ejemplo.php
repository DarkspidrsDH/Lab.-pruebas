<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_horarios_zonas extends Model
{
    use HasFactory;
        /**
     * The connection name for the model.
     *
     * @var string
     */
    //protected $connection = 'Reservaciones_p';
    //protected $table = "tbl_reservaciones";


    protected $connection = 'ADN_reservaciones';
    protected $table = "tbl_horarios_zonas";


    //public $timestamps = false;
    const CREATED_AT = 'agregado_en';
    const UPDATED_AT = 'modificado_en';
}
