<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670dbcd2165a5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Controller; use WP_REST_Request; use WP_REST_Response; class RESTController extends WP_REST_Controller { const uigoseacoukemwqc = "\x47\x45\x54"; const ouuaeeeqeqkagcgi = "\x50\117\123\x54\54\x20\120\125\124\x2c\40\120\101\124\x43\x48"; const qucyckeykeuuaquw = "\x50\x4f\123\x54"; const kqqquayqkucokyqi = "\x44\x45\x4c\x45\124\x45"; const wkegouokcuaugusc = "\107\x45\x54\x2c\40\120\x4f\x53\x54\54\x20\120\x55\124\x2c\x20\x50\101\124\x43\x48\x2c\40\x44\105\x4c\105\124\x45"; const oewumsewskquiasu = "\160\145\x72\x6d\x69\x73\163\x69\157\x6e\137\143\141\154\154\x62\x61\x63\x6b"; use SingletonTrait, TemplateTrait, WrapperTrait, CommonTrait, HelperTrait, HookTrait; public function __construct() { $this->namespace = "\160\x6d\x70\162\57\x76\x31"; $this->ikcgmcycisiccyuc(); $this->gyqeoeemeemicgqi(); } public function eeskamgwqqsaaoci() : string { return $this->namespace; } public function awegquwuywoqgmqw() : string { return $this->rest_base; } public function register(string $mkomwsiykqigmqca, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::okeuagwgwkmiokac => [], Constants::oaggieeykyaoiiyw => self::uigoseacoukemwqc, self::oewumsewskquiasu => [$this, "\x61\143\x6b\x75\141\151\147\151\157\x63\163\147\171\161\x77\x65"]]); $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iauaguqyycgacmks($this->eeskamgwqqsaaoci(), "\57{$this->awegquwuywoqgmqw()}{$mkomwsiykqigmqca}", $ywmkwiwkosakssii); } public function ewmkmmsuiuwmmwoy($keccaugmemegoimu) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mwqqckqokawmwoau($keccaugmemegoimu); } public function gmsemuiwicucmcok(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw) : ?string { return $aqmwamyiwgeeymqa->get_header($uusmaiomayssaecw); } public function keguiwkaiweywekc(WP_REST_Request $aqmwamyiwgeeymqa) : ?string { return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\162\145\146\145\162\x65\162"); } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ogkysoamaegikmcy($aqmwamyiwgeeymqa, $quoumsikceouuiee); } public function qasywwyamoesisyi($uamcoiueqaamsqma, $icwicymcioeyeyek = []) : array { $iueymcwwscwqkiyq = 200; return [Constants::vswoiouoaykswgym => $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gmqckgyqkacaqaug($iueymcwwscwqkiyq), Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ckcawaoawwioqecq => true]; } public function ayssaocauwgssywa(array $ikgwqyuyckaewsow = []) : array { $sogksuscggsicmac = []; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->sacmkccceuywoqsq(true); } } return $sogksuscggsicmac; } public function aemeowyaecqmymas(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $aqmsgcggocyugeco = true) { if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) { $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw); if (is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } } else { if ($aqmsgcggocyugeco) { $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_header($uusmaiomayssaecw) ?? $ggauoeuaesiymgee; } else { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } } return $eqgoocgaqwqcimie; } public function ugyeicuiaamcceos($aqmwamyiwgeeymqa) : array { return [Constants::imywcsggckkcywgk => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::imywcsggckkcywgk), Constants::ausqeuugegoygouq => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ausqeuugegoygouq)]; } public function swmwoeaaeqiouswg(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) : ?string { return $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $uusmaiomayssaecw, $ggauoeuaesiymgee)); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return true; } }
