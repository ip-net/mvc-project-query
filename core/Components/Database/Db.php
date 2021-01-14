<?php


namespace Iliah\Core\Components\Database;


use Iliah\Core\Contracts\BootstrapInterface;
use Iliah\Core\Contracts\ComponentInterface;

class Db implements ComponentInterface, BootstrapInterface
{
    protected $dsn;

    protected $user;

    protected $password;

    protected $connection;

    public function __construct($dsn, $user, $password)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;
    }

    public function bootstrap()
    {
        // TODO: Implement bootstrap() method.
    }

    public function connect()
    {
        $this->connection = new \PDO($this->dsn, $this->user, $this->password);
    }

    public function query()
    {

    }
}