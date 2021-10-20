<?php

/**
 * Function to format the CNPJ and CPF
 * @param $number
 * @return string
 */
function formatDocument($number):string {
    $document = preg_replace("/[^0-9]/", "", $number );
    $type = NULL;

    if(strlen($document) == 11){
        $type = "CPF";
    }elseif(strlen($document) == 14){
        $type = "CNPJ";
    }elseif (strlen($document) == 9){
        $type = "RG";
    }

    switch ($type){
        default:
            $formatNumber = "Não foi possível definir o tipo de dado";
        break;

        case "CPF":
            $firstBlock = substr($document, 0, 3);
            $secondBlock = substr($document, 3, 3);
            $thirdBlock = substr($document, 6, 3);
            $verifyingDigit = substr($document, -2);
            $formattedDocument = $firstBlock . "." . $secondBlock . "." . $thirdBlock . "-" . $verifyingDigit;
        break;

        case "CNPJ":
            $firstBlock = substr($document, 0, 2);
            $secondBlock = substr($document, 2, 3);
            $thirdBlock = substr($document, 5, 3);
            $fourthBlock = substr($document, 8, 4);
            $verifyingDigit = substr($document, -2);
            $formattedDocument = $firstBlock . "." . $secondBlock . "." . $thirdBlock . "/" . $fourthBlock . "-" . $verifyingDigit;
        break;

        case "RG":
            $firstBlock = substr($document, 0, 2);
            $secondBlock = substr($document, 2, 3);
            $thirdBlock = substr($document, 5, 3);
            $verifyingDigit = substr($document, -2);
            $formattedDocument = $firstBlock . "." . $secondBlock . "." . $thirdBlock . "-" . $verifyingDigit;
        break;
    }

    return $formattedDocument;
}