<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670da3806785e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Controller as BaseClass; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Response; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends BaseClass { public function __construct() { $this->rest_base = "\x74\151\143\x6b\x65\x74"; parent::__construct(); } public function register_routes() { $this->register("\57\160\165\163\x68\55\x72\x65\163\x70\x6f\x6e\163\145", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x71\x79\x75\147\x63\x65\171\x65\171\153\155\x69\x75\x63\x65\x61"]]); } public function qyugceyeykmiucea(WP_REST_Request $aqmwamyiwgeeymqa) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $ymacoouqwcqwwagu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::sgsawoooocqwouiy); $kmekouwmygismoku = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::asywgyemkouimocw); if ($ymacoouqwcqwwagu && $kmekouwmygismoku) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kqowykcomaagagow = $mmqcgecamywacuwe->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::IDENTIFIER, $kmekouwmygismoku), $eqwoegegiamegqsm->megqywqeuquawkim($mmqcgecamywacuwe::sgsawoooocqwouiy, $ymacoouqwcqwwagu)]); if ($kqowykcomaagagow) { $sogksuscggsicmac = Response::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::TEXT => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::TEXT), Constants::ckmsuwamgymouaeu => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ckmsuwamgymouaeu), Constants::IDENTIFIER => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::IDENTIFIER), $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->mwyqswsaeeewsosm($kqowykcomaagagow)]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x52\145\x73\x70\x6f\x6e\x73\145\40\x61\144\x64\145\x64\x20\x73\x75\143\x63\x65\163\163\146\x75\x6c\x6c\171\x2e", PR__CMN__FOUNDATION)); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($sogksuscggsicmac[Constants::iwyueouqaqegmcas]); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\x71\x75\x65\163\164\145\144\x20\x74\151\x63\x6b\145\164\40\156\157\164\x20\146\157\x75\x6e\x64", PR__CMN__FOUNDATION)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa) === untrailingslashit($this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->caokeucsksukesyo()->giiecckwoyiawoyy()->guaucoeeuseuqamo())); } }
