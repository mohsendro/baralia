<?php
if ( !class_exists('Puc_v4p6_UpgraderStatus', false) ): class Puc_v4p6_UpgraderStatus { private $currentType = null; private $currentId = null; public function __construct() { add_filter('upgrader_pre_install', array($this, 'setUpgradedThing'), 10, 2); add_filter('upgrader_package_options', array($this, 'setUpgradedPluginFromOptions'), 10, 1); add_filter('upgrader_post_install', array($this, 'clearUpgradedThing'), 10, 1); add_action('upgrader_process_complete', array($this, 'clearUpgradedThing'), 10, 1); } public function isPluginBeingUpgraded($pluginFile, $upgrader = null) { return $this->isBeingUpgraded('plugin', $pluginFile, $upgrader); } public function isThemeBeingUpgraded($stylesheet, $upgrader = null) { return $this->isBeingUpgraded('theme', $stylesheet, $upgrader); } protected function isBeingUpgraded($type, $id, $upgrader = null) { if ( isset($upgrader) ) { list($currentType, $currentId) = $this->getThingBeingUpgradedBy($upgrader); if ( $currentType !== null ) { $this->currentType = $currentType; $this->currentId = $currentId; } } return ($this->currentType === $type) && ($this->currentId === $id); } private function getThingBeingUpgradedBy($upgrader) { if ( !isset($upgrader, $upgrader->skin) ) { return array(null, null); } $pluginFile = null; $themeDirectoryName = null; $skin = $upgrader->skin; if ( isset($skin->theme_info) && ($skin->theme_info instanceof WP_Theme) ) { $themeDirectoryName = $skin->theme_info->get_stylesheet(); } elseif ( $skin instanceof Plugin_Upgrader_Skin ) { if ( isset($skin->plugin) && is_string($skin->plugin) && ($skin->plugin !== '') ) { $pluginFile = $skin->plugin; } } elseif ( $skin instanceof Theme_Upgrader_Skin ) { if ( isset($skin->theme) && is_string($skin->theme) && ($skin->theme !== '') ) { $themeDirectoryName = $skin->theme; } } elseif ( isset($skin->plugin_info) && is_array($skin->plugin_info) ) { $pluginFile = $this->identifyPluginByHeaders($skin->plugin_info); } if ( $pluginFile !== null ) { return array('plugin', $pluginFile); } elseif ( $themeDirectoryName !== null ) { return array('theme', $themeDirectoryName); } return array(null, null); } private function identifyPluginByHeaders($searchHeaders) { if ( !function_exists('get_plugins') ){ require_once( ABSPATH . '/wp-admin/includes/plugin.php' ); } $installedPlugins = get_plugins(); $matches = array(); foreach($installedPlugins as $pluginBasename => $headers) { $diff1 = array_diff_assoc($headers, $searchHeaders); $diff2 = array_diff_assoc($searchHeaders, $headers); if ( empty($diff1) && empty($diff2) ) { $matches[] = $pluginBasename; } } if ( count($matches) !== 1 ) { return null; } return reset($matches); } public function setUpgradedThing($input, $hookExtra) { if ( !empty($hookExtra['plugin']) && is_string($hookExtra['plugin']) ) { $this->currentId = $hookExtra['plugin']; $this->currentType = 'plugin'; } elseif ( !empty($hookExtra['theme']) && is_string($hookExtra['theme']) ) { $this->currentId = $hookExtra['theme']; $this->currentType = 'theme'; } else { $this->currentType = null; $this->currentId = null; } return $input; } public function setUpgradedPluginFromOptions($options) { if ( isset($options['hook_extra']['plugin']) && is_string($options['hook_extra']['plugin']) ) { $this->currentType = 'plugin'; $this->currentId = $options['hook_extra']['plugin']; } else { $this->currentType = null; $this->currentId = null; } return $options; } public function clearUpgradedThing($input = null) { $this->currentId = null; $this->currentType = null; return $input; } } endif;