<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d17086e3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\MetaBox; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class CPTMetaBox extends Container { protected array $metaBoxes = []; public array $postTypes = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'], 99)->qcsmikeggeemccuu('add_meta_boxes', [$this, 'wacemkqmiwuqouga']); foreach ($this->iakygkwocqoukwuc() as $useksmwkuswkwcqg) { $this->qcsmikeggeemccuu("save_post_{$useksmwkuswkwcqg}", [$this, 'kgsociwwoiocuqag']); } } public function init() { if ($this->uqwgsuysegkweago()) { $this->qyecwywaoyamkmci(); } } public function iakygkwocqoukwuc() : array { return $this->postTypes; } public function mgieiwsmcswmmiim($useksmwkuswkwcqg) : self { $this->postTypes[] = $useksmwkuswkwcqg; return $this; } public function sikqggwmmykuiymy($qkweikswegyciaie) : self { if ($qkweikswegyciaie instanceof MetaBox) { $qkweikswegyciaie->pknsqyeeymygoqqu($this->iakygkwocqoukwuc())->register(); } $this->metaBoxes[] = $qkweikswegyciaie; return $this; } public function qsqiqgmeoowykuue() : array { if (!$this->metaBoxes) { $this->qyecwywaoyamkmci(); } return $this->metaBoxes; } public function qyecwywaoyamkmci() { } public function wacemkqmiwuqouga() { if ($this->uqwgsuysegkweago()) { $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if ($uaqusiikkokccqou) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { if (is_array($qkweikswegyciaie)) { $qkweikswegyciaie = $cwaqscoiqkokyase->ckscqqquyskscaaw($qkweikswegyciaie, [Constants::cacismqswgaewkuu => $this->iakygkwocqoukwuc(), Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => [$this, 'equegskkeememgye']]); $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); $qkweikswegyciaie[Constants::okeuagwgwkmiokac] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]; $gosmywauqawmcyga->sikqggwmmykuiymy($qkweikswegyciaie); } } } } } public function kgsociwwoiocuqag($gcqseksiskwueksc) { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { $ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy(); if ($ckwiwikoeoiaouaa) { [$icwicymcioeyeyek, $eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa, $_POST); if ($eaygsswawaiqcwag) { $ikgwqyuyckaewsow = $eaygsswawaiqcwag; } else { $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; $icwicymcioeyeyek = $_POST; } $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $eywayoukkqcgaski => $aiowsaccomcoikus) { if (is_string($aiowsaccomcoikus)) { $eqgoocgaqwqcimie = $aiowsaccomcoikus; $aiowsaccomcoikus = $ckwiwikoeoiaouaa[$eywayoukkqcgaski]; } else { if ($aiowsaccomcoikus instanceof Field) { $eywayoukkqcgaski = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$eywayoukkqcgaski] ?? ''; } else { continue; } } if ($eqgoocgaqwqcimie) { $wgkqagumoowawogg->ksmqawcowkmegigw($gcqseksiskwueksc, $eywayoukkqcgaski, $eqgoocgaqwqcimie); } else { $wgkqagumoowawogg->smqukgcyacswysqa($gcqseksiskwueksc, $eywayoukkqcgaski); } $this->iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc); } } } } public function iyewiaeaemccywgu($aiowsaccomcoikus, $eqgoocgaqwqcimie, $gcqseksiskwueksc) { } public function equegskkeememgye($post, $qookweymeqawmcwo = []) { if ($ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($qookweymeqawmcwo, 'args.fields')) { echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu($ikgwqyuyckaewsow, ['class' => "post-{$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)}-metadata-fields"]); } } public function ugmceccgwaaaigiy(bool $yyyygcwaukcucomu = false) { $sogksuscggsicmac = []; $uaqusiikkokccqou = $this->qsqiqgmeoowykuue(); if ($uaqusiikkokccqou) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { $ikgwqyuyckaewsow = []; if (is_array($qkweikswegyciaie)) { $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($qkweikswegyciaie, Constants::ymckmcsiymwqucoq, []); } else { if ($qkweikswegyciaie instanceof MetaBox && !$yyyygcwaukcucomu) { $ikgwqyuyckaewsow = $qkweikswegyciaie->uyaeumskacgcyskk(); } } if ($ikgwqyuyckaewsow) { $sogksuscggsicmac[] = $ikgwqyuyckaewsow; } } $sogksuscggsicmac = array_merge([], ...$sogksuscggsicmac); } return $sogksuscggsicmac; } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $post = $ywmkwiwkosakssii[Constants::mswoacegomcucaik] ?? ''; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post && in_array($seumokooiykcomco->gueasuouwqysmomu($post), $this->iakygkwocqoukwuc(), true)) { if (!is_array($icwicymcioeyeyek)) { $icwicymcioeyeyek = []; } $icwicymcioeyeyek = array_merge($icwicymcioeyeyek, [Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($post), Constants::sauwwsocmukoaayu => $seumokooiykcomco->ycqquoiyyuesegsy($post), Constants::eqkeooqcsscoggia => $seumokooiykcomco->masoymaamekuykso($post)]); if ($ckwiwikoeoiaouaa = $this->ugmceccgwaaaigiy()) { [$eaygsswawaiqcwag] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ckwiwikoeoiaouaa); if ($eaygsswawaiqcwag) { $ikgwqyuyckaewsow = $eaygsswawaiqcwag; } else { $ikgwqyuyckaewsow = $ckwiwikoeoiaouaa; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ugugimquukqwogge = $seumokooiykcomco->igawqaomowicuayw($aokagokqyuysuksm, $post); if (isset($icwicymcioeyeyek[$aokagokqyuysuksm])) { $uusmaiomayssaecw = "{$aokagokqyuysuksm}_metadata"; } else { $uusmaiomayssaecw = $aokagokqyuysuksm; } $icwicymcioeyeyek[$uusmaiomayssaecw] = $ugugimquukqwogge; } } } } return $icwicymcioeyeyek; } public function uqwgsuysegkweago() : bool { $uqwgsuysegkweago = false; $sciomagaqmgggsiu = $this->iakygkwocqoukwuc(); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $uqwgsuysegkweago = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($useksmwkuswkwcqg); if ($uqwgsuysegkweago) { break; } } return $uqwgsuysegkweago; } }
