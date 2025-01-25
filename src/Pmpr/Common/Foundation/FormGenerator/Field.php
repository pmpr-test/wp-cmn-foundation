<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6794e7648968d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Element\Div; use Pmpr\Common\Foundation\FormGenerator\Element\Element; use Pmpr\Common\Foundation\FormGenerator\Traits\AlertTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\ArgsTrait; use Pmpr\Common\Foundation\Traits\AttributeTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; abstract class Field { use ArgsTrait, AlertTrait, HelperTrait, ToArrayTrait, WrapperTrait, TemplateTrait, AttributeTrait; const wcmoyuggmesegmcy = "\x2d\x23\55"; protected ?string $id = null; protected ?string $type = null; protected ?string $icon = null; protected ?string $name = null; protected $value; protected $default; protected ?string $title = null; protected ?string $tip = null; protected ?string $description = null; protected int $priority = 0; protected bool $enable = true; protected array $callbacks = [Constants::ciyoccqkiamemcmm => null, Constants::AFTER => null, Constants::BEFORE => null, Constants::wikgqsqysyuoykse => null, Constants::rsaeoiceoeiomukk => null]; protected $sanitizer; protected $parent = null; protected bool $storable = true; protected array $errors = []; protected array $labelAttrs = []; protected bool $showLabel = true; protected bool $verified = false; protected bool $verifiable = false; protected ?string $component = null; protected ?Element $container = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { $this->ggiaseqygioygumq($aokagokqyuysuksm)->usuqmwksoeaayaig($aokagokqyuysuksm)->aseocggwwegcmqes($sqeykgyoooqysmca); if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\163\141\x6e\151\164\x69\x7a\x65")) { $this->sanitizer = [$this, $qgciuiagkkguykgs]; } $this->emcamkaesyeaaqgm([Constants::sgogkskaqeoiyygs => false, Constants::uoawqiomwkwwaucs => false, Constants::ceykmaywyicawmau => false]); $aokagokqyuysuksm = (string) $this->mwikyscisascoeea(); $this->mkguiwagcqikiack(); $this->qigsyyqgewgskemg("\160\x72\55\55\146\x69\145\154\x64\x20\x66\x69\x65\x6c\x64\55\x69\144\55{$aokagokqyuysuksm}"); $this->kakecegieeqyyayu()->eskgwaywimqcwcyy("\x66\x69\145\x6c\144\55\151\x64", $aokagokqyuysuksm); $this->kakecegieeqyyayu()->eskgwaywimqcwcyy("\146\x69\x65\x6c\144\55\164\171\160\x65", $sqeykgyoooqysmca); if ($sqeykgyoooqysmca !== Constants::soqecysmeyiyyyys) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\x2d\146\151\145\x6c\144\x2d\166\x69\163\x69\142\x6c\145"); } } public function cqusmgskowmesgcg() : ?string { return $this->component; } public function askmmuauqcuuqsea(?string $wksoawcgagcgoask, bool $euueacigmgoqkimu = true) : self { if ($euueacigmgoqkimu) { $wksoawcgagcgoask = "\x50\141\x6e\x65\154{$wksoawcgagcgoask}\111\x6e\x70\x75\x74"; } $this->component = $wksoawcgagcgoask; return $this; } public function ocyagsiykqkycmus() : self { return $this->askmmuauqcuuqsea("\x43\165\x73\164\x6f\x6d"); } public function yaiuqusyegougysy() : self { return $this->askmmuauqcuuqsea(''); } public function wowamsaiqwikqoqa() : ?bool { return $this->verified; } public function cekywgkuyuckekeg() : self { $this->verified = true; $this->oykaosmaegqwmoga()->qcgocuceocquqcuw("\162\145\x61\x64\x6f\156\x6c\x79", true); return $this; } public function iokkueaqiswaewyq() : ?bool { return $this->verifiable; } public function uqiyecacqiyeaqqo() : self { $this->verifiable = true; return $this; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function suaookwiwycuwmuk($uqyaagwcuoewkkss) : self { $this->igiywquyccyiaucw(Constants::meuiuosgqwweoemq, $uqyaagwcuoewkkss); return $this->gmywsauuqwcmakuc(Constants::meuiuosgqwweoemq, $uqyaagwcuoewkkss); } public function lawggeskegeosicy(string $koegqoagisewcica, array $uiewakwqscemywuo = []) : self { $this->aimwwacyywceeoyu("\145\146\146\x65\x63\x74\x61\142\154\145", [Constants::ON => $koegqoagisewcica, Constants::yeowwkiiyimoykye => $uiewakwqscemywuo]); return $this; } public function ccewgoaawmaoiqqq($qecuekqmeaiykeek) : self { return $this->igiywquyccyiaucw(Constants::sssoieywiewykmam, $qecuekqmeaiykeek); } public function ykeewiooiammwoko(array $oammesyieqmwuwyi) : self { foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $this->qyymoouyewokoeew($igqsaukqcqscimok[Constants::ykqyicwaggyuuuwo], $igqsaukqcqscimok[Constants::ymckmcsiymwqucoq], $igqsaukqcqscimok[Constants::REVERSE] ?? false); } return $this; } public function qyymoouyewokoeew($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, bool $iiwmeimguameeome = false) : self { if ($ikgwqyuyckaewsow === $this->mwikyscisascoeea() || is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow, true)) { wp_die("\x79\157\165\40\x61\x72\145\x20\x74\162\171\x69\156\x67\40\x74\157\x20\144\x69\x73\141\142\154\x65\40{$this->mwikyscisascoeea()}\x20\x69\x6e\x70\x75\x74\x20\x62\171\x20\151\164\x73\145\x6c\x66\56"); } if (!$this->wuyimwscukmqqsqk("\144\151\x73\x61\142\x6c\145\162")) { $this->caokeucsksukesyo()->usugyumcgeaaowsi()->wmuqwaewssekqymw(); } $this->aimwwacyywceeoyu("\144\151\163\x61\142\x6c\x65\162", [Constants::REVERSE => $iiwmeimguameeome, Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]); return $this; } public function qyucewwiggkyeaso($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, bool $iiwmeimguameeome = false) : self { if ($ikgwqyuyckaewsow === $this->mwikyscisascoeea() || is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow, true)) { wp_die("\171\157\x75\x20\141\162\145\40\164\162\171\x69\156\x67\40\164\x6f\40\151\x67\156\157\162\145\x20{$this->mwikyscisascoeea()}\x20\x69\156\160\165\x74\x20\142\x79\x20\151\x74\163\145\154\x66\56"); } if (!$this->wuyimwscukmqqsqk("\166\x61\156\x69\163\150\x65\x72")) { $this->caokeucsksukesyo()->usugyumcgeaaowsi()->qymwusgoassaaacs(); } $this->aimwwacyywceeoyu("\166\141\x6e\x69\163\x68\145\x72", [Constants::REVERSE => $iiwmeimguameeome, Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]); return $this; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $this->default = $ggauoeuaesiymgee; $this->kakecegieeqyyayu()->eskgwaywimqcwcyy("\144\x65\146\141\165\154\x74", $ggauoeuaesiymgee); return $this; } public function oiswysuiioecsaae() { return $this->default; } public function gkkgsyeumismsyse($egkyssmuqcwaciya) : self { return $this->awagoqyseewoeoee("\x63\x6c\141\163\163", $egkyssmuqcwaciya); } public function awagoqyseewoeoee($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->labelAttrs = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($this->uksywogamqoggsia(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie)); return $this; } public function uksywogamqoggsia() : array { return $this->labelAttrs; } public function ougeeuegcgmwkcim() : bool { return $this->showLabel; } public function cysmiqkqasmweeem(bool $uuagoowwgcuosuuu) : self { $this->showLabel = $uuagoowwgcuosuuu; $this->igiywquyccyiaucw(Constants::ugmuakwqcmgmomqm, $uuagoowwgcuosuuu); return $this; } public function uuagoowwgcuosuuu() : self { $this->cysmiqkqasmweeem(true); return $this; } public function macygmcekgqwmcwk() : self { $this->cysmiqkqasmweeem(false); return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function uekikuwmokqsqoga(string $sqeykgyoooqysmca) : self { return $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, $sqeykgyoooqysmca); } public function ygqycmmkoiuocoia() { return $this->parent; } public function mmukacawgocecuqg() : bool { return $this->ygqycmmkoiuocoia() !== null; } public function mmuyuqussqkgkega($omwmuycmeqcqokom) : self { $this->parent = $omwmuycmeqcqokom; return $this; } public function ikaukuqokwgsyeia() { return $this->sanitizer; } public function mkmssscwmeekwgqo() : self { return $this->igiywquyccyiaucw(Constants::sgogkskaqeoiyygs, true); } public function wmociykwcyesssui() : bool { return $this->imkyoqyocosuqasu(Constants::sgogkskaqeoiyygs, false); } public function ggekcmkgawqocsms($eswwueuissckicww) : self { return $this->eycskusaeseuwiyc([Constants::NAME => $eswwueuissckicww, Constants::gouqcwikiiygyasc => $eswwueuissckicww]); } public function agmmqsowmyywagcm() : bool { return $this->storable; } public function cqwcmeomuquwimsa() : self { $this->storable = false; return $this; } public function ayseokmqycoqaigc() : bool { return $this->enable; } public function wywmmeyauqkeskeq(bool $oqkgomucoyswikgk) : self { $this->enable = $oqkgomucoyswikgk; return $this; } public function oykaosmaegqwmoga(bool $oykaosmaegqwmoga = false, bool $qqomumygoacsmsie = false) : self { $this->igiywquyccyiaucw(Constants::uoawqiomwkwwaucs, $oykaosmaegqwmoga); if (!$qqomumygoacsmsie) { $this->wywmmeyauqkeskeq(!$oykaosmaegqwmoga); } else { if ($oykaosmaegqwmoga) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\x2d\x66\151\145\x6c\144\x2d\144\151\x73\141\x62\x6c\x65\144"); } } return $this; } public function mwikyscisascoeea() : ?string { return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self { $this->qcgocuceocquqcuw(Constants::gouqcwikiiygyasc, $aokagokqyuysuksm); $this->id = $aokagokqyuysuksm; return $this; } public function eumecwmqmukqgyea() : self { return $this->igiywquyccyiaucw(Constants::ceykmaywyicawmau, true); } public function smcqugueqiumkygs() : self { $this->qcgocuceocquqcuw(Constants::wckiuqwamiywoayi, Constants::OFF); return $this->igiywquyccyiaucw(Constants::wckiuqwamiywoayi, true); } public function msmiagueogcsucgc() : bool { return $this->imkyoqyocosuqasu(Constants::ceykmaywyicawmau, false); } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->qcgocuceocquqcuw(Constants::NAME, $ymqmyyeuycgmigyo); $this->name = $ymqmyyeuycgmigyo; return $this; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self { $this->description = $ukwokcuqauuosmoo; return $this; } public function weuwoosgqakykgac() : ?string { return $this->tip; } public function woiuekkeucikkyum(?string $auucmikeiywsskqa) : self { $this->tip = $auucmikeiywsskqa; return $this; } public function yywskysiycwkwsgw() : int { return $this->priority; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function swsaakqseuaacagq($uusmaiomayssaecw, $ekiuyucoiagmscgy) : self { $this->callbacks[$uusmaiomayssaecw] = $ekiuyucoiagmscgy; return $this; } public function ekkwaykokcgqkmoi($uusmaiomayssaecw) : ?callable { $ekiuyucoiagmscgy = $this->callbacks[$uusmaiomayssaecw] ?? null; if ($ekiuyucoiagmscgy && !is_callable($ekiuyucoiagmscgy)) { $ekiuyucoiagmscgy = null; } return $ekiuyucoiagmscgy; } public function yugauoucmykiwuay($ekiuyucoiagmscgy) : self { return $this->swsaakqseuaacagq(Constants::BEFORE, $ekiuyucoiagmscgy); } public function ckuqgiowuaqucumc($ekiuyucoiagmscgy) : self { return $this->swsaakqseuaacagq(Constants::AFTER, $ekiuyucoiagmscgy); } public function oieekkycgwqacoik($ekiuyucoiagmscgy) : Field { return $this->swsaakqseuaacagq(Constants::rsaeoiceoeiomukk, $ekiuyucoiagmscgy); } public function validate($uwomkgseoiegeume = null, $msqkueqksqwmskak = null) : bool { $eisqsskqimiigkay = true; if ($ekiuyucoiagmscgy = $this->ekkwaykokcgqkmoi(Constants::rsaeoiceoeiomukk)) { $sogksuscggsicmac = $ekiuyucoiagmscgy($uwomkgseoiegeume, $msqkueqksqwmskak, $this); if (is_bool($sogksuscggsicmac)) { $eisqsskqimiigkay = $sogksuscggsicmac; } else { if ($sogksuscggsicmac && is_string($sogksuscggsicmac)) { $this->msqsseeaasqysese($sogksuscggsicmac); $eisqsskqimiigkay = false; } } } return $eisqsskqimiigkay; } public function qooeaookuemoqecm() { return $this->value; } public function ysyswymameciiyce() : bool { return !empty($this->qooeaookuemoqecm()); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->value = $eqgoocgaqwqcimie; return $this; } public function kuiecqsycqiiskuq() : self { return $this->gicmuekskmiqgkqc("\162\164\154"); } public function kqqqugemmqagucuq() : self { return $this->gicmuekskmiqgkqc("\x6c\164\162"); } private function gicmuekskmiqgkqc($ecysmcqmumqmaagg) : self { return $this->igmaewykumgwoaoy("\x64\151\162", $ecysmcqmumqmaagg)->qigsyyqgewgskemg("\x64\x69\x72\x65\143\x74\x69\157\156\x2d{$ecysmcqmumqmaagg}"); } public function ymoyyqeymakckaee() : array { if (!$this->errors) { $this->errors = (array) $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw($this->aakmagwggmkoiiyu() . "\x5f\x65\162\x72\x6f\x72\x73", []); } return $this->errors; } public function msqsseeaasqysese(string $iswcokucwmiosiaq, bool $aecgggeoymywyumm = false) : self { $this->errors[] = htmlentities($iswcokucwmiosiaq); if ($aecgggeoymywyumm) { $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ycasmmgsmaaumweg($this->aakmagwggmkoiiyu() . "\x5f\x65\x72\x72\x6f\x72\x73", $this->errors, time() + 4); } return $this; } public function gkuouokiccwwqcau($ueeagokqmgisgauy) : self { foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) { $this->msqsseeaasqysese($iswcokucwmiosiaq); } return $this; } public function yycesgsucecsmqcm(string $igaagwuyasawwqms, string $moyaaaascoeowegu = Constants::ciyoccqkiamemcmm, string $acuayeeoiwokyomo = Constants::ciyoccqkiamemcmm) : self { $this->qigsyyqgewgskemg("\160\162\x2d\x66\151\145\x6c\x64\x2d\x75\160\144\141\164\141\142\x6c\145")->gmywsauuqwcmakuc("\x75\x70\x64\x61\x74\x61\142\154\145\55\143\157\156\x66\x69\x67\x73", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike([Constants::ciaakykwiwewmksg => $igaagwuyasawwqms, Constants::ouuqcauwoymcwkes => $acuayeeoiwokyomo, Constants::REPLACE => $moyaaaascoeowegu])); return $this; } public function wmwikuasuocmqycw(array $qecuekqmeaiykeek = []) : self { $this->qigsyyqgewgskemg("\x70\162\x2d\146\x69\x65\154\144\x2d\145\x78\164\145\x6e\x64\x61\142\x6c\x65")->gmywsauuqwcmakuc("\x65\170\x74\x65\x6e\144\141\142\x6c\145", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($qecuekqmeaiykeek)); return $this; } public function gysckqgokmciyqcg(?string $pkyyagewkiyckmwy) : self { return $this->qcgocuceocquqcuw("\141\x72\151\x61\55\x6c\141\142\145\x6c", $pkyyagewkiyckmwy); } public function kakecegieeqyyayu() : ?Element { return $this->container; } public function ssseuumiskesuiss() : self { $this->container = null; return $this; } public function mkguiwagcqikiack(Element $kqywgoqsmuswammk = null) : self { if ($kqywgoqsmuswammk) { $this->container = $kqywgoqsmuswammk; } else { if (!$this->container) { $aokagokqyuysuksm = $this->mwikyscisascoeea(); $this->container = new Div("{$aokagokqyuysuksm}\x5f\143\157\x6e\x74\x61\151\156\x65\162"); } } return $this; } public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self { $this->gysckqgokmciyqcg($iwiewowoqmoekyqi); return $this->qcgocuceocquqcuw("\160\154\141\143\145\150\157\154\144\x65\x72", $iwiewowoqmoekyqi); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $cmkqisoeyioisqaw = "\x70\162\x2d\146\x69\145\x6c\144\40\160\162\x2d\146\x69\145\x6c\144\55{$this->gueasuouwqysmomu()}\55\164\x79\160\x65"; if ($this->wmociykwcyesssui()) { $cmkqisoeyioisqaw .= "\x20\160\162\55\146\x69\x65\154\x64\x2d\x69\156\154\151\x6e\x65"; } if ($this->msmiagueogcsucgc()) { $cmkqisoeyioisqaw .= "\40\160\x72\x2d\x66\x69\145\154\144\55\162\x65\161\x75\x69\x72\145\144"; } if (!$this->qooeaookuemoqecm()) { $this->iygyugseyaqwywyg($this->oiswysuiioecsaae()); } if ($skikiykssoocmmik = $this->kakecegieeqyyayu()) { $skikiykssoocmmik->qigsyyqgewgskemg($cmkqisoeyioisqaw); if ($this->qcgakseyaikigqco()) { $skikiykssoocmmik->qigsyyqgewgskemg("\x70\162\x2d\x66\151\145\154\144\55\150\x61\x73\55\x74\151\x74\154\145"); } if ($this->meqceykmywmqgoym()) { $skikiykssoocmmik->qigsyyqgewgskemg("\160\162\55\146\151\145\x6c\144\x2d\x68\x61\163\x2d\144\145\x73\143\162\151\160\164\151\157\156"); } } if ($qqeasouwkusioeai = $this->imkyoqyocosuqasu("\x64\x69\x73\x61\142\x6c\145\162")) { $qqeasouwkusioeai = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($qqeasouwkusioeai, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\x70\x72\x2d\x66\151\x65\x6c\144\55\x64\151\163\141\x62\x6c\x65\162")->gmywsauuqwcmakuc("\x64\151\x73\141\x62\154\x65\x72\55\x63\157\x6e\146\151\x67\163", $qqeasouwkusioeai); } if ($yweqwaeksimikyoi = $this->imkyoqyocosuqasu("\166\141\156\x69\x73\x68\x65\162")) { $yweqwaeksimikyoi = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($yweqwaeksimikyoi, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\x70\x72\55\146\x69\x65\154\x64\x2d\166\141\x6e\x69\x73\150\145\x72")->gmywsauuqwcmakuc("\x76\x61\x6e\x69\x73\150\145\162\55\x63\157\156\x66\151\147\x73", $yweqwaeksimikyoi); } if ($imeiywkoswyqoawe = $this->imkyoqyocosuqasu("\145\x66\146\145\x63\164\x61\x62\154\x65")) { $imeiywkoswyqoawe = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($imeiywkoswyqoawe, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\x70\162\x2d\146\x69\145\x6c\144\55\145\146\146\145\x63\x74\141\x62\154\145")->gmywsauuqwcmakuc("\145\x66\x66\x65\143\164\141\142\154\145\x2d\143\x6f\156\146\x69\x67\x73", $imeiywkoswyqoawe); } if ($qecuekqmeaiykeek = $this->imkyoqyocosuqasu(Constants::sssoieywiewykmam)) { $qecuekqmeaiykeek = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($qecuekqmeaiykeek, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\x70\162\55\146\x69\x65\x6c\x64\x2d\166\x61\162\151\141\x74\x69\x6f\156\x61\154")->gmywsauuqwcmakuc("\166\x61\162\151\x61\x74\151\x6f\x6e\163", $qecuekqmeaiykeek); } } public function gayqqwwuycceosii(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kyyscqqmsikeuaea => false, Constants::skgoiqckokigcmug => false]); $qookweymeqawmcwo = $this->sacmkccceuywoqsq($ywmkwiwkosakssii[Constants::kyyscqqmsikeuaea], $ywmkwiwkosakssii); $qookweymeqawmcwo[Constants::miceosguuseyyuqe] = $this; return $qookweymeqawmcwo; } public function aqiccywoiqiskwaw() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\55\x66\x69\x65\x6c\144\x2d\146\x75\154\x6c\x2d\167\x69\x64\164\x68"); return $this; } public function render(array $ywmkwiwkosakssii = []) : string { $nsmgceoqaqogqmuw = ''; if ($this->ayseokmqycoqaigc()) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qaacaqioeyiuakeu => false, Constants::emkkgysokckswycs => false]); if ($this->ymoyyqeymakckaee()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\146\151\145\x6c\144\x2d\151\156\x76\141\x6c\x69\x64"); } $nsmgceoqaqogqmuw = pr_get_foundation()->iuygowkemiiwqmiw($this->gueasuouwqysmomu(), $this->gayqqwwuycceosii($ywmkwiwkosakssii), ["\143\154\x61\163\163" => static::class, Constants::qaacaqioeyiuakeu => false]); if ($skikiykssoocmmik = $this->kakecegieeqyyayu()) { $nsmgceoqaqogqmuw = $skikiykssoocmmik->render($nsmgceoqaqogqmuw); } $caacssaumiqeaoaw = $this->ekkwaykokcgqkmoi(Constants::BEFORE); if ($caacssaumiqeaoaw) { $nsmgceoqaqogqmuw = $caacssaumiqeaoaw() . $nsmgceoqaqogqmuw; } $miisqgccsqqcscia = $this->ekkwaykokcgqkmoi(Constants::AFTER); if ($miisqgccsqqcscia) { $nsmgceoqaqogqmuw .= $miisqgccsqqcscia(); } if ($ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu]) { echo $nsmgceoqaqogqmuw; } } return $nsmgceoqaqogqmuw; } }
