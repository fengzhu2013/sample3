<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class StaticPagesController extends Controller
{
	/**
	 * the page of home
	 * @return [type] [description]
	 */
    public function home()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }

        return view('static_pages/home', compact('feed_items'));
    }

    /**
     * the page of help
     * @return [type] [description]
     */
    public function help()
    {
    	return view('static_pages.help');
    }


    /**
     * the static page of about
     * @return [type] [description]
     */
    public function about()
    {
    	return view('static_pages.about');
    }


}
