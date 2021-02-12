<?php

namespace app\site\controller;

use app\core\Controller;

class AboutController extends Controller {

    public function index() {
        $this->load('about/main');
    }

}
