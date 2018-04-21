<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tourhip\Model\Location;
use App\Tourhip\Model\Country;
use App\Tourhip\Model\Category;
use App\Tourhip\Model\Currency;
use App\Tourhip\Model\ForumCategory;
use App\Tourhip\Model\Language;
use Illuminate\Support\Facades\View;
use ChrisKonnertz\OpenGraph\OpenGraph;
use MetaTag;
class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

	 protected  $pricebumpup ;
	 protected	$pricebumpupfull ;
	 protected	$pricefeatured ;
	 protected	$mostpopularprice ;
	 protected	$newactivityprice ;
	 protected	$allowedfeatured ;
	 protected $minreview;
	
	
	
	
    public function __construct()
    {
    	
		$this->pricebumpup = 0;
		$this->pricebumpupfull = 0;
		$this->pricefeatured = 0;
		$this->mostpopularprice = 0;
		$this->newactivityprice = 0;
		$this->minreview = 0;
		$this->allowedfeatured = 10;
		
		
       	$all_category = Category::get();		
		View::share('categories',$all_category);
		
		$forum_category = ForumCategory::get();		
		View::share('fcategories',$forum_category);
		
        $all_location = Location::where('active',1)->get();
		$all_location2 = Location::where('active',1)->groupBy('parent')->get();
		$activecountries =[];		
		foreach($all_location2 as $location){
			array_push($activecountries,$location->parent);
		}
		$activecountry = Country::with('location')->whereIn('id',$activecountries)->get();
		
		View::share('activecountry',$activecountry);
		View::share('locations',$all_location);
		
		$all_language = Language::get();
		View::share('languages',$all_language);
		
		$all_currency = Currency::whereIn('code',['IDR','USD'])->get();
		View::share('currencies',$all_currency);
		
		
		$this->og = new OpenGraph();
        $this->og->siteName(config('app.name'))->locale('en_US')->type('website')->description('Find tours around the world')->url(url()->current());
        View::share('og', $this->og);
		
		// Section description
        MetaTag::set('title',config('app.name'));
        MetaTag::set('description', 'Find tours around the world');
        MetaTag::set('image',url('hail/x/gaze/original/logo.png'));
		
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
}
