<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793da387f146             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Controller as BaseClass; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Response; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends BaseClass { public function __construct() { $this->rest_base = "\x74\x69\x63\153\x65\x74"; parent::__construct(); } public function register_routes() { $this->register("\57\160\x75\163\150\x2d\162\145\x73\160\157\156\x73\145", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x71\171\x75\x67\143\x65\171\x65\171\x6b\155\x69\165\x63\145\x61"]]); } public function qyugceyeykmiucea(WP_REST_Request $aqmwamyiwgeeymqa) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $ymacoouqwcqwwagu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::sgsawoooocqwouiy); $kmekouwmygismoku = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::asywgyemkouimocw); if ($ymacoouqwcqwwagu && $kmekouwmygismoku) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kqowykcomaagagow = $mmqcgecamywacuwe->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::IDENTIFIER, $kmekouwmygismoku), $eqwoegegiamegqsm->megqywqeuquawkim($mmqcgecamywacuwe::sgsawoooocqwouiy, $ymacoouqwcqwwagu)]); if ($kqowykcomaagagow) { $sogksuscggsicmac = Response::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::TEXT => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::TEXT), Constants::ckmsuwamgymouaeu => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ckmsuwamgymouaeu), Constants::IDENTIFIER => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::IDENTIFIER), $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->mwyqswsaeeewsosm($kqowykcomaagagow)]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\122\x65\x73\160\x6f\x6e\163\145\40\141\144\144\145\x64\x20\163\x75\143\143\145\163\163\146\x75\154\x6c\171\56", PR__CMN__FOUNDATION)); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($sogksuscggsicmac[Constants::iwyueouqaqegmcas]); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\161\x75\145\x73\x74\x65\144\40\x74\151\x63\x6b\x65\164\40\x6e\x6f\x74\x20\146\157\165\x6e\x64", PR__CMN__FOUNDATION)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa) === untrailingslashit($this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->caokeucsksukesyo()->giiecckwoyiawoyy()->guaucoeeuseuqamo())); } }
