<?php

namespace PHPMT\Model;


abstract class Table
{
    protected $db;
    protected $table;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function fetchAll()
    {
        $query = "select * from {$this->table}";

        return $this->db->query($query);
    }

    public function find($id)
    {
        $query = "select * from {$this->table} WHERE id=:id";
        $build = $this->db->prepare($query);
        $build->bindParam(":id", $id);
        $build->execute();

        return $build->fetch(\PDO::FETCH_ASSOC);
    }
}