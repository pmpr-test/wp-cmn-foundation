<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680156f35b43a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Request extends AbstractResponse { public function register() { $this->saemoowcasogykak(IconInterface::osaqwqwkkmocawgs)->guiaswksukmgageq(__('Request', PR__CMN__FOUNDATION))->muuwuqssqkaieqge(__('Requests', PR__CMN__FOUNDATION)); $this->swsaakqseuaacagq(Constants::qukociwggmsusagw, [$this, 'msekaqwyeaoqciom']); parent::register(); } public function msekaqwyeaoqciom($uwomkgseoiegeume, $msqkueqksqwmskak) { $oammesyieqmwuwyi = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($uwomkgseoiegeume, [Constants::TEXT => '']); foreach ($oammesyieqmwuwyi as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = rtrim($eqgoocgaqwqcimie); $meqocwsecsywiiqs = ''; if ($aaceqemaqqeckueq = $this->uqeoyqiwywwmsiew($ymqmyyeuycgmigyo)) { $meqocwsecsywiiqs = $aaceqemaqqeckueq->qcgakseyaikigqco(); } if ($ymqmyyeuycgmigyo === Constants::TEXT) { $uuyoeicyoayimaoa = 30; if (strlen($eqgoocgaqwqcimie) < $uuyoeicyoayimaoa) { $this->gssiscqyqsacmeca()->msqsseeaasqysese(sprintf(__('Please enter at least %s characters for %s.', PR__CMN__FOUNDATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->aoaesiikusqamcqc($uuyoeicyoayimaoa), $meqocwsecsywiiqs), $ymqmyyeuycgmigyo); } } } } }
