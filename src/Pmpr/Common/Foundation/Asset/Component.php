<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9eb1f4f62f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Asset; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Data\Component as ComponentData; use DirectoryIterator; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class Component extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('pmpr_move_static_assets', [$this, 'smaoaagcaeguqkma'])->qcsmikeggeemccuu('pmpr_component_installed', [$this, 'waqwesugqsucskgy'], 10, 3)->qcsmikeggeemccuu('pmpr_component_activated', [$this, 'waqwesugqsucskgy'], 10, 3); $this->waqewsckuayqguos('move_component_static_asset', [$this, 'waqwesugqsucskgy']); } public function smaoaagcaeguqkma() { $mqkkuqaimswumeww = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->kasiqqyyaswsgics(); foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $this->waqwesugqsucskgy($wksoawcgagcgoask); } } public function waqwesugqsucskgy($wksoawcgagcgoask, $sqeykgyoooqysmca = null, $mkomwsiykqigmqca = null) { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if (!$wksoawcgagcgoask instanceof ComponentData) { $wmqsyyyeksgsmmya = $qgiimcueymgqcsai->omywiyesskmggqqa($wksoawcgagcgoask); if (!$wmqsyyyeksgsmmya instanceof ComponentData) { $wmqsyyyeksgsmmya = $qgiimcueymgqcsai->gsaceacmqiuqoouo($wksoawcgagcgoask); } } else { $wmqsyyyeksgsmmya = $wksoawcgagcgoask; } if ($wmqsyyyeksgsmmya) { $sqeykgyoooqysmca = $wmqsyyyeksgsmmya->gueasuouwqysmomu(); $mkomwsiykqigmqca = $wmqsyyyeksgsmmya->ikeqsmumgwwuqmkw(); $wksoawcgagcgoask = $wmqsyyyeksgsmmya->eeucessuemoysgqg(); } if (Constants::kicaioiokgkqqywe === $sqeykgyoooqysmca && $mkomwsiykqigmqca && $wksoawcgagcgoask) { $cyaeoagyqcqyqgmk = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->qmwkoewmiweimaqe(); $this->uqqemaqmsyaswqme($mkomwsiykqigmqca . '/screenshot.png', "{$cyaeoagyqcqyqgmk}/{$wksoawcgagcgoask}.png"); } if ($wmqsyyyeksgsmmya) { $gmmcquomuuyaqgae = untrailingslashit($wmqsyyyeksgsmmya->ikeqsmumgwwuqmkw()) . '/build'; if ($this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($gmmcquomuuyaqgae)) { $this->aswegoaiwseumiss($wmqsyyyeksgsmmya->aiqioscoyukqgsgw(), $gmmcquomuuyaqgae); } else { } } } public function aswegoaiwseumiss($ymqmyyeuycgmigyo, $iakkeikwceeomgyq) { if ($cyaeoagyqcqyqgmk = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->qmwkoewmiweimaqe()) { if (is_array($iakkeikwceeomgyq)) { foreach ($iakkeikwceeomgyq as $miawkwqioaeasiig => $eimoeciqauiqeose) { $this->ikwescksgqksogek("{$ymqmyyeuycgmigyo}/{$miawkwqioaeasiig}", $eimoeciqauiqeose, $cyaeoagyqcqyqgmk); } } else { if (is_string($iakkeikwceeomgyq)) { $this->ikwescksgqksogek($ymqmyyeuycgmigyo, $iakkeikwceeomgyq, $cyaeoagyqcqyqgmk); } } } } public function ikwescksgqksogek($ymqmyyeuycgmigyo, $iakkeikwceeomgyq, $yaeakkosskocswae) : bool { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($ymqmyyeuycgmigyo && $iiaumsgauuyeqksw->exists($iakkeikwceeomgyq) && !$iiaumsgauuyeqksw->uuegkqwagymmusiy($iakkeikwceeomgyq)) { $iwgkmecgwgawukkw = $iiaumsgauuyeqksw->oquguuiseiwkawkw("{$yaeakkosskocswae}/{$ymqmyyeuycgmigyo}/", null, false); if ($this->uqqemaqmsyaswqme($iakkeikwceeomgyq, $iwgkmecgwgawukkw)) { $kigowwqauiumummw = true; $this->ewcsyqaaigkicgse("{$ymqmyyeuycgmigyo}_asset_moved_successfully", $this); } else { $iiaumsgauuyeqksw->remove($iwgkmecgwgawukkw); $this->caokeucsksukesyo()->mskuyeumceaigegs()->info("can not copy or symlink so let's remove it: {$ymqmyyeuycgmigyo}"); $kigowwqauiumummw = false; } } else { $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->info("can not copy or create symlink for {$ymqmyyeuycgmigyo}"); } return $kigowwqauiumummw; } public function uqqemaqmsyaswqme($iakkeikwceeomgyq, $ccamueccusigaaio) : bool { $kigowwqauiumummw = true; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); $iiaumsgauuyeqksw = $miiyyswuessymmwe->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->asysewkmisimumay($iakkeikwceeomgyq) && $iiaumsgauuyeqksw->mecmkmogggamegic($iakkeikwceeomgyq)) { return $iiaumsgauuyeqksw->copy($iakkeikwceeomgyq, $ccamueccusigaaio); } $oammesyieqmwuwyi = $miiyyswuessymmwe->kiygcugekegoqauw($iakkeikwceeomgyq); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($igqsaukqcqscimok instanceof DirectoryIterator) { $wkcwykowmmmwioqs = $miiyyswuessymmwe->mawoacksgosuccme($igqsaukqcqscimok); if (!$miiyyswuessymmwe->qkuqsuugayciskek($igqsaukqcqscimok)) { $iwgkmecgwgawukkw = "{$ccamueccusigaaio}/{$wkcwykowmmmwioqs}"; if ($miiyyswuessymmwe->oagwcgcemwwykokc($igqsaukqcqscimok)) { $amwwiceekosasokk = "{$iakkeikwceeomgyq}/{$wkcwykowmmmwioqs}"; $iiaumsgauuyeqksw->mkdir($ccamueccusigaaio); $this->uqqemaqmsyaswqme($amwwiceekosasokk, $iwgkmecgwgawukkw); } else { if (!in_array($miiyyswuessymmwe->csksiiecqkeecwqm($igqsaukqcqscimok), ['php', 'scss'])) { $mkomwsiykqigmqca = $miiyyswuessymmwe->amqagusacuuuaswg($igqsaukqcqscimok); $uiuoegigmiykqkuc = "{$mkomwsiykqigmqca}/{$wkcwykowmmmwioqs}"; try { $iiaumsgauuyeqksw->copy($uiuoegigmiykqkuc, $iwgkmecgwgawukkw); } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf('Can not copy %s to %s because of %s', $uiuoegigmiykqkuc, $iwgkmecgwgawukkw, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); try { $iiaumsgauuyeqksw->symlink($uiuoegigmiykqkuc, $iwgkmecgwgawukkw); } catch (Exception $wgaoewqkwgomoaai) { $kigowwqauiumummw = false; $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf('Can not create symlink because of %s, let\'s copy it.', $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai))); break; } } } } } } } return $kigowwqauiumummw; } }
