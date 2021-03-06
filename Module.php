<?php
namespace XMLImport;


use Omeka\Entity\Job;
use Omeka\Module\AbstractModule;
use Zend\ServiceManager\ServiceLocatorInterface;

class Module extends AbstractModule
{
    
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /*public function install(ServiceLocatorInterface $serviceLocator)
    {
        $connection = $serviceLocator->get('Omeka\Connection');
        $sql = "
            CREATE TABLE XMLImport_import (id INT AUTO_INCREMENT NOT NULL, job_id INT NOT NULL, undo_job_id INT DEFAULT NULL, added_count INT NOT NULL, comment VARCHAR(255) DEFAULT NULL, resource_type VARCHAR(255) NOT NULL, has_err TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_17B50881BE04EA9 (job_id), UNIQUE INDEX UNIQ_17B508814C276F75 (undo_job_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB;
            CREATE TABLE XMLImport_entity (id INT AUTO_INCREMENT NOT NULL, job_id INT NOT NULL, entity_id INT NOT NULL, resource_type VARCHAR(255) NOT NULL, INDEX IDX_84D382F4BE04EA9 (job_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB;
            ALTER TABLE XMLImport_import ADD CONSTRAINT FK_17B50881BE04EA9 FOREIGN KEY (job_id) REFERENCES job (id);
            ALTER TABLE XMLImport_import ADD CONSTRAINT FK_17B508814C276F75 FOREIGN KEY (undo_job_id) REFERENCES job (id);
            ALTER TABLE XMLImport Omeka S_entity ADD CONSTRAINT FK_84D382F4BE04EA9 FOREIGN KEY (job_id) REFERENCES job (id);
        ";
        $connection->exec($sql);
    }

    public function uninstall(ServiceLocatorInterface $serviceLocator)
    {
        $connection = $serviceLocator->get('Omeka\Connection');
        $connection->exec("ALTER TABLE XMLImport_entity DROP FOREIGN KEY FK_84D382F4BE04EA9;");
        $connection->exec("ALTER TABLE XMLImport_import DROP FOREIGN KEY FK_17B50881BE04EA9;");
        $connection->exec("ALTER TABLE XMLImport_import DROP FOREIGN KEY FK_17B508814C276F75;");
        $connection->exec("DROP TABLE XMLImport_entity;");
        $connection->exec("DROP TABLE XMLImport_import;");
    }*/
}
