<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {

        try {
            $conn = new PDO("sqlsrv:server = tcp:sql-io.database.windows.net,1433; Database = sql-io-diary", "sql-io-diary", "P@$$w0rd");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            print("Error connecting to SQL Server.");
            die(print_r($e));
        }
        
        // SQL Server Extension Sample Code:
        $connectionInfo = array("UID" => "sql-io-diary", "pwd" => "P@$$w0rd", "Database" => "sql-io-diary", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:sql-io.database.windows.net,1433";
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        $this->assertTrue(true);
    }
}
