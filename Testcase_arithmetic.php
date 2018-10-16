<?php
require_once 'Arithmetic.php';
class Testcase_arithmetic extends PHPUnit_Framework_TestCase {
    /**
     * @var Arithmetic
     */
    protected $object;


    protected function setUp() {
        // テストするオブジェクトを生成する
        $this->object = new Arithmetic();
    }

    /**
     * 足し算関数の検証
     */
    public function testcase_add() {
        // 引数に3,5を渡すと8が返ってくることを確認する
        $this->assertEquals(8, $this->object->add(3, 5));
    }

    /**
     * 引き算関数の検証
     */
    public function testsubtract() {
        // 引数に5,2を渡すと3が返ってくることを確認する
        if($this->assertEquals(3, $this->object->subtract(5, 2))) {
            echo ('pass');
        }
    }

}
