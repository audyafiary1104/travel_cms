<?php

namespace Modules\ConfirmasiAgent\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class ConfirmasiAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $agent = DB::table('agent')->where('actived',false)->get();
        return view('confirmasiagent::index',compact('agent'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('confirmasiagent::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('confirmasiagent::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('confirmasiagent::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {

    }
    public function payment()
    {
        return view('confirmasiagent::payment');
    }
    public function hotelier()
    {   $hoteliers = DB::table('hoteliers')->where('actived',false)->get();
        return view('confirmasiagent::hotelier',compact('hoteliers'));
    }
    public function confimasi_hoteliers($id)
    {
        $a = rand(1000,10000);
        $hoteliers = DB::table('hoteliers')->where('id_hoteliers',$id)->update(
            [
                'actived' => true,
                'hotelier_code' => 'HTL'.$a
            ]
        );
        return redirect()->back();
    }
    public function konfirmasi_agent($id)
    {
        $get = DB::table('agent')->where('id_agent',$id)->first();
        $a = rand(1000,10000);
        $agent = DB::table('agent')->where('id_agent',$id)->update([
            'actived' => true,
            'agent_code' => 'AGT'.$a,
            'password' => Str::substr($get->email, 0, 3).$a
        ]);       
        return redirect()->back();
    }
}
