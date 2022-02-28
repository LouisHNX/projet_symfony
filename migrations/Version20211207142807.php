<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207142807 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category_ressource (category_id INT NOT NULL, ressource_id INT NOT NULL, INDEX IDX_54FF977412469DE2 (category_id), INDEX IDX_54FF9774FC6CD52A (ressource_id), PRIMARY KEY(category_id, ressource_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressource_group (ressource_id INT NOT NULL, group_id INT NOT NULL, INDEX IDX_F954C041FC6CD52A (ressource_id), INDEX IDX_F954C041FE54D947 (group_id), PRIMARY KEY(ressource_id, group_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category_ressource ADD CONSTRAINT FK_54FF977412469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category_ressource ADD CONSTRAINT FK_54FF9774FC6CD52A FOREIGN KEY (ressource_id) REFERENCES ressource (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ressource_group ADD CONSTRAINT FK_F954C041FC6CD52A FOREIGN KEY (ressource_id) REFERENCES ressource (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ressource_group ADD CONSTRAINT FK_F954C041FE54D947 FOREIGN KEY (group_id) REFERENCES `group` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `group` ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `group` ADD CONSTRAINT FK_6DC044C5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6DC044C5A76ED395 ON `group` (user_id)');
        $this->addSql('ALTER TABLE ressource ADD loan_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ressource ADD CONSTRAINT FK_939F4544CE73868F FOREIGN KEY (loan_id) REFERENCES loan (id)');
        $this->addSql('CREATE INDEX IDX_939F4544CE73868F ON ressource (loan_id)');
        $this->addSql('ALTER TABLE user ADD loan_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649CE73868F FOREIGN KEY (loan_id) REFERENCES loan (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649CE73868F ON user (loan_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category_ressource');
        $this->addSql('DROP TABLE ressource_group');
        $this->addSql('ALTER TABLE `group` DROP FOREIGN KEY FK_6DC044C5A76ED395');
        $this->addSql('DROP INDEX IDX_6DC044C5A76ED395 ON `group`');
        $this->addSql('ALTER TABLE `group` DROP user_id');
        $this->addSql('ALTER TABLE ressource DROP FOREIGN KEY FK_939F4544CE73868F');
        $this->addSql('DROP INDEX IDX_939F4544CE73868F ON ressource');
        $this->addSql('ALTER TABLE ressource DROP loan_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649CE73868F');
        $this->addSql('DROP INDEX IDX_8D93D649CE73868F ON user');
        $this->addSql('ALTER TABLE user DROP loan_id');
    }
}
