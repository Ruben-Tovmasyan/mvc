<?php
require_once 'model.php';
require_once 'view.php';

class UserController {
    private $model;
    private $view;

    public function __construct(UserModel $model, UserView $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function updateUser() {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $this->model->setUsername($username);
        }

        $this->view->displayUsername($this->model->getUsername());
        $this->view->displayForm();
    }
}
