<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 *
 * @package PhpMyAdmin
 */
declare(strict_types=1);

/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie. Needs to be 32 chars long.
 */
$cfg['blowfish_secret'] = 'Wn{ptN0W~ZzM1c0xm|xYOTeh5gCubDfh3vooCXZ*3Fd#~r3S}PVHvat*QIR2N~B5Wn{ptN0W~ZzM1c0xm|xYOTeh5gCubDfh3vooCXZ*3Fd#~r3S}PVHvat*QIR2N~B5'; 

$cfg['TempDir'] = '/var/www/phpmyadmin/tmp';

/**
 * Servers configuration
 */
$i = 0;

/**
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/*$cfg['Servers'][$i]['user'] = 'root'
$cfg['Servers'][$i]['password'] = '12345'*/
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'mysql:3306';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;


$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

