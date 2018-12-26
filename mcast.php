<?php

#$mcast = array (
#    "navn"  => array("a" => "orange", "b" => "banana", "c" => "apple"),"ip" => array(1, 2, 3, 4, 5, 6));
#

$mcast1 = implode('', file('http://192.168.1.43/YamahaExtendedControl/v1/main/getStatus'));
$getm1 = file_get_contents($mcast1, FALSE, NULL, 20, 14);
$out1 = substr($mcast1, 28, 2);

$mcast2 = implode('', file('http://192.168.1.46/YamahaExtendedControl/v1/main/getStatus'));
$getm2 = file_get_contents($mcast2, FALSE, NULL, 20, 14);
$out2 = substr($mcast2, 28, 2);

$mcast3 = implode('', file('http://192.168.1.40/YamahaExtendedControl/v1/main/getStatus'));
$getm3 = file_get_contents($mcast3, FALSE, NULL, 20, 14);
$out3 = substr($mcast3, 28, 2);

$mcast4 = implode('', file('http://192.168.1.42/YamahaExtendedControl/v1/main/getStatus'));
$getm4 = file_get_contents($mcast4, FALSE, NULL, 20, 14);
$out4 = substr($mcast4, 28, 2);

#$array = [ '43', '46', '40', '42' ];
#$rest =  array();

#foreach( $array as $value ){
 #  $html = implode('', file('http://192.168.1.$value/YamahaExtendedControl/v1/main/getStatus'));
	#echo $html;
	#echo $array;
	#echo $value;
	#$section = file_get_contents($html, FALSE, NULL, 20, 14);
#}

#$rest[43] = substr($html, 28, 2);
#echo $rest[43];



?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
table, th, td {
  border: 1px solid black;
}
.button {
  display: inline-block;
  padding: 5px 10px;
  font-size: 10px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 10px;
  box-shadow: 0 2px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 2px #666;
  color: #fff;
  transform: translateY(4px);
}
.button1 {
  display: inline-block;
  padding: 5px 10px;
  font-size: 10px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #ff0000;
  border: none;
  border-radius: 10px;
  box-shadow: 0 2px #999;
}

.button1:hover {background-color: #c10202}

.button1:active {
  background-color: #c10202;
  box-shadow: 0 2px #666;
  color: #fff;
  transform: translateY(4px);
}
</style>
</head>
<body>
<iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>
<table>
<tr>
	<th><h1>Soverom</h1></th>
	<th><h1>Stue</h1></th>
	<th><h1>Bad</h1></th>
	<th><h1>Kjøkken</h1></th>
</tr>
<tr>
<th>
<form action="http://192.168.1.43/YamahaExtendedControl/v1/main/setPower" method="get" target="dummyframe">
<?php
if ($out1 == 'on') {
    echo '<button class="button1" name="power" type="submit" value="standby">Av</button>';
} elseif ($out1 == 'st') {
    echo '<button class="button" name="power" type="submit" value="on">På</button>';
} else {
    echo "whatafuck";
}
?>
</form>
<form action="http://192.168.1.43/YamahaExtendedControl/v1/main/setInput" method="get" target="dummyframe">
<button class="button" name="input" type="submit" value="net_ra">Radio</button>
</form>

<form action="http://192.168.1.43/YamahaExtendedControl/v1/main/setMute" method="get" target="dummyframe">
<button class="button" name="enable" type="submit" value="true">Mute</button>
<button class="button" name="enable" type="submit" value="false">UnMute</button>
</form>


<form action="http://192.168.1.43/YamahaExtendedControl/v1/main/setVolume" method="get" target="dummyframe">
<button class="button" name="volume" type="submit" value="up">+</button>
<button class="button" name="volume" type="submit" value="down">-</button>
</form>
</th>

<th>

<form action="http://192.168.1.46/YamahaExtendedControl/v1/main/setPower" method="get" target="dummyframe">
<?php
if ($out2 == 'on') {
    echo '<button class="button1" name="power" type="submit" value="standby">Av</button>';
} elseif ($out2 == 'st') {
    echo '<button class="button" name="power" type="submit" value="on">På</button>';
} else {
    echo "whatafuck";
}
?>
</form>
<form action="http://192.168.1.46/YamahaExtendedControl/v1/main/setInput" method="get" target="dummyframe">
<button class="button" name="input" type="submit" value="net_ra">Radio</button>
</form>

<form action="http://192.168.1.46/YamahaExtendedControl/v1/main/setMute" method="get" target="dummyframe">
<button class="button" name="enable" type="submit" value="true">Mute</button>
<button class="button" name="enable" type="submit" value="false">UnMute</button>
</form>


<form action="http://192.168.1.46/YamahaExtendedControl/v1/main/setVolume" method="get" target="dummyframe">
<button class="button" name="volume" type="submit" value="up">+</button>
<button class="button" name="volume" type="submit" value="down">-</button>
</form>
</th>

<th>
<form action="http://192.168.1.40/YamahaExtendedControl/v1/main/setPower" method="get" target="dummyframe">
<?php
if ($out3 == 'on') {
    echo '<button class="button1" name="power" type="submit" value="standby">Av</button>';
} elseif ($out3 == 'st') {
    echo '<button class="button" name="power" type="submit" value="on">På</button>';
} else {
    echo "whatafuck";
}
?>
</form>
<form action="http://192.168.1.40/YamahaExtendedControl/v1/main/setInput" method="get" target="dummyframe">
<button class="button" name="input" type="submit" value="net_ra">Radio</button>
</form>

<form action="http://192.168.1.40/YamahaExtendedControl/v1/main/setMute" method="get" target="dummyframe">
<button class="button" name="enable" type="submit" value="true">Mute</button>
<button class="button" name="enable" type="submit" value="false">UnMute</button>
</form>


<form action="http://192.168.1.40/YamahaExtendedControl/v1/main/setVolume" method="get" target="dummyframe">
<button class="button" name="volume" type="submit" value="up">+</button>
<button class="button" name="volume" type="submit" value="down">-</button>
</form>
</th>

<th>

<form action="http://192.168.1.42/YamahaExtendedControl/v1/main/setPower" method="get" target="dummyframe">
<?php
if ($out4 == 'on') {
    echo '<button class="button1" name="power" type="submit" value="standby">Av</button>';
} elseif ($out4 == 'st') {
    echo '<button class="button" name="power" type="submit" value="on">På</button>';
} else {
    echo "whatafuck";
}
?>
</form>
<form action="http://192.168.1.42/YamahaExtendedControl/v1/main/setInput" method="get" target="dummyframe">
<button class="button" name="input" type="submit" value="net_ra">Radio</button>
</form>

<form action="http://192.168.1.42/YamahaExtendedControl/v1/main/setMute" method="get" target="dummyframe">
<button class="button" name="enable" type="submit" value="true">Mute</button>
<button class="button" name="enable" type="submit" value="false">UnMute</button>
</form>


<form action="http://192.168.1.42/YamahaExtendedControl/v1/main/setVolume" method="get" target="dummyframe">
<button class="button" name="volume" type="submit" value="up">+</button>
<button class="button" name="volume" type="submit" value="down">-</button>
</form>
</th>

</tr>
</table>

</body>
</html>