<?php

namespace App\Controller\Admin;

use App\Entity\MobileCompany;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MobileCompanyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MobileCompany::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
