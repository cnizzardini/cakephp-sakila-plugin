<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Stores seed.
 */
class StoresSeed extends AbstractSeed
{
    /**
     * @inheritDoc
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'employee_id' => '1',
                'address_id' => '1',
                'modified' => '2006-02-15 04:57:12',
            ],
            [
                'id' => '2',
                'employee_id' => '2',
                'address_id' => '2',
                'modified' => '2006-02-15 04:57:12',
            ],
        ];

        $table = $this->table('stores');
        $table->insert($data)->save();
    }
}
