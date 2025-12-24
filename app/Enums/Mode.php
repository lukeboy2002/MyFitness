<?php

namespace App\Enums;

enum Mode: string
{
    case TIME = 'time';
    case HEARTBEAT = 'heartbeat';
    case MOUNTAIN = 'mountain';
    case SUN = 'sun';
}
