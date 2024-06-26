<?php

namespace Modules\Idocs\Events;

use Modules\Idocs\Entities\Document;
use Modules\Media\Contracts\StoringMedia;

class DocumentWasUpdated implements StoringMedia
{
    /**
     * @var array
     */
    public $data;

    /**
     * @var Post
     */
    public $document;

    public function __construct(Document $document, array $data)
    {
        $this->data = $data;
        $this->document = $document;
    }

    /**
     * Return the entity
     */
    public function getEntity()
    {
        return $this->document;
    }

    /**
     * Return the ALL data sent
     */
    public function getSubmissionData()
    {
        return $this->data;
    }
}
