<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stud;
class StudController extends Controller
{
    //
    public function addUser(Request $request){
       $user=Stud::create($request->all());
       return response($user,201);
    }
    public function searchUserById($id){
        $user=Stud::find($id);
        if(is_null($user)){
            return response()->json(['message' => 'User Not Found'],404);
        }
        return response()->json($user::find($id));
    }
    public function updateUser(Request $request,$id){
        $user=Stud::find($id);
        if(is_null($user)){
            return response()->json(['message' => 'User Not Found'],404);
        }
        $user->update($request->all());
        return response($user,200);
    }
    public function deleteUser(Request $request,$id){
        $user=Stud::find($id);
        if(is_null($user)){
            return response()->json(['message' => 'User Not Found'],404);
        } 
        $user->delete();
        return response()->json(null,204);
    }
}
