<?php


class MyPDO extends PDO
{
    public function __construct($file = 'setting.ini')
    {
        $settings = parse_ini_file($file, TRUE);
        if (!$settings) throw new exception('Unable to open ' . $file . '.');

        $dns = $settings['database']['driver'] .
            ':host=' . $settings['database']['host'] .
            ';port=' . $settings['database']['port'] .
            ';dbname=' . $settings['database']['schema'];

        parent::__construct($dns, $settings['database']['username']);
    }
}