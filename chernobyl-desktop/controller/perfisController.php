<?php

if ($_POST) {
    @$id = $_POST['id'];
    @$nome = $_POST['nome'];
    @$kids = $_POST['kids'];
    @$loggedUser = $_POST['loggedUser'];

    require_once '../model/perfisModel.php';
    $perfis = new perfisModel();
    $perfis->setNome($nome);
    $kids = ($kids == 1 ? 1 : 0);
    $perfis->setInfantil($kids);
    $perfis->setUsuarios_id($loggedUser);

    //Inserir ou Atualizar
    //Se NÃO existir o id no formulário insere
    if ($id == 0) {
        //inserir
        $total = $perfis->insert();
        if ($total == 1) {
           header('location:../listarPerfisPage.php?cod=sucess');
        } else {
            header('location:../listarPerfisPage.php?cod=error');
        }
    } else {
        //editar
        //Sempre tenho que configurar o id senão atualizo todos os registros da base de dados
        $perfis->setId($id);
        $total = $perfis->update();
         if ($total == 1) {
            header('location:../listarPerfisPage.php?cod=sucess');
        } else {
            header('location:../listarPerfisPage.php?cod=error');
        }
    }
} else if ($_REQUEST) {
    //Excluir ou carregar dado por id do banco para editar
    if (@$_REQUEST['id']) {

        $cod = $_REQUEST['cod'];
        $id = $_REQUEST['id'];
        
        //Se for para editar o caminho de perfis model é o da raiz
        if ($cod == 'edit') {
            require_once './model/perfisModel.php';
        } else {
            //Caminho para deletar
            require_once '../model/perfisModel.php';
        }


        $perfis = new perfisModel();
        //Se vier de request (query string) e a qs for id -- DELETA
        if ($cod == 'del') {
            if ($perfis->delete($id) == 1) {
                //Apagou com sucesso
                header('location:../listarPerfisPage.php?cod=sucess');
            } else {
                //Erro no apagar
                header('location:../listarPerfisPage.php?cod=error');
            }
        } else if ($cod == 'edit') {
            //Carrega o perfil selecionado
            $perfilEdit = $perfis->loadById($id);
            //echo $perfilEdit->getInfantil();
        } else {
            //Erro no apagar
            header('location:../listarPerfisPage.php?cod=error');
        }
    } else {
        //Listar
        //Crio a variável perfisList que vai ser utilizada na listarPerfisPage.php
        $perfisList = loadAll();
    }
} else {
    //Listar
    //Crio a variável perfisList que vai ser utilizada na listarPerfisPage.php
    $perfisList = loadAll();
}

function loadAll() {
    //Listar
    require_once './model/perfisModel.php';
    $perfis = new perfisModel();
    $perfisList = $perfis->loadAll();
    return $perfisList;
}
