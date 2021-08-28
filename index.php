<html>

<head>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>WebHostHunter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-1 col-md-2 col-lg-12">
                <div id="main" class="col-sm-1 col-md-2 col-lg-12">
                    <div class="col-sm-1 col-md-2 col-lg-12">
                        <h1>WebHostHunter</h1>
                    </div>
                    <div id="login">
                        <h2>WebHostHunter</h2>
                        <hr>
                        <div id="right">
                            <form name="myForm" method="post" action="index.php">
                                Please Enter the Website:<br /><br />
                                <input type="text" size=30 name="text" id="text"
                                    placeholder="Don't use HTTP/HTTPS" required><br /><br />
                                <div class="col-sm-1 col-md-2 col-lg-12"> <input type="submit" value="Check"
                                        id="dsubmit" name="submit"></div>
                            </form>
                            <div id="result">
                                <?php
if (isset($_POST['submit'])) {
$web = $_POST['text'];
$ip = gethostbyname($web);
$specKey='5b66022712ad4c0294d7cb0b2fdbea73';
$url="https://api.ipgeolocation.io/ipgeo?apiKey=".$specKey."&ip=".$ip;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
$res = curl_exec($ch); 
$finalres = (array) json_decode($res,true);  



echo "<table id ='tid' >";
echo "<th>";
echo "Result";
echo "</th>";
echo "<tr>";
echo "<td>";
if(substr($finalres['organization'],0,10)=='Cloudflare'){
	echo "</br>";
    echo "Proxied IP : ".$finalres['ip'];
	echo "</br>";
	echo "</br>";
	echo "<b>In current condition, the HOSTING server can't be found as IP is bypassed through CLOUDFLARE Inc.</b>";
	echo "</br>";
	echo "</br>";
	echo "</br>";
	echo "<i>Trying with MX records, if not proxied, You will get HOSTING SERVER DETAILS,However, Accuracy not guaranteed...</i>";
	echo "</br>";
	echo "MX Records are :";
	echo "</br>";
	if(dns_get_mx($web, $mx_details)) {
    //foreach( $mx_details as $key => $value) {
		$mxRec=$mx_details[0];
		https://mxtoolbox.com/SuperTool.aspx?action=mx%3ab0mber.com&run=toolpage
		echo $mx_details[0];
		echo "</br>";
		echo "Checking IP behind these MX records, Wait some seconds...";
		$ip2 = gethostbyname($mxRec);
		$specKey2='5b66022712ad4c0294d7cb0b2fdbea73';
		$url2="https://api.ipgeolocation.io/ipgeo?apiKey=".$specKey2."&ip=".$ip;
		$ch2 = curl_init($url2);
		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);   
		$res2 = curl_exec($ch2); 
		$finalres2 = (array) json_decode($res2,true);
		
		echo "</br>";
    echo "IP : ".$finalres2['ip'];
	echo "</br>";
	echo "CITY : ".$finalres2['city'];
	echo "</br>";
	echo "DISTRICT : ".$finalres2['district'];
	echo "</br>";
	echo "ZIP CODE : ".$finalres2['zipcode'];
	echo "</br>";
    echo "STATE : ".$finalres2['state_prov'];
	echo "</br>";
    echo "COUNTRY CAPITAL : ".$finalres2['country_capital'];
	echo "</br>";
    echo "COUNTRY : ".$finalres2['country_name'];
	echo "</br>";
    echo "COUNTRY CODE : ".$finalres2['country_code3'];
	echo "</br>";
    echo "CONTINENT : ".$finalres2['continent_name'];
	echo "</br>";
	echo "CONTINENT CODE : ".$finalres2['continent_code'];
	echo "</br>";
	echo "LANGUAGES : ".$finalres2['languages'];
	echo "</br>";
	echo "COUNTRY gTLD : ".$finalres2['country_tld'];
	echo "</br>";
    echo "*****************************************";
	echo "</br>";
	echo "Hosting ORG : ".$finalres2['organization'];
	echo "</br>";
	echo "ISP : ".$finalres2['isp'];
	echo "</br>";
	echo "ASN : ".$finalres2['asn'];
	echo "</br>";
}
}
else{
echo "</br>";
    echo "IP : ".$finalres['ip'];
	echo "</br>";
	echo "CITY : ".$finalres['city'];
	echo "</br>";
	echo "DISTRICT : ".$finalres['district'];
	echo "</br>";
	echo "ZIP CODE : ".$finalres['zipcode'];
	echo "</br>";
    echo "STATE : ".$finalres['state_prov'];
	echo "</br>";
    echo "COUNTRY CAPITAL : ".$finalres['country_capital'];
	echo "</br>";
    echo "COUNTRY : ".$finalres['country_name'];
	echo "</br>";
    echo "COUNTRY CODE : ".$finalres['country_code3'];
	echo "</br>";
    echo "CONTINENT : ".$finalres['continent_name'];
	echo "</br>";
	echo "CONTINENT CODE : ".$finalres['continent_code'];
	echo "</br>";
	echo "LANGUAGES : ".$finalres['languages'];
	echo "</br>";
	echo "COUNTRY gTLD : ".$finalres['country_tld'];
	echo "</br>";
    echo "*****************************************";
	echo "</br>";
	echo "Hosting ORG : ".$finalres['organization'];
	echo "</br>";
	echo "ISP : ".$finalres['isp'];
	echo "</br>";
	echo "ASN : ".$finalres['asn'];
	echo "</br>";
}
echo"</td>";
echo"</tr>";
echo"</table>";   

}
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>