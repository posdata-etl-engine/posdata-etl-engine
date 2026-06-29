<?php

namespace App\Core;

/**
 * ---------------------------------------------------------
 * POSDATA ETL ENGINE
 * ---------------------------------------------------------
 * Bootstrap Application
 * ---------------------------------------------------------
 */

class Application
{
    /**
     * versi aplikasi
     *
     * @var string
     */
    private $version = '0.1.0';

    /**
     * waktu mulai aplikasi
     *
     * @var float
     */
    private $startTime;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->startTime = microtime(true);

        date_default_timezone_set('Asia/Jakarta');
    }

    /**
     * Jalankan aplikasi
     */
    public function run()
    {
        $this->showHeader();

        echo "Application Started\n\n";

        // nanti semua module dipanggil disini

        $this->showFooter();
    }

    /**
     * Header
     */
    private function showHeader()
    {
        echo PHP_EOL;

        echo "==========================================" . PHP_EOL;
        echo "        POSDATA ETL ENGINE" . PHP_EOL;
        echo "==========================================" . PHP_EOL;
        echo "Version : " . $this->version . PHP_EOL;
        echo "Date    : " . date("Y-m-d H:i:s") . PHP_EOL;
        echo "==========================================" . PHP_EOL;
        echo PHP_EOL;
    }

    /**
     * Footer
     */
    private function showFooter()
    {
        $runtime = round(microtime(true) - $this->startTime, 3);

        echo PHP_EOL;

        echo "==========================================" . PHP_EOL;
        echo "Finished" . PHP_EOL;
        echo "Runtime : {$runtime} second(s)" . PHP_EOL;
        echo "==========================================" . PHP_EOL;
    }

}