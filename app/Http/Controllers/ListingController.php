<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all listings
    public function index(){
        return view('listings.index', [
            'listings'=> Listing::latest()->filter(request(['tag','search']))->paginate(4)
        ]);
    }
    //show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing'=> $listing
        ]);
    }
    //show create form
    public function create(){
        return view('listings.create');
    }

    //Store Listing Data
    public function store(Request $request){
        $formFields = $request->validate([
            'title'=>'required',
            'gym'=>['required', Rule::unique('Listings','gym')],
            'location' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($formFields);

        return redirect('/')->with ('message','Listing created successfully!');
    }
    //Show Edit Form
    public function edit(Listing $listing){
        return view('listings.edit',['listing'=>$listing]);
    }

    //Update Listing Data
    public function update(Request $request, Listing $listing){
        $formFields = $request->validate([
            'title'=>'required',
            'gym'=>'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        $listing->update($formFields);

        return back()->with ('message','Listing updated successfully!');
    }

    //Delete Listing
    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message','Listing deleted successfully');
    }
}
