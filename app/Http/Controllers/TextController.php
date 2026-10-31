<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;

class TextController extends Controller
{
    // Получение всех книг для админки
    public function index()
    {
        $texts = Text::all();

        return view('admin', compact('texts'));
    }

    // Сохранение новой книги
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Text::create($validatedData); // Text это модель 

        return redirect()->route('author')
            ->with('success', 'Книга успешно добавлена!');
    }
}