<?php

class PasswordValidator
{
    // BEGIN (write your solution here)
    // public static $options = [
    //         'minLength' => 8,
    //         'containNumbers' => false        
    // ];
    public $options = [
        'minLength' => 8,
        'containNumbers' => false 
    ];

    public function __construct($options = [])
    {
        // self::$options = array_merge(self::$options, $options);
        $this->options = array_merge($this->options, $options);
    }

    public function getContainNumbers()
    {
        // return self::$options['containNumbers'];
        return $this->options['containNumbers'];
    }

    public function getOptions()
    {
        // return self::$options;
         return $this->options;
    }

    public function gethasNumber($subject)
    {
        return $this->hasNumber($subject);
    }

    public function validate($subject)
    {
        $result = [];
        if (!$this->countLenght($subject)) {
            $result['minLength'] = 'too small';
        }
        if ($this->getContainNumbers() && !$this->hasNumber($subject)) { 
            $result['containNumbers'] = 'should contain at least one number';
        }
        return $result;
    }
    private function countLenght($subject)
    {
        if (strlen($subject) < 8) {
            return false;
        }
        return true;
    }
    // END

    private function hasNumber($subject)
    {
        return strpbrk($subject, '1234567890') !== false;
    }
}


//================================================================================================================
// class PasswordValidator  не рабочий вариант
// {
//     // BEGIN (write your solution here)
//     public static $containNumbers;

//     public static $defaultOptions = [
//             'minLength' => 8,
//             'containNumbers' => false        
//     ];

//     public function __construct($options = [])
//     {
//         if(array_key_exists('containNumbers', $options)) {
//             self::$containNumbers = $options['containNumbers'];
//         }
//         // self::$options = array_merge(self::$options, $options);
        
//     }

//     public function getContainNumbers()
//     {
//         return self::$containNumbers;
//     }

//     public function getOptions()
//     {
//         return self::$defaultOptions;
//     }

//     public function validate($subject)
//     {
//         $result = [];
//         if (!$this->countLenght($subject)) {
//             $result['minLength'] = 'too small';
//         }
//         if ($this->hasNumber($subject) !== $this->getContainNumbers()) {
//             $result['containNumbers'] = 'should contain at least one number';
//         }
//         return $result;
//     }
//     private function countLenght($subject)
//     {
//         if (strlen($subject) < 8) {
//             return false;
//         }
//         return true;
//     }
//     // END
//     private function hasNumber($subject)
//     {
//         return strpbrk($subject, '1234567890') !== false;
//     }
// }

//=======================================================================================================================================
// class PasswordValidator  тоже не рабочий вариант, это последний вариант с хекслета мой, но он не работает на последнем тесте валится
// {
//     // BEGIN (write your solution here)
//     public static $options = [
//             'minLength' => 8,
//             'containNumbers' => false        
//     ];

//     public function __construct($options = [])
//     {
//         self::$options = array_merge(self::$options, $options);
//     }

//     public function getContainNumbers()
//     {
//         return self::$options['containNumbers'];
//     }

//     public function getOptions()
//     {
//         return self::$options;
//     }

//     public function validate($subject)
//     {
//         $result = [];
//         if (!$this->countLenght($subject)) {
//             $result['minLength'] = 'too small';
//         }
//         if ($this->hasNumber($subject) !== $this->getContainNumbers()) {
//             $result['containNumbers'] = 'should contain at least one number';
//         }
//         return $result;
//     }
//     private function countLenght($subject)
//     {
//         if (strlen($subject) < 8) {
//             return false;
//         }
//         return true;
//     }
//     // END

//     private function hasNumber($subject)
//     {
//         return strpbrk($subject, '1234567890') !== false;
//     }
// }


//===================================================================
// hexlet solution
    // BEGIN
    // const OPTIONS = [
    //     'minLength' => 8,
    //     'containNumbers' => false
    // ];

    // private $options = [];

    // public function __construct(array $options = [])
    // {
    //     $this->options = array_merge(self::OPTIONS, $options);
    // }

    // public function validate(string $password): array
    // {
    //     $errors = [];
    //     if (mb_strlen($password) < $this->options['minLength']) {
    //         $errors['minLength'] = 'too small';
    //     }

    //     if ($this->options['containNumbers']) {
    //         if (!$this->hasNumber($password)) {
    //             $errors['containNumbers'] = 'should contain at least one number';
    //         }
    //     }

    //     return $errors;
    // }
    // END