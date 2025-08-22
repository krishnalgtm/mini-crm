<?php

namespace App\Http\Controllers;

use App\Mail\CompanyCreatedMail;
use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(10);
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

public function store(StoreCompanyRequest $request)
{
    $data = $request->validated();

    if ($request->hasFile('logo')) {
        $data['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $company = Company::create($data);

    // Send email notification
    Mail::to('admin@example.com')->send(new CompanyCreatedMail($company));

    return redirect()->route('companies.index')->with('success', 'Company created successfully.');
}

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

 public function update(StoreCompanyRequest $request, Company $company)
{
    $data = $request->validated();

    if ($request->hasFile('logo')) {
        $data['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $company->update($data);

    return redirect()->route('companies.index')->with('success', 'Company updated successfully');
}

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Company deleted successfully!');
    }
}
