<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae859a8f03             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Requirements_Check; class Plugin extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\x71\165\145\162\171\137\x70\154\x75\147\151\156\163") : array { $ksaameoqigiaoigg = []; $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ciugwooasaqcywas($ywmkwiwkosakssii, $aiamqeawckcsuaou); if (is_wp_error($sogksuscggsicmac)) { goto ieaayaguiywwyecq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($mseykiqqcmyesccu = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\160\154\x75\147\151\x6e\163"))) { goto yosmywouooecowyi; } switch ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::aisguagukaewucii, Constants::eoaiagsgqsmskugs)) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($mseykiqqcmyesccu as $mkysicwccoeicumg) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::ouywiegeiyuaaawo)] = $gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::NAME); sgskgsyiqcqsiwwe: } gkkowgywckwwcoss: goto igiumgigysasioec; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: foreach ($mseykiqqcmyesccu as $mkysicwccoeicumg) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::ouywiegeiyuaaawo)] = $mkysicwccoeicumg; owcweesegmoeogqc: } qoqasyeyeesqmoye: goto igiumgigysasioec; } cqiuwwcuouuigawo: igiumgigysasioec: yosmywouooecowyi: ieaayaguiywwyecq: return $ksaameoqigiaoigg; } public function yicegakcoioyuwos() : array { return (array) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x61\143\x74\x69\x76\145\137\160\154\165\x67\x69\x6e\163", []); } public function ggocakcisguuokai(?string $mkysicwccoeicumg) : bool { return $this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ggocakcisguuokai($mkysicwccoeicumg) || $this->sioyqaykmwwugmgi($mkysicwccoeicumg); } public function sioyqaykmwwugmgi(?string $mkysicwccoeicumg) : bool { $ggocakcisguuokai = false; if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsaomcwyacqcumaa()) { goto aecaygyqamswuqcu; } $mseykiqqcmyesccu = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->kuaqqosyyoqiueym("\x61\143\x74\151\166\145\137\163\151\164\145\x77\x69\144\145\x5f\160\154\x75\147\x69\x6e\x73"); $ggocakcisguuokai = isset($mseykiqqcmyesccu[$mkysicwccoeicumg]); aecaygyqamswuqcu: return $ggocakcisguuokai; } public function sskmceyamwugkaii(array $ywmkwiwkosakssii = []) : bool { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x70\150\x70" => "\x37\56\64", "\x77\x70" => "\x35\56\x32"]); $gioggcykgoikcwiy = new WP_Requirements_Check($ywmkwiwkosakssii); return $gioggcykgoikcwiy->passes(); } public function kyiokwokcqqmgicy() : bool { return $this->ggocakcisguuokai("\145\x6c\x65\155\x65\156\164\x6f\162\57\145\x6c\x65\x6d\145\156\164\x6f\x72\x2e\160\150\x70"); } }
