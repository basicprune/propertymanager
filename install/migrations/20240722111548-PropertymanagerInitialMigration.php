<?php

class PropertymanagerInitialMigration extends CmfiveMigration
{
    public function up()
    {
        // UP
        $column = parent::Column();
        $column->setName('id')
                ->setType('biginteger')
                ->setIdentity(true);

        if (!$this->hasTable("property_holder")) {
            $this->table("property_holder", [
                "id" => false,
                "primary_key" => "id"
            ])->addColumn($column)
                ->addStringColumn('address')
                ->addIntegerColumn('numOfTenants')
                ->addIdColumn('damageReports_id')
                ->addCmfiveParameters()
                ->create();
        }

    }

    public function down()
    {
        // DOWN
    }

    public function preText()
    {
        return null;
    }

    public function postText()
    {
        return null;
    }

    public function description()
    {
        return null;
    }
}
