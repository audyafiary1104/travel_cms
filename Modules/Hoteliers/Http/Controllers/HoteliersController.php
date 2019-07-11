<?php

namespace Modules\Hoteliers\Http\Controllers;
use Modules\Hoteliers\Entities\Hoteliers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Session;
class HoteliersController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Response
     */    
    

    public function index()
    {
        return view('hoteliers::transaksi');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('hoteliers::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $flight = new Hoteliers;

        $flight->name = $request->name;
        $flight->alamat = $request->alamat;
        $flight->email = $request->email;
        $flight->company = $request->company;
        $flight->phone_number = $request->phone_number;
        $flight->password = Hash::make($request->password);

        $flight->save();

    }

  
    public function show($id)
    {
        return view('hoteliers::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('hoteliers::edit');
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
        //
    }
    public function myHotels()
    {
        return view('hoteliers::index');
    }
    public function room_type()
    {
        return view('hoteliers::room_type');
    }
    public function login()
    {
        return view('hoteliers::login');
    }
    public function post_login(Request $request)
    {
        $hotelier = $request->hoteliers_code;
        $password = $request->password;
        $data = Hoteliers::where('email',$hotelier)->first();
        if($data){
            if(Hash::check($password,$data->password)){
                Session::put('id_hoteliers',$data->id_hoteliers);
                Session::put('hotelier_code',$data->hotelier_code);
                Session::put('login',TRUE);
                return redirect()->route('sales.transaksi');
            }
            else{
                return redirect()->route('login')->with('alert','Password atau Hoteliers Code, Salah !');
            }
        }
        else{
            return redirect()->route('login')->with('alert','Password atau Email, Salah!');
        }     

    }

    public function register()
    {
        return view('hoteliers::register');
    }
}
