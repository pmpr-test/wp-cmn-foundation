<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132d18d1e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Controller as BaseClass; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Response; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends BaseClass { public function __construct() { $this->rest_base = "\164\151\x63\x6b\145\x74"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x70\x75\x73\150\55\x72\145\163\160\157\x6e\163\x65", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x71\x79\x75\x67\143\x65\x79\x65\171\x6b\155\x69\165\x63\145\141"]]); } public function qyugceyeykmiucea(WP_REST_Request $aqmwamyiwgeeymqa) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $ymacoouqwcqwwagu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::sgsawoooocqwouiy); $kmekouwmygismoku = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::asywgyemkouimocw); if ($ymacoouqwcqwwagu && $kmekouwmygismoku) { goto ksaoceiosgkgkeua; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto wesmogqcyeemwqaq; ksaoceiosgkgkeua: $kqowykcomaagagow = $mmqcgecamywacuwe->oqomcmyuuakigusk([Constants::IDENTIFIER => $kmekouwmygismoku, $mmqcgecamywacuwe::sgsawoooocqwouiy => $ymacoouqwcqwwagu]); if ($kqowykcomaagagow) { goto woimcikoqmikiiuo; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\x71\165\145\163\x74\x65\144\x20\x74\x69\143\153\x65\164\40\x6e\x6f\x74\40\146\157\165\x6e\x64", PR__CMN__FOUNDATION)); goto yygiyieeyuuqucke; woimcikoqmikiiuo: $sogksuscggsicmac = Response::symcgieuakksimmu()->gscuuyuyauokoyuo([Constants::TEXT => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::TEXT), Constants::ckmsuwamgymouaeu => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ckmsuwamgymouaeu), Constants::IDENTIFIER => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::IDENTIFIER), $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->keeuqgyooycqoygw($kqowykcomaagagow)]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto meacamomoigoocks; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($sogksuscggsicmac[Constants::iwyueouqaqegmcas]); goto wmgmwseuygieasiq; meacamomoigoocks: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\122\145\x73\x70\x6f\156\163\x65\40\x61\144\x64\145\144\x20\x73\165\x63\x63\145\x73\x73\x66\x75\x6c\154\x79\56", PR__CMN__FOUNDATION)); wmgmwseuygieasiq: yygiyieeyuuqucke: wesmogqcyeemwqaq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa) === untrailingslashit($this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->caokeucsksukesyo()->giiecckwoyiawoyy()->guaucoeeuseuqamo())); } }
