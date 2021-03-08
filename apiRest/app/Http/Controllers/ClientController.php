<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function listAll()
    {
        $client = Client::all();
        return response()->json($client);
    }

    public function create(Request $request)
    {
        $client = new Client;
        $client->client_code= $request->client_code;
        $client->client_name= $request->client_name;
        $client->client_status= $request->client_status;
        

        $client->save();

        return response()->json($client);
    }

    public function listClient($id)
    {
        $client = Client::find($id);

        return response()->json($client);
    }

    public function update(Request $request, $id)
    {
        
        $client= Client::find($id);
        
        $client->name = $request->input('client_code');
        $client->price = $request->input('client_name');
        $client->description = $request->input('client_status');
        $client->save();
        return response()->json($client);
    }

    public function delete($id)
    {
        $client = Client::find($id);
        $client->delete();

        return response()->json('Command deleted successfully');
    }
}
