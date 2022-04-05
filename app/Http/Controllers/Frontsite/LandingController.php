<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;

//use library
use Illuminate\Support\Facades\storage;
use Symfony\Component\HttpFoundation\Response;

//user everything here
//use case
//Jika tidak perlu Login, maka tidak perlu di use dan dideklarasi di Construct
// use Auth;

//model here
use App\Models\User;
use App\Models\Operational\Doctor;
use App\Models\MasterData\Specialist;

//thirdparty packages



class LandingController extends Controller
{
    //construct adalah yang dijalankan pertama sekali
    //  public function __construct()
    //  {
    //     //hanya yang Login yang bisa akses
    //      $this->middleware('auth');
    //  }


    public function index()
    {
        return view('pages.frontsite.landing-page.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort(404);
    }
}