<?php

class usuariosModel {
//propriedades
    protected $id;
    protected $nome;
    protected $email;
    protected $senha;
    protected $data_nascimento;
    protected $fone;
    protected $tiposUsuariosId;

    public function __construct() {
        //metodo construtor
    }

    //metodos acessores
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getData_nascimento() {
        return $this->data_nascimento;
    }

    public function getFone () {
        return $this->fone;
    }

    public function getTiposUsuariosId() {
        return $this->tiposUsuariosId;
    }

    //metodos modificadores
    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setData_nascimento($data_nascimento): void {
        $this->data_nascimento = $data_nascimento;
    }

    public function setFone ($fone): void {
        $this->fone = $fone;
    }

    public function setTiposUsuariosId($tiposUsuariosId): void {
        $this->tiposUsuariosId = $tiposUsuariosId;
    }

//metodos especialistas -- metodos que fazem algo na classe (inserir dado)
    public function loadAll() {
        require_once '../ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM usuarios';
        $result = $db->Consultar($sql);
        $db->Desconectar();
        return $result;
    }

    public function loadById($id) {
        require_once '../ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM usuarios WHERE id = ' . $id;
        $result = $db->Consultar($sql);
        if ($db->total == 1) {
            foreach ($result as $data) {
                $this->id = $data['id']; //array que vem do bd
                $this->nome = $data['nome']; //array que vem do bd
                $this->email = $data['email']; //array que vem do bd
                $this->senha = $data['senha']; //array que vem do bd
                $this->dataNascimento = $data['data_nascimento']; //array que vem do bd
                $this->fone = $data['fone']; //array que vem do bd
                $this->tiposUsuariosId = $data['tipos_usuarios_id']; //array que vem do bd
            }
        }
        $db->Desconectar();
      }

    public function login($email, $senha) {
        require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        //SELECT * FROM usuarios where email="" and senha="";
        $sql = 'SELECT * FROM usuarios WHERE email="' . $email . '" and senha="' . $senha . '"'; //aspas duplas em string
        $result = $db->Consultar($sql);
        if ($db->total == 1) {
            foreach ($result as $data) { //carrega objetos na memoria
                $this->id = $data['id']; //array que vem do bd
                $this->nome = $data['nome']; //array que vem do bd
                $this->email = $data['email']; //array que vem do bd
                $this->senha = $data['senha']; //array que vem do bd
                $this->dataNascimento = $data['data_nascimento']; //array que vem do bd
                $this->fone = $data['fone']; //array que vem do bd
                $this->tiposUsuariosId = $data['tipos_usuarios_id']; //array que vem do bd
            }
        }
        $db->Desconectar();
        return $db->total;
        //se vier registro total = 1
        //se nao vier = 0
        //não pode ter registros duplicados (2 usuarios com mesmo email e senha)
        //pega o ultimo pq tem foreach
    }

}
