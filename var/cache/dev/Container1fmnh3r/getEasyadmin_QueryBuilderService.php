<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'easyadmin.query_builder' shared service.

return $this->services['easyadmin.query_builder'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\QueryBuilder(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
