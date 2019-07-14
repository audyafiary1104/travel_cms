<?php

namespace Modules\AgentDashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
use  Session;
class AgentDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {  $user = DB::table('agent')->where('id_agent',Session::get('id_agent'))->first();
        $book = count(DB::table('transaksi')->where('id_agent',Session::get('id_agent'))->get());
        return view('agentdashboard::index',compact('user','book'));
    }

   public function booking()
   {
    $user = DB::table('transaksi')->where('id_agent',Session::get('id_agent'))->get();
    $product_hoteliers = DB::table('product_hoteliers')->get();
    $type_room = DB::table('type_room')->get();

    return view('agentdashboard::my_booking',compact('user','product_hoteliers','type_room'));
   }
}
