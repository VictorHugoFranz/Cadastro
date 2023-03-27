<?php
include "../autoload.php";
switch ($_POST['acao']) {
    case 'cadastrar':
        $sTitulo    = $_POST['titulo'];
        $sDescricao = $_POST['descricao'];
        $sData      = $_POST['data'];
        $sUrl       = $_POST['url'];
        if (isset($_SESSION['Lista'])) {
            $_SESSION['Lista'] = ['titulo'    => $sTitulo, 
                                  'descricao' => $sDescricao, 
                                  'data'      => $sData,
                                  'url'       => $sUrl];
        } else {
            $_SESSION['Lista'] = ['titulo'    => $sTitulo, 
                                  'descricao' => $sDescricao, 
                                  'data'      => $sData,
                                  'url'       => $sUrl];
        }
        new class_listagem($_SESSION['Lista']);
        break;
    default :
        echo 'Ação não reconhecida';
}
?>