<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Group Entity
 *
 * @property int $id
 * @property int|null $course_id
 * @property int|null $user_id
 * @property string|null $title
 *
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Event[] $events
 */
class Group extends Entity
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
        'course_id' => true,
        'user_id' => true,
        'title' => true,
        'course' => true,
        'user' => true,
        'events' => true
    ];
}
