<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c19cd8e5f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Twig\Extension\Extension; use Twig\Environment; use Twig\Extension\DebugExtension; use Twig\Loader\FilesystemLoader; use Twig\TwigFilter; use Twig\TwigFunction; use Pmpr\Common\Foundation\Template\Engine as BaseClass; class Engine extends BaseClass { protected ?string $currentTemplate = null; protected ?Environment $environment = null; protected ?FilesystemLoader $loader = null; public function aocowmgiyociuoyw(?string $wiiouykwoeyyscci) : self { $this->currentTemplate = $wiiouykwoeyyscci; return $this; } public function yyewsaiwmyggmumg() : ?string { return $this->currentTemplate; } public function load() { try { $esoowymaimwcuecq = $this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq(); $this->loader = new FilesystemLoader('', ''); if (!($oegoegssokkyiqam = $this->iwqysmawycmsmces())) { goto ayysooqqqwcueuey; } foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $mkomwsiykqigmqca) { $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc); jkoscsaeoquakoss: } uymugyyimciiyuos: ayysooqqqwcueuey: $qiouiwasaauyaaue = []; if (!(!$esoowymaimwcuecq && ($skacuygeqykiwiwy = $this->gskqygiceygcguyo()))) { goto ycuaeigqqkcqywcm; } $qiouiwasaauyaaue["\143\x61\143\150\x65"] = $skacuygeqykiwiwy; ycuaeigqqkcqywcm: $this->environment = new Environment($this->loader, $qiouiwasaauyaaue); if (!$esoowymaimwcuecq) { goto usogieysoyaiwmqu; } $this->environment->enableDebug(); $this->environment->enableAutoReload(); $this->environment->addExtension(new DebugExtension()); usogieysoyaiwmqu: $this->environment->addExtension(new Extension()); } catch (Exception $wgaoewqkwgomoaai) { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } public function gskqygiceygcguyo() { $skacuygeqykiwiwy = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::awgwumwwguikwqky); if (!$skacuygeqykiwiwy) { goto ygyqcgyoyckqqqsk; } $skacuygeqykiwiwy .= "\57\x74\x77\151\147"; ygyqcgyoyckqqqsk: return $skacuygeqykiwiwy; } public function wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca) : bool { $ksaameoqigiaoigg = false; $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . "\x2f\164\x65\155\160\x6c\141\164\x65\57\x74\167\151\x67"; try { if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto imieoekoumoucuag; } if ($this->loader) { goto xiuwuuokasgwkicc; } if (isset($this->paths[$aiieyweysaukqemc])) { goto imswukmmekkkaeqo; } $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca; imswukmmekkkaeqo: goto wiqoigsossioeckw; xiuwuuokasgwkicc: $oegoegssokkyiqam = $this->loader->getPaths($aiieyweysaukqemc); if (!empty($oegoegssokkyiqam)) { goto uggkyoamgoaywawg; } $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc); uggkyoamgoaywawg: wiqoigsossioeckw: $ksaameoqigiaoigg = true; imieoekoumoucuag: } catch (Exception $wgaoewqkwgomoaai) { } return $ksaameoqigiaoigg; } public function exists($qqscaoyqikuyeoaw, $wksoawcgagcgoask = null) : bool { if (!$wksoawcgagcgoask) { goto osocgummgayysiag; } $this->yqcmsqwcioyookau($wksoawcgagcgoask); osocgummgayysiag: return $this->loader->exists($qqscaoyqikuyeoaw); } public function kgaogakmeumeqaew($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue = []) : self { $this->environment->addFilter(new TwigFilter($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue)); return $this; } public function kmmegqceukkkawme($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, array $qiouiwasaauyaaue = []) : self { try { $this->environment->addFunction(new TwigFunction($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue)); } catch (Exception $wgaoewqkwgomoaai) { if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto kkgyymqwugkcgoew; } wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); kkgyymqwugkcgoew: } return $this; } public function siameoooqiiuqgsm($egkyssmuqcwaciya) : ?string { $mkomwsiykqigmqca = ''; $aiieyweysaukqemc = explode("\134", $egkyssmuqcwaciya); if (!(is_array($aiieyweysaukqemc) && $aiieyweysaukqemc)) { goto iusacogsuyamauuw; } $wksoawcgagcgoask = $this->couwksyewgyeooqe($egkyssmuqcwaciya); if (!$wksoawcgagcgoask) { goto aaemagwasykayacy; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($yyauwyaeewsickwk, "\x63\x61\155\145\154\62\163\x6e\141\153\x65"))) { goto mcokememaqyocmww; } $uomewyckeuqoqocu = array_map([$yyauwyaeewsickwk, $qgciuiagkkguykgs], $aiieyweysaukqemc); $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3); $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu); mcokememaqyocmww: $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}\x2f{$aiieyweysaukqemc}"; aaemagwasykayacy: iusacogsuyamauuw: return $mkomwsiykqigmqca; } public function ugcgocaoguesoiic(string $wkcwykowmmmwioqs, array $qookweymeqawmcwo = []) : string { try { $wkcwykowmmmwioqs = $this->ocksiywmkyaqseou("\x74\x77\x69\147\137\162\x65\x6e\144\145\162\x5f\146\151\154\145\156\x61\155\x65", $wkcwykowmmmwioqs, $qookweymeqawmcwo); $qookweymeqawmcwo = $this->ocksiywmkyaqseou("\x74\167\x69\x67\137\162\x65\156\144\x65\162\137\x70\141\162\x61\x6d\x65\x74\x65\x72\163", $qookweymeqawmcwo, $wkcwykowmmmwioqs); $nsmgceoqaqogqmuw = ''; if (!$this->qoqyomiqwooaeoiy()) { goto skamksaaqymicwgm; } $nsmgceoqaqogqmuw = $this->environment->render($wkcwykowmmmwioqs, $qookweymeqawmcwo); skamksaaqymicwgm: } catch (Exception $wgaoewqkwgomoaai) { wp_die("\124\x57\x49\x47\40\105\162\162\157\x72\x3a\x20\x66\x69\x6c\145\156\141\155\x65\x3a\x20{$wkcwykowmmmwioqs}\x20\x3c\142\162\57\76\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)}"); } return $nsmgceoqaqogqmuw; } }
