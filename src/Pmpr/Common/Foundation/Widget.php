<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Text; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ComponentTrait; use WP_Widget; abstract class Widget extends WP_Widget { use SingletonTrait, ComponentTrait, CommonTrait, FieldsTrait; public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = []) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($aokagokqyuysuksm) { goto wcosqycukygikgsa; } $aokagokqyuysuksm = $yyauwyaeewsickwk->ogimogiceeekegoi($this->ugwmakayykcmcmqa()); wcosqycukygikgsa: $wksoawcgagcgoask = $this->akuociswqmoigkas(); $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\x63\x6c\141\x73\163\156\141\x6d\x65" => $yyauwyaeewsickwk->igcwuwuymeuomaqo("{$wksoawcgagcgoask}\x2d{$aokagokqyuysuksm}"), Constants::eqkeooqcsscoggia => $mkqqqewsokcswckc]); parent::__construct("{$wksoawcgagcgoask}\x5f{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg); $this->gyqeoeemeemicgqi(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\145\146\157\x72\145\137\145\156\161\165\145\165\145\x5f\x62\141\143\153\x65\x6e\x64\x5f\x61\163\x73\145\x74\x73", [$this, "\153\153\x75\143\155\x63\x61\141\x79\x61\151\145\x61\x73\171\151"]); $this->qcsmikeggeemccuu("\141\144\x6d\151\156\x5f\x69\x6e\x69\x74", [$this, "\171\x65\x79\x69\147\x75\x79\x65\x67\155\x6d\x79\165\x73\x65\x61"])->qcsmikeggeemccuu("\167\x69\144\x67\x65\x74\163\137\151\156\x69\164", [$this, "\x72\145\147\x69\x73\x74\x65\x72"])->qcsmikeggeemccuu("\141\x64\x6d\x69\156\137\146\x6f\157\164\145\x72\55\167\151\144\x67\145\x74\x73\x2e\160\150\160", [$this, "\147\147\x73\153\143\147\x67\x61\x61\x65\x61\153\147\141\x71\143"]); } public function register() { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->sqiwaoiciieomeyo(self::uqggkiomyiceyooa()); } public function yeyiguyegmmyusea() { } public final function kkucmcaayaieasyi() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->kkessyykwcqgecqc()) { goto kysgwgoeaoiyaqea; } $this->enqueue(); kysgwgoeaoiyaqea: } public function enqueue() { } public function ggskcggaaeakgaqc() { } public function update($new_instance, $old_instance) : array { $owgumcsyqsamiemg = is_array($old_instance) ? $old_instance : []; $this->ykwqaukkycogooii(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($this->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $aiowsaccomcoikus) { $owgumcsyqsamiemg[$aokagokqyuysuksm] = $gkyciwoiiisgywcs->get($new_instance, $aokagokqyuysuksm); gsymoqgeekuqeiia: } scssmwmagsaouymy: return $owgumcsyqsamiemg; } public function form($owgumcsyqsamiemg) { $this->ykwqaukkycogooii(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto gimsqaumkeequwwu; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { goto kasewecuqyooymwi; } unset($ikgwqyuyckaewsow[$aokagokqyuysuksm]); goto yqoaamqqqokguyis; kasewecuqyooymwi: $ymqmyyeuycgmigyo = $this->get_field_name($aokagokqyuysuksm); $aiowsaccomcoikus->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->ggiaseqygioygumq($ymqmyyeuycgmigyo); if (!($eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, $aokagokqyuysuksm))) { goto mkwemyioswykkqyc; } $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); mkwemyioswykkqyc: if (!($aiowsaccomcoikus instanceof Text || $aiowsaccomcoikus instanceof Select)) { goto muqyyaqmeuimcuey; } $aiowsaccomcoikus->mkmssscwmeekwgqo(); muqyyaqmeuimcuey: $ikgwqyuyckaewsow[$aokagokqyuysuksm] = $aiowsaccomcoikus; yqoaamqqqokguyis: mqeykkkeiygqugcq: } yaeakiwsegsacsge: $this->caokeucsksukesyo()->wmkogisswkckmeua()->gusskggqyeisgsoy($this->id_base)->ewweaossowcqywaw($ikgwqyuyckaewsow)->render(true); gimsqaumkeequwwu: } public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg) { if (!(is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg))) { goto syweyeiawwgmkmio; } $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg); if (!$nsmgceoqaqogqmuw) { goto iaamqeeowsgwogau; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ckyiayyeksyqosei, ''); echo $nsmgceoqaqogqmuw; echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gkkeyqoigqiukkqk, ''); iaamqeeowsgwogau: syweyeiawwgmkmio: } public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string { $aqykuigiuwmmcieu = ''; $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg); $qqscaoyqikuyeoaw = $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($qookweymeqawmcwo[Constants::okciuaikiyaecwmy] ?? $this->ugwmakayykcmcmqa()); if (!$this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) { goto akaeugoqiowqeiay; } $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => false]); akaeugoqiowqeiay: return $aqykuigiuwmmcieu; } public function qoqyomiqwooaeoiy($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = [], $qookweymeqawmcwo = []) : bool { return !empty($qookweymeqawmcwo); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { return $owgumcsyqsamiemg; } public function ykwqaukkycogooii() { $this->ecwgiiuacoaokqkw(); } public function ecwgiiuacoaokqkw() { } }
