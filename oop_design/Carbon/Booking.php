<?php

// Booking — процесс бронирования чего-либо. В интернете существует множество сайтов, предлагающих бронирование машин, квартир, домов, 
// самолётов и многого другого. Несмотря на то, что такие сайты предлагают разные услуги, букинг везде работает почти идентично. 
// Выбираются нужные даты и, если они свободны, производится бронирование.

// Реализуйте класс Booking, который позволяет бронировать номер отеля на определённые даты. Единственный интерфейс класса — функция book, 
// которая принимает на вход две даты в текстовом формате. Если бронирование возможно, то метод возвращает true и выполняет 
// бронирование (даты записываются во внутреннее состояние объекта).

// Подсказки
// По обычаям гостиничного сервиса время заселения в номер — после полудня первого дня, а время выселения — до полудня последнего дня. 
// Конкретные часы варьируются в разных отелях. Но в данной практике это не важно, главное понять принцип, по которому указываются даты:


// $booking = new Booking();

// // забронировать номер на два дня
// $booking->book('10-11-2008', '12-11-2008');

// // бронь невозможна, 11-го числа номер будет занят
// $booking->book('11-11-2008', '15-11-2008');

// // бронь возможна, потому что 12-го числа номер освободится
// $booking->book('12-11-2008', '13-11-2008');

// // бронь невозможна, съём, сроком менее одного дня, обычно не практикуется
// $booking->book('17-11-2008', '17-11-2008');

// // бронь возможна, съём номера на один день
// $booking->book('17-11-2008', '18-11-2008');
// Пример

// $booking = new Booking();
// $booking->book('11-11-2008', '13-11-2008'); // true
// $booking->book('12-11-2008', '12-11-2008'); // false
// $booking->book('10-11-2008', '12-11-2008'); // false
// $booking->book('12-11-2008', '14-11-2008'); // false
// $booking->book('10-11-2008', '11-11-2008'); // true
// $booking->book('13-11-2008', '14-11-2008'); // true

require_once '../../vendor/autoload.php';

use Carbon\Carbon;


class Booking
{
	static $date = [];

	public function __construct()
	{

	}

	public function book($newIn, $newOut)
	{
		$newIn = Carbon::create($newIn)->hour(12)->minute(00)->second(00)->toDateTimeString();
		$newOut = Carbon::create($newOut)->hour(12)->minute(00)->second(00)->toDateTimeString();

		if ($newIn > $newOut || $newIn == $newOut) {
			return false;
		}


		foreach (self::$date as ['dayIn' => $dayIn, 'dayOut' => $dayOut]) {
			if ($newIn >= $dayIn && $newIn < $dayOut) {
				return false;
			}
			if ($newIn < $dayIn && $newOut > $dayIn) {
				return false;
			}
		}

		$arr = [];
		$arr['dayIn'] = $newIn;
		$arr['dayOut'] = $newOut;
		self::$date[] = $arr;

		return true;
	}

	public function getAllDate()
	{
		return self::$date;
	}

	public function resetDate()
	{
		self::$date = [];
	}
}



//  ====================  hexlet solution  ==============================

// BEGIN
class Booking2
{
    private $dates = [];

    public function book($begin, $end)
    {
        $carbonNewBegin = new Carbon($begin);
        $carbonNewEnd = new Carbon($end);
        if ($this->canBook($carbonNewBegin, $carbonNewEnd)) {
            $this->dates[] = [$carbonNewBegin, $carbonNewEnd];
            return true;
        }

        return false;
    }

    public function canBook($begin, $end)
    {
        if ($begin >= $end) {
            return false;
        }

        foreach ($this->dates as [$bookedBegin, $bookedEnd]) {
            $isStartedAfter = $begin < $bookedEnd;
            $isEndedBefore = $end > $bookedBegin;
            if ($isStartedAfter && $isEndedBefore) {
                return false;
            }
        }
        return true;
    }
}
// END