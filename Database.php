<?php
// Class database connection
class Database
{
    // Property
    private $host     = "localhost";
    private $uname    = "root";
    private $pass     = "";
    private $db       = "dbs_project_chat";
    private $connection;

    // Method connection
    function connect()
    {
        $this->connection=mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
        return $this->connection;
    }
}

?>
