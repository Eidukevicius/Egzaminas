<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mechanic;

class MechanicController extends Controller
{
    public function mechanics(){
        $mechanics = Mechanic::all();
        return view('pages.all-mechanic',compact('mechanics'));
    }


        public function create()
        {
            return view('pages.add-mechanic');
        }
    
        public function storeMechanic(Request $request)
        {
            $validatedData = $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'specialization' => 'required',
                'city' => 'required',
            ]);

            if(request()->hasFile('poster')){
                $poster = $request->file('poster')->store('public/images');
                $path = str_replace('public/','',$poster);
            }
    
            Mechanic::create([
            'firstname'=>request('firstname'),
            'lastname'=>request('lastname'),
            'specialization'=>request('specialization'),
            'city'=>request('city'),
            'poster'=>$path,
            ]);
    
            return redirect('/mechanics')->with('success', 'Servisas sėkmingai sukurtas!');
        }

        public function showMechanic($id)
        {
            $mechanics = Mechanic::findOrFail($id);
            return view('pages.show-mechanic', compact('mechanics'));
        }

        public function destroy($id)
        {
            $mechanic = Mechanic::find($id);
            $mechanic->delete();
            return redirect('/mechanics')->with('success', 'Įmonė ištrinta sėkmingai.');
        }
    
    }