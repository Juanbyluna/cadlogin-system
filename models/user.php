<?php
require_once 'models/database.php';
 
class User {
    // funçao para encontrar um usuário pelo e-mail
 
<<<<<<< HEAD
=======
    public static function findByEmail($email){
        // obter conexão com o banco de dados para guarda-la em uma variável
        $conn = Database::getConnection();
 
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = :email");
>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
    public static function findByEmail ($email){
        // obter conexão com o banco de dados para guarda-la em uma variável
        $conn = Database:: getConnection();
 
<<<<<<< HEAD
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = :email");
        $stmt->execute([":email" => $email]);
=======
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute(['email' => $email]);
>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
        // retorno de dados do usuário encontrado como um array associativo
        return $stmt->fetch(PDO::FETCH_ASSOC);
 
        // cria função que lozaliza o usuário pelo ID
    }
        public static function find($id){
            // obtém a conexão com o banco de dados
            $conn = Database::getConnection();
            $stmt = $conn->prepare("SELECT * FROM usuario WHERE id = :id");
            $stmt->execute(['id' => $id]);
 
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
 
        // função para criar usuario na base de dados
        public static function create($data){
            $conn = Database::getConnection();
            $stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
            $stmt->execute($data);
 
        }
 
        // Função para listar todas as informações dos usuários no BD
        public static function all(){
            $conn = Database::getConnection();
            $stmt = $conn->query("SELECT * FROM usuario");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
 
        public static function update($id, $data){
            $conn = Database::getConnection();
            // prepara a consulta SQL para atualização dos dados do usuário
            $stmt = $conn->prepare("UPDATE usuario SET nome = :nome, email = :email, perfil = :perfil WHERE id = :id");
            $data['id'] = $id;
            $stmt->execute($data);
        }
    // função de 'deletar' usuário pelo id
    public static function delete($id){
        $conn = Database::getConnection();
<<<<<<< HEAD
        $stmt = $conn->prepare('DELETE FROM usuario WHERE id = :id');
        $stmt->execute(['id' => $id]);
=======
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
    
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    // função para criar usuario na base de dados
    public static function create($data){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        $stmt->execute($data);
    }
    //função para listar todas as funções dos úsuarios no BD
    public static function all(){
        $conn = Database::getConnection();
        $stmt = $conn->query("SELECT * FROM usuario");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

public static function update($id, $data){
    $conn = Database::getConnection();
    //prepara consulta SQL para atualização dos usuário
    $stmt = $conn->prepare("UPDATE usuario SET nome = :nome, email = :email, perfil = :perfil WHERE id = :id");

    $data['id'] = $id;

    $stmt->execute($data);
}
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
    
        $stmt->execute($data);
    
>>>>>>> 136f4ba2c12c34fa2ceee7fbdd6789c2c1b1bd92
    }
}
?>