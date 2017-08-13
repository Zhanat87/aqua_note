<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170813122557 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user CHANGE avatar_uri avatar_uri VARCHAR(255) DEFAULT NULL, CHANGE is_scientist is_scientist TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE genus_scientist CHANGE years_studied years_studied INT NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE genus_scientist CHANGE years_studied years_studied VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE user CHANGE is_scientist is_scientist TINYINT(1) DEFAULT NULL, CHANGE avatar_uri avatar_uri VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
    }
}
