<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6794e7648968d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; abstract class Component { use HookTrait, HelperTrait, CommonTrait, ObjectTrait, WrapperTrait, TemplateTrait, SingletonTrait; protected $setting; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x6d\x69\156\x5f\x69\x6e\151\164", [$this, "\171\x65\x79\151\147\x75\x79\145\x67\155\155\171\x75\x73\145\141"]); $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->waqewsckuayqguos("\x70\x72\x65\137\163\141\x76\145\x5f{$amakmumgguksgmum}\x5f\x6f\x70\x74\x69\157\x6e\163", [$this, "\165\x71\157\x75\155\x79\x6f\x6b\147\143\151\x67\151\141\167\x73"]); } public function kgquecmsgcouyaya() { $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->aqaqisyssqeomwom("\141\x66\164\x65\162\137\147\x65\x6e\145\x72\141\164\145\137{$amakmumgguksgmum}\x5f\x70\x61\x6e\x65\154", [$this, "\171\x6b\167\x71\x61\x75\x6b\x6b\171\x63\157\x67\x6f\x6f\x69\151"])->aqaqisyssqeomwom("{$amakmumgguksgmum}\x5f\144\x65\146\x61\x75\154\164\x73\x5f\157\160\x74\151\157\x6e\163", [$this, "\141\x69\x71\x65\x79\167\161\151\x79\161\143\145\x6b\147\x69\165"], 10, 2); } public function eiwcuqigayigimak() { return $this->setting; } public function msaksssmsuscmwaq() : string { $uusmaiomayssaecw = ''; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { $uusmaiomayssaecw = $amakmumgguksgmum->cisyiemkeykgkomc(); } else { if (is_string($amakmumgguksgmum)) { $uusmaiomayssaecw = $amakmumgguksgmum; } } return $uusmaiomayssaecw; } public function mggwieqomgcuskme() : ?Setting { $mksyucucyswaukig = null; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { $mksyucucyswaukig = $amakmumgguksgmum; } return $mksyucucyswaukig; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $omkysikckkcieckq = $ggauoeuaesiymgee; if ($umqqgsiscygmeiem = $this->mggwieqomgcuskme()) { $omkysikckkcieckq = $umqqgsiscygmeiem->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee); } return $omkysikckkcieckq; } public function yeyiguyegmmyusea() { $umqqgsiscygmeiem = $this->mggwieqomgcuskme(); if ($umqqgsiscygmeiem && $umqqgsiscygmeiem->qcsgmgoukiouuscw()) { $this->enqueue(); } } public function enqueue() { } public function ykwqaukkycogooii() { } public function uqoumyokgcigiaws($qiouiwasaauyaaue) { return $qiouiwasaauyaaue; } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { return $qiouiwasaauyaaue; } }
