<?php
/**
 * DefaultRolePermission::validates()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsValidateTest', 'NetCommons.TestSuite');
App::uses('DefaultRolePermissionFixture', 'Roles.Test/Fixture');

/**
 * DefaultRolePermission::validates()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Test\Case\Model\DefaultRolePermission
 */
class DefaultRolePermissionValidateTest extends NetCommonsValidateTest {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.roles.default_role_permission'
	);

/**
 * Plugin name
 *
 * @var array
 */
	public $plugin = 'roles';

/**
 * Model name
 *
 * @var array
 */
	protected $_modelName = 'DefaultRolePermission';

/**
 * Method name
 *
 * @var array
 */
	protected $_methodName = 'validates';

/**
 * ValidationErrorのDataProvider
 *
 * #### 戻り値
 *  - field フィールド名
 *  - value セットする値
 *  - message エラーメッセージ
 *  - overwrite 上書きするデータ
 *
 * @return array
 */
	public function dataProviderValidationError() {
		$data['DefaultRolePermission'] = (new DefaultRolePermissionFixture())->records[0];

		return array(
			array($data, 'role_key', '', __d('net_commons', 'Invalid request.')),
			array($data, 'type', '', __d('net_commons', 'Invalid request.')),
			array($data, 'permission', '', __d('net_commons', 'Invalid request.')),
			array($data, 'value', '2', __d('net_commons', 'Invalid request.')),
			array($data, 'fixed', '2', __d('net_commons', 'Invalid request.')),
		);
	}

}
