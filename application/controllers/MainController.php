<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller {

	public function newsAction() {
		$pagination = new Pagination($this->route, $this->model->postsCount(),10);
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->postsList($this->route),
		];
		$this->view->render('Новини', $vars);
	}

	public function indexAction() {
		$this->view->render('Головна сторінка');
	}

	public function contactAction() {
		if (!empty($_POST)) {
			if (!$this->model->contactValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			mail('mr.maksymiv97@gmail.com', 'Повідомлення із блога', $_POST['name'].'|'.$_POST['email'].'|'.$_POST['text']);
			$this->view->message('success', 'Повідомлення відправлено Адміністратору');
		}
		$this->view->render('Контакти');
	}

	public function postAction() {
		$adminModel = new Admin;
		if (!$adminModel->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$vars = [
			'data' => $adminModel->postData($this->route['id'])[0],
		];
		$this->view->render('Пост', $vars);
	}

/////////////////////////////////////////////BOOK//////////////////////////////////////////////////////////
    
    public function booksAction() {
        $pagination = new Pagination($this->route, $this->model->booksCount(),10);
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->booksList($this->route),
        ];
        $this->view->render('Книнги', $vars);
	}
    
    public function bookAction() {
        $adminModel = new Admin;
        if (!$adminModel->isBookExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $vars = [
            'data' => $adminModel->bookData($this->route['id'])[0],
        ];
        $this->view->render('Книга', $vars);
	}
    
/////////////////////////////////////////////BOOK//////////////////////////////////////////////////////////

    public function mutantsAction() {
        $pagination = new Pagination($this->route, $this->model->mutantsCount(),10);
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->mutantsList($this->route),
        ];
        $this->view->render('Книнги', $vars);
	}
    
    public function mutantAction() {
        $adminModel = new Admin;
        if (!$adminModel->isMutantExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $vars = [
            'data' => $adminModel->mutantData($this->route['id'])[0],
        ];
        $this->view->render('Мутанти', $vars);
	}

    /////////////////////////////////////////////CITY//////////////////////////////////////////////////////////

    public function citysAction() {
        $pagination = new Pagination($this->route, $this->model->citysCount(),10);
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->citysList($this->route),
        ];
        $this->view->render('Міста', $vars);
	}
    
    public function cityAction() {
        $adminModel = new Admin;
        if (!$adminModel->isCityExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $vars = [
            'data' => $adminModel->cityData($this->route['id'])[0],
        ];
        $this->view->render('Місто', $vars);
	}
    
     /////////////////////////////////////////////WEAPON//////////////////////////////////////////////////////////
    
     public function weaponsAction() {
        $pagination = new Pagination($this->route, $this->model->weaponsCount(),10);
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->weaponsList($this->route),
        ];
        $this->view->render('Зброя', $vars);
	}
    
    public function weaponAction() {
        $adminModel = new Admin;
        if (!$adminModel->isWeaponExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $vars = [
            'data' => $adminModel->weaponData($this->route['id'])[0],
        ];
        $this->view->render('Зброя', $vars);
	}
    
    //////////////////////////////////////////GAME/////////////////////////////////////////
    
    public function gameAction() {
        $adminModel = new Admin;
        if (!$adminModel->isGameExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $vars = [
            'data' => $adminModel->GameData($this->route['id'])[0],
        ];
        $this->view->render('Ігра', $vars);
	}
    
    public function gamesAction() {
        $pagination = new Pagination($this->route, $this->model->gamesCount(),10);
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->gamesList($this->route),
        ];
        $this->view->render('Ігри', $vars);
	}
    
}