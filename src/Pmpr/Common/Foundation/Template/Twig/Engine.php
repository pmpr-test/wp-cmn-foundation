<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7da680f9db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Twig\Extension\Extension; use Twig\Environment; use Twig\Extension\DebugExtension; use Twig\Loader\FilesystemLoader; use Twig\TwigFilter; use Twig\TwigFunction; use Pmpr\Common\Foundation\Template\Engine as BaseClass; class Engine extends BaseClass { protected ?string $currentTemplate = null; protected ?Environment $environment = null; protected ?FilesystemLoader $loader = null; public function aocowmgiyociuoyw(?string $wiiouykwoeyyscci) : self { $this->currentTemplate = $wiiouykwoeyyscci; return $this; } public function yyewsaiwmyggmumg() : ?string { return $this->currentTemplate; } public function load() { try { $esoowymaimwcuecq = $this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq(); $this->loader = new FilesystemLoader('', ''); if (!($oegoegssokkyiqam = $this->iwqysmawycmsmces())) { goto ycuaeigqqkcqywcm; } foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $mkomwsiykqigmqca) { $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc); ayysooqqqwcueuey: } jkoscsaeoquakoss: ycuaeigqqkcqywcm: $qiouiwasaauyaaue = []; if (!(!$esoowymaimwcuecq && ($skacuygeqykiwiwy = $this->gskqygiceygcguyo()))) { goto usogieysoyaiwmqu; } $qiouiwasaauyaaue["\143\x61\143\150\145"] = $skacuygeqykiwiwy; usogieysoyaiwmqu: $this->environment = new Environment($this->loader, $qiouiwasaauyaaue); if (!$esoowymaimwcuecq) { goto ygyqcgyoyckqqqsk; } $this->environment->enableDebug(); $this->environment->enableAutoReload(); $this->environment->addExtension(new DebugExtension()); ygyqcgyoyckqqqsk: $this->environment->addExtension(new Extension()); } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } public function gskqygiceygcguyo() { $skacuygeqykiwiwy = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::awgwumwwguikwqky); if (!$skacuygeqykiwiwy) { goto uggkyoamgoaywawg; } $skacuygeqykiwiwy .= "\x2f\164\167\151\x67"; uggkyoamgoaywawg: return $skacuygeqykiwiwy; } public function wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca) : bool { $ksaameoqigiaoigg = false; $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . "\57\164\x65\x6d\160\x6c\x61\164\x65\57\x74\x77\151\x67"; try { if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto osocgummgayysiag; } if ($this->loader) { goto wiqoigsossioeckw; } if (isset($this->paths[$aiieyweysaukqemc])) { goto xiuwuuokasgwkicc; } $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca; xiuwuuokasgwkicc: goto imieoekoumoucuag; wiqoigsossioeckw: $oegoegssokkyiqam = $this->loader->getPaths($aiieyweysaukqemc); if (!empty($oegoegssokkyiqam)) { goto imswukmmekkkaeqo; } $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc); imswukmmekkkaeqo: imieoekoumoucuag: $ksaameoqigiaoigg = true; osocgummgayysiag: } catch (Exception $wgaoewqkwgomoaai) { } return $ksaameoqigiaoigg; } public function exists($qqscaoyqikuyeoaw, $wksoawcgagcgoask = null) : bool { if (!$wksoawcgagcgoask) { goto kkgyymqwugkcgoew; } $this->yqcmsqwcioyookau($wksoawcgagcgoask); kkgyymqwugkcgoew: return $this->loader->exists($qqscaoyqikuyeoaw); } public function kgaogakmeumeqaew($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue = []) : self { $this->environment->addFilter(new TwigFilter($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue)); return $this; } public function kmmegqceukkkawme($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, array $qiouiwasaauyaaue = []) : self { try { $this->environment->addFunction(new TwigFunction($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue)); } catch (Exception $wgaoewqkwgomoaai) { if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto mcokememaqyocmww; } wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); mcokememaqyocmww: } return $this; } public function siameoooqiiuqgsm($egkyssmuqcwaciya) : ?string { $mkomwsiykqigmqca = ''; $aiieyweysaukqemc = explode("\134", $egkyssmuqcwaciya); if (!(is_array($aiieyweysaukqemc) && $aiieyweysaukqemc)) { goto skamksaaqymicwgm; } $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); if (!$wksoawcgagcgoask) { goto iusacogsuyamauuw; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($yyauwyaeewsickwk, "\x63\x61\155\x65\x6c\62\163\156\141\153\145"))) { goto aaemagwasykayacy; } $uomewyckeuqoqocu = array_map([$yyauwyaeewsickwk, $qgciuiagkkguykgs], $aiieyweysaukqemc); $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3); $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu); aaemagwasykayacy: $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}\57{$aiieyweysaukqemc}"; iusacogsuyamauuw: skamksaaqymicwgm: return $mkomwsiykqigmqca; } public function ugcgocaoguesoiic(string $wkcwykowmmmwioqs, array $qookweymeqawmcwo = []) : string { try { $wkcwykowmmmwioqs = $this->ocksiywmkyaqseou("\x74\x77\151\x67\x5f\162\145\156\x64\145\162\137\146\151\x6c\145\156\x61\155\x65", $wkcwykowmmmwioqs, $qookweymeqawmcwo); $qookweymeqawmcwo = $this->ocksiywmkyaqseou("\164\x77\x69\x67\137\x72\145\x6e\144\x65\162\137\x70\141\x72\x61\155\x65\x74\x65\162\163", $qookweymeqawmcwo, $wkcwykowmmmwioqs); $nsmgceoqaqogqmuw = ''; if (!$this->qoqyomiqwooaeoiy()) { goto umymemssaqquqisa; } $nsmgceoqaqogqmuw = $this->environment->render($wkcwykowmmmwioqs, $qookweymeqawmcwo); umymemssaqquqisa: } catch (Exception $wgaoewqkwgomoaai) { wp_die("\x54\127\111\x47\x20\105\x72\162\157\162\x3a\x20\146\x69\154\x65\x6e\141\155\145\x3a\x20{$wkcwykowmmmwioqs}\40\74\x62\x72\x2f\76\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)}"); } return $nsmgceoqaqogqmuw; } }
