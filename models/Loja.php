<?php
class Loja extends Model {

	public function cadastrar($nomeFantasia, $razaoSocial, $cpf, $cnpj, $facebook, $id_usuario) {
		
		$sql = $this->con_db->prepare("SELECT id FROM loja WHERE cpf = :cpf OR cnpj = :cnpj");
        $sql->bindValue(":cpf", $cpf);
        $sql->bindValue(":cnpj", $cnpj);
		$sql->execute();

		if($sql->rowCount() == 0) {          

			$sql = $this->con_db->prepare("INSERT INTO loja SET nome_fantasia = :nomeFantasia, 
                                            razao_social = :razaoSocial, cpf = :cpf, cnpj = :cnpj, 
                                            facebook = :facebook, id_usuario = :id_usuario");
			$sql->bindValue(":nomeFantasia", $nomeFantasia);
			$sql->bindValue(":razaoSocial", $razaoSocial);			
            $sql->bindValue(":cpf", $cpf);
            $sql->bindValue(":cnpj", $cnpj);
            $sql->bindValue(":facebook", $facebook);
            $sql->bindValue(":id_usuario", $id_usuario);
			$sql->execute();
			
			return true;

		} else {
			return false;
		}
	}

}
?>