<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property int|null $group_id
 * @property int|null $course_id
 * @property int|null $place_id
 * @property \Cake\I18n\FrozenTime|null $date
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Place $place
 */
class Event extends Entity
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
        'group_id' => true,
        'course_id' => true,
        'place_id' => true,
        'date' => true,
        'group' => true,
        'course' => true,
        'place' => true
    ];
}
