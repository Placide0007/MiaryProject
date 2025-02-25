<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('comments')->get();
        return view("admin.UserList", compact("users"));
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{

    $user = User::findOrFail($id);

    $user->posts()->each(function ($post) {
        $post->comments()->delete();
        $post->delete();
    });

    $user->delete();

    return redirect()->route('users.index');
}

}
