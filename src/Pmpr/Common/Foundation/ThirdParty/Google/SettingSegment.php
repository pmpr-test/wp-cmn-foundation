<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1666776f24             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ThirdParty\Google; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Segment; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class SettingSegment extends Segment { const yckkaiueuoiicisc = 'authorized'; const oiugqmossekuqeia = 'oauth_grant'; const siumwmyaoyeyggeo = 'refresh_token'; const ewmyoqeiikakqqmk = 'authorization_uri'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea']); parent::wigskegsqequoeks(); } public function init() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); if (in_array($aiamqeawckcsuaou, [self::yckkaiueuoiicisc, self::oiugqmossekuqeia], true) && $this->eiwcuqigayigimak()->qcsgmgoukiouuscw() && $this->euuuueemkqgqkqae()) { switch ($aiamqeawckcsuaou) { case self::yckkaiueuoiicisc: if ($ymacoouqwcqwwagu = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::vswoiouoaykswgym, '', true)) { $eeaukqkuswaqwayu = $this->kcoyeakcmueukkyg($ymacoouqwcqwwagu); if (!empty($eeaukqkuswaqwayu)) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __('Access granted successfully!', PR__CMN__FOUNDATION), 'google-console-api-grant', Constants::ckcawaoawwioqecq); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __('Access could not be granted!', PR__CMN__FOUNDATION), 'google-console-api-grant'); } } break; default: case self::oiugqmossekuqeia: $sogksuscggsicmac = $this->usmqosmqgoscmckk(); if (isset($sogksuscggsicmac[self::ewmyoqeiikakqqmk])) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom(esc_url_raw($sogksuscggsicmac[self::ewmyoqeiikakqqmk])); } break; } } } public function yeyiguyegmmyusea() { $uamcoiueqaamsqma = $this->ioueiugiagmekoim(); if ($uamcoiueqaamsqma && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy() && !$this->eiwcuqigayigimak()->qcsgmgoukiouuscw() && !$this->omimwscgequgiaue()) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__('Setting', PR__CMN__FOUNDATION), $this->eiwcuqigayigimak()->oiucukewkckkwiqc()); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf($uamcoiueqaamsqma, $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($this)->qcgakseyaikigqco(), $iwywmkygwewiamwm), 'google-console-api-credentials'); } } public function kogckoosyiccicug() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->ycgeeoiieoiakgam('credential')->saemoowcasogykak(IconInterface::cokkqwmiaowmqcqs)->gswweykyogmsyawy(__('Google API Credential', PR__CMN__FOUNDATION))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yqgagqgesqyuyuqq('grant_access_status')->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Grant Access Status', PR__CMN__FOUNDATION))->oguessuismosauuu([$this, 'aukyyykycmmociqw']))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws('authorized_redirect_uri')->mkmssscwmeekwgqo()->kqqqugemmqagucuq()->gswweykyogmsyawy(__('Authorized redirect URI', PR__CMN__FOUNDATION))->geoymcigkogkswau($this->simgasqekwkcogwk())->gucwmccyimoagwcm(__('Use this url as authorized redirect uri in google api console.', PR__CMN__FOUNDATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws($this->loasuugwsiwweeus())->kqqqugemmqagucuq()->gswweykyogmsyawy(__('Client ID', PR__CMN__FOUNDATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws($this->wgkqswoummkiumqa())->kqqqugemmqagucuq()->gswweykyogmsyawy(__('Client Secret', PR__CMN__FOUNDATION))); } public function aukyyykycmmociqw() : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($this->euuuueemkqgqkqae()) { $cmwygeyygwqaemaq = sprintf('%s %s', __('Not connected.', PR__CMN__FOUNDATION), sprintf(__('Please %s to grant access permission.', PR__CMN__FOUNDATION), $swqimwqeweekeusq->yuawgssgauywkiia(__('Click Here', PR__CMN__FOUNDATION), $this->eukumaoeegcqksoe(), [Constants::mgsccwumkcawaqcy => '_blank']))); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ksosaawiuaiosemw, ['class' => 'icon-sm icon-warning']); } else { if (empty($this->giiuwsmyumqwwiyq($this->loasuugwsiwweeus())) || empty($this->giiuwsmyumqwwiyq($this->wgkqswoummkiumqa()))) { $cmwygeyygwqaemaq = sprintf('%s %s', __('Not connected.', PR__CMN__FOUNDATION), sprintf(__('Please fill %s and %s and save settings.', PR__CMN__FOUNDATION), __('Client ID', PR__CMN__FOUNDATION), __('Client Secret', PR__CMN__FOUNDATION))); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ksosaawiuaiosemw, ['class' => 'icon-sm icon-warning']); } else { $cmwygeyygwqaemaq = __('Connected', PR__CMN__FOUNDATION); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::sucyqiucaqowyomk, ['class' => 'icon-sm icon-success']); } } return sprintf('%s %s', $wkaqekwwgqsqwcoi, $cmwygeyygwqaemaq); } public function eukumaoeegcqksoe() : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::uqgcmmosieyimiku => self::oiugqmossekuqeia], $this->eiwcuqigayigimak()->oiucukewkckkwiqc()); } public function simgasqekwkcogwk() : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::uqgcmmosieyimiku => self::yckkaiueuoiicisc], $this->eiwcuqigayigimak()->oiucukewkckkwiqc()); } public function uqoumyokgcigiaws($qiouiwasaauyaaue) { $mgegoogckgsumooq = $this->giiuwsmyumqwwiyq($this->oqsumoiwqwaocesk()); if (!empty($mgegoogckgsumooq)) { $wkaooqqcymucwiim = $this->giiuwsmyumqwwiyq($this->loasuugwsiwweeus()); $sioyeocgooaqeqwy = $this->giiuwsmyumqwwiyq($this->wgkqswoummkiumqa()); if ($wkaooqqcymucwiim !== $qiouiwasaauyaaue[$this->loasuugwsiwweeus()] || $sioyeocgooaqeqwy !== $qiouiwasaauyaaue[$this->wgkqswoummkiumqa()]) { $qiouiwasaauyaaue[$this->oqsumoiwqwaocesk()] = null; } } return parent::uqoumyokgcigiaws($qiouiwasaauyaaue); } public function omimwscgequgiaue() : bool { return !empty($this->giiuwsmyumqwwiyq($this->loasuugwsiwweeus())) && !empty($this->giiuwsmyumqwwiyq($this->wgkqswoummkiumqa())) && !empty($this->giiuwsmyumqwwiyq($this->oqsumoiwqwaocesk())); } public function euuuueemkqgqkqae() : bool { return !empty($this->giiuwsmyumqwwiyq($this->loasuugwsiwweeus())) && !empty($this->giiuwsmyumqwwiyq($this->wgkqswoummkiumqa())) && empty($this->giiuwsmyumqwwiyq($this->oqsumoiwqwaocesk())); } public abstract function usmqosmqgoscmckk(); public abstract function kcoyeakcmueukkyg($ymacoouqwcqwwagu); public abstract function loasuugwsiwweeus() : string; public abstract function oqsumoiwqwaocesk() : string; public abstract function wgkqswoummkiumqa() : string; public abstract function ioueiugiagmekoim() : string; }
