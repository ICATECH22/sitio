<?php

namespace App\Repositories;

use App\Interfaces\BuzonRepositoryInterface;
use App\Mail\NotifyMail;
use App\Mail\responseReceived;
use App\Models\Buzon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use stdClass;

class BuzonRepository implements BuzonRepositoryInterface
{
    public function storeBuzon(Request $req)
    {
        try {
            $check = isset($req->chkterminos) ? true : false;
            // creando información
            $buzonCreate = Buzon::create([
                'actividad' => $req->actividad,
                'nombre' => trim($req->nombre),
                'email' => trim($req->correo_electronico),
                'telefono' => $req->phone,
                'termino' => $check,
                'comentario' => trim(strip_tags($req->comentarios)),
            ]);

            $lastId = $buzonCreate->id;

            if ($req->hasfile('formFileMultiple')) {
                $nombre_archivo = "buzon_sugerencia";
                # check file
                $archivo = $req->file('formFileMultiple');

                $extensionFile = $archivo->getClientOriginalExtension(); // extension de la imagen
                $documento_file = trim($nombre_archivo . '_' . date('YmdHis') . '_' . $lastId . '.' . $extensionFile);
                // save file in storage
                $archivo->storeAs('/uploadFiles/buzon/' . $lastId, $documento_file); //guardamos el archivo en la carpeta storage
                $documentoUrl = Storage::url('/uploadFiles/buzon/' . $lastId . "/" . $documento_file);

                // update -- with document URL
                Buzon::where('id', '=', $lastId)->update([
                    'archivo' => $documentoUrl
                ]);
            }

            $mailInfo = new stdClass();
            $mailInfo->recieverName = trim($req->nombre);
            $mailInfo->sender = "ICATECH área de transparencia";
            $mailInfo->senderCompany = "Instituto de Capacitación y Vinculación Tecnolófica del Estado de Chiapas";
            $mailInfo->to = trim($req->correo_electronico);
            $mailInfo->subject = "Mensaje de Información acerca del buzón de transparencia";
            $mailInfo->name = "ICATECH Buzón digital";
            $mailInfo->cc = "noreply@icatech.chiapas.gob.mx";

            // send email
            Mail::to($req->correo_electronico)->send(new NotifyMail($mailInfo));

            // send second email
            //mail info
            $info = new stdClass();
            $info->sender = "ICATECH área de transparencia";
            $info->comentario = trim(strip_tags($req->comentarios));
            $info->nombre = trim($req->nombre);
            $info->telefono = trim($req->phone);
            $info->actividad = $req->actividad;
            $info->email = $req->correo_electronico;
            $info->file = $req->file('formFileMultiple');

            // send email to transparencia
            Mail::to("utransparencia@icatech.chiapas.gob.mx")->send(new responseReceived($info));

            return true;
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
