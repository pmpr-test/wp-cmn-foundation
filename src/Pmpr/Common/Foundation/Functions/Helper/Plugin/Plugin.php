<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b645383f9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Requirements_Check; class Plugin extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\x71\x75\x65\162\171\x5f\160\154\x75\147\151\156\x73") : array { $ksaameoqigiaoigg = []; $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ciugwooasaqcywas($ywmkwiwkosakssii, $aiamqeawckcsuaou); if (!is_wp_error($sogksuscggsicmac)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($mseykiqqcmyesccu = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\160\x6c\165\x67\x69\x6e\163")) { switch ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::aisguagukaewucii, Constants::eoaiagsgqsmskugs)) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($mseykiqqcmyesccu as $mkysicwccoeicumg) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::ouywiegeiyuaaawo)] = $gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::NAME); } break; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: foreach ($mseykiqqcmyesccu as $mkysicwccoeicumg) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::ouywiegeiyuaaawo)] = $mkysicwccoeicumg; } break; } } } return $ksaameoqigiaoigg; } public function yicegakcoioyuwos() : array { return (array) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\141\x63\x74\x69\x76\145\137\x70\154\165\147\x69\156\163", []); } public function ggocakcisguuokai(?string $mkysicwccoeicumg) : bool { return $this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ggocakcisguuokai($mkysicwccoeicumg) || $this->sioyqaykmwwugmgi($mkysicwccoeicumg); } public function kyiokwokcqqmgicy() : bool { return $this->ggocakcisguuokai("\145\154\145\x6d\145\156\164\x6f\162\57\x65\154\x65\x6d\x65\x6e\x74\157\x72\x2e\x70\150\160"); } public function sioyqaykmwwugmgi(?string $mkysicwccoeicumg) : bool { $ggocakcisguuokai = false; if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsaomcwyacqcumaa()) { $mseykiqqcmyesccu = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->kuaqqosyyoqiueym("\x61\143\164\x69\166\145\137\x73\x69\x74\x65\167\151\x64\145\x5f\x70\x6c\x75\x67\151\x6e\163"); $ggocakcisguuokai = isset($mseykiqqcmyesccu[$mkysicwccoeicumg]); } return $ggocakcisguuokai; } public function sskmceyamwugkaii(array $ywmkwiwkosakssii = []) : bool { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\160\150\x70" => "\x37\x2e\x34", "\167\x70" => "\65\x2e\x32"]); $gioggcykgoikcwiy = new WP_Requirements_Check($ywmkwiwkosakssii); return $gioggcykgoikcwiy->passes(); } }
