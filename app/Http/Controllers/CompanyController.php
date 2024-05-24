<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //show
    public function show($id){
        $company = Company::find($id);
        return view('pages.company.show', compact('company'));
    }

    //edit
    public function edit($id)
    {
        $company = Company::find($id);
        return view('pages.company.edit', compact('company'));
    }

    //update
    public function update(Request $request, Company $company){
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'address'   => 'required',
            'latitide'  => 'required',
            'lognitude' => 'required',
            'radius_km' => 'required',
            'time_in'   => 'required',
            'time_out'  => 'required',
        ]);

        $company->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'address'   => $request->address,
            'latitide'  => $request->latitide,
            'lognitude' => $request->lognitude,
            'radius_km' => $request->radius_km,
            'time_in'   => $request->time_in,
            'time_out'  => $request->time_out,
        ]);
        return redirect()->route('companies.show', 1)->with('success', 'Company updated successfully');
    }
}
