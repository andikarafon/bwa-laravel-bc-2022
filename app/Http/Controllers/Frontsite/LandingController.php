<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;

//use library
use Illuminate\Support\Facades\storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

//user everything here
use Auth;

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
        
        $specialist = Specialist::orderBy('name', 'desc')->limit(5)->get();
        $doctor = Doctor::orderBy('created_at', 'desc')->limit(4)->get();

        return view('pages.frontsite.landing-page.index', compact('doctor', 'specialist'));

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
        return abort(404);
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
