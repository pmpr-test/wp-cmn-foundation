<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Text; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ComponentTrait; use WP_Widget; abstract class Widget extends WP_Widget { use SingletonTrait, ComponentTrait, CommonTrait, FieldsTrait; public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = []) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($aokagokqyuysuksm) { goto egoyuuqcqmgkswyg; } $aokagokqyuysuksm = $yyauwyaeewsickwk->ogimogiceeekegoi($this->ugwmakayykcmcmqa()); egoyuuqcqmgkswyg: $wksoawcgagcgoask = $this->akuociswqmoigkas(); $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\143\x6c\x61\x73\163\156\141\155\x65" => $yyauwyaeewsickwk->igcwuwuymeuomaqo("{$wksoawcgagcgoask}\x2d{$aokagokqyuysuksm}"), Constants::eqkeooqcsscoggia => $mkqqqewsokcswckc]); parent::__construct("{$wksoawcgagcgoask}\137{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg); $this->gyqeoeemeemicgqi(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x62\x65\146\157\162\145\x5f\145\156\161\x75\145\x75\145\x5f\142\141\143\153\145\x6e\x64\x5f\141\163\163\x65\x74\163", [$this, "\x6b\153\x75\143\155\143\141\x61\171\141\x69\145\141\x73\171\151"]); $this->qcsmikeggeemccuu("\141\144\155\151\x6e\x5f\151\156\151\x74", [$this, "\x79\145\x79\151\x67\x75\x79\145\x67\155\155\171\x75\163\145\x61"])->qcsmikeggeemccuu("\x77\x69\x64\x67\x65\164\163\x5f\x69\156\x69\x74", [$this, "\x72\x65\x67\x69\163\164\145\162"])->qcsmikeggeemccuu("\x61\144\x6d\151\x6e\137\x66\157\x6f\x74\145\x72\55\x77\x69\144\x67\145\164\163\x2e\x70\x68\x70", [$this, "\147\147\163\153\143\147\x67\141\x61\x65\141\x6b\147\x61\x71\x63"]); } public function register() { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->sqiwaoiciieomeyo(self::uqggkiomyiceyooa()); } public function yeyiguyegmmyusea() { } public final function kkucmcaayaieasyi() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->kkessyykwcqgecqc()) { goto jiiiygsseagcmycw; } $this->enqueue(); jiiiygsseagcmycw: } public function enqueue() { } public function ggskcggaaeakgaqc() { } public function update($new_instance, $old_instance) : array { $owgumcsyqsamiemg = is_array($old_instance) ? $old_instance : []; $this->ykwqaukkycogooii(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($this->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $aiowsaccomcoikus) { $owgumcsyqsamiemg[$aokagokqyuysuksm] = $gkyciwoiiisgywcs->get($new_instance, $aokagokqyuysuksm); magaykaioygmiciq: } osiemgqgiycaymio: return $owgumcsyqsamiemg; } public function form($owgumcsyqsamiemg) { $this->ykwqaukkycogooii(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto siiwoymcomqegmya; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { goto gquyeowwseuycuoq; } unset($ikgwqyuyckaewsow[$aokagokqyuysuksm]); goto uecycmeaoqgqcomm; gquyeowwseuycuoq: $ymqmyyeuycgmigyo = $this->get_field_name($aokagokqyuysuksm); $aiowsaccomcoikus->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->ggiaseqygioygumq($ymqmyyeuycgmigyo); if (!($eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, $aokagokqyuysuksm))) { goto uiakqoyqmcwokgse; } $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); uiakqoyqmcwokgse: if (!($aiowsaccomcoikus instanceof Text || $aiowsaccomcoikus instanceof Select)) { goto oksimyciqsugcami; } $aiowsaccomcoikus->mkmssscwmeekwgqo(); oksimyciqsugcami: $ikgwqyuyckaewsow[$aokagokqyuysuksm] = $aiowsaccomcoikus; uecycmeaoqgqcomm: kmkwsqgumkwgemwc: } qiokyyweaoysyeci: $this->caokeucsksukesyo()->wmkogisswkckmeua()->gusskggqyeisgsoy($this->id_base)->ewweaossowcqywaw($ikgwqyuyckaewsow)->render(true); siiwoymcomqegmya: } public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg) { if (!(is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg))) { goto cgqmyikikqgmksgg; } $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg); if (!$nsmgceoqaqogqmuw) { goto wkokasiqoeycyukq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ckyiayyeksyqosei, ''); echo $nsmgceoqaqogqmuw; echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gkkeyqoigqiukkqk, ''); wkokasiqoeycyukq: cgqmyikikqgmksgg: } public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string { $aqykuigiuwmmcieu = ''; $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg); $qqscaoyqikuyeoaw = $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($qookweymeqawmcwo[Constants::okciuaikiyaecwmy] ?? $this->ugwmakayykcmcmqa()); if (!$this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) { goto qioeuukaqkcsiiwk; } $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => false]); qioeuukaqkcsiiwk: return $aqykuigiuwmmcieu; } public function qoqyomiqwooaeoiy($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = [], $qookweymeqawmcwo = []) : bool { return !empty($qookweymeqawmcwo); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { return $owgumcsyqsamiemg; } public function ykwqaukkycogooii() { $this->ecwgiiuacoaokqkw(); } public function ecwgiiuacoaokqkw() { } }
