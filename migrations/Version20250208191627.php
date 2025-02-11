<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250208191627 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dossier_medical (id INT AUTO_INCREMENT NOT NULL, patient_id INT DEFAULT NULL, groupe_sanguin VARCHAR(255) NOT NULL, allergies VARCHAR(255) NOT NULL, vaccinations VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_3581EE626B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, medecin_id INT NOT NULL, service_id INT NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, rendez_vous_status VARCHAR(255) NOT NULL, INDEX IDX_65E8AA0A4F31A84 (medecin_id), INDEX IDX_65E8AA0AED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, rendez_vous_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, tel INT NOT NULL, grade VARCHAR(255) NOT NULL, utilisateur_role VARCHAR(255) NOT NULL, medecin_specilaite VARCHAR(255) NOT NULL, INDEX IDX_1D1C63B3ED5CA9E6 (service_id), INDEX IDX_1D1C63B391EF7EAA (rendez_vous_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visite (id INT AUTO_INCREMENT NOT NULL, rdv_id INT DEFAULT NULL, dossier_medical_id INT DEFAULT NULL, date_visite DATE NOT NULL, diagnostic VARCHAR(255) NOT NULL, ordonnace VARCHAR(255) NOT NULL, ceteficat VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_B09C8CBB4CCE3F86 (rdv_id), INDEX IDX_B09C8CBB7750B79F (dossier_medical_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dossier_medical ADD CONSTRAINT FK_3581EE626B899279 FOREIGN KEY (patient_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A4F31A84 FOREIGN KEY (medecin_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0AED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B391EF7EAA FOREIGN KEY (rendez_vous_id) REFERENCES rendez_vous (id)');
        $this->addSql('ALTER TABLE visite ADD CONSTRAINT FK_B09C8CBB4CCE3F86 FOREIGN KEY (rdv_id) REFERENCES rendez_vous (id)');
        $this->addSql('ALTER TABLE visite ADD CONSTRAINT FK_B09C8CBB7750B79F FOREIGN KEY (dossier_medical_id) REFERENCES dossier_medical (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier_medical DROP FOREIGN KEY FK_3581EE626B899279');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A4F31A84');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0AED5CA9E6');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3ED5CA9E6');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B391EF7EAA');
        $this->addSql('ALTER TABLE visite DROP FOREIGN KEY FK_B09C8CBB4CCE3F86');
        $this->addSql('ALTER TABLE visite DROP FOREIGN KEY FK_B09C8CBB7750B79F');
        $this->addSql('DROP TABLE dossier_medical');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE visite');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
