<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article extends Model
{
    public const TABLE = 'news';

    public $title;
    public $content;
    public $author_id;


    /**
     * @param $name
     * @return bool|null
     */
    public function __get($name)
    {
        if('author' === $name) {
            if(isset($this->author_id)) {
                return Author::findById($this->author_id);
            } else {
                return null;
            }
        }
    }

    /**
     * @param $name
     * @return bool|null
     */
    public function __isset($name)
    {
        if('author' === true) {
            if(!empty($this->author_id)) {
                return Author::findById($this->$this->author_id);
            }
            return false;
        }
    }
    /**
     * @return array
     */
    public static function findAllNews()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . self::TABLE . ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql,
            [],
            self::class);
    }

    /**
     * @param $id
     * @return bool
     */
    public static function findByIdArticle($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . self::TABLE . ' WHERE id=:id';
        $result = $db->query($sql,
            [':id' => $id],
            self::class
        );
        // исправила ошибку с прошлого урока
        return $result ? $result[0] : null;
    }

}