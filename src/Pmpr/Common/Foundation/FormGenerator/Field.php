<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f4306668ee2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Element\Div; use Pmpr\Common\Foundation\FormGenerator\Element\Element; use Pmpr\Common\Foundation\FormGenerator\Traits\AlertTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\ArgsTrait; use Pmpr\Common\Foundation\Traits\AttributeTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; abstract class Field { use ArgsTrait, AlertTrait, HelperTrait, ToArrayTrait, WrapperTrait, TemplateTrait, AttributeTrait; const wcmoyuggmesegmcy = "\x2d\43\55"; protected ?string $id = null; protected ?string $type = null; protected ?string $icon = null; protected ?string $name = null; protected $value; protected $default; protected ?string $title = null; protected ?string $tip = null; protected ?string $description = null; protected int $priority = 0; protected bool $enable = true; protected array $callbacks = [Constants::ciyoccqkiamemcmm => null, Constants::wikgqsqysyuoykse => null, Constants::rsaeoiceoeiomukk => null]; protected $sanitizer; protected array $containerAttrs = []; protected $parent = null; protected bool $storable = true; protected array $errors = []; protected array $labelAttrs = []; protected bool $showLabel = true; protected bool $verified = false; protected bool $verifiable = false; protected ?string $component = null; protected ?Element $container = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { $this->ggiaseqygioygumq($aokagokqyuysuksm)->usuqmwksoeaayaig($aokagokqyuysuksm)->aseocggwwegcmqes($sqeykgyoooqysmca); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\x73\x61\156\x69\x74\x69\172\145"))) { goto maiokoamiosssisk; } $this->sanitizer = [$this, $qgciuiagkkguykgs]; maiokoamiosssisk: $this->emcamkaesyeaaqgm([Constants::sgogkskaqeoiyygs => false, Constants::ceykmaywyicawmau => false]); $aokagokqyuysuksm = (string) $this->mwikyscisascoeea(); $this->mkguiwagcqikiack(); $this->qigsyyqgewgskemg("\160\162\x2d\55\146\151\145\154\144\x20\146\151\145\154\x64\55\x69\144\55{$aokagokqyuysuksm}"); $this->kakecegieeqyyayu()->eskgwaywimqcwcyy("\146\x69\x65\154\144\x2d\151\144", $aokagokqyuysuksm); $this->kakecegieeqyyayu()->eskgwaywimqcwcyy("\146\151\x65\x6c\x64\55\164\171\160\145", $sqeykgyoooqysmca); if (!($sqeykgyoooqysmca !== Constants::soqecysmeyiyyyys)) { goto qqqseeocmmummkga; } $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\55\146\x69\145\x6c\144\55\166\x69\163\x69\142\154\145"); qqqseeocmmummkga: } public function cqusmgskowmesgcg() : ?string { return $this->component; } public function askmmuauqcuuqsea(?string $wksoawcgagcgoask, bool $euueacigmgoqkimu = true) : self { if (!$euueacigmgoqkimu) { goto wwwyugiayoaucqiu; } $wksoawcgagcgoask = "\120\141\156\145\x6c{$wksoawcgagcgoask}\111\156\x70\x75\164"; wwwyugiayoaucqiu: $this->component = $wksoawcgagcgoask; return $this; } public function wowamsaiqwikqoqa() : ?bool { return $this->verified; } public function cekywgkuyuckekeg() : self { $this->verified = true; $this->oykaosmaegqwmoga()->qcgocuceocquqcuw("\162\x65\x61\x64\x6f\156\x6c\171", true); return $this; } public function iokkueaqiswaewyq() : ?bool { return $this->verifiable; } public function uqiyecacqiyeaqqo() : self { $this->verifiable = true; return $this; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function suaookwiwycuwmuk($uqyaagwcuoewkkss) : self { return $this->gmywsauuqwcmakuc("\x76\141\x6c\x69\144\x61\164\x6f\x72", $uqyaagwcuoewkkss); } public function lawggeskegeosicy(string $koegqoagisewcica, array $uiewakwqscemywuo = []) : self { $this->aimwwacyywceeoyu("\x65\x66\146\145\143\164\141\142\x6c\x65", [Constants::ON => $koegqoagisewcica, Constants::yeowwkiiyimoykye => $uiewakwqscemywuo]); return $this; } public function ccewgoaawmaoiqqq($qecuekqmeaiykeek) : self { return $this->igiywquyccyiaucw(Constants::sssoieywiewykmam, $qecuekqmeaiykeek); } public function ykeewiooiammwoko(array $oammesyieqmwuwyi) : self { foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $this->qyymoouyewokoeew($igqsaukqcqscimok[Constants::ykqyicwaggyuuuwo], $igqsaukqcqscimok[Constants::ymckmcsiymwqucoq], $igqsaukqcqscimok[Constants::REVERSE] ?? false); wcksgisuiomywugm: } iswgeeweeweswyoy: return $this; } public function qyymoouyewokoeew($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, bool $iiwmeimguameeome = false) : self { if (!($ikgwqyuyckaewsow === $this->mwikyscisascoeea() || is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow, true))) { goto mwwqyciigykaycis; } wp_die("\171\157\165\x20\x61\162\145\x20\x74\162\x79\x69\156\x67\40\164\157\x20\144\151\x73\x61\x62\154\x65\40{$this->mwikyscisascoeea()}\40\151\x6e\160\x75\x74\x20\142\x79\x20\x69\164\x73\145\x6c\x66\x2e"); mwwqyciigykaycis: if ($this->wuyimwscukmqqsqk("\x64\x69\163\x61\x62\x6c\x65\162")) { goto geacaysasaiqsewo; } $this->caokeucsksukesyo()->usugyumcgeaaowsi()->wmuqwaewssekqymw(); geacaysasaiqsewo: $this->aimwwacyywceeoyu("\144\151\163\x61\x62\154\x65\x72", [Constants::REVERSE => $iiwmeimguameeome, Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]); return $this; } public function qyucewwiggkyeaso($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, bool $iiwmeimguameeome = false) : self { if (!($ikgwqyuyckaewsow === $this->mwikyscisascoeea() || is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow, true))) { goto kigeagsoeqmgaosa; } wp_die("\171\157\165\x20\141\x72\145\40\164\x72\171\151\x6e\147\x20\x74\157\40\x69\x67\156\x6f\162\145\x20{$this->mwikyscisascoeea()}\40\x69\x6e\160\165\x74\40\142\x79\40\151\164\x73\x65\154\146\56"); kigeagsoeqmgaosa: if ($this->wuyimwscukmqqsqk("\x76\141\x6e\151\163\x68\x65\x72")) { goto iiowkswmewooomes; } $this->caokeucsksukesyo()->usugyumcgeaaowsi()->qymwusgoassaaacs(); iiowkswmewooomes: $this->aimwwacyywceeoyu("\166\x61\x6e\x69\x73\x68\x65\x72", [Constants::REVERSE => $iiwmeimguameeome, Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]); return $this; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $this->default = $ggauoeuaesiymgee; $this->kakecegieeqyyayu()->eskgwaywimqcwcyy("\144\145\x66\x61\x75\x6c\164", $ggauoeuaesiymgee); return $this; } public function oiswysuiioecsaae() { return $this->default; } public function gkkgsyeumismsyse($egkyssmuqcwaciya) : self { return $this->awagoqyseewoeoee("\x63\154\141\x73\163", $egkyssmuqcwaciya); } public function awagoqyseewoeoee($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->labelAttrs = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($this->uksywogamqoggsia(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie)); return $this; } public function uksywogamqoggsia() : array { return $this->labelAttrs; } public function ougeeuegcgmwkcim() : bool { return $this->showLabel; } public function cysmiqkqasmweeem(bool $uuagoowwgcuosuuu) : self { $this->showLabel = $uuagoowwgcuosuuu; return $this; } public function uuagoowwgcuosuuu() : self { $this->cysmiqkqasmweeem(true); return $this; } public function macygmcekgqwmcwk() : self { $this->cysmiqkqasmweeem(false); return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function uekikuwmokqsqoga(string $sqeykgyoooqysmca) : self { return $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, $sqeykgyoooqysmca); } public function ygqycmmkoiuocoia() { return $this->parent; } public function mmukacawgocecuqg() : bool { return $this->ygqycmmkoiuocoia() !== null; } public function mmuyuqussqkgkega($omwmuycmeqcqokom) : self { $this->parent = $omwmuycmeqcqokom; return $this; } public function ikaukuqokwgsyeia() { return $this->sanitizer; } public function mkmssscwmeekwgqo() : self { return $this->igiywquyccyiaucw(Constants::sgogkskaqeoiyygs, true); } public function wmociykwcyesssui() : bool { return $this->imkyoqyocosuqasu(Constants::sgogkskaqeoiyygs, false); } public function ggekcmkgawqocsms($eswwueuissckicww) : self { return $this->eycskusaeseuwiyc([Constants::NAME => $eswwueuissckicww, Constants::gouqcwikiiygyasc => $eswwueuissckicww]); } public function agmmqsowmyywagcm() : bool { return $this->storable; } public function cqwcmeomuquwimsa() : self { $this->storable = false; return $this; } public function ayseokmqycoqaigc() : bool { return $this->enable; } public function wywmmeyauqkeskeq(bool $oqkgomucoyswikgk) : self { $this->enable = $oqkgomucoyswikgk; return $this; } public function oykaosmaegqwmoga(bool $oykaosmaegqwmoga = false, bool $qqomumygoacsmsie = false) : self { if (!$qqomumygoacsmsie) { goto qqgoygcaggkkisyw; } if (!$oykaosmaegqwmoga) { goto wewikewycwowkqui; } $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\146\x69\x65\154\144\x2d\144\151\163\x61\142\x6c\145\144"); wewikewycwowkqui: goto imiieooawogoyagw; qqgoygcaggkkisyw: $this->wywmmeyauqkeskeq(!$oykaosmaegqwmoga); imiieooawogoyagw: return $this; } public function mwikyscisascoeea() : ?string { return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self { $this->qcgocuceocquqcuw(Constants::gouqcwikiiygyasc, $aokagokqyuysuksm); $this->id = $aokagokqyuysuksm; return $this; } public function eumecwmqmukqgyea() : self { return $this->igiywquyccyiaucw(Constants::ceykmaywyicawmau, true); } public function smcqugueqiumkygs() : self { $this->qcgocuceocquqcuw(Constants::wckiuqwamiywoayi, Constants::OFF); return $this->igiywquyccyiaucw(Constants::wckiuqwamiywoayi, true); } public function msmiagueogcsucgc() : bool { return $this->imkyoqyocosuqasu(Constants::ceykmaywyicawmau, false); } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->qcgocuceocquqcuw(Constants::NAME, $ymqmyyeuycgmigyo); $this->name = $ymqmyyeuycgmigyo; return $this; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self { $this->description = $ukwokcuqauuosmoo; return $this; } public function weuwoosgqakykgac() : ?string { return $this->tip; } public function woiuekkeucikkyum(?string $auucmikeiywsskqa) : self { $this->tip = $auucmikeiywsskqa; return $this; } public function yywskysiycwkwsgw() : int { return $this->priority; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function swsaakqseuaacagq($uusmaiomayssaecw, $ekiuyucoiagmscgy) : self { $this->callbacks[$uusmaiomayssaecw] = $ekiuyucoiagmscgy; return $this; } public function ekkwaykokcgqkmoi($uusmaiomayssaecw) : ?callable { $ekiuyucoiagmscgy = $this->callbacks[$uusmaiomayssaecw] ?? null; if (!($ekiuyucoiagmscgy && !is_callable($ekiuyucoiagmscgy))) { goto imyqaycayqeucsau; } $ekiuyucoiagmscgy = null; imyqaycayqeucsau: return $ekiuyucoiagmscgy; } public function oieekkycgwqacoik($ekiuyucoiagmscgy) : Field { return $this->swsaakqseuaacagq(Constants::rsaeoiceoeiomukk, $ekiuyucoiagmscgy); } public function validate($uwomkgseoiegeume = null, $msqkueqksqwmskak = null) : bool { $eisqsskqimiigkay = true; if (!($ekiuyucoiagmscgy = $this->ekkwaykokcgqkmoi(Constants::rsaeoiceoeiomukk))) { goto ugcquuakimgkmeqc; } $sogksuscggsicmac = $ekiuyucoiagmscgy($uwomkgseoiegeume, $msqkueqksqwmskak, $this); if (is_bool($sogksuscggsicmac)) { goto eoeomqmkgaogkome; } if ($sogksuscggsicmac && is_string($sogksuscggsicmac)) { goto cmcawyswoeumueys; } goto yiqskmikgqukkewq; eoeomqmkgaogkome: $eisqsskqimiigkay = $sogksuscggsicmac; goto yiqskmikgqukkewq; cmcawyswoeumueys: $this->msqsseeaasqysese($sogksuscggsicmac); $eisqsskqimiigkay = false; yiqskmikgqukkewq: ugcquuakimgkmeqc: return $eisqsskqimiigkay; } public function qooeaookuemoqecm() { return $this->value; } public function ysyswymameciiyce() : bool { return !empty($this->qooeaookuemoqecm()); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->value = $eqgoocgaqwqcimie; return $this; } public function kuiecqsycqiiskuq() : self { return $this->gicmuekskmiqgkqc("\162\164\x6c"); } public function kqqqugemmqagucuq() : self { return $this->gicmuekskmiqgkqc("\154\x74\x72"); } private function gicmuekskmiqgkqc($ecysmcqmumqmaagg) : self { return $this->igmaewykumgwoaoy("\x64\151\162", $ecysmcqmumqmaagg)->qigsyyqgewgskemg("\144\x69\162\x65\143\x74\151\x6f\156\55{$ecysmcqmumqmaagg}"); } public function ymoyyqeymakckaee() : array { if ($this->errors) { goto uwkuasmeoueseaou; } $this->errors = (array) $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw($this->aakmagwggmkoiiyu() . "\137\145\162\162\157\162\x73", []); uwkuasmeoueseaou: return $this->errors; } public function msqsseeaasqysese(string $iswcokucwmiosiaq, bool $aecgggeoymywyumm = false) : self { $this->errors[] = htmlentities($iswcokucwmiosiaq); if (!$aecgggeoymywyumm) { goto agcugqouiqgiskcq; } $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ycasmmgsmaaumweg($this->aakmagwggmkoiiyu() . "\x5f\145\x72\x72\157\162\x73", $this->errors, time() + 4); agcugqouiqgiskcq: return $this; } public function gkuouokiccwwqcau($ueeagokqmgisgauy) : self { foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) { $this->msqsseeaasqysese($iswcokucwmiosiaq); oqksakqyecmsuscq: } msaugmwuooqkmwus: return $this; } public function yycesgsucecsmqcm(string $igaagwuyasawwqms, string $moyaaaascoeowegu = Constants::ciyoccqkiamemcmm, string $acuayeeoiwokyomo = Constants::ciyoccqkiamemcmm) : self { $this->qigsyyqgewgskemg("\160\162\x2d\x66\x69\145\154\144\55\165\x70\x64\x61\x74\x61\142\x6c\x65")->gmywsauuqwcmakuc("\165\160\144\x61\x74\x61\142\x6c\145\x2d\x63\x6f\156\146\151\x67\x73", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike([Constants::ciaakykwiwewmksg => $igaagwuyasawwqms, Constants::ouuqcauwoymcwkes => $acuayeeoiwokyomo, Constants::REPLACE => $moyaaaascoeowegu])); return $this; } public function wmwikuasuocmqycw(array $qecuekqmeaiykeek = []) : self { $this->qigsyyqgewgskemg("\x70\162\55\x66\x69\x65\x6c\x64\55\x65\x78\164\145\156\x64\141\x62\x6c\x65")->gmywsauuqwcmakuc("\145\x78\164\145\156\144\141\142\154\x65", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($qecuekqmeaiykeek)); return $this; } public function gysckqgokmciyqcg(?string $pkyyagewkiyckmwy) : self { return $this->qcgocuceocquqcuw("\141\x72\151\x61\x2d\x6c\141\x62\145\x6c", $pkyyagewkiyckmwy); } public function kakecegieeqyyayu() : ?Element { return $this->container; } public function ssseuumiskesuiss() : self { $this->container = null; return $this; } public function mkguiwagcqikiack(Element $kqywgoqsmuswammk = null) : self { if ($kqywgoqsmuswammk) { goto ueeuassqywswigaq; } if ($this->container) { goto sumiomammkayeqis; } $aokagokqyuysuksm = $this->mwikyscisascoeea(); $this->container = new Div("{$aokagokqyuysuksm}\x5f\x63\157\156\x74\x61\x69\x6e\145\162"); sumiomammkayeqis: goto ugkqimokoeicsyqm; ueeuassqywswigaq: $this->container = $kqywgoqsmuswammk; ugkqimokoeicsyqm: return $this; } public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self { $this->gysckqgokmciyqcg($iwiewowoqmoekyqi); return $this->qcgocuceocquqcuw("\x70\154\141\143\x65\150\157\154\x64\x65\x72", $iwiewowoqmoekyqi); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $cmkqisoeyioisqaw = "\160\x72\55\146\x69\x65\x6c\144\x20\160\162\55\146\x69\x65\x6c\x64\55{$this->gueasuouwqysmomu()}\55\x74\171\160\x65"; if (!$this->wmociykwcyesssui()) { goto kyuewcuomwmweguq; } $cmkqisoeyioisqaw .= "\x20\160\162\55\146\x69\x65\x6c\x64\55\x69\x6e\154\151\x6e\145"; kyuewcuomwmweguq: if (!$this->msmiagueogcsucgc()) { goto syokeusmqogkicks; } $cmkqisoeyioisqaw .= "\40\160\x72\x2d\146\x69\145\x6c\144\55\x72\x65\161\165\x69\162\145\x64"; syokeusmqogkicks: if ($this->qooeaookuemoqecm()) { goto oqkqaggagwswaaqi; } $this->iygyugseyaqwywyg($this->oiswysuiioecsaae()); oqkqaggagwswaaqi: if (!($skikiykssoocmmik = $this->kakecegieeqyyayu())) { goto mkosooeggqemyqqy; } $skikiykssoocmmik->qigsyyqgewgskemg($cmkqisoeyioisqaw); if (!$this->qcgakseyaikigqco()) { goto qiiwgkcyqweecqoa; } $skikiykssoocmmik->qigsyyqgewgskemg("\160\162\55\x66\151\145\x6c\144\x2d\150\x61\x73\x2d\x74\x69\164\154\145"); qiiwgkcyqweecqoa: if (!$this->meqceykmywmqgoym()) { goto ekkkweoucuyuqwik; } $skikiykssoocmmik->qigsyyqgewgskemg("\x70\x72\55\146\151\x65\154\144\x2d\150\x61\x73\x2d\144\x65\x73\x63\162\151\160\x74\151\x6f\156"); ekkkweoucuyuqwik: mkosooeggqemyqqy: if (!($qqeasouwkusioeai = $this->imkyoqyocosuqasu("\x64\151\x73\x61\x62\x6c\x65\162"))) { goto uyugkucyiqymcuus; } $qqeasouwkusioeai = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($qqeasouwkusioeai, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\160\x72\55\146\151\145\x6c\144\x2d\x64\x69\x73\x61\x62\x6c\145\x72")->gmywsauuqwcmakuc("\x64\x69\163\141\142\154\x65\162\55\x63\x6f\156\146\x69\x67\163", $qqeasouwkusioeai); uyugkucyiqymcuus: if (!($yweqwaeksimikyoi = $this->imkyoqyocosuqasu("\166\x61\156\x69\163\x68\x65\x72"))) { goto kokkacggmoaagiae; } $yweqwaeksimikyoi = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($yweqwaeksimikyoi, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\x70\x72\55\146\x69\x65\154\144\x2d\166\141\x6e\x69\x73\x68\145\x72")->gmywsauuqwcmakuc("\x76\141\x6e\151\x73\x68\x65\x72\55\x63\157\x6e\x66\x69\x67\x73", $yweqwaeksimikyoi); kokkacggmoaagiae: if (!($imeiywkoswyqoawe = $this->imkyoqyocosuqasu("\x65\146\x66\145\x63\x74\141\x62\154\145"))) { goto iweickamaucqgysq; } $imeiywkoswyqoawe = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($imeiywkoswyqoawe, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\x70\162\55\146\x69\x65\154\144\x2d\x65\146\x66\x65\143\x74\x61\142\x6c\x65")->gmywsauuqwcmakuc("\x65\x66\146\x65\143\x74\141\142\x6c\x65\55\143\157\x6e\146\151\147\x73", $imeiywkoswyqoawe); iweickamaucqgysq: if (!($qecuekqmeaiykeek = $this->imkyoqyocosuqasu(Constants::sssoieywiewykmam))) { goto aecamacaoskqmccs; } $qecuekqmeaiykeek = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($qecuekqmeaiykeek, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\x70\162\x2d\146\x69\145\154\x64\x2d\x76\141\162\x69\x61\x74\x69\x6f\156\141\154")->gmywsauuqwcmakuc("\x76\141\x72\x69\x61\164\151\157\x6e\x73", $qecuekqmeaiykeek); aecamacaoskqmccs: } public function gayqqwwuycceosii(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kyyscqqmsikeuaea => false, Constants::skgoiqckokigcmug => false]); $qookweymeqawmcwo = $this->sacmkccceuywoqsq($ywmkwiwkosakssii[Constants::kyyscqqmsikeuaea], $ywmkwiwkosakssii); $qookweymeqawmcwo[Constants::miceosguuseyyuqe] = $this; return $qookweymeqawmcwo; } public function aqiccywoiqiskwaw() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\x2d\146\x69\x65\x6c\x64\55\146\x75\x6c\x6c\x2d\167\151\x64\164\150"); return $this; } public function render(array $ywmkwiwkosakssii = []) : string { $nsmgceoqaqogqmuw = ''; if (!$this->ayseokmqycoqaigc()) { goto wwmscmqgasawkkwa; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qaacaqioeyiuakeu => false, Constants::emkkgysokckswycs => false]); $owgumcsyqsamiemg = FormGenerator::symcgieuakksimmu(); if (!$this->ymoyyqeymakckaee()) { goto oekmoqcqwyauiaeg; } $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\x66\151\145\154\x64\55\151\x6e\166\141\x6c\151\x64"); oekmoqcqwyauiaeg: $nsmgceoqaqogqmuw = $owgumcsyqsamiemg->iuygowkemiiwqmiw($this->gueasuouwqysmomu(), $this->gayqqwwuycceosii($ywmkwiwkosakssii), ["\x63\x6c\x61\163\163" => static::class, Constants::qaacaqioeyiuakeu => false]); if (!($skikiykssoocmmik = $this->kakecegieeqyyayu())) { goto uiqaoucyoiwykywa; } $nsmgceoqaqogqmuw = $skikiykssoocmmik->render($nsmgceoqaqogqmuw); uiqaoucyoiwykywa: if (!$ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu]) { goto umawcakyaoykccao; } echo $nsmgceoqaqogqmuw; umawcakyaoykccao: wwmscmqgasawkkwa: return $nsmgceoqaqogqmuw; } }
