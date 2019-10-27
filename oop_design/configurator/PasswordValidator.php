<?php


class PasswordValidator
{
    // BEGIN (write your solution here)
    public static $options = [
            'minLength' => 8,
            'containNumbers' => false        
    ];

    public function __construct($options = [])
    {
        self::$options = array_merge(self::$options, $options);
    }

    public function getContainNumbers()
    {
        return self::$options['containNumbers'];
    }

    public function getOptions()
    {
        return self::$options;
    }

    public function validate($subject)
    {
        $result = [];
        if (!$this->countLenght($subject)) {
            $result['minLength'] = 'too small';
        }
        if ($this->hasNumber($subject) !== $this->getContainNumbers()) {
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
//     }

//     public function getContainNumbers()
//     {
//         return $this->options['containNumbers'];
//     }

//     public function getOptions()
//     {
//         return $this->options;
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
//     	if (strlen($subject) < 8) {
//     		return false;
//     	}
//     	return true;
//     }
//     // END

//     private function hasNumber($subject)
//     {
//         return strpbrk($subject, '1234567890') !== false;
//     }
// }