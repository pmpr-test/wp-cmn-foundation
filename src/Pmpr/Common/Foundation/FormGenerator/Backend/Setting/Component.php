<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67522aeb59a71             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; abstract class Component { use HookTrait, HelperTrait, CommonTrait, ObjectTrait, WrapperTrait, TemplateTrait, SingletonTrait; protected $setting; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\x5f\151\x6e\151\164", [$this, "\171\x65\171\151\147\165\171\145\147\155\155\171\x75\163\145\x61"]); $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->waqewsckuayqguos("\160\162\145\137\163\141\166\x65\x5f{$amakmumgguksgmum}\137\x6f\160\x74\x69\x6f\x6e\163", [$this, "\x75\x71\x6f\x75\155\171\157\x6b\x67\143\151\x67\x69\141\x77\x73"]); } public function kgquecmsgcouyaya() { $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->aqaqisyssqeomwom("\141\146\x74\145\162\137\147\145\x6e\145\162\x61\x74\145\x5f{$amakmumgguksgmum}\137\x70\141\x6e\145\x6c", [$this, "\171\x6b\167\161\141\165\153\x6b\171\x63\x6f\147\x6f\x6f\x69\151"])->aqaqisyssqeomwom("{$amakmumgguksgmum}\137\144\145\x66\141\165\154\x74\x73\x5f\x6f\160\164\x69\157\156\x73", [$this, "\x61\x69\x71\145\171\x77\161\x69\x79\161\x63\145\x6b\147\x69\x75"], 10, 2); } public function eiwcuqigayigimak() { return $this->setting; } public function msaksssmsuscmwaq() : string { $uusmaiomayssaecw = ''; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { $uusmaiomayssaecw = $amakmumgguksgmum->cisyiemkeykgkomc(); } else { if (is_string($amakmumgguksgmum)) { $uusmaiomayssaecw = $amakmumgguksgmum; } } return $uusmaiomayssaecw; } public function mggwieqomgcuskme() : ?Setting { $mksyucucyswaukig = null; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { $mksyucucyswaukig = $amakmumgguksgmum; } return $mksyucucyswaukig; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $omkysikckkcieckq = $ggauoeuaesiymgee; if ($umqqgsiscygmeiem = $this->mggwieqomgcuskme()) { $omkysikckkcieckq = $umqqgsiscygmeiem->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee); } return $omkysikckkcieckq; } public function yeyiguyegmmyusea() { $umqqgsiscygmeiem = $this->mggwieqomgcuskme(); if ($umqqgsiscygmeiem && $umqqgsiscygmeiem->qcsgmgoukiouuscw()) { $this->enqueue(); } } public function enqueue() { } public function ykwqaukkycogooii() { } public function uqoumyokgcigiaws($qiouiwasaauyaaue) { return $qiouiwasaauyaaue; } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { return $qiouiwasaauyaaue; } }
