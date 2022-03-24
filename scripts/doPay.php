<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class doPay{

    private $url = 'https://api.impaya.ru/session';
    private $merchant = 'OnFinance';
    private $merchantPass = 'wn#65Q7tiMR2sE0gu0aj';
    private $key = 'denezhka-24_non3ds';
    private $pass = 'JXmHSJj7LT$vb4S~{@TG';
    private $key3ds = 'denezhka-24_3ds';
    private $pass3ds = 'JXmHSJj7LT$vb4S~{@TG';
    
    public function getToken(){


        $post_data = '{
                        "key": "'. $this->key3ds .'",
                        "merchant_order_id": "'.$_GET['leadId'].'",
                        "amount": 100,
                        "add_card": true,
                        "type": "Add",
                        "payment_type": "OneStep",
                        "lifetime": 10000,
                        "credential": {
                        "terminal_password": "'.$this->pass3ds.'",
                        "login": "'.$_GET['login'].'",
                        "password": "'.$_GET['password'].'"
                        },
                        "custom_params_raw": "successUrl=https://denezhka-24.ru/success.php?lead_id='.$_GET['leadId'].'&partner='.$_GET['partner'].'&domine=denezhka-24.ru",
                        "action": "",
                        "recurrent": true
                    }';

        $headers = [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($post_data)
        ]; 
        //print_r($post_data);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_VERBOSE, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_POST, true); 
        

        $result = json_decode(curl_exec($curl));
        //var_dump($result);
        
        echo $this->url .'/'.$result->SessionGUID;
        //$this->return();
    }

    
    public function unicString($strength = 5) {
        $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_';
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        return $random_string.str_replace('.', '', microtime(true));
    }
}



$init = new doPay();

if(!isset($_GET['leadId'])){$_GET['leadId'] = $init->unicString();}

switch ($_GET['type']) {
    case 'getToken':
        $init->getToken();
        break;
    case 'return':
        $init->return();
        break;

    default:
        echo "no method";
        break;
}