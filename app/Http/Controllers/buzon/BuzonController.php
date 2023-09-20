<?php

namespace App\Http\Controllers\buzon;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuzonPostRequest;
use App\Interfaces\BuzonRepositoryInterface;
use Illuminate\Http\Request;
use App\Traits\bannerTrait;
use Illuminate\Database\QueryException;

class BuzonController extends Controller
{
    use bannerTrait;
    private BuzonRepositoryInterface $buzonRepository;

    public function __construct(BuzonRepositoryInterface $buzonRepository)
    {
        $this->buzonRepository = $buzonRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bprincipal = $this->getBanner('banner_principal');
        return view('pages.buzon.index', compact('bprincipal'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BuzonPostRequest $request)
    {
        // here we upload and crearte data and send mail
        try {
            $send = $this->buzonRepository->storeBuzon($request);
            if ($send == true) {
                # redirect
                return redirect()->route('buzon.ciudadano.enviado', ['remitente' => base64_encode($request->nombre)]);
            } else {
                return back()->with(['error' => $send]);
            }
            //send data tu repository
        } catch (QueryException $e) {
            //throw $e;
            return back()->with('error', $e->getMessage());
        }
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
        $bprincipal = $this->getBanner('banner_principal');
        return view('email.mailsend', compact('bprincipal'));
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function done($remitente)
    {
        $bprincipal = $this->getBanner('banner_principal');
        return view('pages.buzon.mensajetermino', compact('bprincipal', 'remitente'));
    }
}
