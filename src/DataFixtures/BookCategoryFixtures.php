<?php

namespace App\DataFixtures;

use App\Entity\BookCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookCategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $manager->persist((new BookCategory())->setTitle('Test')->setSlug('test'));
        $manager->persist((new BookCategory())->setTitle('Test1')->setSlug('test1'));
        $manager->persist((new BookCategory())->setTitle('Test2')->setSlug('test2'));

        $manager->flush();
    }
}
