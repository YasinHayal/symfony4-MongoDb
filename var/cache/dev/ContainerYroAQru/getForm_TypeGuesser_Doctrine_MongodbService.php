<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_guesser.doctrine.mongodb' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeGuesserInterface.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\mongodb-odm-bundle\\Form\\DoctrineMongoDBTypeGuesser.php';

return $this->privates['form.type_guesser.doctrine.mongodb'] = new \Doctrine\Bundle\MongoDBBundle\Form\DoctrineMongoDBTypeGuesser(($this->services['doctrine_mongodb'] ?? $this->getDoctrineMongodbService()));
