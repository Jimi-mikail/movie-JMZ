<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'password' => 'required|min:3|max:255',
            'nik' => 'required',
            'is_admin' => 'required',
            'sekolah' => 'max:255',
            'tempat' => 'max:255',
            'ttl' => 'max:255',
            'departemen' => 'max:255',
            'image' => 'max:255',
            'departemen_id' => 'max:255',
            'departemen_code' => 'max:255'
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('ttd-images');
        }
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/sikeu/users');
    }
}
