<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7b4dde2139             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Mediator\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = 'mediator'; parent::__construct(); } public function register_routes() { $this->register('/update', [Constants::okeuagwgwkmiokac => [Constants::ocwsuwyiiasigqaa => [Constants::squoamkioomemiyi => 'string', Constants::eqkeooqcsscoggia => __('Component', PR__CMN__FOUNDATION)]], Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, 'koieiseiwceqgwwi']]); } public function koieiseiwceqgwwi(WP_REST_Request $aqmwamyiwgeeymqa) { $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ocwsuwyiiasigqaa); if ($wksoawcgagcgoask) { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->myekoowckeqqeuyq($wksoawcgagcgoask, self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099528678676, "\x31\x36\x37\61\x33\x33\61\61\x37\61\x32\x38\61\70\x38\61\x39\x33\61\62\x38\62\61\71\61\x34\x38\61\62\x38\62\x30\70"), '')) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__('Updated Successfully.', PR__CMN__FOUNDATION)); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Something wrong, can not update.', PR__CMN__FOUNDATION)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__('Component', PR__CMN__FOUNDATION)); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa); } }
