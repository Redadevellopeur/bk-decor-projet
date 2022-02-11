<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220207095812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, city VARCHAR(255) NOT NULL, city_code INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, update_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', slug VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE devis (id INT AUTO_INCREMENT NOT NULL, type_date_id INT DEFAULT NULL, user_id INT DEFAULT NULL, type_home_id INT DEFAULT NULL, nature VARCHAR(255) NOT NULL, create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', description LONGTEXT DEFAULT NULL, price VARCHAR(255) NOT NULL, INDEX IDX_8B27C52B90B6599E (type_date_id), INDEX IDX_8B27C52BA76ED395 (user_id), INDEX IDX_8B27C52BECA769 (type_home_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE devis_category (devis_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_6403EA8541DEFADA (devis_id), INDEX IDX_6403EA8512469DE2 (category_id), PRIMARY KEY(devis_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, devis_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', type VARCHAR(255) DEFAULT NULL, INDEX IDX_D8698A76A76ED395 (user_id), INDEX IDX_D8698A7641DEFADA (devis_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE home_status (id INT AUTO_INCREMENT NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, subjet LONGTEXT NOT NULL, create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_B6BD307FA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_coating (id INT AUTO_INCREMENT NOT NULL, type_work_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, update_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', slug VARCHAR(255) DEFAULT NULL, INDEX IDX_D910703793153C2E (type_work_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_date (id INT AUTO_INCREMENT NOT NULL, event_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_home (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, address_id INT DEFAULT NULL, home_status_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, number_rooms INT NOT NULL, type_rooms VARCHAR(255) NOT NULL, surface INT DEFAULT NULL, etat_room VARCHAR(255) DEFAULT NULL, INDEX IDX_A6D9C9D8A76ED395 (user_id), INDEX IDX_A6D9C9D8F5B7AF75 (address_id), INDEX IDX_A6D9C9D8152379F9 (home_status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_work (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, update_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_8441AD8812469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) DEFAULT NULL, us_verified VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52B90B6599E FOREIGN KEY (type_date_id) REFERENCES type_date (id)');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52BECA769 FOREIGN KEY (type_home_id) REFERENCES type_home (id)');
        $this->addSql('ALTER TABLE devis_category ADD CONSTRAINT FK_6403EA8541DEFADA FOREIGN KEY (devis_id) REFERENCES devis (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE devis_category ADD CONSTRAINT FK_6403EA8512469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A7641DEFADA FOREIGN KEY (devis_id) REFERENCES devis (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE type_coating ADD CONSTRAINT FK_D910703793153C2E FOREIGN KEY (type_work_id) REFERENCES type_work (id)');
        $this->addSql('ALTER TABLE type_home ADD CONSTRAINT FK_A6D9C9D8A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE type_home ADD CONSTRAINT FK_A6D9C9D8F5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE type_home ADD CONSTRAINT FK_A6D9C9D8152379F9 FOREIGN KEY (home_status_id) REFERENCES home_status (id)');
        $this->addSql('ALTER TABLE type_work ADD CONSTRAINT FK_8441AD8812469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type_home DROP FOREIGN KEY FK_A6D9C9D8F5B7AF75');
        $this->addSql('ALTER TABLE devis_category DROP FOREIGN KEY FK_6403EA8512469DE2');
        $this->addSql('ALTER TABLE type_work DROP FOREIGN KEY FK_8441AD8812469DE2');
        $this->addSql('ALTER TABLE devis_category DROP FOREIGN KEY FK_6403EA8541DEFADA');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A7641DEFADA');
        $this->addSql('ALTER TABLE type_home DROP FOREIGN KEY FK_A6D9C9D8152379F9');
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52B90B6599E');
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52BECA769');
        $this->addSql('ALTER TABLE type_coating DROP FOREIGN KEY FK_D910703793153C2E');
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52BA76ED395');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A76A76ED395');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FA76ED395');
        $this->addSql('ALTER TABLE type_home DROP FOREIGN KEY FK_A6D9C9D8A76ED395');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE devis');
        $this->addSql('DROP TABLE devis_category');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE home_status');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE type_coating');
        $this->addSql('DROP TABLE type_date');
        $this->addSql('DROP TABLE type_home');
        $this->addSql('DROP TABLE type_work');
        $this->addSql('DROP TABLE user');
    }
}
