<?php
use SebastianBergmann\Type\VoidType;
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 8;

    public function setUp($nb): Poneys
    {
        $poneys = new Poneys();
        $poneys->setCount($nb);
        return $poneys;
    }

    public function setCount($nb): void
    {
        $this->count = $nb;
    }
    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if($this->count - $number < 0)
        {
            throw new InvalidArgumentException();
        }
        else
        {
            $this->count -= $number;
        }
        
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }
    /**
     * Ajoute un poney au champ
     * 
     * @param int $number Nombre de poneys à ajouter
     * 
     * @return void
     */
    public function addPoneyToField(int $number): void
    {
        $this->count += $number;
    }

    public function isFull(): bool
    {
        return $this->count >= 15;
    }
}
?>
