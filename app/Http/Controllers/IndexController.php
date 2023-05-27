<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
class IndexController extends Controller
{
    public function index()
    {
        $reviews = Review::paginate(15); // Получение всех записей из таблицы reviews
        return view('welcome', compact('reviews'));
    }
}
