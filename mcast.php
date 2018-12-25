<?php

#$mcast = array (
#    "navn"  => array("a" => "orange", "b" => "banana", "c" => "apple"),"ip" => array(1, 2, 3, 4, 5, 6));
#

$html = implode('', file('http://192.168.1.43/YamahaExtendedControl/v1/main/getStatus'));
$section = file_get_contents($html, FALSE, NULL, 20, 14);
$rest = substr($html, 28, 2);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
table, th, td {
  border: 1px solid black;
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
if ($rest == 'on') {
    echo '<button name="power" type="submit" value="standby">Av</button>';
} elseif ($rest == 'st') {
    echo '<button name="power" type="submit" value="on">På</button>';
} else {
    echo "whatafuck";
}
?>
</form>
<form action="http://192.168.1.43/YamahaExtendedControl/v1/main/setInput" method="get" target="dummyframe">
<button name="input" type="submit" value="net_ra">Radio</button>
</form>

<form action="http://192.168.1.43/YamahaExtendedControl/v1/main/setMute" method="get" target="dummyframe">
<button name="enable" type="submit" value="true">Mute</button>
<button name="enable" type="submit" value="false">UnMute</button>
</form>


<form action="http://192.168.1.43/YamahaExtendedControl/v1/main/setVolume" method="get" target="dummyframe">
<button name="volume" type="submit" value="up">+</button>
<button name="volume" type="submit" value="down">-</button>
</form>
</th>

<th>

<form action="http://192.168.1.46/YamahaExtendedControl/v1/main/setPower" method="get" target="dummyframe">
<button name="power" type="submit" value="on">På</button>
<button name="power" type="submit" value="standby">Av</button>
</form>
<form action="http://192.168.1.46/YamahaExtendedControl/v1/main/setInput" method="get" target="dummyframe">
<button name="input" type="submit" value="net_ra">Radio</button>
</form>

<form action="http://192.168.1.46/YamahaExtendedControl/v1/main/setMute" method="get" target="dummyframe">
<button name="enable" type="submit" value="true">Mute</button>
<button name="enable" type="submit" value="false">UnMute</button>
</form>


<form action="http://192.168.1.46/YamahaExtendedControl/v1/main/setVolume" method="get" target="dummyframe">
<button name="volume" type="submit" value="up">+</button>
<button name="volume" type="submit" value="down">-</button>
</form>
</th>

<th>
<form action="http://192.168.1.40/YamahaExtendedControl/v1/main/setPower" method="get" target="dummyframe">
<button name="power" type="submit" value="on">På</button>
<button name="power" type="submit" value="standby">Av</button>
</form>
<form action="http://192.168.1.40/YamahaExtendedControl/v1/main/setInput" method="get" target="dummyframe">
<button name="input" type="submit" value="net_ra">Radio</button>
</form>

<form action="http://192.168.1.40/YamahaExtendedControl/v1/main/setMute" method="get" target="dummyframe">
<button name="enable" type="submit" value="true">Mute</button>
<button name="enable" type="submit" value="false">UnMute</button>
</form>


<form action="http://192.168.1.40/YamahaExtendedControl/v1/main/setVolume" method="get" target="dummyframe">
<button name="volume" type="submit" value="up">+</button>
<button name="volume" type="submit" value="down">-</button>
</form>
</th>

<th>

<form action="http://192.168.1.42/YamahaExtendedControl/v1/main/setPower" method="get" target="dummyframe">
<button name="power" type="submit" value="on">På</button>
<button name="power" type="submit" value="standby">Av</button>
</form>
<form action="http://192.168.1.42/YamahaExtendedControl/v1/main/setInput" method="get" target="dummyframe">
<button name="input" type="submit" value="net_ra">Radio</button>
</form>

<form action="http://192.168.1.42/YamahaExtendedControl/v1/main/setMute" method="get" target="dummyframe">
<button name="enable" type="submit" value="true">Mute</button>
<button name="enable" type="submit" value="false">UnMute</button>
</form>


<form action="http://192.168.1.42/YamahaExtendedControl/v1/main/setVolume" method="get" target="dummyframe">
<button name="volume" type="submit" value="up">+</button>
<button name="volume" type="submit" value="down">-</button>
</form>
</th>

</tr>
</table>

</body>
</html>