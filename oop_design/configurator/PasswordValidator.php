<?php

class PasswordValidator
{
    // BEGIN (write your solution here)
<<<<<<< HEAD
    // public static $options = [
    //         'minLength' => 8,
    //         'containNumbers' => false        
    // ];
    public $options = [
        'minLength' => 8,
        'containNumbers' => false 
=======
    public static $options = [
            'minLength' => 8,
            'containNumbers' => false        
>>>>>>> c6e667ca40160fc35cfe499de4ebab31c4e93d47
    ];

    public function __construct($options = [])
    {
<<<<<<< HEAD
        // self::$options = array_merge(self::$options, $options);
        $this->options = array_merge($this->options, $options);
=======
        self::$options = array_merge(self::$options, $options);
>>>>>>> c6e667ca40160fc35cfe499de4ebab31c4e93d47
    }

    public function getContainNumbers()
    {
<<<<<<< HEAD
        // return self::$options['containNumbers'];
        return $this->options['containNumbers'];
=======
        return self::$options['containNumbers'];
>>>>>>> c6e667ca40160fc35cfe499de4ebab31c4e93d47
    }

    public function getOptions()
    {
<<<<<<< HEAD
        // return self::$options;
         return $this->options;
    }

    public function gethasNumber($subject)
    {
        return $this->hasNumber($subject);
=======
        return self::$options;
>>>>>>> c6e667ca40160fc35cfe499de4ebab31c4e93d47
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

<<<<<<< HEAD

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
        
=======
// class PasswordValidator
// {
//     // BEGIN (write your solution here)
//     private $options = [
//         'minLength' => 8,
//         'containNumbers' => 'false'
//          ];

//     public function __construct($options = [])
//     {
//         $this->options = array_merge($this->options, $options);
>>>>>>> c6e667ca40160fc35cfe499de4ebab31c4e93d47
//     }

//     public function getContainNumbers()
//     {
<<<<<<< HEAD
//         return self::$containNumbers;
=======
//         return $this->options['containNumbers'];
>>>>>>> c6e667ca40160fc35cfe499de4ebab31c4e93d47
//     }

//     public function getOptions()
//     {
<<<<<<< HEAD
//         return self::$defaultOptions;
=======
//         return $this->options;
>>>>>>> c6e667ca40160fc35cfe499de4ebab31c4e93d47
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
<<<<<<< HEAD
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
=======

//     private function countLenght($subject)
//     {
//     	if (strlen($subject) < 8) {
//     		return false;
//     	}
//     	return true;
>>>>>>> c6e667ca40160fc35cfe499de4ebab31c4e93d47
//     }
//     // END

//     private function hasNumber($subject)
//     {
//         return strpbrk($subject, '1234567890') !== false;
//     }
<<<<<<< HEAD
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
=======
// }
>>>>>>> c6e667ca40160fc35cfe499de4ebab31c4e93d47
