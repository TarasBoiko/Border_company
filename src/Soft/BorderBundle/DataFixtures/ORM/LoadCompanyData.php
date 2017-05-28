<?php

# src/Soft/BorderBundle/DataFixtures/ORM/LoadCompanyData

namespace Soft\BorderBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Soft\BorderBundle\Entity\Company;

class LoadCompanyData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $CompanyFullTime = new Company();
        $CompanyFullTime->setCategory($em->merge($this->getReference('category-programming')));
        $CompanyFullTime->setCompany('sgsddsg');
        $CompanyFullTime->setType('full-time');
        $CompanyFullTime->setLogo('company_logo.png');
        $CompanyFullTime->setPhone('312312');
        $CompanyFullTime->setCreate(new \DateTime(`+30 days`));
        $CompanyFullTime->setUrl('http://example.com/');
        $CompanyFullTime->setLocation(`adsa`);
        $CompanyFullTime->setDescription('asdasdasd');
        $CompanyFullTime->setHowToApply(' resume@example.com');
        $CompanyFullTime->setIsPublic(true);
        $CompanyFullTime->setIsActivated(true);
        $CompanyFullTime->setToken('job_example_com');
        $CompanyFullTime->setEmail('resume@example.com');
        $CompanyFullTime->setExpiresAt(new \DateTime('+30 days'));

        $CompanyFullTime = new Company();
        $CompanyFullTime->setCategory($em->merge($this->getReference('category-design')));
        $CompanyFullTime->setCompany('sgdfsd');
        $CompanyFullTime->setType('full-time');
        $CompanyFullTime->setPhone('12312');
        $CompanyFullTime->setCreate(new \DateTime(`+30 days`));
        $CompanyFullTime->setLogo('design_company_logo.gif');
        $CompanyFullTime->setUrl('http://design.example.com/');
        $CompanyFullTime->setLocation(`sgddsg`);
        $CompanyFullTime->setDescription(`sdgsdfgds`);
        $CompanyFullTime->setHowToApply('sdgfsdfg designer_resume@example.com');
        $CompanyFullTime->setIsPublic(true);
        $CompanyFullTime->setIsActivated(true);
        $CompanyFullTime->setToken('designer_resume@example.com');
        $CompanyFullTime->setEmail('resume@example.com');
        $CompanyFullTime->setExpiresAt(new \DateTime('+30 days'));
        $em->persist($CompanyFullTime);
        $em->persist($CompanyFullTime);
        $em->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}