<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c19cd8e5f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\Traits\ComponentTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Controller; use WP_REST_Request; use WP_REST_Response; class RESTController extends WP_REST_Controller { const uigoseacoukemwqc = "\x47\105\x54"; const ouuaeeeqeqkagcgi = "\x50\x4f\123\124\54\x20\120\x55\x54\x2c\40\120\101\x54\x43\x48"; const qucyckeykeuuaquw = "\x50\117\123\x54"; const kqqquayqkucokyqi = "\104\105\x4c\105\124\105"; const wkegouokcuaugusc = "\x47\105\x54\x2c\x20\x50\117\x53\124\x2c\40\120\x55\124\x2c\x20\120\x41\x54\x43\110\54\x20\104\x45\x4c\x45\124\x45"; const oewumsewskquiasu = "\160\145\x72\155\151\163\x73\151\x6f\x6e\137\143\x61\154\x6c\142\141\143\x6b"; use CommonTrait, SingletonTrait, ComponentTrait; public function __construct() { $this->namespace = "\x70\155\x70\x72\x2f\166\61"; $this->ikcgmcycisiccyuc(); $this->gyqeoeemeemicgqi(); } public function eeskamgwqqsaaoci() : string { return $this->namespace; } public function awegquwuywoqgmqw() : string { return $this->rest_base; } public function register(string $mkomwsiykqigmqca, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::okeuagwgwkmiokac => [], Constants::oaggieeykyaoiiyw => self::uigoseacoukemwqc, self::oewumsewskquiasu => [$this, "\x61\x63\153\x75\x61\x69\x67\x69\157\x63\163\147\171\161\167\x65"]]); $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iauaguqyycgacmks($this->eeskamgwqqsaaoci(), "\x2f{$this->awegquwuywoqgmqw()}{$mkomwsiykqigmqca}", $ywmkwiwkosakssii); } public function ewmkmmsuiuwmmwoy($keccaugmemegoimu) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mwqqckqokawmwoau($keccaugmemegoimu); } public function gmsemuiwicucmcok(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw) : ?string { return $aqmwamyiwgeeymqa->get_header($uusmaiomayssaecw); } public function keguiwkaiweywekc(WP_REST_Request $aqmwamyiwgeeymqa) : ?string { return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\x72\145\x66\x65\x72\145\162"); } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ogkysoamaegikmcy($aqmwamyiwgeeymqa, $quoumsikceouuiee); } public function qasywwyamoesisyi($uamcoiueqaamsqma, $icwicymcioeyeyek = []) : array { $iueymcwwscwqkiyq = 200; return [Constants::vswoiouoaykswgym => $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gmqckgyqkacaqaug($iueymcwwscwqkiyq), Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ckcawaoawwioqecq => true]; } public function ayssaocauwgssywa(array $ikgwqyuyckaewsow = []) : array { $sogksuscggsicmac = []; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ocokwuuquaokmasc; } $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->sacmkccceuywoqsq(true); ocokwuuquaokmasc: cggowoquuiwqkyew: } uukumskkeggaowck: return $sogksuscggsicmac; } public function aemeowyaecqmymas(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $aqmsgcggocyugeco = true) { if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) { goto wcesymwqykqoyuqk; } if ($aqmsgcggocyugeco) { goto goacqqsgaaigyuaw; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; goto meawswgwagoqgkye; goacqqsgaaigyuaw: $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_header($uusmaiomayssaecw) ?? $ggauoeuaesiymgee; meawswgwagoqgkye: goto usqgaogkqgemuima; wcesymwqykqoyuqk: $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw); if (!(is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie))) { goto yiwiqaqmwiogawym; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; yiwiqaqmwiogawym: usqgaogkqgemuima: return $eqgoocgaqwqcimie; } public function ugyeicuiaamcceos($aqmwamyiwgeeymqa) : array { return [Constants::imywcsggckkcywgk => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::imywcsggckkcywgk), Constants::ausqeuugegoygouq => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ausqeuugegoygouq)]; } public function swmwoeaaeqiouswg(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) : ?string { return $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $uusmaiomayssaecw, $ggauoeuaesiymgee)); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return true; } }
