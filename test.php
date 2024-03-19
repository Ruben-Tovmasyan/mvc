<?php
require_once 'model.php';
require_once 'view.php';
require_once 'controller.php';
use PHPUnit\Framework\TestCase;

class MVCTest extends TestCase {
    public function testUserModel() {
        $model = new UserModel();
        $model->setUsername('john_doe');
        $this->assertEquals('john_doe', $model->getUsername());
    }

    public function testUserView() {
        $view = new UserView();
        $expectedOutput = "Username: john_doe";
        $this->expectOutputString($expectedOutput);
        $view->displayUsername('john_doe');
    }

    public function testUserController() {
        $model = $this->createMock(UserModel::class);
        $view = $this->createMock(UserView::class);

        $model->expects($this->once())
              ->method('getUsername')
              ->willReturn('john_doe');

        $view->expects($this->once())
             ->method('displayUsername')
             ->with('john_doe');

        $controller = new UserController($model, $view);
        $controller->updateUser();
    }
}
?>
