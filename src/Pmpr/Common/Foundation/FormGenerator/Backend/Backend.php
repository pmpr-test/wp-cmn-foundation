<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d0192bbd7b2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend; use Pmpr\Common\Foundation\Container\Container; class Backend extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos('before_enqueue_backend_assets', [$this, 'enqueue']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('quicktags_settings', [$this, 'icskgoeugoymesuu'], 10, 2)->cecaguuoecmccuse('tiny_mce_before_init', [$this, 'wscywkcwwgauigcc'], 10, 2)->cecaguuoecmccuse('teeny_mce_before_init', [$this, 'wscywkcwwgauigcc'], 10, 2); } public function enqueue() { $this->caokeucsksukesyo()->usugyumcgeaaowsi()->wwmusmkkcwsiciou($this, 'form_generator', ['backend' => ['text' => ['copied' => __('Copied!', PR__CMN__FOUNDATION), 'not_copied' => __('Copy process failed.', PR__CMN__FOUNDATION)], 'field' => ['invalid' => ['required' => __('This field is required, please fill it first.', PR__CMN__FOUNDATION)]], 'select' => ['locale' => ['errorText' => __('Unable to retrieve results', PR__CMN__FOUNDATION), 'emptyTitle' => __('Select and begin typing', PR__CMN__FOUNDATION), 'statusTooShort' => __('Please enter more characters', PR__CMN__FOUNDATION), 'statusNoResults' => __('No Results', PR__CMN__FOUNDATION), 'statusSearching' => __('Searching...', PR__CMN__FOUNDATION), 'currentlySelected' => __('Currently Selected', PR__CMN__FOUNDATION), 'searchPlaceholder' => __('Searching...', PR__CMN__FOUNDATION), 'statusInitialized' => __('Start typing a search query', PR__CMN__FOUNDATION), 'noneSelectedText' => __('Nothing selected', PR__CMN__FOUNDATION), 'noneResultsText' => __('No results match {0}', PR__CMN__FOUNDATION), 'countSelectedText' => __('{0} from {1} item selected', PR__CMN__FOUNDATION), 'maxOptionsText' => [__('Limit reached ({n} items max)', PR__CMN__FOUNDATION), __('Group limit reached ({n} items max)', PR__CMN__FOUNDATION)], 'selectAllText' => __('Select All', PR__CMN__FOUNDATION), 'deselectAllText' => __('Deselect All', PR__CMN__FOUNDATION), 'multipleSeparator' => ', ']]]]); } public function icskgoeugoymesuu($qeqooyuoiasweuck, $sccmgseqoqakqusw) { $this->imuyyyucuwssiows($sccmgseqoqakqusw, $qeqooyuoiasweuck, 'quick_tags'); return $qeqooyuoiasweuck; } public function wscywkcwwgauigcc($qeqooyuoiasweuck, $sccmgseqoqakqusw) { $this->imuyyyucuwssiows($sccmgseqoqakqusw, $qeqooyuoiasweuck); return $qeqooyuoiasweuck; } private function imuyyyucuwssiows(string $sccmgseqoqakqusw, array $qeqooyuoiasweuck, string $sqeykgyoooqysmca = 'tinymce') { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ssqqsemoqaeqcqka("window['{$sqeykgyoooqysmca}_{$sccmgseqoqakqusw}'] = {$this->meyukgqsamcimwko($qeqooyuoiasweuck)}"); } private function meyukgqsamcimwko($qeqooyuoiasweuck) : string { $qiouiwasaauyaaue = ''; foreach ($qeqooyuoiasweuck as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (is_bool($eqgoocgaqwqcimie)) { $uiymkeeaukcyqqik = $eqgoocgaqwqcimie ? 'true' : 'false'; $qiouiwasaauyaaue .= $uusmaiomayssaecw . ':' . $uiymkeeaukcyqqik . ','; continue; } if (!empty($eqgoocgaqwqcimie) && is_string($eqgoocgaqwqcimie) && ('{' === $eqgoocgaqwqcimie[0] && '}' === $eqgoocgaqwqcimie[strlen($eqgoocgaqwqcimie) - 1] || '[' === $eqgoocgaqwqcimie[0] && ']' === $eqgoocgaqwqcimie[strlen($eqgoocgaqwqcimie) - 1] || preg_match('/^\\(?function ?\\(/', $eqgoocgaqwqcimie))) { $qiouiwasaauyaaue .= $uusmaiomayssaecw . ':' . $eqgoocgaqwqcimie . ','; continue; } $qiouiwasaauyaaue .= $uusmaiomayssaecw . ':"' . $eqgoocgaqwqcimie . '",'; } return '{' . trim($qiouiwasaauyaaue, ' ,') . '}'; } }
