<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f16ae3d454f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Asset; use Pmpr\Common\Foundation\Data\Component as ComponentData; use DirectoryIterator; use Exception; class Component extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\x6d\x70\x72\x5f\x75\x70\x64\141\164\145\137\143\157\155\160\157\156\145\156\x74", [$this, "\167\x61\x71\x77\x65\163\x75\x67\x71\163\165\143\163\x6b\147\x79"])->qcsmikeggeemccuu("\x70\155\x70\x72\137\141\143\x74\151\166\141\164\145\137\x63\157\x6d\160\x6f\x6e\x65\x6e\x74", [$this, "\167\x61\x71\x77\x65\x73\165\147\x71\163\x75\143\x73\153\x67\171"])->qcsmikeggeemccuu("\160\155\x70\162\137\155\157\166\x65\137\x73\x74\x61\164\x69\x63\137\141\163\163\145\164\x73", [$this, "\x73\x6d\x61\x6f\141\141\147\143\x61\x65\x67\165\x71\153\x6d\141"]); $this->waqewsckuayqguos("\155\x6f\166\x65\137\143\x6f\155\x70\157\x6e\145\156\x74\x5f\x73\x74\x61\x74\x69\x63\x5f\141\163\163\x65\164", [$this, "\x77\141\161\x77\x65\x73\165\147\x71\x73\165\x63\x73\153\x67\171"]); } public function smaoaagcaeguqkma() { $mqkkuqaimswumeww = $this->isyyiqwsgyieiqgu(); foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $this->waqwesugqsucskgy($wksoawcgagcgoask); eiwigiaqmiwyakck: } quauyiscsiqskwie: } public function waqwesugqsucskgy($wksoawcgagcgoask) { if (!$wksoawcgagcgoask instanceof ComponentData) { goto iyqmssemqiauuqqc; } $wmqsyyyeksgsmmya = $wksoawcgagcgoask; goto usoowaiwsaiesgem; iyqmssemqiauuqqc: $wmqsyyyeksgsmmya = $this->eeqqugcowsqysask($wksoawcgagcgoask); if ($wmqsyyyeksgsmmya instanceof ComponentData) { goto yauqmogucwsigqeq; } $wmqsyyyeksgsmmya = $this->mqucqomkmisceawy($wksoawcgagcgoask); yauqmogucwsigqeq: usoowaiwsaiesgem: if (!$wmqsyyyeksgsmmya) { goto qasmomuqokkmywyk; } $gmmcquomuuyaqgae = untrailingslashit($wmqsyyyeksgsmmya->ikeqsmumgwwuqmkw()) . "\57\142\x75\151\x6c\144"; if ($this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($gmmcquomuuyaqgae)) { goto mkeuieqqyqegogsq; } goto cqquqgcesyumsseu; mkeuieqqyqegogsq: $this->aswegoaiwseumiss($wmqsyyyeksgsmmya->aiqioscoyukqgsgw(), $gmmcquomuuyaqgae); cqquqgcesyumsseu: qasmomuqokkmywyk: } public function aswegoaiwseumiss($ymqmyyeuycgmigyo, $iakkeikwceeomgyq) { if (!($cyaeoagyqcqyqgmk = $this->miocmcoykayoyyau()->qmwkoewmiweimaqe())) { goto osuyekmuuwmgkwca; } if (is_array($iakkeikwceeomgyq)) { goto cysoogqmuikoisqy; } if (!is_string($iakkeikwceeomgyq)) { goto wewsckyqeeoeewmu; } $this->ikwescksgqksogek($ymqmyyeuycgmigyo, $iakkeikwceeomgyq, $cyaeoagyqcqyqgmk); wewsckyqeeoeewmu: goto aagceqeeqogaqaes; cysoogqmuikoisqy: foreach ($iakkeikwceeomgyq as $miawkwqioaeasiig => $eimoeciqauiqeose) { $this->ikwescksgqksogek("{$ymqmyyeuycgmigyo}\x2f{$miawkwqioaeasiig}", $eimoeciqauiqeose, $cyaeoagyqcqyqgmk); ksuqymwomimwkqyw: } oocciiqymkucsegu: aagceqeeqogaqaes: osuyekmuuwmgkwca: } public function ikwescksgqksogek($ymqmyyeuycgmigyo, $iakkeikwceeomgyq, $yaeakkosskocswae) : bool { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($ymqmyyeuycgmigyo && $iiaumsgauuyeqksw->exists($iakkeikwceeomgyq) && !$iiaumsgauuyeqksw->uuegkqwagymmusiy($iakkeikwceeomgyq)) { goto yuwawokiuiimecqy; } $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->info("\143\x61\156\40\156\157\164\x20\x63\157\x70\171\x20\x6f\x72\x20\x63\x72\x65\141\x74\145\40\x73\x79\x6d\154\x69\x6e\153\x20\146\x6f\162\x20{$ymqmyyeuycgmigyo}"); goto sqameksmiwwkyucq; yuwawokiuiimecqy: $iwgkmecgwgawukkw = $iiaumsgauuyeqksw->oquguuiseiwkawkw("{$yaeakkosskocswae}\57{$ymqmyyeuycgmigyo}\x2f", null, false); if ($this->uqqemaqmsyaswqme($iakkeikwceeomgyq, $iwgkmecgwgawukkw)) { goto qsqwwcgikmcoikkg; } $iiaumsgauuyeqksw->remove($iwgkmecgwgawukkw); $this->caokeucsksukesyo()->mskuyeumceaigegs()->info("\x63\141\156\x20\156\157\x74\40\143\157\160\171\x20\x6f\162\x20\x73\171\x6d\154\151\156\153\40\163\x6f\x20\x6c\x65\164\47\x73\x20\x72\x65\155\157\166\x65\40\x69\164\72\x20{$ymqmyyeuycgmigyo}"); $kigowwqauiumummw = false; goto miiqgcgyyuwocgay; qsqwwcgikmcoikkg: $kigowwqauiumummw = true; $this->ewcsyqaaigkicgse("{$ymqmyyeuycgmigyo}\x5f\141\163\x73\x65\164\137\x6d\x6f\x76\145\144\137\x73\165\x63\143\145\x73\x73\x66\165\154\154\x79", $this); miiqgcgyyuwocgay: sqameksmiwwkyucq: return $kigowwqauiumummw; } public function uqqemaqmsyaswqme($iakkeikwceeomgyq, $ccamueccusigaaio) : bool { $kigowwqauiumummw = true; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); $iiaumsgauuyeqksw = $miiyyswuessymmwe->kcciqwskewsuaemk(); $oammesyieqmwuwyi = $miiyyswuessymmwe->kiygcugekegoqauw($iakkeikwceeomgyq); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof DirectoryIterator) { goto cmqwceuukuwoiwek; } $wkcwykowmmmwioqs = $miiyyswuessymmwe->mawoacksgosuccme($igqsaukqcqscimok); if ($miiyyswuessymmwe->qkuqsuugayciskek($igqsaukqcqscimok)) { goto ecmwwosseekiuagg; } $iwgkmecgwgawukkw = "{$ccamueccusigaaio}\57{$wkcwykowmmmwioqs}"; if ($miiyyswuessymmwe->oagwcgcemwwykokc($igqsaukqcqscimok)) { goto cqaquqywymqyymqs; } if (in_array($miiyyswuessymmwe->csksiiecqkeecwqm($igqsaukqcqscimok), ["\x70\150\x70", "\163\x63\x73\x73"])) { goto euiecommumccmsoy; } $mkomwsiykqigmqca = $miiyyswuessymmwe->amqagusacuuuaswg($igqsaukqcqscimok); $uiuoegigmiykqkuc = "{$mkomwsiykqigmqca}\x2f{$wkcwykowmmmwioqs}"; try { $iiaumsgauuyeqksw->copy($uiuoegigmiykqkuc, $iwgkmecgwgawukkw); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\103\x61\156\40\x6e\157\x74\40\x63\x6f\160\x79\x20\x25\163\40\164\157\40\45\x73\x20\x62\x65\143\x61\x75\163\x65\x20\157\x66\x20\45\x73", $uiuoegigmiykqkuc, $iwgkmecgwgawukkw, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); try { $iiaumsgauuyeqksw->symlink($uiuoegigmiykqkuc, $iwgkmecgwgawukkw); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x43\141\156\x20\x6e\x6f\164\40\x63\x72\x65\x61\164\x65\40\x73\171\155\x6c\x69\x6e\153\40\x62\x65\143\x61\x75\x73\145\40\x6f\146\40\x25\163\x2c\40\154\145\x74\x27\x73\40\x63\x6f\160\171\40\151\164\x2e", $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); goto yeugqaigsaakooak; } } euiecommumccmsoy: goto ecckmmswcugmikea; cqaquqywymqyymqs: $amwwiceekosasokk = "{$iakkeikwceeomgyq}\x2f{$wkcwykowmmmwioqs}"; $iiaumsgauuyeqksw->mkdir($ccamueccusigaaio); $this->uqqemaqmsyaswqme($amwwiceekosasokk, $iwgkmecgwgawukkw); ecckmmswcugmikea: ecmwwosseekiuagg: cmqwceuukuwoiwek: asemcaymsukcaawm: } yeugqaigsaakooak: return $kigowwqauiumummw; } }
