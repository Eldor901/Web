<?php

function ErrorIsNumeric()
{
    print "One of argumetns is not a number check it please".PHP_EOL;
    exit (1);
}

function ErrorDivision()
{
    print "Division to zero number".PHP_EOL;
}


function ErrorParamOperation()
{
    print "Operation parametr is incorrect: operation&(add, mul, sub, div)".PHP_EOL;
}

function Mult($arg1, $arg2)
{
    return ($arg1 * $arg2);
}

function Sum($arg1, $arg2)
{
    return  ($arg1 + $arg2);
}

function Sub($arg1 , $arg2)
{
    return  ($arg1 - $arg2);
}

function Div($arg1, $arg2)
{
    if ($arg2 == 0)
    {
        return ErrorDivision();
    }
    else
    {
        return $arg1 / $arg2;
    }
}

function CheckBothNumberForNumeric($arg1, $arg2)
{
    if((!is_numeric($arg1)) || (!is_numeric($arg2)))
    {
        ErrorIsNumeric();
    }
}

function GetParametrInt($arg, $Value='')
{
    if (isset($_GET[$Value]) && is_numeric($_GET[$Value]))
    {
        $arg =  intval($_GET[$Value]);

    }
    return $arg;
}

function GetParameterString($str, $Value='')
{
    if (isset($_GET[$Value]) && is_string($_GET[$Value]))
    {
        $str =  strval($_GET[$Value]);
    }
    return $str;
}

function MathOperation($arg1, $arg2, $operation)
{
    $result = 0;

    if ($operation == 'add')
    {
        $result = Sum($arg1 , $arg2);
    }
    else if($operation == 'mul')
    {
        $result =  Mult($arg1, $arg2);
    }else if($operation == 'sub')
    {
        $result = Sub($arg1, $arg2);
    }
    else if ($operation == 'div')
    {
        $result = Div($arg1, $arg2);
    }else
    {
        $result = ErrorParamOperation();
    }

    return $result;
}

$arg1 = "";
$arg2 = "";
$operation = "";


$num1 = 0;
$num2 = 0;



$num1 = GetParametrInt($arg1, 'arg1');
$num2 = GetParametrInt($arg2, 'arg2');
$operation = GetParameterString($operation, 'operation');


CheckBothNumberForNumeric($num1, $num2);

if(count($_GET) != 3)
{
  print "Mistake in paramets it should be: arg1=num&arg2=num&operation=oper ";
  exit(1);
}

print MathOperation($num1, $num2, $operation);


?>