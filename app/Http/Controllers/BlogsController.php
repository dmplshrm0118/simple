<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GrahamCampbell\Markdown\Facades\Markdown;

class BlogsController extends Controller
{
    public function blogs($slug){
        $url = "C:\\xampp\htdocs\simple\\resources\blogs\\$slug.md"; 
        $content = file_get_contents($url);
        $show = Markdown::convertToHtml($content);
        return view('layouts.blog')->with('show', $show);
    }
}
