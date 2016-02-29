<?php


class MultiException extends \Exception implements \ArrayAccess, \Iterator
{
    use TCollection;
}