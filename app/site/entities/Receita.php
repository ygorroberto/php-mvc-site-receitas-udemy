<?php

namespace app\site\entities;

class Receita {

    private $id;
    private $titulo;
    private $slug;
    private $linhaFina;
    private $descricao;
    private $categoriaId;
    private $categoriaTitulo;
    private $data;
    private $thumb;

    //construtor
    public function __construct($id = null, $titulo = '', $slug = '', $linhaFina = '', $descricao = '', $categoriaId = '', $categoriaTitulo = '', $data = '', $thumb = '') {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->slug = $slug;
        $this->linhaFina = $linhaFina;
        $this->descricao = $descricao;
        $this->categoriaId = $categoriaId;
        $this->categoriaTitulo = $categoriaTitulo;
        $this->data = $data;
        $this->thumb = $thumb;
    }

    //getter e setter
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function getLinhaFina() {
        return $this->linhaFina;
    }

    public function setLinhaFina($linhaFina) {
        $this->linhaFina = $linhaFina;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getCategoriaId() {
        return $this->categoriaId;
    }

    public function setCategoriaId($categoriaId) {
        $this->categoriaId = $categoriaId;
    }

    public function getCategoriaTitulo() {
        return $this->categoriaTitulo;
    }

    public function setCategoriaTitulo($categoriaTitulo) {
        $this->categoriaTitulo = $categoriaTitulo;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }
    
    public function getThumb() {
        return $this->thumb;
    }

    public function setThumb($thumb) {
        $this->thumb = $thumb;
    }

}
