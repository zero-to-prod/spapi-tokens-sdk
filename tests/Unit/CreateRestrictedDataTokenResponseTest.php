<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\SpapiTokensSdk\CreateRestrictedDataToken\CreateRestrictedDataTokenResponse;
use Zerotoprod\SpapiTokensSdk\SpapiTokensSdk;

class CreateRestrictedDataTokenResponseTest extends TestCase
{
    /** @test */
    public function fromResponse(): void
    {
        $json = <<<JSON
        {
            "info": {
                "url": "",
                "content_type": "application\/json",
                "http_code": 200,
                "header_size": 486,
                "request_size": 753,
                "filetime": -1,
                "ssl_verify_result": 0,
                "redirect_count": 0,
                "total_time": 0.265951,
                "namelookup_time": 0.007058,
                "connect_time": 0.082177,
                "pretransfer_time": 0.162209,
                "size_upload": 217,
                "size_download": 2329,
                "speed_download": 8757,
                "speed_upload": 815,
                "download_content_length": 2329,
                "upload_content_length": 217,
                "starttransfer_time": 0.26592,
                "redirect_time": 0,
                "redirect_url": "",
                "primary_ip": "44.215.139.122",
                "certinfo": [],
                "primary_port": 443,
                "local_ip": "172.18.0.2",
                "local_port": 60634,
                "http_version": 2,
                "protocol": 2,
                "ssl_verifyresult": 0,
                "scheme": "HTTPS",
                "appconnect_time_us": 162170,
                "connect_time_us": 82177,
                "namelookup_time_us": 7058,
                "pretransfer_time_us": 162209,
                "redirect_time_us": 0,
                "starttransfer_time_us": 265920,
                "total_time_us": 265951
            },
            "error": "",
            "headers": {
                "Server": "Server",
                "Date": "Tue, 04 Feb 2025 00:58:28 GMT",
                "Content-Type": "application\/json",
                "Content-Length": "2329",
                "Connection": "keep-alive",
                "x-amz-rid": "AXXVP15PEK7PS23RFV0N",
                "x-amzn-RateLimit-Limit": "1.0",
                "x-amzn-RequestId": "36d23a52-5331-4a81-bc04-7af52465ff81",
                "x-amz-apigw-id": "OPF36d23a525331",
                "X-Amzn-Trace-Id": "Root=1-67a16634-36d23a5253314a81",
                "Vary": "accept-encoding,Content-Type,Accept-Encoding,User-Agent",
                "Strict-Transport-Security": "max-age=47474747; includeSubDomains; preload"
            },
            "response": {
                "expiresIn": 3600,
                "restrictedDataToken": "a"
            }
        }
        JSON;

        $Response = CreateRestrictedDataTokenResponse::fromResponse(json_decode($json, true));

        self::assertEquals('a', $Response->response->restrictedDataToken);
        self::assertEquals(3600, $Response->response->expiresIn);
    }
}