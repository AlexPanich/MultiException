<?php

namespace AlexPanich;

class MultiException extends \Exception implements \ArrayAccess, \Iterator
{
    use TCollection;
}