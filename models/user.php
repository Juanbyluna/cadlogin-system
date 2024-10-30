<?php
require_once 'models/database.php';
 
class User {
    // funçao para encontrar um usuário pelo e-mail
 
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
    public static function findByEmail($email){
        // obter conexão com o banco de dados para guarda-la em uma variável
        $conn = Database::getConnection();
 
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = :email");
<<<<<<< HEAD
=======
=======
    public static function findByEmail ($email){
        // obter conexão com o banco de dados para guarda-la em uma variável
        $conn = Database:: getConnection();
 
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
        $stmt->execute(['email' => $email]);
        // retorno de dados do usuário encontrado como um array associativo
        return $stmt->fetch(PDO::FETCH_ASSOC);
 
        // cria função que lozaliza o usuário pelo ID
    }

    public static function find($id){
        // obtém a conexão com o banco de dados
        $conn = Database::getConnection();
<<<<<<< HEAD
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE id = :id");
        $stmt->execute(['id' => $id]);
=======
<<<<<<< HEAD
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE id = :id");
        $stmt->execute(['id' => $id]);
=======
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
    
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    // função para criar usuario na base de dados
    public static function create($data){
        $conn = Database::getConnection();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
        $stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        $stmt->execute($data);
    }
    //função para listar todas as funções dos úsuarios no BD
    public static function all(){
        $conn = Database::getConnection();
        $stmt = $conn->query("SELECT * FROM usuario");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
<<<<<<< HEAD
    }

public static function update($id, $data){
    $conn = Database::getConnection();
    //prepara consulta SQL para atualização dos usuário
    $stmt = $conn->prepare("UPDATE usuario SET nome = :nome, email = :email, perfil = :perfil WHERE id = :id");

    $data['id'] = $id;

    $stmt->execute($data);
}
=======
=======
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
    
        $stmt->execute($data);
    
>>>>>>> 05e2e92adeb34acbd718138c4d202e41150b7659
    }
>>>>>>> 58fbd12bb7da7fb639f8e7add9cc1859a62618aa
}
?>