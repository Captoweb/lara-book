<?php


namespace App\Services;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use  Illuminate\Database\Eloquent\Model;

class BooksServices
{
    public function all() {
        $images = DB::table('books')->select('*')->get();
        $myImages = $images->all();

        return $myImages;
    }

    public function one($id)
    {
        $image = DB::table('books')->select('*')->where('id', $id)->first();
        return $image;
        //dd($image); // вывожу все из таблицы
        //dd($image->pluck('image')->all()); // вывожу только картинку

    }

public function update($id, $newImage)
{
    $image = DB::table('books')->select('*')->where('id', $id)->first();
    Storage::delete($image->image);

    $filename = $newImage->store('uploads');

    DB::table('books')
        ->where('id', $id)
        ->update(
            [
                'image' => $filename,
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'introduction' => $_POST['introduction'],
                'author' => $_POST['author'],
                'publication_date' => $_POST['publication_date']
            ]);

    //DB::table('users')
    //            ->where('id', 1)
    //            ->update(array('votes' => 1));
}


    public function add($image)
    {

        DB::table('books')->insert(
            [
                'image' => $image->store('uploads'),
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'introduction' => $_POST['introduction'],
                'author' => $_POST['author'],
                'publication_date' => $_POST['publication_date']

            ] // сохранение в бд
        // ['image' => $filename, 'name' => 'book']
        );

        // ['image' => $filename, 'name' => 'book']

//    DB::table('books')->insert([
//        ['image' => 'filename'],
//        ['name' => $_POST['name']],
//        ['description' => $_POST['description']],
//        ['introduction' => $_POST['introduction']],
//        ['author' => $_POST['author']]
//        ['publication_date' => $_POST['publication_date']]
//
//    ]);

    }

    public function delete($id)
    {
        $image = $this->one($id);
        Storage::delete($image->image); // удаление картинки с сервера

        DB::table('books')->where('id', $id)->delete();
    }
}
