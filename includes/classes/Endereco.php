<?php
    public class Endereco
    {
        public $id;
        public $rua;
        public $cep;
        public $numero;
        public $bairro;
        public $cidade;
        public $estado;
        public $usuario_id;

        public function __construct($id = false) {
            if($id) {
                this->id = $id;
                this->carregarDados();
            }
        }

        public function inserirEndereco() {
            $sql = "INSERT INTO tb_enderecos(rua, cep, numero, bairro, cidade, estado, usuario_id) VALUES (
                '{this->$rua}',
                '{this->$cep}',
                '{this->$numero}',
                '{this->$bairro}',
                '{this->$cidade}',
                '{this->$estado}'
                '{this->$usuario_id}'
            )";

            include_once "../bd/conexao.php";
            $conexao->exec($sql);
            echo "<script type='text/javascript'> alert('Endereco inserido com sucesso!'); window.location.href='../listarUsuarios.php'; </script>";

        }

        public function listarEnderecos() {
            $sql = "SELECT * FROM tb_enderecos WHERE status=1";
            include_once "../bd/conexao.php";
            $resultado = $conexao->query($sql);

            $lista = $resultado->fetchAll();

            return $lista;
        }

        public function excluirEnderecos($idEndereco) {
            $enderecoASerExcluido = this->carregarDados($idEndereco);
            $retorno = false;
            if($enderecoASerExcluido != null) {
                $sql = "DELETE FROM tb_enderecos WHERE id='".$enderecoASerExcluido['id']."'";
                include_once "../bd/conexao.php";
                if($conexao->exec($sql)) {
                    $retorno = true;
                }
            }
            return $retorno;   
        }

        public function atualizarEndereco($idEndereco) {
            $enderecoASerExcluido = this->carregarDados($idEndereco);
            $retorno = false;
            $sql = "UPDATE tb_enderecos SET (
                rua = '$this->rua',
                cep = '$this->cep',
                numero = '$this->numero',
                bairro = '$this->bairro,
                cidade = '$this->cidade,
                estado = '$this->estado',
                WHERE id='" .$enderecoASerExcluido['id']. "'
            )";

            include_once "../bd/conexao.php";
            if($conexao->exec($sql)) {
                $retorno = true;
            }
            return $retorno;
        }

        public function carregarDados($idEndereco) {
            $sql = "SELECT * FROM tb_enderecos WHERE id='" .$enderecoASerCarregado['id']. "'";
            
            include_once "../bd/conexao.php";
            
            $resultado = $conexao->query($sql);

            $linha = $resultado->fetch();

            $this->rua = $linha['rua'];
            $this->cep = $linha['cep'];
            $this->numero = $linha['numero'];
            $this->bairro = $linha['bairro'];
            $this->cidade = $linha['cidade'];
            $this->estado = $linha['estado'];
            $this->usuario_id = $linha['usuario_id'];

        }
    }