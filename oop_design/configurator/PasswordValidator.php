<?php


class PasswordValidator
{
    // BEGIN (write your solution here)
    private $options = [
            'minLength' => 8,
            'containNumbers' => false        
    ];
    private $minLength;
    private $containNumbers;

    public function __construct($options = ['minLength' => 8, 'containNumbers' => false ])
    {
        foreach ($options as $key => $val) {
            if (array_key_exists($key, $options)) {
                $this->options[$key] = $val;
            }
        }
    }
    public function getContainNumbers()
    {
        return $this->options['containNumbers'];
    }

    // public function getHasNumber($subject)
    // {
    //     return $this->hasNumber($subject);
    // }

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