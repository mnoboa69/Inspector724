<?php

//namespace App\Http\Administration;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Administration\CtrlCompa;
use App\Http\Administration\Company;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminCompanyTest
 *
 * @author lex
 */
class AdminCompanyTest extends TestCase {

    const PLAN_ID = 1;

    //put your code here
    public function setUp() {
        $this->prepareForTests();
    }

    private function prepareForTests() {
//        Illuminate\Support\Facades\Artisan::call('migrate');
//        Mail::pretend(true);
    }

    public function testCreateCompanyAllCorrectArguments() {
        $name = 'Pepe';
        $lastName = 'Barrio';
        $startDate = date('Y-m-d H:i:s');
        $newDate = strtotime('+1 year', strtotime($startDate));
        $endDate = date('Y-m-d H:i:s', $newDate);
        $company = new Company();
        $this->assertTrue($company->createCompany($name, self::PLAN_ID, $startDate, $endDate, $lastName));
    }

    public function createApplication() {
        $unitTesting = true;

        $testEnvironment = 'testing';

//        return require __DIR__ . '/../../bootstrap/start.php';
    }

}
