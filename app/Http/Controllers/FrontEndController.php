<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    //Manejar dominios externos a la plataforma
    public function inSubDomain($subdomain, $page=NULL)
    {
        return view('inicio', [ 
            'type' => 'internal_subdomain',
            'subdomain' => $subdomain,
        ]);
    }

    //Manejar dominios externos a la plataforma
    public function outDomain($domain, $page=NULL)
    {
        $array_url = explode('.', $domain);
        if(count($array_url) === 2){
            return view('inicio', [ 
                'type' => 'external_domain',
                'domain' => $array_url[0].'.'.$array_url[1],
            ]);
        }else if(count($array_url) === 3){
            if($array_url[0] === 'www'){
                return view('inicio', [ 
                    'type' => 'external_domain',
                    'domain' => $array_url[0].'.'.$array_url[1].'.'.$array_url[2],
                ]);
            }else{
                return view('inicio', [ 
                    'type' => 'external_subdomain_domain',
                    'subdomain' => $array_url[0],
                    'domain' => $array_url[1].'.'.$array_url[2],
                ]);
            }
        }
    }
}
