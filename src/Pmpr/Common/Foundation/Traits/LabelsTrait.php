<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc33c6bdfdb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; trait LabelsTrait { protected array $labels = []; public function euwycwigoeawgckq(string $uusmaiomayssaecw) : string { if (empty($this->labels)) { $this->jsgkawekewookomk(); } return $this->labels[$uusmaiomayssaecw] ?? ''; } public function jsgkawekewookomk() : self { $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg(); $sisssumicskyceeg = $this->giiayuqckuiecosm(); if ($kcumookcwskcyqak && $sisssumicskyceeg) { $this->labels = ['name' => _x($kcumookcwskcyqak, 'general name', PR__CMN__FOUNDATION), 'add_new' => sprintf(__('Add %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'archives' => sprintf(__('%s archives', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'new_item' => sprintf(__('New %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'edit_item' => sprintf(__('Edit %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'menu_name' => _x($kcumookcwskcyqak, 'admin menu', PR__CMN__FOUNDATION), 'view_item' => sprintf(__('View %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'all_items' => sprintf(__('All %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'not_found' => sprintf(__('No %s found.', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'attributes' => sprintf(__('%s attributes', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'view_items' => sprintf(__('View %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'items_list' => sprintf(__('%s list', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'plural_name' => _x($kcumookcwskcyqak, 'plural name', PR__CMN__FOUNDATION), 'update_item' => sprintf(__('Update %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'remove_item' => sprintf(__('Remove %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'search_items' => sprintf(__('Search %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'add_new_item' => sprintf(__('Add New %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'parent_item' => sprintf(__('Parent %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'item_updated' => sprintf(__('%s updated', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'popular_items' => sprintf(__('Popular %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'singular_name' => _x($sisssumicskyceeg, 'singular name', PR__CMN__FOUNDATION), 'new_item_name' => sprintf(__('New %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'item_published' => sprintf(__('%s published', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'item_scheduled' => sprintf(__('%s scheduled', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'featured_image' => sprintf(__('%s image', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'name_admin_bar' => _x($sisssumicskyceeg, 'add new on admin bar', PR__CMN__FOUNDATION), 'insert_into_item' => sprintf(__('Put into %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'filter_items_list' => sprintf(__('Filter %s list', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'parent_item_colon' => sprintf(__('Parent %s:', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'set_featured_image' => sprintf(__('Set %s image', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'not_found_in_trash' => sprintf(__('No %s found in Trash.', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'use_featured_image' => sprintf(__('Use as %s image', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'add_or_remove_items' => sprintf(__('Add or remove %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'uploaded_to_this_item' => sprintf(__('Uploaded to this %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'remove_featured_image' => sprintf(__('Remove %s image', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'items_list_navigation' => sprintf(__('%s pagination', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'choose_from_most_used' => sprintf(__('Choose from the most used %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'item_reverted_to_draft' => sprintf(__('%s reverted to draft', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'item_published_privately' => sprintf(__('%s published privately', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'separate_items_with_commas' => sprintf(__('Separate %s with commas', PR__CMN__FOUNDATION), $kcumookcwskcyqak)]; } else { $egkyssmuqcwaciya = static::class; wp_die("can not set labels for {$egkyssmuqcwaciya}"); } return $this; } public abstract function qeeuwmmksmqiuywg() : ?string; public abstract function giiayuqckuiecosm() : ?string; }
