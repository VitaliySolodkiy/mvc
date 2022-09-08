<?php

namespace Core\Controllers;

use Core\Exceptions\NotFound;
use Core\Helpers\XlsxExt;
use Core\Models\Book;
use Core\Views\View;

use PhpOffice\PhpSpreadsheet\Spreadsheet;

class BookController extends Controller
{
    public function create()
    {
        View::render('books/create');
    }

    public function store()
    {
        $name = $_POST['name'];
        $price = $_POST['price'];

        $book = new Book(); //null
        $book->Name = $name;
        $book->Price = $price;

        $book->save(); //сохраняет в БД. у объекта свойства: name, price

        self::redirect('/');
    }
    public function delete()
    {
        $id = $_POST['id'];
        $book = Book::find($id); //у объекта свойства: id, name, price
        $book->remove();
        self::redirect('/');
    }

    public function edit()
    {
        $book = Book::find($_GET['id']);
        View::render('books/edit', compact('book'));
    }
    public function update()
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $id = $_POST['id'];

        $book = Book::find($id);
        $book->Name = $name;
        $book->Price = $price;

        $book->save();
        self::redirect('/');
    }

    public function show($id)
    {
        // echo $id; //тут уже можно развернуто вывести все данные по книге
        $book = Book::find($id);
        if (!$book) {
            throw new NotFound();
        }
    }

    public function download()
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1 style="color:red">Books</h1>');
        $books = Book::all();
        $mpdf->WriteHTML('<ol>');
        foreach ($books as $book) {

            $mpdf->WriteHTML("{$book->Name}, {$book->Price}");
        }
        $mpdf->WriteHTML('</ol>');

        $mpdf->Output('file.pdf', 'D');
    }
    public function excel()
    {
        $books = Book::all();
        $booksToExcel = [];

        foreach ($books as $book) {
            $booksToExcel[] = [$book->Name, $book->Price];
        }
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->fromArray($booksToExcel);

        /* foreach ($books as $index => $book) {
            $index + 1;
            $sheet->setCellValue("A$index", $book->Name);
            $sheet->setCellValue("B$index", $book->Price);
        } */



        $writer = new XlsxExt($spreadsheet);
        $writer->download('books');
    }
}
