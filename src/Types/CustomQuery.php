<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

/**
 * Class CustomQuery
 *
 * @package TelegramBot\Api\Types
 */
class CustomQuery extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['id', 'data'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'id' => true,
        'data' => true,
    ];

    /**
     * Unique identifier for this query
     *
     * @var string
     */
    protected $id;

    /**
     * Optional. Data associated with the custom query.
     * Be aware that a bad client can send arbitrary data in this field.
     *
     * @var string
     */
    protected $data;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}
