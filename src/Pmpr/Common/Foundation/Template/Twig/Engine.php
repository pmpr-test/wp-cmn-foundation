<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670e55c5a76f1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Twig\Extension\Extension; use Twig\Environment; use Twig\Extension\DebugExtension; use Twig\Loader\FilesystemLoader; use Twig\TwigFilter; use Twig\TwigFunction; use Pmpr\Common\Foundation\Template\Engine as BaseClass; class Engine extends BaseClass { protected ?string $currentTemplate = null; protected ?Environment $environment = null; protected ?FilesystemLoader $loader = null; public function aocowmgiyociuoyw(?string $wiiouykwoeyyscci) : self { $this->currentTemplate = $wiiouykwoeyyscci; return $this; } public function yyewsaiwmyggmumg() : ?string { return $this->currentTemplate; } public function load() { try { $esoowymaimwcuecq = $this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq(); $this->loader = new FilesystemLoader('', ''); if ($oegoegssokkyiqam = $this->iwqysmawycmsmces()) { foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $mkomwsiykqigmqca) { $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc); } } $qiouiwasaauyaaue = []; if (!$esoowymaimwcuecq && ($skacuygeqykiwiwy = $this->gskqygiceygcguyo())) { $qiouiwasaauyaaue["\143\141\143\150\x65"] = $skacuygeqykiwiwy; } $this->environment = new Environment($this->loader, $qiouiwasaauyaaue); if ($esoowymaimwcuecq) { $this->environment->enableDebug(); $this->environment->enableAutoReload(); $this->environment->addExtension(new DebugExtension()); } $this->environment->addExtension(new Extension()); } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } public function gskqygiceygcguyo() { $skacuygeqykiwiwy = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::awgwumwwguikwqky); if ($skacuygeqykiwiwy) { $skacuygeqykiwiwy .= "\57\164\167\151\147"; } return $skacuygeqykiwiwy; } public function wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca) : bool { $ksaameoqigiaoigg = false; $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . "\x2f\164\145\155\160\x6c\x61\164\x65\57\164\x77\151\147"; try { if ($this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { if ($this->loader) { $oegoegssokkyiqam = $this->loader->getPaths($aiieyweysaukqemc); if (empty($oegoegssokkyiqam)) { $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc); } } else { if (!isset($this->paths[$aiieyweysaukqemc])) { $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca; } } $ksaameoqigiaoigg = true; } } catch (Exception $wgaoewqkwgomoaai) { } return $ksaameoqigiaoigg; } public function exists($qqscaoyqikuyeoaw, $wksoawcgagcgoask = null) : bool { if ($wksoawcgagcgoask) { $this->yqcmsqwcioyookau($wksoawcgagcgoask); } return $this->loader->exists($qqscaoyqikuyeoaw); } public function kgaogakmeumeqaew($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue = []) : self { $this->environment->addFilter(new TwigFilter($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue)); return $this; } public function kmmegqceukkkawme($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, array $qiouiwasaauyaaue = []) : self { try { $this->environment->addFunction(new TwigFunction($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue)); } catch (Exception $wgaoewqkwgomoaai) { if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } return $this; } public function siameoooqiiuqgsm($egkyssmuqcwaciya) : ?string { $mkomwsiykqigmqca = ''; $aiieyweysaukqemc = explode("\134", $egkyssmuqcwaciya); if (is_array($aiieyweysaukqemc) && $aiieyweysaukqemc) { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($yyauwyaeewsickwk, "\x63\141\x6d\145\154\x32\x73\156\x61\153\145")) { $uomewyckeuqoqocu = array_map([$yyauwyaeewsickwk, $qgciuiagkkguykgs], $aiieyweysaukqemc); $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3); $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu); } $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}\57{$aiieyweysaukqemc}"; } } return $mkomwsiykqigmqca; } public function ugcgocaoguesoiic(string $wkcwykowmmmwioqs, array $qookweymeqawmcwo = []) : string { try { $wkcwykowmmmwioqs = $this->ocksiywmkyaqseou("\164\x77\151\x67\137\x72\145\156\x64\x65\162\x5f\x66\151\x6c\145\156\x61\x6d\x65", $wkcwykowmmmwioqs, $qookweymeqawmcwo); $qookweymeqawmcwo = $this->ocksiywmkyaqseou("\164\x77\151\147\137\162\145\x6e\144\145\x72\137\160\141\162\x61\155\x65\164\x65\162\x73", $qookweymeqawmcwo, $wkcwykowmmmwioqs); $nsmgceoqaqogqmuw = ''; if ($this->qoqyomiqwooaeoiy()) { $nsmgceoqaqogqmuw = $this->environment->render($wkcwykowmmmwioqs, $qookweymeqawmcwo); } } catch (Exception $wgaoewqkwgomoaai) { wp_die("\x54\127\x49\x47\x20\105\x72\x72\x6f\x72\72\x20\x66\151\154\145\156\141\x6d\145\x3a\40{$wkcwykowmmmwioqs}\x20\x3c\x62\162\57\x3e\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)}"); } return $nsmgceoqaqogqmuw; } }
