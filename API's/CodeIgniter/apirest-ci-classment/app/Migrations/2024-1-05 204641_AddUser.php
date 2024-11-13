<?php
 namespace App\Database\Migrations;



class AddUser extends Migration
{

    public function up()
    {
        $this->forge->addField([
            'usuario_documento' => [
                'type' => 'INT',
                'constraint' => 255,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'usuario_nombre_completo' => [
                'type' => 'VARCHAR',
                'unique' => true,
                'constraint' => '255'
            ],
            'usuario_telefono' => [
                'type' => 'VARCHAR',
                'unique' => true,
                'constraint' => '255'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'unique' => true,
                'constraint' => '255'
            ],
            'password' =>[
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'usuario_edad' => [
                'type' => 'INT',
                'unique' => true,
                'constraint' => '2'
            ],
            'usuario_genero' => [
                'type' => 'TEXT',
                'unique' => true,
                'constraint' => '255'
            ], 
            'usuario_estatura' => [
                'type' => 'VARCHAR',
                'unique' => true,
                'constraint' => '10'
            ],
            'usuario_peso' => [
                'type' => 'VARCHAR',
                'unique' => true,
                'constraint' => '10'
            ],
            'usuario_objetivo' => [
                'type' => 'VARCHAR',
                'unique' => true,
                'constraint' => '255'
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }
    public function down ()
    {
        $this->forge->dropTable('users');   
    }
}

 
?>