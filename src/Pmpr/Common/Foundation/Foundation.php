<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f16ae3d454f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Ajax\Ajax; use Pmpr\Common\Foundation\Asset\Asset; use Pmpr\Common\Foundation\Backend\Backend; use Pmpr\Common\Foundation\Container\CommonInitiator; use Pmpr\Common\Foundation\FormGenerator\FormGenerator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Notice\Notice; use Pmpr\Common\Foundation\MobileApp\MobileApp; use Pmpr\Common\Foundation\ORM\ORM; use Pmpr\Common\Foundation\Plugin\Plugin; use Pmpr\Common\Foundation\Template\Template; class Foundation extends CommonInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x46\157\165\x6e\x64\x61\x74\x69\x6f\x6e", PR__CMN__FOUNDATION); }, Constants::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { $this->cyowaaeywssoooeo(); Asset::ksyueceqagwomguk(); Notice::ksyueceqagwomguk(); Template::ksyueceqagwomguk(); MobileApp::ksyueceqagwomguk(); if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew, false)) { goto cecuyayqoioasumi; } Config::ksyueceqagwomguk(); cecuyayqoioasumi: if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto qogqewiwmwiwskgm; } if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto qiaqsassksqiuyae; } Ajax::ksyueceqagwomguk(); qiaqsassksqiuyae: ORM::ksyueceqagwomguk(); Plugin::ksyueceqagwomguk(); Backend::ksyueceqagwomguk(); Taxonomy::ksyueceqagwomguk(); WPSetting::ksyueceqagwomguk(); FormGenerator::symcgieuakksimmu(); qogqewiwmwiwskgm: $koumykuuckgkagkk = $this->couwksyewgyeooqe()->aksiegmauqiaueis(); $esaqeawoigqgagum = "{$koumykuuckgkagkk}\57\167\157\157\143\157\x6d\x6d\145\162\x63\x65\x2f\141\x63\x74\151\x6f\x6e\55\x73\143\x68\x65\144\165\154\145\x72\57\x61\x63\x74\151\x6f\x6e\55\x73\143\x68\145\x64\x75\154\145\x72\56\160\150\x70"; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto qgoiooayqmqqsiok; } require_once $esaqeawoigqgagum; qgoiooayqmqqsiok: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\x75\167\x69\153\x69\x73\171\165\x65\x75\153\x73\161\x65\x6d\x61"]); $this->waqewsckuayqguos("\x62\x65\x66\157\x72\x65\137\x65\x6e\x71\165\145\x75\145\x5f\x61\163\x73\x65\164\x73", [$this, "\145\156\161\165\145\165\145"]); } public function cyowaaeywssoooeo() { $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); $wmwyaayqcewkyqsu = $miiyyswuessymmwe->cmaecekuqkwmemms("\x41\x42\x53\x50\x41\x54\x48"); if (!$wmwyaayqcewkyqsu) { goto sciwggaeogcoesiu; } $yaeakkosskocswae = $miiyyswuessymmwe->koymmiyegyskqgck(Constants::imiuimigqgweqskc, untrailingslashit($wmwyaayqcewkyqsu) . "\x2f\x73", true, false); if (!$yaeakkosskocswae) { goto csscmcacoikwsecs; } $miiyyswuessymmwe->wwckmeoskuagomki(Constants::ugwqowmumooowags, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\57\x73")); if (!($auyckgicyqiigwoo = $miiyyswuessymmwe->cmaecekuqkwmemms(Constants::ugwqowmumooowags))) { goto asmecuqiyyswueqe; } if (!$miiyyswuessymmwe->koymmiyegyskqgck(Constants::euecgwaikowgaiik, $yaeakkosskocswae . "\x2f\x62", true, false)) { goto qwigomakwmyiwkgo; } $miiyyswuessymmwe->wwckmeoskuagomki(Constants::secgucuimqkkkqky, untrailingslashit($auyckgicyqiigwoo) . "\57\x62"); qwigomakwmyiwkgo: if (!$miiyyswuessymmwe->koymmiyegyskqgck(Constants::sekmkiomcqugwsga, $yaeakkosskocswae . "\57\151\x6d\x67", true, false)) { goto myoicgcuugciueis; } $miiyyswuessymmwe->wwckmeoskuagomki(Constants::ocmeykuiimmiqesw, untrailingslashit($auyckgicyqiigwoo) . "\x2f\151\x6d\147"); myoicgcuugciueis: asmecuqiyyswueqe: csscmcacoikwsecs: $wyocmuqcwyskkcyo = dirname(untrailingslashit($wmwyaayqcewkyqsu)) . "\57\x62\141\163\145"; $miiyyswuessymmwe->wwckmeoskuagomki(Constants::mcqosyscuoekcugy, $wyocmuqcwyskkcyo); if (!($ecuwmcmeucuiaamu = $miiyyswuessymmwe->koymmiyegyskqgck(Constants::suwwawausooyaiww, untrailingslashit($wyocmuqcwyskkcyo) . "\57\166\x61\x72"))) { goto mkwskuycuyguqqok; } $qeswykqykqewiqmi = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->akoiqeemqgmakecu(); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::awgwumwwguikwqky, "{$ecuwmcmeucuiaamu}\x2f\143\x61\143\x68\x65"); if ($qeswykqykqewiqmi) { goto cuykwgmswkskqkyi; } $miiyyswuessymmwe->koymmiyegyskqgck(Constants::mcmyyuqyqicguccu, "{$ecuwmcmeucuiaamu}\57\x6c\x6f\147"); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::umciwouwwsyqumae, "{$ecuwmcmeucuiaamu}\x2f\143\141\143\x68\145"); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::gyiksueiaeykqaqq, "{$ecuwmcmeucuiaamu}\x2f\x63\x6f\156\146\151\x67"); goto kuicqywysciceggs; cuykwgmswkskqkyi: $miiyyswuessymmwe->koymmiyegyskqgck(Constants::mcmyyuqyqicguccu, "{$ecuwmcmeucuiaamu}\57{$qeswykqykqewiqmi}\57\x6c\x6f\x67"); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::umciwouwwsyqumae, "{$ecuwmcmeucuiaamu}\x2f{$qeswykqykqewiqmi}\57\x63\x61\143\x68\x65"); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::gyiksueiaeykqaqq, "{$ecuwmcmeucuiaamu}\x2f{$qeswykqykqewiqmi}\x2f\143\x6f\156\x66\x69\147"); kuicqywysciceggs: mkwskuycuyguqqok: sciwggaeogcoesiu: } public function uwikisyueuksqema() { if (!($msyoeiaqaaseqiaw = (array) $this->ocksiywmkyaqseou("\x72\145\x71\x75\x69\x72\145\x5f\x64\x69\x72\x65\143\x74\x6f\162\x69\x65\x73", []))) { goto kiqogmwcgcamwiig; } $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) { if (!(is_string($smaiamkswqkisawm) && !$iiaumsgauuyeqksw->exists($smaiamkswqkisawm))) { goto yowsmsiyimmimemc; } $iiaumsgauuyeqksw->mkdir($smaiamkswqkisawm); yowsmsiyimmimemc: kwagwqyusyiyoaqs: } eqkauqciwewmgeoi: kiqogmwcgcamwiig: } public function enqueue($wuomgsuaoscwgsmq) { $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); $wqsyimmcqogaosaq = ["\154\157\143\x61\x6c\145" => $locale, "\x61\152\x61\x78\x75\x72\x6c" => $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gsmocsuquwwywuwc(), "\x6c\141\156\147\x75\x61\x67\x65" => str_replace("\x5f", "\55", $locale), "\156\157\x6e\143\145\137\x69\x64" => Constants::kuimsckuseaswiga, "\x69\163\x5f\162\164\154" => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->gqesusmmigggsqai()]; $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if ($wuomgsuaoscwgsmq === Constants::qiaqeaemuukkikmi) { goto sqiciiuwmykocycc; } if (!($wuomgsuaoscwgsmq === Constants::iickqyckyaqcaokm)) { goto iomcaiwewsawiamu; } $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\143\157\157\153\x69\145\x5f\x67\165\x65\x73\x74\x5f\x69\x64" => Constants::qguaysoacmoeugio]); iomcaiwewsawiamu: goto eequksumcoogyoem; sqiciiuwmykocycc: $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\x64\x65\142\x75\147" => $uuwwyaeymswgsgsi->esoowymaimwcuecq(), "\x73\x70\151\x6e\156\145\162" => $gosmywauqawmcyga->kqmkicmuscsgqeoi(), "\146\x69\170\x65\x64\x5f\x73\x70\x69\x6e\x6e\145\162" => $gosmywauqawmcyga->kqmkicmuscsgqeoi(["\x70\x6f\163\151\x74\151\x6f\x6e" => "\x66\x69\170\x65\144"]), Constants::ismwycwsasweqomi => $gosmywauqawmcyga->icqkogwskuwscskk()]); eequksumcoogyoem: $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->gqcsyicawqkimcau($wqsyimmcqogaosaq); } }
