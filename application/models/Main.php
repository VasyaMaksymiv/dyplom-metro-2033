<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public $error;

	public function contactValidate($post) {
		$nameLen = iconv_strlen($post['name']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 20) {
			$this->error = "Ім'я повинно містити від 3 до 20 символів";
			return false;
		} elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error = 'E-mail вказаний невірно';
			return false;
		} elseif ($textLen < 10 or $textLen > 500) {
			$this->error = 'Повідомлення повинно містити від 10 до 500 символів';
			return false;
		}
		return true;
	}

	public function postsCount() {
		return $this->db->column('SELECT COUNT(id) FROM posts');
	}

    public function booksCount() {
        return $this->db->column('SELECT COUNT(id) FROM books');
    }
    
    public function mutantsCount() {
        return $this->db->column('SELECT COUNT(id) FROM mutants');
    }
    
    public function citysCount() {
        return $this->db->column('SELECT COUNT(id) FROM city');
    }
    
    public function weaponsCount() {
        return $this->db->column('SELECT COUNT(id) FROM weapon');
    }
    
    public function gamesCount() {
        return $this->db->column('SELECT COUNT(id) FROM games');
    }
    
	public function postsList($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => (($route['page'] ?? 1) - 1) * $max,
		];
		return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
	}

    public function booksList($route) {
        $max = 10;
        $params = [
            'max' => $max,
            'start' => (($route['page'] ?? 1) - 1) * $max,
        ];
        return $this->db->row('SELECT * FROM books ORDER BY id DESC LIMIT :start, :max', $params);
    }
    
    public function mutantsList($route) {
        $max = 10;
        $params = [
            'max' => $max,
            'start' => (($route['page'] ?? 1) - 1) * $max,
        ];
        return $this->db->row('SELECT * FROM mutants ORDER BY id DESC LIMIT :start, :max', $params);
    }
    
    public function citysList($route) {
        $max = 10;
        $params = [
            'max' => $max,
            'start' => (($route['page'] ?? 1) - 1) * $max,
        ];
        return $this->db->row('SELECT * FROM city ORDER BY id DESC LIMIT :start, :max', $params);
    }
    
     public function weaponsList($route) {
        $max = 10;
        $params = [
            'max' => $max,
            'start' => (($route['page'] ?? 1) - 1) * $max,
        ];
        return $this->db->row('SELECT * FROM weapon ORDER BY id DESC LIMIT :start, :max', $params);
    }
    
    public function gamesList($route) {
        $max = 10;
        $params = [
            'max' => $max,
            'start' => (($route['page'] ?? 1) - 1) * $max,
        ];
        return $this->db->row('SELECT * FROM games ORDER BY id DESC LIMIT :start, :max', $params);
    }
    
}