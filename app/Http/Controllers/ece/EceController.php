<?php

namespace App\Http\Controllers\ece;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class EceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('red_conocer/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function course()
    {
        return view('red_conocer.course');
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
    public function show($id)
    {
        //
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

    public function certificacion_0076(Request $request){
        return view('red_conocer.ec0076');
    }

    public function certificacion_02017_1(Request $request){
        return view('red_conocer.ecec02017_1');
    }

    public function about(Request $request){
        return view('red_conocer.about-us');
    }

    public function contact(Request $request)
    {
        return view('red_conocer.contact');
    }

    public function certificacion_0127(Request $request)
    {
        return view('red_conocer.ece0127');
    }

    public function certificacion_0305(Request $request)
    {
        return view('red_conocer.ec0305');
    }

    public function certificacion_0366(Request $request)
    {
        return view('red_conocer.ec0366');
    }

    public function certificacion_0401(Request $request)
    {
        return view('red_conocer.ec0401');
    }

    public function certificacion_1415(Request $request)
    {
        return view('red_conocer.ec1415');
    }

    public function education(Request $request)
    {
        return view('red_conocer.educacion');
    }

    public function bussiness(Request $request)
    {
        return view('red_conocer.empresarios_emprendedores');
    }

    public function admin(Request $request)
    {
        return view('red_conocer.administracion_publica');
    }

    public function descargar($file)
    {
        if (!$file)
        {
            abort(500);
        } else {
            if (!File::exists(public_path("assets/ece/docs/".$file))) {
                # checando si el archivo éxiste
                abort(404); // si no hay abortamos
            }
            $files = File::get(public_path("assets/ece/docs/".$file));
            $type = File::mimetype(public_path("assets/ece/docs/".$file));

            $response = Response::make($files, 200);
            $response->header("Content-Type", $type);
            return $response;
        }
    }
}
