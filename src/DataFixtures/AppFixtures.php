<?php 
namespace App\DataFixtures;
use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $luxeCar = new Car();
        $luxeCar->setImage("images/pexels-jae-park-395442.jpg");
        $luxeCar->setMarque("Ferrari");
        $luxeCar->setModele("Roma");
        $luxeCar->setAnnee("2020");
        $luxeCar->setPrix(202000);
        $manager->persist($luxeCar);

        $luxeCar2 = new Car();
        $luxeCar2->setImage("images/alain-w77TcvuhtWE-unsplash.jpg");
        $luxeCar2->setMarque("Renault");
        $luxeCar2->setModele("Twingo");
        $luxeCar2->setAnnee("2006");
        $luxeCar2->setPrix(202000);
        $manager->persist($luxeCar2);

        $luxeCar3 = new Car();
        $luxeCar3->setImage("images/martin-katler-Hl5WYiziZ3g-unsplash.jpg");
        $luxeCar3->setMarque("Audi");
        $luxeCar3->setModele("5000");
        $luxeCar3->setAnnee("2009");
        $luxeCar3->setPrix(209000);
        $manager->persist($luxeCar3);

        



        $manager->flush();
    }
}
?>