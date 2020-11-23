<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201013123045 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fiche_frais (id INT AUTO_INCREMENT NOT NULL, visiteur_id INT DEFAULT NULL, nb_justificatif INT DEFAULT NULL, montant_valide DOUBLE PRECISION NOT NULL, date_modif DATE DEFAULT NULL, INDEX IDX_5FC0A6A77F72333D (visiteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visiteur (id INT AUTO_INCREMENT NOT NULL, nom LONGTEXT NOT NULL, prenom LONGTEXT NOT NULL, date DATE NOT NULL, adresse LONGTEXT NOT NULL, code_postal INT NOT NULL, ville LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A77F72333D FOREIGN KEY (visiteur_id) REFERENCES visiteur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A77F72333D');
        $this->addSql('DROP TABLE fiche_frais');
        $this->addSql('DROP TABLE visiteur');
    }
}
