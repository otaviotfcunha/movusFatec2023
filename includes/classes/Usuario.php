<?php 
    class Usuario {
        public $id;
        public $nome;
        public $cpf;
        public $email;
        public $celular;
        public $dataNascimento;
        public $login;
        public $senha;
        public $ativo;

        // public function __construct($id = false) {
        //     if($id) {
        //         this->id = $id;
        //         this->carregarDados();
        //     }

        // }
        public function encriptarSenha ($recebeLogin, $recebeSenha) {
            $hash = "";
            
            $hash = md5($recebeLogin . $recebeSenha);
            
            //CRIA UM LOOP COM 666 ENCRIPTAÇÕES DA SENHA DO USUARIO
            for ($i = 0; $i < 666; $i++){
                $hash = md5($hash);
            }

            return $hash;
        }

        public function inserirUsuario($recebeNome, $recebeCpf, $recebeEmail, $recebeCelular, $recebeDataNascimento, $recebeLogin, $recebeSenha) {
            
            $hash = $this->encriptarSenha($recebeLogin, $recebeSenha);
            
            $sql = "INSERT INTO usuarios(nome, cpf, email, celular, data_nascimento, login, senha, ativo) VALUES (
                '".$recebeNome."',
                '".$recebeCpf."',
                '".$recebeEmail."',
                '".$recebeCelular."',
                '".$recebeDataNascimento."',
                '".$recebeLogin."',
                '".$hash."',
                '1'
            )";
            include_once "conexao.php";
            if($conexao->exec($sql)) {
                
                echo "<script type='text/javascript'> alert('Usuário inserido com sucesso!'); window.location.href='listarUsuarios.php'; </script>";
                
            } else {
                
                echo "<script type='text/javascript'> alert('Erro!'); window.location.href='../listarUsuarios.php'; </script>";
            }

        }

        public function listarUsuario() {
            $sql = "SELECT * FROM tb_usuarios WHERE status=1";
            include_once "../bd/conexao.php";
            $resultado = $conexao->query($sql);

            $lista = $resultado->fetchAll();

            return $lista;
        }

        public function desativarUsuario($idUsuario) {
            $usuarioASerDesativado = this->carregarDados($idUsuario);
            $retorno = false;
            if($usuarioASerDesativado != null) {
                $sql = "DELETE FROM tb_usuarios WHERE id='".$usuarioASerDesativado['id']."'";
                include_once "../bd/conexao.php";
                if($conexao->exec($sql)) {
                    $retorno = true;
                }
            }
            return $retorno;   
        }

        public function atualizarUsuario($idUsuario) {
            $usuarioASerAtualizado = this->carregarDados($idUsuario);
            $retorno = false;
            $sql = "UPDATE tb_usuarios SET (
                nome = '$this->nome',
                cpf = '$this->cpf',
                email = '$this->email',
                celular = '$this->celular,
                dataNascimento = '$this->dataNascimento,
                sexo = '$this->sexo',
                login = '$this->login',
                senha = '$this->senha',
                status = '$this->status',
                WHERE id='" .$usuarioASerAtualizado['id']. "'
            )";

            include_once "../bd/conexao.php";
            if($conexao->exec($sql)) {
                $retorno = true;
            }
            return $retorno;
        }

        public function carregarDados() {
            $sql = "SELECT * FROM tb_usuarios WHERE id='" .$usuarioASerCarregado['id']. "'";
            
            include_once "../bd/conexao.php";
            
            $resultado = $conexao->query($sql);

            $linha = $resultado->fetch();

            $this->nome = $linha['nome'];
            $this->cpf = $linha['cpf'];
            $this->email = $linha['email'];
            $this->celular = $linha['celular'];
            $this->dataNascimento = $linha['dataNascimento'];
            $this->sexo = $linha['sexo'];
            $this->login = $linha['login'];
            $this->senha = $linha['senha'];
            $this->status = $linha['status'];

        }

        


    }