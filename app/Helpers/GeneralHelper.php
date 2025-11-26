<?php

if (! function_exists('getVarVal')) {
    function getVarVal($var, $key = null, $default = null)
    {
        $tmpReturn = (! empty($var) ? $var : $default);

        if (is_array($tmpReturn) && (! empty($key) && (is_string($key) || is_numeric($key)))) {
            $tmpReturn = (! empty($tmpReturn[$key]) ? $tmpReturn[$key] : $default);
        }

        return (is_string($tmpReturn) || is_numeric($tmpReturn)) ? trim($tmpReturn) : $tmpReturn;
    }
}

if (! function_exists('isValEmpty')) {
    function isValEmpty($var, $key = null): bool
    {
        $tmpReturn = getVarVal($var, $key);

        return empty($tmpReturn);
    }
}

if (! function_exists('isValNotEmpty')) {
    function isValNotEmpty($var, $key = null): bool
    {
        $tmpReturn = getVarVal($var, $key);

        return ! empty($tmpReturn);
    }
}

if (! function_exists('isValEqual')) {
    function isValEqual($var, $equal, $key = null): bool
    {
        $tmpReturn = getVarVal($var, $key);

        return $tmpReturn == $equal;
    }
}

if (! function_exists('arryApiReturn')) {
    function arryApiReturn(int $code, string $status = '', string $message = '', $data = []): array
    {
        return [
            'code' => $code,
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ];
    }
}

if (! function_exists('jsonToArry')) {
    function jsonToArry($var, $key = null): array
    {
        $tmpReturn = getVarVal($var, $key);

        if (is_string($tmpReturn)) {
            $tmpReturn = json_decode($tmpReturn, true);
        } elseif (is_object($tmpReturn)) {
            $tmpReturn = (array) $tmpReturn;
        }

        return $tmpReturn;
    }
}

if (! function_exists('arryToJson')) {
    function arryToJson($var): string
    {
        return json_encode($var);
    }
}
