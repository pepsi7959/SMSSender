<?php
/*
curl -X POST  https://rest.nexmo.com/sms/json \
-d api_key=eeb3aeb3 \
-d api_secret=3J33DCz1AQevWPsU \
-d to=66817264466 \
-d from="NEXMO" \
-d text="Hello from Nexmo"
*/

class sms {

<<<<<<< HEAD
    private $conn = null;

    private $endpoint='rest.nexmo.com';
    private $uri='sms/json';
    private $port = '443';
    private $api_key='eeb3aeb3';
    private $api_secret='3J33DCz1AQevWPsU';
    private $from='ega';
    
    private function __construct(){ }

    public static function init(){
        $instance = new self();
=======
	private $conn = null;

	private $endpoint='rest.nexmo.com';
	private $uri='sms/json';
	private $port = '443';
	private $api_key='eeb3aeb3';
	private $api_secret='3J33DCz1AQevWPsU';
	private $from='ega';
	
	private function __construct(){ }

    public static function init(){
    	$instance = new self();
>>>>>>> bb07dbfd764a06923827b47cdb035ffc6fd4aa06
        return $instance;
    }

    public function sendSMS($to, $msg, $SSL=true){
<<<<<<< HEAD
        
        if( is_null($this->conn) ){
            $this->conn = curl_init();
        }

        if( !is_null($this->conn) ){
=======
		
		if( is_null($this->conn) ){
			$this->conn = curl_init();
		}

		if( !is_null($this->conn) ){
>>>>>>> bb07dbfd764a06923827b47cdb035ffc6fd4aa06

            if( $SSL == true){
                curl_setopt($this->conn, CURLOPT_URL, "https://$this->endpoint:$this->port/$this->uri");
            }else{
                curl_setopt($this->conn, CURLOPT_URL, "http://$this->endpoint:$this->port/$this->uri");
            }
            
            $playload = "api_key=".$this->api_key."&api_secret=".$this->api_secret."&to=".$to."&from=".$this->from."&text=".$msg;
            curl_setopt($this->conn, CURLOPT_POSTFIELDS, $playload);
            curl_setopt($this->conn, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($this->conn, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($this->conn);

            if ($response === false) {
                $info = curl_getinfo($this->conn);
                curl_close($this->conn);
                die('error occured during curl exec. Additioanl info: ' . var_export($info));
            }

            curl_close($this->conn);
            
            return $response;
        }else{
<<<<<<< HEAD
            return "Oops! Something weng wrong";
=======
        	return "Oops! Something weng wrong";
>>>>>>> bb07dbfd764a06923827b47cdb035ffc6fd4aa06
        }
    }
}
?>
