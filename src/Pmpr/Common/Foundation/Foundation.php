<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Ajax\Ajax; use Pmpr\Common\Foundation\Asset\Asset; use Pmpr\Common\Foundation\Backend\Backend; use Pmpr\Common\Foundation\Container\CommonInitiator; use Pmpr\Common\Foundation\FormGenerator\FormGenerator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Notice\Notice; use Pmpr\Common\Foundation\MobileApp\MobileApp; use Pmpr\Common\Foundation\ORM\ORM; use Pmpr\Common\Foundation\Plugin\Plugin; use Pmpr\Common\Foundation\Template\Template; class Foundation extends CommonInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\106\x6f\165\156\144\141\164\x69\x6f\156", PR__CMN__FOUNDATION); }, Constants::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { $this->cyowaaeywssoooeo(); Asset::ksyueceqagwomguk(); Notice::ksyueceqagwomguk(); Template::ksyueceqagwomguk(); MobileApp::ksyueceqagwomguk(); if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew, false)) { goto cecuyayqoioasumi; } Config::ksyueceqagwomguk(); cecuyayqoioasumi: if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto qogqewiwmwiwskgm; } if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto qiaqsassksqiuyae; } Ajax::ksyueceqagwomguk(); qiaqsassksqiuyae: ORM::ksyueceqagwomguk(); Plugin::ksyueceqagwomguk(); Backend::ksyueceqagwomguk(); Taxonomy::ksyueceqagwomguk(); WPSetting::ksyueceqagwomguk(); FormGenerator::symcgieuakksimmu(); qogqewiwmwiwskgm: $koumykuuckgkagkk = $this->couwksyewgyeooqe()->aksiegmauqiaueis(); $esaqeawoigqgagum = "{$koumykuuckgkagkk}\x2f\x77\x6f\157\143\157\x6d\x6d\145\162\143\145\57\141\x63\164\x69\x6f\156\55\163\x63\x68\145\x64\x75\154\x65\162\57\x61\143\x74\151\157\156\x2d\x73\143\x68\145\144\x75\154\x65\x72\x2e\x70\150\160"; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto qgoiooayqmqqsiok; } require_once $esaqeawoigqgagum; qgoiooayqmqqsiok: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\165\x77\151\153\x69\x73\x79\165\x65\165\153\x73\x71\145\x6d\x61"]); $this->waqewsckuayqguos("\142\x65\x66\157\x72\145\x5f\x65\x6e\161\165\145\x75\x65\x5f\141\163\x73\x65\x74\x73", [$this, "\x65\156\x71\165\x65\x75\145"]); } public function cyowaaeywssoooeo() { $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); $wmwyaayqcewkyqsu = $miiyyswuessymmwe->cmaecekuqkwmemms("\101\x42\x53\x50\x41\x54\110"); if (!$wmwyaayqcewkyqsu) { goto sciwggaeogcoesiu; } $yaeakkosskocswae = $miiyyswuessymmwe->koymmiyegyskqgck(Constants::imiuimigqgweqskc, untrailingslashit($wmwyaayqcewkyqsu) . "\57\163", true, false); if (!$yaeakkosskocswae) { goto csscmcacoikwsecs; } $miiyyswuessymmwe->wwckmeoskuagomki(Constants::ugwqowmumooowags, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy("\57\163")); if (!($auyckgicyqiigwoo = $miiyyswuessymmwe->cmaecekuqkwmemms(Constants::ugwqowmumooowags))) { goto asmecuqiyyswueqe; } if (!$miiyyswuessymmwe->koymmiyegyskqgck(Constants::euecgwaikowgaiik, $yaeakkosskocswae . "\57\142", true, false)) { goto qwigomakwmyiwkgo; } $miiyyswuessymmwe->wwckmeoskuagomki(Constants::secgucuimqkkkqky, untrailingslashit($auyckgicyqiigwoo) . "\x2f\x62"); qwigomakwmyiwkgo: if (!$miiyyswuessymmwe->koymmiyegyskqgck(Constants::sekmkiomcqugwsga, $yaeakkosskocswae . "\x2f\151\x6d\147", true, false)) { goto myoicgcuugciueis; } $miiyyswuessymmwe->wwckmeoskuagomki(Constants::ocmeykuiimmiqesw, untrailingslashit($auyckgicyqiigwoo) . "\57\x69\x6d\x67"); myoicgcuugciueis: asmecuqiyyswueqe: csscmcacoikwsecs: $wyocmuqcwyskkcyo = dirname(untrailingslashit($wmwyaayqcewkyqsu)) . "\57\x62\141\x73\145"; $miiyyswuessymmwe->wwckmeoskuagomki(Constants::mcqosyscuoekcugy, $wyocmuqcwyskkcyo); if (!($ecuwmcmeucuiaamu = $miiyyswuessymmwe->koymmiyegyskqgck(Constants::suwwawausooyaiww, untrailingslashit($wyocmuqcwyskkcyo) . "\x2f\x76\141\162"))) { goto mkwskuycuyguqqok; } $qeswykqykqewiqmi = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->akoiqeemqgmakecu(); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::awgwumwwguikwqky, "{$ecuwmcmeucuiaamu}\57\143\x61\x63\150\145"); if ($qeswykqykqewiqmi) { goto cuykwgmswkskqkyi; } $miiyyswuessymmwe->koymmiyegyskqgck(Constants::mcmyyuqyqicguccu, "{$ecuwmcmeucuiaamu}\x2f\154\157\147"); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::umciwouwwsyqumae, "{$ecuwmcmeucuiaamu}\57\143\x61\143\x68\145"); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::gyiksueiaeykqaqq, "{$ecuwmcmeucuiaamu}\x2f\x63\x6f\x6e\x66\x69\x67"); goto kuicqywysciceggs; cuykwgmswkskqkyi: $miiyyswuessymmwe->koymmiyegyskqgck(Constants::mcmyyuqyqicguccu, "{$ecuwmcmeucuiaamu}\x2f{$qeswykqykqewiqmi}\x2f\x6c\157\147"); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::umciwouwwsyqumae, "{$ecuwmcmeucuiaamu}\x2f{$qeswykqykqewiqmi}\x2f\x63\141\x63\150\145"); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::gyiksueiaeykqaqq, "{$ecuwmcmeucuiaamu}\57{$qeswykqykqewiqmi}\57\143\x6f\x6e\x66\151\147"); kuicqywysciceggs: mkwskuycuyguqqok: sciwggaeogcoesiu: } public function uwikisyueuksqema() { if (!($msyoeiaqaaseqiaw = (array) $this->ocksiywmkyaqseou("\x72\145\x71\165\151\x72\145\x5f\144\151\x72\145\x63\x74\x6f\x72\151\x65\163", []))) { goto kiqogmwcgcamwiig; } $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) { if (!(is_string($smaiamkswqkisawm) && !$iiaumsgauuyeqksw->exists($smaiamkswqkisawm))) { goto yowsmsiyimmimemc; } $iiaumsgauuyeqksw->mkdir($smaiamkswqkisawm); yowsmsiyimmimemc: kwagwqyusyiyoaqs: } eqkauqciwewmgeoi: kiqogmwcgcamwiig: } public function enqueue($wuomgsuaoscwgsmq) { $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); $wqsyimmcqogaosaq = ["\x6c\157\x63\141\154\145" => $locale, "\141\152\x61\x78\x75\x72\154" => $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gsmocsuquwwywuwc(), "\154\141\156\147\x75\141\147\x65" => str_replace("\137", "\x2d", $locale), "\156\x6f\156\x63\145\137\151\x64" => Constants::kuimsckuseaswiga, "\x69\163\x5f\162\x74\154" => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->gqesusmmigggsqai()]; $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if ($wuomgsuaoscwgsmq === Constants::qiaqeaemuukkikmi) { goto sqiciiuwmykocycc; } if (!($wuomgsuaoscwgsmq === Constants::iickqyckyaqcaokm)) { goto iomcaiwewsawiamu; } $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\143\157\x6f\153\x69\145\137\x67\x75\145\163\164\137\151\144" => Constants::qguaysoacmoeugio]); iomcaiwewsawiamu: goto eequksumcoogyoem; sqiciiuwmykocycc: $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ["\144\145\142\165\x67" => $uuwwyaeymswgsgsi->esoowymaimwcuecq(), "\163\160\x69\156\156\x65\x72" => $gosmywauqawmcyga->kqmkicmuscsgqeoi(), "\x66\x69\x78\145\144\137\x73\x70\x69\156\156\x65\x72" => $gosmywauqawmcyga->kqmkicmuscsgqeoi(["\160\157\x73\x69\164\x69\157\156" => "\146\151\170\x65\144"]), Constants::ismwycwsasweqomi => $gosmywauqawmcyga->icqkogwskuwscskk()]); eequksumcoogyoem: $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->gqcsyicawqkimcau($wqsyimmcqogaosaq); } }
