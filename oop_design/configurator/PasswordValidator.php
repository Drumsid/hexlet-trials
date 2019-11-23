<?php

class PasswordValidator
{
    // BEGIN (write your solution here)
    public $options = [
        'minLength' => 8,
        'containNumbers' => false 
    ];

    public function __construct($options = [])
    {
        $this->options = array_merge($this->options, $options);
    }

    public function getContainNumbers()
    {
        return $this->options['containNumbers'];
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


// ==============    hexlet solutions   ========================

class PasswordValidator2
{
    // BEGIN
    const OPTIONS = [
        'minLength' => 8,
        'containNumbers' => false
    ];

    private $options = [];

    public function __construct(array $options = [])
    {
        $this->options = array_merge(self::OPTIONS, $options);
    }

    public function validate(string $password): array
    {
        $errors = [];
        if (mb_strlen($password) < $this->options['minLength']) {
            $errors['minLength'] = 'too small';
        }

        if ($this->options['containNumbers']) {
            if (!$this->hasNumber($password)) {
                $errors['containNumbers'] = 'should contain at least one number';
            }
        }

        return $errors;
    }
    // END
}