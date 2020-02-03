<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200203121740 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Mine CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE nom nom VARCHAR(200) NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE Nain ADD id_mine_id INT DEFAULT NULL, DROP mine_id, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE nom nom VARCHAR(200) NOT NULL, CHANGE taille taille INT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE Nain ADD CONSTRAINT FK_AD9D628A3591D786 FOREIGN KEY (id_mine_id) REFERENCES mine (id)');
        $this->addSql('CREATE INDEX IDX_AD9D628A3591D786 ON Nain (id_mine_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE mine MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE mine DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE mine CHANGE id id INT NOT NULL, CHANGE nom nom VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE nain MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE nain DROP FOREIGN KEY FK_AD9D628A3591D786');
        $this->addSql('DROP INDEX IDX_AD9D628A3591D786 ON nain');
        $this->addSql('ALTER TABLE nain DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE nain ADD mine_id INT NOT NULL, DROP id_mine_id, CHANGE id id INT NOT NULL, CHANGE nom nom VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE taille taille DOUBLE PRECISION NOT NULL');
    }
}
