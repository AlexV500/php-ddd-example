<?php

namespace App\Domain\Model\Post;

use App\Domain\Shared\AbstractDocument;
use JsonSerializable;

class Post extends AbstractDocument
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->uuid = $data['uuid'];
        $this->text = isset($data['text']) ? $data['text'] : '';
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}