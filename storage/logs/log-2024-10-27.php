<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-27 08:41:53 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://layanan.opendesa.id/api/v1/pelanggan/catat-versi` resulted in a `400 Bad Request` response:
"Data gagal disimpan atau desa tidak ditemukan"
 in C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:113
Stack trace:
#0 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 C:\laragon\www\opensid\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 C:\laragon\www\opensid\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 C:\laragon\www\opensid\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 C:\laragon\www\opensid\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 C:\laragon\www\opensid\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 C:\laragon\www\opensid\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 C:\laragon\www\opensid\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 C:\laragon\www\opensid\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://layanan...', Array)
#11 C:\laragon\www\opensid\donjo-app\helpers\general_helper.php(573): GuzzleHttp\Client->post('https://layanan...', Array)
#12 C:\laragon\www\opensid\donjo-app\third_party\pelanggan\controllers\Pelanggan_Controller.php(77): kirim_versi_opensid()
#13 C:\laragon\www\opensid\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): Pelanggan_Controller->index()
#14 C:\laragon\www\opensid\index.php(284): require_once('C:\\laragon\\www\\...')
#15 {main}
ERROR - 2024-10-27 08:59:47 --> 404 Page Not Found: 
ERROR - 2024-10-27 08:59:58 --> 404 Page Not Found: 
