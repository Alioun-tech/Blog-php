<?php

class Database
{
    private static $servername = 'localhost';
    private static $username = 'root';
    private static $pwd = '';
    private static $bdd = 'blog';

    private static $db = null;

    //On établit la connexion

    public static function connect()
    {
        try {
            self::$db = new PDO("mysql:host=" . self::$servername . ";port=3307;dbname=" . self::$bdd . ";charset=utf8", self::$username, self::$pwd);
            //On définit
        } catch (Exception $e) {
            die('ERROR:' . $e->getMessage());
        }
        return self::$db;
    }

    public static function disconnect()
    {
        self::$db = null;
    }
}
