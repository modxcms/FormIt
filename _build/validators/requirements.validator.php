<?php
/**
 * Resolve requirements
 *
 * @package formit
 * @subpackage build
 *
 * @var mixed $object
 * @var array $options
 */

/** @var modX $modx */
$modx =& $object->xpdo;

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:
        $success = true;

        $modx->log(xPDO::LOG_LEVEL_INFO, 'Checking if server meets the minimum requirements for FormIt ...');

        $level = xPDO::LOG_LEVEL_INFO;
        if (version_compare(phpversion(), '5.4.0', '<')) {
            $level = xPDO::LOG_LEVEL_ERROR;
            $success = false;
        }
        $modx->log($level, '- PHP version 5.4+: ' . PHP_VERSION);

        $level = xPDO::LOG_LEVEL_INFO;
        $modxVersion = $modx->getVersionData();
        if (version_compare($modxVersion['full_version'], '2.6.0', '<')) {
            $level = xPDO::LOG_LEVEL_ERROR;
            $success = false;
        }
        $modx->log($level, '- MODX Revolution 2.6.0+: ' . $modxVersion['full_version']);

        if ($success) {
            $modx->log(xPDO::LOG_LEVEL_INFO, 'All Requirements met!');
        } else {
            $modx->log(xPDO::LOG_LEVEL_ERROR, 'Unfortunately, not all requirements were met.');
        }
        break;

    case xPDOTransport::ACTION_UNINSTALL:
        $success = true;
        break;
}

return $success;
