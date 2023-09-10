<?php

require_once 'model/ContactModel.php';;

class Controller {

    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }

    public function index(){
        $tab = $this->contactModel->getAllContacts();
        include 'view/base.php';
    }
}


$controller = new Controller();

if (isset($_GET['page'])){
    echo "page";
}
else {

    $controller->index();
}