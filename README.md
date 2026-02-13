# Magento 2 Page Speed Frontend UI

[![Latest Stable Version](https://poser.pugx.org/hryvinskyi/magento2-page-speed-frontend-ui/v/stable)](https://packagist.org/packages/hryvinskyi/magento2-page-speed-frontend-ui)
[![Total Downloads](https://poser.pugx.org/hryvinskyi/magento2-page-speed-frontend-ui/downloads)](https://packagist.org/packages/hryvinskyi/magento2-page-speed-frontend-ui)
[![PayPal donate button](https://img.shields.io/badge/paypal-donate-yellow.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=volodymyr%40hryvinskyi%2ecom&lc=UA&item_name=Magento%202%20Page%20Speed%20Frontend%20UI&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted "Donate once-off to this project using Paypal")
[![Latest Unstable Version](https://poser.pugx.org/hryvinskyi/magento2-page-speed-frontend-ui/v/unstable)](https://packagist.org/packages/hryvinskyi/magento2-page-speed-frontend-ui)
[![License](https://poser.pugx.org/hryvinskyi/magento2-page-speed-frontend-ui/license)](https://packagist.org/packages/hryvinskyi/magento2-page-speed-frontend-ui)

## Description

Generic frontend utilities and components for Page Speed optimization modules. Provides foundational frontend implementations that other frontend-ui modules build upon.

## Features

### Frontend Infrastructure
- **Controller Layer** - Frontend routes and actions
- **Foundation Components** - Base classes for frontend implementations
- **Utility Functions** - Common frontend helper functions

## Installation

```bash
composer require hryvinskyi/magento2-page-speed-frontend-ui
bin/magento module:enable Hryvinskyi_PageSpeedFrontendUi
bin/magento setup:upgrade
bin/magento cache:flush
```

## Purpose

This module serves as a foundation for frontend-specific Page Speed implementations:
- CSS optimization frontend components
- JavaScript optimization frontend components
- Lazy loading frontend components

It provides shared functionality to avoid code duplication across frontend modules.

## Dependencies

- `magento/framework: *`
- `hryvinskyi/magento2-page-speed-api: 1.0.*`

## Used By

Frontend modules that extend this foundation:
- `hryvinskyi/magento2-page-speed-css-frontend-ui`
- `hryvinskyi/magento2-page-speed-css-extreme-lazy-load-frontend-ui`
- `hryvinskyi/magento2-page-speed-js-merge-frontend-ui`
- `hryvinskyi/magento2-page-speed-js-extreme-lazy-load-frontend-ui`

## Compatibility

- Magento 2.3.x
- Magento 2.4.x
- PHP 7.4+
- PHP 8.0+
- PHP 8.1+

## Support

For issues, questions, or contributions:
- Email: volodymyr@hryvinskyi.com
- GitHub: https://github.com/hryvinskyi

## License

[MIT License](LICENSE)

## Author

**Volodymyr Hryvinskyi**
- Email: volodymyr@hryvinskyi.com
