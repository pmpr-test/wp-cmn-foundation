<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abce8e3ee38             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Text; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use WP_Widget; abstract class Widget extends WP_Widget { use SingletonTrait, SettingTrait, TemplateTrait, WrapperTrait, HelperTrait, FieldsTrait, CommonTrait, HookTrait; public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = []) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if (!$aokagokqyuysuksm) { $aokagokqyuysuksm = $yyauwyaeewsickwk->sggauymmqugqouay($this); } $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\143\154\141\x73\x73\156\141\155\145" => $yyauwyaeewsickwk->igcwuwuymeuomaqo("{$wksoawcgagcgoask}\55{$aokagokqyuysuksm}"), Constants::eqkeooqcsscoggia => $mkqqqewsokcswckc]); parent::__construct("{$wksoawcgagcgoask}\137{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg); $this->gyqeoeemeemicgqi(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\x65\x66\157\162\x65\137\145\156\161\x75\x65\x75\x65\137\x62\141\x63\153\x65\156\x64\137\141\163\163\145\164\163", [$this, "\x6b\153\x75\143\155\x63\x61\x61\171\x61\x69\145\x61\163\171\x69"]); $this->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\137\151\156\x69\164", [$this, "\x79\x65\x79\151\147\x75\171\x65\147\155\x6d\x79\165\x73\145\141"])->qcsmikeggeemccuu("\x77\x69\144\x67\x65\x74\163\x5f\151\156\x69\x74", [$this, "\x72\145\x67\x69\163\x74\145\162"])->qcsmikeggeemccuu("\x61\x64\155\x69\156\137\x66\157\x6f\x74\x65\x72\55\167\151\144\147\x65\x74\x73\56\x70\x68\x70", [$this, "\147\147\163\153\143\147\x67\141\141\145\x61\x6b\x67\141\161\x63"]); } public function register() { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->sqiwaoiciieomeyo(static::class); } public function yeyiguyegmmyusea() { } public final function kkucmcaayaieasyi() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->kkessyykwcqgecqc()) { $this->enqueue(); } } public function enqueue() { } public function ggskcggaaeakgaqc() { } public function update($new_instance, $old_instance) : array { $owgumcsyqsamiemg = is_array($old_instance) ? $old_instance : []; $this->ykwqaukkycogooii(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($this->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $aiowsaccomcoikus) { $owgumcsyqsamiemg[$aokagokqyuysuksm] = $gkyciwoiiisgywcs->get($new_instance, $aokagokqyuysuksm); } return $owgumcsyqsamiemg; } public function form($owgumcsyqsamiemg) { $this->ykwqaukkycogooii(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($ikgwqyuyckaewsow) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $ymqmyyeuycgmigyo = $this->get_field_name($aokagokqyuysuksm); $aiowsaccomcoikus->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->ggiaseqygioygumq($ymqmyyeuycgmigyo); if ($eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, $aokagokqyuysuksm)) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } if ($aiowsaccomcoikus instanceof Text || $aiowsaccomcoikus instanceof Select) { $aiowsaccomcoikus->mkmssscwmeekwgqo(); } $ikgwqyuyckaewsow[$aokagokqyuysuksm] = $aiowsaccomcoikus; } else { unset($ikgwqyuyckaewsow[$aokagokqyuysuksm]); } } $this->caokeucsksukesyo()->wmkogisswkckmeua()->gusskggqyeisgsoy($this->id_base)->ewweaossowcqywaw($ikgwqyuyckaewsow)->render(true); } } public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg) { if (is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg)) { $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg); if ($nsmgceoqaqogqmuw) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ckyiayyeksyqosei, ''); echo $nsmgceoqaqogqmuw; echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gkkeyqoigqiukkqk, ''); } } } public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string { $aqykuigiuwmmcieu = ''; $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg); $qqscaoyqikuyeoaw = $qookweymeqawmcwo[Constants::okciuaikiyaecwmy] ?? $this->caokeucsksukesyo()->owgcciayoweymuws()->sggauymmqugqouay($this); if ($this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) { $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => false]); } return $aqykuigiuwmmcieu; } public function qoqyomiqwooaeoiy($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = [], $qookweymeqawmcwo = []) : bool { return !empty($qookweymeqawmcwo); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { return $owgumcsyqsamiemg; } public function ykwqaukkycogooii() { $this->ecwgiiuacoaokqkw(); } public function ecwgiiuacoaokqkw() { } }
