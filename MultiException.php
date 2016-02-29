<?php

namespace AlexPanich\MultiException;

class MultiException extends \Exception implements \ArrayAccess, \Iterator
{
    use TCollection;
}