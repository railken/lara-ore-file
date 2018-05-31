<?php

namespace Railken\LaraOre\File\Attributes\DeletedAt\Exceptions;

use Railken\LaraOre\File\Exceptions\FileAttributeException;

class FileDeletedAtNotDefinedException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'deleted_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_DELETED_AT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}