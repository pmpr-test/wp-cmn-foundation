<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6776ec4d79b1c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Data\Source; use Pmpr\Common\Foundation\Interfaces\Constants; use Symfony\Component\Asset\UrlPackage; use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy; class Asset extends Common { protected array $storage = []; public function wyouuiscukymcuua(string $eueuqacmukymcyya) : bool { return $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->kwcmyyyeiegememu($eueuqacmukymcyya); } public function qkyugogwegiuiime(string $eueuqacmukymcyya, bool $uksimyckcoyyemsk = true) { $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); $qcsieyqqegaoocks->qkyugogwegiuiime($eueuqacmukymcyya); if ($uksimyckcoyyemsk) { $qcsieyqqegaoocks->iqmcmgkyssqgoqok($eueuqacmukymcyya); } } public function saisougiwmauksiy(string $eueuqacmukymcyya, bool $uksimyckcoyyemsk = true) { $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); $qcsieyqqegaoocks->saisougiwmauksiy($eueuqacmukymcyya); if ($uksimyckcoyyemsk) { $qcsieyqqegaoocks->cawwmsmyseesuyee($eueuqacmukymcyya); } } public function oiqqguakwcieaioo(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '') : bool { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\167\160\x5f\x61\144\x64\x5f\151\x6e\x6c\x69\x6e\x65\137\163\x74\171\154\145\137\144\141\x74\141", $icwicymcioeyeyek, $eueuqacmukymcyya); return $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->oiqqguakwcieaioo($eueuqacmukymcyya, $icwicymcioeyeyek); } public function yocqwqycwegayowg(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '', string $kuuiuigeacouwmaa = "\x61\x66\164\x65\x72") : bool { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x77\x70\x5f\141\144\144\137\151\x6e\154\151\156\145\x5f\163\143\162\x69\160\164\x5f\x64\141\164\x61", $icwicymcioeyeyek, $eueuqacmukymcyya); return $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->yocqwqycwegayowg($eueuqacmukymcyya, $icwicymcioeyeyek, $kuuiuigeacouwmaa); } public function okeawskgcssugqkk(string $umawqwoyymwaicas) : string { $eeamcawaiqocomwy = $kuoicyiuewoqyaqe = ''; $mismekckwcmuksik = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->jokqcscsomkceomu(); if ($mismekckwcmuksik) { $kuoicyiuewoqyaqe = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mismekckwcmuksik->registered, $umawqwoyymwaicas); } if ($kuoicyiuewoqyaqe) { $ogomymegcoacqisg = $kuoicyiuewoqyaqe->src; if (file_exists(ABSPATH . $kuoicyiuewoqyaqe->src)) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq() . $ogomymegcoacqisg; } else { $eeamcawaiqocomwy = $ogomymegcoacqisg; } } return $eeamcawaiqocomwy; } public function mcgiosceuikscyom() : string { return untrailingslashit($this->cmaecekuqkwmemms(Constants::imiuimigqgweqskc, '')); } public function iiwuqcgqyoqkyaom() : string { return untrailingslashit($this->cmaecekuqkwmemms(Constants::ugwqowmumooowags, '')); } public function asqsuswyqyoecwcc() { $this->ckgaqqweiuseiayw("\x72\141\144\x69\157"); } public function saayewcwsgmaiykc() { $this->ckgaqqweiuseiayw("\160\145\x72\x73\151\x61\x6e\164\157\x6f\x6c\x73"); } public function qymwusgoassaaacs() { $this->ckgaqqweiuseiayw("\166\141\156\x69\x73\x68\145\x72"); } public function wmuqwaewssekqymw() { $this->ckgaqqweiuseiayw("\144\151\x73\141\142\x6c\x65\162"); } public function oaaywquaycsmykuc() { $this->ckgaqqweiuseiayw("\160\162\x6f\147\162\x65\x73\x73\142\x61\x72"); } public function aeiaiwyqyeoswqsc($wkaqekwwgqsqwcoi, array $ywmkwiwkosakssii) : string { $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); if ($eaeiswmwiqewicoc->aauyuieeeaakygki($wkaqekwwgqsqwcoi)) { $wkaqekwwgqsqwcoi = $eaeiswmwiqewicoc->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi, $ywmkwiwkosakssii[Constants::waguuiqqgsysuukq] ?? "\146\x75\x6c\x6c"); } else { $ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy] = false; $wkaqekwwgqsqwcoi = $this->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, $ywmkwiwkosakssii); } return $wkaqekwwgqsqwcoi; } private function ckgaqqweiuseiayw(string $ymqmyyeuycgmigyo) { $kuoicyiuewoqyaqe = $this->owygwqwawqoiusis(pr_get_foundation(), $ymqmyyeuycgmigyo, "{$ymqmyyeuycgmigyo}\x2e\x6a\x73")->okawmmwsiuauwsiu()->jyumyyugiwwiqomk(5); $this->owgyegssycusoagc($kuoicyiuewoqyaqe); } private function egsaoagcwoyawuqu(string $ymqmyyeuycgmigyo) { $this->qeqgammgesiwiysc($this->awgyqswkqywwmkye(pr_get_foundation(), $ymqmyyeuycgmigyo, "{$ymqmyyeuycgmigyo}\x2e\x63\x73\x73")); } public function omywegoesmqwcmss() : string { return (string) $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x62\x75\x69\x6c\144\x5f\144\151\x72\145\x63\x74\x6f\162\171", ''); } public function kwoeacmuoiuucyes($egkyssmuqcwaciya) : string { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); return $wksoawcgagcgoask ? trailingslashit($this->mkwomgueyaaooyye()) . $wksoawcgagcgoask->aiqioscoyukqgsgw() : ''; } public function ukgaoamyemuuamau(string $giqwgyocuwmkscwc, array $oammesyieqmwuwyi) : string { $icyaoosaykeskiuu = ''; $ggauoeuaesiymgee = [Constants::auqoykcmsiauccao => '', Constants::wwukgkqwyakeqwqk => Constants::mcwaoqwywimcegca, Constants::mkeceumayywugoqs => $giqwgyocuwmkscwc, Constants::guucyoeqgeiqiscm => Constants::mcwaoqwywimcegca, Constants::keggaaockoyusosg => []]; $qsqwqsymmqeoqwcu = []; $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($oammesyieqmwuwyi as $eeamcawaiqocomwy => $igqsaukqcqscimok) { if (is_string($igqsaukqcqscimok)) { $eeamcawaiqocomwy = $igqsaukqcqscimok; $igqsaukqcqscimok = []; } if ($eeamcawaiqocomwy) { $igqsaukqcqscimok[Constants::auqoykcmsiauccao] = $eeamcawaiqocomwy; if (isset($igqsaukqcqscimok[Constants::keggaaockoyusosg])) { $oseqkueswiwsceis = (array) $igqsaukqcqscimok[Constants::keggaaockoyusosg]; $oseqkueswiwsceis[] = $eeamcawaiqocomwy; foreach ($oseqkueswiwsceis as $momcykaoccoymeig => $egsumesakcaaukem) { $saqmwwmqiwmkiwaa = pathinfo($egsumesakcaaukem, PATHINFO_EXTENSION); switch ($saqmwwmqiwmkiwaa) { case "\164\x74\x66": $saqmwwmqiwmkiwaa = "\x74\x72\x75\145\x74\x79\x70\145"; break; case "\x65\157\164": $saqmwwmqiwmkiwaa = "\x65\x6d\142\145\144\144\145\144\55\157\160\145\x6e\x74\171\160\145"; break; } $oseqkueswiwsceis[$momcykaoccoymeig] = [Constants::auqoykcmsiauccao => $egsumesakcaaukem, Constants::yqemseykugmsyeqa => $saqmwwmqiwmkiwaa]; } $igqsaukqcqscimok[Constants::keggaaockoyusosg] = $oseqkueswiwsceis; } $qsqwqsymmqeoqwcu[] = $cwaqscoiqkokyase->ckscqqquyskscaaw($igqsaukqcqscimok, $ggauoeuaesiymgee); } } if ($qsqwqsymmqeoqwcu) { $icyaoosaykeskiuu = pr_get_foundation()->iuygowkemiiwqmiw("\146\x6f\156\164\x2e\143\163\x73", ["\146\x6f\x6e\x74\x73" => $qsqwqsymmqeoqwcu]); } return $icyaoosaykeskiuu; } public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string { $woaeeewomgcuesaa = $this->cmaecekuqkwmemms("\x41\102\123\x50\101\x54\x48"); $sycgeiyakseiumqy = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->qasciyckimeascmg()); $eeamcawaiqocomwy = null; if ($woaeeewomgcuesaa && $sycgeiyakseiumqy) { $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca); } return $eeamcawaiqocomwy; } public function mkwomgueyaaooyye() : string { return untrailingslashit($this->cmaecekuqkwmemms("\x50\122\137\102\x55\x49\x4c\x44\137\125\122\114", '')); } public function qmwkoewmiweimaqe() : string { return untrailingslashit($this->cmaecekuqkwmemms(Constants::euecgwaikowgaiik, '')); } public function euwweycmgegkgwyg($egkyssmuqcwaciya, ?string $ymqmyyeuycgmigyo) : string { $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe(); $kqagasmwymmuiksq = $this->mcicykqgemgiyyii($egkyssmuqcwaciya, $ymqmyyeuycgmigyo); return "{$mkomwsiykqigmqca}\x2f{$kqagasmwymmuiksq}"; } public function uakscggyguwqmkoe(?string $ymqmyyeuycgmigyo) : ?string { $eeamcawaiqocomwy = null; if ($yuwymayicwwqiske = $this->cmaecekuqkwmemms("\x50\122\x5f\x53\x54\101\x54\x49\103\137\111\115\x41\x47\105\x53\x5f\x55\x52\114")) { $eeamcawaiqocomwy = trailingslashit($yuwymayicwwqiske) . $ymqmyyeuycgmigyo; } return $eeamcawaiqocomwy; } public function eyamqkqiykagecsw(?string $wkaqekwwgqsqwcoi, array $ywmkwiwkosakssii = []) : string { if ($wkaqekwwgqsqwcoi) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kicoscymgmgqeqgy => false, Constants::aisguagukaewucii => Constants::auqoykcmsiauccao, Constants::akcccmoeyoywycua => false, Constants::uociqugwegocyuue => Constants::wikgqsqysyuoykse]); if (is_numeric($wkaqekwwgqsqwcoi)) { if ($ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy]) { $wkaqekwwgqsqwcoi = (string) $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($wkaqekwwgqsqwcoi); if ($wkaqekwwgqsqwcoi) { $wkaqekwwgqsqwcoi = (string) $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($wkaqekwwgqsqwcoi); if ($ywmkwiwkosakssii[Constants::akcccmoeyoywycua]) { $wkaqekwwgqsqwcoi = $this->kuakoogiqsiiqiok($wkaqekwwgqsqwcoi); } } } else { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi); } } else { $qguqeikwwuququis = explode(DIRECTORY_SEPARATOR, $wkaqekwwgqsqwcoi); $ymiuaqwqkqoqkmck = $qguqeikwwuququis[0] ?? ''; if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($wkaqekwwgqsqwcoi, "\x2f\163\145\x74\57")) { $cekceegqqaoiisei = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\151\x63\157\x6e\137\x73\x65\164", $ywmkwiwkosakssii[Constants::uociqugwegocyuue], $ymiuaqwqkqoqkmck); if ($ymiuaqwqkqoqkmck === "\x66\141\x73\x6d") { if ($cekceegqqaoiisei === Constants::wikgqsqysyuoykse) { $cekceegqqaoiisei = "\154\x69\147\x68\x74"; } if ($cekceegqqaoiisei) { $oyscqkqkwmeakcac = array_pop($qguqeikwwuququis); $qguqeikwwuququis[] = $cekceegqqaoiisei; $qguqeikwwuququis[] = $oyscqkqkwmeakcac; $wkaqekwwgqsqwcoi = implode(DIRECTORY_SEPARATOR, $qguqeikwwuququis); } } } $ceuoyocoywikssmy = "\x69\x6d\x67\57\163\166\x67\x2f\151\143\157\156\57{$wkaqekwwgqsqwcoi}"; if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->ykemmsoumouomkqm($wkaqekwwgqsqwcoi, "\56\163\166\147")) { $ceuoyocoywikssmy .= "\x2e\163\166\147"; } $egkyssmuqcwaciya = pr_get_foundation(); $this->cqumwcqgamogkiki($egkyssmuqcwaciya, $ceuoyocoywikssmy); if ($ywmkwiwkosakssii[Constants::kicoscymgmgqeqgy]) { $wkaqekwwgqsqwcoi = $this->souwykwwmyygqyqi($egkyssmuqcwaciya, $ceuoyocoywikssmy); if ($ywmkwiwkosakssii[Constants::akcccmoeyoywycua]) { $wkaqekwwgqsqwcoi = $this->kuakoogiqsiiqiok($wkaqekwwgqsqwcoi); } } else { $wkaqekwwgqsqwcoi = $this->aqmcwcyggeiyooyg($egkyssmuqcwaciya, $ceuoyocoywikssmy); } } } return $wkaqekwwgqsqwcoi; } public function goyaiocaaisocukc() : string { $uogigqcwewqkwqgs = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\151\x63\157\x6e\x5f\x72\x65\x6d\x6f\164\x65\x5f\x62\141\163\145", $this->cmaecekuqkwmemms("\x50\122\137\x49\103\x4f\116\x5f\x52\x45\115\x4f\x54\x45\137\x42\101\123\105", self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(2680062535133, "\x31\x39\71\x32\x38\x36\x32\70\66\62\67\x30\x32\x37\x37\63\x34\x33\x33\62\x38\63\62\70\x32\x33\70\x32\x35\x35\x31\65\64\61\x36\67\63\x37\63\62\x37\x30\62\62\71\61\x38\62\x33\x37\x33\62\61\60\x31\64\x33\x32\x35\x35\x32\63\x38\x33\65\64\x32\67\x30\x31\x32\x32\x31\x38\x32\x31\66\67\x32\x37\67\63\65\64\61\x35\64\x31\66\x37\63\60\x37\x33\62\x38"))); return trailingslashit($uogigqcwewqkwqgs); } private function cqumwcqgamogkiki($egkyssmuqcwaciya, ?string $wkaqekwwgqsqwcoi) { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $esaqeawoigqgagum = trailingslashit(trailingslashit($this->qmwkoewmiweimaqe()) . $wksoawcgagcgoask->aiqioscoyukqgsgw()) . $wkaqekwwgqsqwcoi; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); $iiaumsgauuyeqksw = $miiyyswuessymmwe->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $gycuguqwikukcmik = $this->goyaiocaaisocukc() . $wkaqekwwgqsqwcoi; try { $osgeyewosumeygsi = true; if (ini_get("\141\154\154\157\167\x5f\x75\x72\154\x5f\x66\x6f\160\145\x6e") && !$miiyyswuessymmwe->cmaecekuqkwmemms("\120\x52\x5f\x44\111\123\x41\102\x4c\105\137\x46\x45\x54\103\x48\x5f\111\x43\117\x4e\137\106\x52\117\115\137\122\105\x4d\117\x54\x45", false)) { if ($ewgwqamkygiqaawc = file_get_contents($gycuguqwikukcmik)) { $osgeyewosumeygsi = false; $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); } else { if ($qcgkuqesqqymcuui = fopen($gycuguqwikukcmik, "\167\x62")) { $osgeyewosumeygsi = false; $ymmyeygsewqgsqea = fopen($esaqeawoigqgagum, "\x72\142"); while ($wegougocoeeookww = fread($ymmyeygsewqgsqea, 8192)) { fwrite($qcgkuqesqqymcuui, $wegougocoeeookww, 8192); } fclose($ymmyeygsewqgsqea); fclose($qcgkuqesqqymcuui); } } } if ($osgeyewosumeygsi) { $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $this->souwykwwmyygqyqi($wksoawcgagcgoask, "\151\x6d\147\x2f\163\x76\147\57\147\x65\141\162\x2e\x73\x76\147")); } } catch (Exception $wgaoewqkwgomoaai) { } } } } public function aqmcwcyggeiyooyg($egkyssmuqcwaciya, string $ymqmyyeuycgmigyo, bool $camsqsqgyowiokmm = true, int $oyiokksswogocuwm = 0) : string { $ceuoyocoywikssmy = ''; $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { try { if ($quowyokcwswmuois = $this->wocuguaggqkcimqq($egkyssmuqcwaciya)) { $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo); if (!$ceuoyocoywikssmy) { $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->remove($this->qmwkoewmiweimaqe() . "\x2f{$wksoawcgagcgoask->aiqioscoyukqgsgw()}"); $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw("\x63\x61\x6e\x20\x6e\x6f\164\x20\x66\x69\156\144\40\141\x73\163\145\164", 404); } if ($camsqsqgyowiokmm && $ceuoyocoywikssmy && strpos($ceuoyocoywikssmy, "\x2e\x63\163\x73") && $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->gqesusmmigggsqai()) { $ceuoyocoywikssmy = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc("\56\143\163\x73", "\x2e\162\x74\x6c\x2e\143\163\163", $ceuoyocoywikssmy); } } } catch (Exception $wgaoewqkwgomoaai) { if ($oyiokksswogocuwm < 2) { $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ewcsyqaaigkicgse("\x6d\157\x76\145\x5f\143\x6f\x6d\160\157\x6e\x65\x6e\164\x5f\x73\x74\x61\164\151\x63\x5f\x61\163\163\145\164", $wksoawcgagcgoask); $ceuoyocoywikssmy = $this->aqmcwcyggeiyooyg($wksoawcgagcgoask, $ymqmyyeuycgmigyo, $camsqsqgyowiokmm, ++$oyiokksswogocuwm); } } } return $ceuoyocoywikssmy; } public function msgqgyuieokaauma($egsumesakcaaukem) : string { $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = ''; if ($egsumesakcaaukem && preg_match("\57\134\x2f\x77\x70\x2d\50\143\157\156\x74\x65\x6e\164\x7c\x69\x6e\x63\154\165\x64\x65\163\51\x5c\x2f\x2f", $egsumesakcaaukem, $meyiiwcswqmuggyg)) { switch ($meyiiwcswqmuggyg[1] ?? '') { case Constants::ssmskyqgcmeiayco: $mkomwsiykqigmqca = $this->cmaecekuqkwmemms("\x57\x50\x5f\103\117\x4e\x54\105\x4e\124\x5f\x50\x41\x54\110", ''); $eeamcawaiqocomwy = content_url(); break; case "\x69\156\x63\x6c\165\x64\145\163": $mkomwsiykqigmqca = $this->cmaecekuqkwmemms("\101\102\x53\120\101\x54\110", '') . $this->cmaecekuqkwmemms("\x57\120\137\x49\116\x43", ''); $eeamcawaiqocomwy = includes_url(); break; } if ($eeamcawaiqocomwy && $mkomwsiykqigmqca) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $eeamcawaiqocomwy = untrailingslashit($cwaqscoiqkokyase->mkcmkkskeeaskowy($eeamcawaiqocomwy)); $egsumesakcaaukem = untrailingslashit($cwaqscoiqkokyase->mkcmkkskeeaskowy($egsumesakcaaukem)); $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem); } } else { $uougkmikwgeueowa = $this->mkwomgueyaaooyye(); $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe(); if ($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo) { $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem); } } return $sogksuscggsicmac; } public function souwykwwmyygqyqi($egkyssmuqcwaciya, $egsumesakcaaukem, array $eyagkkkqkwcuygso = []) : string { $ewgwqamkygiqaawc = ''; if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($egsumesakcaaukem)) { $esaqeawoigqgagum = $this->euwweycmgegkgwyg($egkyssmuqcwaciya, $egsumesakcaaukem); } else { $esaqeawoigqgagum = $this->msgqgyuieokaauma($this->aqmcwcyggeiyooyg($egkyssmuqcwaciya, $egsumesakcaaukem)); } $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $ewgwqamkygiqaawc = (string) $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); } if ($ewgwqamkygiqaawc && $eyagkkkqkwcuygso) { foreach ($eyagkkkqkwcuygso as $qwcmueausqgiwigy => $moyaaaascoeowegu) { $ewgwqamkygiqaawc = str_replace(["\x7b\173\40{$qwcmueausqgiwigy}\40\175\x7d", "\173\x20{$qwcmueausqgiwigy}\x20\175"], [$moyaaaascoeowegu, $moyaaaascoeowegu], $ewgwqamkygiqaawc); } } return $ewgwqamkygiqaawc; } public function weqigaiiisygyksm($egkyssmuqcwaciya, string $ymqmyyeuycgmigyo) : string { $eeamcawaiqocomwy = ''; $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $eeamcawaiqocomwy = $this->mkwomgueyaaooyye(); $wksoawcgagcgoask = $wksoawcgagcgoask->aiqioscoyukqgsgw(); if ($wksoawcgagcgoask) { $eeamcawaiqocomwy .= "\x2f{$wksoawcgagcgoask}"; } $eeamcawaiqocomwy .= "\x2f{$ymqmyyeuycgmigyo}"; } return $eeamcawaiqocomwy; } private function mcicykqgemgiyyii($egkyssmuqcwaciya, string $ceuoyocoywikssmy) : string { $kqagasmwymmuiksq = ''; try { $quowyokcwswmuois = $this->wocuguaggqkcimqq($egkyssmuqcwaciya); if ($quowyokcwswmuois) { $kqagasmwymmuiksq = $quowyokcwswmuois->getVersion($ceuoyocoywikssmy); } } catch (Exception $wgaoewqkwgomoaai) { } return $kqagasmwymmuiksq; } private function seimiyccuwecawki($egkyssmuqcwaciya, string $eueuqacmukymcyya, string $sqeykgyoooqysmca, $ogomymegcoacqisg = false) : Source { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if (is_string($ogomymegcoacqisg) && !preg_match("\x2f\136\50\x68\x74\x74\160\x73\77\x3a\51\57", $ogomymegcoacqisg)) { $ogomymegcoacqisg = $this->aqmcwcyggeiyooyg($wksoawcgagcgoask, $ogomymegcoacqisg); } if (!$wksoawcgagcgoask) { $mmeioagwmyscwumo = 1; } return new Source("{$wksoawcgagcgoask->aiqioscoyukqgsgw()}\55{$eueuqacmukymcyya}", $ogomymegcoacqisg, $sqeykgyoooqysmca); } public function awgyqswkqywwmkye($egkyssmuqcwaciya, string $eueuqacmukymcyya, $geecqyososceumsk = false) : Source { return $this->seimiyccuwecawki($egkyssmuqcwaciya, $eueuqacmukymcyya, Constants::wwukgkqwyakeqwqk, $geecqyososceumsk); } public function owygwqwawqoiusis($egkyssmuqcwaciya, string $eueuqacmukymcyya, $ogomymegcoacqisg = false) : Source { return $this->seimiyccuwecawki($egkyssmuqcwaciya, $eueuqacmukymcyya, Constants::qssgasiyswwaciwc, $ogomymegcoacqisg); } public function wwmusmkkcwsiciou($egkyssmuqcwaciya, string $uusmaiomayssaecw, $wqsyimmcqogaosaq) : self { return $this->amqemiuwqggikkyi($egkyssmuqcwaciya, $uusmaiomayssaecw, $wqsyimmcqogaosaq, Constants::qiaqeaemuukkikmi); } public function qeqgammgesiwiysc(Source $egsumesakcaaukem) : self { $this->emmqgiegugsycumi($egsumesakcaaukem, Constants::qiaqeaemuukkikmi); return $this; } public function yawoscugkyysowie(Source $egsumesakcaaukem) : self { $this->emmqgiegugsycumi($egsumesakcaaukem, Constants::iickqyckyaqcaokm); return $this; } public function wqiosiseiwsamggo(Source $egsumesakcaaukem) : self { $this->emmqgiegugsycumi($egsumesakcaaukem, Constants::yuguikokwoymmqem); return $this; } public function owgyegssycusoagc(Source $egsumesakcaaukem) : self { return $this->wqiosiseiwsamggo($egsumesakcaaukem)->qeqgammgesiwiysc($egsumesakcaaukem)->yawoscugkyysowie($egsumesakcaaukem); } public function ceuoqiqwoyuqyewe($egkyssmuqcwaciya, $seiyqiqwcmseaiaq) : self { return $this->siaqwswaougcwcci($egkyssmuqcwaciya, $seiyqiqwcmseaiaq, Constants::qiaqeaemuukkikmi); } public function qkqeooqcomucuwyk($egkyssmuqcwaciya, string $uusmaiomayssaecw, $wqsyimmcqogaosaq) : self { return $this->amqemiuwqggikkyi($egkyssmuqcwaciya, $uusmaiomayssaecw, $wqsyimmcqogaosaq, Constants::iickqyckyaqcaokm); } public function qgkgieacuwasgiuy($egkyssmuqcwaciya, $seiyqiqwcmseaiaq) : self { return $this->siaqwswaougcwcci($egkyssmuqcwaciya, $seiyqiqwcmseaiaq, Constants::iickqyckyaqcaokm); } public function gauosiuwaieksway($egkyssmuqcwaciya, string $uusmaiomayssaecw, $wqsyimmcqogaosaq) : self { return $this->amqemiuwqggikkyi($egkyssmuqcwaciya, $uusmaiomayssaecw, $wqsyimmcqogaosaq, Constants::yuguikokwoymmqem); } public function oaoisgmqkamuoeam($egkyssmuqcwaciya, $seiyqiqwcmseaiaq) : self { return $this->siaqwswaougcwcci($egkyssmuqcwaciya, $seiyqiqwcmseaiaq, Constants::yuguikokwoymmqem); } public function gqcsyicawqkimcau($egkyssmuqcwaciya, array $equkucqiagswqcko) : self { return $this->qgkgieacuwasgiuy($egkyssmuqcwaciya, $equkucqiagswqcko)->ceuoqiqwoyuqyewe($egkyssmuqcwaciya, $equkucqiagswqcko)->oaoisgmqkamuoeam($egkyssmuqcwaciya, $equkucqiagswqcko); } public function yimkcammomikeegq(string $uusmaiomayssaecw, string $wuomgsuaoscwgsmq) : ?Source { return $this->storage[Constants::iocouekmygsaocuo][$wuomgsuaoscwgsmq][$uusmaiomayssaecw] ?? null; } public function uqemmgsiyiksoumo(string $wuomgsuaoscwgsmq) : array { return $this->storage[Constants::iocouekmygsaocuo][$wuomgsuaoscwgsmq] ?? []; } public function qsaiusuuwcueamkk(string $wuomgsuaoscwgsmq) : array { return $this->storage[Constants::oscqagwyeccuimwo][$wuomgsuaoscwgsmq] ?? []; } public function wgkgisqoggykwawi($egkyssmuqcwaciya, string $ymqmyyeuycgmigyo, bool $yqkwsouguwgoywcw = false) { $ceuoyocoywikssmy = false; $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask && ($quowyokcwswmuois = $this->wocuguaggqkcimqq($wksoawcgagcgoask))) { try { $cyaeoagyqcqyqgmk = $this->qmwkoewmiweimaqe(); $esaqeawoigqgagum = trailingslashit(trailingslashit($cyaeoagyqcqyqgmk) . $wksoawcgagcgoask->aiqioscoyukqgsgw()) . $ymqmyyeuycgmigyo; if ($this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo); } } catch (Exception $wgaoewqkwgomoaai) { if ($yqkwsouguwgoywcw) { throw $wgaoewqkwgomoaai; } } } return $ceuoyocoywikssmy; } public function yomasssaasmawcso($egkyssmuqcwaciya, string $eueuqacmukymcyya) : string { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); return $wksoawcgagcgoask ? "{$wksoawcgagcgoask->aiqioscoyukqgsgw()}\55{$eueuqacmukymcyya}" : ''; } public function register($egsumesakcaaukem) { if ($egsumesakcaaukem instanceof Source) { $ogomymegcoacqisg = $egsumesakcaaukem->mgaeeqsgeoukeokc(); $usyqkyomqcuocgoa = $egsumesakcaaukem->mmoosseiswcigswg(); $eueuqacmukymcyya = $egsumesakcaaukem->yoickwcyekiwiyqm(); $kqagasmwymmuiksq = $egsumesakcaaukem->gikwwgqmwccescgy(); $ugmuiugkaygmsagq = $egsumesakcaaukem->auskmiuqesyqemgc(); $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); switch ($egsumesakcaaukem->gueasuouwqysmomu()) { case Constants::qssgasiyswwaciwc: $qaqoseqwmoyaigoy = $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $kqagasmwymmuiksq, $egsumesakcaaukem->mequouugayiseiei()); if ($qaqoseqwmoyaigoy && $usyqkyomqcuocgoa) { $geoqacegumkcaskk->yocqwqycwegayowg($eueuqacmukymcyya, $usyqkyomqcuocgoa); } break; case Constants::wwukgkqwyakeqwqk: $qaqoseqwmoyaigoy = $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $kqagasmwymmuiksq, $egsumesakcaaukem->acskcgywyymegikq()); if ($qaqoseqwmoyaigoy && $usyqkyomqcuocgoa) { $geoqacegumkcaskk->oiqqguakwcieaioo($eueuqacmukymcyya, $usyqkyomqcuocgoa); } break; } } return $this; } public function enqueue($egsumesakcaaukem) : self { if ($egsumesakcaaukem instanceof Source) { $eueuqacmukymcyya = $egsumesakcaaukem->yoickwcyekiwiyqm(); $simqeemkoyaqkkwe = $egsumesakcaaukem->simqeemkoyaqkkwe(); switch ($egsumesakcaaukem->gueasuouwqysmomu()) { case Constants::qssgasiyswwaciwc: if ($simqeemkoyaqkkwe) { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->imsomwwswyoquoqk($eueuqacmukymcyya); $egsumesakcaaukem->gogiqycisqygoagk(); } break; case Constants::wwukgkqwyakeqwqk: if ($simqeemkoyaqkkwe) { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->myyikeyuuomqoyew($eueuqacmukymcyya); $egsumesakcaaukem->gogiqycisqygoagk(); } break; } } return $this; } private function wocuguaggqkcimqq($egkyssmuqcwaciya) { $quowyokcwswmuois = false; $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $qmwoykgeiicumeiw = $wksoawcgagcgoask->aakmagwggmkoiiyu(); if (!isset($this->storage[$qmwoykgeiicumeiw][Constants::coyceqeuqasaomeq])) { try { $eeamcawaiqocomwy = $this->mkwomgueyaaooyye(); $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe(); if ($eeamcawaiqocomwy && $mkomwsiykqigmqca) { $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw(); if ($kcismmoemwgiymuq) { $eeamcawaiqocomwy .= "\57{$kcismmoemwgiymuq}"; $mkomwsiykqigmqca .= "\57{$kcismmoemwgiymuq}"; } $this->storage[Constants::coyceqeuqasaomeq][$qmwoykgeiicumeiw] = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}\x2f\x6d\141\x6e\x69\x66\x65\x73\164\x2e\152\163\157\156")); } } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } } $quowyokcwswmuois = $this->storage[Constants::coyceqeuqasaomeq][$qmwoykgeiicumeiw] ?? false; } return $quowyokcwswmuois; } private function kuakoogiqsiiqiok($ewgwqamkygiqaawc) : string { if ($ewgwqamkygiqaawc) { $ewgwqamkygiqaawc = (string) preg_replace("\x2f\x3c\41\x2d\x2d\x5b\134\163\x5c\x53\135\52\x3f\x2d\55\x3e\57", '', $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = (string) preg_replace("\57\x3c\144\145\146\x73\76\x5b\134\x73\x5c\123\135\52\x3f\74\x5c\x2f\144\145\146\163\x3e\x2f", '', $ewgwqamkygiqaawc); } return $ewgwqamkygiqaawc; } private function siaqwswaougcwcci($egkyssmuqcwaciya, array $wqsyimmcqogaosaq, string $wuomgsuaoscwgsmq) : self { foreach ($wqsyimmcqogaosaq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->amqemiuwqggikkyi($egkyssmuqcwaciya, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $wuomgsuaoscwgsmq); } return $this; } private function amqemiuwqggikkyi($egkyssmuqcwaciya, $uusmaiomayssaecw, $wqsyimmcqogaosaq, string $wuomgsuaoscwgsmq) : self { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $cmaccwokqweqweqi = $this->storage[Constants::oscqagwyeccuimwo][$wuomgsuaoscwgsmq][$wksoawcgagcgoask->aiqioscoyukqgsgw()][$uusmaiomayssaecw] ?? []; if ($cmaccwokqweqweqi) { $wqsyimmcqogaosaq = array_merge($cmaccwokqweqweqi, $wqsyimmcqogaosaq); } $this->storage[Constants::oscqagwyeccuimwo][$wuomgsuaoscwgsmq][$wksoawcgagcgoask->aiqioscoyukqgsgw()][$uusmaiomayssaecw] = $wqsyimmcqogaosaq; } return $this; } private function emmqgiegugsycumi(Source $egsumesakcaaukem, string $wuomgsuaoscwgsmq) : self { $this->storage[Constants::iocouekmygsaocuo][$wuomgsuaoscwgsmq][$egsumesakcaaukem->cisyiemkeykgkomc()] = $egsumesakcaaukem; return $this; } }
