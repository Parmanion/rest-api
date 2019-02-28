<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190228072041 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER SCHEMA `sandbox`  DEFAULT CHARACTER SET utf8mb4  DEFAULT COLLATE utf8mb4_unicode_ci ;');
        //Create time table
        $this->addSql("create table time
            (
                id varchar(9) not null,
                utc datetime not null,
                local datetime not null,
                zone varchar(50) default 'Europe/Paris' not null,
                created_at timestamp default NOW() not null,
                updated_at timestamp default NOW() on update NOW() not null,
                constraint time_pk
                    primary key (id)
            )  ENGINE=INNODB;"
        );

        $this->write('table time created');

        //Create place table
        $this->addSql('create table place
            (
                id varchar(9) not null,
                kind enum("travel", "step") not null,
                name varchar(50) not null,
                description tinytext null,
                date_start varchar(9) not null,
                date_end varchar(9) not null,
                created_at timestamp default NOW() not null,
                updated_at timestamp default NOW() on update NOW() not null,
                constraint place_pk
                    primary key (id),
                index (date_start),
                index (date_end),
                constraint place_time_id_start_fk
                    foreign key (date_start) references time (id)
                        on delete cascade,
                constraint place_time_id_end_fk
                    foreign key (date_end) references time (id)
                        on delete cascade
            ) ENGINE INNODB;'
        );

        $this->write('table place created');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE time');
        $this->write('table time dropped');
        $this->addSql('DROP TABLE place');
        $this->write('table place dropped');
    }
}
