<?php
// -------------------------------------------------------------------------
//
// Letakkan username, password dan database sebetulnya di file ini.
// File ini JANGAN di-commit ke GIT. TAMBAHKAN di .gitignore
// -------------------------------------------------------------------------

// Data Konfigurasi MySQL yang disesuaikan

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = 'eyJpdiI6Im92bWVIcnpZRGo5aDk1NmZIZ0hIakE9PSIsInZhbHVlIjoiTHJSRkkxbkxHTFRMcGNNR25lcVJNQT09IiwibWFjIjoiYzc2M2E4MmVlZTNlZTA4YTBlNDIxYTkxNDE1YTdiODcyZmFhNjgxZmQyYmI0N2I5Yjg0MzZiM2M4YTk0ZTg4ZCIsInRhZyI6IiJ9';
$db['default']['port']     = 3306;
$db['default']['database'] = 'desa_labuhan_haji';
$db['default']['dbcollat'] = 'utf8_general_ci';

/*
| Untuk setting koneksi database 'Strict Mode'
| Sesuaikan dengan ketentuan hosting
*/
$db['default']['stricton'] = true;