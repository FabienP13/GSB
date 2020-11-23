<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201013141956 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE etat (id INT AUTO_INCREMENT NOT NULL, libelle LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fiche_frais_etat (fiche_frais_id INT NOT NULL, etat_id INT NOT NULL, INDEX IDX_E6455FDD94F5755 (fiche_frais_id), INDEX IDX_E6455FDD5E86FF (etat_id), PRIMARY KEY(fiche_frais_id, etat_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fiche_frais_etat ADD CONSTRAINT FK_E6455FDD94F5755 FOREIGN KEY (fiche_frais_id) REFERENCES fiche_frais (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fiche_frais_etat ADD CONSTRAINT FK_E6455FDD5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche_frais_etat DROP FOREIGN KEY FK_E6455FDD5E86FF');
        $this->addSql('DROP TABLE etat');
        $this->addSql('DROP TABLE fiche_frais_etat');
    }
}
