# Zerotoprod\SpapiTokensSdk

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/spapi-tokens-sdk)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/spapi-tokens-sdk/test.yml?label=test)](https://github.com/zero-to-prod/spapi-tokens-sdk/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/spapi-tokens-sdk?color=blue)](https://packagist.org/packages/zero-to-prod/spapi-tokens-sdk/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/spapi-tokens-sdk.svg?color=purple)](https://packagist.org/packages/zero-to-prod/spapi-tokens-sdk/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/spapi-tokens-sdk?color=f28d1a)](https://packagist.org/packages/zero-to-prod/spapi-tokens-sdk)
[![License](https://img.shields.io/packagist/l/zero-to-prod/spapi-tokens-sdk?color=pink)](https://github.com/zero-to-prod/spapi-tokens-sdk/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/spapi-tokens-sdk.svg)](https://wakatime.com/badge/github/zero-to-prod/spapi-tokens-sdk)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/spapi-tokens-sdk?branch=main)](https://hitsofcode.com/github/zero-to-prod/spapi-tokens-sdk/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

A Software Development Kit for the Amazons Selling Parterns API (SPAPI) [Tokens API](https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference).

## Requirements

- PHP 7.1 or higher.

## Installation

Install `Zerotoprod\SpapiTokensSdk` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/spapi-tokens-sdk
```

This will add the package to your project’s dependencies and create an autoloader entry for it.

## Usage

Call the Tokens API to get a Restricted Data Token (RDT) for restricted resources.

```php
use Zerotoprod\SpapiTokensSdk\SpapiTokensSdk;

$CreateRestrictedDataTokenResponse = SpapiTokensSdk::createRestrictedDataToken(
    'access_token',     // The access token to create the RDT
    'path',             // The path in the restricted resource.
    ['dataElements'],   // Indicates the type of Personally Identifiable Information requested.
    'targetApplication',// The application ID for the target application to which access is being delegated
    'base_uri',         // The user agent for the request.
    'user_agent'        // Optional. The URL for the api.
    ['options']         // Merge curl options
);

// Get Restricted Data Token
$token = $CreateRestrictedDataTokenResponse->response->restrictedDataToken

// Errors
$CreateRestrictedDataTokenResponse->response->errors[0]->message;
```

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/spapi-tokens-sdk/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.