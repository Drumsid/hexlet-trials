<?php


class Truncater
{
    const OPTIONS = [
        'separator' => '...',
        'length' => 200,
    ];

    // BEGIN (write your solution here)
    public static $tmpOptions = [
    ];

    // public $tmpProp = [];

    public function __construct($tmpOptions = [])
    {	
    	if (!empty($tmpOptions)) {
    		self::$tmpOptions = array_merge(self::$tmpOptions, $tmpOptions);
    	}
    }

    public function validateString($separator, $length, $str)
    {
	    if (strlen($str) <= $length) {
	        return $str;
	    }
	    $result = "";
	    for ($i = 0; $i < $length; $i++) {
	        $result .=$str[$i];
	    }
	    return $result.$separator;
    }

    public function truncate($validate, $queryOPtions = [])
    {

    	if (empty($queryOPtions) && empty(self::$tmpOptions)) {
    		// $this->tmpProp = self::OPTIONS;
			['separator' => $separator, 'length' => $length] = self::OPTIONS;
			return $this->validateString($separator, $length, $validate);    		
    	}
    	if (!empty($queryOPtions) && empty(self::$tmpOptions)) {
			$tmpQuery = array_merge(self::OPTIONS, $queryOPtions);
			// $this->tmpProp = $tmpQuery;
			['separator' => $separator, 'length' => $length] = $tmpQuery;
			return $this->validateString($separator, $length, $validate);	   		
    	}
    	// выше работает для первого теста
    	if (empty($queryOPtions) && !empty(self::$tmpOptions)) {
			self::$tmpOptions = array_merge(self::OPTIONS, self::$tmpOptions, $queryOPtions);
			// $this->tmpProp = $tmpQuery;
		    ['separator' => $separator, 'length' => $length] = self::$tmpOptions;
			return $this->validateString($separator, $length, $validate);	   		
    	}
    	if (!empty($queryOPtions) && !empty(self::$tmpOptions)) {
			$tmp = array_merge(self::OPTIONS, self::$tmpOptions, $queryOPtions);
			// $this->tmpProp = $tmpQuery;
		    ['separator' => $separator, 'length' => $length] = $tmp;
			return $this->validateString($separator, $length, $validate);				   		
    	}
    }

    public function tmpOptions()
    {
    	return self::$tmpOptions;
    }   

    public function tmpProp()
    {
    	return $this->tmpProp;
    }
    // END
}


// hexlet solutions

    // BEGIN
    // private $options = [];

    // public function __construct(array $options = [])
    // {
    //     $this->options = array_merge(self::OPTIONS, $options);
    // }

    // public function truncate(string $text, array $options = []): string
    // {
    //     $currentOptions = array_merge($this->options, $options);
    //     if (mb_strlen($text) <= $currentOptions['length']) {
    //         return $text;
    //     }
    //     $substr = mb_substr($text, 0, $currentOptions['length']);
    //     return "{$substr}{$currentOptions['separator']}";
    // }
    // END