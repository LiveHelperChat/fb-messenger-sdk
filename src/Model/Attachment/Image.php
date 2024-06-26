<?php

namespace Tgallice\FBMessenger\Model\Attachment;

use Tgallice\FBMessenger\Model\Attachment;

class Image extends File
{
    protected $allowedExtensions = [];
    
    public function __construct($filePath)
    {
        parent::__construct($filePath, Attachment::TYPE_IMAGE);
    }
}
