<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddLocationContactToPosts extends Migration
{
    public function up()
    {
        $fields = [
            'location' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
                'after' => 'description'
            ],
            'contact' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
                'after' => 'location'
            ]
        ];
        $this->forge->addColumn('posts', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('posts', ['location', 'contact']);
    }
}
