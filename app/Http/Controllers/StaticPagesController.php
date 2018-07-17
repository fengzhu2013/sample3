<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
	/**
	 * the page of home
	 * @return [type] [description]
	 */
    public function home()
    {
    	return view('static_pages.home');
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
