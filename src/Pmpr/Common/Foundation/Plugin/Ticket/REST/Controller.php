<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc0611cd07             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Controller as BaseClass; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Response; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends BaseClass { public function __construct() { $this->rest_base = "\x74\151\143\x6b\x65\164"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x70\x75\x73\x68\55\162\145\163\160\x6f\x6e\163\145", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\161\x79\165\x67\143\145\x79\145\x79\153\155\151\165\x63\145\141"]]); } public function qyugceyeykmiucea(WP_REST_Request $aqmwamyiwgeeymqa) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $ymacoouqwcqwwagu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::sgsawoooocqwouiy); $kmekouwmygismoku = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::asywgyemkouimocw); if ($ymacoouqwcqwwagu && $kmekouwmygismoku) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kqowykcomaagagow = $mmqcgecamywacuwe->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::IDENTIFIER, $kmekouwmygismoku), $eqwoegegiamegqsm->megqywqeuquawkim($mmqcgecamywacuwe::sgsawoooocqwouiy, $ymacoouqwcqwwagu)]); if ($kqowykcomaagagow) { $sogksuscggsicmac = Response::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::TEXT => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::TEXT), Constants::ckmsuwamgymouaeu => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ckmsuwamgymouaeu), Constants::IDENTIFIER => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::IDENTIFIER), $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->mwyqswsaeeewsosm($kqowykcomaagagow)]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\122\x65\163\x70\x6f\156\x73\145\40\141\x64\x64\145\x64\40\x73\x75\143\x63\x65\163\x73\146\165\154\154\171\x2e", PR__CMN__FOUNDATION)); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($sogksuscggsicmac[Constants::iwyueouqaqegmcas]); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\x65\161\x75\145\x73\x74\x65\x64\40\164\x69\143\x6b\145\164\40\x6e\157\164\x20\146\157\x75\156\144", PR__CMN__FOUNDATION)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa) === untrailingslashit($this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->caokeucsksukesyo()->giiecckwoyiawoyy()->guaucoeeuseuqamo())); } }
