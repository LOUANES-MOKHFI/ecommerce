<?php

namespace App\Exceptions;

use Exception;

class QuantityExceededException extends Exception
{
    
    public $message = 'You have added thr maximum stock for this item';
}
