<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_odm.mongodb.validator.unique' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ConstraintValidator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\Validator\\Constraints\\UniqueEntityValidator.php';

return $this->privates['doctrine_odm.mongodb.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine_mongodb'] ?? $this->getDoctrineMongodbService()));
