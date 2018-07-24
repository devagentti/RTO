<?php
class Usuarios extends Model {

	public function getTotalUsuarios() {		

		$sql = $this->con_db->query("SELECT COUNT(*) as c FROM usuarios");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function cadastrar($nome, $email, $senha, $celular) {
		
		$sql = $this->con_db->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() == 0) {

			$data = new DateTime();
			$data_format = $data->format('Y-m-d H:i');						
			
			$sql = $this->con_db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, celular = :celular, data_cadastro = :data_cadastro");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", md5($senha));
			$sql->bindValue(":celular", $celular);
			$sql->bindValue(":data_cadastro", $data_format); 
			$sql->execute();
			
			return $this->con_db->lastInsertId(); 

		} else {
			return 0;
		}
	}

	public function login($email, $senha) {

		$sql = $this->con_db->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			$_SESSION['cLogin'] = $dado['id'];
			return true;
		} else {
			return false;
		}
	}


}
?>