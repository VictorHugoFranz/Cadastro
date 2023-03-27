<?php
session_start();
include "../autoload.php";
class class_tela_cadastro extends class_tela {
 
    public function __construct(){
        parent::__construct('Tela de cadastro');
    }

    protected function criaTela(){
        $sDiv = '<form method="POST" action="class_controller.php">
                    <div>
                        <h1>Cadastro</h1>
                            '.$this->criaCampo('hidden', 'acao', 'acao','', false, 'cadastrar').'
                            '.$this->criaCampo('text', 'Titulo', 'titulo','',true).'
                        <br><br>
                            '.$this->criaCampo('text', 'Descrição', 'descricao','',true).'
                        <br><br>
                            '.$this->criaCampo('text', 'Url', 'url','',true).'
                        <br><br>
                            '.$this->criaCampo('date', 'Data', 'data','', true).'
                        <br><br>
                        <button id="cadastrar" name="cadastrar">
                            <a>Cadastrar</a>
                        </button>
                    </div>
                </form>';
        $this->setLayout($sDiv);
        $this->setStyleTela('class_style_cadastro');
        parent::criaTela();
    }
}
$oTela = new class_tela_cadastro();

?>