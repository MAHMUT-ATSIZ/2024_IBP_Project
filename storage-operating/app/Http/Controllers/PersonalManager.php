<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PersonalManager extends Controller
{
    function addPersonal() {
        return view('pages.addPersonal');
    }

    function updatePersonal() {
        return view('pages.updatePersonal');
    }

    function deletePersonal() {
        return view('pages.deletePersonal');
    }

    function showAllPersonals() {
        $personals = User::all();

        return view('pages.showAllPersonals', compact('personals'));
    }

    function addPersonalPost(Request $request) {
        $acceptableData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required'
        ]);

        $user = User::create([
            'email' => $acceptableData['email'],
            'password' => Hash::make($acceptableData['password']),
            'role' => $acceptableData['role']
        ]);

        if(!$user){
            return redirect(route('addPersonal'))->with('error', 'Kullanıcı eklenemedi, tekrar deneyin');
        }
        return redirect(route('addPersonal'))->with('success', 'Kullanıcı başarıyla eklendi');
    }

    function updatePersonalPost(Request $request) {
        $acceptableData = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'nullable|string|min:8',
            'role' => 'nullable|string',
        ]);

        $user = User::where('email', $acceptableData['email'])->firstOrFail();

        $updateData = [];
        if (isset($validatedData['password'])) {
            $updateData['password'] = Hash::make($validatedData['password']);
        }
        if (isset($acceptableData['role'])) {
            $updateData['role'] = $acceptableData['role'];
        }

        $user->update($updateData);

        return redirect(route('updatePersonal'))->with('success', 'Kullanıcı bilgileri başarıyla güncellendi.');
    }

    function deletePersonalPost(Request $request) {
        $acceptableData = $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $user = User::where('email', $acceptableData['email'])->firstOrFail();

        $user->delete();

        return redirect(route('deletePersonal'))->with('success', 'Kullanıcı başarıyla silindi.');
    }

}
