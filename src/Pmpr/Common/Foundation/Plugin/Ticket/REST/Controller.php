<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Controller as BaseClass; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Response; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Ticket; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends BaseClass { public function __construct() { $this->rest_base = "\164\x69\x63\153\x65\x74"; parent::__construct(); } public function register_routes() { $this->register("\57\160\165\x73\x68\x2d\162\145\163\160\x6f\156\163\145", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\161\x79\165\147\143\145\x79\145\x79\153\x6d\151\165\143\145\141"]]); } public function qyugceyeykmiucea(WP_REST_Request $aqmwamyiwgeeymqa) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $ymacoouqwcqwwagu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::sgsawoooocqwouiy); $kmekouwmygismoku = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $mmqcgecamywacuwe::asywgyemkouimocw); if ($ymacoouqwcqwwagu && $kmekouwmygismoku) { goto ciuaqmasmqyeioiy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto aiouimmkquyuwagk; ciuaqmasmqyeioiy: $kqowykcomaagagow = $mmqcgecamywacuwe->oqomcmyuuakigusk([Constants::IDENTIFIER => $kmekouwmygismoku, $mmqcgecamywacuwe::sgsawoooocqwouiy => $ymacoouqwcqwwagu]); if ($kqowykcomaagagow) { goto imyyokaecggauwca; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\161\x75\145\163\x74\145\x64\40\164\151\143\153\x65\x74\40\156\157\x74\x20\x66\x6f\x75\x6e\144", PR__CMN__FOUNDATION)); goto iiieosoykaeycaks; imyyokaecggauwca: $sogksuscggsicmac = Response::symcgieuakksimmu()->gscuuyuyauokoyuo([Constants::TEXT => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::TEXT), Constants::ckmsuwamgymouaeu => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ckmsuwamgymouaeu), Constants::IDENTIFIER => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::IDENTIFIER), $mmqcgecamywacuwe::asywgyemkouimocw => $mmqcgecamywacuwe->keeuqgyooycqoygw($kqowykcomaagagow)]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto qyggcimqgyscmcci; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($sogksuscggsicmac[Constants::iwyueouqaqegmcas]); goto mwsogcaisqkoyoyo; qyggcimqgyscmcci: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\122\x65\x73\x70\157\x6e\163\145\x20\x61\x64\144\145\144\x20\x73\x75\x63\143\x65\163\163\x66\165\x6c\154\x79\56", PR__CMN__FOUNDATION)); mwsogcaisqkoyoyo: iiieosoykaeycaks: aiouimmkquyuwagk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa) === untrailingslashit($this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->caokeucsksukesyo()->giiecckwoyiawoyy()->guaucoeeuseuqamo())); } }
