<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class doRecurrent{
    /*
Тестовый терминал.
     * https://api-stage.impaya.ru/
     * merchant_name: OnFinance_test
merchant_password: FxCF%Q*2rNXlskyteplI
terminal_name: OnFinance_3ds_test
terminal_password: FxCF%Q*2rNXlskyteplI
terminal_name: OnFinance_non3ds_test
terminal_password: FxCF%Q*2rNXlskyteplI
     *      */

    private $url = 'https://api.impaya.ru/session';
    private $merchant = 'OnFinance';
    private $merchantPass = 'wn#65Q7tiMR2sE0gu0aj';
    private $key = 'denezhka-24_non3ds';
    private $pass = 'JXmHSJj7LT$vb4S~{@TG';
    private $key3ds = 'denezhka-24_3ds';
    private $pass3ds = 'JXmHSJj7LT$vb4S~{@TG';
    
    public function init(){
        

        /*$_POST = array(
            'amount' => 10000,
            'access_token' => '856a7ad7-4fc1-4943-9095-2a71047d9072',
        );*/
        if (
                isset($_POST['login']) 
                && isset($_POST['password'])
                && !empty($_POST['login']) 
                && !empty($_POST['password'])
                && $_POST['login'] != null 
                && $_POST['password'] != null
            )
        {
            $post_data = '{
                            "key": "'.  $this->key .'",
                            "card": {
                                "uid": "'. $_POST['access_token'] .'"
                            },
                            "merchant_order_id": "'. $this->unicString() .'",
                            "amount": '. $_POST['amount'] .',
                            "credential": {
                                "login": "'.$_POST['login'].'",
                                "password": "'.$_POST['password'].'"
                            }
                        }';
        }else {
            $post_data = '{
                            "key": "' . $this->key . '",
                            "card": {
                                "uid": "' . $_POST['access_token'] . '"
                            },
                            "merchant_order_id": "' . $this->unicString() . '",
                            "amount": ' . $_POST['amount'] . ',
                            "credential": {
                                "merchant_name": "' . $this->merchant . '",
                                "merchant_password": "' . $this->merchantPass . '"
                            }
                        }';
        }
        
         //echo $post_data;
        var_dump($post_data);
        $headers = [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($post_data)
        ];
        var_dump($headers);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_VERBOSE, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_POST, true); 
        

        $result = curl_exec($curl);
        var_dump($result);

        echo $result;
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

$init = new doRecurrent();
$init->init();