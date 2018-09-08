<?php

namespace Mycontrole\Model;

use \Mycontrole\DB\Sql;
use \Mycontrole\Model;
use \Mycontrole\Mailer;

class ContactType extends Model {
	

	public static function listAll(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_contacttype ORDER BY descontacttype");
	}

	public function save(){


		$sql = new Sql();

		$results = $sql->select("CALL sp_contacttype_save(:idcontacttype, :descontacttype)",
			array(
			":idcontacttype"=>$this->getidcontacttype(),
			":descontacttype"=>$this->getdescontacttype(),
			));

		$this->setData($results[0]);
	}

	public function get($idcontacttype)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_contacttype WHERE idcontacttype = :idcontacttype", [
			'idcontacttype'=>$idcontacttype
		]);

		$this->setData($results[0]);

	}

	public function delete()
	{

		$sql = new Sql();

		$sql->query("DELETE FROM tb_contacttype WHERE idcontacttype = :idcontacttype", [
			'idcontacttype'=>$this->getidcontacttype()
		]);

	}

}
?>