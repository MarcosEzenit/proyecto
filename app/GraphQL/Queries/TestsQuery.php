<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

class TestsQuery extends Query
{
    protected $attributes = [
        'name' => 'tests',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('test'));
    }

    public function args(): array
    {
        return [
            'name' => [
                'name' => 'name',
                'type' => Type::int()
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $select = $fields->getSelect();
        $with = $fields->getRelations();
        print("GETTING ALL TESTS");
        return Test::all();
    }
}
