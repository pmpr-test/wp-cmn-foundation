<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e16ccfaa782             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; abstract class Component { use HookTrait, HelperTrait, ObjectTrait, WrapperTrait, CommonTrait, ComponentTrait, SingletonTrait; protected $setting; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\156\137\x69\x6e\151\164", [$this, "\x79\145\171\151\147\165\171\x65\147\155\155\171\x75\x73\145\x61"]); $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->waqewsckuayqguos("\160\162\x65\137\163\141\166\145\137{$amakmumgguksgmum}\x5f\x6f\x70\164\x69\x6f\156\163", [$this, "\165\161\x6f\x75\x6d\x79\x6f\153\x67\143\x69\x67\151\x61\x77\163"]); } public function kgquecmsgcouyaya() { $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->aqaqisyssqeomwom("\141\x66\164\x65\x72\137\147\x65\x6e\145\x72\x61\164\x65\137{$amakmumgguksgmum}\x5f\160\x61\156\x65\154", [$this, "\171\153\167\161\141\x75\153\153\171\143\157\x67\157\157\x69\x69"])->aqaqisyssqeomwom("{$amakmumgguksgmum}\137\x64\x65\146\141\165\x6c\164\x73\137\x6f\x70\x74\151\x6f\x6e\163", [$this, "\x61\x69\x71\x65\171\167\161\151\171\x71\x63\145\x6b\x67\151\x75"], 10, 2); } public function eiwcuqigayigimak() { return $this->setting; } public function msaksssmsuscmwaq() : string { $uusmaiomayssaecw = ''; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { goto kswkouussqmqsssy; } if (!is_string($amakmumgguksgmum)) { goto kqkeomoaociyuoye; } $uusmaiomayssaecw = $amakmumgguksgmum; kqkeomoaociyuoye: goto emomkqccysciiqya; kswkouussqmqsssy: $uusmaiomayssaecw = $amakmumgguksgmum->cisyiemkeykgkomc(); emomkqccysciiqya: return $uusmaiomayssaecw; } public function mggwieqomgcuskme() : ?Setting { $mksyucucyswaukig = null; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if (!$amakmumgguksgmum instanceof Setting) { goto ywykuacciwwkwmmy; } $mksyucucyswaukig = $amakmumgguksgmum; ywykuacciwwkwmmy: return $mksyucucyswaukig; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $omkysikckkcieckq = $ggauoeuaesiymgee; if (!($umqqgsiscygmeiem = $this->mggwieqomgcuskme())) { goto qgcgucmskokqquwk; } $omkysikckkcieckq = $umqqgsiscygmeiem->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee); qgcgucmskokqquwk: return $omkysikckkcieckq; } public function yeyiguyegmmyusea() { $umqqgsiscygmeiem = $this->mggwieqomgcuskme(); if (!($umqqgsiscygmeiem && $umqqgsiscygmeiem->qcsgmgoukiouuscw())) { goto ismoiisskiwmmmiu; } $this->enqueue(); ismoiisskiwmmmiu: } public function enqueue() { } public function ykwqaukkycogooii() { } public function uqoumyokgcigiaws($qiouiwasaauyaaue) { return $qiouiwasaauyaaue; } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { return $qiouiwasaauyaaue; } }
