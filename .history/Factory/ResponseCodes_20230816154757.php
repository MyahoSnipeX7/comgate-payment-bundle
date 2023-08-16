<?php


namespace Mysho\ComgateBundle\Factory;


class ResponseCodes
{
    const CODE_OK = 0;
    const CODE_UNKNOWN = 1100;
    const CODE_NOT_SUPPORTED_LANG = 1102;
    const CODE_INVALID_METHOD = 1103;
    const CODE_UNABLE_TO_LOAD_PAYMENT = 1104;
    const CODE_DB_ERROR = 1200;
    const CODE_UNKNOWN_SHOP = 1301;
    const CODE_MISSING_LANG = 1303;
    const CODE_INVALID_CATEGORY = 1304;
    const CODE_MISSING_PRODUCT_DESC = 1305;
    const CODE_CHOOSE_CORRECT_METHOD = 1306;
    const CODE_NOT_SUPPORTED_METHOD = 1308;
    const CODE_INVALID_PRICE = 1309;
    const CODE_UNKNOWN_CURRENCY = 1310;
    const CODE_INVALID_BANK_ACCOUNT_IDENTIFIER = 1311;
    const CODE_PAYMENT_REPEAT_NOT_SUPPORTED = 1316;
    const CODE_INVALID_METHOD_REPEAT_PAYMENT = 1317;
    const CODE_UNABLE_TO_CREATE_PAYMENT = 1319;
    const CODE_DB_RESULT_ERROR = 1399;
    const CODE_INVALID_REQUEST = 1400;
    const CODE_FATAL = 1500;

    static $codes = [
        0    => 'OK',
        1100 => 'nezn�m� chyba',
        1102 => 'zadan� jazyk nen� podporov�n',
        1103 => 'nespr�vn� zadan� metoda',
        1104 => 'nelze na��st platbu',
        1200 => 'datab�zov� chyba',
        1301 => 'nezn�m� eshop',
        1303 => 'propojen� nebo jazyk chyb�',
        1304 => 'neplatn� kategorie',
        1305 => 'chyb� popis produktu',
        1306 => 'vyberte spr�vnou metodu',
        1308 => 'vybran� zp�sob platby nen� povolen',
        1309 => 'nespr�vn� ��stka',
        1310 => 'nezn�m� m�na',
        1311 => 'neplatn� identifik�tor bankovn�ho ��tu Klienta',
        1316 => 'eshop nem� povolen� opakovan� platby',
        1317 => 'neplatn� metoda � nepodporuje opakovan� platby',
        1319 => 'nelze zalo�it platbu, probl�m na stran� banky',
        1399 => 'neo�ek�van� v�sledek z datab�ze',
        1400 => 'chybn� dotaz',
        1500 => 'neo�ek�van� chyba',
    ];
}