<table class="listingtable">
 <tr>
   <th width="80" rowspan="2">Module</th>
   <th width="130" rowspan="2">Name</th>
   <th width="65" rowspan="2">Users</th>
   <th colspan="2">DPlus</th>
   <th colspan="2">DExtra</th>
   <th colspan="2">DCS</th>
   <th width="65" rowspan="2">DMR</th>
   <th width="65" rowspan="2">YSF<br />DG-ID</th>
 </tr>
 <tr>
   <th width="100">URCALL</th>
   <th width="100">DTMF</th>
   <th width="100">URCALL</th>
   <th width="100">DTMF</th>
   <th width="100">URCALL</th>
   <th width="100">DTMF</th>
 </tr>
<?php

$ReflectorNumber = substr($Reflector->GetReflectorName(), 3, 3);
$NumberOfModules = isset($PageOptions['NumberOfModules']) ? min(max($PageOptions['NumberOfModules'],0),26) : 26;

$odd = "";

for ($i = 1; $i <= $NumberOfModules; $i++) {

   $module = chr(ord('A')+($i-1));

   if ($odd == "#FFFFFF") { $odd = "#F1FAFA"; } else { $odd = "#FFFFFF"; }

   echo '
 <tr height="30" bgcolor="'.$odd.'" onMouseOver="this.bgColor=\'#FFFFCA\';" onMouseOut="this.bgColor=\''.$odd.'\';">
   <td align="center">'. $module .'</td>
   <td align="center">'. (empty($PageOptions['ModuleNames'][$module]) ? '-' : $PageOptions['ModuleNames'][$module]) .'</td>
   <td align="center">'. count($Reflector->GetNodesInModulesByID($module)) .'</td>
   <td align="center">'. 'REF' . $ReflectorNumber . $module . 'L' .'</td>
   <td align="center">'. (is_numeric($ReflectorNumber) ? '*' . sprintf('%01d',$ReflectorNumber) . (($i<=4)?$module:sprintf('%02d',$i)) : '-') .'</td>
   <td align="center">'. 'XRF' . $ReflectorNumber . $module . 'L' .'</td>
   <td align="center">'. (is_numeric($ReflectorNumber) ? 'B' . sprintf('%01d',$ReflectorNumber) . (($i<=4)?$module:sprintf('%02d',$i)) : '-') .'</td>
   <td align="center">'. 'DCS' . $ReflectorNumber . $module . 'L' .'</td>
   <td align="center">'. (is_numeric($ReflectorNumber) ? 'D' . sprintf('%01d',$ReflectorNumber) . (($i<=4)?$module:sprintf('%02d',$i)) : '-') .'</td>
   <td align="center">'. (4000+$i) .'</td>
   <td align="center">'. (9+$i) .'</td>
 </tr>';
}

echo '
<tr height="50"></tr>
';

echo '
<tr height="50">
<th colspan="11"<td align="center">'. "Available Modules / Naudojami moduliai" .'</td></th>
</tr>
<tr height="auto" bgcolor="'.$odd.'">
<td align="center" colspan="11">'. '
<br>
<b>Module A - ' . (empty($PageOptions['ModuleNames']["A"]) ? '-' : $PageOptions['ModuleNames']["A"]) . '</b><br>
Interlink XLX DMR TG 4001 (sujungta su BM TG24601) <-> YSF64200 <-> D-Star XLX642A<br>
<br>';
//<b>Module B - ' . (empty($PageOptions['ModuleNames']["B"]) ? '-' : $PageOptions['ModuleNames']["B"]) . '</b><br>
//<u><i>FOR INTERNAL TESTING!</i></u><br>
//Interlink XLX DMR TG 4002 <-> YSF64200<br>
//<br>
echo '
' .'</td>
</tr>';

echo '
<tr height="50"></tr>
';

echo '
<tr height="50">
<th colspan="11"<td align="center">'. "Daugiau Informacijos" .'</td></th>
</tr>
<tr height="auto" bgcolor="'.$odd.'">
<td align="center" colspan="11">'. '
<br>
<b><a href="https://wiki.qsl.lt">Digital Voice Lithuania Wiki</a></b><br>
<br>';
//<b>Module B - ' . (empty($PageOptions['ModuleNames']["B"]) ? '-' : $PageOptions['ModuleNames']["B"]) . '</b><br>
//<u><i>FOR INTERNAL TESTING!</i></u><br>
//Interlink XLX DMR TG 4002 <-> YSF64200<br>
//<br>
echo '
' .'</td>
</tr>';

echo '
<tr height="50"></tr>
';

echo '
<tr height="50">
<th colspan="11"<td align="center">'. "How to configure HotSpot / HotSpot nustatymai" .'</td></th>
</tr>
<tr height="auto" bgcolor="'.$odd.'">
<td align="center" colspan="11">'. '
<br>
<b>DMR vartotojams (tik norint prisijungti tiesiai prie XLX Reflektoriaus)</b><br>
<br>
<u><b>Įprastas prisijungimas prie TG24601 BrandMeister grupės yra paprastesnis<br>
O nuolatiniam XLX trafiko girdėjimui BrandMeister turi galimybę sukonfigūruot Static TG</b></u><br>
<br>
<i>Konfigūruojant Pi-Star\'ą (XLX veiks kartu su DMR)</i><br>' . nl2br()
.'XLX Master: XLX_642, XLX Startup Module: A<br>
<u>BrandMeister Network ESSID - privalomas, pastebėta, kad be jo neveikia</u><br>
Stotelėje nustatyti - Group Call DMR TG6, TS2<br>
<br>
Kelios naudingos komandos:<br>
Private call to:<br>
64000 - Disconnect<br>
65000 - Status<br>
Po jų nepamiršti persijungt agtal į Group Call<br>
<br>
<i>DMR be hotspoto, arba jei hotspotas netūri/nesinori konfigūruot XLX\'ą:</i><br>
Stotelėje nustatyti - Private Call 68642, TS2<br>
PTT<br>
Private Call 64001 - Module A pasirinkimas<br>
PTT<br>
Stotelėje nustatyti - Group Call DMR TG6, TS2<br>
Kalbėti<br>
<br>
<img src="./img/dmr_config.png"/><br>
<br>
<b>YSF vartotojams<br>
<br>
<u>Prisijungus YSF moda, prie Module A linkinama automatiškai<br>
Tačiau nuspaudus Disconnect Yaesu stotelėje, prie Module A turėsit prisijungt patys</u></b><br>
<br>
YSF Reflektorius: <b>YSF64200 - XLX642 - LithuaniaXLX</b> (tiek tiesiai iš stotelės, tiek iš Pi-Star\'o)<br>
<br>
<img src="./img/ysf_config.png"/><br>
<br>
' .'</td>
</tr>';

?>

</table>
