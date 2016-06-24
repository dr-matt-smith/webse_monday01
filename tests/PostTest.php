<?php
namespace ItbTests;

use Itb\Post;

class PostTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateNewPost()
    {
        // Arrange

        // Act
        $p = new Post();

        // Assert
        $this->assertNotNull($p);
    }

    public function testDefaultIdIsMinusOne()
    {
        // Arrange
        $p = new Post();
        $expectedResult = -1;

        // Act
        $result = $p->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetIdReturnsValueAfterSetId()
    {
        // Arrange
        $p = new Post();
        $p->setId(77);
        $expectedResult = 77;

        // Act
        $result = $p->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

}