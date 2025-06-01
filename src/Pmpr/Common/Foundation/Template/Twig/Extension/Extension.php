<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             683c1b9754d14             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Extension\AbstractExtension; class Extension extends AbstractExtension { public function getTokenParsers() : array { return [new BreakToken()]; } }
