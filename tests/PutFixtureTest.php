<?php

namespace Alnutile\Fixtures\Tests;

use Illuminate\Support\Facades\File;

class PutFixtureTest extends TestCase
{
    public function test_puts_fixture()
    {
        File::shouldReceive('exists')->andReturnTrue();
        File::shouldReceive('put')->once();
        put_fixture('example_fixture.json');
    }
}
