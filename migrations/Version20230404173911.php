<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230404173911 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE galaxy (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE star (id INT AUTO_INCREMENT NOT NULL, galaxy_id INT NOT NULL, name VARCHAR(255) NOT NULL, radius DOUBLE PRECISION NOT NULL, temperature DOUBLE PRECISION NOT NULL, INDEX IDX_C9DB5A14B61FAB2 (galaxy_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE star ADD CONSTRAINT FK_C9DB5A14B61FAB2 FOREIGN KEY (galaxy_id) REFERENCES galaxy (id)');
        $this->addSql('CREATE TABLE atom2_star (atom_id INT NOT NULL, star_id INT NOT NULL, UNIQUE INDEX UNIQ_8824716770B3767B (star_id, atom_id), PRIMARY KEY(atom_id, star_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE atom2_star ADD CONSTRAINT FK_8824716770B3767B FOREIGN KEY (star_id) REFERENCES star (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE star DROP FOREIGN KEY FK_C9DB5A14B61FAB2');
        $this->addSql('ALTER TABLE atom2_star DROP FOREIGN KEY FK_8824716770B3767B');
        $this->addSql('DROP TABLE atom2_star');
        $this->addSql('DROP TABLE galaxy');
        $this->addSql('DROP TABLE star');
    }
}
