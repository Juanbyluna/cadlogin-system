<?php
require_once 'models/database.php';
 
class User {
    // funçao para encontrar um usuário pelo e-mail
 
    public static function findByEmail($email){
        // obter conexão com o banco de dados para guarda-la em uma variável
        $conn = Database::getConnection();
 
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = :email");
        $stmt->execute(['email' => $email]);
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
    //função para listar todas as funções dos úsuarios no BD
    public static function all(){
        $conn = Database::getConnection();
        $stmt = $conn->query("SELECT * FROM usuario");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>