<?php namespace Gitlab\Tests\Api;

use Gitlab\Api\AbstractApi;

class KeysTest extends ApiTestCase
{
    /**
     * @test
     */
    public function shouldShowKey()
    {
        $expectedArray = array('id' => 1, 'title' => 'A key', 'key' => 'ssh-rsa key', 'created_at' => '2016-01-01T01:00:00.000Z');
        $api = $this->getApiMock();
        $api->expects($this->once())
            ->method('get')
            ->with('/projects/1/deploy_keys')
            ->will($this->returnValue($expectedArray));

        $this->assertEquals($expectedArray, $api->show(1));
    }

    protected function getApiClass()
    {
        return 'Gitlab\Api\Keys';
    }
}
