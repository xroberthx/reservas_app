<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client as Client;

class ClientController extends Controller
{	
	public function __construct(Client $client)
	{
		$this->client = $client;
	}

    public function index()
	{
		$data = array();
		
		/*$obj = new \stdClass;
		$obj->id = 1;
		$obj->title = "Sr.";
		$obj->name = "Robert";
		$obj->lastname = "Smith";
		$obj->email = "roberth@miclase.com";
		$data["clients"][] = $obj;
		
		$obj = new \stdClass;
		$obj->id = 2;
		$obj->title = "Sr.";
		$obj->name = "Jose";
		$obj->lastname = "Arenas";
		$obj->email = "jose@miclase.com";
		$data["clients"][] = $obj;*/
		$data['clients'] = $this->client->all();
		return view('/client/index',$data); /*return __METHOD__;*/
	}
	
    public function newClient()
	{
		$data = array();
		$data["modify"] = 0;
		return view('/client/form',$data); /*return __METHOD__;*/
	}
	
    public function create(Request $request, Client $client)
	{
		$data = array();
		$data["title"] = $request->input("title");
		$data["name"] = $request->input("name");
		$data["last_name"] = $request->input("last_name");
		$data["address"] = $request->input("address");
		$data["zip_code"] = $request->input("zip_code");
		$data["city"] = $request->input("city");
		$data["state"] = $request->input("state");
		$data["email"] = $request->input("email");
		
		$client->insert($data);
		return redirect('clients'); 
	}
	
    public function show($client_id)
	{
		$data = array();
		$data["modify"] = 1;
		$client_data = $this->client->find($client_id);
		
		$data["client_id"] = $client_data->id;
		$data["title"] = $client_data->title;
		$data["name"] = $client_data->name;
		$data["last_name"] = $client_data->last_name;
		$data["address"] = $client_data->address;
		$data["city"] = $client_data->city;
		$data["zip_code"] = $client_data->zip_code;
		$data["state"] = $client_data->state;
		$data["email"] = $client_data->email;
		
		return view('/client/form',$data); /*return __METHOD__.":".$client_id;*/
	}
    public function modify(Request $request, $client_id)
	{
		$client_data = $this->client->find($client_id);
		$client_data->title = $request->input("title");
		$client_data->name = $request->input("name");
		$client_data->last_name = $request->input("last_name");
		$client_data->address = $request->input("address");
		$client_data->zip_code = $request->input("zip_code");
		$client_data->city = $request->input("city");
		$client_data->state = $request->input("state");
		$client_data->email = $request->input("email");
		
		$client_data->save();
		
		return redirect('clients'); 
	}
	
}
