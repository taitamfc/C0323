<?php
    include_once 'models/UserModel.php';
    class UserController {
        // Lay toan bo du lieu
        public function index(){
            $items = User::all();
            include_once 'views/users/index.php';
        }
         // Xem chi tiet
        public function show(){
            $id = $_REQUEST['id'];
            $item = User::find( $id );
            include_once 'views/users/show.php';
        }
        // Hien thi form them moi
        public function create(){
            include_once 'views/users/create.php';
        }

        // Xu ly them moi
        public function store(){
            $data = [
                'name' => $_REQUEST['name'],
                'email' => $_REQUEST['email'],
            ];
            User::save($data);

            // Chuyen huong ve danh sach
            header("Location: index.php?controller=user&action=index");
            die();
        }

        // Hien thi form sua
        public function edit(){
            $id = $_REQUEST['id'];
            $item = User::find( $id );

            include_once 'views/users/edit.php';
        }

        // Xu ly sua
        public function update(){
            $id = $_REQUEST['id'];
            $data = [
                'name' => $_REQUEST['name'],
                'email' => $_REQUEST['email'],
            ];
            User::update($id,$data);

            // Chuyen huong ve danh sach
            header("Location: index.php?controller=user&action=index");
            die();
        }

        public function destroy(){
            $id = $_REQUEST['id'];
            User::delete($id);

            // Chuyen huong ve danh sach
            header("Location: index.php?controller=user&action=index");
            die();
        }
    }