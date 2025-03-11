<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d02dc932c3d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Element\Div; use Pmpr\Common\Foundation\FormGenerator\Element\Element; use Pmpr\Common\Foundation\FormGenerator\Traits\AlertTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\ArgsTrait; use Pmpr\Common\Foundation\Traits\AttributeTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; abstract class Field { use ArgsTrait, AlertTrait, HelperTrait, ToArrayTrait, WrapperTrait, TemplateTrait, AttributeTrait; const wcmoyuggmesegmcy = '-#-'; protected ?string $id = null; protected ?string $type = null; protected ?string $icon = null; protected ?string $name = null; protected $value; protected $default; protected ?string $title = null; protected ?string $tip = null; protected ?string $description = null; protected int $priority = 0; protected bool $enable = true; protected array $callbacks = [Constants::ciyoccqkiamemcmm => null, Constants::AFTER => null, Constants::BEFORE => null, Constants::wikgqsqysyuoykse => null, Constants::rsaeoiceoeiomukk => null]; protected $sanitizer; protected $parent = null; protected bool $storable = true; protected array $errors = []; protected array $labelAttrs = []; protected bool $showLabel = true; protected bool $verified = false; protected bool $verifiable = false; protected ?string $component = null; protected ?Element $container = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { $this->ggiaseqygioygumq($aokagokqyuysuksm)->usuqmwksoeaayaig($aokagokqyuysuksm)->aseocggwwegcmqes($sqeykgyoooqysmca); if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, 'sanitize')) { $this->sanitizer = [$this, $qgciuiagkkguykgs]; } $this->emcamkaesyeaaqgm([Constants::sgogkskaqeoiyygs => false, Constants::uoawqiomwkwwaucs => false, Constants::ceykmaywyicawmau => false, Constants::qcwaimoysccwqemc => true]); $aokagokqyuysuksm = (string) $this->mwikyscisascoeea(); $this->mkguiwagcqikiack(); $this->qigsyyqgewgskemg("pr--field field-id-{$aokagokqyuysuksm}"); $this->kakecegieeqyyayu()->eskgwaywimqcwcyy('field-id', $aokagokqyuysuksm); $this->kakecegieeqyyayu()->eskgwaywimqcwcyy('field-type', $sqeykgyoooqysmca); if ($sqeykgyoooqysmca !== Constants::soqecysmeyiyyyys) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg('pr-field-visible'); } } public function cqusmgskowmesgcg() : ?string { return $this->component; } public function askmmuauqcuuqsea(?string $wksoawcgagcgoask, bool $euueacigmgoqkimu = true) : self { if ($euueacigmgoqkimu) { $wksoawcgagcgoask = "Panel{$wksoawcgagcgoask}Field"; } $this->component = $wksoawcgagcgoask; return $this; } public function ocyagsiykqkycmus() : self { return $this->askmmuauqcuuqsea('Custom'); } public function yaiuqusyegougysy() : self { return $this->askmmuauqcuuqsea(''); } public function wowamsaiqwikqoqa() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::koswkeacksqaocay, false); } public function cekywgkuyuckekeg() : self { $this->oykaosmaegqwmoga()->igiywquyccyiaucw(Constants::koswkeacksqaocay, true)->qcgocuceocquqcuw('readonly', true); return $this; } public function iokkueaqiswaewyq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::ckqowiakqgswukgq, false); } public function uqiyecacqiyeaqqo() : self { return $this->igiywquyccyiaucw(Constants::ckqowiakqgswukgq, true); } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function suaookwiwycuwmuk($uqyaagwcuoewkkss) : self { $this->igiywquyccyiaucw(Constants::meuiuosgqwweoemq, $uqyaagwcuoewkkss); return $this->gmywsauuqwcmakuc(Constants::meuiuosgqwweoemq, $uqyaagwcuoewkkss); } public function lawggeskegeosicy(string $koegqoagisewcica, array $uiewakwqscemywuo = []) : self { $this->aimwwacyywceeoyu('effectable', [Constants::ON => $koegqoagisewcica, Constants::yeowwkiiyimoykye => $uiewakwqscemywuo]); return $this; } public function ccewgoaawmaoiqqq($qecuekqmeaiykeek) : self { return $this->igiywquyccyiaucw(Constants::sssoieywiewykmam, $qecuekqmeaiykeek); } public function ykeewiooiammwoko(array $oammesyieqmwuwyi) : self { foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $this->qyymoouyewokoeew($igqsaukqcqscimok[Constants::ykqyicwaggyuuuwo], $igqsaukqcqscimok[Constants::ymckmcsiymwqucoq], $igqsaukqcqscimok[Constants::REVERSE] ?? false); } return $this; } public function qyymoouyewokoeew($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, bool $iiwmeimguameeome = false) : self { if ($ikgwqyuyckaewsow === $this->mwikyscisascoeea() || is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow, true)) { wp_die("you are trying to disable {$this->mwikyscisascoeea()} input by itself."); } if (!$this->wuyimwscukmqqsqk('disabler')) { $this->caokeucsksukesyo()->usugyumcgeaaowsi()->wmuqwaewssekqymw(); } $this->aimwwacyywceeoyu('disabler', [Constants::REVERSE => $iiwmeimguameeome, Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]); return $this; } public function qyucewwiggkyeaso($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, bool $iiwmeimguameeome = false) : self { if ($ikgwqyuyckaewsow === $this->mwikyscisascoeea() || is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow, true)) { wp_die("you are trying to ignore {$this->mwikyscisascoeea()} input by itself."); } if (!$this->wuyimwscukmqqsqk('vanisher')) { $this->caokeucsksukesyo()->usugyumcgeaaowsi()->qymwusgoassaaacs(); } $this->aimwwacyywceeoyu('vanisher', [Constants::REVERSE => $iiwmeimguameeome, Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]); return $this; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $this->default = $ggauoeuaesiymgee; $this->kakecegieeqyyayu()->eskgwaywimqcwcyy('default', $ggauoeuaesiymgee); return $this; } public function oiswysuiioecsaae() { return $this->default; } public function gkkgsyeumismsyse($egkyssmuqcwaciya) : self { return $this->awagoqyseewoeoee('class', $egkyssmuqcwaciya); } public function awagoqyseewoeoee($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->labelAttrs = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($this->uksywogamqoggsia(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie)); return $this; } public function uksywogamqoggsia() : array { return $this->labelAttrs; } public function ougeeuegcgmwkcim() : bool { return $this->showLabel; } public function cysmiqkqasmweeem(bool $uuagoowwgcuosuuu) : self { $this->showLabel = $uuagoowwgcuosuuu; $this->igiywquyccyiaucw(Constants::ugmuakwqcmgmomqm, $uuagoowwgcuosuuu); return $this; } public function uuagoowwgcuosuuu() : self { $this->cysmiqkqasmweeem(true); return $this; } public function macygmcekgqwmcwk() : self { $this->cysmiqkqasmweeem(false); return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function uekikuwmokqsqoga(string $sqeykgyoooqysmca) : self { return $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, $sqeykgyoooqysmca); } public function ygqycmmkoiuocoia() { return $this->parent; } public function mmukacawgocecuqg() : bool { return $this->ygqycmmkoiuocoia() !== null; } public function mmuyuqussqkgkega($omwmuycmeqcqokom) : self { $this->parent = $omwmuycmeqcqokom; return $this; } public function ikaukuqokwgsyeia() { return $this->sanitizer; } public function mkmssscwmeekwgqo() : self { return $this->igiywquyccyiaucw(Constants::sgogkskaqeoiyygs, true); } public function wmociykwcyesssui() : bool { return $this->imkyoqyocosuqasu(Constants::sgogkskaqeoiyygs, false); } public function ggekcmkgawqocsms($eswwueuissckicww) : self { return $this->eycskusaeseuwiyc([Constants::NAME => $eswwueuissckicww, Constants::gouqcwikiiygyasc => $eswwueuissckicww]); } public function agmmqsowmyywagcm() : bool { return $this->storable; } public function cqwcmeomuquwimsa() : self { $this->storable = false; return $this; } public function ayseokmqycoqaigc() : bool { return $this->enable; } public function wywmmeyauqkeskeq(bool $oqkgomucoyswikgk) : self { $this->enable = $oqkgomucoyswikgk; return $this; } public function oykaosmaegqwmoga(bool $oykaosmaegqwmoga = false, bool $qqomumygoacsmsie = false) : self { $this->igiywquyccyiaucw(Constants::uoawqiomwkwwaucs, $oykaosmaegqwmoga); if (!$qqomumygoacsmsie) { $this->wywmmeyauqkeskeq(!$oykaosmaegqwmoga); } else { if ($oykaosmaegqwmoga) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg('pr-field-disabled'); } } return $this; } public function mwikyscisascoeea() : ?string { return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self { $this->qcgocuceocquqcuw(Constants::gouqcwikiiygyasc, $aokagokqyuysuksm); $this->id = $aokagokqyuysuksm; return $this; } public function eumecwmqmukqgyea() : self { return $this->igiywquyccyiaucw(Constants::ceykmaywyicawmau, true); } public function aisqaugyiikgesqo() : self { return $this->igiywquyccyiaucw(Constants::ceykmaywyicawmau, false); } public function smcqugueqiumkygs() : self { $this->qcgocuceocquqcuw(Constants::wckiuqwamiywoayi, Constants::OFF); return $this->igiywquyccyiaucw(Constants::wckiuqwamiywoayi, true); } public function msmiagueogcsucgc() : bool { return $this->imkyoqyocosuqasu(Constants::ceykmaywyicawmau, false); } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->qcgocuceocquqcuw(Constants::NAME, $ymqmyyeuycgmigyo); $this->name = $ymqmyyeuycgmigyo; return $this; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self { $this->description = $ukwokcuqauuosmoo; return $this; } public function weuwoosgqakykgac() : ?string { return $this->tip; } public function woiuekkeucikkyum(?string $auucmikeiywsskqa) : self { $this->tip = $auucmikeiywsskqa; return $this; } public function yywskysiycwkwsgw() : int { return $this->priority; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function swsaakqseuaacagq($uusmaiomayssaecw, $ekiuyucoiagmscgy) : self { $this->callbacks[$uusmaiomayssaecw] = $ekiuyucoiagmscgy; return $this; } public function ekkwaykokcgqkmoi($uusmaiomayssaecw) : ?callable { $ekiuyucoiagmscgy = $this->callbacks[$uusmaiomayssaecw] ?? null; if ($ekiuyucoiagmscgy && !is_callable($ekiuyucoiagmscgy)) { $ekiuyucoiagmscgy = null; } return $ekiuyucoiagmscgy; } public function yugauoucmykiwuay($ekiuyucoiagmscgy) : self { return $this->swsaakqseuaacagq(Constants::BEFORE, $ekiuyucoiagmscgy); } public function ckuqgiowuaqucumc($ekiuyucoiagmscgy) : self { return $this->swsaakqseuaacagq(Constants::AFTER, $ekiuyucoiagmscgy); } public function oieekkycgwqacoik($ekiuyucoiagmscgy) : Field { return $this->swsaakqseuaacagq(Constants::rsaeoiceoeiomukk, $ekiuyucoiagmscgy); } public function validate($uwomkgseoiegeume = null, $msqkueqksqwmskak = null) : bool { $eisqsskqimiigkay = true; if ($ekiuyucoiagmscgy = $this->ekkwaykokcgqkmoi(Constants::rsaeoiceoeiomukk)) { $sogksuscggsicmac = $ekiuyucoiagmscgy($uwomkgseoiegeume, $msqkueqksqwmskak, $this); if (is_bool($sogksuscggsicmac)) { $eisqsskqimiigkay = $sogksuscggsicmac; } else { if ($sogksuscggsicmac && is_string($sogksuscggsicmac)) { $this->msqsseeaasqysese($sogksuscggsicmac); $eisqsskqimiigkay = false; } } } return $eisqsskqimiigkay; } public function qooeaookuemoqecm() { return $this->value; } public function ysyswymameciiyce() : bool { return !empty($this->qooeaookuemoqecm()); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->value = $eqgoocgaqwqcimie; return $this; } public function kuiecqsycqiiskuq() : self { return $this->gicmuekskmiqgkqc('rtl'); } public function kqqqugemmqagucuq() : self { return $this->gicmuekskmiqgkqc('ltr'); } private function gicmuekskmiqgkqc($ecysmcqmumqmaagg) : self { return $this->igmaewykumgwoaoy('dir', $ecysmcqmumqmaagg)->qigsyyqgewgskemg("direction-{$ecysmcqmumqmaagg}"); } public function ymoyyqeymakckaee() : array { if (!$this->errors) { $this->errors = (array) $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw($this->aakmagwggmkoiiyu() . '_errors', []); } return $this->errors; } public function msqsseeaasqysese(string $iswcokucwmiosiaq, bool $aecgggeoymywyumm = false) : self { $this->errors[] = htmlentities($iswcokucwmiosiaq); if ($aecgggeoymywyumm) { $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ycasmmgsmaaumweg($this->aakmagwggmkoiiyu() . '_errors', $this->errors, time() + 4); } return $this; } public function gkuouokiccwwqcau($ueeagokqmgisgauy) : self { foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) { $this->msqsseeaasqysese($iswcokucwmiosiaq); } return $this; } public function yycesgsucecsmqcm(string $igaagwuyasawwqms, string $moyaaaascoeowegu = Constants::ciyoccqkiamemcmm, string $acuayeeoiwokyomo = Constants::ciyoccqkiamemcmm) : self { $this->qigsyyqgewgskemg('pr-field-updatable')->gmywsauuqwcmakuc('updatable-configs', $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike([Constants::ciaakykwiwewmksg => $igaagwuyasawwqms, Constants::ouuqcauwoymcwkes => $acuayeeoiwokyomo, Constants::REPLACE => $moyaaaascoeowegu])); return $this; } public function wmwikuasuocmqycw(array $qecuekqmeaiykeek = []) : self { $this->qigsyyqgewgskemg('pr-field-extendable')->gmywsauuqwcmakuc('extendable', $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($qecuekqmeaiykeek)); return $this; } public function gysckqgokmciyqcg(?string $pkyyagewkiyckmwy) : self { return $this->qcgocuceocquqcuw('aria-label', $pkyyagewkiyckmwy); } public function kakecegieeqyyayu() : ?Element { return $this->container; } public function ssseuumiskesuiss() : self { $this->container = null; return $this; } public function mkguiwagcqikiack(Element $kqywgoqsmuswammk = null) : self { if ($kqywgoqsmuswammk) { $this->container = $kqywgoqsmuswammk; } else { if (!$this->container) { $aokagokqyuysuksm = $this->mwikyscisascoeea(); $this->container = new Div("{$aokagokqyuysuksm}_container"); } } return $this; } public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self { $this->gysckqgokmciyqcg($iwiewowoqmoekyqi); return $this->qcgocuceocquqcuw('placeholder', $iwiewowoqmoekyqi); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $cmkqisoeyioisqaw = "pr-field pr-field-{$this->gueasuouwqysmomu()}-type"; if ($this->wmociykwcyesssui()) { $cmkqisoeyioisqaw .= ' pr-field-inline'; } if ($this->msmiagueogcsucgc()) { $cmkqisoeyioisqaw .= ' pr-field-required'; } if (!$this->qooeaookuemoqecm()) { $this->iygyugseyaqwywyg($this->oiswysuiioecsaae()); } if ($this->iokkueaqiswaewyq() && $this->wowamsaiqwikqoqa()) { $this->oykaosmaegqwmoga(true, true); } if ($skikiykssoocmmik = $this->kakecegieeqyyayu()) { $skikiykssoocmmik->qigsyyqgewgskemg($cmkqisoeyioisqaw); if ($this->qcgakseyaikigqco()) { $skikiykssoocmmik->qigsyyqgewgskemg('pr-field-has-title'); } if ($this->meqceykmywmqgoym()) { $skikiykssoocmmik->qigsyyqgewgskemg('pr-field-has-description'); } } if ($qqeasouwkusioeai = $this->imkyoqyocosuqasu('disabler')) { $qqeasouwkusioeai = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($qqeasouwkusioeai, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg('pr-field-disabler')->gmywsauuqwcmakuc('disabler-configs', $qqeasouwkusioeai); } if ($yweqwaeksimikyoi = $this->imkyoqyocosuqasu('vanisher')) { $yweqwaeksimikyoi = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($yweqwaeksimikyoi, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg('pr-field-vanisher')->gmywsauuqwcmakuc('vanisher-configs', $yweqwaeksimikyoi); } if ($imeiywkoswyqoawe = $this->imkyoqyocosuqasu('effectable')) { $imeiywkoswyqoawe = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($imeiywkoswyqoawe, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg('pr-field-effectable')->gmywsauuqwcmakuc('effectable-configs', $imeiywkoswyqoawe); } if ($qecuekqmeaiykeek = $this->imkyoqyocosuqasu(Constants::sssoieywiewykmam)) { $qecuekqmeaiykeek = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($qecuekqmeaiykeek, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg('pr-field-variational')->gmywsauuqwcmakuc('variations', $qecuekqmeaiykeek); } } public function gayqqwwuycceosii(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kyyscqqmsikeuaea => false, Constants::skgoiqckokigcmug => false]); $qookweymeqawmcwo = $this->sacmkccceuywoqsq($ywmkwiwkosakssii[Constants::kyyscqqmsikeuaea], $ywmkwiwkosakssii); $qookweymeqawmcwo[Constants::miceosguuseyyuqe] = $this; return $qookweymeqawmcwo; } public function aqiccywoiqiskwaw() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg('pr-field-full-width'); return $this; } public function render(array $ywmkwiwkosakssii = []) : string { $nsmgceoqaqogqmuw = ''; if ($this->ayseokmqycoqaigc()) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qaacaqioeyiuakeu => false, Constants::emkkgysokckswycs => false]); if ($this->ymoyyqeymakckaee()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg('pr-field-invalid'); } $nsmgceoqaqogqmuw = pr_get_foundation()->iuygowkemiiwqmiw($this->gueasuouwqysmomu(), $this->gayqqwwuycceosii($ywmkwiwkosakssii), ['class' => static::class, Constants::qaacaqioeyiuakeu => false]); if ($skikiykssoocmmik = $this->kakecegieeqyyayu()) { $nsmgceoqaqogqmuw = $skikiykssoocmmik->render($nsmgceoqaqogqmuw); } $caacssaumiqeaoaw = $this->ekkwaykokcgqkmoi(Constants::BEFORE); if ($caacssaumiqeaoaw) { $nsmgceoqaqogqmuw = $caacssaumiqeaoaw() . $nsmgceoqaqogqmuw; } $miisqgccsqqcscia = $this->ekkwaykokcgqkmoi(Constants::AFTER); if ($miisqgccsqqcscia) { $nsmgceoqaqogqmuw .= $miisqgccsqqcscia(); } if ($ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu]) { echo $nsmgceoqaqogqmuw; } } return $nsmgceoqaqogqmuw; } public function mkwuwyieigwkkuyu() : self { $this->igiywquyccyiaucw(Constants::qcwaimoysccwqemc, false); return $this; } }
