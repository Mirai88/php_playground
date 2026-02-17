<?php 

namespace Framework;

class DatabaseConfig {
    public $driver;
    public $host;
    public $port;
    public $dbname;
    public $charset;
    public $user;
    public $password;

    public function __construct($driver, $host, $port, $dbname, $charset, $user, $password) {
        $this->driver = $driver;
        $this->host = $host;
        $this->port = $port;
        $this->dbname = $dbname;
        $this->charset = $charset;
        $this->user = $user;
        $this->password = $password;
    }
}