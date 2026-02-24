<?php

namespace NPEU\Module\Blocksaccordion\Site\Helper;

\defined('_JEXEC') or die;

use Joomla\CMS\Application\SiteApplication;
use Joomla\CMS\Factory;
use Joomla\Database\DatabaseAwareInterface;
use Joomla\Database\DatabaseAwareTrait;
use Joomla\Registry\Registry;


/**
 * Helper for mod_blocksaccordion
 *
 * @since  1.5
 */
class BlocksaccordionHelper implements DatabaseAwareInterface
{
    use DatabaseAwareTrait;


    public function getPanels(Registry $config, SiteApplication $app): array
    {
        if (!$app instanceof SiteApplication) {
            return [];
        }
        //$db = $this->getDatabase();
        $panels = [];

        return $panels;
    }

}
