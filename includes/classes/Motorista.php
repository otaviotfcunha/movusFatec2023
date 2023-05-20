<?php
    public class Motorista 
    {
        public $id;
        public $nome;
        public $cpf;
        public $email;
        public $matricula;
        public $celular;
        public $dataNascimento;
        public $cnh;
        public $sexo;
        public $dataAdmissao;
        public $status;

        public function __construct($id = false) {
            if($id) {
                this->id = $id;
                this->carregarDados();
            }

        }

        public function inserirMotorista() {
            $sql = "INSERT INTO tb_motoristas(nome, cpf, email, matricula, celular, data_nascimento, cnh, sexo, data_admissao, status) VALUES (
                '{this->$nome}',
                '{this->$cpf}',
                '{this->$email}',
                '{this->$matricula}',
                '{this->$celular}',
                '{this->$dataNascimento}',
                '{this->$cnh}',
                '{this->$sexo}',
                '{this->$data_admissao}',
                '{this->$status}'
            )";

            include_once "../bd/conexao.php";
            $conexao->exec($sql);
            echo "<script type='text/javascript'> alert('Motorista inserido com sucesso!'); window.location.href='../listarUsuarios.php'; </script>";

        }

        public function listarMotoristas() {
            $sql = "SELECT * FROM tb_motoristas WHERE status=1";
            include_once "../bd/conexao.php";
            $resultado = $conexao->query($sql);

            $lista = $resultado->fetchAll();

            return $lista;
        }

        public function desativarMotorista($idMotorista) {
            $motoristaASerDesativado = this->carregarDados($idMotorista);
            $retorno = false;
            if($motoristaASerDesativado != null) {
                $sql = "DELETE FROM tb_motoristas WHERE id='".$motoristaASerDesativado['id']."'";
                include_once "../bd/conexao.php";
                if($conexao->exec($sql)) {
                    $retorno = true;
                }
            }
            return $retorno;   
        }

        public function atualizarMotoristas($idMotorista) {
            $motoristaASerAtualizado = this->carregarDados($idMotorista);
            $retorno = false;
            $sql = "UPDATE tb_motoristas SET (
                nome = '$this->nome',
                cpf = '$this->cpf',
                email = '$this->email',
                matricula = '$this->matricula',
                celular = '$this->celular,
                dataNascimento = '$this->dataNascimento,
                cnh = '$this->cnh',
                sexo = '$this->sexo',
                dataAdmissao = '$this->dataAdmissao',
                status = '$this->status',
                WHERE id='" .$motoristaASerAtualizado['id']. "'
            )";

            include_once "../bd/conexao.php";
            if($conexao->exec($sql)) {
                $retorno = true;
            }
            return $retorno;
        }

        public function carregarDados($idMotorista) {
            $sql = "SELECT * FROM tb_motoristas WHERE id='" .$motoristaASerCarregado['id']. "'";
            
            include_once "../bd/conexao.php";
            
            $resultado = $conexao->query($sql);

            $linha = $resultado->fetch();

            $this->nome = $linha['nome'];
            $this->cpf = $linha['cpf'];
            $this->email = $linha['email'];
            $this->matricula = $linha['matricula'];
            $this->celular = $linha['celular'];
            $this->dataNascimento = $linha['dataNascimento'];
            $this->cnh = $linha['cnh'];
            $this->sexo = $linha['sexo'];
            $this->dataAdmissao = $linha['dataAdmissao'];
            $this->status = $linha['status'];

        }

    }