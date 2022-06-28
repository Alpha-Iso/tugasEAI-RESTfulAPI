<?php

namespace App\Http\Controllers;

use App\Helpers\FormatterAPI;
use App\Http\Controllers\Controllers;
use App\Models\porche;
use Illuminate\Http\Request;

class porche_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_porche = porche::all();

        if ($data_porche){
            return FormatterAPI::createAPI(200,'Succes', $data_porche);

        }else{
            return FormatterAPI::createAPI(400,'Failed');
        }
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
        try {
            $request->validate([
                'car' => 'required',
                'team' => 'required',
                'driver' => 'required',
            ]);

            $porche = porche::create([
                'car' => $request->car,
                'team' => $request->team,
                'driver' => $request->driver,
            ]);

            $data_porche = porche::where('id', '=', $porche->id)->get();

            if ($data_porche){
                return FormatterAPI::createAPI(200,'Succes', $data_porche);

            }else{
                return FormatterAPI::createAPI(400,'Failed');
            }
        } catch (Exception $error) {
            return FormatterAPI::createAPI(400,'Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_porche = porche::where('id', '=', $id)->get();

            if ($data_porche){
                return FormatterAPI::createAPI(200,'Succes', $data_porche);

            }else{
                return FormatterAPI::createAPI(400,'Failed');
            }
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
        try {
            $request->validate([
                'car' => 'required',
                'team' => 'required',
                'driver' => 'required',
            ]);

            $porche = porche::findOrFail($id);

            $porche->update([
                'car' => $request->car,
                'team' => $request->team,
                'driver' => $request->driver,
            ]);

            $data_porche = porche::where('id', '=', $porche->id)->get();

            if ($data_porche){
                return FormatterAPI::createAPI(200,'Succes', $data_porche);

            }else{
                return FormatterAPI::createAPI(400,'Failed');
            }
        } catch (Exception $error) {
            return FormatterAPI::createAPI(400,'Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $porche = porche::findOrFail($id);

        $data_porche = $porche->delete();

        if ($data_porche){
            return FormatterAPI::createAPI(200,'Succes Delete');
        }else{
            return FormatterAPI::createAPI(400,'Failed');
        }
    }
}
