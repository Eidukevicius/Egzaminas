<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        return view('pages.home',);
    }

    public function services(){
        $services = Service::all();
        return view('pages.all-service',compact('services'));
    }


        public function create()
        {
            return view('pages.add-service');
        }
    
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'address' => 'required|max:255',
                'director' => 'required|max:255',
            ]);
    
            Service::create($validatedData);
    
            return redirect('/services')->with('success', 'Servisas sėkmingai sukurtas!');
        }

        public function show($id)
        {
            $services = Service::findOrFail($id);
            return view('pages.show', compact('services'));
        }
        
        public function destroy($id)
        {
            $service = Service::find($id);
            $service->delete();
            return redirect('/services')->with('success', 'Įmonė ištrinta sėkmingai.');
        }
    
    
    }