<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6751a8e52d988             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Text; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use WP_Widget; abstract class Widget extends WP_Widget { use SingletonTrait, SettingTrait, TemplateTrait, WrapperTrait, HelperTrait, FieldsTrait, CommonTrait, HookTrait; public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = []) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if (!$aokagokqyuysuksm) { $aokagokqyuysuksm = $yyauwyaeewsickwk->sggauymmqugqouay($this); } $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\x63\154\141\x73\x73\156\141\155\x65" => $yyauwyaeewsickwk->igcwuwuymeuomaqo("{$wksoawcgagcgoask}\x2d{$aokagokqyuysuksm}"), Constants::eqkeooqcsscoggia => $mkqqqewsokcswckc]); parent::__construct("{$wksoawcgagcgoask}\x5f{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg); $this->gyqeoeemeemicgqi(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x62\x65\x66\x6f\162\145\137\145\x6e\x71\165\x65\x75\x65\x5f\x62\141\x63\x6b\x65\156\144\137\x61\x73\163\x65\x74\x73", [$this, "\x6b\153\165\x63\155\143\x61\141\x79\141\x69\145\x61\x73\171\x69"]); $this->qcsmikeggeemccuu("\141\144\155\x69\156\x5f\151\x6e\x69\164", [$this, "\171\145\x79\x69\147\x75\x79\x65\147\155\155\171\x75\x73\145\x61"])->qcsmikeggeemccuu("\x77\x69\144\147\145\x74\163\137\151\156\x69\164", [$this, "\x72\x65\147\151\163\164\145\162"])->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\x5f\146\157\157\164\x65\x72\55\x77\151\x64\x67\x65\x74\x73\56\160\150\160", [$this, "\x67\147\163\153\x63\x67\147\x61\x61\x65\x61\x6b\147\x61\x71\143"]); } public function register() { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->sqiwaoiciieomeyo(static::class); } public function yeyiguyegmmyusea() { } public final function kkucmcaayaieasyi() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->kkessyykwcqgecqc()) { $this->enqueue(); } } public function enqueue() { } public function ggskcggaaeakgaqc() { } public function update($new_instance, $old_instance) : array { $owgumcsyqsamiemg = is_array($old_instance) ? $old_instance : []; $this->ykwqaukkycogooii(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($this->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $aiowsaccomcoikus) { $owgumcsyqsamiemg[$aokagokqyuysuksm] = $gkyciwoiiisgywcs->get($new_instance, $aokagokqyuysuksm); } return $owgumcsyqsamiemg; } public function form($owgumcsyqsamiemg) { $this->ykwqaukkycogooii(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($ikgwqyuyckaewsow) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $ymqmyyeuycgmigyo = $this->get_field_name($aokagokqyuysuksm); $aiowsaccomcoikus->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->ggiaseqygioygumq($ymqmyyeuycgmigyo); if ($eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, $aokagokqyuysuksm)) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } if ($aiowsaccomcoikus instanceof Text || $aiowsaccomcoikus instanceof Select) { $aiowsaccomcoikus->mkmssscwmeekwgqo(); } $ikgwqyuyckaewsow[$aokagokqyuysuksm] = $aiowsaccomcoikus; } else { unset($ikgwqyuyckaewsow[$aokagokqyuysuksm]); } } $this->caokeucsksukesyo()->wmkogisswkckmeua()->gusskggqyeisgsoy($this->id_base)->ewweaossowcqywaw($ikgwqyuyckaewsow)->render(true); } } public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg) { if (is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg)) { $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg); if ($nsmgceoqaqogqmuw) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ckyiayyeksyqosei, ''); echo $nsmgceoqaqogqmuw; echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gkkeyqoigqiukkqk, ''); } } } public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string { $aqykuigiuwmmcieu = ''; $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg); $qqscaoyqikuyeoaw = $qookweymeqawmcwo[Constants::okciuaikiyaecwmy] ?? $this->caokeucsksukesyo()->owgcciayoweymuws()->sggauymmqugqouay($this); if ($this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) { $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => false]); } return $aqykuigiuwmmcieu; } public function qoqyomiqwooaeoiy($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = [], $qookweymeqawmcwo = []) : bool { return !empty($qookweymeqawmcwo); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { return $owgumcsyqsamiemg; } public function ykwqaukkycogooii() { $this->ecwgiiuacoaokqkw(); } public function ecwgiiuacoaokqkw() { } }
