<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page.
     * @return \Illuminate\View\View
     */

    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the about us page.
     * @return \Illuminate\View\View
     */
    
     public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the products index page.
     * @return \Illuminate\View\View
     */
    
     public function productsIndex()
    {
        return view('pages.products.index');
    }

    // Removed: public function projects() - as requested

    /**
     * Display the certificates page.
     * @return \Illuminate\View\View
     */
    
     public function certificates()
    {
        return view('pages.certificates');
    }

    /**
     * Display the contact form page.
     * @return \Illuminate\View\View
     */

     public function contact()
    {
        return view('pages.contact');
    }
}
