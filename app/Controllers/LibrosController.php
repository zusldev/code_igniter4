<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BooksModel;


class LibrosController extends Controller
{
  public function index()
  {
    $model = new BooksModel();
    $data['books'] = $model->orderBy('id', 'ASC')->findAll();
    return view('libros', $data);
  }

  public function crear()
  {
    return view('crear');
  }

  public function guardar()
  {
    $model = new BooksModel();
    $name = $this->request->getVar('name');
    if ($image = $this->request->getFile('image')) {
      $newName = $image->getRandomName();
      $image->move('/public/uploads/', $newName);
      $data = [
        'name' => $name,
        'image' => $newName
      ];
    }
    $model->insert($data);
    return redirect()->to('/libros');
  }
}
