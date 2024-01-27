<?php

namespace App\Http\Controllers;

use App\Models\inventario\Material;
use App\Models\servicios\Cliente;
use App\Models\servicios\Recibo;
use App\Models\usuarios\Persona;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request as PRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class generator extends Controller
{

    // 10cm = 10/2.54*72 = 283
    // 20cm = 10/2.54*72 = 566

    public $resultado, $recibo, $garantia, $fechaIni, $fechaFin, $pagos;
    public $MontoTotal, $fechaCreado, $persona,$telefono, $material;
    public $montoAnterior, $comentario, $pantalon, $saco, $idMaterial; 
    public function show($id){
        // return view('invoice');
        $idRe = $id;
        $customPaper = array(0,0,567,283);

        $materialId = Recibo::where('id', $id)->pluck('id_material');
        $resultado = Material::where('id', $materialId)->pluck('nombre');
        $recibo = Recibo::find($id);

        // datos
        $garantia = $recibo->garantia;
        $fechaIni = Carbon::parse($recibo->fecha_ini)->toDateString();
        $fechaFin = $recibo->fecha_fin;
        $pagos = Recibo::find($recibo->id)->PagoRecibo;
        $MontoTotal = $pagos[0]->total;
        $fechaCreado = $pagos[0]->fecha_cancelado;

        // material
        $material = Material::find($recibo->id_material);
        $idMaterial = $recibo->id_material; 
        $saco = $recibo->t_saco;
        $pantalon = $recibo->t_pantalon;
        $comentario = $recibo->comentario;        
        // pagos
        $montoAnterior = $pagos[$pagos->count()-1]->saldo;

        // persona
        $persona = Persona::find($recibo->id_cliente);
        $telefono = Cliente::find($recibo->id_cliente)->telefonos;
        $telefono = $telefono[0]->numero;



        // $pdf = Pdf::loadView('invoice', compact('total'));
        $pdf = Pdf::loadView('invoice', compact('idRe',
                                                'garantia',
                                                'fechaIni',
                                                'fechaFin',
                                                'MontoTotal',
                                                'fechaCreado'))->setPaper('a4')->setWarnings(false)->save('myPDF.pdf');
        // $pdf = Pdf::loadView('invoice', compact('total'))->setPaper('a4','landscape')->setWarnings(false)->save('myPDF.pdf');

        // $pdf->save(storage_path('app/pdf/recibo_N'.$id.'.pdf'));

        $content = $pdf->download()->getOriginalContent();
        Storage::put('public/pdf/recibo_N'.$id.'.pdf', $content);

        $this->enviar('public/pdf/recibo_N'.$id.'.pdf',
                      'recibo_N'.$id.'.pdf',
                        $telefono);
        
        // $this->mensaje();
        

        return $pdf->stream();
        // return $pdf->download('example.pdf');
        // return view('invoice',compact('idRe',
        // 'garantia',
        // 'fechaIni',
        // 'fechaFin',
        // 'MontoTotal',
        // 'fechaCreado'));
 
    }

    public function enviar($ruta, $nombre, $numero){
        $url = 'http://127.0.0.1:5000/upload';

        // $deco = mb_convert_encoding( Storage::get($data), 'ISO-8859-1', 'UTF-8');

        $client = new Client();
        $multi = new MultipartStream([
            [
                'name' => 'archivo',
                'contents' => Storage::get($ruta),
                'filename' => $nombre
            ],
            [
                'name' => 'numero',
                'contents' => 7521111,
                'filename' => strval($numero)
            ]
        ]);

        $req = new PRequest('POST', $url, [
            'Content-Type' => 'multipart/form-data; boundary='.$multi->getBoundary()
        ], $multi);

        $client->send($req);

        
    }

    public function mensaje(){
        $url = 'http://127.0.0.1:5000/pruebas';

        $mes = [
            'texto' => 'mensaje enviado desde laravel'
        ];
        $resp = Http::post($url,$mes);

        


    }
}
