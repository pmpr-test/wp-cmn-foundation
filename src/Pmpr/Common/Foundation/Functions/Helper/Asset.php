<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc4e36cacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Data\Source; use Pmpr\Common\Foundation\Interfaces\Constants; use Symfony\Component\Asset\UrlPackage; use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy; class Asset extends Common { protected array $storage = []; public function wyouuiscukymcuua(string $eueuqacmukymcyya) : bool { return $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->kwcmyyyeiegememu($eueuqacmukymcyya); } public function qkyugogwegiuiime(string $eueuqacmukymcyya, bool $uksimyckcoyyemsk = true) { $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); $qcsieyqqegaoocks->qkyugogwegiuiime($eueuqacmukymcyya); if ($uksimyckcoyyemsk) { $qcsieyqqegaoocks->iqmcmgkyssqgoqok($eueuqacmukymcyya); } } public function saisougiwmauksiy(string $eueuqacmukymcyya, bool $uksimyckcoyyemsk = true) { $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); $qcsieyqqegaoocks->saisougiwmauksiy($eueuqacmukymcyya); if ($uksimyckcoyyemsk) { $qcsieyqqegaoocks->cawwmsmyseesuyee($eueuqacmukymcyya); } } public function oiqqguakwcieaioo(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '') : bool { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\167\160\x5f\141\x64\x64\137\151\156\x6c\x69\156\145\137\163\x74\x79\x6c\145\137\144\141\164\141", $icwicymcioeyeyek, $eueuqacmukymcyya); return $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->oiqqguakwcieaioo($eueuqacmukymcyya, $icwicymcioeyeyek); } public function yocqwqycwegayowg(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '', string $kuuiuigeacouwmaa = "\141\146\x74\x65\x72") : bool { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\167\160\x5f\x61\144\x64\137\x69\156\x6c\x69\156\x65\137\163\143\162\151\160\164\137\x64\141\x74\141", $icwicymcioeyeyek, $eueuqacmukymcyya); return $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->yocqwqycwegayowg($eueuqacmukymcyya, $icwicymcioeyeyek, $kuuiuigeacouwmaa); } public function okeawskgcssugqkk(string $umawqwoyymwaicas) : string { $eeamcawaiqocomwy = $kuoicyiuewoqyaqe = ''; $mismekckwcmuksik = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->jokqcscsomkceomu(); if ($mismekckwcmuksik) { $kuoicyiuewoqyaqe = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mismekckwcmuksik->registered, $umawqwoyymwaicas); } if ($kuoicyiuewoqyaqe) { $ogomymegcoacqisg = $kuoicyiuewoqyaqe->src; if (file_exists(ABSPATH . $kuoicyiuewoqyaqe->src)) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq() . $ogomymegcoacqisg; } else { $eeamcawaiqocomwy = $ogomymegcoacqisg; } } return $eeamcawaiqocomwy; } public function mcgiosceuikscyom() : string { return untrailingslashit($this->cmaecekuqkwmemms(Constants::imiuimigqgweqskc, '')); } public function iiwuqcgqyoqkyaom() : string { return untrailingslashit($this->cmaecekuqkwmemms(Constants::ugwqowmumooowags, '')); } public function asqsuswyqyoecwcc() { $this->ckgaqqweiuseiayw("\x72\x61\144\x69\x6f"); } public function saayewcwsgmaiykc() { $this->ckgaqqweiuseiayw("\160\x65\x72\x73\x69\x61\x6e\164\x6f\157\154\163"); } public function qymwusgoassaaacs() { $this->ckgaqqweiuseiayw("\166\x61\156\151\x73\150\x65\162"); } public function wmuqwaewssekqymw() { $this->ckgaqqweiuseiayw("\x64\x69\163\x61\x62\154\145\162"); } public function oaaywquaycsmykuc() { $this->ckgaqqweiuseiayw("\x70\x72\x6f\147\x72\145\x73\163\x62\x61\162"); } public function aeiaiwyqyeoswqsc($wkaqekwwgqsqwcoi, array $ywmkwiwkosakssii) : string { $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($wkaqekwwgqsqwcoi)) { $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi, $ywmkwiwkosakssii[Constants::waguuiqqgsysuukq] ?? "\146\165\154\x6c"); } else { $ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy] = false; $wkaqekwwgqsqwcoi = $this->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, $ywmkwiwkosakssii); } return $wkaqekwwgqsqwcoi; } private function ckgaqqweiuseiayw(string $ymqmyyeuycgmigyo) { $kuoicyiuewoqyaqe = $this->owygwqwawqoiusis(pr_get_foundation(), $ymqmyyeuycgmigyo, "{$ymqmyyeuycgmigyo}\x2e\x6a\x73")->okawmmwsiuauwsiu()->jyumyyugiwwiqomk(5); $this->owgyegssycusoagc($kuoicyiuewoqyaqe); } private function egsaoagcwoyawuqu(string $ymqmyyeuycgmigyo) { $this->qeqgammgesiwiysc($this->awgyqswkqywwmkye(pr_get_foundation(), $ymqmyyeuycgmigyo, "{$ymqmyyeuycgmigyo}\x2e\143\163\163")); } public function omywegoesmqwcmss() : string { return (string) $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x62\165\151\154\144\x5f\144\151\x72\x65\143\x74\x6f\162\x79", ''); } public function kwoeacmuoiuucyes($egkyssmuqcwaciya) : string { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); return $wksoawcgagcgoask ? trailingslashit($this->mkwomgueyaaooyye()) . $wksoawcgagcgoask->aiqioscoyukqgsgw() : ''; } public function ukgaoamyemuuamau(string $giqwgyocuwmkscwc, array $oammesyieqmwuwyi) : string { $icyaoosaykeskiuu = ''; $ggauoeuaesiymgee = [Constants::auqoykcmsiauccao => '', Constants::wwukgkqwyakeqwqk => Constants::mcwaoqwywimcegca, Constants::mkeceumayywugoqs => $giqwgyocuwmkscwc, Constants::guucyoeqgeiqiscm => Constants::mcwaoqwywimcegca, Constants::keggaaockoyusosg => []]; $qsqwqsymmqeoqwcu = []; $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($oammesyieqmwuwyi as $eeamcawaiqocomwy => $igqsaukqcqscimok) { if (is_string($igqsaukqcqscimok)) { $eeamcawaiqocomwy = $igqsaukqcqscimok; $igqsaukqcqscimok = []; } if ($eeamcawaiqocomwy) { $igqsaukqcqscimok[Constants::auqoykcmsiauccao] = $eeamcawaiqocomwy; if (isset($igqsaukqcqscimok[Constants::keggaaockoyusosg])) { $oseqkueswiwsceis = (array) $igqsaukqcqscimok[Constants::keggaaockoyusosg]; $oseqkueswiwsceis[] = $eeamcawaiqocomwy; foreach ($oseqkueswiwsceis as $momcykaoccoymeig => $egsumesakcaaukem) { $saqmwwmqiwmkiwaa = pathinfo($egsumesakcaaukem, PATHINFO_EXTENSION); switch ($saqmwwmqiwmkiwaa) { case "\164\164\x66": $saqmwwmqiwmkiwaa = "\164\x72\165\145\164\x79\x70\145"; break; case "\x65\157\164": $saqmwwmqiwmkiwaa = "\145\155\x62\x65\144\144\145\144\x2d\157\x70\145\156\x74\171\160\x65"; break; } $oseqkueswiwsceis[$momcykaoccoymeig] = [Constants::auqoykcmsiauccao => $egsumesakcaaukem, Constants::yqemseykugmsyeqa => $saqmwwmqiwmkiwaa]; } $igqsaukqcqscimok[Constants::keggaaockoyusosg] = $oseqkueswiwsceis; } $qsqwqsymmqeoqwcu[] = $cwaqscoiqkokyase->ckscqqquyskscaaw($igqsaukqcqscimok, $ggauoeuaesiymgee); } } if ($qsqwqsymmqeoqwcu) { $icyaoosaykeskiuu = pr_get_foundation()->iuygowkemiiwqmiw("\x66\157\x6e\x74\x2e\143\x73\x73", ["\146\x6f\156\x74\163" => $qsqwqsymmqeoqwcu]); } return $icyaoosaykeskiuu; } public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string { $woaeeewomgcuesaa = $this->cmaecekuqkwmemms("\101\102\x53\x50\101\x54\110"); $sycgeiyakseiumqy = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->qasciyckimeascmg()); $eeamcawaiqocomwy = null; if ($woaeeewomgcuesaa && $sycgeiyakseiumqy) { $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca); } return $eeamcawaiqocomwy; } public function mkwomgueyaaooyye() : string { return untrailingslashit($this->cmaecekuqkwmemms("\120\x52\x5f\x42\125\x49\x4c\104\137\x55\x52\x4c", '')); } public function qmwkoewmiweimaqe() : string { return untrailingslashit($this->cmaecekuqkwmemms(Constants::euecgwaikowgaiik, '')); } public function euwweycmgegkgwyg($egkyssmuqcwaciya, ?string $ymqmyyeuycgmigyo) : string { $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe(); $kqagasmwymmuiksq = $this->mcicykqgemgiyyii($egkyssmuqcwaciya, $ymqmyyeuycgmigyo); return "{$mkomwsiykqigmqca}\57{$kqagasmwymmuiksq}"; } public function uakscggyguwqmkoe(?string $ymqmyyeuycgmigyo) : ?string { $eeamcawaiqocomwy = null; if ($yuwymayicwwqiske = $this->cmaecekuqkwmemms("\120\x52\x5f\123\124\101\x54\x49\x43\137\x49\115\x41\107\105\123\137\125\x52\x4c")) { $eeamcawaiqocomwy = trailingslashit($yuwymayicwwqiske) . $ymqmyyeuycgmigyo; } return $eeamcawaiqocomwy; } public function eyamqkqiykagecsw(?string $wkaqekwwgqsqwcoi, array $ywmkwiwkosakssii = []) : string { if ($wkaqekwwgqsqwcoi) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kicoscymgmgqeqgy => false, Constants::aisguagukaewucii => Constants::auqoykcmsiauccao, Constants::akcccmoeyoywycua => false, Constants::uociqugwegocyuue => Constants::wikgqsqysyuoykse]); if (is_numeric($wkaqekwwgqsqwcoi)) { if ($ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy]) { $wkaqekwwgqsqwcoi = (string) $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($wkaqekwwgqsqwcoi); if ($wkaqekwwgqsqwcoi) { $wkaqekwwgqsqwcoi = (string) $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($wkaqekwwgqsqwcoi); if ($ywmkwiwkosakssii[Constants::akcccmoeyoywycua]) { $wkaqekwwgqsqwcoi = $this->kuakoogiqsiiqiok($wkaqekwwgqsqwcoi); } } } else { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi); } } else { $qguqeikwwuququis = explode(DIRECTORY_SEPARATOR, $wkaqekwwgqsqwcoi); $ymiuaqwqkqoqkmck = $qguqeikwwuququis[0] ?? ''; if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($wkaqekwwgqsqwcoi, "\57\x73\145\x74\57")) { $cekceegqqaoiisei = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x69\x63\x6f\x6e\x5f\x73\x65\164", $ywmkwiwkosakssii[Constants::uociqugwegocyuue], $ymiuaqwqkqoqkmck); if ($ymiuaqwqkqoqkmck === "\x66\x61\x73\155") { if ($cekceegqqaoiisei === Constants::wikgqsqysyuoykse) { $cekceegqqaoiisei = "\154\151\147\150\164"; } if ($cekceegqqaoiisei) { $oyscqkqkwmeakcac = array_pop($qguqeikwwuququis); $qguqeikwwuququis[] = $cekceegqqaoiisei; $qguqeikwwuququis[] = $oyscqkqkwmeakcac; $wkaqekwwgqsqwcoi = implode(DIRECTORY_SEPARATOR, $qguqeikwwuququis); } } } $ceuoyocoywikssmy = "\x69\155\147\x2f\163\166\147\57\151\x63\157\156\57{$wkaqekwwgqsqwcoi}"; if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->ykemmsoumouomkqm($wkaqekwwgqsqwcoi, "\56\x73\x76\147")) { $ceuoyocoywikssmy .= "\x2e\x73\166\x67"; } $egkyssmuqcwaciya = pr_get_foundation(); $this->cqumwcqgamogkiki($egkyssmuqcwaciya, $ceuoyocoywikssmy); if ($ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy]) { $wkaqekwwgqsqwcoi = $this->souwykwwmyygqyqi($egkyssmuqcwaciya, $ceuoyocoywikssmy); if ($ywmkwiwkosakssii[Constants::akcccmoeyoywycua]) { $wkaqekwwgqsqwcoi = $this->kuakoogiqsiiqiok($wkaqekwwgqsqwcoi); } } else { $wkaqekwwgqsqwcoi = $this->aqmcwcyggeiyooyg($egkyssmuqcwaciya, $ceuoyocoywikssmy); } } } return $wkaqekwwgqsqwcoi; } public function goyaiocaaisocukc() : string { $uogigqcwewqkwqgs = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\151\x63\157\156\137\162\145\x6d\x6f\164\145\137\x62\141\163\x65", $this->cmaecekuqkwmemms("\120\122\x5f\x49\x43\x4f\x4e\137\x52\105\x4d\x4f\124\105\137\x42\101\x53\105", self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(2680062535133, "\62\x30\65\x32\67\66\x32\x37\66\x32\x35\70\62\x36\x31\x33\x31\67\x32\71\66\62\x39\x36\x32\64\x32\62\x34\x39\x31\70\60\x31\70\63\x33\63\71\x32\65\70\62\63\x35\x32\x30\x30\63\63\x39\62\x32\x32\x31\66\x35\62\64\71\62\64\62\x33\62\66\62\65\x38\61\65\x30\x32\x30\60\x31\70\x33\62\x36\x31\63\x32\x36\x31\x38\x30\x31\x38\x33\62\x39\63\62\71\x36"))); return trailingslashit($uogigqcwewqkwqgs); } private function cqumwcqgamogkiki($egkyssmuqcwaciya, ?string $wkaqekwwgqsqwcoi) { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $esaqeawoigqgagum = trailingslashit(trailingslashit($this->qmwkoewmiweimaqe()) . $wksoawcgagcgoask->aiqioscoyukqgsgw()) . $wkaqekwwgqsqwcoi; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); $iiaumsgauuyeqksw = $miiyyswuessymmwe->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $gycuguqwikukcmik = $this->goyaiocaaisocukc() . $wkaqekwwgqsqwcoi; try { $osgeyewosumeygsi = true; if (ini_get("\x61\154\154\x6f\167\x5f\165\162\154\x5f\146\157\160\x65\156") && !$miiyyswuessymmwe->cmaecekuqkwmemms("\120\x52\137\104\111\x53\x41\102\114\105\137\106\x45\x54\103\x48\137\x49\103\117\x4e\x5f\106\x52\x4f\x4d\137\122\x45\x4d\x4f\124\105", false)) { if ($ewgwqamkygiqaawc = file_get_contents($gycuguqwikukcmik)) { $osgeyewosumeygsi = false; $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); } else { if ($qcgkuqesqqymcuui = fopen($gycuguqwikukcmik, "\167\x62")) { $osgeyewosumeygsi = false; $ymmyeygsewqgsqea = fopen($esaqeawoigqgagum, "\162\x62"); while ($wegougocoeeookww = fread($ymmyeygsewqgsqea, 8192)) { fwrite($qcgkuqesqqymcuui, $wegougocoeeookww, 8192); } fclose($ymmyeygsewqgsqea); fclose($qcgkuqesqqymcuui); } } } if ($osgeyewosumeygsi) { $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $this->souwykwwmyygqyqi($wksoawcgagcgoask, "\151\x6d\x67\57\163\x76\147\x2f\147\145\141\x72\x2e\163\166\147")); } } catch (Exception $wgaoewqkwgomoaai) { } } } } public function aqmcwcyggeiyooyg($egkyssmuqcwaciya, string $ymqmyyeuycgmigyo, bool $camsqsqgyowiokmm = true, int $oyiokksswogocuwm = 0) : string { $ceuoyocoywikssmy = ''; $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { try { if ($quowyokcwswmuois = $this->wocuguaggqkcimqq($egkyssmuqcwaciya)) { $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo); if (!$ceuoyocoywikssmy) { $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->remove($this->qmwkoewmiweimaqe() . "\x2f{$wksoawcgagcgoask->aiqioscoyukqgsgw()}"); $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw("\x63\x61\x6e\x20\156\157\164\40\x66\x69\x6e\144\40\x61\163\163\x65\164", 404); } if ($camsqsqgyowiokmm && $ceuoyocoywikssmy && strpos($ceuoyocoywikssmy, "\x2e\x63\163\x73") && $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->gqesusmmigggsqai()) { $ceuoyocoywikssmy = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc("\56\143\x73\x73", "\56\x72\x74\x6c\x2e\143\163\x73", $ceuoyocoywikssmy); } } } catch (Exception $wgaoewqkwgomoaai) { if ($oyiokksswogocuwm < 2) { $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ewcsyqaaigkicgse("\x6d\157\x76\145\137\x63\x6f\155\160\157\x6e\x65\x6e\x74\x5f\x73\x74\141\x74\x69\x63\x5f\141\163\163\x65\x74", $wksoawcgagcgoask); $ceuoyocoywikssmy = $this->aqmcwcyggeiyooyg($wksoawcgagcgoask, $ymqmyyeuycgmigyo, $camsqsqgyowiokmm, ++$oyiokksswogocuwm); } } } return $ceuoyocoywikssmy; } public function msgqgyuieokaauma($egsumesakcaaukem) : string { $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = ''; if ($egsumesakcaaukem && preg_match("\57\134\x2f\x77\x70\55\50\x63\x6f\x6e\x74\x65\156\164\x7c\151\156\143\154\165\144\x65\163\51\134\57\57", $egsumesakcaaukem, $meyiiwcswqmuggyg)) { switch ($meyiiwcswqmuggyg[1] ?? '') { case Constants::ssmskyqgcmeiayco: $mkomwsiykqigmqca = $this->cmaecekuqkwmemms("\x57\x50\137\x43\x4f\116\124\105\116\x54\137\120\101\124\x48", ''); $eeamcawaiqocomwy = content_url(); break; case "\x69\x6e\143\154\x75\x64\x65\x73": $mkomwsiykqigmqca = $this->cmaecekuqkwmemms("\101\102\x53\120\x41\x54\x48", '') . $this->cmaecekuqkwmemms("\127\x50\x5f\111\x4e\x43", ''); $eeamcawaiqocomwy = includes_url(); break; } if ($eeamcawaiqocomwy && $mkomwsiykqigmqca) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $eeamcawaiqocomwy = untrailingslashit($cwaqscoiqkokyase->mkcmkkskeeaskowy($eeamcawaiqocomwy)); $egsumesakcaaukem = untrailingslashit($cwaqscoiqkokyase->mkcmkkskeeaskowy($egsumesakcaaukem)); $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem); } } else { $uougkmikwgeueowa = $this->mkwomgueyaaooyye(); $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe(); if ($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo) { $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem); } } return $sogksuscggsicmac; } public function souwykwwmyygqyqi($egkyssmuqcwaciya, $egsumesakcaaukem, array $eyagkkkqkwcuygso = []) : string { $ewgwqamkygiqaawc = ''; if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($egsumesakcaaukem)) { $esaqeawoigqgagum = $this->euwweycmgegkgwyg($egkyssmuqcwaciya, $egsumesakcaaukem); } else { $esaqeawoigqgagum = $this->msgqgyuieokaauma($this->aqmcwcyggeiyooyg($egkyssmuqcwaciya, $egsumesakcaaukem)); } $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $ewgwqamkygiqaawc = (string) $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); } if ($ewgwqamkygiqaawc && $eyagkkkqkwcuygso) { foreach ($eyagkkkqkwcuygso as $qwcmueausqgiwigy => $moyaaaascoeowegu) { $ewgwqamkygiqaawc = str_replace(["\173\x7b\x20{$qwcmueausqgiwigy}\40\x7d\175", "\173\40{$qwcmueausqgiwigy}\x20\175"], [$moyaaaascoeowegu, $moyaaaascoeowegu], $ewgwqamkygiqaawc); } } return $ewgwqamkygiqaawc; } public function weqigaiiisygyksm($egkyssmuqcwaciya, string $ymqmyyeuycgmigyo) : string { $eeamcawaiqocomwy = ''; $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $eeamcawaiqocomwy = $this->mkwomgueyaaooyye(); $wksoawcgagcgoask = $wksoawcgagcgoask->aiqioscoyukqgsgw(); if ($wksoawcgagcgoask) { $eeamcawaiqocomwy .= "\x2f{$wksoawcgagcgoask}"; } $eeamcawaiqocomwy .= "\57{$ymqmyyeuycgmigyo}"; } return $eeamcawaiqocomwy; } private function mcicykqgemgiyyii($egkyssmuqcwaciya, string $ceuoyocoywikssmy) : string { $kqagasmwymmuiksq = ''; try { $quowyokcwswmuois = $this->wocuguaggqkcimqq($egkyssmuqcwaciya); if ($quowyokcwswmuois) { $kqagasmwymmuiksq = $quowyokcwswmuois->getVersion($ceuoyocoywikssmy); } } catch (Exception $wgaoewqkwgomoaai) { } return $kqagasmwymmuiksq; } private function seimiyccuwecawki($egkyssmuqcwaciya, string $eueuqacmukymcyya, string $sqeykgyoooqysmca, $ogomymegcoacqisg = false) : Source { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if (is_string($ogomymegcoacqisg) && !preg_match("\57\136\50\150\x74\x74\160\163\77\x3a\x29\57", $ogomymegcoacqisg)) { $ogomymegcoacqisg = $this->aqmcwcyggeiyooyg($wksoawcgagcgoask, $ogomymegcoacqisg); } if (!$wksoawcgagcgoask) { $mmeioagwmyscwumo = 1; } return new Source("{$wksoawcgagcgoask->aiqioscoyukqgsgw()}\x2d{$eueuqacmukymcyya}", $ogomymegcoacqisg, $sqeykgyoooqysmca); } public function awgyqswkqywwmkye($egkyssmuqcwaciya, string $eueuqacmukymcyya, $geecqyososceumsk = false) : Source { return $this->seimiyccuwecawki($egkyssmuqcwaciya, $eueuqacmukymcyya, Constants::wwukgkqwyakeqwqk, $geecqyososceumsk); } public function owygwqwawqoiusis($egkyssmuqcwaciya, string $eueuqacmukymcyya, $ogomymegcoacqisg = false) : Source { return $this->seimiyccuwecawki($egkyssmuqcwaciya, $eueuqacmukymcyya, Constants::qssgasiyswwaciwc, $ogomymegcoacqisg); } public function wwmusmkkcwsiciou($egkyssmuqcwaciya, string $uusmaiomayssaecw, $wqsyimmcqogaosaq) : self { return $this->amqemiuwqggikkyi($egkyssmuqcwaciya, $uusmaiomayssaecw, $wqsyimmcqogaosaq, Constants::qiaqeaemuukkikmi); } public function qeqgammgesiwiysc(Source $egsumesakcaaukem) : self { $this->emmqgiegugsycumi($egsumesakcaaukem, Constants::qiaqeaemuukkikmi); return $this; } public function yawoscugkyysowie(Source $egsumesakcaaukem) : self { $this->emmqgiegugsycumi($egsumesakcaaukem, Constants::iickqyckyaqcaokm); return $this; } public function wqiosiseiwsamggo(Source $egsumesakcaaukem) : self { $this->emmqgiegugsycumi($egsumesakcaaukem, Constants::yuguikokwoymmqem); return $this; } public function owgyegssycusoagc(Source $egsumesakcaaukem) : self { return $this->wqiosiseiwsamggo($egsumesakcaaukem)->qeqgammgesiwiysc($egsumesakcaaukem)->yawoscugkyysowie($egsumesakcaaukem); } public function ceuoqiqwoyuqyewe($egkyssmuqcwaciya, $seiyqiqwcmseaiaq) : self { return $this->siaqwswaougcwcci($egkyssmuqcwaciya, $seiyqiqwcmseaiaq, Constants::qiaqeaemuukkikmi); } public function qkqeooqcomucuwyk($egkyssmuqcwaciya, string $uusmaiomayssaecw, $wqsyimmcqogaosaq) : self { return $this->amqemiuwqggikkyi($egkyssmuqcwaciya, $uusmaiomayssaecw, $wqsyimmcqogaosaq, Constants::iickqyckyaqcaokm); } public function qgkgieacuwasgiuy($egkyssmuqcwaciya, $seiyqiqwcmseaiaq) : self { return $this->siaqwswaougcwcci($egkyssmuqcwaciya, $seiyqiqwcmseaiaq, Constants::iickqyckyaqcaokm); } public function gauosiuwaieksway($egkyssmuqcwaciya, string $uusmaiomayssaecw, $wqsyimmcqogaosaq) : self { return $this->amqemiuwqggikkyi($egkyssmuqcwaciya, $uusmaiomayssaecw, $wqsyimmcqogaosaq, Constants::yuguikokwoymmqem); } public function oaoisgmqkamuoeam($egkyssmuqcwaciya, $seiyqiqwcmseaiaq) : self { return $this->siaqwswaougcwcci($egkyssmuqcwaciya, $seiyqiqwcmseaiaq, Constants::yuguikokwoymmqem); } public function gqcsyicawqkimcau($egkyssmuqcwaciya, array $equkucqiagswqcko) : self { return $this->qgkgieacuwasgiuy($egkyssmuqcwaciya, $equkucqiagswqcko)->ceuoqiqwoyuqyewe($egkyssmuqcwaciya, $equkucqiagswqcko)->oaoisgmqkamuoeam($egkyssmuqcwaciya, $equkucqiagswqcko); } public function yimkcammomikeegq(string $uusmaiomayssaecw, string $wuomgsuaoscwgsmq) : ?Source { return $this->storage[Constants::iocouekmygsaocuo][$wuomgsuaoscwgsmq][$uusmaiomayssaecw] ?? null; } public function uqemmgsiyiksoumo(string $wuomgsuaoscwgsmq) : array { return $this->storage[Constants::iocouekmygsaocuo][$wuomgsuaoscwgsmq] ?? []; } public function qsaiusuuwcueamkk(string $wuomgsuaoscwgsmq) : array { return $this->storage[Constants::oscqagwyeccuimwo][$wuomgsuaoscwgsmq] ?? []; } public function wgkgisqoggykwawi($egkyssmuqcwaciya, string $ymqmyyeuycgmigyo, bool $yqkwsouguwgoywcw = false) { $ceuoyocoywikssmy = false; $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask && ($quowyokcwswmuois = $this->wocuguaggqkcimqq($wksoawcgagcgoask))) { try { $cyaeoagyqcqyqgmk = $this->qmwkoewmiweimaqe(); $esaqeawoigqgagum = trailingslashit(trailingslashit($cyaeoagyqcqyqgmk) . $wksoawcgagcgoask->aiqioscoyukqgsgw()) . $ymqmyyeuycgmigyo; if ($this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo); } } catch (Exception $wgaoewqkwgomoaai) { if ($yqkwsouguwgoywcw) { throw $wgaoewqkwgomoaai; } } } return $ceuoyocoywikssmy; } public function yomasssaasmawcso($egkyssmuqcwaciya, string $eueuqacmukymcyya) : string { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); return $wksoawcgagcgoask ? "{$wksoawcgagcgoask->aiqioscoyukqgsgw()}\55{$eueuqacmukymcyya}" : ''; } public function register($egsumesakcaaukem) { if ($egsumesakcaaukem instanceof Source) { $ogomymegcoacqisg = $egsumesakcaaukem->mgaeeqsgeoukeokc(); $usyqkyomqcuocgoa = $egsumesakcaaukem->mmoosseiswcigswg(); $eueuqacmukymcyya = $egsumesakcaaukem->yoickwcyekiwiyqm(); $kqagasmwymmuiksq = $egsumesakcaaukem->gikwwgqmwccescgy(); $ugmuiugkaygmsagq = $egsumesakcaaukem->auskmiuqesyqemgc(); $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); switch ($egsumesakcaaukem->gueasuouwqysmomu()) { case Constants::qssgasiyswwaciwc: $qaqoseqwmoyaigoy = $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $kqagasmwymmuiksq, $egsumesakcaaukem->mequouugayiseiei()); if ($qaqoseqwmoyaigoy && $usyqkyomqcuocgoa) { $geoqacegumkcaskk->yocqwqycwegayowg($eueuqacmukymcyya, $usyqkyomqcuocgoa); } break; case Constants::wwukgkqwyakeqwqk: $qaqoseqwmoyaigoy = $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $kqagasmwymmuiksq, $egsumesakcaaukem->acskcgywyymegikq()); if ($qaqoseqwmoyaigoy && $usyqkyomqcuocgoa) { $geoqacegumkcaskk->oiqqguakwcieaioo($eueuqacmukymcyya, $usyqkyomqcuocgoa); } break; } } return $this; } public function enqueue($egsumesakcaaukem) : self { if ($egsumesakcaaukem instanceof Source) { $eueuqacmukymcyya = $egsumesakcaaukem->yoickwcyekiwiyqm(); $simqeemkoyaqkkwe = $egsumesakcaaukem->simqeemkoyaqkkwe(); switch ($egsumesakcaaukem->gueasuouwqysmomu()) { case Constants::qssgasiyswwaciwc: if ($simqeemkoyaqkkwe) { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->imsomwwswyoquoqk($eueuqacmukymcyya); $egsumesakcaaukem->gogiqycisqygoagk(); } break; case Constants::wwukgkqwyakeqwqk: if ($simqeemkoyaqkkwe) { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->myyikeyuuomqoyew($eueuqacmukymcyya); $egsumesakcaaukem->gogiqycisqygoagk(); } break; } } return $this; } private function wocuguaggqkcimqq($egkyssmuqcwaciya) { $quowyokcwswmuois = false; $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $qmwoykgeiicumeiw = $wksoawcgagcgoask->aakmagwggmkoiiyu(); if (!isset($this->storage[$qmwoykgeiicumeiw][Constants::coyceqeuqasaomeq])) { try { $eeamcawaiqocomwy = $this->mkwomgueyaaooyye(); $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe(); if ($eeamcawaiqocomwy && $mkomwsiykqigmqca) { $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw(); if ($kcismmoemwgiymuq) { $eeamcawaiqocomwy .= "\x2f{$kcismmoemwgiymuq}"; $mkomwsiykqigmqca .= "\57{$kcismmoemwgiymuq}"; } $this->storage[Constants::coyceqeuqasaomeq][$qmwoykgeiicumeiw] = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}\57\x6d\141\x6e\x69\146\x65\163\164\56\x6a\x73\157\x6e")); } } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } } $quowyokcwswmuois = $this->storage[Constants::coyceqeuqasaomeq][$qmwoykgeiicumeiw] ?? false; } return $quowyokcwswmuois; } private function kuakoogiqsiiqiok($ewgwqamkygiqaawc) : string { if ($ewgwqamkygiqaawc) { $ewgwqamkygiqaawc = (string) preg_replace("\57\x3c\41\55\55\x5b\x5c\x73\x5c\x53\x5d\52\x3f\55\x2d\76\57", '', $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = (string) preg_replace("\57\x3c\x64\x65\x66\163\x3e\133\134\163\x5c\x53\135\52\x3f\74\134\x2f\x64\145\x66\163\76\x2f", '', $ewgwqamkygiqaawc); } return $ewgwqamkygiqaawc; } private function siaqwswaougcwcci($egkyssmuqcwaciya, array $wqsyimmcqogaosaq, string $wuomgsuaoscwgsmq) : self { foreach ($wqsyimmcqogaosaq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->amqemiuwqggikkyi($egkyssmuqcwaciya, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $wuomgsuaoscwgsmq); } return $this; } private function amqemiuwqggikkyi($egkyssmuqcwaciya, $uusmaiomayssaecw, $wqsyimmcqogaosaq, string $wuomgsuaoscwgsmq) : self { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $cmaccwokqweqweqi = $this->storage[Constants::oscqagwyeccuimwo][$wuomgsuaoscwgsmq][$wksoawcgagcgoask->aiqioscoyukqgsgw()][$uusmaiomayssaecw] ?? []; if ($cmaccwokqweqweqi) { $wqsyimmcqogaosaq = array_merge($cmaccwokqweqweqi, $wqsyimmcqogaosaq); } $this->storage[Constants::oscqagwyeccuimwo][$wuomgsuaoscwgsmq][$wksoawcgagcgoask->aiqioscoyukqgsgw()][$uusmaiomayssaecw] = $wqsyimmcqogaosaq; } return $this; } private function emmqgiegugsycumi(Source $egsumesakcaaukem, string $wuomgsuaoscwgsmq) : self { $this->storage[Constants::iocouekmygsaocuo][$wuomgsuaoscwgsmq][$egsumesakcaaukem->cisyiemkeykgkomc()] = $egsumesakcaaukem; return $this; } }
