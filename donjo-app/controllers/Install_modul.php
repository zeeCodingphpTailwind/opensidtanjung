<?php

/*
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2024 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package   OpenSID
 * @author    Tim Pengembang OpenDesa
 * @copyright Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright Hak Cipta 2016 - 2024 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license   http://www.gnu.org/licenses/gpl.html GPL V3
 * @link      https://github.com/OpenSID/OpenSID
 *
 */

use Illuminate\Support\Facades\Http;

defined('BASEPATH') || exit('No direct script access allowed');
// require_once('donjo-app/core/MY_Model.php');
class Install_modul extends CI_Controller
{
    private $modulesDirectory;

    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
        $this->load->model(['ekspor_model']);
        $this->modulesDirectory = array_keys(config_item('modules_locations') ?? [])[0] ?? '';
    }

    /**
     * $namaModulVersi berisi namaModul__urlDownload__versiModul
     * digunakan untuk proses development dan instalasi modul pada siappakai
     * asumsinya folder module tersebut sudah ada, tinggal jalankan proses migrasi saja
     * contoh
     * php index.php modul pasang Prodeskel___dowload
     */
    public function pasang(string $namaModulVersi): void
    {
        [$name, $url, $version] = explode('___', $namaModulVersi);
        $pasangBaru             = true;
        if (! empty($version)) {
            $pasangBaru = false;
        }
        // jalankan migrasi dari paket
        $this->jalankanMigrasi($name, 'up');

        if ($pasangBaru) {
            try {
                // hit ke url install module untuk update total yang terinstall
                $urlHitModule = config_item('server_layanan') . '/api/v1/modules/install';
                $token        = App\Models\SettingAplikasi::where(['key' => 'layanan_opendesa_token'])->first();
                $response     = Http::withToken($token->value)->post($urlHitModule, ['module_name' => $name]);
                log_message('error', $response->body());
            } catch (\Exception $e) {
                log_message('error', $e->getMessage());
            }
        }
        // reset cache views_blade karena di MY_Controller diset cache rememberForever
        cache()->flush();
        log_message('error', 'Paket ' . $name . ' berhasil dipasang');
    }

    /**
     * $namaModulVersi berisi namaModul__urlDownload__versiModul
     * digunakan untuk proses development dan instalasi modul pada siappakai
     * asumsinya folder module tersebut sudah ada, tinggal jalankan proses migrasi saja
     * contoh
     * php index.php hapus pasang Prodeskel
     */
    public function hapus(string $namaModulVersi): void
    {
        try {
            $name = $namaModulVersi;
            if (empty($name)) {
                log_message('error', 'Nama paket tidak boleh kosong');
            }
            $this->jalankanMigrasi($name, 'down');
            // reset cache views_blade karena di MY_Controller diset cache rememberForever
            cache()->flush();
            log_message('error', 'Paket ' . $name . ' berhasil dihapus');
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
        }
    }

    private function jalankanMigrasi($name, string $action = 'up'): void
    {
        $this->load->helper('directory');
        $directoryTable = $this->modulesDirectory . $name . '/Database/Migrations';
        $migrations     = directory_map($directoryTable, 1);
        // sort by name, jika up maka urutkan dari yang paling lama namun jika down maka urutkan dari yang paling baru
        $action == 'up' ? usort($migrations, static fn ($a, $b): int => strcmp($a, $b)) : usort($migrations, static fn ($a, $b): int => strcmp($b, $a));

        foreach ($migrations as $migrate) {
            $migrateFile = require $directoryTable . DIRECTORY_SEPARATOR . $migrate;

            switch($action) {
                case 'down':
                    $migrateFile->down();
                    break;

                default:
                    $migrateFile->up();
            }
        }
    }
}
