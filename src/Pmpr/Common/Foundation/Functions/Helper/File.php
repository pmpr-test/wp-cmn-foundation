<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use DirectoryIterator; use Exception; use FilesystemIterator; use LogicException; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Filesystem; use RecursiveDirectoryIterator; use RecursiveIteratorIterator; use RegexIterator; use RuntimeException; use Symfony\Component\Finder\Finder; use WP_Error; class File extends Common { public function kcciqwskewsuaemk() : Filesystem { return Filesystem::symcgieuakksimmu(); } public function uskgaqyoewamsikw(string $esaqeawoigqgagum) : string { $owyiccmocukoumyy = ''; $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if (!$ewgwqamkygiqaawc) { goto uiqqoqeguqksakak; } switch (pathinfo($esaqeawoigqgagum, PATHINFO_EXTENSION)) { default: case "\160\x64\146": $saqmwwmqiwmkiwaa = "\141\160\x70\154\x69\x63\x61\164\x69\x6f\156\57\x70\144\146"; goto wokoooqeguamsuso; } ykwmsugmueoosyka: wokoooqeguamsuso: $owyiccmocukoumyy = $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($ewgwqamkygiqaawc, $saqmwwmqiwmkiwaa); uiqqoqeguqksakak: return $owyiccmocukoumyy; } public function kiygcugekegoqauw($mkomwsiykqigmqca) { try { $mcowwqgmkuemoumu = new DirectoryIterator($mkomwsiykqigmqca); } catch (Exception $iewosgggaueeyymg) { $mcowwqgmkuemoumu = []; } return $mcowwqgmkuemoumu; } public function qkuqsuugayciskek($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto iggimwweuooskmqi; } $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDot(); iggimwweuooskmqi: return $qkuqsuugayciskek; } public function mecmkmogggamegic($mcowwqgmkuemoumu) : bool { $mecmkmogggamegic = false; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto oieyimeswqquigei; } $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile(); oieyimeswqquigei: return $mecmkmogggamegic; } public function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string { $yooeiwgeaoeyusyy = null; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto sieqieowwakamuei; } $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname(); sieqieowwakamuei: return $yooeiwgeaoeyusyy; } public function awosikuiguowiumy($mcowwqgmkuemoumu) : int { $emqekiqqyiwqigsg = 0; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto qcssqeugkggmssuq; } $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime(); qcssqeugkggmssuq: return $emqekiqqyiwqigsg; } public function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool { $qkuqsuugayciskek = false; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto smsgocwimiqgewse; } $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir(); smsgocwimiqgewse: return $qkuqsuugayciskek; } public function amqagusacuuuaswg($mcowwqgmkuemoumu) : ?string { $mkomwsiykqigmqca = null; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto qksoacweieioouuu; } $mkomwsiykqigmqca = $mcowwqgmkuemoumu->getPath(); qksoacweieioouuu: return $mkomwsiykqigmqca; } public function mawoacksgosuccme($mcowwqgmkuemoumu) : ?string { $wkcwykowmmmwioqs = null; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto cgummkmwkkyaomqq; } $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename(); cgummkmwkkyaomqq: return $wkcwykowmmmwioqs; } public function csksiiecqkeecwqm($mcowwqgmkuemoumu) : ?string { $yucgcsieomwqgwws = null; if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) { goto mygyyacgawkwoaak; } $yucgcsieomwqgwws = $mcowwqgmkuemoumu->getExtension(); mygyyacgawkwoaak: return $yucgcsieomwqgwws; } public function lausiwamsokkqguo($owyiccmocukoumyy) { $usiyooesieckaoea = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mqqeykegekqaumeq = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); $usuwmommwquwiiia = str_replace("\x2f", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\160\x61\164\150"]) . DIRECTORY_SEPARATOR; $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy); $mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get(explode("\x2c", $owyiccmocukoumyy), 1, $owyiccmocukoumyy); $mcqieaigyeeyaksm = str_replace("\40", "\x2b", $mcqieaigyeeyaksm); $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm); $cqiuiecmyyqkgeoa = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\x6d\x69\x6d\145"); $qgoggukmyiemssaa = md5(microtime()) . str_replace("\57", "\x2e", $cqiuiecmyyqkgeoa); $mckmqeqaekwkwems = "\x74\145\155\160\55{$qgoggukmyiemssaa}"; $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}"; $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu); $qogsmwakwacwqogk = ["\156\141\x6d\x65" => $qgoggukmyiemssaa, "\x73\x69\172\145" => filesize($yoisseswouogeswg), "\164\171\160\x65" => $cqiuiecmyyqkgeoa, "\145\x72\x72\x6f\x72" => '', "\164\x6d\x70\x5f\156\141\155\x65" => $yoisseswouogeswg]; $ksaameoqigiaoigg = $usiyooesieckaoea->qsyguaycgacaggsu($qogsmwakwacwqogk, ["\164\145\163\x74\x5f\x66\157\162\x6d" => false]); if ($iswcokucwmiosiaq = $gkyciwoiiisgywcs->get($ksaameoqigiaoigg, "\x65\162\162\157\x72")) { goto mqecqicimeusigcs; } $esaqeawoigqgagum = $ksaameoqigiaoigg[Constants::kekgqaemqessuwmq] ?? ''; $aiooqyausygaasqm = ["\x67\165\151\x64" => $mqqeykegekqaumeq["\165\x72\154"] . "\57" . basename($esaqeawoigqgagum), Constants::siwwqayqwykwqwoy => preg_replace("\57\134\56\x5b\x5e\56\x5d\x2b\44\57", '', basename($esaqeawoigqgagum)), Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::egkuckyqcaygmymg => '', "\x70\x6f\x73\x74\x5f\x6d\151\155\x65\x5f\164\x79\160\x65" => $ksaameoqigiaoigg[Constants::squoamkioomemiyi] ?? $cqiuiecmyyqkgeoa]; $ksaameoqigiaoigg = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\160\x61\164\x68"]}\57{$qgoggukmyiemssaa}"); goto agwucmswyeecgiwk; mqecqicimeusigcs: $ksaameoqigiaoigg = new WP_Error("\165\160\154\x6f\x61\144\137\x66\151\x6c\x65\137\145\x72\x72\x6f\x72", $iswcokucwmiosiaq, ["\163\x74\x61\164\x75\x73" => 401]); agwucmswyeecgiwk: return $ksaameoqigiaoigg; } public function wayeasoyaomiwwmc() : ?string { if (!function_exists("\147\x65\x74\x5f\150\x6f\x6d\145\x5f\x70\141\x74\x68")) { require_once ABSPATH . "\167\x70\x2d\141\x64\x6d\x69\x6e\57\x69\x6e\143\x6c\165\x64\x65\x73\x2f\146\x69\x6c\145\x2e\x70\150\160"; } return get_home_path(); } public function eyqooeqgoyokqeoq($aiieyweysaukqemc) { $esaqeawoigqgagum = null; try { if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) { goto wocmissqwqoccqgq; } throw new RuntimeException("{$aiieyweysaukqemc}\x20\164\x79\x70\145\40\151\x73\40\x6e\157\164\40\166\141\x6c\x69\144\40\x6f\162\x20\156\x61\x6d\x65\163\x70\141\143\145\40\x6e\157\x74\40\145\x78\151\163\x74\56"); goto ouyqacmgssaeeyaq; wocmissqwqoccqgq: $esaqeawoigqgagum = $this->cmmaeeeoaaeqqqmm($aiieyweysaukqemc, "\147\145\164\x46\151\154\x65\116\141\x6d\x65"); ouyqacmgssaeeyaq: } catch (Exception $wgaoewqkwgomoaai) { } return $esaqeawoigqgagum; } public function qucagkayiequsiia($egkyssmuqcwaciya) : ?string { $smaiamkswqkisawm = null; if (!($esaqeawoigqgagum = $this->eyqooeqgoyokqeoq($egkyssmuqcwaciya))) { goto auwsmkeaswcqwkiy; } $smaiamkswqkisawm = basename($esaqeawoigqgagum); auwsmkeaswcqwkiy: return $smaiamkswqkisawm; } public function iygwwosmmgmouoyc($mkomwsiykqigmqca) : string { return realpath("{$mkomwsiykqigmqca}\57\56\56\57\x2e\56\57\56\56\x2f\x2e\x2e\57"); } public function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int { $oiegiwogmwmawkeo = 0; try { $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS)); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac(); wyouyacqwaoscwco: } ywymuuggyeqggyqo: } catch (Exception $iewosgggaueeyymg) { } return $oiegiwogmwmawkeo; } public function qmgqwkwkuqaguewu(string $qogsmwakwacwqogk, string $uusmaiomayssaecw = '') { $uqeyuwmcygawucoc = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->qmgqwkwkuqaguewu($qogsmwakwacwqogk); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc); } public function ikeooymesgsuggoe() : ?bool { $qkkaqsuiooeayqeu = null; if (!is_null($qkkaqsuiooeayqeu)) { goto kuiimqmaogsaoimi; } $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\x5c"; kuiimqmaogsaoimi: return $qkkaqsuiooeayqeu; } public function qawkooaucwoseaia($mkomwsiykqigmqca, $ucccueqywigcukcc) { try { $mcowwqgmkuemoumu = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($mkomwsiykqigmqca, FilesystemIterator::SKIP_DOTS)); $qmwoqyacswkwkiog = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc, RegexIterator::MATCH); } catch (Exception $iewosgggaueeyymg) { $qmwoqyacswkwkiog = []; } return $qmwoqyacswkwkiog; } public function gcwmgguowgqguesm($ymqmyyeuycgmigyo, $kgcswwyywoscuqqs, &$iswcokucwmiosiaq = '') : bool { $eouekqmooogkoqoo = "\57\134\163\x2a\x23\40\x42\x45\107\111\116\x20{$ymqmyyeuycgmigyo}\56\x2a\x23\40\x45\116\x44\40{$ymqmyyeuycgmigyo}\134\x73\52\77\x2f\151\x73\x55"; $ksaameoqigiaoigg = false; $esaqeawoigqgagum = $this->wayeasoyaomiwwmc() . "\56\150\164\141\143\x63\x65\x73\163"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw && $iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) { goto oemswegiqoiyocyi; } $iswcokucwmiosiaq = sprintf(__("\45\163\x20\x69\x73\40\x6e\x6f\164\x20\x72\x65\x61\x64\x61\142\154\145\x2e", PR__PLG__PMPR), $esaqeawoigqgagum); goto ckocyicqgqesqcyw; oemswegiqoiyocyi: $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); if (preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) { goto gayuuyucaseyequa; } global $is_apache; if (!($is_apache && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum))) { goto yogcgegoayymyisi; } if (!is_callable($kgcswwyywoscuqqs)) { goto ueyagkiewoigukeq; } $kgcswwyywoscuqqs = $kgcswwyywoscuqqs(); ueyagkiewoigukeq: if (!(is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs))) { goto iwcmwyyeuwuogkmy; } if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) { goto oeqaomymqmegqway; } $ksaameoqigiaoigg = true; goto aeaaqimiugqwsiuo; oeqaomymqmegqway: $iswcokucwmiosiaq = sprintf(__("\x54\x68\x65\40\56\150\164\141\x63\143\145\163\x73\40\146\x69\x6c\145\x20\50\x25\163\x29\x20\143\157\165\154\144\x20\x6e\x6f\x74\x20\x62\x65\x20\x65\x64\x69\164\x65\x64\x2e\x20\103\150\145\143\x6b\x20\x69\x66\x20\x74\x68\145\40\x66\151\154\x65\x20\150\x61\163\x20\x77\x72\151\x74\x65\x20\x70\145\162\x6d\151\163\163\151\x6f\156\x73\56", PR__CMN__FOUNDATION), $esaqeawoigqgagum); aeaaqimiugqwsiuo: iwcmwyyeuwuogkmy: yogcgegoayymyisi: gayuuyucaseyequa: ckocyicqgqesqcyw: return $ksaameoqigiaoigg; } public function usoyisqwsqsegiam(?string $migiiksoiymissge) { $cgmkimaosyyuqeyg = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq()); $migiiksoiymissge = trailingslashit($migiiksoiymissge); if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) { goto uiokqiccsgcmweuw; } $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge); goto eycgkegwmmsgwgsu; uiokqiccsgcmweuw: if (preg_match("\140\136\50\x68\x74\164\x70\163\x3f\72\x29\77\57\57\50\x5b\x5e\x2f\135\x2b\x29\50\57\x2e\52\x29\x3f\x24\140\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) { goto yooikokuygygyscy; } if (preg_match("\x60\x5e\x2f\50\133\x5e\57\x5d\53\51\x28\x2f\x2e\x2a\x29\x3f\44\x60\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) { goto oiuwwaimuiuasyak; } $xeciwimgioieayek = ''; goto mceqeoceqiqsqyig; oiuwwaimuiuasyak: $xeciwimgioieayek = $migiiksoiymissge; mceqeoceqiqsqyig: goto yikcmigmymmyykyy; yooikokuygygyscy: $xeciwimgioieayek = $meyiiwcswqmuggyg[3] ?? ''; yikcmigmymmyykyy: eycgkegwmmsgwgsu: $xeciwimgioieayek = $this->caokeucsksukesyo()->owgcciayoweymuws()->quuwkeiwesaoqwom(["\x2e\x2e", "\x5c", "\x69\x6e\x64\x65\170\56\160\150\160"], preg_replace("\x2f\133\x20\74\76\x27\134\x22\134\x72\134\x6e\x5c\x74\134\x28\x5c\x29\135\x2f", '', preg_replace("\57\50\x5c\x3f\56\x2a\51\x3f\x28\x23\56\x2a\51\x3f\44\57", '', $xeciwimgioieayek))); $ykqmwuwqiskkmwuy = (string) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::wwoeeogswkgeqack), PHP_URL_HOST); $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\57\x3a\x2e\x2a\x24\x2f", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek; return str_replace(["\57\x2f", "\x2e\x2e", "\x25"], ["\x2f", '', ''], $ymqmyyeuycgmigyo); } public function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, bool $iggwcmkgmicmouyu = true, bool $osuugmekawaecqku = true) { $ksaameoqigiaoigg = false; if (!($mkomwsiykqigmqca && $this->wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $iggwcmkgmicmouyu && $this->kcciqwskewsuaemk()->oquguuiseiwkawkw($mkomwsiykqigmqca, null, $osuugmekawaecqku))) { goto ayyowoawokgaayaw; } $ksaameoqigiaoigg = $mkomwsiykqigmqca; ayyowoawokgaayaw: return $ksaameoqigiaoigg; } public function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR) : ?string { $emukumgmosiqkmyi = null; if (!$mkomwsiykqigmqca) { goto wqmqkiimcwkskqya; } $emukumgmosiqkmyi = preg_replace("\43\134\x70\173\103\175\x2b\x7c\136\134\56\57\43\165", '', $mkomwsiykqigmqca); $emukumgmosiqkmyi = preg_replace("\x23\x2f\134\56\50\77\75\x2f\51\x7c\x5e\x5c\56\x2f\174\x5c\x2e\57\x24\x23", '', $emukumgmosiqkmyi); $ucccueqywigcukcc = "\43\134\x2f\x2a\133\x5e\x2f\x5c\56\135\53\57\134\x2e\134\56\43\x55\165"; wkgqkogygougamck: if (!preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) { goto awmmoggkmyueoasu; } $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi); goto wkgqkogygougamck; awmmoggkmyueoasu: if (!preg_match("\x23\x2f\134\56\x7b\x32\175\174\x5c\x2e\173\x32\175\57\43", $emukumgmosiqkmyi)) { goto yukcaoieiswcmemu; } throw new LogicException("\x50\141\164\x68\40\x69\x73\40\x6f\165\164\x73\151\x64\145\x20\x6f\146\40\x74\x68\x65\40\144\145\146\151\156\145\x64\40\162\157\157\x74\54\x20\160\141\164\150\72\x20\133" . $mkomwsiykqigmqca . "\x5d\54\40\x72\145\163\x6f\154\x76\145\144\x3a\40\x5b" . $emukumgmosiqkmyi . "\x5d"); yukcaoieiswcmemu: $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu); wqmqkiimcwkskqya: return $emukumgmosiqkmyi; } public function saugyekawkwswgag($ymqmyyeuycgmigyo = "\167\x70\x2d\x63\157\156\x66\151\x67") : ?string { $wkcwykowmmmwioqs = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\167\160\x5f\143\x6f\x6e\146\151\147\137\x6e\141\155\145", $ymqmyyeuycgmigyo); $osoescyygsqmqauq = trailingslashit($this->cmaecekuqkwmemms("\x41\102\x53\120\x41\x54\110")); $qogsmwakwacwqogk = "{$osoescyygsqmqauq}{$wkcwykowmmmwioqs}\56\160\150\x70"; $mkomwsiykqigmqca = null; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->qygmgeswucmcmaiu($qogsmwakwacwqogk)) { goto owkkogeoyukumywq; } $miyqkqasewkcqkqo = dirname($osoescyygsqmqauq) . DIRECTORY_SEPARATOR; $yqcckkowmayoioai = "{$miyqkqasewkcqkqo}{$wkcwykowmmmwioqs}\56\x70\x68\x70"; if (!($iiaumsgauuyeqksw->exists($yqcckkowmayoioai) && $iiaumsgauuyeqksw->qygmgeswucmcmaiu($yqcckkowmayoioai) && !$iiaumsgauuyeqksw->exists("{$miyqkqasewkcqkqo}\167\160\55\x73\145\x74\x74\151\156\x67\163\x2e\160\x68\x70"))) { goto ggywskiemyoaeqaw; } $mkomwsiykqigmqca = $yqcckkowmayoioai; ggywskiemyoaeqaw: goto swiiegskwgeogcoq; owkkogeoyukumywq: $mkomwsiykqigmqca = $qogsmwakwacwqogk; swiiegskwgeogcoq: return $mkomwsiykqigmqca; } public function gwmwcmygyoggugeo(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { $wpConfigPath = $this->saugyekawkwswgag(); if (!$wpConfigPath) { goto osiuigcwawuayisk; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wpConfigPath); $eqgoocgaqwqcimie = $this->awyuskaumkmciiia($eqgoocgaqwqcimie); $yumccasyisqwmmio = preg_match("\57\136\134\163\x2a\144\x65\x66\x69\x6e\x65\134\50\134\x73\52\x22{$ymqmyyeuycgmigyo}\42\134\x73\x2a\54\134\163\52\x28\77\x3c\166\141\154\165\145\76\x5b\136\x5c\163\51\x5d\52\x29\134\x73\x2a\x5c\51\x2f\155", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!(!isset($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm]) || $meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm] !== $eqgoocgaqwqcimie)) { goto gwggseoomcggqiim; } $gqkqacakewkecqie = "\144\x65\146\151\156\x65\x28\x27{$ymqmyyeuycgmigyo}\x27\54\40{$eqgoocgaqwqcimie}\x29\73\40\x2f\57\40\101\x64\144\x65\x64\x20\x41\165\164\157\x6d\x61\164\151\143\141\154\154\171"; if (!$yumccasyisqwmmio) { goto gaokasygggaaywkq; } if (empty($meyiiwcswqmuggyg[Constants::ciyoccqkiamemcmm])) { goto mgmiwyeiyuecmaso; } $ewgwqamkygiqaawc = preg_replace("\57\136\x5c\163\x2a\144\145\x66\151\156\x65\134\50\134\163\x2a\x22{$ymqmyyeuycgmigyo}\42\x5c\x73\52\x2c\x5c\x73\x2a\x28\133\136\x5c\163\x29\135\x2a\51\x5c\163\x2a\x5c\x29\x2e\53\57\x6d", $gqkqacakewkecqie, $ewgwqamkygiqaawc); mgmiwyeiyuecmaso: goto ocykqucykqysewkc; gaokasygggaaywkq: $ewgwqamkygiqaawc = preg_replace("\57\x28\x3c\x5c\77\160\150\160\x29\x2f\151", "\x3c\x3f\x70\x68\160\xd\12{$gqkqacakewkecqie}\xd\xa", $ewgwqamkygiqaawc); ocykqucykqysewkc: $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wpConfigPath, $ewgwqamkygiqaawc); gwggseoomcggqiim: osiuigcwawuayisk: } public function awyuskaumkmciiia($eqgoocgaqwqcimie) : string { $aqykuigiuwmmcieu = ''; if (is_bool($eqgoocgaqwqcimie)) { goto koksqyyscgosmgua; } if (is_array($eqgoocgaqwqcimie)) { goto iciwkuugsssieams; } if (!is_string($eqgoocgaqwqcimie)) { goto sqsawqgiyogosigw; } $aqykuigiuwmmcieu = "\47{$eqgoocgaqwqcimie}\47"; sqsawqgiyogosigw: goto weoyykiwcagymoms; iciwkuugsssieams: $aqykuigiuwmmcieu = "\x5b"; foreach ($eqgoocgaqwqcimie as $uusmaiomayssaecw => $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->awyuskaumkmciiia($igqsaukqcqscimok); $aqykuigiuwmmcieu .= "\47{$uusmaiomayssaecw}\x27\x20\x3d\x3e\x20{$igqsaukqcqscimok}\x2c"; cmwgwwgycwmmssak: } iyayoqqcasquscwy: $aqykuigiuwmmcieu .= "\x5d"; weoyykiwcagymoms: goto yyckoawemeecakki; koksqyyscgosmgua: $aqykuigiuwmmcieu = $eqgoocgaqwqcimie ? "\x74\162\x75\x65" : "\x66\x61\x6c\x73\x65"; yyckoawemeecakki: return $aqykuigiuwmmcieu; } public function oemywwmmmiywiqai(string $uusmaiomayssaecw = '') { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $icwicymcioeyeyek); } public function gegaecyuyguksqwi(string $aiieyweysaukqemc, string $qqaosycmgicuwwga) : array { $cmkqisoeyioisqaw = []; $yqesweoggywuqsec = new Finder(); $yqesweoggywuqsec->files()->in($qqaosycmgicuwwga)->name("\x2a\56\160\x68\x70"); foreach ($yqesweoggywuqsec as $egkyssmuqcwaciya) { $yooeiwgeaoeyusyy = $egkyssmuqcwaciya->cwecyoawmksmouqm()->getPathname(); $uomewyckeuqoqocu = explode(str_replace("\134", "\x2f", $aiieyweysaukqemc), $yooeiwgeaoeyusyy); $uucsugkcsciausuk = rtrim($aiieyweysaukqemc, "\134") . str_replace(["\x2e\160\150\x70", "\x2f"], ['', "\x5c"], array_pop($uomewyckeuqoqocu)); if (!class_exists($uucsugkcsciausuk)) { goto iycmcucyyqgqaiwa; } try { if ($this->cmmaeeeoaaeqqqmm($uucsugkcsciausuk, "\151\163\x41\142\163\164\x72\141\143\x74", true)) { goto qsoeqiaiaaksgcik; } $cmkqisoeyioisqaw[$uucsugkcsciausuk] = new $uucsugkcsciausuk(); qsoeqiaiaaksgcik: } catch (Exception $iewosgggaueeyymg) { goto umkuoiowcowgywug; } iycmcucyyqgqaiwa: umkuoiowcowgywug: } qyisaqamyeauiyws: return $cmkqisoeyioisqaw; } }
