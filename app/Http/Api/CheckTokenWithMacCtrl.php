<?php

namespace App\Http\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CheckTokenWithMacCtrl extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function checkTokenWithMac($json) {

        // {"data":[{"MacAddress":"D4-BE-D9-EC-21-5B","Token":null,"ApiId":"","SecretKey":""}],"Action":"CheckTokenViaMAC","Status":"OnRequest"}
        // {"data":[{"MacAddress":"D4-BE-D9-EC-21-5B","Token":"fc18df28ef19607f75630ddf155d236e","ApiId":"a05da160d253e0287b23b73d5c58199ca8101719","SecretKey":"2e4125e1c5262c1905d6bfa2290caf28386a5ee6"}],"Action":"CheckTokenViaMAC","Status":"OnRequest"}
        // 
        // $json = file_get_contents('php://input');
        $obj = json_decode($json, TRUE);

        /* Archivo  registro log */
        $j = '============================================';
        $ser = $json;
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $path = realpath("./") . ConfigApi::LOG_CHECKTOHENWITHMAC;
        } else {
            $path = realpath("./") . '/primarysetup/checktokenwithmac.txt';
        }
        $fp = fopen($path, 'a');
        $responseJson = fwrite($fp, $ser);
        $responseSeparator = fwrite($fp, $j);
        fclose($fp);

        /* Archivo  fin registro log */

        $objApiToken = new \App\apitoken();


        /*         * ****** return  json *********** */

        if ($responseJson != FALSE and $responseSeparator != FALSE) {
            /**  buscamos en la  base de  datos * */
            $data = $objApiToken->findTokenWithMac($obj["data"]["MacAddress"], $obj["data"]["Token"]);
            if (is_array($data) and count($data) > 0) {
                $obj["data"][0]["Token"] = $data["token"]; // $modelApitoken->token;
                $obj["Status"] = 'Success';
                return json_encode($obj);
            } else {
                $obj["data"][0]["ApiId"] = '';
                $obj["data"][0]["ApiKey"] = '';
                $obj["Action"] = "CheckTokenWithMac";
                $obj["Status"] = "Error";
                return json_encode($obj);
            }
        } else {
            $obj["data"][0]["ApiId"] = '';
            $obj["data"][0]["ApiKey"] = '';
            $obj["Action"] = "CheckTokenWithMac";
            $obj["Status"] = "Error";
            return json_encode($obj);
        }



        /* buscamos  en la base de  datos */
    }

}
