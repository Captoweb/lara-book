<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\BooksServices;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    private $images;

    public function __construct(BooksServices $booksServices)
    {
        $this->images = $booksServices;
    }

    public function admin() {

        $myImages= $this->images->all();

        return view('admin', ['imagesInView'=> $myImages]);
    }

}
