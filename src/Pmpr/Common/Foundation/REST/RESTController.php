<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053ea9b9ccc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Controller; use WP_REST_Request; use WP_REST_Response; class RESTController extends WP_REST_Controller { const uigoseacoukemwqc = 'GET'; const ouuaeeeqeqkagcgi = 'POST, PUT, PATCH'; const qucyckeykeuuaquw = 'POST'; const kqqquayqkucokyqi = 'DELETE'; const wkegouokcuaugusc = 'GET, POST, PUT, PATCH, DELETE'; const oewumsewskquiasu = 'permission_callback'; use SingletonTrait, TemplateTrait, WrapperTrait, CommonTrait, HelperTrait, HookTrait; public function __construct() { $this->namespace = 'pmpr/v1'; $this->ikcgmcycisiccyuc(); $this->gyqeoeemeemicgqi(); } public function eeskamgwqqsaaoci() : string { return $this->namespace; } public function awegquwuywoqgmqw() : string { return $this->rest_base; } public function register(string $mkomwsiykqigmqca, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::okeuagwgwkmiokac => [], Constants::oaggieeykyaoiiyw => self::uigoseacoukemwqc, self::oewumsewskquiasu => [$this, 'ackuaigiocsgyqwe']]); $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iauaguqyycgacmks($this->eeskamgwqqsaaoci(), "/{$this->awegquwuywoqgmqw()}{$mkomwsiykqigmqca}", $ywmkwiwkosakssii); } public function ewmkmmsuiuwmmwoy($keccaugmemegoimu) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mwqqckqokawmwoau($keccaugmemegoimu); } public function gmsemuiwicucmcok(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw) : ?string { return $aqmwamyiwgeeymqa->get_header($uusmaiomayssaecw); } public function keguiwkaiweywekc(WP_REST_Request $aqmwamyiwgeeymqa) : ?string { return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, 'referer'); } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ogkysoamaegikmcy($aqmwamyiwgeeymqa, $quoumsikceouuiee); } public function qasywwyamoesisyi($uamcoiueqaamsqma, $icwicymcioeyeyek = []) : array { $iueymcwwscwqkiyq = 200; return [Constants::vswoiouoaykswgym => $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gmqckgyqkacaqaug($iueymcwwscwqkiyq), Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ckcawaoawwioqecq => true]; } public function ayssaocauwgssywa(array $ikgwqyuyckaewsow = []) : array { $sogksuscggsicmac = []; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->sacmkccceuywoqsq(true); } } return $sogksuscggsicmac; } public function aemeowyaecqmymas(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $aqmsgcggocyugeco = true) { if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) { $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw); if (is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } } else { if ($aqmsgcggocyugeco) { $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_header($uusmaiomayssaecw) ?? $ggauoeuaesiymgee; } else { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } } return $eqgoocgaqwqcimie; } public function ugyeicuiaamcceos($aqmwamyiwgeeymqa) : array { return [Constants::imywcsggckkcywgk => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::imywcsggckkcywgk), Constants::ausqeuugegoygouq => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ausqeuugegoygouq)]; } public function swmwoeaaeqiouswg(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) : ?string { return $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $uusmaiomayssaecw, $ggauoeuaesiymgee)); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return true; } }
