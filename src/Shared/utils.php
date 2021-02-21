<?php

namespace App\Shared;

use DateTime;
use DateTimeInterface;

function date_to_string(DateTimeInterface $date): string
{
    return $date->format(DateTime::ATOM);
}