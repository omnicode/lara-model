<?php
namespace LaraModel\Models;

use Illuminate\Database\Eloquent\Model;
use LaraModel\Builder\LaraEloquentBuilder;
use LaraModel\Builder\LaraQueryBuilder;
use LaraModel\Traits\ModelExtrasTrait;

class LaraModel extends Model
{
    use ModelExtrasTrait;
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

    /**
     * @return LaraQueryBuilder
     */
    protected function newBaseQueryBuilder()
    {
        $connection = $this->getConnection();

        return new LaraQueryBuilder(
            $connection, $connection->getQueryGrammar(), $connection->getPostProcessor()
        );
    }

    /**
     * @param \Illuminate\Database\Query\Builder $query
     * @return LaraEloquentBuilder
     */
    public function newEloquentBuilder($query)
    {
        return new LaraEloquentBuilder($query);
    }
}
