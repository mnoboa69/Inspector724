<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestCheckTokenWithMac extends TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample() {
        $this->visit('/')
                ->see('Laravel 5');
    }

    public function testFormatJsonCheckTokenWithMac() {
        $objCheck = new App\Http\Api\CheckTokenWithMacCtrl();
        $json = '{"data":[{"MacAddress":"D4-BE-D9-EC-21-5B","Token":null,"ApiId":"","SecretKey":""}],"Action":"CheckTokenViaMAC","Status":"OnRequest"}';
        $data = $objCheck->checkTokenWithMac($json);
        $this->assertJson($data);
        /* valido si tiene una  correcta  estructura */
        $arrayData = json_decode($data, true);
        $this->assertArrayHasKey('MacAddress', $arrayData["data"][0]);
        $this->assertArrayHasKey('Token', $arrayData["data"][0]);
        $this->assertArrayHasKey('ApiId', $arrayData["data"][0]);
        $this->assertArrayHasKey('SecretKey', $arrayData["data"][0]);
        $this->assertArrayHasKey('Action', $arrayData);
        $this->assertArrayHasKey('Status', $arrayData);
//        $status = $arrayData["Status"];
//        $this->assertEquals("Error", $status);
    }

    public function testFindTokenWithMacSucess() {
        $objCheck = new App\Http\Api\CheckTokenWithMacCtrl();
        $json = '{"data":[{"MacAddress":"D4-BE-D9-EC-21-5B","Token":null,"ApiId":"","SecretKey":""}],"Action":"CheckTokenViaMAC","Status":"OnRequest"}';
        $data = $objCheck->checkTokenWithMac($json);
        $this->assertJson($data);
    }

}
