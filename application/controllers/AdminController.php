<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Main;

class AdminController extends Controller {

	public function __construct($route) {
		parent::__construct($route);
		$this->view->layout = 'admin';
	}

	public function loginAction() {
		if (isset($_SESSION['admin'])) {
			$this->view->redirect('admin/add');
		}
		if (!empty($_POST)) {
			if (!$this->model->loginValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			$_SESSION['admin'] = true;
			$this->view->location('admin/add');
		}
		$this->view->render('Вхід');
	}

	public function addAction() {
		if (!empty($_POST)) {
			if (!$this->model->postValidate($_POST, 'add')) {
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->postAdd($_POST);
			if (!$id) {
				$this->view->message('success', 'Помилка обробки запиту');
			}
			$this->model->postUploadImage($_FILES['img']['tmp_name'], $id);
			$this->view->message('success', 'Пост добавлений');
		}
		$this->view->render('Добавити пост');
	}

	public function editAction() {
		if (!$this->model->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		if (!empty($_POST)) {
			if (!$this->model->postValidate($_POST, 'edit')) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->postEdit($_POST, $this->route['id']);
			if ($_FILES['img']['tmp_name']) {
				$this->model->postUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
			}
			$this->view->message('success', 'Збережено');
		}
		$vars = [
			'data' => $this->model->postData($this->route['id'])[0],
		];
		$this->view->render('Редагувати пост', $vars);
	}

	public function deleteAction() {
		if (!$this->model->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$this->model->postDelete($this->route['id']);
		$this->view->redirect('admin/posts');
	}

	public function logoutAction() {
		unset($_SESSION['admin']);
		$this->view->redirect('admin/login');
	}

	public function postsAction() {
		$mainModel = new Main;
		$pagination = new Pagination($this->route, $mainModel->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $mainModel->postsList($this->route),
		];
		$this->view->render('Пости', $vars);
	}
    
// book
    
    public function addbookAction() {
		if (!empty($_POST)) {
			if (!$this->model->bookValidate($_POST, 'addbook')) {
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->bookAdd($_POST);
			if (!$id) {
				$this->view->message('success', 'Помилка обробки запиту');
			}
			$this->model->bookUploadImage($_FILES['img']['tmp_name'], $id);
			$this->view->message('success', 'Книга добовлена');
		}
		$this->view->render('Добавити книгу');

	}
    
    public function editbookAction() {
		if (!$this->model->isBookExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		if (!empty($_POST)) {
			if (!$this->model->bookValidate($_POST, 'editbook')) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->bookEdit($_POST, $this->route['id']);
			if ($_FILES['img']['tmp_name']) {
				$this->model->bookUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
			}
			$this->view->message('success', 'Збережено');
		}
		$vars = [
			'data' => $this->model->bookData($this->route['id'])[0],
		];
		$this->view->render('Редагувати книгу', $vars);
	}
    
    public function deletebookAction() {
        if (!$this->model->isBookExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $this->model->bookDelete($this->route['id']);
        $this->view->redirect('admin/books');
    }
    
    public function booksAction() {
        $mainModel = new Main;
        $pagination = new Pagination($this->route, $mainModel->booksCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->booksList($this->route),
        ];
        $this->view->render('Книги', $vars);
    }
    
// book
    
    public function addmutantAction() {
		if (!empty($_POST)) {
			if (!$this->model->mutantValidate($_POST, 'addmutant')) {
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->mutantAdd($_POST);
			if (!$id) {
				$this->view->message('success', 'Помилка обробки запиту');
			}
			$this->model->mutantUploadImage($_FILES['img']['tmp_name'], $id);
			$this->view->message('success', 'Мутант добовлений');
		}
		$this->view->render('Добавити мутанта');

	}
    
    public function editmutantAction() {
		if (!$this->model->isMutantExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		if (!empty($_POST)) {
			if (!$this->model->mutantValidate($_POST, 'editmutant')) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->mutantEdit($_POST, $this->route['id']);
			if ($_FILES['img']['tmp_name']) {
				$this->model->mutantUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
			}
			$this->view->message('success', 'Збережено');
		}
		$vars = [
			'data' => $this->model->mutantData($this->route['id'])[0],
		];
		$this->view->render('Редагувати мутанта', $vars);
	}
    
    public function deletemutantAction() {
        if (!$this->model->isMutantExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $this->model->mutantDelete($this->route['id']);
        $this->view->redirect('admin/mutants');
    }
    
    public function mutantsAction() {
        $mainModel = new Main;
        $pagination = new Pagination($this->route, $mainModel->mutantsCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->mutantsList($this->route),
        ];
        $this->view->render('Мутанти', $vars);
    }
    
    //city
    
    public function addcityAction() {
		if (!empty($_POST)) {
			if (!$this->model->cityValidate($_POST, 'addcity')) {
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->cityAdd($_POST);
			if (!$id) {
				$this->view->message('success', 'Помилка обробки запиту');
			}
			$this->view->message('success', 'Книга добовлена');
		}
		$this->view->render('Добавити Місто');

	}
    
    public function editcityAction() {
		if (!$this->model->iscityExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		if (!empty($_POST)) {
			if (!$this->model->cityValidate($_POST, 'editcity')) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->cityEdit($_POST, $this->route['id']);
			$this->view->message('success', 'Збережено');
		}
		$vars = [
			'data' => $this->model->cityData($this->route['id'])[0],
		];
		$this->view->render('Редагувати місто', $vars);
	}
    
    public function deletecityAction() {
        if (!$this->model->isCityExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $this->model->cityDelete($this->route['id']);
        $this->view->redirect('admin/citys');
    }
    
    public function citysAction() {
        $mainModel = new Main;
        $pagination = new Pagination($this->route, $mainModel->citysCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->citysList($this->route),
        ];
        $this->view->render('Міста', $vars);
    }
    
    //Weapon
    
    public function addweaponAction() {
		if (!empty($_POST)) {
			if (!$this->model->weaponValidate($_POST, 'addweapon')) {
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->weaponAdd($_POST);
			if (!$id) {
				$this->view->message('success', 'Помилка обробки запиту');
			}
            $this->model->weaponUploadImage($_FILES['img']['tmp_name'], $id);
			$this->view->message('success', 'Зброя добовлена');
		}
		$this->view->render('Добавити зброю');

	}
    
    public function editweaponAction() {
		if (!$this->model->isWeaponExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		if (!empty($_POST)) {
			if (!$this->model->weaponValidate($_POST, 'editweapon')) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->weaponEdit($_POST, $this->route['id']);
			if ($_FILES['img']['tmp_name']) {
				$this->model->weaponUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
			}
			$this->view->message('success', 'Збережено');
		}
		$vars = [
			'data' => $this->model->weaponData($this->route['id'])[0],
		];
		$this->view->render('Редагувати зброю', $vars);
	}

	public function deleteweaponAction() {
		if (!$this->model->isWeaponExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$this->model->weaponDelete($this->route['id']);
		$this->view->redirect('admin/weapons');
	}
    
    public function weaponsAction() {
		$mainModel = new Main;
		$pagination = new Pagination($this->route, $mainModel->weaponsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $mainModel->weaponsList($this->route),
		];
		$this->view->render('Зброя', $vars);
	}
    
    /////////////////////////////////game
    
    public function addgameAction() {
		if (!empty($_POST)) {
			if (!$this->model->gameValidate($_POST, 'addgame')) {
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->gameAdd($_POST);
			if (!$id) {
				$this->view->message('success', 'Помилка обробки запиту');
			}
			$this->model->gameUploadImage($_FILES['img']['tmp_name'], $id);
			$this->view->message('success', 'Ігра добовлена');
		}
		$this->view->render('Добавити ігру');

	}
    
    public function editgameAction() {
		if (!$this->model->isGameExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		if (!empty($_POST)) {
			if (!$this->model->gameValidate($_POST, 'editgame')) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->gameEdit($_POST, $this->route['id']);
			if ($_FILES['img']['tmp_name']) {
				$this->model->gameUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
			}
			$this->view->message('success', 'Збережено');
		}
		$vars = [
			'data' => $this->model->gameData($this->route['id'])[0],
		];
		$this->view->render('Редагувати ігру', $vars);
	}
    
    public function deletegameAction() {
        if (!$this->model->isGameExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $this->model->gameDelete($this->route['id']);
        $this->view->redirect('admin/games');
    }
    
    public function gamesAction() {
        $mainModel = new Main;
        $pagination = new Pagination($this->route, $mainModel->gamesCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->gamesList($this->route),
        ];
        $this->view->render('Ігри', $vars);
    }
}
