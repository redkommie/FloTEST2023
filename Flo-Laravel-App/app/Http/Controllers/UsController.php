<?php
namespace App\Http\Controllers;
use App\Models\UserData;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Http;


class UsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   return UserData::all();
        return response()->json($propietarios,Response::HTTP_OK);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return UserData::create([$request->all()]);
        //return response()->json(["message"=>"Registro creado"],201);
        $suscriptor = new UserData();
        $suscriptor->user_id = $request->input('user_id');
        $suscriptor->fullName = $request->input('fullName');
        $suscriptor->address = $request->input('address');
        $suscriptor->email = $request->input('email');
        $suscriptor->save();

        return response()->json([
            'status' =>true,
            'message' => 'sucess',            
        ], 201);
         
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $propitario = UserData::find($id);
        If(!empty($propitario))
        {
            return response()->json($propitario);
        }
        else{
            return response()->json(["message"=>"Propietario no encontrado(Show)"],404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserData $userData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $suscriptor = UserData::find($id);
        $suscriptor->update($request->all());
        return $suscriptor;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        return UserData::destroy($id);
    }
    /**
     * Search
     */
    public function search($name)
    {
        return UserData::where('fullName','like','%'.$name.'%')->get();
    }

    public function externalapicall()
    {
        $response = Http::get('https://64ce2ca50c01d81da3ee93b2.mockapi.io/api/propietarios');
    
        $jsonData = $response->json();
        //$mockapi = json_decode($response->body());

        dd($jsonData);
    }


}
?>