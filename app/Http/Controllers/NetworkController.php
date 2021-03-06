<?php

namespace App\Http\Controllers;

use App\Network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $networks = Network::all();

//        return $clients;
        return view('IT.index', compact('networks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // delete
        $networks = Network::find($id);
        $networks->delete();

        // redirect
//        Session::flash('message', 'Successfully deleted the device!');
        return redirect()->back()->with('message', 'Network device is successfully deleted!');
    }

    /*
     * Custom (static) pages
     */
    public function map_indoor()
    {
        $networks = Network::all();

        return view('IT.map_indoor', compact('networks'));
    }

    public function map_outdoor()
    {
        $networks = Network::all();

        return view('IT.map_outdoor', compact('networks'));
    }

    public function topology()
    {
        $networks = Network::all();

        return view('IT.topology', compact('networks'));
    }


    /*
     * Bring Your Own Device
     */
    public function BringYourOwnDevice()
    {
        $networks = Network::all();

        return view('IT.byod', compact('networks'));
    }
}
