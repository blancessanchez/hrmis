<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Holiday Entity
 *
 * @property int $id
 * @property string|null $description
 * @property \Cake\I18n\FrozenDate|null $holiday_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 */
class Holiday extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'description' => true,
        'holiday_date' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'deleted_date' => true,
    ];
}
