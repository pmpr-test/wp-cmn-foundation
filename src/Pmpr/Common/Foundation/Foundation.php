<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c8341d2d030             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\ORM\ORM; use Pmpr\Common\Foundation\Ajax\Ajax; use Pmpr\Common\Foundation\Asset\Asset; use Pmpr\Common\Foundation\Backend\Backend; use Pmpr\Common\Foundation\Container\CommonInitiator; use Pmpr\Common\Foundation\FormGenerator\Backend\Backend as FormGeneratorBackend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Notice\Notice; use Pmpr\Common\Foundation\MobileApp\MobileApp; use Pmpr\Common\Foundation\Plugin\Plugin; use Pmpr\Common\Foundation\Template\Twig\Twig; class Foundation extends CommonInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Foundation', PR__CMN__FOUNDATION); }, Constants::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { $this->cyowaaeywssoooeo(); Asset::ksyueceqagwomguk(); Notice::ksyueceqagwomguk(); Plugin::ksyueceqagwomguk(); Twig::ksyueceqagwomguk(); MobileApp::ksyueceqagwomguk(); if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew, false)) { Config::ksyueceqagwomguk(); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(['pr_admin_get', 'pr_frontend_get'])) { Ajax::ksyueceqagwomguk(); } ORM::ksyueceqagwomguk(); Backend::ksyueceqagwomguk(); Taxonomy::ksyueceqagwomguk(); WPSetting::ksyueceqagwomguk(); FormGeneratorBackend::symcgieuakksimmu(); } if ($koumykuuckgkagkk = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aksiegmauqiaueis($this)) { $esaqeawoigqgagum = "{$koumykuuckgkagkk}/woocommerce/action-scheduler/action-scheduler.php"; if ($this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { include_once $esaqeawoigqgagum; } } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'uwikisyueuksqema']); $this->waqewsckuayqguos('before_enqueue_assets', [$this, 'enqueue']); } public function cyowaaeywssoooeo() { $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); $wmwyaayqcewkyqsu = $miiyyswuessymmwe->cmaecekuqkwmemms('ABSPATH'); if ($wmwyaayqcewkyqsu) { $yaeakkosskocswae = $miiyyswuessymmwe->koymmiyegyskqgck(Constants::imiuimigqgweqskc, untrailingslashit($wmwyaayqcewkyqsu) . '/s', true, false); if ($yaeakkosskocswae) { $miiyyswuessymmwe->wwckmeoskuagomki(Constants::ugwqowmumooowags, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy('/s')); if ($auyckgicyqiigwoo = $miiyyswuessymmwe->cmaecekuqkwmemms(Constants::ugwqowmumooowags)) { if ($miiyyswuessymmwe->koymmiyegyskqgck(Constants::euecgwaikowgaiik, $yaeakkosskocswae . '/b', true, false)) { $miiyyswuessymmwe->wwckmeoskuagomki(Constants::secgucuimqkkkqky, untrailingslashit($auyckgicyqiigwoo) . '/b'); } if ($miiyyswuessymmwe->koymmiyegyskqgck(Constants::sekmkiomcqugwsga, $yaeakkosskocswae . '/img', true, false)) { $miiyyswuessymmwe->wwckmeoskuagomki(Constants::ocmeykuiimmiqesw, untrailingslashit($auyckgicyqiigwoo) . '/img'); } } } $wyocmuqcwyskkcyo = dirname(untrailingslashit($wmwyaayqcewkyqsu)) . '/base'; $miiyyswuessymmwe->wwckmeoskuagomki(Constants::mcqosyscuoekcugy, $wyocmuqcwyskkcyo); if ($ecuwmcmeucuiaamu = $miiyyswuessymmwe->koymmiyegyskqgck(Constants::suwwawausooyaiww, untrailingslashit($wyocmuqcwyskkcyo) . '/var')) { $qeswykqykqewiqmi = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->akoiqeemqgmakecu(); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::awgwumwwguikwqky, "{$ecuwmcmeucuiaamu}/cache"); if ($qeswykqykqewiqmi) { $miiyyswuessymmwe->koymmiyegyskqgck(Constants::mcmyyuqyqicguccu, "{$ecuwmcmeucuiaamu}/{$qeswykqykqewiqmi}/log"); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::umciwouwwsyqumae, "{$ecuwmcmeucuiaamu}/{$qeswykqykqewiqmi}/cache"); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::gyiksueiaeykqaqq, "{$ecuwmcmeucuiaamu}/{$qeswykqykqewiqmi}/config"); } else { $miiyyswuessymmwe->koymmiyegyskqgck(Constants::mcmyyuqyqicguccu, "{$ecuwmcmeucuiaamu}/log"); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::umciwouwwsyqumae, "{$ecuwmcmeucuiaamu}/cache"); $miiyyswuessymmwe->koymmiyegyskqgck(Constants::gyiksueiaeykqaqq, "{$ecuwmcmeucuiaamu}/config"); } } } } public function uwikisyueuksqema() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $msyoeiaqaaseqiaw = (array) $this->ocksiywmkyaqseou('require_directories', []); if ($msyoeiaqaaseqiaw) { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) { if (is_string($smaiamkswqkisawm) && !$iiaumsgauuyeqksw->exists($smaiamkswqkisawm)) { $iiaumsgauuyeqksw->mkdir($smaiamkswqkisawm); } } } } } public function enqueue($wuomgsuaoscwgsmq) { $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); $wqsyimmcqogaosaq = ['locale' => $locale, 'ajaxurl' => $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gsmocsuquwwywuwc(), 'language' => str_replace('_', '-', $locale), 'nonce_id' => Constants::kuimsckuseaswiga, 'is_rtl' => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->gqesusmmigggsqai()]; $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if ($wuomgsuaoscwgsmq === Constants::qiaqeaemuukkikmi) { $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ['debug' => $uuwwyaeymswgsgsi->esoowymaimwcuecq(), 'spinner' => $gosmywauqawmcyga->kqmkicmuscsgqeoi(), 'fixed_spinner' => $gosmywauqawmcyga->kqmkicmuscsgqeoi(['position' => 'fixed']), Constants::ismwycwsasweqomi => $gosmywauqawmcyga->icqkogwskuwscskk()]); } else { if ($wuomgsuaoscwgsmq === Constants::iickqyckyaqcaokm) { $wqsyimmcqogaosaq = array_merge($wqsyimmcqogaosaq, ['cookie_guest_id' => Constants::qguaysoacmoeugio]); } } $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->gqcsyicawqkimcau($this, $wqsyimmcqogaosaq); } }
