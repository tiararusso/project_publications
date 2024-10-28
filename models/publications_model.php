<?php
include_once "config/config_publications.php";
include_once "db/db.class.php";
class publications_model
{
    private $link;
    public function __construct()
    {
            $this->link = new Db();
    }

    public function get_publications()
    {
        $data = $this->link->query("select * from publications order by name")->fetchAll();
        return $data;
    }
}
    
    





?>