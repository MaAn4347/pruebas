<?php
namespace App\Models;
use CodeIgniter\Model;



class Tabla_usuarios extends Model{
    protected $table ='usuarios';
    protected $primaryKey = 'id_usuario';
    protected $returnType = 'object';
    protected $allowedFields = ['id_usuario','nombre','ap_paterno','ap_materno',
                                'e_mail','password'];

   

    public function obtener_logueo_usuario($email=NULL, $password=NULL){
        $resultado_query = $this
                            ->select('id_usuario,nombre,ap_paterno,ap_materno,
                            e_mail')
                            ->where('e_mail', $email)
                            ->where('password', $password)
                            ->first();

        return $resultado_query;
    }//end function



}//end model usuarios

 ?>
