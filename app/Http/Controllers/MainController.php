<?php

namespace App\Http\Controllers;

use App\Services\BooksServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    private $images;

    public function __construct(BooksServices $booksServices)
    {
        $this->images = $booksServices;
    }

    public function index() {
        $images = $this->images->all();

        return view('books', ['imagesInView'=> $images]);
    }


    public function oneBook($id) {
        $myImage = $this->images->one($id);

        return view('one_book', ['imageInView' => $myImage]);
    }

    public function edit($id) {
        $image = $this->images->one($id);

        return view('edit', ['imageInView' => $image]);
    }

    public function update(Request $request, $id) {

        $this->images->update($id, $request->image);

        return redirect('/admin');
    }


    public function create() {
        return view('create');
    }


    public function store(Request $request) {
        $image = $request->file('image'); // name="image" input
         // name="image" input
        $this->images->add($image);
         //dd($request); //book_name, description_name

        return redirect('/admin');
    }

    public function delete($id) {
        $this->images->delete($id);

        return redirect('/admin');
    }


//    public function admin() {
//
//        $myImages= $this->images->all();
//
//        return view('admin', ['imagesInView'=> $myImages]);
//    }




}
