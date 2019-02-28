<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20190228123159 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        //Create photo table
        $this->addSql('create table photo
            (
                id varchar(9) not null,
                name varchar(50) not null,
                description tinytext null,
                date varchar(9) not null,
                place varchar(9) not null,
                created_at timestamp default NOW() not null,
                updated_at timestamp default NOW() on update NOW() not null,
                constraint photo_pk
                    primary key (id),
                index (date),
                index (place),
                constraint photo_time_id_fk
                    foreign key (date) references time (id)
                        on delete cascade,
                constraint photo_place_id_fk
                    foreign key (place) references place (id)
                        on delete cascade
            ) ENGINE INNODB;'
        );

        $this->write('table photo created');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE photo');
        $this->write('table photo dropped');
    }
}
