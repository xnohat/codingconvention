<?php

ini_set('error_reporting', E_ALL);

namespace Vendor\Package;

/*
|--------------------------------------------------------------------------
| DOCUMENT LEVEL COMMENT BLOCK
|--------------------------------------------------------------------------
|
| This PHP coding conventions follow PSR-1 and PSR-2
| http://www.php-fig.org/psr/psr-1/
| http://www.php-fig.org/psr/psr-2/
|
| Notes:
|
| File encoding Unicode UTF-8 without BOM
|
| Database charset utf8mb4_unicode_ci
|
| Standard datetime is Unix Timestamp
|
 */

include "file.php";

use FooInterface;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class FooBar extends Bar implements FooInterface
{

    const VERSION = '1.0';
    const DATE_APPROVED = '2017-07-17';

    /**
     * Explain what data this "class level" variable contain.
     *
     * @var bool
     */
    protected $exampleClassLevelVariable = false;

    /**
     * Explain method doing something.
     *
     * @param  string  $firstArg
     * @param  mixed|null  $secondArg
     * @return bool
     */
    public function sampleMethod($firstArg, $secondArg = null)
    {        
        $internalVariable = $firstArg;
        $second_internal_variable_veryLongVariable = $secondArg;

        if ($a === $b) { //if a equal b, do something explain here
            bar();
        } elseif ($a > $b) { //if ...
            $foo->bar($arg1);
            throw new \Exception('Error Message Here. If need show variable for debug: '.$arg1);
        } else {
            BazClass::bar($arg2, $arg3);
            return false;
        }

        return true;        
    }

    /**
     * Explain method doing something.
     *
     * @return void
     */
    final public static function bar()
    {
        // method body
        switch ($expr) {
            case 0:
                echo 'First case, with a break';
                break;
            case 1:
                echo 'Second case, which falls through';
                // no break
            case 2:
            case 3:
            case 4:
                echo 'Third case, return instead of break';
                return;
            default:
                echo 'Default case';
                break;
        }

        while ($expr) {
            // structure body
        }

        do {
            // structure body;
        } while ($expr);

        for ($i = 0; $i < 10; $i++) {
            // for body
        }

        foreach ($iterable as $key => $value) {
            // foreach body
        }

        try {
            // try body
            $this->sampleMethod();
        } catch (FirstExceptionType $e) {
            // catch body
        } catch (OtherExceptionType $e) {
            // catch body
        }

    }

    /**
     * Explain closure method doing something.
     *
     * @return string
     */
    $closureWithArgsAndVars = function ($arg1, $arg2) use ($var1, $var2) {
        // body
        return "string_".$var1;
    };

    //PHP Built in method call
    phpinfo();
    
    //Self referrence method call
    $this->sampleMethod();
    self::bar();

    //Cross class method call for general method
    $foo = new FooBar;
    $foobar->sampleMethod($arg1, $arg2);

    //Cross class method call for Static method
    FooBar::bar();

}