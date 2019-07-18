<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
class wsController extends Controller
{
    
     /**
     * Muestra las noticias.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function usu_koha($id)
     {
        
         $client = new \GuzzleHttp\Client();
         //   $request = $client->get('http://unipacifico.metabiblioteca.org/cgi-bin/koha/svc/report?id=53&phase=Run+this+report&sql_params='.$id);
         $request=$client->get('http://unipacifico.metabiblioteca.org/cgi-bin/koha/svc/report?id=56&phase=Run+this+report&sql_params='.$id);
         $response = $request->getBody();
         $multas= json_decode($response->getContents()); 
         $index=0;
         $valor=0;
         $result="<div   class='alert alert-warning' role='alert'>";
         if(!empty($multas)){
            
            foreach($multas as $multa){
             
                  if($index==0){
                        $result.=" Apreciado usuario <b>".$multa[1]."</b>, según nuetros registros,
                        usted posee";
                        if($multa[10]>0){
                        $result.="actualmente material(es) de biblioteca con un periodo de préstamos vencido.<br/>
                        El/los siguiente(s) ítem(s) están retrasados:";
                        }
                        else{
                          $result.="una multa por retraso en devolucion en El/los siguiente(s) ítem(s)";
                        }

                        $result.=" <table class='table-sm table-bordered borders-yellow'>
                        <thead>
                          <tr>
                            <th scope='col'>Codigo de Barra</th>
                            <th scope='col'>Titulo del Material</th>
                            <th scope='col'>Valor multa</th>                        
                          </tr>
                        </thead>
                        <tbody>";
                  }
                  $result.="<tr>
                  <td scope='row'><b>".$multa[6]."</b></td>
                  <td>".$multa[5]."</td>
                  <td>".(int)$multa[7]."</td>               
                </tr>";
                $valor+=(int)$multa[7];

                $index++;
            }
                   
           $result.="<tr>
           <td colspan='2'><b>TOTAL</b></td>
           <td><b>".$valor."</b></td>
            </tr> 
         </tbody>
         </table>";      
        
            if($multa[10]>0){
               $result.=" Si usted cree que ha devuelto el material, por favor llame al personal de la biblioteca y ellos le ayudarán a resolver el problema.<br/>        
               Agradecemos la Atención prestada,<br/>";
            }else{
            $result.="Si usted tiene alguna duda con relación a la información presentada, por favor comunicarse con el personal de la biblioteca y ellos le ayudarán a resolver el inconveniente.<br/>        
            Agradecemos la Atención prestada,<br/>Biblioteca Unipacifico ";
            }               
           $result.=" </div>"; 
        
         }
         else{
            $result=" <div class='alert alert-primary' role='alert'>
            Usted no posee multa en la Biblioteca
            </div></div>";
         }
      return $result;

         //return view('publico.multas',compact('result'));
    }

    public function usu_multa()
     {
           $result="";
         return view('publico.multas',compact('result'));
    }
    
}
