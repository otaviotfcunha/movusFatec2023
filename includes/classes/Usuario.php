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
        public $cep;
        public $rua;
        public $numero;
        public $bairro;
        public $cidade;
        public $estado;
        public $ativo;


        public function encriptarSenha ($recebeLogin, $recebeSenha) {
            $hash = "";
            
            $hash = md5($recebeLogin . $recebeSenha);
            
            //CRIA UM LOOP COM 666 ENCRIPTAÇÕES DA SENHA DO USUARIO
            for ($i = 0; $i < 666; $i++){
                $hash = md5($hash);
            }

            return $hash;
        }

        public function inserirUsuario($recebeNome, $recebeCpf, $recebeEmail, $recebeCelular, $recebeDataNascimento, $recebeLogin, $recebeSenha, $recebeCep, $recebeRua, $recebeNumero, $recebeBairro, $recebeCidade, $recebeEstado) {
            
            $hash = $this->encriptarSenha($recebeLogin, $recebeSenha);


            
            $sql = "INSERT INTO usuarios(nome, cpf, email, celular, data_nascimento, login, senha, cep, rua, numero, bairro, cidade, estado, ativo) VALUES (
                '".$recebeNome."',
                '".$recebeCpf."',
                '".$recebeEmail."',
                '".$recebeCelular."',
                '".$recebeDataNascimento."',
                '".$recebeLogin."',
                '".$hash."',
                '".$recebeCep."',
                '".$recebeRua."',
                '".$recebeNumero."',
                '".$recebeBairro."',
                '".$recebeCidade."',
                '".$recebeEstado."',
                '1'
            )";
            include_once "conexao.php";
            if($conexao->exec($sql)) {
                
                echo "<script type='text/javascript'> alert('Usuário inserido com sucesso!'); window.location.href='listarUsuarios.php'; </script>";
                
            } else {
                
                echo "<script type='text/javascript'> alert('Erro!'); window.location.href='index.html'; </script>";

            }


        }

        public function listarUsuario() {
            $sql = "SELECT * FROM usuarios WHERE status=1";
            include_once "conexao.php";
            $resultado = $conexao->query($sql);

            $lista = $resultado->fetchAll();

            return $lista;
        }


        public function desativarUsuario($idUsuario) {
            $usuarioASerDesativado = this->carregarDados($idUsuario);
            
            $retorno = false;
            if($usuarioASerDesativado['id'] != null) {
                $sql = "UPDATE usuarios SET ativo = '0' WHERE id='".$usuarioASerDesativado['id']."'";
                include_once "conexao.php";
                if($conexao->exec($sql)) {
                    $retorno = true;
                }
            }
            return $retorno;   
        }


        public function atualizarUsuario($recebeId) {
            $usuarioASerAtualizado = this->carregarDados($recebeId);
            $retorno = false;
            $sql = "UPDATE usuarios SET 
                nome = '".$linha['nome']."',
                cpf = '".$linha['cpf']."',
                email = '".$linha['email']."',
                celular = '".$linha['celular']."',
                data_nascimento = '".$linha['data_nascimento']."',
                cep = '".$linha['cep']."',
                rua = '".$linha['rua']."',
                estado = '".$linha['numero']."',
                numero = '".$linha['cidade']."',
                bairro = '".$linha['bairro']."',
                cidade = '".$linha['estado']."',
                ativo = '".$linha['ativo']."'
                WHERE id='" .$usuarioASerAtualizado['id']. "'
            ";

            include_once "conexao.php";
            if($conexao->exec($sql)) {
                $retorno = true;
            }
            return $retorno;
        }

        public function carregarDados($recebeId) {


            $sql = "SELECT * FROM suarios WHERE id='" .$recebeId. "'";
            
            include_once "conexao.php";

            $resultado = $conexao->query($sql);

            $nRows = $resultado->rowCount();

            if($nRows > 0) {
                $linha = $resultado->fetch();
            } else {
                $linha = "";
                echo "<script type='text/javascript'> alert('Erro!'); window.location.href='../listarUsuarios.php'; </script>";
            }

            return $linha;
        }

    }