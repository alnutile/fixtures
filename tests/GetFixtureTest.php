<?php

namespace Alnutile\Fixtures\Tests;

use Illuminate\Support\Facades\File;

class GetFixtureTest extends TestCase
{
    public function test_gets_fixture()
    {
        $data = <<<'EOD'
{
    "baz": "boo"
}
EOD;
        File::shouldReceive('get')->andReturn($data);
        $data = get_fixture('example_fixture.json');
        $this->assertNotEmpty($data);
        $this->assertArrayHasKey('baz', $data);
    }
}
