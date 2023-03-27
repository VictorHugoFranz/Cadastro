<?php
class class_tela {

    private $layout;

    private $nome;

    private $style;

    protected function __construct($sNome){
        $this->setNomeTela($sNome);
        $this->criaTela();
    }

    protected function criaTela() {
        $this->criaHtml();
    }

    private function criaHtml() {
        echo '<html lang="pt-br">
              <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$this->getNomeTela().'</title>
                <link rel="stylesheet" href="'.$this->getStyleTela().'.css">
              </head>
              <body>'.$this->getLayout().'</body>';
        
    }

    protected function criaCampo($sTipo, $sNome, $sTitle, $sPlaceHolder = '', $bCriaLabel = false, $sValorDef = ''){
        $sLabel = '';
        if ($bCriaLabel) {
            $sLabel = '<label>'.$sNome.': </label>';
        }
        $sCampo = '<input type="'.$sTipo.'" name="'.$sTitle.'" placeholder="'.$sPlaceHolder.'" value="'.$sValorDef.'">';
        return $sLabel.$sCampo;
    }

    protected function getLayout() {
        return $this->layout;
    }

    protected function setLayout($sLayout) {
        $this->layout = $sLayout;
    }

    protected function getNomeTela() {
        return $this->nome;
    }

    protected function setNomeTela($sNome) {
        $this->nome = $sNome;
    }

    protected function getStyleTela() {
        return $this->style;
    }

    protected function setStyleTela($sStyle) {
        $this->style = $sStyle;
    }
}
?>