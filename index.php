<?php
/**
 * @package    Joomla.Site
 * @subpackage Template.CompTest
 *
 * @author     Schul <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

require_once JPATH_THEMES . '/' . $this->template . '/helper.php';

tplCompTestHelper::loadCss();
tplCompTestHelper::loadJs();
tplCompTestHelper::setMetadata();

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
</head>
<body class="<?php echo tplCompTestHelper::setBodySuffix(); ?>">
<?php echo tplCompTestHelper::setAnalytics(0, 'your-analytics-id'); ?>

<a href="#main" class="sr-only sr-only-focusable"><?php echo Text::_('TPL_COMPTEST_SKIP_LINK_LABEL'); ?></a>

<a href="<?php echo $this->baseurl; ?>/">
    <?php if ($this->params->get('sitedescription')) : ?>
        <?php echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription'), ENT_COMPAT, 'UTF-8') . '</div>'; ?>
    <?php endif; ?>
</a>

<nav role="navigation" >
	<jdoc:include type="modules" name="position-0" style="none" />
</nav>

<main id="main">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</main>

<aside>
    <?php if ($this->countModules('position-1')) : ?>
		<jdoc:include type="modules" name="position-1" style="none" />
	<?php endif; ?>
</aside>

<footer>
	<jdoc:include type="modules" name="footer" style="none" />
	<p>
		&copy; <?php echo date('Y'); ?> <?php echo tplCompTestHelper::getSitename(); ?>
	</p>
</footer>
<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
