<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67955288a0e50             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Twig\Extension\Extension; use Twig\Environment; use Twig\Extension\DebugExtension; use Twig\Loader\FilesystemLoader; use Twig\TwigFilter; use Twig\TwigFunction; use Pmpr\Common\Foundation\Template\Engine as BaseClass; class Engine extends BaseClass { protected ?string $currentTemplate = null; protected ?Environment $environment = null; protected ?FilesystemLoader $loader = null; public function aocowmgiyociuoyw(?string $wiiouykwoeyyscci) : self { $this->currentTemplate = $wiiouykwoeyyscci; return $this; } public function yyewsaiwmyggmumg() : ?string { return $this->currentTemplate; } public function load() { try { $esoowymaimwcuecq = $this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq(); $this->loader = new FilesystemLoader('', ''); if ($oegoegssokkyiqam = $this->iwqysmawycmsmces()) { foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $mkomwsiykqigmqca) { $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc); } } $qiouiwasaauyaaue = []; if (!$esoowymaimwcuecq && ($skacuygeqykiwiwy = $this->gskqygiceygcguyo())) { $qiouiwasaauyaaue["\143\x61\x63\x68\145"] = $skacuygeqykiwiwy; } $this->environment = new Environment($this->loader, $qiouiwasaauyaaue); if ($esoowymaimwcuecq) { $this->environment->enableDebug(); $this->environment->enableAutoReload(); $this->environment->addExtension(new DebugExtension()); } $this->environment->addExtension(new Extension()); } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } public function gskqygiceygcguyo() { $skacuygeqykiwiwy = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::awgwumwwguikwqky); if ($skacuygeqykiwiwy) { $skacuygeqykiwiwy .= "\x2f\164\x77\151\147"; } return $skacuygeqykiwiwy; } public function wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca) : bool { $ksaameoqigiaoigg = false; $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . "\x2f\x74\x65\x6d\x70\x6c\141\164\x65\x2f\164\167\x69\147"; try { if ($this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { if ($this->loader) { $oegoegssokkyiqam = $this->loader->getPaths($aiieyweysaukqemc); if (empty($oegoegssokkyiqam)) { $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc); } } else { if (!isset($this->paths[$aiieyweysaukqemc])) { $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca; } } $ksaameoqigiaoigg = true; } } catch (Exception $wgaoewqkwgomoaai) { } return $ksaameoqigiaoigg; } public function exists($qqscaoyqikuyeoaw, $wksoawcgagcgoask = null) : bool { if ($wksoawcgagcgoask) { $this->yqcmsqwcioyookau($wksoawcgagcgoask); } return $this->loader->exists($qqscaoyqikuyeoaw); } public function kgaogakmeumeqaew($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue = []) : self { $this->environment->addFilter(new TwigFilter($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue)); return $this; } public function kmmegqceukkkawme($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, array $qiouiwasaauyaaue = []) : self { try { $this->environment->addFunction(new TwigFunction($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue)); } catch (Exception $wgaoewqkwgomoaai) { if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } return $this; } public function siameoooqiiuqgsm($egkyssmuqcwaciya) : ?string { $mkomwsiykqigmqca = ''; $aiieyweysaukqemc = explode("\134", $egkyssmuqcwaciya); if (is_array($aiieyweysaukqemc) && $aiieyweysaukqemc) { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($egkyssmuqcwaciya); if ($wksoawcgagcgoask) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($yyauwyaeewsickwk, "\143\x61\155\x65\154\x32\x73\x6e\x61\153\x65")) { $uomewyckeuqoqocu = array_map([$yyauwyaeewsickwk, $qgciuiagkkguykgs], $aiieyweysaukqemc); $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3); $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu); } $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}\x2f{$aiieyweysaukqemc}"; } } return $mkomwsiykqigmqca; } public function ugcgocaoguesoiic(string $wkcwykowmmmwioqs, array $qookweymeqawmcwo = []) : string { try { $wkcwykowmmmwioqs = $this->ocksiywmkyaqseou("\x74\167\x69\147\137\162\x65\156\x64\x65\162\137\x66\x69\x6c\145\x6e\x61\155\x65", $wkcwykowmmmwioqs, $qookweymeqawmcwo); $qookweymeqawmcwo = $this->ocksiywmkyaqseou("\x74\167\151\147\x5f\x72\x65\x6e\144\145\x72\x5f\160\x61\162\141\x6d\145\x74\x65\x72\163", $qookweymeqawmcwo, $wkcwykowmmmwioqs); $nsmgceoqaqogqmuw = ''; if ($this->qoqyomiqwooaeoiy()) { $nsmgceoqaqogqmuw = $this->environment->render($wkcwykowmmmwioqs, $qookweymeqawmcwo); } } catch (Exception $wgaoewqkwgomoaai) { wp_die("\x54\x57\x49\107\40\x45\x72\162\157\x72\x3a\x20\146\x69\154\145\156\141\155\145\x3a\x20{$wkcwykowmmmwioqs}\40\74\x62\x72\x2f\76\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai, null, true)}"); } return $nsmgceoqaqogqmuw; } }
