<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        $tasks = [
            'Aller faire les courses',
            'Aller à la gym',
            'Dormir'
        ];
        return view('home', [
            'tasks' => $tasks,
            'test' => "Mon test"
        ]);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
