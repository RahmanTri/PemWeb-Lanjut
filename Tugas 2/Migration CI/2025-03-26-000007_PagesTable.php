<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class G_PagesTable extends Migration
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
            'users_id' => [
                'type'       => 'BIGINT',
                'unsigned'   => true,
            ],
            'content' => [
                'type' => 'TEXT',
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'default'    => 'noimage.jpg',
            ],
            'hits' => [
                'type'       => 'INT',
                'default'    => 0,
            ],
            'active' => [
                'type'       => 'ENUM',
                'constraint' => ['Yes', 'No'],
                'default'    => 'Yes',
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['publish', 'draft'],
                'default'    => 'publish',
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
        $this->forge->addForeignKey('users_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pages');
    }

    public function down()
    {
        //
    }
}
