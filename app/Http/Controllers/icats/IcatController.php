<?php

namespace App\Http\Controllers\icats;

use App\Http\Controllers\Controller;
use App\Models\Icat;
use App\Traits\bannerTrait;
use Illuminate\Http\Request;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;
use Illuminate\Support\Facades\Storage;

class IcatController extends Controller
{
    use bannerTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Array_EntidadesFederativas = [
            'icatea_aguascalientes' => 'ICTEA Aguascalientes',
            'icatebcs_baja_california_sur' => 'ICATEBCS Baja California Sur',
            'icatbc' => 'ICATBC Baja California',
            'icatcam_campeche' => 'ICATCAM Campeche',
            'icat_cdmx' => 'ICAT CDMX',
            'icatec_coahuila' => 'ICATEC Coahuila',
            'icatech_chiapas' => 'ICATECH Chiapas',
            'icatech_chihuahua' => 'ICATECH Chihuahua',
            'inadet_chihuahua' => 'INADET Chihuahua',
            'ieca_guanajuato' => 'IECA Guanajuato',
            'icathi_hidalgo' => 'ICATHI Hidalgo',
            'icati_estado_de_mexico' => 'ICATI Estado de México',
            'icatmi_michoacan' => 'ICATMI Michoacán',
            'icatmor_morelos' => 'ICATMOR Morelos',
            'icaten_nayarit' => 'ICATEN Nayarit',
            'icet_nuevo_leon' => 'ICET Nuevo León',
            'icapet_oaxaca' => 'ICAPET Oaxaca',
            'icatep_puebla' => 'ICATEP Puebla',
            'icateq_queretaro' => 'ICATEQ Querétaro',
            'icatqr_quintana_roo' => 'ICATQR Quintana Roo',
            'icatslp_san_luis_potosi' => 'ICATSLP San Luis Potosí',
            'icatsin_sinaloa' => 'ICATSIN Sinaloa',
            'icatson_sonora' => 'ICATSON Sonora',
            'ifortab_tabasco' => 'IFORTAB Tabasco',
            'icatlax_tlaxcala' => 'ICATlAX Tlaxcala',
            'icatver_veracruz' => 'ICATVER Veracruz',
            'icatey_yucatan' => 'ICATEY Yucatán',
            'icatez_zacatecas' => 'ICATEZ Zacatecas',
            'ideft_Jalisco' => 'IDEFT Jalisco',
            'icat_Tamaulipas' => 'ICAT Tamaulipas',
            'dgcft_direccion_general_de_centros_de_formacion_para_el_trabajo' => 'DGCFT Dirección General de Centros de Formación para el Trabajo'
        ];
        // cargamos la plantilla
        $bprincipal = $this->getBanner('banner_principal');
        return view('micrositios.listaicats', compact('bprincipal', 'Array_EntidadesFederativas'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return /Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nombreicat)
    {
        $arreglo = [
            'icatea_aguascalientes' => 'ICTEA Aguascalientes',
            'icatebcs_baja_california_sur' => 'ICATEBCS Baja California Sur',
            'icatbc' => 'ICATBC Baja California',
            'icatcam_campeche' => 'ICATCAM Campeche',
            'icat_cdmx' => 'ICAT CDMX',
            'icatec_coahuila' => 'ICATEC Coahuila',
            'icatech_chiapas' => 'ICATECH Chiapas',
            'icatech_chihuahua' => 'ICATECH Chihuahua',
            'inadet_chihuahua' => 'INADET Chihuahua',
            'ieca_guanajuato' => 'IECA Guanajuato',
            'icathi_hidalgo' => 'ICATHI Hidalgo',
            'icati_estado_de_mexico' => 'ICATI Estado de México',
            'icatmi_michoacan' => 'ICATMI Michoacán',
            'icatmor_morelos' => 'ICATMOR Morelos',
            'icaten_nayarit' => 'ICATEN Nayarit',
            'icet_nuevo_leon' => 'ICET Nuevo León',
            'icapet_oaxaca' => 'ICAPET Oaxaca',
            'icatep_puebla' => 'ICATEP Puebla',
            'icateq_queretaro' => 'ICATEQ Querétaro',
            'icatqr_quintana_roo' => 'ICATQR Quintana Roo',
            'icatslp_san_luis_potosi' => 'ICATSLP San Luis Potosí',
            'icatsin_sinaloa' => 'ICATSIN Sinaloa',
            'icatson_sonora' => 'ICATSON Sonora',
            'ifortab_tabasco' => 'IFORTAB Tabasco',
            'icatlax_tlaxcala' => 'ICATlAX Tlaxcala',
            'icatver_veracruz' => 'ICATVER Veracruz',
            'icatey_yucatan' => 'ICATEY Yucatán',
            'icatez_zacatecas' => 'ICATEZ Zacatecas',
            'ideft_Jalisco' => 'IDEFT Jalisco',
            'icat_Tamaulipas' => 'ICAT Tamaulipas',
            'dgcft_direccion_general_de_centros_de_formacion_para_el_trabajo' => 'DGCFT Dirección General de Centros de Formación para el Trabajo'
        ];
        $itemBusqueda = $arreglo[$nombreicat];
        $getIcat = Icat::where('icat', $nombreicat)->get();
        // cargamos banner principal
        $bprincipal = $this->getBanner('banner_principal');
        return view('micrositios.lista_icat', compact('bprincipal', 'itemBusqueda', 'getIcat'))->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function generate_qr_code($nombre)
    {
        $writer = new PngWriter();

        $url = route('plantel.icat.entidad.federativa', ['nombre_icat' => $nombre]);

        // Create QR code
        $qrCode = QrCode::create($url)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));


        $result = $writer->write($qrCode, null, null);

        return response($result->getString())->header('Content-Type', $result->getMimeType());
        // return response()->streamDownload(function() use($result){
        //     echo $result->getString();
        // }, 'QR.png');
    }
}
