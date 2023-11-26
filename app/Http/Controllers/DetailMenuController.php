<?php

namespace App\Http\Controllers;

use App\Models\detail_menu;
use Illuminate\Http\Request;
use App\Models\Menu;

class DetailMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $menu = Menu::all()->where("id",$id);

        return view('user.menu_detail', compact('menu'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
