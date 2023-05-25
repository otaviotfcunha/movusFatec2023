<?php
    public class Onibus
    {
        public $id;
        public $modelo;
        public $placa;
        public $renavam;
        public $dataAquisicao;
        public $quantidadeAssentos;
        public $status;

        public function __construct($id = false) {
            if($id) {
                this->id = $id;
                this->carregarDados();
            }

        }

        public function inserirOnibus() {
            $sql = "INSERT INTO tb_onibus(modelo, placa, renavam, data_aquisicao, qtd_assentos, status) VALUES (
                '{this->$modelo}',
                '{this->$placa}',
                '{this->$renavam}',
                '{this->$dataAquisicao}',
                '{this->$quantidadeAssentos}',
                '{this->$status}'
            )";

            include_once "../bd/conexao.php";
            $conexao->exec($sql);
            echo "<script type='text/javascript'> alert('Onibus inserido com sucesso!'); window.location.href='../listarUsuarios.php'; </script>";

        }

        public function listarOnibus() {
            $sql = "SELECT * FROM tb_onibus WHERE status=1";
            include_once "../bd/conexao.php";
            $resultado = $conexao->query($sql);

            $lista = $resultado->fetchAll();

            return $lista;
        }

        public function desativarOnibus($idOnibus) {
            $onibusASerDesativado = this->carregarDados($idOnibus);
            $retorno = false;
            if($onibusASerDesativado != null) {
                $sql = "DELETE FROM tb_onibus WHERE id='".$onibusASerDesativado['id']."'";
                include_once "../bd/conexao.php";
                if($conexao->exec($sql)) {
                    $retorno = true;
                }
            }
            return $retorno;   
        }

        public function atualizarUsuario($idOnibus) {
            $onibusASerAtualizado = this->carregarDados($idOnibus);
            $retorno = false;
            $sql = "UPDATE tb_onibus SET (
                modelo = '$this->modelo',
                placa = '$this->placa',
                renavam = '$this->renavam',
                dataAquisicao = '$this->dataAquisicao,
                quantidadeAssentos = '$this->quantidadeAssentos,
                status = '$this->status',
                WHERE id='" .$onibusASerAtualizado['id']. "'
            )";

            include_once "../bd/conexao.php";
            if($conexao->exec($sql)) {
                $retorno = true;
            }
            return $retorno;
        }

        public function carregarDados($idOnibus) {
            $sql = "SELECT * FROM tb_onibus WHERE id='" .$onibusASerCarregado['id']. "'";
            
            include_once "../bd/conexao.php";
            
            $resultado = $conexao->query($sql);

            $linha = $resultado->fetch();

            $this->modelo = $linha['modelo'];
            $this->placa = $linha['placa'];
            $this->renavam = $linha['renavam'];
            $this->dataAquisicao = $linha['dataAquisicao'];
            $this->quantidadeAssentos = $linha['quantidadeAssentos'];
            $this->status = $linha['status'];

        }
    }