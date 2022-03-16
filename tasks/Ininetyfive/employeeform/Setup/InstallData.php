<?php

namespace Ininetyfive\employeeform\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('Ininetyfive_table');
        //Check for the existence of the table
        if ($setup->getConnection()->isTableExists($tableName) == true) {
            $data = [
                [
                    'name' => 'Ram',
                    'age' => '18',
                    'designation' => 'software developer',

                ],
                [
                    'name' => 'sham',
                    'age' => '20',
                    'designation' => 'trainee engineer',

                ],
                [
                    'name' => 'kumar',
                    'age' => '24',
                    'designation' =>'Devops engineer',

                ],
            ];
            foreach ($data as $item) {
                //Insert data
                $setup->getConnection()->insert($tableName, $item);
            }
        }
        $setup->endSetup();
    }
}

