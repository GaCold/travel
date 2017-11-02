<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $account_id
 * @property string $account_firstname
 * @property string $account_lastname
 * @property int $account_sex
 * @property \Cake\I18n\FrozenDate $account_birthday
 * @property int $role_id
 * @property string $email
 * @property string $account_card
 * @property string $account_phone
 * @property string $password
 * @property string $account_address
 * @property bool $account_status
 *
 * @property \App\Model\Entity\Role $role
 */
class Account extends Entity
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
        '*' => true,
        'account_id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password){
        if (strlen($password) > 0) {
          return (new DefaultPasswordHasher)->hash($password);
        }
    }

    protected function _getFullname(){

        return $this->_properties['firstname'].' '.$this->_properties['lastname'];
    }
}
