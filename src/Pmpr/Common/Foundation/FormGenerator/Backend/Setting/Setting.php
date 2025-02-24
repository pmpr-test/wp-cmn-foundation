<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc35b0a9adb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Radio; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\FormGenerator\Backend\Model\Origin; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SettingTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Traits\CacheTrait; abstract class Setting extends Panel { use CacheTrait, SettingTrait; const ecksyyaycmgcguey = 'pr_setting_nonce'; const yywqsgsswiigkmuk = 'pr_setting_submit'; const gakcawywyigcsako = '%s_hook_check_license_key'; const iooowyaceoqeqioe = 'default_option'; const aoikksaaukkycoaq = 'fetch_license_information'; const qqmkokoccosyeoeq = 'update_by_' . self::iooowyaceoqeqioe; protected array $errors = []; protected array $default = []; protected bool $hasLicense = true; public function qiccuiwooiquycsg() { $this->aseocggwwegcmqes('settings'); $this->kwcoiysqqkqsugqo()->mcacmissyeeqkeak(Constants::kekcgssiyagioocg, 99)->mcacmissyeeqkeak(Constants::qoquaeuooeycomks, 'options-general.php'); parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $this->koaegcswmcqsiykq($uusmaiomayssaecw . Constants::wassgkgmoyygyaya . self::aoikksaaukkycoaq, [$this, 'ueksyewgwqsqawei'])->koaegcswmcqsiykq($uusmaiomayssaecw . Constants::wassgkgmoyygyaya . self::qqmkokoccosyeoeq, [$this, 'ockquegiogoggssq']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $aokagokqyuysuksm = $this->mwikyscisascoeea(); $uusmaiomayssaecw = $this->mwikyscisascoeea(); $this->cecaguuoecmccuse("get_{$aokagokqyuysuksm}_options", [$this, 'gkwkqmwweiawigae'])->cecaguuoecmccuse("get_{$uusmaiomayssaecw}_options", [$this, 'gkwkqmwweiawigae'])->cecaguuoecmccuse("get_{$aokagokqyuysuksm}_settings", [$this, 'gkwkqmwweiawigae'])->cecaguuoecmccuse("get_{$aokagokqyuysuksm}_option", [$this, 'giiuwsmyumqwwiyq'], 10, 3)->cecaguuoecmccuse("get_{$uusmaiomayssaecw}_option", [$this, 'giiuwsmyumqwwiyq'], 10, 3)->cecaguuoecmccuse("get_{$aokagokqyuysuksm}_setting", [$this, 'giiuwsmyumqwwiyq'], 10, 3); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if ($this->qcsgmgoukiouuscw()) { $this->igmamuiesywmkgeu($this->qoeiescseggagsqs(self::yywqsgsswiigkmuk)->ooqqgmyocscgmyae()->gmscmskmuissgywk()->gswweykyogmsyawy(__('Save Changes', PR__CMN__FOUNDATION))->ckccqugcgucieugo([Constants::waguuiqqgsysuukq => 'sm']))->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::ecksyyaycmgcguey)->mawcogsqogkauasq())->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(Constants::uqgcmmosieyimiku)->iygyugseyaqwywyg($this->cisyiemkeykgkomc())); $this->imawakueyqwccuqe(); } $this->emqesgqaiaywawey(); if ($wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($this)) { $this->cecaguuoecmccuse("pmpr_plg_{$wksoawcgagcgoask->eeucessuemoysgqg()}_row_actions", [$this, 'miuqeeywykgckqea']); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { $this->yueoagyugyeecwia(); if ($this->omuwssagqmgcymae()) { $caicqiiuwsyaeeko = $this->sgcwgmoayikkysaq(); if (!$caicqiiuwsyaeeko && $this->caokeucsksukesyo()->cqusmgskowmesgcg()->mqqowecakcuogwyw($this)) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__('Enter license key', PR__CMN__FOUNDATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(['tab' => $this->eawwmoocceckimku('license')], $this->oiucukewkckkwiqc())); $uamcoiueqaamsqma = sprintf(__('To complete the installation of %s, %s.', PR__CMN__FOUNDATION), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($wksoawcgagcgoask->qcgakseyaikigqco()), $iwywmkygwewiamwm); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, $uamcoiueqaamsqma, 'license'); } } } } parent::yeyiguyegmmyusea(); } public function miuqeeywykgckqea($ccowyogiqwikkkie) { $ccowyogiqwikkkie[Constants::wksqmcukwwqwyuuc] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__('Setting', PR__CMN__FOUNDATION), $this->oiucukewkckkwiqc()); return $ccowyogiqwikkkie; } public function ykwqaukkycogooii() { if ($this->omuwssagqmgcymae()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ((int) $this->syqkkoosgwqociqy() === 1) { $cmwygeyygwqaemaq = __('The license is valid.', PR__CMN__FOUNDATION); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::sucyqiucaqowyomk, ['class' => 'icon-sm icon-success']); } else { $cmwygeyygwqaemaq = __('The license is invalid.', PR__CMN__FOUNDATION); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ksosaawiuaiosemw, ['class' => 'icon-sm icon-warning']); } $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg('license')->jyumyyugiwwiqomk(999999)->gswweykyogmsyawy(__('License', PR__CMN__FOUNDATION))->saemoowcasogykak(IconInterface::waoeuymoiqmauwoi)->gucwmccyimoagwcm(__('Guide & License', PR__CMN__FOUNDATION))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam('license_key')->gswweykyogmsyawy(__('License Key', PR__CMN__FOUNDATION))->saemoowcasogykak(IconInterface::waoeuymoiqmauwoi)->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099528678676, "\61\x39\67\61\x36\x39\x31\63\71\61\x36\60\62\x31\70\x32\x32\x35\61\x36\x30\x32\63\x33\x31\67\x36\x31\x36\60\x32\x32\x38"))->gswweykyogmsyawy(__('License Code', PR__CMN__FOUNDATION))->mkmssscwmeekwgqo()->kqqqugemmqagucuq()->ioumayywwckwmykk($this->qoeiescseggagsqs('fetch_license_information')->gswweykyogmsyawy(__('Fetch License Information', PR__CMN__FOUNDATION))->gmscmskmuissgywk(true)->ckccqugcgucieugo()))->mkksewyosgeumwsa($this->yqgagqgesqyuyuqq(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099513473301, "\61\71\65\61\x38\x34\61\x35\62\x31\67\61\62\60\x30\x32\61\x39\x31\67\x31\x32\66\60\x32\61\x39\x32\64\60\x31\64\63\62\x34\60\62\x35\63\x32\x31\x39"))->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('License Status', PR__CMN__FOUNDATION))->oguessuismosauuu(sprintf('%s %s', $wkaqekwwgqsqwcoi, $cmwygeyygwqaemaq))))); } parent::ykwqaukkycogooii(); } public function mwswukmikkseyeya() { } private function yueoagyugyeecwia() { if (!$this->gkwkqmwweiawigae()) { $qiouiwasaauyaaue = []; $ycmguuqqaiisymgg = $this->oiswysuiioecsaae(); foreach ($ycmguuqqaiisymgg as $ggauoeuaesiymgee) { if ($ggauoeuaesiymgee instanceof DefaultOption) { $qiouiwasaauyaaue = $ggauoeuaesiymgee->gkwkqmwweiawigae(); break; } } $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $qiouiwasaauyaaue = (array) $this->ocksiywmkyaqseou("{$uusmaiomayssaecw}_default_options", $qiouiwasaauyaaue); if ($qiouiwasaauyaaue) { Origin::symcgieuakksimmu()->csucgayeuwoeeuuw($uusmaiomayssaecw, $qiouiwasaauyaaue); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->add($uusmaiomayssaecw, $qiouiwasaauyaaue); } } } public function emqesgqaiaywawey() { if ($this->oekaucwuqsqwuqeo()) { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_POST); if ($this->csucgayeuwoeeuuw($icwicymcioeyeyek)) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __('Settings Updated', PR__CMN__FOUNDATION), "{$this->cisyiemkeykgkomc()}_updated", Constants::ckcawaoawwioqecq); } } } public function qioweyiqewmsocem(string $uusmaiomayssaecw, $eqgoocgaqwqcimie, bool $cqscqicucmeamkyq = true) : bool { $iiumgusgeekimkya = $this->cisyiemkeykgkomc(); $ogskakmksyuqsiwg = Origin::symcgieuakksimmu()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iiumgusgeekimkya); if ($ogskakmksyuqsiwg) { if ($cqscqicucmeamkyq) { $this->ewcsyqaaigkicgse('setting_option_saved', $uusmaiomayssaecw, $eqgoocgaqwqcimie); $this->ewcsyqaaigkicgse("{$iiumgusgeekimkya}_option_saved", $uusmaiomayssaecw, $eqgoocgaqwqcimie); $this->ewcsyqaaigkicgse("{$iiumgusgeekimkya}_option_{$uusmaiomayssaecw}_saved", $eqgoocgaqwqcimie); } $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($iiumgusgeekimkya, 'pmpr'); } $this->qkikgkocoikymiac($uusmaiomayssaecw, $eqgoocgaqwqcimie); return $ogskakmksyuqsiwg; } public function qkikgkocoikymiac($omkysikckkcieckq, $eqgoocgaqwqcimie) { } public function oiswysuiioecsaae() : array { if (!$this->default) { $this->mwswukmikkseyeya(); } return $this->default; } public function syuyisqgcskmaymc($ggauoeuaesiymgee) : self { if ($ggauoeuaesiymgee instanceof DefaultOption) { $this->default[$ggauoeuaesiymgee->cisyiemkeykgkomc()] = $ggauoeuaesiymgee; } return $this; } public function sgcwgmoayikkysaq() : string { return (string) $this->giiuwsmyumqwwiyq(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099528678676, "\x31\71\x33\x31\65\x33\61\62\x31\61\x34\62\62\60\70\62\x32\61\x31\x34\x32\62\x35\65\x31\x37\62\x31\64\x32\x32\63\x36"), ''); } public function syqkkoosgwqociqy() { return $this->giiuwsmyumqwwiyq(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099513473301, "\x31\x35\65\x31\63\x34\61\61\x30\x31\62\x39\x31\x36\70\x31\x37\71\61\x32\x39\62\x32\60\61\67\x39\61\x39\x38\61\60\x37\61\x39\x38\x32\x30\x37\x31\x37\x39")); } public function omuwssagqmgcymae() : bool { return $this->hasLicense; } public function ueksyewgwqsqawei() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($this)) { $hsouuwoeemykcceu = $this->ocksiywmkyaqseou('fetch_license_key', '', $wksoawcgagcgoask->eeucessuemoysgqg()); if (is_string($hsouuwoeemykcceu) && 16 === strlen($hsouuwoeemykcceu)) { $this->qioweyiqewmsocem(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099528678676, "\61\67\x31\x31\63\67\x31\60\x35\x31\61\x36\61\67\x38\x31\71\67\x31\61\66\62\63\65\61\65\70\61\x31\66\62\x31\x36"), $hsouuwoeemykcceu, false); $this->qioweyiqewmsocem(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099513473301, "\61\x35\x39\x31\64\x34\61\61\x32\61\63\x31\61\66\x34\x31\67\65\x31\63\61\62\x30\x36\61\67\x35\x31\71\x34\x31\60\x33\x31\71\64\x32\60\x31\x31\x37\x35"), 1, false); $occymigcemkqucuw = true; $keccaugmemegoimu = [Constants::ciyoccqkiamemcmm => $hsouuwoeemykcceu, Constants::eoskkkieowogacws => sprintf(__('The license key for %s has been successfully received and saved', PR__CMN__FOUNDATION), $wksoawcgagcgoask->qcgakseyaikigqco())]; } else { if (is_wp_error($hsouuwoeemykcceu)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($hsouuwoeemykcceu); } else { $keccaugmemegoimu = __('Fetched data is empty', PR__CMN__FOUNDATION); } } } else { $keccaugmemegoimu = __('Can not found component', PR__CMN__FOUNDATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function ockquegiogoggssq() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $oqkiasueyekoumuk = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::iooowyaceoqeqioe); if ($oqkiasueyekoumuk) { $mksyucucyswaukig = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->oiswysuiioecsaae(), $oqkiasueyekoumuk); if ($mksyucucyswaukig instanceof DefaultOption) { $qiouiwasaauyaaue = $mksyucucyswaukig->gkwkqmwweiawigae(); $qiouiwasaauyaaue[self::iooowyaceoqeqioe] = $oqkiasueyekoumuk; $yeacayasgueouoqc = $this->gkwkqmwweiawigae(); $qiouiwasaauyaaue = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($qiouiwasaauyaaue, $yeacayasgueouoqc); $this->csucgayeuwoeeuuw($qiouiwasaauyaaue); $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__('Setting options successfully change to %s', PR__CMN__FOUNDATION), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($mksyucucyswaukig->qcgakseyaikigqco())); } else { $keccaugmemegoimu = sprintf(__('Selected % is not valid', PR__CMN__FOUNDATION), __('Setting Type', PR__CMN__FOUNDATION)); } } else { $keccaugmemegoimu = sprintf(__('Please select an option in the %s', PR__CMN__FOUNDATION), __('Setting Type', PR__CMN__FOUNDATION)); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function kuaemyukkkeywccc($uusmaiomayssaecw, $meqocwsecsywiiqs, array $qiouiwasaauyaaue = []) : DefaultOption { $mksyucucyswaukig = new DefaultOption(); $qiouiwasaauyaaue = (array) $this->ocksiywmkyaqseou("{$this->cisyiemkeykgkomc()}_defaults_options", $qiouiwasaauyaaue, $uusmaiomayssaecw); $mksyucucyswaukig->gcgmwakaoecqcuwo($uusmaiomayssaecw)->gswweykyogmsyawy(sprintf(__('%s Setting Template', PR__CMN__FOUNDATION), $meqocwsecsywiiqs))->acauweqyyugwisqc($qiouiwasaauyaaue); return $mksyucucyswaukig; } public function kyikgkoamuecogww($hsouuwoeemykcceu) : bool { $kyikgkoamuecogww = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->kgusoegcwaqyksee($this, $hsouuwoeemykcceu); if (!$kyikgkoamuecogww || $kyikgkoamuecogww === $hsouuwoeemykcceu) { $kuuugksiksqcaaaa = false; } else { $kuuugksiksqcaaaa = true; } return $kuuugksiksqcaaaa; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->options = null; $this->uwkmaywceaaaigwo()->kumkwyksmeikauow()->delete($this->cisyiemkeykgkomc(), 'pmpr'); $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), $this->gkwkqmwweiawigae()); if ($ggauoeuaesiymgee = $this->oiswysuiioecsaae()) { $qiouiwasaauyaaue = []; foreach ($ggauoeuaesiymgee as $omokquqmkuggsmiy) { $qiouiwasaauyaaue[$omokquqmkuggsmiy->cisyiemkeykgkomc()] = $omokquqmkuggsmiy->qcgakseyaikigqco(); } $this->iomqgwmuicwwweyo()->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("{$this->cisyiemkeykgkomc()}_templates")->gswweykyogmsyawy(__('Setting Templates', PR__CMN__FOUNDATION))->jyumyyugiwwiqomk(10)->saemoowcasogykak(IconInterface::goecmekguaiiqwim)->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::iooowyaceoqeqioe)->gswweykyogmsyawy(__('Setting Template', PR__CMN__FOUNDATION))->acauweqyyugwisqc($qiouiwasaauyaaue)->iygyugseyaqwywyg($this->giiuwsmyumqwwiyq(self::iooowyaceoqeqioe)))->mkksewyosgeumwsa($this->qoeiescseggagsqs('save_default')->gswweykyogmsyawy(__('Change Settings', PR__CMN__FOUNDATION))->ygagwkucacyassau()->gmscmskmuissgywk(true))); } } public function gamgkoooceoaaeie($oceoauekaygmuoko) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(['tab' => "pr-panel-nav-item-{$oceoauekaygmuoko}"], $this->oiucukewkckkwiqc()); } public final function wciiwiecuqqagcoq(string $aokagokqyuysuksm) : Radio { $sckumcuqemuukces = __('min', PR__CMN__FOUNDATION); $ygykagaqyuawwiyo = __('hr', PR__CMN__FOUNDATION); $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo]; $qiouiwasaauyaaue = ['unlimited' => __('No Limit', PR__CMN__FOUNDATION)]; foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) { $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60; $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}  {$iyqygqimawuycsyq}"; } return $this->yyuwuqsiucweeoue($aokagokqyuysuksm)->acauweqyyugwisqc($qiouiwasaauyaaue)->mkmssscwmeekwgqo()->eumecwmqmukqgyea(); } }
