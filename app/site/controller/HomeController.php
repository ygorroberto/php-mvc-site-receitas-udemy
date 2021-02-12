<?php

namespace app\site\controller;

use app\core\Controller;
use app\site\model\ReceitaModel;

class HomeController extends Controller {

    public function index() {

        $receitaModel = new ReceitaModel();

        $receitas = [
            $receitaModel->lerHome(1, 4),
            $receitaModel->lerHome(2, 4)
        ];

        $this->load('home/main', ['listaReceitas' => $receitas]);
    }

}
