<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038c53dd59             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Requirements_Check; class Plugin extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\161\165\x65\162\171\x5f\160\154\165\x67\x69\x6e\x73") : array { $ksaameoqigiaoigg = []; $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ciugwooasaqcywas($ywmkwiwkosakssii, $aiamqeawckcsuaou); if (!is_wp_error($sogksuscggsicmac)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($mseykiqqcmyesccu = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x70\154\x75\147\151\x6e\x73")) { switch ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::aisguagukaewucii, Constants::eoaiagsgqsmskugs)) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($mseykiqqcmyesccu as $mkysicwccoeicumg) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::ouywiegeiyuaaawo)] = $gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::NAME); } break; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: foreach ($mseykiqqcmyesccu as $mkysicwccoeicumg) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::ouywiegeiyuaaawo)] = $mkysicwccoeicumg; } break; } } } return $ksaameoqigiaoigg; } public function yicegakcoioyuwos() : array { return (array) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\141\143\x74\x69\166\145\x5f\x70\x6c\x75\147\x69\x6e\x73", []); } public function ggocakcisguuokai(?string $mkysicwccoeicumg) : bool { return $this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ggocakcisguuokai($mkysicwccoeicumg) || $this->sioyqaykmwwugmgi($mkysicwccoeicumg); } public function kyiokwokcqqmgicy() : bool { return $this->ggocakcisguuokai("\145\x6c\x65\155\x65\x6e\164\157\162\x2f\x65\154\x65\x6d\x65\156\x74\157\162\56\x70\x68\160"); } public function sioyqaykmwwugmgi(?string $mkysicwccoeicumg) : bool { $ggocakcisguuokai = false; if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsaomcwyacqcumaa()) { $mseykiqqcmyesccu = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->kuaqqosyyoqiueym("\x61\143\x74\151\166\145\137\x73\151\x74\x65\167\x69\x64\145\137\160\154\165\x67\151\x6e\163"); $ggocakcisguuokai = isset($mseykiqqcmyesccu[$mkysicwccoeicumg]); } return $ggocakcisguuokai; } public function sskmceyamwugkaii(array $ywmkwiwkosakssii = []) : bool { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x70\150\160" => "\67\56\x34", "\167\160" => "\65\x2e\x32"]); $gioggcykgoikcwiy = new WP_Requirements_Check($ywmkwiwkosakssii); return $gioggcykgoikcwiy->passes(); } }
