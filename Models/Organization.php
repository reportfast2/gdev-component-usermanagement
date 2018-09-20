<?php

namespace Gdev\UserManagement\Models;

use Gdev\UserManagement\Components\UserManagementDependencyResolver;
use Spot\Entity;
use Spot\EntityInterface;
use Spot\MapperInterface;
use Data\Models\MVCModel;

/**
 * Class Organization
 * @package Models
 *
 * @property integer OrganizationId
 * @property string Name
 */
class Organization extends MVCModel
{

    // Database Mapping
    protected static $table = "organizations";


    public static function fields()
    {
        $fields = [
            "OrganizationId" => ['type' => 'integer', 'primary' => true, 'autoincrement' => true],
            "Name" => ['type' => 'string', 'required' => true, 'unique' => true]
        ];

        return array_merge($fields, parent::fields());
    }

    public static function relations(MapperInterface $mapper, EntityInterface $entity)
    {
        return [
            'Users' => $mapper->hasMany($entity, UserManagementDependencyResolver::getInstance()->Resolve("User"), 'UserId'),
        ];
    }
}