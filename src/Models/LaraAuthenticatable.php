<?php
namespace LaraModel\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use LaraTools\Models\Traits\ModelExtrasTrait;
use Illuminate\Notifications\Notifiable;

class LaraAuthenticatable extends Authenticatable
{
    use ModelExtrasTrait, Notifiable;
}