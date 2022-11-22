<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    /**
     * Undocumented function
     *@dataProvider provideRemovePoneyData
     * @return void
     */
    public function testRemovePoneyFromField($a, $b)
    {
        // Setup
        $poneys = new Poneys();

        // Action
        $poneys->removePoneyFromField($a);

        // Assert
        $this->assertEquals($b, $poneys->getCount());
    }

    public function provideRemovePoneyData()
    {
        return [
            [3,5],
            [8,0],
            [6,2],
        ];
    }
    /**
     * @dataProvider provideAddPoneyData
     */
    public function testAddPoneyFromField($a, $b)
    {
        $poneys = new Poneys();

        $poneys->addPoneyToField($a);

        $this->assertEquals($b, $poneys->getCount());
    }

    public function provideAddPoneyData()
    {
        return [
            [3, 11],
            [1, 9],
            [10, 18],
        ];
    }

    public function testExceptionRemovePoneyFromField()
    {
        $poneys = new Poneys();

        $this->expectException(InvalidArgumentException::class);

        $poneys->removePoneyFromField(10);
    }

    public function testGetName()
    {
        $stub = $this->createMock(Poneys::class);

        $stub->method('getNames')
            ->willReturn(['tata', 'titi', 'toto']);

        $this->assertSame(['tata', 'titi', 'toto'], $stub->getNames());
    }

    public function testisFull()
    {
        $poneys = new Poneys();

        $this->assertNotTrue($poneys->isFull());

        $poneys->addPoneyToField(7);

        $this->assertTrue($poneys->isFull());
    }
}
?>
