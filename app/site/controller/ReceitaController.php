<?php

namespace app\site\controller;

use app\core\Controller;
use app\site\entities\Receita;
use app\site\model\ReceitaModel;
use app\site\model\CategoriaModel;

class ReceitaController extends Controller {

    private $receitaModel;

    public function __construct() {
        $this->receitaModel = new ReceitaModel();
    }

    public function index() {

        $receitas = [];

        if (filter_input(INPUT_POST, 'slCategoria', FILTER_SANITIZE_NUMBER_INT)) {
            $receitas = $this->receitaModel->lerPorCategoria(filter_input(INPUT_POST, 'slCategoria', FILTER_SANITIZE_NUMBER_INT));
        } else {
            $receitas = $this->receitaModel->lerUltimos(15);
        }

        $this->load('receita/main', [
            'listaCategorias' => (new CategoriaModel())->lerTodos(),
            'receitas' => $receitas,
            'categoriaId' => filter_input(INPUT_POST, 'slCategoria', FILTER_SANITIZE_NUMBER_INT)
        ]);
    }

    public function adicionar() {
        $this->load('receita/adicionar', [
            'listaCategorias' => (new CategoriaModel())->lerTodos()
        ]);
    }
    
    public function ver(string $slug) {

        $slug = filter_var($slug, FILTER_SANITIZE_STRING);

        if (strlen($slug) <= 2) {
            $this->showMessage(
                    'Formulário inválido',
                    'Os dados fornecidos estão incompletos ou são inválidos',
                    'artigo'
            );
            return;
        }
        $this->load('receita/ver', [
            'receita' => $this->receitaModel->lerPorSlug($slug)
        ]);
    }

    public function editar($receitaId) {

        $receitaId = filter_var($receitaId, FILTER_SANITIZE_NUMBER_INT);

        if ($receitaId <= 0) {
            $this->showMessage(
                    'Formulário inválido',
                    'Os dados fornecidos estão incompletos ou são inválidos',
                    'artigo'
            );
            return;
        }
        $this->load('receita/editar', [
            'listaCategorias' => (new CategoriaModel())->lerTodos(),
            'receita' => $this->receitaModel->lerPorId($receitaId),
            'receitaId' => $receitaId
        ]);
    }

    public function inserir() {
        $receita = $this->getInput();

        if (!$this->validate($receita, false)) {
            $this->showMessage(
                    'Formulário inválido',
                    'Os dados fornecidos estão incompletos ou são inválidos',
                    'artigo/adicionar'
            );
            return;
        }

        $result = $this->receitaModel->inserir($receita);

        if ($result <= 0) {
            $this->showMessage(
                    'Erro',
                    'Houve um erro ao tentar cadastrar',
                    'receita/adicionar'
            );
            return;
        }

        redirect(BASE . 'receita');
    }

    public function alterar($receitaId) {

        $receita = $this->getInput();
        $receita->setId($receitaId);

        if (!$this->validate($receita)) {
            $this->showMessage(
                    'Formulário inválido',
                    'Os dados fornecidos estão incompletos ou são inválidos',
                    'artigo/adicionar'
            );
            return;
        }

        if (!$this->receitaModel->alterar($receita)) {
            $this->showMessage(
                    'Erro',
                    'Houve um erro ao tentar alterar',
                    'receita/editar'
            );
            return;
        }

        redirect(BASE . 'receita/editar/' . $receitaId);
    }

    private function validate(Receita $receita, bool $validateId = true) {
        if ($validateId && $receita->getId() <= 0) {
            return false;
        }
        if (strlen($receita->getTitulo()) < 2) {
            return false;
        }
        if (strlen($receita->getSlug()) < 3) {
            return false;
        }
        if (strlen($receita->getLinhaFina()) < 10) {
            return false;
        }
        if (strlen($receita->getDescricao()) < 10) {
            return false;
        }
        if (strlen($receita->getThumb()) < 1) {
            return false;
        }
        if ($receita->getCategoriaId() <= 0) {
            return false;
        }

        return true;
    }

    private function getInput() {
        $receita = new Receita();
        $receita->setTitulo(filter_input(INPUT_POST, 'txtTitulo', FILTER_SANITIZE_STRING));
        $receita->setSlug(filter_input(INPUT_POST, 'txtSlug', FILTER_SANITIZE_STRING));
        $receita->setCategoriaId(filter_input(INPUT_POST, 'slCategoria', FILTER_SANITIZE_NUMBER_INT));
        $receita->setLinhaFina(filter_input(INPUT_POST, 'txtLinhaFina', FILTER_SANITIZE_STRING));
        $receita->setDescricao(filter_input(INPUT_POST, 'txtDescricao', FILTER_SANITIZE_SPECIAL_CHARS));
        $receita->setData(getCurrentDate());
        $receita->setThumb(filter_input(INPUT_POST, 'txtThumb', FILTER_SANITIZE_STRING));

        return $receita;
    }

}
