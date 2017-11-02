<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tour Entity
 *
 * @property int $tour_id
 * @property string $tour_ten
 * @property string $tour_thongtintongquat
 * @property \Cake\I18n\FrozenDate $tour_ngaydi
 * @property int $tour_songaydi
 * @property int $tour_diemdi
 * @property int $tour_diemden
 * @property int $tour_soluongtrenho
 * @property int $tour_soluongtreem
 * @property int $tour_soluongnguoilon
 * @property int $tour_dathdv
 * @property int $tour_tientt
 * @property int $loaitour_id
 * @property string $tour_hot
 * @property int $tour_trangthai
 * @property \Cake\I18n\FrozenDate $tour_thoihandk
 * @property bool $tour_status
 *
 * @property \App\Model\Entity\Tour $tour
 * @property \App\Model\Entity\Typetour $typetour
 */
class Tour extends Entity
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
        'tour_id' => false
    ];
}
