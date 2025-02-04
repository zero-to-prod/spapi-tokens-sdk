<?php

namespace Zerotoprod\SpapiTokensSdk\DataModels;

use Zerotoprod\DataModel\DataModel;

class Info
{
    use DataModel;

    public const url = 'url';
    public ?string $url = null;

    public const content_type = 'content_type';
    public ?string $content_type = null;

    public const http_code = 'http_code';
    public ?int $http_code = null;

    public const header_size = 'header_size';
    public ?int $header_size = null;

    public const request_size = 'request_size';
    public ?int $request_size = null;

    public const filetime = 'filetime';
    public ?int $filetime = null;

    public const ssl_verify_result = 'ssl_verify_result';
    public ?int $ssl_verify_result = null;

    public const redirect_count = 'redirect_count';
    public ?int $redirect_count = null;

    public const total_time = 'total_time';
    public ?float $total_time = null;

    public const namelookup_time = 'namelookup_time';
    public ?float $namelookup_time = null;

    public const connect_time = 'connect_time';
    public ?float $connect_time = null;

    public const pretransfer_time = 'pretransfer_time';
    public ?float $pretransfer_time = null;

    public const size_upload = 'size_upload';
    public ?int $size_upload = null;

    public const size_download = 'size_download';
    public ?int $size_download = null;

    public const speed_download = 'speed_download';
    public ?int $speed_download = null;

    public const speed_upload = 'speed_upload';
    public ?int $speed_upload = null;

    public const download_content_length = 'download_content_length';
    public ?int $download_content_length = null;

    public const upload_content_length = 'upload_content_length';
    public ?int $upload_content_length = null;

    public const starttransfer_time = 'starttransfer_time';
    public ?float $starttransfer_time = null;

    public const redirect_time = 'redirect_time';
    public ?float $redirect_time = null;

    public const redirect_url = 'redirect_url';
    public ?string $redirect_url = null;

    public const primary_ip = 'primary_ip';
    public ?string $primary_ip = null;

    public const certinfo = 'certinfo';
    public ?array $certinfo = null;

    public const primary_port = 'primary_port';
    public ?int $primary_port = null;

    public const local_ip = 'local_ip';
    public ?string $local_ip = null;

    public const local_port = 'local_port';
    public ?int $local_port = null;

    public const http_version = 'http_version';
    public ?int $http_version = null;

    public const protocol = 'protocol';
    public ?int $protocol = null;

    public const ssl_verifyresult = 'ssl_verifyresult';
    public ?int $ssl_verifyresult = null;

    public const scheme = 'scheme';
    public ?string $scheme = null;

    public const appconnect_time_us = 'appconnect_time_us';
    public ?int $appconnect_time_us = null;

    public const connect_time_us = 'connect_time_us';
    public ?int $connect_time_us = null;

    public const namelookup_time_us = 'namelookup_time_us';
    public ?int $namelookup_time_us = null;

    public const pretransfer_time_us = 'pretransfer_time_us';
    public ?int $pretransfer_time_us = null;

    public const redirect_time_us = 'redirect_time_us';
    public ?int $redirect_time_us = null;

    public const starttransfer_time_us = 'starttransfer_time_us';
    public ?int $starttransfer_time_us = null;

    public const total_time_us = 'total_time_us';
    public ?int $total_time_us = null;
}