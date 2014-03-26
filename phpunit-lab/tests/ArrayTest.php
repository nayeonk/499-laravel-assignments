<?php
/**
 * Created by PhpStorm.
 * User: Nayeon
 * Date: 3/25/14
 * Time: 6:51 PM
 */

require_once __DIR__. '/../classes/BookSearch.php';
class ArrayTest extends PHPUnit_Framework_TestCase {

    public $books = [
    [ 'title' => 'Introduction to HTML and CSS', 'pages' => 432 ],
    [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
    [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
    [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ],
    [ 'title' => 'PHP Object Oriented Solutions', 'pages' => 80 ],
    [ 'title' => 'PHP Design Patterns', 'pages' => 300 ],
    [ 'title' => 'Head First Java', 'pages' => 200 ]
    ];

    public function test_one() {
        // Arrange
        $search = new BookSearch($this->books);

        // Act
        $results = $search->find('javascript');

        // Assert
        $this->assertCount(2, $results);
    }

    public function test_two() {
        $search = new BookSearch($this->books);
        $results = $search->find('javascript web applications', true);
        $this->assertCount(1,$results);
    }

    public function test_three() {
        $search = new BookSearch($this->books);
        $results = $search->find('The Definitive Guide to Symfony', true);
        $this->assertTrue(true, $results);
    }

}
 