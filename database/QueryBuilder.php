<?php

/**
 * QueryBuilder - класс для создания запросов к БД
 */
class QueryBuilder
{
	protected $pdo;

/**
 * присвоение $pdo самому классу
 * object(PDO) - $pdo
 */

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

/**
 * Выполняет запрос к тублице и возвращает все результаты в виде массива.
 * string - $table
 * Return value: array
 */
	public function getAll($table) 
	{
		$sql = "SELECT * FROM {$table}";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

/**
 * Выполняет запрос по конкретному id и возвращает одну строку результата.
 * string - $table
 * int - $id
 * Return value: array
 */
	public function getOne($table, $id) {
		$sql = "SELECT * FROM {$table} WHERE id = :id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([
			'id' => $id
		]);
		return $stmt->fetch(PDO::FETCH_ASSOC);
		
	}

/**
 * Выполняет запрос на создание записи в таблице.
 * string - $table
 * array - $data
 * Return value: boolean
 */
	 function create($table, $data) {
		$keys = implode(', ', array_keys($data));
		$tags = ':' . implode(', :', array_keys($data));
		$sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($data);
	}

/**
 * Выполняет запрос на изменение записи по конкретному id в таблице.
 * string - $table
 * array - $data
 * int - $id
 * Return value: boolean
 */
	public function update($table, $data, $id) {

		$keys = array_keys($data);
		$string = '';
		foreach ($keys as $key ) {
			$string .= $key . '=:' . $key. ',';
		}
		$keys = rtrim($string, ',');
		$data['id'] = $id;
		$sql = "UPDATE {$table} SET {$keys} WHERE id =:id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($data);
	}

/**
 * Выполняет запрос на удаление записи в таблице по конкретному id.
 * string - $table
 * int - $id
 * Return value: boolean
 */
	public function delete($table, $id) {
		$sql = "DELETE FROM {$table} WHERE id = :id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([
			'id' => $id
		]);
	}
}

