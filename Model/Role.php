<?php
/**
 * Role Model
 *
 * @property Language $Language
 * @property Plugin $Plugin
 * @property Room $Room
 * @property UserAttribute $UserAttribute
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('RolesAppModel', 'Roles.Model');

/**
 * Role Model
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Roles\Model
 */
class Role extends RolesAppModel {

/**
 * ロールタイプ(会員)
 */
	const ROLE_TYPE_USER = '1';

/**
 * ロールタイプ(ルーム)
 */
	const ROLE_TYPE_ROOM = '2';

/**
 * ルームロールのキー(ルーム管理者)
 *
 * @var const
 */
	const ROOM_ROLE_KEY_ROOM_ADMINISTRATOR = 'room_administrator';

/**
 * ルームロールのキー(編集長)
 *
 * @var const
 */
	const ROOM_ROLE_KEY_CHIEF_EDITOR = 'chief_editor';

/**
 * ルームロールのキー(編集者)
 *
 * @var const
 */
	const ROOM_ROLE_KEY_EDITOR = 'editor';

/**
 * ルームロールのキー(一般)
 *
 * @var const
 */
	const ROOM_ROLE_KEY_GENERAL_USER = 'general_user';

/**
 * ルームロールのキー(ゲスト)
 *
 * @var const
 */
	const ROOM_ROLE_KEY_VISITOR = 'visitor';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array();

/**
 * Called during validation operations, before validation. Please note that custom
 * validation rules can be defined in $validate.
 *
 * @param array $options Options passed from Model::save().
 * @return bool True if validate operation should continue, false to abort
 * @link http://book.cakephp.org/2.0/en/models/callback-methods.html#beforevalidate
 * @see Model::save()
 */
	public function beforeValidate($options = array()) {
		$this->validate = Hash::merge(array(
			'language_id' => array(
				'numeric' => array(
					'rule' => array('numeric'),
					'message' => __d('net_commons', 'Invalid request.'),
				),
			),
			'type' => array(
				'numeric' => array(
					'rule' => array('numeric'),
					'message' => __d('net_commons', 'Invalid request.'),
				),
			),
			'name' => array(
				'notBlank' => array(
					'rule' => array('notBlank'),
					'message' => __d('net_commons', 'Invalid request.'),
				),
			),
		), $this->validate);

		if (! isset($this->validate['type']['inList'])) {
			$this->validate['type']['inList'] = array(
				'rule' => array('inList', array(self::ROLE_TYPE_USER, self::ROLE_TYPE_ROOM)),
				'message' => __d('net_commons', 'Invalid request.'),
			);
		}
		return parent::beforeValidate($options);
	}

}
