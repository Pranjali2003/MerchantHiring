<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;
class MerchantController extends Controller
{
    public function index()
    {
        $merchants = Merchant::all();
        
        return view('merchants_views.index',compact('merchants'));
    }

    public function create()
    {
        return view('merchants_views.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:merchants,email',
            'phone_number'=>'required|regex:/^\d{3}-\d{3}-\d{4}?$/',
            'address'=>'required|string|max:500',
            // Add other validation rules as needed
        ]);

        // Create a new merchant
        Merchant::create($request->all());

        return redirect()->route('merchants.index')->with('success', 'Merchant created successfully.');
    }

    public function show($id)
    {
        
        $merchant = Merchant::findOrFail($id);
        return view('merchants_views.show', compact('merchant'));
    }

    public function edit($id)
    {
    
        $merchant = Merchant::findOrFail($id);
        return view('merchants_views.update', compact('merchant'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:merchants,email',
            'phone_number'=>'required|regex:/^\d{3}-\d{3}-\d{4}?$/',
            'address'=>'required|string|max:500',
        ]);

        // Update the merchant
        $merchant = Merchant::findOrFail($id);
        $merchant->update($request->all());

        return redirect()->route('merchants.index')->with('success', 'Merchant updated successfully.');
    }

    public function destroy($id)
    {
        $merchant = Merchant::findOrFail($id);
        $merchant->delete();

        return redirect()->route('merchants.index')->with('success', 'Merchant deleted successfully.');
    }
}
