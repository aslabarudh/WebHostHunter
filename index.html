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
	echo "<br>";
	echo "MX Records are :";
	echo "</br>";
	if(dns_get_mx($web, $mx_details)) {
    //foreach( $mx_details as $key => $value) {
		$mxRec=$mx_details[0];
		echo $mx_details[0];
		echo "</br>";
		echo "<br>";
		echo "Checking IP behind these MX records, Wait some seconds...";
		echo "<br>";
		echo "<br>";
		echo "<b>For more info visit</b>";
		echo "<br>";
		$url2="https://mxtoolbox.com/SuperTool.aspx?action=mx%3a".$web."&run=toolpage";
		echo "<b><a href=".$url2." target='_blank'>HERE</a></b>";
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
