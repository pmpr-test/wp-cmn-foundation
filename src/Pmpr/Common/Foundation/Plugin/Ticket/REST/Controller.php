<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1795dce7fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Controller as BaseClass; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Response; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends BaseClass { public function __construct() { $this->rest_base = "\164\151\143\x6b\145\x74"; parent::__construct(); } public function register_routes() { $this->register("\57\160\165\x73\150\55\x72\145\163\160\x6f\x6e\163\x65", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\161\171\165\147\x63\145\171\x65\x79\x6b\x6d\x69\165\x63\x65\x61"]]); } public function qyugceyeykmiucea(WP_REST_Request $aqmwamyiwgeeymqa) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $ymacoouqwcqwwagu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::sgsawoooocqwouiy); $kmekouwmygismoku = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::asywgyemkouimocw); if ($ymacoouqwcqwwagu && $kmekouwmygismoku) { goto omemqagskckoeoog; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto aeuosggumiiwoesm; omemqagskckoeoog: $kqowykcomaagagow = $mmqcgecamywacuwe->oqomcmyuuakigusk([Constants::IDENTIFIER => $kmekouwmygismoku, $mmqcgecamywacuwe::sgsawoooocqwouiy => $ymacoouqwcqwwagu]); if ($kqowykcomaagagow) { goto ugikgkwuwmgymgus; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\161\x75\x65\x73\x74\145\x64\40\164\x69\x63\153\x65\x74\40\x6e\x6f\164\40\x66\157\x75\156\x64", PR__CMN__FOUNDATION)); goto gsgyayuaekgyoumc; ugikgkwuwmgymgus: $sogksuscggsicmac = Response::symcgieuakksimmu()->gscuuyuyauokoyuo([Constants::TEXT => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::TEXT), Constants::ckmsuwamgymouaeu => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ckmsuwamgymouaeu), Constants::IDENTIFIER => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::IDENTIFIER), $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->keeuqgyooycqoygw($kqowykcomaagagow)]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto omgcsmsikaggaooc; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($sogksuscggsicmac[Constants::iwyueouqaqegmcas]); goto wykuosegisygosiq; omgcsmsikaggaooc: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\122\145\163\160\157\156\163\x65\x20\x61\x64\144\x65\144\x20\163\x75\x63\x63\145\x73\163\146\x75\154\x6c\171\56", PR__CMN__FOUNDATION)); wykuosegisygosiq: gsgyayuaekgyoumc: aeuosggumiiwoesm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa) === untrailingslashit($this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->caokeucsksukesyo()->giiecckwoyiawoyy()->guaucoeeuseuqamo())); } }
