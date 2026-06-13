<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6a2d1b91d1f34             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use YITH_YWF_Customer; class YITH extends Common { public function omyiyiemmsagcqws($isgkwgyccsiqyguo) { if (class_exists('YITH_YWF_Customer')) { return new YITH_YWF_Customer($isgkwgyccsiqyguo); } return null; } public function eqwoiocgwoaiuseo($isgkwgyccsiqyguo, $smowyuyseuwiaiei) { $icswaaoiwiuomyoo = $this->omyiyiemmsagcqws($isgkwgyccsiqyguo); if ($icswaaoiwiuomyoo) { $icswaaoiwiuomyoo->add_funds($smowyuyseuwiaiei); } } public function isqauasumuiqsiuw($isgkwgyccsiqyguo, $smowyuyseuwiaiei, bool $qouakkukgowkqoqe = false) { $icswaaoiwiuomyoo = $this->omyiyiemmsagcqws($isgkwgyccsiqyguo); if ($icswaaoiwiuomyoo) { if ($qouakkukgowkqoqe) { $icswaaoiwiuomyoo->decrement_funds($smowyuyseuwiaiei); } else { $ocsqcmeqiammeacm = $icswaaoiwiuomyoo->get_funds(); $ocsqcmeqiammeacm -= floatval($smowyuyseuwiaiei); if ($ocsqcmeqiammeacm < 0) { $ocsqcmeqiammeacm = 0; } $icswaaoiwiuomyoo->set_funds($ocsqcmeqiammeacm); } } } }
