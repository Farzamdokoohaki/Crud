<?php

namespace CRUD\Helper;

class PersonHelper
{
    public function insert($table, $column, $value)
    {
  $condition = "INSERT INTO $table ($column) VALUES ($value)";
    $query = $this->query($condition);
    return $query;
    }

    public function fetch(int $id)
    {

    }

    public function fetchAll()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}