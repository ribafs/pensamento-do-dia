<?php
/**
* @version $Id:  mod_pensamentos.php, V1.0.0  2009-01-01 $
* @module Joomla
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* Adaptado do módulo vivi_code do Serra Antonio (tonio@vivigrosseto.it)
* http://www.vivigrosseto.it/ 
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
use Joomla\CMS\Uri\Uri;

class pensamentos
{
	function pensamento_aleatorio(){
		$f_contents = file ('modules/mod_pensamentododia/mod_pensamentododia.txt');
		srand ((double)microtime()*1000000);
		$linha_aleatoria = $f_contents[ rand (0, (count ($f_contents) - 1)) ];
		return $linha_aleatoria;
	}
}
$aleatorio = new pensamentos();
print '<div id="pensamentos">'.$aleatorio->pensamento_aleatorio().'</div></ br>';
$pensa = Uri::root() . 'modules/mod_pensamentododia/Pensamentodos.pdf';
//print "<div id=\"pensamentos\"><a href=\"$pensa\" target="_blank">Download</a></div>";
?>
