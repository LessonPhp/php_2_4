<?php

namespace App\Models;

use App\Db;
use App\Model;

class Author extends Model
{
    public const TABLE = 'authors';

    public $name;


    /**
     * @return array
     */
    public static function findAllAuthor()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE. ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql,
            [],
            static::class);
    }

    /**
     * @param $id
     * @return bool
     */
    public static function findByAuthorId($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $result = $db->query($sql,
            [':id' => $id],
            static::class);
        // исправила ошибку с прошлого урока
        return $result ? $result[0] : null;

    }


}