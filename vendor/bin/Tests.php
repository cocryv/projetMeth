<?php 

include '../../code/traitement.php';

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testApplicationTva()
    {
        $produit = 10;
        $this->assertSame((float)12, application_tva($produit));
    }
}

?>