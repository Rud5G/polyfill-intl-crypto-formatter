TnetDev Intl Crypto: Number/CurrencyFormatter for CryptoCurrencies
------------------------------------------------------------------

This package adds crypto currencies to the currency formatter.
It is limited to the "en" locale and to:

see:

- [`NumberFormatter`](https://php.net/NumberFormatter)
- [`NumberFormatter::formatCurrency`](https://php.net/manual/numberformatter.formatcurrency.php)

method:
- [CryptoFormatter::formatCurrency](./CryptoFormatter.php#L309)

## License

This library is released under the [MIT license](LICENSE).

## Add repository

```bash
composer config repositories.polyfill-intl-crypto-formatter vcs https://github.com/Rud5G/polyfill-intl-crypto-formatter
```

## Install package

```bash
composer require tnetdev/polyfill-intl-crypto-formatter
```

## Example code

```php
use TnetDev\Polyfill\Intl\Crypto\CryptoFormatter;
use Twig\Error\RuntimeError;

/**
 * Example function formatCrypto
 * 
 * @param float $amount
 * @param string $currency
 * @return string
 * @throws RuntimeError
 */
function formatCrypto(float $amount, string $currency): string
{
    $formatter = CryptoFormatter::create();
    $floatAmount = $formatter->parse($amount);
    if (false === $ret = $formatter->formatCurrency($floatAmount, $currency)) {
        throw new RuntimeError('Unable to format the given number as a currency.');
    }

    return $ret;
}


$amount = (float)551684.50;
$currency = 'XXBT';

echo formatCrypto($amount, $currency);

```
