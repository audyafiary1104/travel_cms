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
        $product_info = DB::table('product_hoteliers')->where('city',$request->search)->get();
        if (count($product_info) <= 0) {
            $product_image = null;
        } else {
            foreach ($product_info as $key => $value) {
                $product_image[] = DB::table('image_hotels')->where('id_product', $product_info[$key]->id)->first();
            }
        }
        return view('agent::list_product',compact('product_info', 'product_image'));
    }
    public function details_hotels($id)
    { 
        $hotels = DB::table('product_hoteliers')->get();
        if (count($hotels) <= 0) {
        $images = null;

    } else {
        foreach ($hotels as $key => $value) {
            $images[] = DB::table('image_hotels')->where('id_product', $hotels[$key]->id)->get();

            foreach ($images as $key => $value) {
                $image_id[$key+1] = $value;
                // foreach ($image_id as $key => $value) {
                //     $valuex[] = $value;
                // }
            }
        }
    }
        return view('agent::details_product',compact('hotels','image_id'));
    }

    public function select_rooms($id)
    {
        $rooms = DB::table('type_room')->where('id',$id)->get();
        if (count($rooms) <= 0) {
            $product_image = null;
        } else {
            foreach ($rooms as $key => $value) {
                $product_image[] = DB::table('image_type_room')->where('id_type_rooms', $rooms[$key]->id)->first();
            }
        }
        return view('agent::select_room',compact('rooms','product_image'));
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
        $get_bank = DB::table('bank')->get();
        return view('agent::transfer',compact('get_bank'));
    }
    public function transfer_balance_post(Request $request)
    {
        dd($request);
        $avatar = $request->file('buti_tf'); // in here 
        $filename = time() . '.' . $avatar->getClientOriginalExtension();        
        DB::table('transaksi_balance')->insert([
            'jumlah_balance' => $request->amount,
            'jumlah_ditf' => $request->jumlah_ditf,
            'bukti_tf' => $filename,
            'id_agent' => '1',
            'confirmasi' => FALSE,
        ]);
        $avatar->move(public_path('img/bukti_tf/'), $filename);
        return redirect()->route('agent.index');
    }
    public function login()
    {
        return view('agent::login');
      
    }
}
