<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ToursFixture
 *
 */
class ToursFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'tour_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'tour_ten' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tour_thongtintongquat' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tour_ngaydi' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'tour_songaydi' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tour_diemdi' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tour_diemden' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tour_soluongtrenho' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tour_soluongtreem' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tour_soluongnguoilon' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tour_dathdv' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tour_tientt' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'loaitour_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tour_hot' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => null, 'collate' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'tour_trangthai' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tour_thoihandk' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'tour_status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'loaitour_idfk' => ['type' => 'index', 'columns' => ['loaitour_id'], 'length' => []],
            'tour_trangthaifk' => ['type' => 'index', 'columns' => ['tour_trangthai'], 'length' => []],
            'tour_dathdv' => ['type' => 'index', 'columns' => ['tour_dathdv'], 'length' => []],
            'tour_diemdenfkt' => ['type' => 'index', 'columns' => ['tour_diemden'], 'length' => []],
            'tour_diemdifkt' => ['type' => 'index', 'columns' => ['tour_diemdi'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['tour_id'], 'length' => []],
            'loaitour_idfk' => ['type' => 'foreign', 'columns' => ['loaitour_id'], 'references' => ['typetours', 'typetour_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tour_dathdv' => ['type' => 'foreign', 'columns' => ['tour_dathdv'], 'references' => ['accounts', 'account_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tour_diemdenfkt' => ['type' => 'foreign', 'columns' => ['tour_diemden'], 'references' => ['places', 'place_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tour_diemdifkt' => ['type' => 'foreign', 'columns' => ['tour_diemdi'], 'references' => ['places', 'place_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tour_trangthaifk' => ['type' => 'foreign', 'columns' => ['tour_trangthai'], 'references' => ['statustours', 'statustour_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'tour_id' => 1,
            'tour_ten' => 'Lorem ipsum dolor sit amet',
            'tour_thongtintongquat' => 'Lorem ipsum dolor sit amet',
            'tour_ngaydi' => '2017-07-13',
            'tour_songaydi' => 1,
            'tour_diemdi' => 1,
            'tour_diemden' => 1,
            'tour_soluongtrenho' => 1,
            'tour_soluongtreem' => 1,
            'tour_soluongnguoilon' => 1,
            'tour_dathdv' => 1,
            'tour_tientt' => 1,
            'loaitour_id' => 1,
            'tour_hot' => 'Lorem ipsum dolor sit amet',
            'tour_trangthai' => 1,
            'tour_thoihandk' => '2017-07-13',
            'tour_status' => 1
        ],
    ];
}
