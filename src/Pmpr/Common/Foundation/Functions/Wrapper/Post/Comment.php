<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e2e8864db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Post; use WP_Comment; use WP_Error; class Comment extends Common { public function get($comment) { return get_comment($comment); } public function ekysoioumkkwawwm(array $ywmkwiwkosakssii = [], $kcagcoeuiasswusq = null) { return wp_list_comments($ywmkwiwkosakssii, $kcagcoeuiasswusq); } public function eaoumsseceiowgsk(array $ywmkwiwkosakssii = [], $post = null) { comment_form($ywmkwiwkosakssii, $post); } public function ygkskmsksmmiqaqu(array $icwicymcioeyeyek) { return wp_handle_comment_submission($icwicymcioeyeyek); } public function ykgcioecqcwwkime($comment) : ?string { return get_comment_text($comment); } public function mguqscccckuywsya($comment) : ?string { return get_comment_author($comment); } public function ciugwooasaqcywas($ywmkwiwkosakssii = []) { return get_comments($ywmkwiwkosakssii); } public function qkweigiqsaaigqau($comment) : ?string { return get_comment_author_url($comment); } public function update(array $emeuqoyyougcgsoq) { return wp_update_comment($emeuqoyyougcgsoq); } public function delete($comment, $cwwowqyuwccuykom = false) : bool { return wp_delete_comment($comment, $cwwowqyuwccuykom); } public function uecyuoauykiqqkey($egkyssmuqcwaciya = [], $comment = null) : array { return get_comment_class($egkyssmuqcwaciya, $comment); } public function igawqaomowicuayw($comment, $uusmaiomayssaecw, bool $cuyooiakswegosog = true) { return get_comment_meta($comment, $uusmaiomayssaecw, $cuyooiakswegosog); } public function smqukgcyacswysqa($comment, $uusmaiomayssaecw, $eqgoocgaqwqcimie = '') : bool { return delete_comment_meta($comment, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ksmqawcowkmegigw($comment, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis = '') { return update_comment_meta($comment, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis); } public function giwmekimakcaawsq($comment, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq = true) { return add_comment_meta($comment, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function wewicgosooacoayq($ywmkwiwkosakssii) { return paginate_comments_links($ywmkwiwkosakssii); } }
