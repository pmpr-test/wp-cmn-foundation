<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132f3a1d1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Twig\Extension\Extension; use Twig\Environment; use Twig\Extension\DebugExtension; use Twig\Loader\FilesystemLoader; use Twig\TwigFilter; use Twig\TwigFunction; use Pmpr\Common\Foundation\Template\Engine as BaseClass; class Engine extends BaseClass { protected ?string $currentTemplate = null; protected ?Environment $environment = null; protected ?FilesystemLoader $loader = null; public function aocowmgiyociuoyw(?string $wiiouykwoeyyscci) : self { $this->currentTemplate = $wiiouykwoeyyscci; return $this; } public function yyewsaiwmyggmumg() : ?string { return $this->currentTemplate; } public function load() { try { $esoowymaimwcuecq = $this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq(); $this->loader = new FilesystemLoader('', ''); if (!($oegoegssokkyiqam = $this->iwqysmawycmsmces())) { goto ecssgmuciqiskkme; } foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $skacuygeqykiwiwy) { $this->loader->addPath($skacuygeqykiwiwy, $aiieyweysaukqemc); gaweywgyiqymqqae: } mooukkaawioceqgu: ecssgmuciqiskkme: $qiouiwasaauyaaue = []; if ($esoowymaimwcuecq) { goto iqcsqkgycusqgswk; } $qiouiwasaauyaaue["\x63\141\x63\x68\x65"] = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::awgwumwwguikwqky) . "\57\164\167\x69\147"; iqcsqkgycusqgswk: $this->environment = new Environment($this->loader, $qiouiwasaauyaaue); if (!$esoowymaimwcuecq) { goto iueqqswmweckwaui; } $this->environment->enableDebug(); $this->environment->enableAutoReload(); $this->environment->addExtension(new DebugExtension()); iueqqswmweckwaui: $this->environment->addExtension(new Extension()); } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } public function wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca) : bool { $ksaameoqigiaoigg = false; $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . "\x2f\164\x65\155\160\x6c\141\164\145\x2f\164\x77\151\147"; try { if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto eygewmcawygoamqm; } if ($this->loader) { goto aaayqmggygqagqes; } if (isset($this->paths[$aiieyweysaukqemc])) { goto ioqcemkiiscgiseo; } $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca; ioqcemkiiscgiseo: goto coukaukykckssymw; aaayqmggygqagqes: $oegoegssokkyiqam = $this->loader->getPaths($aiieyweysaukqemc); if (!empty($oegoegssokkyiqam)) { goto figsecwawwycsiia; } $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc); figsecwawwycsiia: coukaukykckssymw: $ksaameoqigiaoigg = true; eygewmcawygoamqm: } catch (Exception $wgaoewqkwgomoaai) { } return $ksaameoqigiaoigg; } public function exists($qqscaoyqikuyeoaw, $wksoawcgagcgoask = null) : bool { if (!$wksoawcgagcgoask) { goto uiagegwaiiacsqoo; } $this->yqcmsqwcioyookau($wksoawcgagcgoask); uiagegwaiiacsqoo: return $this->loader->exists($qqscaoyqikuyeoaw); } public function kgaogakmeumeqaew($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue = []) : self { $this->environment->addFilter(new TwigFilter($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue)); return $this; } public function kmmegqceukkkawme($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, array $qiouiwasaauyaaue = []) : self { try { $this->environment->addFunction(new TwigFunction($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue)); } catch (Exception $wgaoewqkwgomoaai) { if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto qmygamkeyyeweaug; } wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); qmygamkeyyeweaug: } return $this; } public function siameoooqiiuqgsm($egkyssmuqcwaciya) : ?string { $mkomwsiykqigmqca = ''; $aiieyweysaukqemc = explode("\x5c", $egkyssmuqcwaciya); if (!(is_array($aiieyweysaukqemc) && $aiieyweysaukqemc)) { goto scqewiwsusqceycg; } $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); if (!$wksoawcgagcgoask) { goto gqmomswmsooweyco; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($yyauwyaeewsickwk, "\143\x61\x6d\x65\154\62\x73\156\141\x6b\145"))) { goto gcgmcwkcywoeqyua; } $uomewyckeuqoqocu = array_map([$yyauwyaeewsickwk, $qgciuiagkkguykgs], $aiieyweysaukqemc); $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3); $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu); gcgmcwkcywoeqyua: $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}\57{$aiieyweysaukqemc}"; gqmomswmsooweyco: scqewiwsusqceycg: return $mkomwsiykqigmqca; } public function ugcgocaoguesoiic(string $wkcwykowmmmwioqs, array $qookweymeqawmcwo = []) : string { try { $wkcwykowmmmwioqs = $this->ocksiywmkyaqseou("\x74\167\151\147\x5f\x72\x65\156\144\145\162\x5f\x66\151\x6c\x65\x6e\141\155\x65", $wkcwykowmmmwioqs, $qookweymeqawmcwo); $qookweymeqawmcwo = $this->ocksiywmkyaqseou("\164\167\x69\x67\x5f\162\145\156\144\x65\x72\137\x70\x61\162\141\155\x65\164\145\162\163", $qookweymeqawmcwo, $wkcwykowmmmwioqs); $nsmgceoqaqogqmuw = ''; if (!$this->qoqyomiqwooaeoiy()) { goto kiagckcoykiwemaq; } $nsmgceoqaqogqmuw = $this->environment->render($wkcwykowmmmwioqs, $qookweymeqawmcwo); kiagckcoykiwemaq: } catch (Exception $wgaoewqkwgomoaai) { wp_die("\124\x57\111\107\40\x45\x72\162\157\x72\x3a\40\146\x69\x6c\x65\x6e\x61\x6d\145\72\40{$wkcwykowmmmwioqs}\x20\74\142\x72\57\x3e\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)}"); } return $nsmgceoqaqogqmuw; } }
