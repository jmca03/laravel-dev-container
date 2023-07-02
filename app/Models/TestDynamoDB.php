<?php

namespace App\Models;

use BaoPham\DynamoDb\DynamoDbModel as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestDynamoDB extends Model
{
    use HasFactory;

    protected $table = 'test';
}
