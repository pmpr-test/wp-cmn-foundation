<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d02140955ac             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Asset; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Data\Source; class Asset extends Container { const ackwsumaskycmoku = 'https://cdnjs.cloudflare.com/ajax/libs'; public function mameiwsayuyquoeq() { Component::ksyueceqagwomguk(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('login_footer', [$this, 'kqcsaqyckosoooyw'])->qcsmikeggeemccuu('admin_footer', [$this, 'wmuyyccsqokgksee'])->qcsmikeggeemccuu('switch_theme', [$this, 'oyyacwsiawqcguwu'])->qcsmikeggeemccuu('wp_footer', [$this, 'soowueeacscemswm'], 999); $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if (!$owaoeyikmqaeegma->mcgoysmkqsqooceq() && !$owaoeyikmqaeegma->goumkccmgysgqueu()) { $this->qcsmikeggeemccuu('wp_enqueue_scripts', [$this, 'wamqmcywecyquske'])->qcsmikeggeemccuu('admin_enqueue_scripts', [$this, 'kesoawuimieggsgw'])->qcsmikeggeemccuu('login_enqueue_scripts', [$this, 'qskmwqecowimimaa']); } $this->waqewsckuayqguos('update_jquery', [$this, 'oowgosmscueymuoy'])->waqewsckuayqguos('add_ajax_nonce', [$this, 'eegcswqggcewuiwc']); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('upload_path', [$this, 'iqyocmkwgkggcaic'])->aqaqisyssqeomwom('upload_url_path', [$this, 'guiecwsmecaaagoa']); $this->cecaguuoecmccuse('style_loader_tag', [$this, 'ecoqooiuymsgakys'], 10, 2)->cecaguuoecmccuse('script_loader_tag', [$this, 'ecoqooiuymsgakys'], 10, 2); } public function ecoqooiuymsgakys($scwiymciagumsuiw, $eueuqacmukymcyya) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $sqeykgyoooqysmca = Constants::qiaqeaemuukkikmi; } else { if ($this->caokeucsksukesyo()->kyqakacqeumicgag()->awgkmqkqkqawmqcu()) { $sqeykgyoooqysmca = Constants::yuguikokwoymmqem; } else { $sqeykgyoooqysmca = Constants::iickqyckyaqcaokm; } } $kqywgoqsmuswammk = 'script'; if (strpos($scwiymciagumsuiw, "src=")) { $yuwymayicwwqiske = $kqywgoqsmuswammk; } else { $kqywgoqsmuswammk = 'link'; $yuwymayicwwqiske = 'style'; } $egsumesakcaaukem = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->yimkcammomikeegq("{$yuwymayicwwqiske}-{$eueuqacmukymcyya}", $sqeykgyoooqysmca); if ($egsumesakcaaukem && $egsumesakcaaukem->qcumqiyomwauswqu()) { $scwiymciagumsuiw = $this->caokeucsksukesyo()->gkksucgseqqemesc()->igmaewykumgwoaoy($scwiymciagumsuiw, [$kqywgoqsmuswammk => $egsumesakcaaukem->aoamooyyyuyiwuoq()]); $scwiymciagumsuiw .= $egsumesakcaaukem->iqowoeuikoyckekq(); } return $scwiymciagumsuiw; } public function guiecwsmecaaagoa($umyygqoywqiyqcoo) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew, false)) { $umyygqoywqiyqcoo = trailingslashit($umyygqoywqiyqcoo) . $eiicaiwgqkgsekce->akoiqeemqgmakecu(); } return $umyygqoywqiyqcoo; } public function iqyocmkwgkggcaic($mkomwsiykqigmqca) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew, false)) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca) . $eiicaiwgqkgsekce->akoiqeemqgmakecu(); $yqqwckyekkwmekec = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if (!$yqqwckyekkwmekec->exists($mkomwsiykqigmqca)) { $yqqwckyekkwmekec->mkdir($mkomwsiykqigmqca); } } return $mkomwsiykqigmqca; } public function oyyacwsiawqcguwu() { $ukwaqgesyueoiswk = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->qmwkoewmiweimaqe(); if ($ukwaqgesyueoiswk) { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->asysewkmisimumay($ukwaqgesyueoiswk)) { $iiaumsgauuyeqksw->remove($ukwaqgesyueoiswk); } } } public function wmuyyccsqokgksee() { $this->eegcswqggcewuiwc(); } public function kqcsaqyckosoooyw() { $this->eegcswqggcewuiwc(); } public function soowueeacscemswm() { $this->eegcswqggcewuiwc(false); } public function kesoawuimieggsgw() { $this->kcuyeigqawkuecak(Constants::qiaqeaemuukkikmi); $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, 'backend-helper', 'backend-helper.js')->okawmmwsiuauwsiu()->jyumyyugiwwiqomk(2)); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->awgyqswkqywwmkye($this, 'admin', 'admin.css'))->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, 'admin', 'admin.js')->jyumyyugiwwiqomk(10)->simswskycwagoeqy()->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi)); $meakksicouekcgoe->oaaywquaycsmykuc(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->kkessyykwcqgecqc() || $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yycwkigueqwacmic()) { $meakksicouekcgoe->asqsuswyqyoecwcc(); $meakksicouekcgoe->qymwusgoassaaacs(); $meakksicouekcgoe->wmuqwaewssekqymw(); } $this->oumuaoowayycuwia(); } public function wamqmcywecyquske() { $this->kcuyeigqawkuecak(Constants::iickqyckyaqcaokm); $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $usyqkyomqcuocgoa = $meakksicouekcgoe->souwykwwmyygqyqi($this, 'inline.js', ['ajax_url' => $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gsmocsuquwwywuwc()]); $ooggiaqasyawsuks = $meakksicouekcgoe->souwykwwmyygqyqi($this, 'inline-helper.js', ['ajax_url' => $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gsmocsuquwwywuwc()]); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'inline-helper')->awagieqcmmwkgwgs($ooggiaqasyawsuks)->jyumyyugiwwiqomk(0))->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'frontend-helper', 'frontend-helper.js')->okawmmwsiuauwsiu()->jyumyyugiwwiqomk(1)); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'inline')->awagieqcmmwkgwgs($usyqkyomqcuocgoa)->jyumyyugiwwiqomk(0))->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'front', 'front.js')->jyumyyugiwwiqomk(1)->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)->simswskycwagoeqy()); $this->kgeweewqiagyqasy(); } public function qskmwqecowimimaa() { $this->kcuyeigqawkuecak(Constants::yuguikokwoymmqem); $this->ycusuuaguoiymisk(); } public function kcuyeigqawkuecak(string $wuomgsuaoscwgsmq) { $this->oowgosmscueymuoy(); $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $syqogysesqgmqoqi = $meakksicouekcgoe->owygwqwawqoiusis($this, 'global', 'global.js')->jyumyyugiwwiqomk(0)->ayuciigykaswwqeo('jquery'); $meakksicouekcgoe->owgyegssycusoagc($syqogysesqgmqoqi); $ooggiaqasyawsuks = $meakksicouekcgoe->owygwqwawqoiusis($this, 'helper', 'helper.js')->jyumyyugiwwiqomk(0); $meakksicouekcgoe->owgyegssycusoagc($ooggiaqasyawsuks); $this->ewcsyqaaigkicgse('before_enqueue_assets', $wuomgsuaoscwgsmq); $this->cqscqicucmeamkyq('foundation_before_enqueue_assets', $wuomgsuaoscwgsmq); $this->ewcsyqaaigkicgse("before_enqueue_{$wuomgsuaoscwgsmq}_assets"); $this->cqscqicucmeamkyq("foundation_before_enqueue_{$wuomgsuaoscwgsmq}_assets"); $this->fowiaymccsmewemu(); } public function fowiaymccsmewemu() { $sqeykgyoooqysmca = ''; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { $sqeykgyoooqysmca = Constants::qiaqeaemuukkikmi; } else { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->syukqeyowauuucwi()) { $sqeykgyoooqysmca = Constants::iickqyckyaqcaokm; } else { if ($this->caokeucsksukesyo()->kyqakacqeumicgag()->awgkmqkqkqawmqcu()) { $sqeykgyoooqysmca = Constants::yuguikokwoymmqem; } } } $wqsyimmcqogaosaq = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->qsaiusuuwcueamkk($sqeykgyoooqysmca); if ($wqsyimmcqogaosaq = array_filter($wqsyimmcqogaosaq)) { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->fowiaymccsmewemu('jquery', 'PMPRLocalize', $wqsyimmcqogaosaq); } } public function oowgosmscueymuoy() { if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { } } public function eegcswqggcewuiwc(bool $mcaqsewiqwqywsso = true) { $gwgqcsmomamyqsmy = ''; if ($mcaqsewiqwqywsso) { $gwgqcsmomamyqsmy = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewgquygaowykwacc(Constants::waoywqksqecymesy, Constants::xwwaeweqegiqeqkm, false); } echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($gwgqcsmomamyqsmy, [Constants::gouqcwikiiygyasc => Constants::kuimsckuseaswiga]); } public function saoyckekguwqwgcq(array $yokgacoigcscwkie = []) { if (is_array($yokgacoigcscwkie) && $yokgacoigcscwkie) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $yokgacoigcscwkie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($yokgacoigcscwkie, 'getPriority'); foreach ($yokgacoigcscwkie as $ceuoyocoywikssmy) { if ($ceuoyocoywikssmy instanceof Source) { $meakksicouekcgoe->register($ceuoyocoywikssmy)->enqueue($ceuoyocoywikssmy); } } } } public function oumuaoowayycuwia() { $yokgacoigcscwkie = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->uqemmgsiyiksoumo(Constants::qiaqeaemuukkikmi); $yokgacoigcscwkie = (array) $this->ocksiywmkyaqseou('backend_enqueue_assets', $yokgacoigcscwkie); $this->saoyckekguwqwgcq($yokgacoigcscwkie); } public function kgeweewqiagyqasy() { $yokgacoigcscwkie = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->uqemmgsiyiksoumo(Constants::iickqyckyaqcaokm); $yokgacoigcscwkie = (array) $this->ocksiywmkyaqseou('frontend_enqueue_assets', $yokgacoigcscwkie); $this->saoyckekguwqwgcq($yokgacoigcscwkie); } public function ycusuuaguoiymisk() { $yokgacoigcscwkie = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->uqemmgsiyiksoumo(Constants::yuguikokwoymmqem); $yokgacoigcscwkie = (array) $this->ocksiywmkyaqseou('login_enqueue_assets', $yokgacoigcscwkie); $this->saoyckekguwqwgcq($yokgacoigcscwkie); } }
