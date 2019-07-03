
<?php
/**
 * abstract class ( class trừu tượng )
 * Class Database
 */
abstract class Database {
    abstract public function connect();
    abstract public function disconnect();
    public function test() {
        echo "<br>" . __METHOD__;
    }
}