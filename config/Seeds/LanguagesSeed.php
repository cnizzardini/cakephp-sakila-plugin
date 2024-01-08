<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Languages seed.
 */
class LanguagesSeed extends AbstractSeed
{
    /**
     * @inheritDoc
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'name' => 'English',
            ],
            [
                'id' => '2',
                'name' => 'Italian',
            ],
            [
                'id' => '3',
                'name' => 'Japanese',
            ],
            [
                'id' => '4',
                'name' => 'Mandarin',
            ],
            [
                'id' => '5',
                'name' => 'French',
            ],
            [
                'id' => '6',
                'name' => 'German',
            ],
        ];

        $table = $this->table('languages');
        $table->insert($data)->save();
    }
}
