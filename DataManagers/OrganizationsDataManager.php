<?php

namespace Gdev\UserManagement\DataManagers;

use Gdev\UserManagement\Repositories\OrganizationsRepository;
use Gdev\UserManagement\Repositories\OrganizationTranslationsRepository;

class OrganizationsDataManager
{

    public static function GetOrganizations()
    {
        return OrganizationsRepository::getInstance()->all();
    }

    public static function GetOrganizationById($organizationId)
    {
        return OrganizationsRepository::getInstance()->get($organizationId);
    }

    public static function SaveOrganization($model)
    {
        return OrganizationsRepository::getInstance()->save($model);
    }

    public static function DeleteOrganization($organizationId)
    {
        return OrganizationsRepository::getInstance()->delete(['OrganizationId' => $organizationId]);
    }

    public static function GetOrganizationsCount()
    {
        return OrganizationsRepository::getInstance()->all()->count();
    }

    public static function SaveOrganizationTranslation($translation){
        return OrganizationTranslationsRepository::getInstance()->save($translation);
    }
}