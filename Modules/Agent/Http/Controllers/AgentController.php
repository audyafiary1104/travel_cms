<?php

namespace Modules\Agent\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Session;
use DB;
class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('agent::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        DB::table('agent')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'company' => $request->company,
            'alamat' => $request->alamat,
        ]);
        return redirect()->back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */

    public function login_post(Request $request)
    {
        $hotelier = $request->agent_code;
        $password = $request->password;
        $data = DB::table('agent')->where('agent_code',$hotelier)->first();
        if($data){
            if($password == $data->password){
                Session::put('id_hoteliers',$data->id_agent);
                Session::put('agent_code',$data->agent_code);
                Session::put('balance',$data->balance);

                Session::put('login_hoteliers',TRUE);
                return redirect()->route('agent.index');
            }
            else{
                return redirect()->route('agent.login')->with('alert','Password atau Hoteliers Code, Salah !');
            }
        }
        else{
            return redirect()->route('agent.login')->with('alert','Password atau Email, Salah!');
        }
    }
    public function search(Request $request)
    {
          $search = $request->get('term');

          $result = DB::table('product_hoteliers')->where('city', 'LIKE', '%'. $search. '%')->get();

          return response()->json($result);

    }
    public function search_hotels(Request $request)
    {
        $product = DB::table('product_hoteliers')->where('city',$request->search)->get();
        return view('agent::list_product',compact('product'));
    }
    public function details_hotels($id)
    {
        $rooms = DB::table('product_hoteliers')->where('id',$id)->first();
        return view('agent::details_product',compact('rooms'));
    }
    public function select_rooms($id)
    {
        $rooms = DB::table('type_room')->where('id_hotels_product',$id)->get();
        return view('agent::select_room',compact('rooms'));
    }
    public function cart($id)
    {
        return view('agent::cart');

    }
    public function checkout()
    {
        return view('agent::checkout');

    }
    public function transfer_balance()
    {
        return view('agent::transfer');
    }
    public function login()
    {
        return view('agent::login');
        # code...
    }
}
