<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-25 12:51:34 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4012 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 C:\laragon\www\opensid\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#15 C:\laragon\www\opensid\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#16 C:\laragon\www\opensid\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#17 C:\laragon\www\opensid\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#18 C:\laragon\www\opensid\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 C:\laragon\www\opensid\index.php(284): require_once('C:\\laragon\\www\\...')
#20 {main}
ERROR - 2024-10-25 12:53:30 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4009 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 C:\laragon\www\opensid\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#15 C:\laragon\www\opensid\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#16 C:\laragon\www\opensid\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#17 C:\laragon\www\opensid\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#18 C:\laragon\www\opensid\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 C:\laragon\www\opensid\index.php(284): require_once('C:\\laragon\\www\\...')
#20 {main}
ERROR - 2024-10-25 12:56:22 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Resolving timed out after 4005 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 C:\laragon\www\opensid\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#15 C:\laragon\www\opensid\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#16 C:\laragon\www\opensid\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#17 C:\laragon\www\opensid\donjo-app\controllers\Main.php(56): Track_model->track_desa('main')
#18 C:\laragon\www\opensid\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): Main->index()
#19 C:\laragon\www\opensid\index.php(284): require_once('C:\\laragon\\www\\...')
#20 {main}
ERROR - 2024-10-25 12:58:12 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/5203172001/2020` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2024-10-25 13:08:21 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 13:08:22 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 13:08:22 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 13:08:22 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 13:08:35 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4000 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 C:\laragon\www\opensid\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#15 C:\laragon\www\opensid\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#16 C:\laragon\www\opensid\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#17 C:\laragon\www\opensid\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#18 C:\laragon\www\opensid\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 C:\laragon\www\opensid\index.php(284): require_once('C:\\laragon\\www\\...')
#20 {main}
ERROR - 2024-10-25 13:18:59 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4010 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 C:\laragon\www\opensid\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#15 C:\laragon\www\opensid\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#16 C:\laragon\www\opensid\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#17 C:\laragon\www\opensid\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#18 C:\laragon\www\opensid\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 C:\laragon\www\opensid\index.php(284): require_once('C:\\laragon\\www\\...')
#20 {main}
ERROR - 2024-10-25 13:24:54 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timed out after 4011 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 C:\laragon\www\opensid\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#15 C:\laragon\www\opensid\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#16 C:\laragon\www\opensid\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#17 C:\laragon\www\opensid\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#18 C:\laragon\www\opensid\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 C:\laragon\www\opensid\index.php(284): require_once('C:\\laragon\\www\\...')
#20 {main}
ERROR - 2024-10-25 13:32:27 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Resolving timed out after 4009 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 C:\laragon\www\opensid\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 C:\laragon\www\opensid\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#15 C:\laragon\www\opensid\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#16 C:\laragon\www\opensid\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#17 C:\laragon\www\opensid\donjo-app\controllers\First.php(118): Track_model->track_desa('first')
#18 C:\laragon\www\opensid\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 C:\laragon\www\opensid\index.php(284): require_once('C:\\laragon\\www\\...')
#20 {main}
NOTICE - 2024-10-25 13:41:32 --> Website tidak dapat diakses 
NOTICE - 2024-10-25 14:41:57 --> Website tidak dapat diakses 
ERROR - 2024-10-25 14:43:32 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 14:43:33 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 14:50:08 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 14:50:08 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 14:52:34 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 14:52:34 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 14:56:01 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 14:56:02 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 14:58:52 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 14:58:52 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 14:59:35 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 14:59:36 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2024-10-25 09:14:31 --> 404 Page Not Found: 
ERROR - 2024-10-25 09:15:46 --> 404 Page Not Found: 
ERROR - 2024-10-25 09:16:17 --> 404 Page Not Found: 
