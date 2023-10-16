<?php
    include_once 'models/ProductModel.php';
class ProductController{
    public function index(){
        $items = Product::all();
        // dd($items);
        include_once 'views/products/index.php';
    }
    public function show(){
        $id = $_REQUEST['id'];
        $item = Product::find( $id );
        include_once 'views/products/show.php';
    }
    public function create(){
        include_once 'views/products/create.php';
    }
    public function store(){
        // dd($_REQUEST);
        $data = [
            'name' => $_REQUEST['name'],
            'price' => $_REQUEST['price']
        ];
        Product::save($data);
        header("Location: index.php?controller=product&action=index");
            die();
        // Chuyen huong ve danh sach
    }
    public function edit(){
        $id = $_REQUEST['id'];
        $item = Product::find( $id );
        // dd($item);
        include_once 'views/products/edit.php';
    }
    public function update(){
        $id = $_REQUEST['id'];
        $data = [
            'name' => $_REQUEST['name'],
            'price' => $_REQUEST['price'],
        ];
        Product::update($id,$data);

        // Chuyen huong ve danh sach
        header("Location: index.php?controller=product&action=index");
        die();
        // Chuyen huong ve danh sach
    }
    
    public function destroy(){
        $id = $_REQUEST['id'];
        Product::delete($id);
        header("Location: index.php?controller=product&action=index");
        die();
        // Chuyen huong ve danh sach
    }
}