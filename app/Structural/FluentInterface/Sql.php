<?php


namespace App\Structural\FluentInterface;


class Sql
{

    private $from = [];

    private $where = [];

    private $fields = [];

    public function select(array $fields): Sql
    {
        $this->fields = $fields;
        return $this;
    }

    public function where(string $condition): Sql
    {
        $this->where[] = $condition;
        return $this;
    }

    public function from(string $table, string $alias): Sql
    {
        $this->from[] = $table . ' AS ' . $alias;
        return $this;
    }

    public function __toString(): string
    {
        return 'SELECT ' . join(', ', $this->fields)
            . ' FROM ' . join(', ', $this->from)
            . ' WHERE ' . join(' AND ', $this->where);
    }
}
