<?php

require_once __DIR__ . '/VectorBase.php';

/**
 * THIS CLASS IS DYNAMICALLY GENERATED BY ../render-vector-tests.php.
 * IF YOU NEED TO MAKE CHANGES, DO IT IN THAT SCRIPT, OR IN THE VectorBase
 * CLASS WHICH THIS CLASS EXTENDS.  RE-RENDERING THIS CLASS ONLY NEEDS TO
 * HAPPEN WHEN THE CONTENTS OF ../../../vectors/ CHANGE.
 */
class KdfVectors extends VectorBase {

	public static function main() {
		$suite  = new PHPUnit_Framework_TestSuite(get_called_class());
		PHPUnit_TextUI_TestRunner::run($suite);
	}
	
	public function testAllFieldsEmptyOrZero() {
		$vector = json_decode('{"title":"All fields empty or zero","version":"3","password":"","salt_hex":"0000000000000000","key_hex":"ea339082 7e11f272 8d8050a0 1a8876c9 9588cced b47fb3b0 99bbaf9b 22685a47"}', true);
		$this->_runKdfTest($vector);

	}

	public function testOneByte() {
		$vector = json_decode('{"title":"One byte","version":"3","password":"a","salt_hex":"0102030405060708","key_hex":"fc632b0c a6b23eff 9a9dc3e0 e585167f 5a328916 ed19f835 58be3ba9 828797cd"}', true);
		$this->_runKdfTest($vector);

	}

	public function testShortPassword() {
		$vector = json_decode('{"title":"Short password","version":"3","password":"thepassword","salt_hex":"0203040506070801","key_hex":"0ea84f52 52310dc3 e3a7607c 33bfd1eb 580805fb 68293005 da21037c cf499626"}', true);
		$this->_runKdfTest($vector);

	}

	public function testPassphrase() {
		$vector = json_decode('{"title":"Passphrase","version":"3","password":"this is a bit longer password","salt_hex":"0304050607080102","key_hex":"71343acb 1e9675b0 16ac65dc fe5ddac2 e57ed9c3 5565fdbb 2dd6d2ce fe263d5b"}', true);
		$this->_runKdfTest($vector);

	}

	public function testLongPassphrase() {
		$vector = json_decode('{"title":"Long passphrase","version":"3","password":"$$$it was the epoch of belief, it was the epoch of incredulity; it was the season of Light, it was the season of Darkness; it was the spring of hope, it was the winter of despair; we had everything before us, we had nothing before us; we were all going directly to Heaven, we were all going the other way.","salt_hex":"0405060708010203","key_hex":"11b52c50 cbf45be6 a636a314 2b8c30b8 5a624481 4a7d43e3 7457f38d e46c6735"}', true);
		$this->_runKdfTest($vector);

	}

	public function testMultibyte() {
		$vector = json_decode('{"title":"Multibyte","version":"3","password":"\u4e2d\u6587\u5bc6\u7801","salt_hex":"0506070801020304","key_hex":"d2fc3237 d4a69668 ca83d969 c2cda1ac 6c368479 2b6644b1 a90b2052 007215dd"}', true);
		$this->_runKdfTest($vector);

	}

	public function testMixedLanguage() {
		$vector = json_decode('{"title":"Mixed language","version":"3","password":"\u4e2d\u6587\u5bc6\u7801 with a little English, too.","salt_hex":"0607080102030405","key_hex":"46bda5f4 65982a47 40c728bc 14c5de5c c7fc4eea f0aa41bb 9b9e8495 452dafff"}', true);
		$this->_runKdfTest($vector);

	}



}

if (!defined('PHPUnit_MAIN_METHOD') || PHPUnit_MAIN_METHOD == 'KdfVectors::main') {
	KdfVectors::main();
}

