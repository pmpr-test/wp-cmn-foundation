<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793da387f146             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ThirdParty\Google; use Google\Client; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Traits\ArgsTrait; use WP_Error; abstract class OAuth extends Container { use ArgsTrait; protected ?Client $client = null; protected ?string $oauthClientSecret = ''; protected ?string $oauthClientId = ''; protected ?string $oauthRefreshToken = ''; public function __construct($csywmcysoeokssww = '') { $this->qiccuiwooiquycsg(); parent::__construct(); $this->oauthClientId = $this->weysguygiseoukqw($this->ykuqkkqmsymwaqak()->loasuugwsiwweeus()); $this->oauthClientSecret = $this->weysguygiseoukqw($this->ykuqkkqmsymwaqak()->wgkqswoummkiumqa()); $this->oauthRefreshToken = $csywmcysoeokssww; } public function qiccuiwooiquycsg() { } public function wmciwsucuuyumkes() : Client { if (empty($this->client)) { $qcakkkwickkwyuck = new Client(); $this->client = $qcakkkwickkwyuck; $qcakkkwickkwyuck->setScopes($this->imkyoqyocosuqasu(Constants::eoyiggawwagyugua)); $qcakkkwickkwyuck->setClientId($this->oauthClientId); $qcakkkwickkwyuck->setClientSecret($this->oauthClientSecret); $cocosaqymysoaggg = $this->ykuqkkqmsymwaqak()->simgasqekwkcogwk(); $qcakkkwickkwyuck->setRedirectUri($cocosaqymysoaggg); $qcakkkwickkwyuck->setAccessType($this->imkyoqyocosuqasu(Constants::qggeimykqieaqooa, Constants::iwkwimookwyqmyqc)); } return $this->client; } public function usmqosmqgoscmckk() { $eeaukqkuswaqwayu = $this->icyskgykkigmcuec(); if (is_wp_error($eeaukqkuswaqwayu)) { $coewqcmgkkmawigm = $this->wmciwsucuuyumkes()->createAuthUrl(); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\107\x6f\157\x67\x6c\x65\40\117\101\x75\164\x68\72\40\x43\x61\x6e\40\x6e\x6f\164\x20\x61\x75\x74\150\x65\x6e\x74\151\x63\x61\x74\145\54\40\154\x65\x74\x73\x20\147\157\x20\x74\x6f\40\141\x75\164\150\x6f\162\x69\172\145", [$coewqcmgkkmawigm]); return [SettingSegment::ewmyoqeiikakqqmk => $coewqcmgkkmawigm]; } return $eeaukqkuswaqwayu; } public function ceeskwyicggwsows($iwiqmygaeowkcuck) { $eeaukqkuswaqwayu = $this->wmciwsucuuyumkes()->fetchAccessTokenWithAuthCode($iwiqmygaeowkcuck); if (!empty($eeaukqkuswaqwayu) && is_array($eeaukqkuswaqwayu)) { if (isset($eeaukqkuswaqwayu[Constants::imkacwmiuiykyuim]) || isset($eeaukqkuswaqwayu["\x65\162\162\157\162\137\144\145\163\x63\x72\151\160\164\151\157\156"])) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x47\157\157\x67\154\145\40\117\x41\165\164\x68\72\x20\x45\162\x72\157\162\x20\x6f\156\40\146\x65\164\143\150\x20\x61\x63\143\x65\x73\x73\x20\164\x6f\153\x65\x6e", $eeaukqkuswaqwayu); echo "\74\144\x69\166\40\151\144\x3d\x22\x6d\x65\x73\x73\x61\x67\x65\x22\40\x63\x6c\141\x73\x73\75\x22\145\x72\x72\x6f\162\42\x3e\74\x70\x3e\74\x73\x74\x72\157\156\147\76"; esc_html_e("\105\x72\x72\157\x72\72\40" . $eeaukqkuswaqwayu[Constants::imkacwmiuiykyuim] . "\x2c\x20\105\x72\x72\157\x72\x20\104\x65\163\x63\x72\x69\x70\164\151\157\156\x3a\40" . $eeaukqkuswaqwayu["\145\x72\162\x6f\162\x5f\x64\x65\163\x63\162\151\x70\164\x69\x6f\x6e"], PR__MDL__MAILER); echo "\x3c\57\x73\x74\162\157\x6e\147\76\74\57\x70\x3e\x3c\57\x64\x69\166\x3e"; return false; } $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($this->ykuqkkqmsymwaqak()->oqsumoiwqwaocesk(), $eeaukqkuswaqwayu); return $eeaukqkuswaqwayu; } return false; } public function cmiamcgoqceqyimu() { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->iyysycaqqccsmysy("\x68\x74\164\160\x73\72\x2f\57\x61\143\143\157\165\156\x74\163\56\x67\x6f\x6f\x67\x6c\x65\x2e\143\157\x6d\x2f\x6f\x2f\x6f\x61\165\164\150\62\57\x74\157\153\x65\156", [Constants::cikssaguawsukusm => ["\147\x72\141\x6e\164\137\x74\171\160\x65" => SettingSegment::siumwmyaoyeyggeo, "\x63\x6c\x69\x65\x6e\x74\137\x69\144" => $this->oauthClientId, "\x63\154\x69\145\156\x74\x5f\x73\145\x63\x72\x65\164" => $this->oauthClientSecret, Constants::siumwmyaoyeyggeo => $this->oauthRefreshToken]]); $kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\107\x6f\x6f\147\154\145\40\x4f\101\165\x74\150\x3a\40\117\x66\146\x6c\151\156\145\40\164\157\x6b\x65\156\40\162\145\x73\x75\x6c\x74\x2e", $sogksuscggsicmac); return $sogksuscggsicmac["\x61\x63\x63\145\x73\163\x5f\164\157\153\145\156"] ?? false; } public function icyskgykkigmcuec() { $eeaukqkuswaqwayu = $this->weysguygiseoukqw($this->ykuqkkqmsymwaqak()->oqsumoiwqwaocesk()); if (empty($eeaukqkuswaqwayu)) { return new WP_Error(); } $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $qcakkkwickkwyuck->setAccessToken($eeaukqkuswaqwayu); if ($qcakkkwickkwyuck->isAccessTokenExpired()) { $mgegoogckgsumooq = $qcakkkwickkwyuck->getRefreshToken(); $qcakkkwickkwyuck->refreshToken($mgegoogckgsumooq); $eeaukqkuswaqwayu = $qcakkkwickkwyuck->getAccessToken(); $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($this->ykuqkkqmsymwaqak()->oqsumoiwqwaocesk(), $eeaukqkuswaqwayu); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x47\157\157\147\x6c\x65\40\117\x41\x75\x74\x68\72\x20\x4e\x65\x77\40\101\x63\143\x65\163\163\x20\124\157\153\145\x6e\x20\x66\145\164\x63\x68\x65\144\40\x61\x6e\x64\40\163\x61\x76\145\144\56", $eeaukqkuswaqwayu); } return $eeaukqkuswaqwayu; } public abstract function ykuqkkqmsymwaqak() : SettingSegment; }
