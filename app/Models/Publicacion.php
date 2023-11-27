<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'publicaciones';
    //protected $fillable = ['text', 'agregado_en', 'agregado_por', 'modificado_en', 'modificado_por', 'estado'];
    
    const CREATED_AT = 'agregado_en';
    const UPDATED_AT = 'modificado_en';
    public static function boot(){
        parent::boot();
        static::creating (function($model){
            $model->agregado_en = now();
        });
        static::updating (function($model){
            $model->modificado_en = now();
        });
    }
}
