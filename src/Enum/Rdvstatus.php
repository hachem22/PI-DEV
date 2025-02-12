<?php

namespace App\Enum;

enum Rdvstatus: string
{
    case PLANNED = 'planned';
    case CONFIRMED = 'confirmed';
    case CANCELED = 'canceled';
    case COMPLETED = 'completed';
}