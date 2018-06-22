<?php

namespace application\models;

use application\core\Model;
use Imagick;

class Admin extends Model {

	public $error;

	public function loginValidate($post) {
		$config = require 'application/config/admin.php';
		if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
			$this->error = 'Логін, або пароль вказані невірно';
			return false;
		}
		return true;
	}

	public function postValidate($post, $type) {
		$nameLen = iconv_strlen($post['name']);
		$descriptionLen = iconv_strlen($post['description']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Назва повинна містити від 3 до 100 символів';
			return false;
		} elseif ($descriptionLen < 3 or $descriptionLen > 100) {
			$this->error = 'Описание должно содержать от 3 до 100 символов';
			return false;
		} elseif ($textLen < 10 or $textLen > 5000) {
			$this->error = 'Опис повинен містити від 3 до 5000 символів';
			return false;
		}
		if (empty($_FILES['img']['tmp_name']) and $type == 'add') {
			$this->error = 'Зображення не вибрано';
			return false;
		}
		return true;
	}

	public function postAdd($post) {
		$params = [
			'id' => '',
			'name' => $post['name'],
			'description' => $post['description'],
			'text' => $post['text'],
		];
		$this->db->query('INSERT INTO posts VALUES (:id, :name, :description, :text)', $params);
		return $this->db->lastInsertId();
	}

	public function postEdit($post, $id) {
		$params = [
			'id' => $id,
			'name' => $post['name'],
			'description' => $post['description'],
			'text' => $post['text'],
		];
		$this->db->query('UPDATE posts SET name = :name, description = :description, text = :text WHERE id = :id', $params);
	}

	public function postUploadImage($path, $id) {
		$img = new Imagick($path);
		$img->cropThumbnailImage(1080, 600);
		$img->setImageCompressionQuality(80);
		$img->writeImage('public/materials/posts/'.$id.'.jpg');
	}

	public function isPostExists($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM posts WHERE id = :id', $params);
	}

	public function postDelete($id) {
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM posts WHERE id = :id', $params);
		unlink('public/materials/posts/'.$id.'.jpg');
	}

	public function postData($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM posts WHERE id = :id', $params);
	}
///////////////////////////////BOOK//////////////////////////////////////////////////////
    
    public function bookValidate($post, $type) {
		$nameLen = iconv_strlen($post['name']);
		$authorLen = iconv_strlen($post['author']);
        $editionLen = iconv_strlen($post['edition']);
        $year_editionLen = iconv_strlen($post['year_edition']);
        $languageLen = iconv_strlen($post['language']);
		$descriptionLen = iconv_strlen($post['description']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Назва повинна містити від 3 до 100 символів';
			return false;
		} elseif ($authorLen < 3 or $authorLen > 50) {
			$this->error = "Ім'я автора повино містити від 3 до 50 символів";
			return false;
		}elseif ($editionLen < 3 or $editionLen > 100) {
			$this->error = "Назва видавництва повино містити від 3 до 50 символів";
			return false;
		}elseif ($year_editionLen < 4 or $year_editionLen > 5) {
			$this->error = "Рік видання повинен містити від 4 ";
			return false;
		}elseif ($languageLen < 3 or $languageLen > 100) {
			$this->error = "Мова ввдена неправельно";
			return false;
		} elseif ($descriptionLen < 10 or $descriptionLen > 5000) {
			$this->error = 'Опис повинен містити від 3 до 5000 символів';
			return false;
		} if (empty($_FILES['img']['tmp_name']) and $type == 'addbook') {
			$this->error = 'Зображення не вибрано';
			return false;
		}
		return true;
	}

    public function bookAdd($post) {
        $params = [
            'id' => '',
            'name' => $post['name'],
            'author' => $post['author'],
            'edition' => $post['edition'],
            'year_edition' => $post['year_edition'],
            'language' => $post['language'],
            'description' => $post['description'],
        ];
        $this->db->query('INSERT INTO books VALUES (:id, :name, :author, :edition, :year_edition, :language,  :description)', $params);
        return $this->db->lastInsertId();
    }

    public function bookEdit($post, $id) {
        $params = [
            'id' => $id,
            'name' => $post['name'],
            'author' => $post['author'],
            'edition' => $post['edition'],
            'year_edition' => $post['year_edition'],
            'language' => $post['language'],
            'description' => $post['description'],
        ];
        $this->db->query('UPDATE books SET name = :name, author = :author, edition = :edition, year_edition = :year_edition, language = :language, description = :description WHERE id = :id', $params);
    }

    public function isBookExists($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->column('SELECT id FROM books WHERE id = :id', $params);
    }

    public function bookDelete($id) {
        $params = [
            'id' => $id,
        ];
        $this->db->query('DELETE FROM books WHERE id = :id', $params);
        unlink('public/books/'.$id.'.jpg');
    }

    public function bookData($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->row('SELECT * FROM books WHERE id = :id', $params);
    }

    public function bookUploadImage($path, $id) {
        $img = new Imagick($path);
        $img->cropThumbnailImage(220, 260);
        $img->setImageCompressionQuality(80);
        $img->writeImage('public/books/'.$id.'.jpg');
    }
    
///////////////////////////////BOOK//////////////////////////////////////////////////////
    
    
    public function mutantValidate($post, $type) {
		$nameLen = iconv_strlen($post['name']);
		$factsLen = iconv_strlen($post['facts']);
		$descriptionLen = iconv_strlen($post['description']);
		$battlLen = iconv_strlen($post['battl']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Назва повинна містити від 3 до 100 символів';
			return false;
		} elseif ($factsLen < 5 or $factsLen > 5000) {
			$this->error = 'Опис должно содержать от 3 до 5000 символов';
			return false;
		} elseif ($descriptionLen < 5 or $descriptionLen > 5000) {
			$this->error = 'Опис должно содержать от 3 до 5000 символов';
			return false;
		} elseif ($battlLen < 5 or $battlLen > 5000) {
			$this->error = 'Опис должно содержать от 3 до 5000 символов';
			return false;
		} if (empty($_FILES['img']['tmp_name']) and $type == 'addmutant') {
			$this->error = 'Зображення не вибрано';
			return false;
		}
		return true;
	}

    public function mutantAdd($post) {
        $params = [
            'id' => '',
            'name' => $post['name'],
            'facts' => $post['facts'],
            'description' => $post['description'],
            'battl' => $post['battl'],
            ];
        $this->db->query('INSERT INTO mutants VALUES (:id, :name, :facts, :description, :battl)', $params);
        return $this->db->lastInsertId();
    }

    public function mutantEdit($post, $id) {
		$params = [
			'id' => $id,
			'name' => $post['name'],
			'facts' => $post['facts'],
			'description' => $post['description'],
			'battl' => $post['battl'],
		];
		$this->db->query('UPDATE mutants SET name = :name, facts = :facts, description = :description, battl = :battl WHERE id = :id', $params);
	}
    

    public function isMutantExists($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->column('SELECT id FROM mutants WHERE id = :id', $params);
    }

    public function mutantDelete($id) {
        $params = [
            'id' => $id,
        ];
        $this->db->query('DELETE FROM mutants WHERE id = :id', $params);
        unlink('public/materials/mutants/'.$id.'.jpg');
    }

    public function mutantData($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->row('SELECT * FROM mutants WHERE id = :id', $params);
    }

    public function mutantUploadImage($path, $id) {
        $img = new Imagick($path);
        $img->cropThumbnailImage(210, 270);
        $img->setImageCompressionQuality(80);
        $img->writeImage('public/materials/mutants/'.$id.'.jpg');
    }
    
///////////////////////////////CITY//////////////////////////////////////////
    
    public function cityValidate($post, $type) {
		$nameLen = iconv_strlen($post['name']);
		$stateLen = iconv_strlen($post['state']);
		$placeLen = iconv_strlen($post['place']);
		$statusLen = iconv_strlen($post['status']);
		$threatsLen = iconv_strlen($post['threats']);
		$appearanceLen = iconv_strlen($post['appearance']);
		$descriptionLen = iconv_strlen($post['description']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Назва повинна містити від 3 до 100 символів';
			return false;
		} elseif ($stateLen < 3 or $stateLen > 100) {
			$this->error = 'Держава должно содержать от 3 до 100 символов';
			return false;
		} elseif ($placeLen < 3 or $placeLen > 100) {
			$this->error = 'Місце должно содержать от 3 до 100 символов';
			return false;
		} elseif ($statusLen < 3 or $statusLen > 100) {
			$this->error = 'Статус должно содержать от 3 до 100 символов';
			return false;
		} elseif ($threatsLen < 3 or $threatsLen > 200) {
			$this->error = 'Загроза должно содержать от 3 до 100 символов';
			return false;
		} elseif ($appearanceLen < 3 or $appearanceLen > 1000) {
			$this->error = 'Описання в книгах должно содержать от 3 до 100 символов';
			return false;
		} if ($descriptionLen < 10 or $descriptionLen > 5000) {
			$this->error = 'Опис повинен містити від 3 до 5000 символів';
			return false;
		}
		return true;
	}

    public function cityAdd($post) {
		$params = [
			'id' => '',
			'name' => $post['name'],
			'state' => $post['state'],
			'place' => $post['place'],
			'status' => $post['status'],
			'threats' => $post['threats'],
			'appearance' => $post['appearance'],
			'description' => $post['description'],
		];
		$this->db->query('INSERT INTO city VALUES (:id, :name, :state, :place, :status, :threats, :description, :appearance)', $params);
		return $this->db->lastInsertId();
	}

    public function cytiEdit($post, $id) {
        $params = [
            'id' => $id,
            'name' => $post['name'],
            'state' => $post['state'],
			'place' => $post['place'],
			'status' => $post['status'],
			'threats' => $post['threats'],
			'appearance' => $post['appearance'],
			'description' => $post['description'],
        ];
        $this->db->query('UPDATE cyti SET name = :name, state = :state, place = :place, status = :status, threats = :threats, description = :description, appearance = :appearance WHERE id = :id', $params);
    }
    
    public function isCityExists($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->column('SELECT id FROM city WHERE id = :id', $params);
    }

    public function cityDelete($id) {
        $params = [
            'id' => $id,
        ];
        $this->db->query('DELETE FROM city WHERE id = :id', $params);
    }

    public function cityData($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->row('SELECT * FROM city WHERE id = :id', $params);
    }
    
    ///////////////////////////////CITY//////////////////////////////////////////
    
    public function weaponValidate($post, $type) {
		$nameLen = iconv_strlen($post['name']);
		$classLen = iconv_strlen($post['class']);
		$damageLen = iconv_strlen($post['damage']);
		$scoreLen = iconv_strlen($post['score']);
		$shooting_modeLen = iconv_strlen($post['shooting_mode']);
		$ammunitionLen = iconv_strlen($post['ammunition']);
		$modificationsLen = iconv_strlen($post['modifications']);
		$priceLen = iconv_strlen($post['price']);
		$descriptionLen = iconv_strlen($post['description']);
		$advantagesLen = iconv_strlen($post['advantages']);
		$limitationsLen = iconv_strlen($post['limitations']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Назва повинна містити від 3 до 100 символів';
			return false;
		} elseif ($classLen < 3 or $classLen > 50) {
			$this->error = 'Клас зброї повинен містити від 3 до 50 символів';
			return false;
		} elseif ($damageLen < 3 or $damageLen > 30) {
			$this->error = 'Урон зброї повинен містити від 3 до 30 символів';
			return false;
		} elseif ($scoreLen < 0 or $scoreLen > 20) {
			$this->error = 'Кількість патронів в магазині повинен містити від 1 до 4 символів';
			return false;
		} elseif ($shooting_modeLen < 3 or $shooting_modeLen > 30) {
			$this->error = 'Режим стрільби повинен містити від 3 до 30 символів';
			return false;
		} elseif ($ammunitionLen < 3 or $ammunitionLen > 50) {
			$this->error = 'Описання набоїв повинен містити від 3 до 50 символів';
			return false;
		} elseif ($modificationsLen < 3 or $modificationsLen > 100) {
			$this->error = 'Описання в книгах должно содержать от 3 до 100 символов';
			return false;
		} elseif ($priceLen < 1 or $priceLen > 4) {
			$this->error = 'Описання в книгах должно содержать от 3 до 100 символов';
			return false;
		} elseif($descriptionLen < 10 or $descriptionLen > 5000) {
			$this->error = 'Опис повинен містити від 3 до 5000 символів';
			return false;
		} elseif($advantagesLen < 10 or $advantagesLen > 500) {
			$this->error = 'Опис переваг повинен містити від 3 до 500 символів';
			return false;
		}if($limitationsLen < 10 or $limitationsLen > 500) {
			$this->error = 'Опис недоліків повинен містити від 3 до 500 символів';
			return false;
		}
		return true;
	}

    public function weaponAdd($post) {
		$params = [
			'id' => '',
			'name' => $post['name'],
			'class' => $post['class'],
			'damage' => $post['damage'],
			'score' => $post['score'],
			'shooting_mode' => $post['shooting_mode'],
			'ammunition' => $post['ammunition'],
			'modifications' => $post['modifications'],
			'price' => $post['price'],
			'description' => $post['description'],
			'advantages' => $post['advantages'],
			'limitations' => $post['limitations'],
		];
		$this->db->query('INSERT INTO weapon VALUES (:id, :name, :class, :damage, :score, :shooting_mode, :ammunition, :modifications, :price, :description, :advantages , :limitations)', $params);
		return $this->db->lastInsertId();
	}
    
    public function weaponEdit($post, $id) {
		$params = [
			'id' => '',
			'name' => $post['name'],
			'class' => $post['class'],
			'damage' => $post['damage'],
			'score' => $post['score'],
			'shooting_mode' => $post['shooting_mode'],
			'ammunition' => $post['ammunition'],
			'modifications' => $post['modifications'],
			'price' => $post['price'],
			'description' => $post['description'],
			'advantages' => $post['advantages'],
			'limitations' => $post['limitations'],
		];
		$this->db->query('UPDATE weapon SET name = :name, class = :class, damage = :damage, score = :score, shooting_mode = :shooting_mode, ammunition = :ammunition, modifications = :modifications, price = :price, description = :description, advantages = :advantages, limitations = :limitations WHERE id = :id', $params);
	}

	public function weaponUploadImage($path, $id) {
		$img = new Imagick($path);
		$img->cropThumbnailImage(250, 132);
		$img->setImageCompressionQuality(80);
		$img->writeImage('public/materials/weapons/'.$id.'.jpg');
	}

	public function isWeaponExists($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM weapon WHERE id = :id', $params);
	}

	public function weaponDelete($id) {
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM weapon WHERE id = :id', $params);
		unlink('public/materials/weapons/'.$id.'.jpg');
	}

	public function weaponData($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM weapon WHERE id = :id', $params);
	}
    
    ////////////////GAME
    
    public function gameValidate($post, $type) {
		$nameLen = iconv_strlen($post['name']);
		$yearLen = iconv_strlen($post['year']);
		$developerLen = iconv_strlen($post['developer']);
		$publicLen = iconv_strlen($post['public']);
		$type_publicLen = iconv_strlen($post['type_public']);
		$platformLen = iconv_strlen($post['platform']);
		$lan_interfaceLen = iconv_strlen($post['lan_interface']);
		$lan_voiceLen = iconv_strlen($post['lan_voice']);
		$ocLen = iconv_strlen($post['oc']);
		$processorLen = iconv_strlen($post['processor']);
		$ramLen = iconv_strlen($post['ram']);
		$video_cardLen = iconv_strlen($post['video_card']);
		$memoryLen = iconv_strlen($post['memory']);
		$descriptionLen = iconv_strlen($post['description']);
		$featuresLen = iconv_strlen($post['features']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Назва повинна містити від 3 до 100 символів';
			return false;
		} elseif ($yearLen < 1 or $yearLen > 4) {
			$this->error = "Рік повинен містити від 1 до 4 символів";
			return false;
		} elseif ($developerLen < 3 or $developerLen > 50) {
			$this->error = "Розробник повинен містити від 3 до 50 символів";
			return false;
		} elseif ($type_publicLen < 3 or $type_publicLen > 50) {
			$this->error = "Тип видання повино містити від 3 до 50 символів";
			return false;
		} elseif ($platformLen < 3 or $platformLen > 50) {
			$this->error = "Платформа повина містити від 3 до 50 символів";
			return false;
		} elseif ($publicLen < 3 or $publicLen > 50) {
			$this->error = "Видавець повинен містити від 3 до 50 символів";
			return false;
		} elseif ($lan_interfaceLen < 3 or $lan_interfaceLen > 50) {
			$this->error = "Мова інтерфейсу повина містити від 3 до 50 символів";
			return false;
		} elseif ($lan_voiceLen < 3 or $lan_voiceLen > 50) {
			$this->error = "Мова озвучки повина містити від 3 до 50 символів";
			return false;
		} elseif ($ocLen < 3 or $ocLen > 50) {
			$this->error = "Операційна система повина містити від 3 до 50 символів";
			return false;
		} elseif ($processorLen < 3 or $processorLen > 50) {
			$this->error = "Процесор повинен містити від 3 до 50 символів";
			return false;
		} elseif ($ramLen < 1 or $ramLen > 2) {
			$this->error = "Оперативна пам'ять повина містити від 1 до 2 символів";
			return false;
		} elseif ($video_cardLen < 3 or $video_cardLen > 50) {
			$this->error = "Відеокарта повина містити від 3 до 50 символів";
			return false;
		} elseif ($memoryLen < 1 or $memoryLen > 2) {
			$this->error = "Пам'ять на диску повина містити від 1 до 2 символів";
			return false;
		} elseif ($descriptionLen < 10 or $descriptionLen > 5000) {
			$this->error = 'Описння повинно містити від 3 до 5000 символів';
			return false;
		} elseif ($featuresLen < 10 or $featuresLen > 5000) {
			$this->error = 'Особливості ігри повинні містити від 3 до 5000 символів';
			return false;
		} if (empty($_FILES['img']['tmp_name']) and $type == 'addgame') {
			$this->error = 'Зображення не вибрано';
			return false;
		}
		return true;
	}
    
    public function gameAdd($post) {
        $params = [
            'id' => '',
            'name' => $post['name'],
            'year' => $post['year'],
            'developer' => $post['developer'],
            'public' => $post['public'],
            'type_public' => $post['type_public'],
            'platform' => $post['platform'],
            'lan_interface' => $post['lan_interface'],
            'lan_voice' => $post['lan_voice'],
            'oc' => $post['oc'],
            'processor' => $post['processor'],
            'ram' => $post['ram'],
            'video_card' => $post['video_card'],
            'memory' => $post['memory'],
            'description' => $post['description'],
            'features' => $post['features'],
        ];
        $this->db->query('INSERT INTO games VALUES (:id, :name, :year, :developer, :public, :type_public, :platform, :lan_interface, :lan_voice, :oc, :processor, :ram, :video_card, :memory, :description, :features)', $params);
        return $this->db->lastInsertId();
    }
    
    public function gameEdit($post, $id) {
        $params = [
            'id' => '',
            'name' => $post['name'],
            'year' => $post['year'],
            'developer' => $post['developer'],
            'public' => $post['public'],
            'type_public' => $post['type_public'],
            'platform' => $post['platform'],
            'lan_interface' => $post['lan_interface'],
            'lan_voice' => $post['lan_voice'],
            'oc' => $post['oc'],
            'processor' => $post['processor'],
            'ram' => $post['ram'],
            'video_card' => $post['video_card'],
            'memory' => $post['memory'],
            'description' => $post['description'],
            'features' => $post['features'],
        ];
        $this->db->query('UPDATE games SET name = :name, year = :year, developer = :developer, public = :public, type_public = :type_public, platform = :platform, lan_interface = :lan_interface, lan_voice = :lan_voice, oc = :oc, processor = :processor, ram = :ram, video_card = :video_card, memory = :memory, description = :description, features = :features WHERE id = :id', $params);
    }

    public function isGameExists($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->column('SELECT id FROM games WHERE id = :id', $params);
    }

    public function gameDelete($id) {
        $params = [
            'id' => $id,
        ];
        $this->db->query('DELETE FROM games WHERE id = :id', $params);
        unlink('public/materials/games/'.$id.'.jpg');
    }

    public function gameData($id) {
        $params = [
            'id' => $id,
        ];
        return $this->db->row('SELECT * FROM games WHERE id = :id', $params);
    }
    
    public function gameUploadImage($path, $id) {
        $img = new Imagick($path);
        $img->cropThumbnailImage(220, 260);
        $img->setImageCompressionQuality(80);
        $img->writeImage('public/materials/games/'.$id.'.jpg');
    }
    
}
