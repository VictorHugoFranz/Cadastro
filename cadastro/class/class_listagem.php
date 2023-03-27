<?php
class class_listagem extends class_tela {

    private $Lista;
 
    public function __construct($aLista){
        $this->setLista($aLista);
        parent::__construct('Lista');   
    }

    protected function criaTela(){
        $sDiv = '<table>
                    <tr>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Data</th>
                        <th>Url</th>
                    </tr>'.
                    $this->criaLista($this->getLista());
        $this->setLayout($sDiv);
        $this->setStyleTela('class_style_cadastro');
        parent::criaTela();
    }

    protected function criaLista($aLista) {
        $sLista = '';
        foreach ($aLista as $value) {
            $sLista .= '<tr>';
            $sLista .= '<td>'.$value['titulo'].'</td>';
            $sLista .= '<td>'.$value['descricao'].'</td>';
            $sLista .= '<td>'.$value['data'].'</td>';
            $sLista .= '<td>'.$value['url'].'</td>';
            $sLista .= '</tr>';
        }
        $sLista .= '</table>';
        return $sLista;
    }

    protected function setLista($aLista) {
        $this->Lista = $aLista;
    }

    protected function getLista() {
        return $this->Lista;
    }
}
?>