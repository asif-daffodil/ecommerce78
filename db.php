<?php
class dbConnect
{
    private const host = "localhost";
    private const user = "root";
    private const pass = null;
    private const db = "ecommers78";

    public static $conn;

    private function __construct()
    {
    }

    public static function dbFunc(): void
    {
        dbConnect::$conn = mysqli_connect(dbConnect::host, dbConnect::user, dbConnect::pass, dbConnect::db);
    }
}

dbConnect::dbFunc();
$conn = dbConnect::$conn;
