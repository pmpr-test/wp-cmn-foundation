<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae859a8f03             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\Traits\ComponentTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Controller; use WP_REST_Request; use WP_REST_Response; class RESTController extends WP_REST_Controller { const uigoseacoukemwqc = "\107\105\x54"; const ouuaeeeqeqkagcgi = "\120\117\x53\124\54\x20\x50\125\x54\x2c\x20\120\101\124\x43\110"; const qucyckeykeuuaquw = "\x50\x4f\123\124"; const kqqquayqkucokyqi = "\104\x45\x4c\105\x54\105"; const wkegouokcuaugusc = "\107\105\x54\54\x20\120\117\x53\x54\54\x20\x50\125\x54\x2c\x20\120\101\x54\103\x48\54\40\x44\105\x4c\105\124\105"; const oewumsewskquiasu = "\x70\x65\x72\155\x69\x73\163\x69\x6f\156\x5f\x63\x61\x6c\x6c\142\x61\143\x6b"; use CommonTrait, SingletonTrait, ComponentTrait; public function __construct() { $this->namespace = "\160\155\x70\162\57\166\61"; $this->ikcgmcycisiccyuc(); $this->gyqeoeemeemicgqi(); } public function eeskamgwqqsaaoci() : string { return $this->namespace; } public function awegquwuywoqgmqw() : string { return $this->rest_base; } public function register(string $mkomwsiykqigmqca, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::okeuagwgwkmiokac => [], Constants::oaggieeykyaoiiyw => self::uigoseacoukemwqc, self::oewumsewskquiasu => [$this, "\x61\143\x6b\x75\x61\151\x67\151\x6f\143\163\147\171\x71\x77\145"]]); $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iauaguqyycgacmks($this->eeskamgwqqsaaoci(), "\57{$this->awegquwuywoqgmqw()}{$mkomwsiykqigmqca}", $ywmkwiwkosakssii); } public function ewmkmmsuiuwmmwoy($keccaugmemegoimu) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mwqqckqokawmwoau($keccaugmemegoimu); } public function gmsemuiwicucmcok(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw) : ?string { return $aqmwamyiwgeeymqa->get_header($uusmaiomayssaecw); } public function keguiwkaiweywekc(WP_REST_Request $aqmwamyiwgeeymqa) : ?string { return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\162\x65\x66\x65\162\x65\162"); } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ogkysoamaegikmcy($aqmwamyiwgeeymqa, $quoumsikceouuiee); } public function qasywwyamoesisyi($uamcoiueqaamsqma, $icwicymcioeyeyek = []) : array { $iueymcwwscwqkiyq = 200; return [Constants::vswoiouoaykswgym => $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gmqckgyqkacaqaug($iueymcwwscwqkiyq), Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ckcawaoawwioqecq => true]; } public function ayssaocauwgssywa(array $ikgwqyuyckaewsow = []) : array { $sogksuscggsicmac = []; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto akcakssqcqcouwew; } $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->sacmkccceuywoqsq(true); akcakssqcqcouwew: gikaiicgqyueeoco: } muwyuiikuywigwso: return $sogksuscggsicmac; } public function aemeowyaecqmymas(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $aqmsgcggocyugeco = true) { if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) { goto eqekaoaioiykuaiw; } if ($aqmsgcggocyugeco) { goto cgasgmiiqegqesic; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; goto yamoiggaeugmgkku; cgasgmiiqegqesic: $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_header($uusmaiomayssaecw) ?? $ggauoeuaesiymgee; yamoiggaeugmgkku: goto qoiuwyogucoeaoew; eqekaoaioiykuaiw: $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw); if (!(is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie))) { goto akoiqkoqmmmcieug; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; akoiqkoqmmmcieug: qoiuwyogucoeaoew: return $eqgoocgaqwqcimie; } public function ugyeicuiaamcceos($aqmwamyiwgeeymqa) : array { return [Constants::imywcsggckkcywgk => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::imywcsggckkcywgk), Constants::ausqeuugegoygouq => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ausqeuugegoygouq)]; } public function swmwoeaaeqiouswg(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) : ?string { return $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $uusmaiomayssaecw, $ggauoeuaesiymgee)); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return true; } }
