<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191029103302 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE numerical (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, img VARCHAR(255) DEFAULT NULL, category VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE `numeric`');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE `numeric` (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, title VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, description VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, img VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, category VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE numerical');
    }
}
