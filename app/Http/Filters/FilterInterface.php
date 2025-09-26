<?php


namespace App\Http\Filters;

use Illuminate\Contracts\Database\Eloquent\Builder;

class FilterInterface
{
    public function apply(Builder $builder)
}