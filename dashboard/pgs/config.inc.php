<?php
/*
Possible values for IPModus

HideIP
ShowFullIP
ShowLast1ByteOfIP
ShowLast2ByteOfIP
ShowLast3ByteOfIP

*/

$Service     = array();
$CallingHome = array();
$PageOptions = array();
$VNStat      = array();

$PageOptions['ContactEmail']                         = 'ly3ph@qsl.lt';	// Support E-Mail address

$PageOptions['DashboardVersion']                     = '2.4.2';		// Dashboard Version

$PageOptions['PageRefreshActive']                    = true;		// Activate automatic refresh
$PageOptions['PageRefreshDelay']                     = '10000';		// Page refresh time in miliseconds

$PageOptions['NumberOfModules']                      = 1;		// Number of Modules enabled on reflector

$PageOptions['RepeatersPage'] = array();
$PageOptions['RepeatersPage']['LimitTo']             = 99;		// Number of Repeaters to show
$PageOptions['RepeatersPage']['IPModus']             = 'ShowLast1ByteOfIP';	// See possible options above
$PageOptions['RepeatersPage']['MasqueradeCharacter'] = '*';		// Character used for  masquerade

$PageOptions['PeerPage'] = array();
$PageOptions['PeerPage']['LimitTo']                  = 99;		// Number of peers to show
$PageOptions['PeerPage']['IPModus']                  = 'ShowLast1ByteOfIP';	// See possible options above
$PageOptions['PeerPage']['MasqueradeCharacter']      = '*';		// Character used for  masquerade

$PageOptions['LastHeardPage']['LimitTo']             = 19;		// Number of stations to show

$PageOptions['ModuleNames'] = array();					// Module nomination
//$PageOptions['ModuleNames']['A']                     = 'Int.';
$PageOptions['ModuleNames']['A']                     = 'Global';
//$PageOptions['ModuleNames']['B']                     = 'Regional';
$PageOptions['ModuleNames']['B']                     = 'Local';
$PageOptions['ModuleNames']['C']                     = 'National';
$PageOptions['ModuleNames']['D']                     = '';

$PageOptions['MetaDescription']                      = 'XLX is a D-Star Reflector System for Ham Radio Operators.';	// Meta Tag Values, usefull for Search Engine
$PageOptions['MetaKeywords']                         = 'Ham Radio, D-Star, XReflector, XLX, XRF, DCS, REF, ';		// Meta Tag Values, usefull forSearch Engine
$PageOptions['MetaAuthor']                           = 'LY3PH';								// Meta Tag Values, usefull for Search Engine
$PageOptions['MetaRevisit']                          = 'After 30 Days';							// Meta Tag Values, usefull for Search Engine
$PageOptions['MetaRobots']                           = 'index,follow';							// Meta Tag Values, usefull for Search Engine

$PageOptions['UserPage']['ShowFilter']               = false;								// Show Filter on Users page
$PageOptions['Traffic']['Show']                      = false;								// Enable vnstat traffic statistics
$PageOptions['IRCDDB']['Show']                       = false;        // Show liveircddb, set it to false if you are running your db in https 

$PageOptions['CustomTXT']                            = '- Lithuania XLX DMR-YSF-DStar';					// custom text in your header   

$Service['PIDFile']                                  = '/var/log/xlxd.pid';
$Service['XMLFile']                                  = '/var/log/xlxd.xml';

$CallingHome['Active']                               = true;					// xlx phone home, true or false
$CallingHome['MyDashBoardURL']                       = 'http://xlx.qsl.lt';			// dashboard url
$CallingHome['ServerURL']                            = 'http://xlxapi.rlx.lu/api.php';		// database server, do not change !!!!
$CallingHome['PushDelay']                            = 600;					// push delay in seconds
$CallingHome['Country']                              = "Lithuania";				// Country
$CallingHome['Comment']                              = "Lithuania XLX DMR-YSF-DStar Reflector";			// Comment. Max 100 character
//$CallingHome['Comment']                              = "Lithuania XLX DMR-YSF (No D-Star) Reflector. Module A bridged to BM TG246";			// Comment. Max 100 character
$CallingHome['HashFile']                             = "/xlxd/callinghome.php";			// Make sure the apache user has read and write permissions in this folder.
$CallingHome['LastCallHomefile']                     = "/tmp/lastcallhome.php";			// lastcallhome.php can remain in the tmp folder 
$CallingHome['OverrideIPAddress']                    = "";					// Insert your IP address here. Leave blank for autodetection. No need to enter a fake address.
$CallingHome['InterlinkFile']                        = "/xlxd/xlxd.interlink";			// Path to interlink file

$VNStat['Interfaces']                                = array();
$VNStat['Interfaces'][0]['Name']                     = 'eth0';
$VNStat['Interfaces'][0]['Address']                  = 'eth0';
$VNStat['Binary']                                    = '/usr/bin/vnstat';

/*   
include an extra config file for people who dont like to mess with shipped config.ing.php   
this makes updating dashboard from git a little bit easier   
*/   
 
if (file_exists("../config.inc.php")) {   
 include ("../config.inc.php");  
}   

?>
