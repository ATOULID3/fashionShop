<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view ('admin.pages.clients', compact('clients'));
    }
    public function details(){
        return view ('admin.pages.clients-details');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'age' => 'required|date',
            'gender' => 'required|in:male,female',
            'city' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('clients', 'public');
        }

        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'gender' => $request->gender,
            'city' => $request->city,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('clients')->with('success', 'Client ajouté avec succès !');
    }
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients')->with('success', 'Client deleted successfully');
    }
}
