<?php
    class PagesManager {
        public $id;
        public $user;
        public $title;
        public $style;
        public $script;
        public $content;
        public $template;
        
        public function __construct() {
            $this->defID();
            $this->defUser();
            $this->title = 'Сайт тестирования'; //Обращение к полю класса , здесь: Общее название страниц
            $this->style = 'res/styles/'.$this->id.'.css'; //Страницы и стили должны иметь одно название My.php и My.css
            $this->script = 'res/scripts/'.$this->id.'.js'; //Страницы и стили должны иметь одно название My.php и My.js
            $this->content = 'sys/contents/'.$this->id.'.php';
            $this->template = 'res/templates/base.php';
        }
        
        private function defID() {
            $id = filter_input(INPUT_GET, 'id');
            if($id) {
                $this->id = $id;
            } else {
                $this->id = 'main';
            }
        }
        
        private function defUser() {
            if(isset($_SESSION['user'])) {
                $this->user = $_SESSION['user'];
            } else {
                $user = filter_input(INPUT_COOKIE, 'user');
                if($user) {
                    $this->user = $user;
                } else {
                    $this->user = 'Гость';
                }
            }
        }
    }

