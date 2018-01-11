<?php

namespace App\Http\Controllers;

use App\Library\Poowf\Unicorn;
use App\Models\Company;
use App\Models\CompanyAddress;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCompanyAddressRequest;

class CompanyAddressController extends Controller
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
     * @param  \App\Models\CompanyAddress  $companyAddress
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyAddress $companyAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $ownedcompany = auth()->user()->ownedcompany;

        if($ownedcompany)
        {
            $companyaddress = $ownedcompany->address;
        }
        else
        {
            $companyaddress = null;
        }


        return view('pages.company.address.edit', compact('companyaddress', 'ownedcompany'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyAddress  $companyAddress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyAddressRequest $request)
    {
        $ownedcompany = auth()->user()->ownedcompany;
        $companyaddress = $ownedcompany->address;

        if(!$companyaddress)
        {
           $companyaddress = new CompanyAddress;
        }

        $companyaddress->fill($request->all());
        $ownedcompany->address()->save($companyaddress);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyAddress  $companyAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyAddress $companyAddress)
    {
        //
    }
}