<?php

interface SQLBuilder
{
	public function select( string $selectStrings );
	public function where( array $whereClause );
	public function limit( int $limit );
	public function toSql();
}