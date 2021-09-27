<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210924122039 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE action (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cold_resistance (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ground (id INT AUTO_INCREMENT NOT NULL, ground_type INT DEFAULT NULL, user INT DEFAULT NULL, width INT NOT NULL, height INT NOT NULL, INDEX ground_user (user), INDEX ground_ground_type (ground_type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ground_plant (ground_id INT NOT NULL, plant_id INT NOT NULL, INDEX IDX_31E8EB8F1D297B0A (ground_id), INDEX IDX_31E8EB8F1D935652 (plant_id), PRIMARY KEY(ground_id, plant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ground_moisture (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ground_ph (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ground_type (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE maintenance (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE performed_action (id INT AUTO_INCREMENT NOT NULL, action INT DEFAULT NULL, plant INT DEFAULT NULL, user INT DEFAULT NULL, date DATE NOT NULL, INDEX performed_action_plant (plant), INDEX performed_action_user (user), INDEX performed_action_action (action), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plant (id INT AUTO_INCREMENT NOT NULL, category INT DEFAULT NULL, cold_resistance INT DEFAULT NULL, maintenance INT DEFAULT NULL, water_needs INT DEFAULT NULL, name VARCHAR(255) NOT NULL, sowing_month_start INT NOT NULL, sowing_month_end INT NOT NULL, harvest_month_start INT NOT NULL, harvest_month_end INT NOT NULL, transplanting_month_start INT NOT NULL, transplanting_month_end INT NOT NULL, spacing VARCHAR(255) NOT NULL, image TEXT NOT NULL, INDEX plant_cold_resistance (cold_resistance), INDEX plant_water_needs (water_needs), INDEX plant_category (category), INDEX plant_maintenance (maintenance), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plant_ground_moisture (plant_id INT NOT NULL, ground_moisture_id INT NOT NULL, INDEX IDX_8742F9D21D935652 (plant_id), INDEX IDX_8742F9D2A87497F3 (ground_moisture_id), PRIMARY KEY(plant_id, ground_moisture_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plant_ground_ph (plant_id INT NOT NULL, ground_ph_id INT NOT NULL, INDEX IDX_AD30DA11D935652 (plant_id), INDEX IDX_AD30DA1C28932E1 (ground_ph_id), PRIMARY KEY(plant_id, ground_ph_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plant_ground_type (plant_id INT NOT NULL, ground_type_id INT NOT NULL, INDEX IDX_8155B081D935652 (plant_id), INDEX IDX_8155B082D37CEC5 (ground_type_id), PRIMARY KEY(plant_id, ground_type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plant_sun_exposure (plant_id INT NOT NULL, sun_exposure_id INT NOT NULL, INDEX IDX_4F1A1AB51D935652 (plant_id), INDEX IDX_4F1A1AB5B9340D25 (sun_exposure_id), PRIMARY KEY(plant_id, sun_exposure_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sun_exposure (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, city INT DEFAULT NULL, pseudo VARCHAR(255) NOT NULL, password TEXT NOT NULL, email VARCHAR(255) NOT NULL, INDEX user_city (city), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE water_needs (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ground ADD CONSTRAINT FK_A7FF8368D88B1CA8 FOREIGN KEY (ground_type) REFERENCES ground_type (id)');
        $this->addSql('ALTER TABLE ground ADD CONSTRAINT FK_A7FF83688D93D649 FOREIGN KEY (user) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ground_plant ADD CONSTRAINT FK_31E8EB8F1D297B0A FOREIGN KEY (ground_id) REFERENCES ground (id)');
        $this->addSql('ALTER TABLE ground_plant ADD CONSTRAINT FK_31E8EB8F1D935652 FOREIGN KEY (plant_id) REFERENCES plant (id)');
        $this->addSql('ALTER TABLE performed_action ADD CONSTRAINT FK_5E24380147CC8C92 FOREIGN KEY (action) REFERENCES action (id)');
        $this->addSql('ALTER TABLE performed_action ADD CONSTRAINT FK_5E243801AB030D72 FOREIGN KEY (plant) REFERENCES plant (id)');
        $this->addSql('ALTER TABLE performed_action ADD CONSTRAINT FK_5E2438018D93D649 FOREIGN KEY (user) REFERENCES user (id)');
        $this->addSql('ALTER TABLE plant ADD CONSTRAINT FK_AB030D7264C19C1 FOREIGN KEY (category) REFERENCES category (id)');
        $this->addSql('ALTER TABLE plant ADD CONSTRAINT FK_AB030D72E104E606 FOREIGN KEY (cold_resistance) REFERENCES cold_resistance (id)');
        $this->addSql('ALTER TABLE plant ADD CONSTRAINT FK_AB030D722F84F8E9 FOREIGN KEY (maintenance) REFERENCES maintenance (id)');
        $this->addSql('ALTER TABLE plant ADD CONSTRAINT FK_AB030D729DAB9707 FOREIGN KEY (water_needs) REFERENCES water_needs (id)');
        $this->addSql('ALTER TABLE plant_ground_moisture ADD CONSTRAINT FK_8742F9D21D935652 FOREIGN KEY (plant_id) REFERENCES plant (id)');
        $this->addSql('ALTER TABLE plant_ground_moisture ADD CONSTRAINT FK_8742F9D2A87497F3 FOREIGN KEY (ground_moisture_id) REFERENCES ground_moisture (id)');
        $this->addSql('ALTER TABLE plant_ground_ph ADD CONSTRAINT FK_AD30DA11D935652 FOREIGN KEY (plant_id) REFERENCES plant (id)');
        $this->addSql('ALTER TABLE plant_ground_ph ADD CONSTRAINT FK_AD30DA1C28932E1 FOREIGN KEY (ground_ph_id) REFERENCES ground_ph (id)');
        $this->addSql('ALTER TABLE plant_ground_type ADD CONSTRAINT FK_8155B081D935652 FOREIGN KEY (plant_id) REFERENCES plant (id)');
        $this->addSql('ALTER TABLE plant_ground_type ADD CONSTRAINT FK_8155B082D37CEC5 FOREIGN KEY (ground_type_id) REFERENCES ground_type (id)');
        $this->addSql('ALTER TABLE plant_sun_exposure ADD CONSTRAINT FK_4F1A1AB51D935652 FOREIGN KEY (plant_id) REFERENCES plant (id)');
        $this->addSql('ALTER TABLE plant_sun_exposure ADD CONSTRAINT FK_4F1A1AB5B9340D25 FOREIGN KEY (sun_exposure_id) REFERENCES sun_exposure (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6492D5B0234 FOREIGN KEY (city) REFERENCES city (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE performed_action DROP FOREIGN KEY FK_5E24380147CC8C92');
        $this->addSql('ALTER TABLE plant DROP FOREIGN KEY FK_AB030D7264C19C1');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6492D5B0234');
        $this->addSql('ALTER TABLE plant DROP FOREIGN KEY FK_AB030D72E104E606');
        $this->addSql('ALTER TABLE ground_plant DROP FOREIGN KEY FK_31E8EB8F1D297B0A');
        $this->addSql('ALTER TABLE plant_ground_moisture DROP FOREIGN KEY FK_8742F9D2A87497F3');
        $this->addSql('ALTER TABLE plant_ground_ph DROP FOREIGN KEY FK_AD30DA1C28932E1');
        $this->addSql('ALTER TABLE ground DROP FOREIGN KEY FK_A7FF8368D88B1CA8');
        $this->addSql('ALTER TABLE plant_ground_type DROP FOREIGN KEY FK_8155B082D37CEC5');
        $this->addSql('ALTER TABLE plant DROP FOREIGN KEY FK_AB030D722F84F8E9');
        $this->addSql('ALTER TABLE ground_plant DROP FOREIGN KEY FK_31E8EB8F1D935652');
        $this->addSql('ALTER TABLE performed_action DROP FOREIGN KEY FK_5E243801AB030D72');
        $this->addSql('ALTER TABLE plant_ground_moisture DROP FOREIGN KEY FK_8742F9D21D935652');
        $this->addSql('ALTER TABLE plant_ground_ph DROP FOREIGN KEY FK_AD30DA11D935652');
        $this->addSql('ALTER TABLE plant_ground_type DROP FOREIGN KEY FK_8155B081D935652');
        $this->addSql('ALTER TABLE plant_sun_exposure DROP FOREIGN KEY FK_4F1A1AB51D935652');
        $this->addSql('ALTER TABLE plant_sun_exposure DROP FOREIGN KEY FK_4F1A1AB5B9340D25');
        $this->addSql('ALTER TABLE ground DROP FOREIGN KEY FK_A7FF83688D93D649');
        $this->addSql('ALTER TABLE performed_action DROP FOREIGN KEY FK_5E2438018D93D649');
        $this->addSql('ALTER TABLE plant DROP FOREIGN KEY FK_AB030D729DAB9707');
        $this->addSql('DROP TABLE action');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE cold_resistance');
        $this->addSql('DROP TABLE ground');
        $this->addSql('DROP TABLE ground_plant');
        $this->addSql('DROP TABLE ground_moisture');
        $this->addSql('DROP TABLE ground_ph');
        $this->addSql('DROP TABLE ground_type');
        $this->addSql('DROP TABLE maintenance');
        $this->addSql('DROP TABLE performed_action');
        $this->addSql('DROP TABLE plant');
        $this->addSql('DROP TABLE plant_ground_moisture');
        $this->addSql('DROP TABLE plant_ground_ph');
        $this->addSql('DROP TABLE plant_ground_type');
        $this->addSql('DROP TABLE plant_sun_exposure');
        $this->addSql('DROP TABLE sun_exposure');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE water_needs');
    }
}
