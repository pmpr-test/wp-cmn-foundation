<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e295acabc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Controller as BaseClass; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Response; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends BaseClass { public function __construct() { $this->rest_base = "\164\151\143\153\145\x74"; parent::__construct(); } public function register_routes() { $this->register("\x2f\160\165\163\150\x2d\162\x65\163\x70\157\x6e\x73\145", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\161\x79\165\x67\x63\145\x79\145\171\x6b\x6d\151\x75\x63\145\141"]]); } public function qyugceyeykmiucea(WP_REST_Request $aqmwamyiwgeeymqa) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $ymacoouqwcqwwagu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::sgsawoooocqwouiy); $kmekouwmygismoku = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::asywgyemkouimocw); if ($ymacoouqwcqwwagu && $kmekouwmygismoku) { goto keaaqaugoyquwsos; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto ieacisiumswqewsq; keaaqaugoyquwsos: $kqowykcomaagagow = $mmqcgecamywacuwe->oqomcmyuuakigusk([Constants::IDENTIFIER => $kmekouwmygismoku, $mmqcgecamywacuwe::sgsawoooocqwouiy => $ymacoouqwcqwwagu]); if ($kqowykcomaagagow) { goto cskesgswygwiqoim; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\161\165\145\163\x74\145\144\x20\x74\151\143\x6b\x65\x74\40\156\157\x74\40\x66\157\165\x6e\x64", PR__CMN__FOUNDATION)); goto guyeaeiscmgksacs; cskesgswygwiqoim: $sogksuscggsicmac = Response::symcgieuakksimmu()->gscuuyuyauokoyuo([Constants::TEXT => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::TEXT), Constants::ckmsuwamgymouaeu => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ckmsuwamgymouaeu), Constants::IDENTIFIER => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::IDENTIFIER), $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->keeuqgyooycqoygw($kqowykcomaagagow)]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto uyqsoayeaaumkace; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($sogksuscggsicmac[Constants::iwyueouqaqegmcas]); goto ooayswecmkkqgskg; uyqsoayeaaumkace: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\122\x65\163\160\x6f\156\x73\x65\40\x61\x64\144\x65\144\x20\163\x75\x63\x63\145\163\x73\146\165\154\154\x79\x2e", PR__CMN__FOUNDATION)); ooayswecmkkqgskg: guyeaeiscmgksacs: ieacisiumswqewsq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa) === untrailingslashit($this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->caokeucsksukesyo()->giiecckwoyiawoyy()->guaucoeeuseuqamo())); } }
