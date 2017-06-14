<?php
class Event extends model {

	public function getEvents() {
		$sql = $this->db->prepare("SELECT * FROM events");
		$sql->execute();

		$array = array();
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}

	public function getEvent($id) {
		$sql = $this->db->prepare("SELECT * FROM events WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		$array = array();
		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}
		return $array;
	}

	public function add($title, $start, $end) {
		$sql = $this->db->prepare("INSERT INTO events SET title = :title, start = :start, end = :end");
		$sql->bindValue(":title", $title);
		$sql->bindValue(":start", $start);
		$sql->bindValue(":end", $end);
		$sql->execute();

		return $this->getEvent($this->db->lastInsertId());
	}

	public function remove($id) {
		$sql = $this->db->prepare("DELETE FROM events WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();
	}

	public function update($id, $start, $end) {
		$sql = $this->db->prepare("UPDATE events SET start = :start, end = :end WHERE id = :id");
		$sql->bindValue(":start", $start);
		$sql->bindValue(":end", $end);
		$sql->bindValue(":id", $id);
		$sql->execute();
	}
}