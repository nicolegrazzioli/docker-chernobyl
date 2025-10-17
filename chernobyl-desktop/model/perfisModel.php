<?php
 require_once 'ConexaoMysql.php';
class perfisModel{             

    //Propriedades
    protected $id;
    protected $nome;
    protected $imagem;
    protected $infantil;
    protected $usuarios_id;
    
    //Métodos acessores e modificadores
    //publico -- pode ser acessado por todos
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function getInfantil() {
        return $this->infantil;
    }

    public function getUsuarios_id() {
        return $this->usuarios_id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setImagem($imagem): void {
        $this->imagem = $imagem;
    }

    public function setInfantil($infantil): void {
        $this->infantil = $infantil;
    }

    public function setUsuarios_id($usuarios_id): void {
        $this->usuarios_id = $usuarios_id;
    }

    //Método construtor da classe
    public function __construct() {
        
    }
     
    //metodos especialistas -- metodos que fazem algo na classe (inserir dado)
    public  function loadAll(){
        //require_once './model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM perfis';
        $result = $db->Consultar($sql);
        $db->Desconectar();
        return $result;
    }
    
    public  function loadById($id){
        //require_once './model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM perfis WHERE id = '.$id;
        $result = $db->Consultar($sql);
        if($db->total==1){
            foreach ($result as $data) {
                $this->id = $data['id']; //array que vem do bd
                $this->imagem = $data['imagem']; //array que vem do bd
                $this->infantil = $data['infantil']; //array que vem do bd
                $this->nome = $data['nome']; //array que vem do bd
                $this->usuarios_id = $data['usuarios_id']; //array que vem do bd
            }
        }
        $db->Desconectar();
        //retorno o objeto do tipo perfil
        return $this;
    }
    
    public  function delete($id){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'DELETE FROM perfis WHERE id = '.$id;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }
    
     public  function insert(){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        //$sql = 'INSERT INTO perfis VALUES(0, "","",0,1)';
        $sql = 'INSERT INTO perfis VALUES(0, "'.$this->nome.'","",'.$this->infantil.','.$this->usuarios_id.')';
        echo $sql;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }
    
    public  function update(){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        //$sql = 'UPDATE perfis SET(0,"","",0,1) WHERE id=1';
        $sql = 'UPDATE perfis SET nome="'.$this->nome.'",'
                . 'infantil='.$this->infantil.','
                . 'usuarios_id='.$this->usuarios_id.' WHERE id='.$this->id;
        echo $sql;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }

}
