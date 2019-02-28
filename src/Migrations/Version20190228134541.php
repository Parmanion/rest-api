<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190228134541 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('alter table place modify kind varchar(6) not null;');

        $this->write('transform kind field into varchar 6');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('alter table place modify kind enum("travel", "step") not null');
        $this->write('transform kind field into enum');
    }
}
