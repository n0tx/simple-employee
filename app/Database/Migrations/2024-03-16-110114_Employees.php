<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employees extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'gender' => [
                'type' => 'ENUM',
                'constraint' => ['Male', 'Female'],
                'default' => 'Male',
            ],
            'age' => [
                'type' => 'INT',
                'constraint' => 2,
            ],
            'first_vaccine' => [
                'type' => 'ENUM',
                'constraint' => ['already', 'not yet'],
                'default' => 'not yet',

            ],
            'second_vaccine' => [
                'type' => 'ENUM',
                'constraint' => ['already', 'not yet'],
                'default' => 'not yet',

            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('employees');
        
    }

    public function down()
    {
        $this->forge->dropTable('employees');
    }
}
