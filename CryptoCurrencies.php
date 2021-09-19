<?php

namespace TnetDev\Polyfill\Intl\Crypto;


class CryptoCurrencies
{
    private static $data;

    public static function getSymbol(string $currency): ?string
    {
        $data = self::$data ?? self::$data = require __DIR__.'/Resources/cryptocurrencies.php';

        return $data[$currency][0] ?? $data[strtoupper($currency)][0] ?? null;
    }

    public static function getFractionDigits(string $currency): int
    {
        $data = self::$data ?? self::$data = require __DIR__.'/Resources/cryptocurrencies.php';

        return $data[$currency][1] ?? $data[strtoupper($currency)][1] ?? $data['DEFAULT'][1];
    }

    public static function getRoundingIncrement(string $currency): int
    {
        $data = self::$data ?? self::$data = require __DIR__.'/Resources/cryptocurrencies.php';

        return $data[$currency][2] ?? $data[strtoupper($currency)][2] ?? $data['DEFAULT'][2];
    }
}
