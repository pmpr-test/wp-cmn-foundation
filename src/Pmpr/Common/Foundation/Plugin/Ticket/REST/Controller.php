<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672357217e291             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Controller as BaseClass; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Response; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends BaseClass { public function __construct() { $this->rest_base = "\164\x69\143\x6b\x65\x74"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x70\x75\x73\150\x2d\162\145\163\160\x6f\x6e\x73\145", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\161\171\x75\147\143\x65\x79\145\x79\153\155\151\165\143\x65\x61"]]); } public function qyugceyeykmiucea(WP_REST_Request $aqmwamyiwgeeymqa) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $ymacoouqwcqwwagu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::sgsawoooocqwouiy); $kmekouwmygismoku = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::asywgyemkouimocw); if ($ymacoouqwcqwwagu && $kmekouwmygismoku) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kqowykcomaagagow = $mmqcgecamywacuwe->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::IDENTIFIER, $kmekouwmygismoku), $eqwoegegiamegqsm->megqywqeuquawkim($mmqcgecamywacuwe::sgsawoooocqwouiy, $ymacoouqwcqwwagu)]); if ($kqowykcomaagagow) { $sogksuscggsicmac = Response::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::TEXT => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::TEXT), Constants::ckmsuwamgymouaeu => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ckmsuwamgymouaeu), Constants::IDENTIFIER => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::IDENTIFIER), $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->mwyqswsaeeewsosm($kqowykcomaagagow)]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\122\x65\163\160\x6f\x6e\x73\x65\x20\x61\x64\144\x65\x64\40\163\x75\x63\x63\x65\163\163\x66\165\154\154\171\56", PR__CMN__FOUNDATION)); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($sogksuscggsicmac[Constants::iwyueouqaqegmcas]); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\161\165\x65\x73\164\x65\x64\40\164\151\x63\x6b\x65\164\40\156\157\164\x20\146\157\x75\x6e\144", PR__CMN__FOUNDATION)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa) === untrailingslashit($this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->caokeucsksukesyo()->giiecckwoyiawoyy()->guaucoeeuseuqamo())); } }
