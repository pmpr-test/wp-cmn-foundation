<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716beb88b904             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Asset; use Exception; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\Data\Source; use Symfony\Component\Asset\UrlPackage; use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy; class Manager extends Container { protected ?Component $component = null; protected ?UrlPackage $package = null; protected bool $customized = false; protected array $localize = [Constants::zmmsyimwiiaweocw => [], Constants::eycwiessycciwsao => [], Constants::yuguikokwoymmqem => []]; protected array $sources = [Constants::zmmsyimwiiaweocw => [], Constants::eycwiessycciwsao => [], Constants::yuguikokwoymmqem => []]; public function __construct(Component $wksoawcgagcgoask) { $this->component = $wksoawcgagcgoask; $this->ygegioggqgwwqooe(); parent::__construct(); } public function cguimswausiyasyk() : bool { return $this->customized; } public function ygegioggqgwwqooe() { try { $eeamcawaiqocomwy = $this->mkwomgueyaaooyye(); $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe(); if ($eeamcawaiqocomwy && $mkomwsiykqigmqca) { $wksoawcgagcgoask = $this->aiqioscoyukqgsgw(); if ($wksoawcgagcgoask) { $eeamcawaiqocomwy .= "\x2f{$wksoawcgagcgoask}"; $mkomwsiykqigmqca .= "\57{$wksoawcgagcgoask}"; } $this->package = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}\x2f\155\x61\156\151\146\145\x73\x74\x2e\152\x73\157\156")); } } catch (Exception $wgaoewqkwgomoaai) { } } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\141\144\155\151\x6e\x5f\145\156\x71\x75\x65\x75\x65\137\x61\x73\x73\x65\x74\163", [$this, "\163\x77\161\x65\x71\167\167\151\x6f\x65\171\153\x69\x65\x75\165"])->waqewsckuayqguos("\x6c\x6f\147\x69\156\x5f\145\156\x71\165\x65\x75\145\x5f\x61\163\163\145\164\x73", [$this, "\153\x71\x79\167\145\x63\x75\x71\x61\x67\x65\161\x73\167\165\167"])->waqewsckuayqguos("\146\162\x6f\x6e\x74\x5f\x65\156\x71\x75\145\165\145\137\x61\163\x73\145\x74\x73", [$this, "\x79\145\x73\155\x71\143\143\x75\x61\x65\143\x67\x65\147\155\x75"])->waqewsckuayqguos("\141\x64\x6d\x69\156\137\154\x6f\x63\141\154\x69\172\145\x5f\166\141\x72\x69\x61\x62\x6c\x65\163", [$this, "\x75\171\x65\x73\x75\167\x65\x65\163\153\171\151\171\x61\x69\x65"])->waqewsckuayqguos("\x6c\x6f\147\x69\x6e\137\x6c\157\x63\141\154\151\172\x65\137\x76\x61\162\151\141\142\154\x65\163", [$this, "\153\171\x67\x77\x65\165\157\x6b\163\161\x61\x6f\155\151\161\x79"])->waqewsckuayqguos("\x66\162\157\156\x74\x5f\x6c\157\143\x61\x6c\151\x7a\145\137\x76\141\162\x69\x61\142\154\x65\163", [$this, "\x73\157\x73\x61\153\x69\143\157\167\155\x71\151\x77\x67\163\x73"]); parent::wigskegsqequoeks(); } public function ecoqooiuymsgakys($scwiymciagumsuiw, $eueuqacmukymcyya) { if ($this->cguimswausiyasyk()) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $sqeykgyoooqysmca = Constants::zmmsyimwiiaweocw; } else { if ($this->caokeucsksukesyo()->kyqakacqeumicgag()->awgkmqkqkqawmqcu()) { $sqeykgyoooqysmca = Constants::yuguikokwoymmqem; } else { $sqeykgyoooqysmca = Constants::eycwiessycciwsao; } } $kqywgoqsmuswammk = "\x73\x63\x72\x69\160\164"; if (strpos($scwiymciagumsuiw, "\x73\162\x63\x3d")) { $yuwymayicwwqiske = $kqywgoqsmuswammk; } else { $kqywgoqsmuswammk = "\x6c\151\x6e\x6b"; $yuwymayicwwqiske = "\x73\164\171\x6c\x65"; } $egsumesakcaaukem = $this->yimkcammomikeegq("{$yuwymayicwwqiske}\55{$eueuqacmukymcyya}", $sqeykgyoooqysmca); if ($egsumesakcaaukem && $egsumesakcaaukem->qcumqiyomwauswqu()) { $scwiymciagumsuiw = $this->caokeucsksukesyo()->gkksucgseqqemesc()->igmaewykumgwoaoy($scwiymciagumsuiw, [$kqywgoqsmuswammk => $egsumesakcaaukem->aoamooyyyuyiwuoq()]); $scwiymciagumsuiw .= $egsumesakcaaukem->iqowoeuikoyckekq(); } } return $scwiymciagumsuiw; } public function uyesuweeskyiyaie($seiyqiqwcmseaiaq = []) : array { if ($this->csaueuycewaiuaay()) { $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[Constants::zmmsyimwiiaweocw]; } return $seiyqiqwcmseaiaq; } public function swqeqwwioeykieuu($yokgacoigcscwkie = []) { if ($this->csaueuycewaiuaay()) { $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[Constants::zmmsyimwiiaweocw]; } return $yokgacoigcscwkie; } public function sosakicowmqiwgss($seiyqiqwcmseaiaq = []) : array { if ($this->csaueuycewaiuaay()) { $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[Constants::eycwiessycciwsao]; } return $seiyqiqwcmseaiaq; } public function yesmqccuaecgegmu($yokgacoigcscwkie = []) : array { if ($this->csaueuycewaiuaay()) { $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[Constants::eycwiessycciwsao]; } return $yokgacoigcscwkie; } public function kygweuoksqaomiqy($seiyqiqwcmseaiaq = []) { if ($this->csaueuycewaiuaay()) { $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[Constants::yuguikokwoymmqem]; } return $seiyqiqwcmseaiaq; } public function kqywecuqageqswuw($yokgacoigcscwkie = []) { if ($this->csaueuycewaiuaay()) { $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[Constants::yuguikokwoymmqem]; } return $yokgacoigcscwkie; } public function oiucukewkckkwiqc(string $ymqmyyeuycgmigyo) : string { $eeamcawaiqocomwy = $this->mkwomgueyaaooyye(); $wksoawcgagcgoask = $this->aiqioscoyukqgsgw(); if ($wksoawcgagcgoask) { $eeamcawaiqocomwy .= "\x20\57{$wksoawcgagcgoask}"; } $eeamcawaiqocomwy .= "\40\57{$ymqmyyeuycgmigyo}"; return $eeamcawaiqocomwy; } public function msgqgyuieokaauma($egsumesakcaaukem) { $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = false; if ($egsumesakcaaukem && preg_match("\57\134\x2f\x77\x70\x2d\50\x63\x6f\x6e\x74\x65\156\x74\174\x69\156\143\x6c\165\x64\145\163\x29\x5c\57\x2f", $egsumesakcaaukem, $meyiiwcswqmuggyg)) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); switch ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($meyiiwcswqmuggyg, 1)) { case "\x63\x6f\156\x74\145\x6e\x74": $mkomwsiykqigmqca = $cwaqscoiqkokyase->cmaecekuqkwmemms("\x57\x50\137\103\x4f\116\124\x45\x4e\124\x5f\120\x41\124\x48"); $eeamcawaiqocomwy = content_url(); break; case "\x69\x6e\143\154\x75\144\145\x73": $mkomwsiykqigmqca = $cwaqscoiqkokyase->cmaecekuqkwmemms("\x41\102\123\120\x41\x54\110") . $cwaqscoiqkokyase->cmaecekuqkwmemms("\127\120\137\x49\116\103"); $eeamcawaiqocomwy = includes_url(); break; } if ($eeamcawaiqocomwy && $mkomwsiykqigmqca) { $eeamcawaiqocomwy = untrailingslashit($cwaqscoiqkokyase->mkcmkkskeeaskowy($eeamcawaiqocomwy)); $egsumesakcaaukem = untrailingslashit($cwaqscoiqkokyase->mkcmkkskeeaskowy($egsumesakcaaukem)); $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem); } } else { $uougkmikwgeueowa = $this->mkwomgueyaaooyye(); $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe(); if ($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo) { $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem); } } return $sogksuscggsicmac; } public function cqusmgskowmesgcg() : Component { return $this->component; } public function aiqioscoyukqgsgw() : ?string { return $this->cqusmgskowmesgcg()->aiqioscoyukqgsgw(); } public function occeyiewwiemouwo() : ?string { return $this->cqusmgskowmesgcg()->eeucessuemoysgqg(); } public function mkwomgueyaaooyye() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\120\122\x5f\102\125\x49\114\x44\x5f\x55\122\x4c", '')); } public function gyguukaswwqgsoag() : string { return trailingslashit($this->mkwomgueyaaooyye()) . $this->aiqioscoyukqgsgw(); } public function qmwkoewmiweimaqe() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::euecgwaikowgaiik, '')); } public function gikwwgqmwccescgy(string $ymqmyyeuycgmigyo) : ?string { $kqagasmwymmuiksq = null; try { $quowyokcwswmuois = $this->wocuguaggqkcimqq(); if ($quowyokcwswmuois) { $kqagasmwymmuiksq = $quowyokcwswmuois->getVersion($ymqmyyeuycgmigyo); } } catch (Exception $wgaoewqkwgomoaai) { } return $kqagasmwymmuiksq; } public function cgowscsaeiekakec(string $ymqmyyeuycgmigyo, bool $yqkwsouguwgoywcw = false) { $ceuoyocoywikssmy = false; if ($quowyokcwswmuois = $this->wocuguaggqkcimqq()) { try { $cyaeoagyqcqyqgmk = $this->qmwkoewmiweimaqe(); $kcismmoemwgiymuq = $this->cqusmgskowmesgcg()->aiqioscoyukqgsgw(); $esaqeawoigqgagum = trailingslashit(trailingslashit($cyaeoagyqcqyqgmk) . $kcismmoemwgiymuq) . $ymqmyyeuycgmigyo; if ($this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo); } } catch (Exception $wgaoewqkwgomoaai) { if ($yqkwsouguwgoywcw) { throw $wgaoewqkwgomoaai; } } } return $ceuoyocoywikssmy; } public function amqagusacuuuaswg(string $ymqmyyeuycgmigyo) { return $this->msgqgyuieokaauma($this->get($ymqmyyeuycgmigyo)); } public function get(string $ymqmyyeuycgmigyo, bool $camsqsqgyowiokmm = true, int $oyiokksswogocuwm = 0) : ?string { $ceuoyocoywikssmy = null; try { if ($quowyokcwswmuois = $this->wocuguaggqkcimqq()) { $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo); if (!$ceuoyocoywikssmy) { $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->remove($this->qmwkoewmiweimaqe() . "\57{$this->aiqioscoyukqgsgw()}"); $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw("\x63\141\156\x20\156\x6f\164\x20\x66\151\x6e\x64\40\x61\163\163\x65\164", 404); } if ($camsqsqgyowiokmm && $ceuoyocoywikssmy && strpos($ceuoyocoywikssmy, "\56\143\163\x73") && $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->gqesusmmigggsqai()) { $ceuoyocoywikssmy = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc("\x2e\143\163\163", "\x2e\x72\x74\x6c\56\143\163\x73", $ceuoyocoywikssmy); } } } catch (Exception $wgaoewqkwgomoaai) { if ($oyiokksswogocuwm < 2) { $this->ewcsyqaaigkicgse("\155\x6f\166\145\x5f\143\x6f\x6d\x70\157\156\x65\x6e\x74\137\163\164\141\164\151\143\x5f\141\x73\x73\145\x74", $this->cqusmgskowmesgcg()); $ceuoyocoywikssmy = $this->get($ymqmyyeuycgmigyo, $camsqsqgyowiokmm, ++$oyiokksswogocuwm); } } return $ceuoyocoywikssmy; } public function omywegoesmqwcmss() : string { return (string) $this->ocksiywmkyaqseou("\x62\x75\x69\x6c\x64\x5f\x64\x69\x72\145\143\164\x6f\x72\x79", ''); } public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string { $woaeeewomgcuesaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x41\102\123\120\101\124\x48"); $sycgeiyakseiumqy = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->qasciyckimeascmg()); $eeamcawaiqocomwy = null; if ($woaeeewomgcuesaa && $sycgeiyakseiumqy) { $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca); } return $eeamcawaiqocomwy; } public function wocuguaggqkcimqq() : ?UrlPackage { if (!$this->package) { $this->ygegioggqgwwqooe(); } return $this->package; } public function smcmuasuqwasaqiu(?string $ymqmyyeuycgmigyo) : string { $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe(); $kqagasmwymmuiksq = $this->gikwwgqmwccescgy($ymqmyyeuycgmigyo); return "{$mkomwsiykqigmqca}\57{$kqagasmwymmuiksq}"; } public function uakscggyguwqmkoe(?string $ymqmyyeuycgmigyo) : ?string { $eeamcawaiqocomwy = null; if ($yuwymayicwwqiske = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x50\122\x5f\x53\x54\x41\x54\x49\103\x5f\111\115\x41\x47\x45\x53\137\x55\x52\114")) { $eeamcawaiqocomwy = trailingslashit($yuwymayicwwqiske) . $ymqmyyeuycgmigyo; } return $eeamcawaiqocomwy; } public function eyamqkqiykagecsw(?string $wkaqekwwgqsqwcoi, array $ywmkwiwkosakssii = []) : string { if ($wkaqekwwgqsqwcoi) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kicoscymgmgqeqgy => false, Constants::aisguagukaewucii => Constants::auqoykcmsiauccao, Constants::akcccmoeyoywycua => false, Constants::uociqugwegocyuue => Constants::wikgqsqysyuoykse]); if (is_numeric($wkaqekwwgqsqwcoi)) { if ($ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy]) { $wkaqekwwgqsqwcoi = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($wkaqekwwgqsqwcoi); if ($wkaqekwwgqsqwcoi) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($wkaqekwwgqsqwcoi); if ($ywmkwiwkosakssii[Constants::akcccmoeyoywycua]) { $wkaqekwwgqsqwcoi = $this->kuakoogiqsiiqiok($wkaqekwwgqsqwcoi); } } } else { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi); } } else { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $qguqeikwwuququis = explode(DIRECTORY_SEPARATOR, $wkaqekwwgqsqwcoi); $cekceegqqaoiisei = $eygsasmqycagyayw->ocksiywmkyaqseou("\x69\143\x6f\156\x5f\163\145\164", $ywmkwiwkosakssii[Constants::uociqugwegocyuue], $qguqeikwwuququis[0], $wkaqekwwgqsqwcoi); if ($cekceegqqaoiisei && Constants::wikgqsqysyuoykse !== $cekceegqqaoiisei) { $oyscqkqkwmeakcac = array_pop($qguqeikwwuququis); $qguqeikwwuququis[] = $cekceegqqaoiisei; $qguqeikwwuququis[] = $oyscqkqkwmeakcac; $wkaqekwwgqsqwcoi = implode(DIRECTORY_SEPARATOR, $qguqeikwwuququis); } $ceuoyocoywikssmy = "\x69\155\147\x2f\x73\x76\147\x2f\x69\x63\x6f\x6e\57{$wkaqekwwgqsqwcoi}\56\x73\166\x67"; $eygsasmqycagyayw->cqumwcqgamogkiki($eygsasmqycagyayw, $ceuoyocoywikssmy); if ($ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy]) { $wkaqekwwgqsqwcoi = (string) $eygsasmqycagyayw->souwykwwmyygqyqi($ceuoyocoywikssmy); if ($ywmkwiwkosakssii[Constants::akcccmoeyoywycua]) { $wkaqekwwgqsqwcoi = $this->kuakoogiqsiiqiok($wkaqekwwgqsqwcoi); } } else { $wkaqekwwgqsqwcoi = (string) $eygsasmqycagyayw->get($ceuoyocoywikssmy); } } } return $wkaqekwwgqsqwcoi; } private function kuakoogiqsiiqiok($ewgwqamkygiqaawc) { if ($ewgwqamkygiqaawc) { $ewgwqamkygiqaawc = preg_replace("\x2f\x3c\x21\55\55\x5b\134\x73\x5c\123\x5d\52\x3f\55\x2d\x3e\57", '', $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x2f\x3c\x64\145\x66\163\x3e\x5b\x5c\x73\x5c\x53\135\52\77\x3c\134\x2f\x64\x65\146\x73\x3e\x2f", '', $ewgwqamkygiqaawc); } return $ewgwqamkygiqaawc; } private function cqumwcqgamogkiki(self $eygsasmqycagyayw, ?string $wkaqekwwgqsqwcoi) { $esaqeawoigqgagum = trailingslashit(trailingslashit($eygsasmqycagyayw->qmwkoewmiweimaqe()) . $eygsasmqycagyayw->aiqioscoyukqgsgw()) . $wkaqekwwgqsqwcoi; $miiyyswuessymmwe = $eygsasmqycagyayw->caokeucsksukesyo()->iuekyyeesukysksy(); $iiaumsgauuyeqksw = $miiyyswuessymmwe->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $gycuguqwikukcmik = trailingslashit($miiyyswuessymmwe->cmaecekuqkwmemms("\x50\122\137\x49\103\117\116\137\x52\105\115\117\124\105\x5f\102\101\x53\x45", self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(481039388889, "\x31\x35\70\62\61\67\62\x31\67\61\x38\x36\62\60\x32\x32\x33\x34\62\62\x35\62\x32\65\x31\70\66\x31\66\x39\61\x38\x36\61\71\67\x32\64\67\x31\x38\66\x31\x30\64\x31\x34\x37\x31\63\x36\x32\60\62\x32\64\x37\61\61\x39\x31\x33\x36\x32\62\x30\62\x32\x35"))) . $wkaqekwwgqsqwcoi; try { $osgeyewosumeygsi = true; if (ini_get("\141\154\154\157\x77\x5f\x75\x72\154\137\146\157\x70\x65\x6e") && !$miiyyswuessymmwe->cmaecekuqkwmemms("\x50\x52\137\104\x49\x53\x41\x42\x4c\105\137\x46\x45\124\x43\x48\137\111\x43\117\116\x5f\106\x52\117\x4d\137\x52\105\x4d\117\124\x45", false)) { if ($ewgwqamkygiqaawc = file_get_contents($gycuguqwikukcmik)) { $osgeyewosumeygsi = false; $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); } else { if ($qcgkuqesqqymcuui = fopen($gycuguqwikukcmik, "\x77\x62")) { $osgeyewosumeygsi = false; $ymmyeygsewqgsqea = fopen($esaqeawoigqgagum, "\162\142"); while ($wegougocoeeookww = fread($ymmyeygsewqgsqea, 8192)) { fwrite($qcgkuqesqqymcuui, $wegougocoeeookww, 8192); } fclose($ymmyeygsewqgsqea); fclose($qcgkuqesqqymcuui); } } } if ($osgeyewosumeygsi) { $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $eygsasmqycagyayw->souwykwwmyygqyqi("\x69\x6d\x67\x2f\x73\x76\x67\x2f\x67\145\141\x72\x2e\x73\x76\147")); } } catch (Exception $wgaoewqkwgomoaai) { } } } public function souwykwwmyygqyqi($egsumesakcaaukem, array $eyagkkkqkwcuygso = []) { if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($egsumesakcaaukem)) { $esaqeawoigqgagum = $this->smcmuasuqwasaqiu($egsumesakcaaukem); } else { $esaqeawoigqgagum = $this->amqagusacuuuaswg($egsumesakcaaukem); } $ewgwqamkygiqaawc = false; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); } if ($ewgwqamkygiqaawc && $eyagkkkqkwcuygso) { foreach ($eyagkkkqkwcuygso as $qwcmueausqgiwigy => $moyaaaascoeowegu) { $ewgwqamkygiqaawc = str_replace(["\x7b\173\40{$qwcmueausqgiwigy}\x20\x7d\x7d", "\x7b\40{$qwcmueausqgiwigy}\x20\175"], [$moyaaaascoeowegu, $moyaaaascoeowegu], $ewgwqamkygiqaawc); } } return $ewgwqamkygiqaawc; } private function amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq = [], string $mcaisukqqyosuasi = Constants::zmmsyimwiiaweocw) : self { $uukmwiwiqwyaaegk = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->localize[$mcaisukqqyosuasi], $uusmaiomayssaecw, []); if ($uukmwiwiqwyaaegk) { $wqsyimmcqogaosaq = array_merge($uukmwiwiqwyaaegk, $wqsyimmcqogaosaq); } $this->localize[$mcaisukqqyosuasi][$uusmaiomayssaecw] = $wqsyimmcqogaosaq; return $this; } public function siaqwswaougcwcci($wqsyimmcqogaosaq, $mcaisukqqyosuasi = Constants::zmmsyimwiiaweocw) : self { foreach ($wqsyimmcqogaosaq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->amqemiuwqggikkyi($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mcaisukqqyosuasi); } return $this; } public function ieayqiyiuuguowyq(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self { return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq, Constants::eycwiessycciwsao); } public function iagmuqogkyysiick($wqsyimmcqogaosaq = []) : self { return $this->siaqwswaougcwcci($wqsyimmcqogaosaq, Constants::eycwiessycciwsao); } public function gauosiuwaieksway(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self { return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq, Constants::yuguikokwoymmqem); } public function oaoisgmqkamuoeam($wqsyimmcqogaosaq = []) : self { return $this->siaqwswaougcwcci($wqsyimmcqogaosaq, Constants::yuguikokwoymmqem); } public function ikqyiskqaaymscgw(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self { return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq); } public function ssguskiqaagaauoy($wqsyimmcqogaosaq = []) : self { return $this->siaqwswaougcwcci($wqsyimmcqogaosaq); } private function seimiyccuwecawki(string $eueuqacmukymcyya, $ogomymegcoacqisg = false, string $sqeykgyoooqysmca = Constants::wwukgkqwyakeqwqk) : Source { return new Source("{$this->aiqioscoyukqgsgw()}\55{$eueuqacmukymcyya}", $ogomymegcoacqisg, $sqeykgyoooqysmca); } public function awgyqswkqywwmkye(string $eueuqacmukymcyya, $geecqyososceumsk = false) : Source { return $this->seimiyccuwecawki($eueuqacmukymcyya, $geecqyososceumsk, Constants::wwukgkqwyakeqwqk); } public function owygwqwawqoiusis(string $eueuqacmukymcyya, $ogomymegcoacqisg = false) : Source { return $this->seimiyccuwecawki($eueuqacmukymcyya, $ogomymegcoacqisg, Constants::qssgasiyswwaciwc); } public function ayeieigcckcmsikq(Source $egsumesakcaaukem) : self { $this->emmqgiegugsycumi($egsumesakcaaukem); return $this; } public function oeoquuwkoywiuesy(Source $egsumesakcaaukem) : self { $this->emmqgiegugsycumi($egsumesakcaaukem, Constants::eycwiessycciwsao); return $this; } public function wqiosiseiwsamggo(Source $egsumesakcaaukem) : self { $this->emmqgiegugsycumi($egsumesakcaaukem, Constants::yuguikokwoymmqem); return $this; } public function owgyegssycusoagc(Source $egsumesakcaaukem) : self { return $this->oeoquuwkoywiuesy($egsumesakcaaukem)->wqiosiseiwsamggo($egsumesakcaaukem)->ayeieigcckcmsikq($egsumesakcaaukem); } public function gqcsyicawqkimcau(array $equkucqiagswqcko) : self { return $this->iagmuqogkyysiick($equkucqiagswqcko)->ssguskiqaagaauoy($equkucqiagswqcko)->oaoisgmqkamuoeam($equkucqiagswqcko); } public function gmgiuyeyoguqqccw() : array { return $this->sources; } private function yimkcammomikeegq(string $uusmaiomayssaecw, string $sqeykgyoooqysmca = Constants::zmmsyimwiiaweocw) : ?Source { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->gmgiuyeyoguqqccw(), "{$sqeykgyoooqysmca}\x2e{$uusmaiomayssaecw}"); } private function emmqgiegugsycumi(Source $egsumesakcaaukem, string $sqeykgyoooqysmca = Constants::zmmsyimwiiaweocw) : self { if (!$this->cguimswausiyasyk() && $egsumesakcaaukem->qcumqiyomwauswqu()) { $this->cecaguuoecmccuse("\163\164\x79\154\x65\137\154\x6f\141\x64\x65\162\x5f\164\141\x67", [$this, "\x65\x63\157\161\x6f\x6f\x69\x75\x79\x6d\163\147\141\153\x79\163"], 10, 2); $this->cecaguuoecmccuse("\x73\143\162\151\160\164\137\154\157\x61\144\145\x72\137\164\141\147", [$this, "\145\143\157\x71\x6f\x6f\151\x75\x79\x6d\163\147\141\153\171\x73"], 10, 2); $this->customized = true; } $this->sources[$sqeykgyoooqysmca][$egsumesakcaaukem->cisyiemkeykgkomc()] = $egsumesakcaaukem; return $this; } public function yomasssaasmawcso(string $eueuqacmukymcyya) : string { return "{$this->aiqioscoyukqgsgw()}\55{$eueuqacmukymcyya}"; } public function csaueuycewaiuaay() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->mcgoysmkqsqooceq() && !$owaoeyikmqaeegma->goumkccmgysgqueu(); } public final function register($egsumesakcaaukem) { if ($egsumesakcaaukem instanceof Source) { $ogomymegcoacqisg = $egsumesakcaaukem->mgaeeqsgeoukeokc(); $usyqkyomqcuocgoa = $egsumesakcaaukem->mmoosseiswcigswg(); $eueuqacmukymcyya = $egsumesakcaaukem->yoickwcyekiwiyqm(); $kqagasmwymmuiksq = $egsumesakcaaukem->gikwwgqmwccescgy(); $ugmuiugkaygmsagq = $egsumesakcaaukem->auskmiuqesyqemgc(); $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); switch ($egsumesakcaaukem->gueasuouwqysmomu()) { case Constants::qssgasiyswwaciwc: $qaqoseqwmoyaigoy = $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $kqagasmwymmuiksq, $egsumesakcaaukem->mequouugayiseiei()); if ($qaqoseqwmoyaigoy && $usyqkyomqcuocgoa) { $geoqacegumkcaskk->yocqwqycwegayowg($eueuqacmukymcyya, $usyqkyomqcuocgoa); } break; case Constants::wwukgkqwyakeqwqk: $qaqoseqwmoyaigoy = $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $kqagasmwymmuiksq, $egsumesakcaaukem->acskcgywyymegikq()); if ($qaqoseqwmoyaigoy && $usyqkyomqcuocgoa) { $geoqacegumkcaskk->oiqqguakwcieaioo($eueuqacmukymcyya, $usyqkyomqcuocgoa); } break; } } return $this; } public final function enqueue($egsumesakcaaukem) : self { if ($egsumesakcaaukem instanceof Source) { $eueuqacmukymcyya = $egsumesakcaaukem->yoickwcyekiwiyqm(); $simqeemkoyaqkkwe = $egsumesakcaaukem->simqeemkoyaqkkwe(); switch ($egsumesakcaaukem->gueasuouwqysmomu()) { case Constants::qssgasiyswwaciwc: if ($simqeemkoyaqkkwe) { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->imsomwwswyoquoqk($eueuqacmukymcyya); $egsumesakcaaukem->gogiqycisqygoagk(); } break; case Constants::wwukgkqwyakeqwqk: if ($simqeemkoyaqkkwe) { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->myyikeyuuomqoyew($eueuqacmukymcyya); $egsumesakcaaukem->gogiqycisqygoagk(); } break; } } return $this; } public function ukgaoamyemuuamau(string $giqwgyocuwmkscwc, array $oammesyieqmwuwyi) : string { $icyaoosaykeskiuu = ''; $ggauoeuaesiymgee = [Constants::auqoykcmsiauccao => '', Constants::wwukgkqwyakeqwqk => Constants::mcwaoqwywimcegca, Constants::mkeceumayywugoqs => $giqwgyocuwmkscwc, Constants::guucyoeqgeiqiscm => Constants::mcwaoqwywimcegca, Constants::keggaaockoyusosg => []]; $qsqwqsymmqeoqwcu = []; $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($oammesyieqmwuwyi as $eeamcawaiqocomwy => $igqsaukqcqscimok) { if (is_string($igqsaukqcqscimok)) { $eeamcawaiqocomwy = $igqsaukqcqscimok; $igqsaukqcqscimok = []; } if ($eeamcawaiqocomwy) { $igqsaukqcqscimok[Constants::auqoykcmsiauccao] = $eeamcawaiqocomwy; if (isset($igqsaukqcqscimok[Constants::keggaaockoyusosg])) { $oseqkueswiwsceis = $igqsaukqcqscimok[Constants::keggaaockoyusosg]; $oseqkueswiwsceis[] = $eeamcawaiqocomwy; foreach ($oseqkueswiwsceis as $momcykaoccoymeig => $egsumesakcaaukem) { $saqmwwmqiwmkiwaa = pathinfo($egsumesakcaaukem, PATHINFO_EXTENSION); switch ($saqmwwmqiwmkiwaa) { case "\x74\x74\x66": $saqmwwmqiwmkiwaa = "\x74\x72\x75\x65\x74\x79\x70\145"; break; case "\145\157\x74": $saqmwwmqiwmkiwaa = "\x65\x6d\142\x65\144\x64\145\144\x2d\x6f\160\145\156\x74\171\160\145"; break; } $oseqkueswiwsceis[$momcykaoccoymeig] = [Constants::auqoykcmsiauccao => $egsumesakcaaukem, Constants::yqemseykugmsyeqa => $saqmwwmqiwmkiwaa]; } $igqsaukqcqscimok[Constants::keggaaockoyusosg] = $oseqkueswiwsceis; } $qsqwqsymmqeoqwcu[] = $cwaqscoiqkokyase->ckscqqquyskscaaw($igqsaukqcqscimok, $ggauoeuaesiymgee); } } if ($qsqwqsymmqeoqwcu) { $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\146\x6f\x6e\164\x2e\x63\x73\163", ["\x66\157\156\164\163" => $qsqwqsymmqeoqwcu]); } return $icyaoosaykeskiuu; } }
