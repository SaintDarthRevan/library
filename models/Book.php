<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $genre
 * @property string $year
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'author', 'genre', 'year'], 'required'],
            [['year'], 'integer', 'max' => date('Y'), 'message' => 'Год не может быть выше текущего'],
            [['title', 'author', 'genre'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'author' => 'Автор',
            'genre' => 'Жанр',
            'year' => 'Год',
        ];
    }
}
