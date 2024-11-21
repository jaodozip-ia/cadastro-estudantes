<?php

class Estudante {
    private $collection;

    public function __construct($db) {
        $this->collection = $db->getCollection('estudantes');
    }

    public function criarEstudante($dados) {
        $this->collection->insertOne($dados);
    }

    public function listarEstudantes() {
        return $this->collection->find()->toArray();
    }
}
