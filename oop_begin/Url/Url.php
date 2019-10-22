<?php

// Реализуйте класс Url который описывает переданный в конструктор HTTP адрес и позволяет извлекать из него части:


// $url = new Url('http://yandex.ru?key=value&key2=value2');
// $url->getScheme(); // http
// $url->getHost(); // yandex.ru
// $url->getQueryParams();
// // [
// //     'key' => 'value',
// //     'key2' => 'value2'
// // ];
// $url->getQueryParam('key'); // value
// // второй параметр - значение по умолчанию
// $url->getQueryParam('key2', 'lala'); // value2
// $url->getQueryParam('new', 'ehu'); // ehu
// Подсказка:

// То что нужно реализовать описано в интерфейсе UrlInterface
// Для разбора адреса воспользуйтесь функцией parse_url
// Для разбора параметров запроса воспользуйтесь функцией parse_str

class Url
{
	private $url;

	public function __construct($url)
	{
	  $parseUrl = parse_url($url);
	  parse_str($parseUrl['query'], $query);
	  $parseUrl['query'] = $query;
	  $this->url = $parseUrl;
	}

	public function getScheme()
	{
		return $this->url['scheme'];
	}

	public function getQueryParams()
	{
		return $this->url['query'];
	}

	public function getHost()
	{
		return $this->url['host'];
	}

	public function getQueryParam($key, $defaultValue = null)
	{
		if(array_key_exists($key, $this->getQueryParams())){
			foreach ($this->getQueryParams() as $k => $v) {
				if($k == $key) {
					return $v;
				}
			} 
		} else {
			return $defaultValue;
		}
	}
}

//=================================hexlet solution ==================

    // BEGIN
    private $scheme;
    private $host;
    private $queryParams;

    public function __construct($url)
    {
        $data = parse_url($url);

        $this->scheme = $data['scheme'];
        $this->host = $data['host'];
        $this->queryParams = $this->parseQuery($data['query']);
    }

    public function getScheme()
    {
        return $this->scheme;
    }

    public function getQueryParams()
    {
        return $this->queryParams;
    }

    public function getQueryParam($key, $defaultValue = null)
    {
        return $this->queryParams[$key] ?? $defaultValue;
    }

    public function getHost()
    {
        return $this->host;
    }

    private function parseQuery($query)
    {
        parse_str($query, $params);
        return $params;
    }
    // END