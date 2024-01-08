<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Employees seed.
 */
class EmployeesSeed extends AbstractSeed
{
    /**
     * @inheritDoc
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'first_name' => 'Mike',
                'last_name' => 'Hillyer',
                'address_id' => '3',
                'picture' => NULL,
                'email' => 'Mike.Hillyer@sakilastaff.com',
                'store_id' => '1',
                'is_active' => '1',
                'username' => 'Mike',
                'password' => '8cb2237d0679ca88db6464eac60da96345513964',
                'modified' => '2006-02-15 03:57:16',
            ],
            [
                'id' => '2',
                'first_name' => 'Jon',
                'last_name' => 'Stephens',
                'address_id' => '4',
                'picture' => NULL,
                'email' => 'Jon.Stephens@sakilastaff.com',
                'store_id' => '2',
                'is_active' => '1',
                'username' => 'Jon',
                'password' => NULL,
                'modified' => '2006-02-15 03:57:16',
            ],
        ];

        $table = $this->table('employees');
        $table->insert($data)->save();
    }
}
