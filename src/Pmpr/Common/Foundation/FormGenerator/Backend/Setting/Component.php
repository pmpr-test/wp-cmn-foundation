<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77d1b4081             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; abstract class Component { use HookTrait, HelperTrait, ObjectTrait, WrapperTrait, CommonTrait, ComponentTrait, SingletonTrait; protected $setting; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x6d\x69\156\137\151\156\151\164", [$this, "\171\x65\171\151\x67\x75\x79\x65\147\x6d\x6d\171\165\163\x65\141"]); $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->waqewsckuayqguos("\x70\x72\145\x5f\x73\x61\x76\145\137{$amakmumgguksgmum}\x5f\157\160\164\151\x6f\156\x73", [$this, "\165\161\157\x75\x6d\x79\157\153\147\143\x69\147\x69\141\x77\163"]); } public function kgquecmsgcouyaya() { $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->aqaqisyssqeomwom("\141\x66\164\145\x72\x5f\147\x65\156\145\x72\x61\164\x65\x5f{$amakmumgguksgmum}\x5f\160\141\x6e\x65\x6c", [$this, "\171\x6b\167\x71\141\x75\153\x6b\x79\143\x6f\147\157\x6f\151\151"])->aqaqisyssqeomwom("{$amakmumgguksgmum}\137\144\145\x66\141\x75\x6c\164\163\x5f\157\160\164\151\x6f\x6e\x73", [$this, "\x61\x69\161\145\x79\x77\x71\151\171\x71\x63\145\153\x67\x69\165"], 10, 2); } public function eiwcuqigayigimak() { return $this->setting; } public function msaksssmsuscmwaq() : string { $uusmaiomayssaecw = ''; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { goto oqyeyuocsyoeogim; } if (!is_string($amakmumgguksgmum)) { goto souucimemowwaseo; } $uusmaiomayssaecw = $amakmumgguksgmum; souucimemowwaseo: goto egawiicamoykemqq; oqyeyuocsyoeogim: $uusmaiomayssaecw = $amakmumgguksgmum->cisyiemkeykgkomc(); egawiicamoykemqq: return $uusmaiomayssaecw; } public function mggwieqomgcuskme() : ?Setting { $mksyucucyswaukig = null; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if (!$amakmumgguksgmum instanceof Setting) { goto qqwukskiymcymgqc; } $mksyucucyswaukig = $amakmumgguksgmum; qqwukskiymcymgqc: return $mksyucucyswaukig; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $omkysikckkcieckq = $ggauoeuaesiymgee; if (!($umqqgsiscygmeiem = $this->mggwieqomgcuskme())) { goto ksoygkwycsqicooa; } $omkysikckkcieckq = $umqqgsiscygmeiem->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee); ksoygkwycsqicooa: return $omkysikckkcieckq; } public function yeyiguyegmmyusea() { $umqqgsiscygmeiem = $this->mggwieqomgcuskme(); if (!($umqqgsiscygmeiem && $umqqgsiscygmeiem->qcsgmgoukiouuscw())) { goto akkwoqycamwckeui; } $this->enqueue(); akkwoqycamwckeui: } public function enqueue() { } public function ykwqaukkycogooii() { } public function uqoumyokgcigiaws($qiouiwasaauyaaue) { return $qiouiwasaauyaaue; } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { return $qiouiwasaauyaaue; } }
