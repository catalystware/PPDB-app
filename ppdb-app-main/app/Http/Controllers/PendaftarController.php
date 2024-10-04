<?php

namespace App\Http\Controllers;

use App\Models\User; // Import the User model
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    // Method to display the list of users
    public function index()
    {
        // Fetch all users from the database
        $users = User::all();

        // Return the view with the users data
        return view('pages.pendaftar.index', compact('users'));
    }

    // Existing methods
    public function form_cpd()
    {
        return view('pages.form.form-cpd');
    }

    public function form_wali()
    {
        return view('pages.form.form-wali');
    }
}
