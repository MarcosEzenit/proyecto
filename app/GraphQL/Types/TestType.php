<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use App\Test;

class TestType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Test',
        'description' => 'A type',
        'model' => Test::class
    ];

    public function fields(): array
    {
        print("GETTING FIELDS");
        return [
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Name of the test'
            ],
        ];
    }
}
