<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; use WP_Error; class Cron extends Common { public function mggeycowqkwsieew() : array { return wp_get_schedules(); } public function sceqickmyoseqcue(string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = []) { return wp_next_scheduled($iaakskwmyqceoscy, $ywmkwiwkosakssii); } public function maeucgukqagocqsw(string $iaakskwmyqceoscy, $ywmkwiwkosakssii = null, $isksgswsmmqgeqmo = null) { return as_next_scheduled_action($iaakskwmyqceoscy, $ywmkwiwkosakssii, $isksgswsmmqgeqmo); } public function eggsumeyoiqcgkys($iaakskwmyqceoscy, array $ywmkwiwkosakssii = [], bool $iswcokucwmiosiaq = false) { return wp_clear_scheduled_hook($iaakskwmyqceoscy, $ywmkwiwkosakssii, $iswcokucwmiosiaq); } public function swgggegyusmecoky(int $yiuogaeewyockeak, string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = [], bool $wpError = false) { return wp_unschedule_event($yiuogaeewyockeak, $iaakskwmyqceoscy, $ywmkwiwkosakssii, $wpError); } public function uwugaiqywmseksqm(string $cukawkgykqoskaca, string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = [], int $yiuogaeewyockeak = 0, bool $wpError = false) { if ($yiuogaeewyockeak) { goto awcawqaigquqqywo; } $yiuogaeewyockeak = time(); awcawqaigquqqywo: return wp_schedule_event($yiuogaeewyockeak, $cukawkgykqoskaca, $iaakskwmyqceoscy, $ywmkwiwkosakssii, $wpError); } public function gsuemqqyeumuscao(int $yiuogaeewyockeak, int $ycooswiwewekokei, string $iaakskwmyqceoscy, $ywmkwiwkosakssii = null, $isksgswsmmqgeqmo = null) : int { return as_schedule_recurring_action($yiuogaeewyockeak, $ycooswiwewekokei, $iaakskwmyqceoscy, $ywmkwiwkosakssii, $isksgswsmmqgeqmo); } }
