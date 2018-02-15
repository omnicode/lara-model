<?php
namespace LaraModel\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use LaraModel\Traits\ModelExtrasTrait;
use Illuminate\Notifications\Notifiable;

class LaraAuthenticatable extends Authenticatable
{
    use ModelExtrasTrait, Notifiable;

    /**
     * @var
     */
    protected $indexable;

    /**
     * @var
     */
    protected $showable;

    /**
     * @var string
     */
    protected $statusColumn = 'status';

    /**
     * @var array
     */
    protected $actions = [
        'show',
        'edit',
        'destroy'
    ];
}