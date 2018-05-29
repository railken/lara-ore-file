<?php

namespace Railken\LaraOre\File\Tests\Laravel\App\Foo\Attributes\UpdatedAt\Exceptions;

use Railken\LaraOre\File\Tests\Laravel\App\Foo\Exceptions\FooAttributeException;

class FooUpdatedAtNotDefinedException extends FooAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'updated_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FOO_UPDATED_AT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
