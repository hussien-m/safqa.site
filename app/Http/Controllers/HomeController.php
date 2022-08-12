<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use App\Models\DealTarget;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth')->except([
                'welcome',
                'getDealFromType',
                'showDeal',
            ]);

      $this->middleware('verified')->except([
                'welcome',
                'getDealFromType',
                'showDeal',
            ]);

      $this->middleware('verifiProfile')->except([
                'welcome',
                'getDealFromType',
                'showDeal',
            ]);
    }

    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        $data['types'] = DB::table('deal_types')->select('deal_type AS type','image')->take(3)->get();

        return view('welcome',$data);
    }

    public function getDealFromType($type)
    {
        $type=str_replace('-',' ',$type);
        $data['page_name']=$type;

        $data['deals']= DB::table('deals')
                        ->join('deal_types', 'deals.deal_type_id', '=', 'deal_types.id')
                        ->join('deal_targets', 'deals.deal_target_id', '=', 'deal_targets.id')
                        ->join('countries', 'deals.country_id', '=', 'countries.id')
                        ->join('cities', 'deals.city_id', '=', 'cities.id')
                        ->join('regions', 'deals.region_id', '=', 'regions.id')
                        ->join('users', 'deals.user_id', '=', 'users.id')
                        ->where('deal_types.deal_type', '=',$type)
                        ->select('deals.*', 'deal_types.deal_type','deal_targets.target_deal' , 'countries.name AS country_name' , 'cities.name AS city_name', 'regions.name AS region_name','users.name AS user_name')
                        ->get();

        return view('frontend.show-deal-typ',$data);
    }

    public function showDeal($title)
    {
        $title=str_replace('-',' ',$title);
        $data['page_name']=$title;

        $data['deals']= DB::table('deals')
                        ->join('deal_types', 'deals.deal_type_id', '=', 'deal_types.id')
                        ->join('deal_targets', 'deals.deal_target_id', '=', 'deal_targets.id')
                        ->join('countries', 'deals.country_id', '=', 'countries.id')
                        ->join('cities', 'deals.city_id', '=', 'cities.id')
                        ->join('regions', 'deals.region_id', '=', 'regions.id')
                        ->join('users', 'deals.user_id', '=', 'users.id')
                        ->where('deal_types.deal_type', '=',$title)
                        ->select('deals.*', 'deal_types.deal_type','deal_targets.target_deal' , 'countries.name AS country_name' , 'cities.name AS city_name', 'regions.name AS region_name','users.name AS user_name')
                        ->get();

        return view('frontend.show-deal-typ',$data);
    }
}
