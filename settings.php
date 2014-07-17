<?php
/**
 * Fiftysix24 theme
 *
 * @package    theme_fiftysix24
 * @copyright  2014 LearningWorks Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Invert Navbar to dark background.
    $name = 'theme_fiftysix24/invert';
    $title = get_string('invert', 'theme_fiftysix24');
    $description = get_string('invertdesc', 'theme_fiftysix24');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Logo file setting.
    $name = 'theme_fiftysix24/logo';
    $title = get_string('logo','theme_fiftysix24');
    $description = get_string('logodesc', 'theme_fiftysix24');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_fiftysix24/customcss';
    $title = get_string('customcss', 'theme_fiftysix24');
    $description = get_string('customcssdesc', 'theme_fiftysix24');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_fiftysix24/footnote';
    $title = get_string('footnote', 'theme_fiftysix24');
    $description = get_string('footnotedesc', 'theme_fiftysix24');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}
