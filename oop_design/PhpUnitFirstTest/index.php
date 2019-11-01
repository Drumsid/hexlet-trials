<?php 

// Реализуйте тест CourseTest, проверяющий работоспособность метода getName() класса Course.

// Подсказки
// Класс Course можно найти в /src/Course.php

// my solution

namespace App\Tests;

use PHPUnit\Framework\TestCase;

// BEGIN (write your solution here)
use App\Course;

class CourseTest extends TestCase
{
    public function testGetName()
    {
        $student = new Course('Denis');
        $this->assertEquals('Denis', $student->getName());
    }
}
// END




// hexlet solution

// BEGIN
class CourseTest extends TestCase
{
    public function testGetName()
    {
        $name = 'my super course';
        $course = new \App\Course($name);
        $this->assertEquals($name, $course->getName());
    }
}
// END