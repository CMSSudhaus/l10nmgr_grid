<?php
if (!defined ('TYPO3_MODE')) {
  die ('Access denied.');
}

/**
 * Export Override
 */
// Set New Class to Autoload
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['Localizationteam\\L10nmgr\\Model\\Tools\\Tools'] = array(
 'className' => 'WebKonInternetagentur\\L10nmgrGrid\\Model\\Tools\\Tools'
);

/**
 * Import Override
 */
// Set New Class to Autoload
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['Localizationteam\\L10nmgr\\Model\\L10nBaseService'] = array(
 'className' => 'WebKonInternetagentur\\L10nmgrGrid\\Model\\L10nBaseService'
);
?>
