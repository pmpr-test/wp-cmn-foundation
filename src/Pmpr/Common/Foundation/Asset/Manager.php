<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671269d6639fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Asset; use Exception; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Data\Component; use Pmpr\Common\Foundation\Data\Source; use Symfony\Component\Asset\UrlPackage; use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy; class Manager extends Container { protected ?Component $component = null; protected ?UrlPackage $package = null; protected bool $customized = false; protected array $localize = [Constants::zmmsyimwiiaweocw => [], Constants::eycwiessycciwsao => [], Constants::yuguikokwoymmqem => []]; protected array $sources = [Constants::zmmsyimwiiaweocw => [], Constants::eycwiessycciwsao => [], Constants::yuguikokwoymmqem => []]; public function __construct(Component $wksoawcgagcgoask) { $this->component = $wksoawcgagcgoask; $this->ygegioggqgwwqooe(); parent::__construct(); } public function cguimswausiyasyk() : bool { return $this->customized; } public function ygegioggqgwwqooe() { try { $eeamcawaiqocomwy = $this->mkwomgueyaaooyye(); $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe(); if ($eeamcawaiqocomwy && $mkomwsiykqigmqca) { $wksoawcgagcgoask = $this->aiqioscoyukqgsgw(); if ($wksoawcgagcgoask) { $eeamcawaiqocomwy .= "\x2f{$wksoawcgagcgoask}"; $mkomwsiykqigmqca .= "\57{$wksoawcgagcgoask}"; } $this->package = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}\x2f\x6d\x61\x6e\x69\x66\x65\163\164\56\x6a\163\x6f\156")); } } catch (Exception $wgaoewqkwgomoaai) { } } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\141\144\155\x69\x6e\x5f\x65\156\161\x75\145\x75\145\x5f\x61\163\x73\x65\x74\163", [$this, "\x73\167\x71\x65\161\x77\x77\151\x6f\x65\x79\x6b\151\x65\x75\165"])->waqewsckuayqguos("\154\x6f\x67\x69\156\137\145\x6e\x71\165\x65\x75\145\137\141\x73\x73\145\x74\x73", [$this, "\x6b\161\x79\x77\145\x63\x75\x71\x61\x67\x65\x71\163\x77\x75\167"])->waqewsckuayqguos("\x66\162\x6f\x6e\x74\x5f\145\x6e\161\x75\x65\165\x65\137\141\163\x73\x65\x74\x73", [$this, "\x79\145\163\155\161\x63\143\x75\x61\145\x63\147\145\x67\x6d\165"])->waqewsckuayqguos("\141\x64\155\151\x6e\137\x6c\x6f\143\141\x6c\151\172\145\x5f\166\x61\x72\151\141\x62\x6c\x65\x73", [$this, "\x75\x79\x65\163\165\167\145\145\x73\x6b\171\151\x79\141\x69\x65"])->waqewsckuayqguos("\x6c\x6f\147\x69\156\x5f\x6c\x6f\x63\141\x6c\151\x7a\145\x5f\x76\x61\x72\151\x61\x62\154\x65\x73", [$this, "\x6b\171\x67\167\x65\x75\x6f\153\x73\x71\141\157\x6d\151\161\171"])->waqewsckuayqguos("\146\x72\157\x6e\x74\137\154\157\143\x61\x6c\151\172\145\137\166\x61\162\x69\141\x62\x6c\145\x73", [$this, "\x73\157\163\141\x6b\x69\143\x6f\167\x6d\161\151\x77\147\x73\x73"]); parent::wigskegsqequoeks(); } public function ecoqooiuymsgakys($scwiymciagumsuiw, $eueuqacmukymcyya) { if ($this->cguimswausiyasyk()) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $sqeykgyoooqysmca = Constants::zmmsyimwiiaweocw; } else { if ($this->caokeucsksukesyo()->kyqakacqeumicgag()->awgkmqkqkqawmqcu()) { $sqeykgyoooqysmca = Constants::yuguikokwoymmqem; } else { $sqeykgyoooqysmca = Constants::eycwiessycciwsao; } } $kqywgoqsmuswammk = "\163\x63\x72\x69\160\x74"; if (strpos($scwiymciagumsuiw, "\163\x72\x63\75")) { $yuwymayicwwqiske = $kqywgoqsmuswammk; } else { $kqywgoqsmuswammk = "\x6c\151\x6e\153"; $yuwymayicwwqiske = "\x73\x74\x79\154\145"; } $egsumesakcaaukem = $this->yimkcammomikeegq("{$yuwymayicwwqiske}\x2d{$eueuqacmukymcyya}", $sqeykgyoooqysmca); if ($egsumesakcaaukem && $egsumesakcaaukem->qcumqiyomwauswqu()) { $scwiymciagumsuiw = $this->caokeucsksukesyo()->gkksucgseqqemesc()->igmaewykumgwoaoy($scwiymciagumsuiw, [$kqywgoqsmuswammk => $egsumesakcaaukem->aoamooyyyuyiwuoq()]); $scwiymciagumsuiw .= $egsumesakcaaukem->iqowoeuikoyckekq(); } } return $scwiymciagumsuiw; } public function uyesuweeskyiyaie($seiyqiqwcmseaiaq = []) : array { if ($this->csaueuycewaiuaay()) { $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[Constants::zmmsyimwiiaweocw]; } return $seiyqiqwcmseaiaq; } public function swqeqwwioeykieuu($yokgacoigcscwkie = []) { if ($this->csaueuycewaiuaay()) { $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[Constants::zmmsyimwiiaweocw]; } return $yokgacoigcscwkie; } public function sosakicowmqiwgss($seiyqiqwcmseaiaq = []) : array { if ($this->csaueuycewaiuaay()) { $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[Constants::eycwiessycciwsao]; } return $seiyqiqwcmseaiaq; } public function yesmqccuaecgegmu($yokgacoigcscwkie = []) : array { if ($this->csaueuycewaiuaay()) { $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[Constants::eycwiessycciwsao]; } return $yokgacoigcscwkie; } public function kygweuoksqaomiqy($seiyqiqwcmseaiaq = []) { if ($this->csaueuycewaiuaay()) { $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[Constants::yuguikokwoymmqem]; } return $seiyqiqwcmseaiaq; } public function kqywecuqageqswuw($yokgacoigcscwkie = []) { if ($this->csaueuycewaiuaay()) { $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[Constants::yuguikokwoymmqem]; } return $yokgacoigcscwkie; } public function oiucukewkckkwiqc(string $ymqmyyeuycgmigyo) : string { $eeamcawaiqocomwy = $this->mkwomgueyaaooyye(); $wksoawcgagcgoask = $this->aiqioscoyukqgsgw(); if ($wksoawcgagcgoask) { $eeamcawaiqocomwy .= "\40\57{$wksoawcgagcgoask}"; } $eeamcawaiqocomwy .= "\40\x2f{$ymqmyyeuycgmigyo}"; return $eeamcawaiqocomwy; } public function msgqgyuieokaauma($egsumesakcaaukem) { $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = false; if ($egsumesakcaaukem && preg_match("\x2f\x5c\57\x77\x70\55\x28\143\x6f\x6e\164\x65\156\x74\x7c\x69\156\x63\154\x75\144\145\x73\51\x5c\x2f\57", $egsumesakcaaukem, $meyiiwcswqmuggyg)) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); switch ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($meyiiwcswqmuggyg, 1)) { case "\143\x6f\156\164\145\x6e\x74": $mkomwsiykqigmqca = $cwaqscoiqkokyase->cmaecekuqkwmemms("\127\120\x5f\103\117\116\x54\x45\x4e\x54\x5f\x50\x41\124\110"); $eeamcawaiqocomwy = content_url(); break; case "\x69\156\x63\x6c\165\x64\145\x73": $mkomwsiykqigmqca = $cwaqscoiqkokyase->cmaecekuqkwmemms("\x41\102\123\120\x41\x54\x48") . $cwaqscoiqkokyase->cmaecekuqkwmemms("\x57\120\x5f\111\x4e\x43"); $eeamcawaiqocomwy = includes_url(); break; } if ($eeamcawaiqocomwy && $mkomwsiykqigmqca) { $eeamcawaiqocomwy = untrailingslashit($cwaqscoiqkokyase->mkcmkkskeeaskowy($eeamcawaiqocomwy)); $egsumesakcaaukem = untrailingslashit($cwaqscoiqkokyase->mkcmkkskeeaskowy($egsumesakcaaukem)); $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem); } } else { $uougkmikwgeueowa = $this->mkwomgueyaaooyye(); $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe(); if ($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo) { $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem); } } return $sogksuscggsicmac; } public function cqusmgskowmesgcg() : Component { return $this->component; } public function aiqioscoyukqgsgw() : ?string { return $this->cqusmgskowmesgcg()->aiqioscoyukqgsgw(); } public function occeyiewwiemouwo() : ?string { return $this->cqusmgskowmesgcg()->eeucessuemoysgqg(); } public function mkwomgueyaaooyye() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x50\x52\x5f\x42\x55\x49\x4c\x44\x5f\x55\122\x4c", '')); } public function gyguukaswwqgsoag() : string { return trailingslashit($this->mkwomgueyaaooyye()) . $this->aiqioscoyukqgsgw(); } public function qmwkoewmiweimaqe() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::euecgwaikowgaiik, '')); } public function gikwwgqmwccescgy(string $ymqmyyeuycgmigyo) : ?string { $kqagasmwymmuiksq = null; try { $quowyokcwswmuois = $this->wocuguaggqkcimqq(); if ($quowyokcwswmuois) { $kqagasmwymmuiksq = $quowyokcwswmuois->getVersion($ymqmyyeuycgmigyo); } } catch (Exception $wgaoewqkwgomoaai) { } return $kqagasmwymmuiksq; } public function cgowscsaeiekakec(string $ymqmyyeuycgmigyo, bool $yqkwsouguwgoywcw = false) { $ceuoyocoywikssmy = false; if ($quowyokcwswmuois = $this->wocuguaggqkcimqq()) { try { $cyaeoagyqcqyqgmk = $this->qmwkoewmiweimaqe(); $kcismmoemwgiymuq = $this->cqusmgskowmesgcg()->aiqioscoyukqgsgw(); $esaqeawoigqgagum = trailingslashit(trailingslashit($cyaeoagyqcqyqgmk) . $kcismmoemwgiymuq) . $ymqmyyeuycgmigyo; if ($this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo); } } catch (Exception $wgaoewqkwgomoaai) { if ($yqkwsouguwgoywcw) { throw $wgaoewqkwgomoaai; } } } return $ceuoyocoywikssmy; } public function amqagusacuuuaswg(string $ymqmyyeuycgmigyo) { return $this->msgqgyuieokaauma($this->get($ymqmyyeuycgmigyo)); } public function get(string $ymqmyyeuycgmigyo, bool $camsqsqgyowiokmm = true, int $oyiokksswogocuwm = 0) : ?string { $ceuoyocoywikssmy = null; try { if ($quowyokcwswmuois = $this->wocuguaggqkcimqq()) { $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo); if (!$ceuoyocoywikssmy) { $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->remove($this->qmwkoewmiweimaqe() . "\57{$this->aiqioscoyukqgsgw()}"); $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw("\x63\x61\156\x20\x6e\x6f\164\x20\146\151\x6e\x64\40\x61\x73\x73\145\164", 404); } if ($camsqsqgyowiokmm && $ceuoyocoywikssmy && strpos($ceuoyocoywikssmy, "\x2e\143\x73\x73") && $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->gqesusmmigggsqai()) { $ceuoyocoywikssmy = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc("\x2e\143\x73\x73", "\x2e\x72\x74\x6c\56\x63\x73\x73", $ceuoyocoywikssmy); } } } catch (Exception $wgaoewqkwgomoaai) { if ($oyiokksswogocuwm < 2) { $this->ewcsyqaaigkicgse("\x6d\157\x76\145\137\143\x6f\155\x70\x6f\156\145\156\164\137\x73\164\141\x74\x69\143\x5f\x61\163\163\145\164", $this->cqusmgskowmesgcg()); $ceuoyocoywikssmy = $this->get($ymqmyyeuycgmigyo, $camsqsqgyowiokmm, ++$oyiokksswogocuwm); } } return $ceuoyocoywikssmy; } public function omywegoesmqwcmss() : string { return (string) $this->ocksiywmkyaqseou("\x62\165\x69\154\144\137\144\x69\162\x65\143\164\157\162\x79", ''); } public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string { $woaeeewomgcuesaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\101\x42\123\120\x41\x54\x48"); $sycgeiyakseiumqy = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->qasciyckimeascmg()); $eeamcawaiqocomwy = null; if ($woaeeewomgcuesaa && $sycgeiyakseiumqy) { $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca); } return $eeamcawaiqocomwy; } public function wocuguaggqkcimqq() : ?UrlPackage { if (!$this->package) { $this->ygegioggqgwwqooe(); } return $this->package; } public function smcmuasuqwasaqiu(?string $ymqmyyeuycgmigyo) : string { $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe(); $kqagasmwymmuiksq = $this->gikwwgqmwccescgy($ymqmyyeuycgmigyo); return "{$mkomwsiykqigmqca}\x2f{$kqagasmwymmuiksq}"; } public function uakscggyguwqmkoe(?string $ymqmyyeuycgmigyo) : ?string { $eeamcawaiqocomwy = null; if ($yuwymayicwwqiske = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x50\122\137\x53\124\x41\124\x49\x43\137\x49\115\x41\107\x45\123\137\125\x52\114")) { $eeamcawaiqocomwy = trailingslashit($yuwymayicwwqiske) . $ymqmyyeuycgmigyo; } return $eeamcawaiqocomwy; } public function eyamqkqiykagecsw(?string $wkaqekwwgqsqwcoi, array $ywmkwiwkosakssii = []) : string { if ($wkaqekwwgqsqwcoi) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kicoscymgmgqeqgy => false, Constants::aisguagukaewucii => Constants::auqoykcmsiauccao, Constants::akcccmoeyoywycua => false, Constants::uociqugwegocyuue => Constants::wikgqsqysyuoykse]); if (is_numeric($wkaqekwwgqsqwcoi)) { if ($ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy]) { $wkaqekwwgqsqwcoi = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($wkaqekwwgqsqwcoi); if ($wkaqekwwgqsqwcoi) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($wkaqekwwgqsqwcoi); if ($ywmkwiwkosakssii[Constants::akcccmoeyoywycua]) { $wkaqekwwgqsqwcoi = $this->kuakoogiqsiiqiok($wkaqekwwgqsqwcoi); } } } else { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi); } } else { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $qguqeikwwuququis = explode(DIRECTORY_SEPARATOR, $wkaqekwwgqsqwcoi); $cekceegqqaoiisei = $eygsasmqycagyayw->ocksiywmkyaqseou("\151\143\x6f\156\x5f\163\x65\164", $ywmkwiwkosakssii[Constants::uociqugwegocyuue], $qguqeikwwuququis[0], $wkaqekwwgqsqwcoi); if ($cekceegqqaoiisei && Constants::wikgqsqysyuoykse !== $cekceegqqaoiisei) { $oyscqkqkwmeakcac = array_pop($qguqeikwwuququis); $qguqeikwwuququis[] = $cekceegqqaoiisei; $qguqeikwwuququis[] = $oyscqkqkwmeakcac; $wkaqekwwgqsqwcoi = implode(DIRECTORY_SEPARATOR, $qguqeikwwuququis); } $ceuoyocoywikssmy = "\151\x6d\147\57\x73\x76\x67\57\151\143\157\156\57{$wkaqekwwgqsqwcoi}\56\x73\x76\x67"; $eygsasmqycagyayw->cqumwcqgamogkiki($eygsasmqycagyayw, $ceuoyocoywikssmy); if ($ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy]) { $wkaqekwwgqsqwcoi = (string) $eygsasmqycagyayw->souwykwwmyygqyqi($ceuoyocoywikssmy); if ($ywmkwiwkosakssii[Constants::akcccmoeyoywycua]) { $wkaqekwwgqsqwcoi = $this->kuakoogiqsiiqiok($wkaqekwwgqsqwcoi); } } else { $wkaqekwwgqsqwcoi = (string) $eygsasmqycagyayw->get($ceuoyocoywikssmy); } } } return $wkaqekwwgqsqwcoi; } private function kuakoogiqsiiqiok($ewgwqamkygiqaawc) { if ($ewgwqamkygiqaawc) { $ewgwqamkygiqaawc = preg_replace("\x2f\x3c\x21\x2d\x2d\133\x5c\x73\x5c\123\135\52\x3f\55\55\x3e\x2f", '', $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\57\x3c\144\145\x66\x73\x3e\133\x5c\x73\x5c\123\135\x2a\77\74\x5c\x2f\x64\x65\x66\x73\x3e\x2f", '', $ewgwqamkygiqaawc); } return $ewgwqamkygiqaawc; } private function cqumwcqgamogkiki(self $eygsasmqycagyayw, ?string $wkaqekwwgqsqwcoi) { $esaqeawoigqgagum = trailingslashit(trailingslashit($eygsasmqycagyayw->qmwkoewmiweimaqe()) . $eygsasmqycagyayw->aiqioscoyukqgsgw()) . $wkaqekwwgqsqwcoi; $miiyyswuessymmwe = $eygsasmqycagyayw->caokeucsksukesyo()->iuekyyeesukysksy(); $iiaumsgauuyeqksw = $miiyyswuessymmwe->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $gycuguqwikukcmik = trailingslashit($miiyyswuessymmwe->cmaecekuqkwmemms("\120\x52\x5f\x49\x43\117\x4e\137\122\x45\115\x4f\124\105\137\102\101\123\x45", self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(481039388889, "\x31\70\64\62\64\x37\x32\64\x37\x32\60\x30\x32\63\62\x32\x38\60\62\66\x39\x32\66\71\62\x30\x30\x31\71\x33\x32\60\60\62\62\x31\x33\60\61\x32\x30\60\61\64\x36\61\66\x35\61\x35\x38\x32\63\62\63\x30\61\x31\65\x31\61\x35\x38\62\66\66\62\66\71"))) . $wkaqekwwgqsqwcoi; try { $osgeyewosumeygsi = true; if (ini_get("\141\154\x6c\x6f\167\x5f\x75\162\154\x5f\146\157\x70\145\x6e") && !$miiyyswuessymmwe->cmaecekuqkwmemms("\120\122\137\104\111\x53\x41\102\x4c\105\x5f\106\x45\124\103\110\137\111\103\x4f\116\137\x46\122\x4f\x4d\x5f\122\x45\x4d\117\124\x45", false)) { if ($ewgwqamkygiqaawc = file_get_contents($gycuguqwikukcmik)) { $osgeyewosumeygsi = false; $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); } else { if ($qcgkuqesqqymcuui = fopen($gycuguqwikukcmik, "\167\142")) { $osgeyewosumeygsi = false; $ymmyeygsewqgsqea = fopen($esaqeawoigqgagum, "\162\142"); while ($wegougocoeeookww = fread($ymmyeygsewqgsqea, 8192)) { fwrite($qcgkuqesqqymcuui, $wegougocoeeookww, 8192); } fclose($ymmyeygsewqgsqea); fclose($qcgkuqesqqymcuui); } } } if ($osgeyewosumeygsi) { $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $eygsasmqycagyayw->souwykwwmyygqyqi("\151\155\x67\57\x73\166\x67\57\x67\145\x61\x72\x2e\x73\166\147")); } } catch (Exception $wgaoewqkwgomoaai) { } } } public function souwykwwmyygqyqi($egsumesakcaaukem, array $eyagkkkqkwcuygso = []) { if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($egsumesakcaaukem)) { $esaqeawoigqgagum = $this->smcmuasuqwasaqiu($egsumesakcaaukem); } else { $esaqeawoigqgagum = $this->amqagusacuuuaswg($egsumesakcaaukem); } $ewgwqamkygiqaawc = false; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); } if ($ewgwqamkygiqaawc && $eyagkkkqkwcuygso) { foreach ($eyagkkkqkwcuygso as $qwcmueausqgiwigy => $moyaaaascoeowegu) { $ewgwqamkygiqaawc = str_replace(["\173\x7b\40{$qwcmueausqgiwigy}\40\175\175", "\173\40{$qwcmueausqgiwigy}\40\x7d"], [$moyaaaascoeowegu, $moyaaaascoeowegu], $ewgwqamkygiqaawc); } } return $ewgwqamkygiqaawc; } private function amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq = [], string $mcaisukqqyosuasi = Constants::zmmsyimwiiaweocw) : self { $uukmwiwiqwyaaegk = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->localize[$mcaisukqqyosuasi], $uusmaiomayssaecw, []); if ($uukmwiwiqwyaaegk) { $wqsyimmcqogaosaq = array_merge($uukmwiwiqwyaaegk, $wqsyimmcqogaosaq); } $this->localize[$mcaisukqqyosuasi][$uusmaiomayssaecw] = $wqsyimmcqogaosaq; return $this; } public function siaqwswaougcwcci($wqsyimmcqogaosaq, $mcaisukqqyosuasi = Constants::zmmsyimwiiaweocw) : self { foreach ($wqsyimmcqogaosaq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->amqemiuwqggikkyi($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mcaisukqqyosuasi); } return $this; } public function ieayqiyiuuguowyq(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self { return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq, Constants::eycwiessycciwsao); } public function iagmuqogkyysiick($wqsyimmcqogaosaq = []) : self { return $this->siaqwswaougcwcci($wqsyimmcqogaosaq, Constants::eycwiessycciwsao); } public function gauosiuwaieksway(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self { return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq, Constants::yuguikokwoymmqem); } public function oaoisgmqkamuoeam($wqsyimmcqogaosaq = []) : self { return $this->siaqwswaougcwcci($wqsyimmcqogaosaq, Constants::yuguikokwoymmqem); } public function ikqyiskqaaymscgw(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self { return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq); } public function ssguskiqaagaauoy($wqsyimmcqogaosaq = []) : self { return $this->siaqwswaougcwcci($wqsyimmcqogaosaq); } private function seimiyccuwecawki(string $eueuqacmukymcyya, $ogomymegcoacqisg = false, string $sqeykgyoooqysmca = Constants::wwukgkqwyakeqwqk) : Source { return new Source("{$this->aiqioscoyukqgsgw()}\x2d{$eueuqacmukymcyya}", $ogomymegcoacqisg, $sqeykgyoooqysmca); } public function awgyqswkqywwmkye(string $eueuqacmukymcyya, $geecqyososceumsk = false) : Source { return $this->seimiyccuwecawki($eueuqacmukymcyya, $geecqyososceumsk, Constants::wwukgkqwyakeqwqk); } public function owygwqwawqoiusis(string $eueuqacmukymcyya, $ogomymegcoacqisg = false) : Source { return $this->seimiyccuwecawki($eueuqacmukymcyya, $ogomymegcoacqisg, Constants::qssgasiyswwaciwc); } public function ayeieigcckcmsikq(Source $egsumesakcaaukem) : self { $this->emmqgiegugsycumi($egsumesakcaaukem); return $this; } public function oeoquuwkoywiuesy(Source $egsumesakcaaukem) : self { $this->emmqgiegugsycumi($egsumesakcaaukem, Constants::eycwiessycciwsao); return $this; } public function wqiosiseiwsamggo(Source $egsumesakcaaukem) : self { $this->emmqgiegugsycumi($egsumesakcaaukem, Constants::yuguikokwoymmqem); return $this; } public function owgyegssycusoagc(Source $egsumesakcaaukem) : self { return $this->oeoquuwkoywiuesy($egsumesakcaaukem)->wqiosiseiwsamggo($egsumesakcaaukem)->ayeieigcckcmsikq($egsumesakcaaukem); } public function gqcsyicawqkimcau(array $equkucqiagswqcko) : self { return $this->iagmuqogkyysiick($equkucqiagswqcko)->ssguskiqaagaauoy($equkucqiagswqcko)->oaoisgmqkamuoeam($equkucqiagswqcko); } public function gmgiuyeyoguqqccw() : array { return $this->sources; } private function yimkcammomikeegq(string $uusmaiomayssaecw, string $sqeykgyoooqysmca = Constants::zmmsyimwiiaweocw) : ?Source { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->gmgiuyeyoguqqccw(), "{$sqeykgyoooqysmca}\x2e{$uusmaiomayssaecw}"); } private function emmqgiegugsycumi(Source $egsumesakcaaukem, string $sqeykgyoooqysmca = Constants::zmmsyimwiiaweocw) : self { if (!$this->cguimswausiyasyk() && $egsumesakcaaukem->qcumqiyomwauswqu()) { $this->cecaguuoecmccuse("\x73\x74\x79\x6c\x65\137\154\157\x61\144\145\x72\x5f\x74\141\147", [$this, "\x65\143\157\161\157\157\x69\165\x79\x6d\163\x67\x61\x6b\171\163"], 10, 2); $this->cecaguuoecmccuse("\x73\143\x72\x69\160\164\137\154\157\141\x64\145\162\x5f\164\x61\147", [$this, "\145\143\157\161\x6f\157\x69\165\x79\155\x73\147\x61\153\x79\x73"], 10, 2); $this->customized = true; } $this->sources[$sqeykgyoooqysmca][$egsumesakcaaukem->cisyiemkeykgkomc()] = $egsumesakcaaukem; return $this; } public function yomasssaasmawcso(string $eueuqacmukymcyya) : string { return "{$this->aiqioscoyukqgsgw()}\x2d{$eueuqacmukymcyya}"; } public function csaueuycewaiuaay() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->mcgoysmkqsqooceq() && !$owaoeyikmqaeegma->goumkccmgysgqueu(); } public final function register($egsumesakcaaukem) { if ($egsumesakcaaukem instanceof Source) { $ogomymegcoacqisg = $egsumesakcaaukem->mgaeeqsgeoukeokc(); $usyqkyomqcuocgoa = $egsumesakcaaukem->mmoosseiswcigswg(); $eueuqacmukymcyya = $egsumesakcaaukem->yoickwcyekiwiyqm(); $kqagasmwymmuiksq = $egsumesakcaaukem->gikwwgqmwccescgy(); $ugmuiugkaygmsagq = $egsumesakcaaukem->auskmiuqesyqemgc(); $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); switch ($egsumesakcaaukem->gueasuouwqysmomu()) { case Constants::qssgasiyswwaciwc: $qaqoseqwmoyaigoy = $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $kqagasmwymmuiksq, $egsumesakcaaukem->mequouugayiseiei()); if ($qaqoseqwmoyaigoy && $usyqkyomqcuocgoa) { $geoqacegumkcaskk->yocqwqycwegayowg($eueuqacmukymcyya, $usyqkyomqcuocgoa); } break; case Constants::wwukgkqwyakeqwqk: $qaqoseqwmoyaigoy = $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $kqagasmwymmuiksq, $egsumesakcaaukem->acskcgywyymegikq()); if ($qaqoseqwmoyaigoy && $usyqkyomqcuocgoa) { $geoqacegumkcaskk->oiqqguakwcieaioo($eueuqacmukymcyya, $usyqkyomqcuocgoa); } break; } } return $this; } public final function enqueue($egsumesakcaaukem) : self { if ($egsumesakcaaukem instanceof Source) { $eueuqacmukymcyya = $egsumesakcaaukem->yoickwcyekiwiyqm(); $simqeemkoyaqkkwe = $egsumesakcaaukem->simqeemkoyaqkkwe(); switch ($egsumesakcaaukem->gueasuouwqysmomu()) { case Constants::qssgasiyswwaciwc: if ($simqeemkoyaqkkwe) { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->imsomwwswyoquoqk($eueuqacmukymcyya); $egsumesakcaaukem->gogiqycisqygoagk(); } break; case Constants::wwukgkqwyakeqwqk: if ($simqeemkoyaqkkwe) { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->myyikeyuuomqoyew($eueuqacmukymcyya); $egsumesakcaaukem->gogiqycisqygoagk(); } break; } } return $this; } public function ukgaoamyemuuamau(string $giqwgyocuwmkscwc, array $oammesyieqmwuwyi) : string { $icyaoosaykeskiuu = ''; $ggauoeuaesiymgee = [Constants::auqoykcmsiauccao => '', Constants::wwukgkqwyakeqwqk => Constants::mcwaoqwywimcegca, Constants::mkeceumayywugoqs => $giqwgyocuwmkscwc, Constants::guucyoeqgeiqiscm => Constants::mcwaoqwywimcegca, Constants::keggaaockoyusosg => []]; $qsqwqsymmqeoqwcu = []; $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($oammesyieqmwuwyi as $eeamcawaiqocomwy => $igqsaukqcqscimok) { if (is_string($igqsaukqcqscimok)) { $eeamcawaiqocomwy = $igqsaukqcqscimok; $igqsaukqcqscimok = []; } if ($eeamcawaiqocomwy) { $igqsaukqcqscimok[Constants::auqoykcmsiauccao] = $eeamcawaiqocomwy; if (isset($igqsaukqcqscimok[Constants::keggaaockoyusosg])) { $oseqkueswiwsceis = $igqsaukqcqscimok[Constants::keggaaockoyusosg]; $oseqkueswiwsceis[] = $eeamcawaiqocomwy; foreach ($oseqkueswiwsceis as $momcykaoccoymeig => $egsumesakcaaukem) { $saqmwwmqiwmkiwaa = pathinfo($egsumesakcaaukem, PATHINFO_EXTENSION); switch ($saqmwwmqiwmkiwaa) { case "\164\164\146": $saqmwwmqiwmkiwaa = "\164\x72\x75\145\164\x79\x70\x65"; break; case "\x65\157\164": $saqmwwmqiwmkiwaa = "\145\x6d\x62\145\x64\x64\x65\x64\x2d\157\x70\145\156\164\171\x70\145"; break; } $oseqkueswiwsceis[$momcykaoccoymeig] = [Constants::auqoykcmsiauccao => $egsumesakcaaukem, Constants::yqemseykugmsyeqa => $saqmwwmqiwmkiwaa]; } $igqsaukqcqscimok[Constants::keggaaockoyusosg] = $oseqkueswiwsceis; } $qsqwqsymmqeoqwcu[] = $cwaqscoiqkokyase->ckscqqquyskscaaw($igqsaukqcqscimok, $ggauoeuaesiymgee); } } if ($qsqwqsymmqeoqwcu) { $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\x66\x6f\156\x74\56\x63\x73\x73", ["\146\157\x6e\164\163" => $qsqwqsymmqeoqwcu]); } return $icyaoosaykeskiuu; } }
