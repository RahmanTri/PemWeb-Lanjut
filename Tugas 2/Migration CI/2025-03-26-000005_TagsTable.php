<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class E_TagsTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type'           => 'INT',
            'constraint'     => 11,
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'title' => [
            'type'       => 'VARCHAR',
            'constraint' => 255,
        ],
        'seotitle' => [
            'type'       => 'VARCHAR',
            'constraint' => 255,
        ],
        'active' => [
            'type'       => 'ENUM',
            'constraint' => ['Yes', 'No'],
            'default'    => 'Yes',
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->createTable('tags');
}

    public function down()
    {
        //
    }
}
