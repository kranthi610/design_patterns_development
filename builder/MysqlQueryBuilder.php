<?php

require("SQLBuilder.php");

class MysqlQueryBuilder implements SQLBuilder
{

	public function __construct()
	{
		$this->tablename = "users";
		$this->query = new stdClass();
	}

	public function select( string $select )
	{
		$this->query->select = "select {$select} from {$this->tablename}";
		return $this;
	}

	public function where( array $where )
	{
		$this->query->where = $where;
		return $this;
	}

	public function limit(int $limit)
	{
		$this->query->limit = $limit;
		return $this;
	}

	public function toSql()
	{
		$sql = '';
		$sql .= $this->query->select;

		if( count($this->query->where) > 0 )
		{
			$sql .= " where {$this->query->where[0][0]} {$this->query->where[0][1]} '{$this->query->where[0][2]}' ";
		}

		if( $this->query->limit )
		{
			$sql .= " limit {$this->query->limit}";
		}

		return $sql;
	}
}