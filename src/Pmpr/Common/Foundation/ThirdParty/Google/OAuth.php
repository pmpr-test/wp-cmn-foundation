<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6f78e9d0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ThirdParty\Google; use Google\Client; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Traits\ArgsTrait; use WP_Error; abstract class OAuth extends Container { use ArgsTrait; protected ?Client $client = null; protected ?string $oauthClientSecret = ''; protected ?string $oauthClientId = ''; protected ?string $oauthRefreshToken = ''; public function __construct($csywmcysoeokssww = '') { $this->qiccuiwooiquycsg(); parent::__construct(); $this->oauthClientId = $this->weysguygiseoukqw($this->ykuqkkqmsymwaqak()->loasuugwsiwweeus()); $this->oauthClientSecret = $this->weysguygiseoukqw($this->ykuqkkqmsymwaqak()->wgkqswoummkiumqa()); $this->oauthRefreshToken = $csywmcysoeokssww; } public function qiccuiwooiquycsg() { } public function wmciwsucuuyumkes() : Client { if (empty($this->client)) { $qcakkkwickkwyuck = new Client(); $this->client = $qcakkkwickkwyuck; $qcakkkwickkwyuck->setScopes($this->imkyoqyocosuqasu(Constants::eoyiggawwagyugua)); $qcakkkwickkwyuck->setClientId($this->oauthClientId); $qcakkkwickkwyuck->setClientSecret($this->oauthClientSecret); $cocosaqymysoaggg = $this->ykuqkkqmsymwaqak()->simgasqekwkcogwk(); $qcakkkwickkwyuck->setRedirectUri($cocosaqymysoaggg); $qcakkkwickkwyuck->setAccessType($this->imkyoqyocosuqasu(Constants::qggeimykqieaqooa, Constants::iwkwimookwyqmyqc)); } return $this->client; } public function usmqosmqgoscmckk() { $eeaukqkuswaqwayu = $this->icyskgykkigmcuec(); if (is_wp_error($eeaukqkuswaqwayu)) { $coewqcmgkkmawigm = $this->wmciwsucuuyumkes()->createAuthUrl(); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug('Google OAuth: Can not authenticate, lets go to authorize', [$coewqcmgkkmawigm]); return [SettingSegment::ewmyoqeiikakqqmk => $coewqcmgkkmawigm]; } return $eeaukqkuswaqwayu; } public function ceeskwyicggwsows($iwiqmygaeowkcuck) { $eeaukqkuswaqwayu = $this->wmciwsucuuyumkes()->fetchAccessTokenWithAuthCode($iwiqmygaeowkcuck); if (!empty($eeaukqkuswaqwayu) && is_array($eeaukqkuswaqwayu)) { if (isset($eeaukqkuswaqwayu[Constants::imkacwmiuiykyuim]) || isset($eeaukqkuswaqwayu['error_description'])) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug('Google OAuth: Error on fetch access token', $eeaukqkuswaqwayu); echo '<div id="message" class="error"><p><strong>'; esc_html_e('Error: ' . $eeaukqkuswaqwayu[Constants::imkacwmiuiykyuim] . ', Error Description: ' . $eeaukqkuswaqwayu['error_description'], PR__MDL__MAILER); echo '</strong></p></div>'; return false; } $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($this->ykuqkkqmsymwaqak()->oqsumoiwqwaocesk(), $eeaukqkuswaqwayu); return $eeaukqkuswaqwayu; } return false; } public function cmiamcgoqceqyimu() { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->iyysycaqqccsmysy('https://accounts.google.com/o/oauth2/token', [Constants::cikssaguawsukusm => ['grant_type' => SettingSegment::siumwmyaoyeyggeo, 'client_id' => $this->oauthClientId, 'client_secret' => $this->oauthClientSecret, Constants::siumwmyaoyeyggeo => $this->oauthRefreshToken]]); $kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug('Google OAuth: Offline token result.', $sogksuscggsicmac); return $sogksuscggsicmac['access_token'] ?? false; } public function icyskgykkigmcuec() { $eeaukqkuswaqwayu = $this->weysguygiseoukqw($this->ykuqkkqmsymwaqak()->oqsumoiwqwaocesk()); if (empty($eeaukqkuswaqwayu)) { return new WP_Error(); } $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $qcakkkwickkwyuck->setAccessToken($eeaukqkuswaqwayu); if ($qcakkkwickkwyuck->isAccessTokenExpired()) { $mgegoogckgsumooq = $qcakkkwickkwyuck->getRefreshToken(); $qcakkkwickkwyuck->refreshToken($mgegoogckgsumooq); $eeaukqkuswaqwayu = $qcakkkwickkwyuck->getAccessToken(); $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($this->ykuqkkqmsymwaqak()->oqsumoiwqwaocesk(), $eeaukqkuswaqwayu); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug('Google OAuth: New Access Token fetched and saved.', $eeaukqkuswaqwayu); } return $eeaukqkuswaqwayu; } public abstract function ykuqkkqmsymwaqak() : SettingSegment; }
