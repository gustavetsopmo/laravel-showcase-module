<?php

namespace Modules\Showcase\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ShowcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('showcase::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function about()
    {
        return view('showcase::about');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function contact(Request $request)
    {
        return view('showcase::contact');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function services(Request $request)
    {
        return view('showcase::services');
    }

}
