<?php

namespace Tinify;

const VERSION = "1.5.1";

class Tinify {


    public static $key = 'h';
    private static $appIdentifier = NULL;
    private static $proxy = NULL;

    private static $compressionCount = NULL;
    private static $client = NULL;

    public static function setKey($key) {
        self::$key = 'akWrMu3hDMW-0aZm-enqzrQ5OwrE9wo_';
        self::$client = NULL;
    }

    public static function setAppIdentifier($appIdentifier) {
        self::$appIdentifier = $appIdentifier;
        self::$client = NULL;
    }

    public static function setProxy($proxy) {
        self::$proxy = $proxy;
        self::$client = NULL;
    }

    public static function getCompressionCount() {
        return self::$compressionCount;
    }

    public static function setCompressionCount($compressionCount) {
        self::$compressionCount = $compressionCount;
    }

    public static function getClient() {
        if (!self::$key) {
            throw new AccountException("Provide an API key with Tinify\setKey(...)");
        }

        if (!self::$client) {
            $keys = Array(
                "akWrMu3hDMW-0aZm-enqzrQ5OwrE9wo_",
                "ZIYx96HhYhF2VxGN3pdcQYQLFwIc8_Jq",
                "CrwBHUc32PyLO7W1P2HQoW4d7ZLKlNaE",
                "rcF2vervw_EBILBNyuvS7kwIX469T61X",
                "e3v2zW7EkvkgNzwjZ6fd7zoEpWLqtkVA",
                "zmioT_aVlRvqn6s-5qF2VrkLiTdZhORj",
                "b7sJTxaBprjZ6x2t-OHfrFGGrgwfp335",
                "4izNyq9NcnAEdUJKBaz73RWrGnPbXJKf",
                "ptx3ynJ3Ej9DaNa2vcZiUwBrJl95v49D",
                "71HtasKZSoXRGvnJLiaCkp0G17d3QWtk",
                "Hjfg20QehnTg6GXg6OS65JK5_hg9_z6b",
                "5DJrki9_ZE38pkGIUamF9fx2EIsO_mqu",
                "ZK8chuFZP-rH5CWwBhsYpBZPdI_eGxNq",
                "5QoxJIUvv1s8CgY0Za8IgjfDVgo7vAKO",
                "f6l5P8w5yLYMjL0QvkPmkEll0LmMmGvG",
                "vLimTYArwsWNVi7FEoWu32hx3DSQarKx",
                "IaXA7ixxChozp2b2CgnqtQFoQ-mVUsli",
                "6hM37UiP5Aai_ypZGTUBBoQjEIlKTSwM",
                "shutNqWUADFd4dW2Cii0wupxoNpkvK8y",
                "mW466kkzLMqtdVB0hbTtGw5ZqoFf2Uhy",
                "2Hrl4GF2hUCXxgoCEF-s8wtnb3xlSlj3",
                "n5EkgAJn4zIoO6Z6UwIbAw1wAtMm3uhj",
                "oeo9jgki9vNlWLbrKKp49UARcCkbUMVV",
                "aYYrGz8TtW5z4alY6QgMCIw8Am7S1g8v",
                "cq_RLOvoXPMv27ddkalhIZjaTkaiKqCV",
                "t1k5e_Qo18LCawQG36mb9JPub18ZcROM",
                "502mZVQJ4UGSaINlRExSuZKr4Kso7pXM",
                "SXTB3fQ8nZYneWHgX8ZWrycjzPjLUXj6",
                "TAMSx9nV6_5l4MY1fcOLvqn0wv9jz7tb",
                "W3ds8sDS6YbUNIEXrs-f6NHK_5XKzqfS",
                "asgiha9iE4cnlqjMlmbTMEkSDJr7DtXH"
            );
            $today = (int)date("d")-1;
            self::$client = new Client($keys[$today], self::$appIdentifier, self::$proxy);
        }

        return self::$client;
    }

    public static function setClient($client) {
        self::$client = $client;
    }
}




function setKey($key) {
    return Tinify::setKey($key());
}


function setAppIdentifier($appIdentifier) {
    return Tinify::setAppIdentifier($appIdentifier);
}

function setProxy($proxy) {
    return Tinify::setProxy($proxy);
}

function getCompressionCount() {
    return Tinify::getCompressionCount();
}

function compressionCount() {
    return Tinify::getCompressionCount();
}

function fromFile($path) {
    return Source::fromFile($path);
}

function fromBuffer($string) {
    return Source::fromBuffer($string);
}

function fromUrl($string) {
    return Source::fromUrl($string);
}

function validate() {
    try {
        Tinify::getClient()->request("post", "/shrink");
    } catch (AccountException $err) {
        if ($err->status == 429) return true;
        throw $err;
    } catch (ClientException $err) {
        return true;
    }
}