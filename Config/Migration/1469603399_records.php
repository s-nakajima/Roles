<?php
/**
 * Insert records migration
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsMigration', 'NetCommons.Config/Migration');

/**
 * Insert records migration
 *
 * @package NetCommons\Roles\Config\Migration
 */
class RolesRecords extends NetCommonsMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'records';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(),
		'down' => array(),
	);

/**
 * Insert records
 *
 * @var array $migration
 */
	public $records = array(
		'Role' => array(
			//会員の権限
			//--日本語
			array(
				'language_id' => 2, 'key' => 'system_administrator', 'type' => 1, 'name' => 'システム管理者', 'is_system' => 1,
				'description' => 'システムの管理者。サイト構築に必要なシステム設定を行うことができます。',
			),
			array(
				'language_id' => 2,	'key' => 'administrator', 'type' => 1, 'name' => 'サイト管理者', 'is_system' => 1,
				'description' => 'サイトの最高責任者。すべての会員情報を閲覧でき、必要に応じて制限を加えることができます。ルームの新設／名称変更等の権限を持ち、ルームごとに運営メンバー（ルーム管理者や編集長、編集者）を指定することができます。',
			),
			array(
				'language_id' => 2, 'key' => 'common_user', 'type' => 1, 'name' => '一般', 'is_system' => 1,
				'description' => '一般会員。他人に対して、必要最低限の情報のみ閲覧できます。',
			),
			//--英語
			array(
				'language_id' => 1, 'key' => 'system_administrator', 'type' => 1, 'name' => 'System administrator', 'is_system' => 1,
				'description' => 'Super user of the system.',
			),
			array(
				'language_id' => 1,	'key' => 'administrator', 'type' => 1, 'name' => 'Site administrator', 'is_system' => 1,
				'description' => 'Super user of the site. The one with this authority can browse and edit all the acquired data of the users, and is assigned as a head of all the grouprooms built in the NetCommons. He/She is also a site manager of the NetCommons.',
			),
			array(
				'language_id' => 1, 'key' => 'common_user', 'type' => 1, 'name' => 'Common user', 'is_system' => 1,
				'description' => 'A common user',
			),

			//ルーム内の役割
			//--日本語
			array(
				'language_id' => 2, 'key' => 'room_administrator', 'type' => 2, 'name' => 'ルーム管理者', 'is_system' => 1,
			),
			array(
				'language_id' => 2, 'key' => 'chief_editor', 'type' => 2, 'name' => '編集長', 'is_system' => 1,
			),
			array(
				'language_id' => 2, 'key' => 'editor', 'type' => 2, 'name' => '編集者', 'is_system' => 1,
			),
			array(
				'language_id' => 2, 'key' => 'general_user', 'type' => 2, 'name' => '一般', 'is_system' => 1,
			),
			array(
				'language_id' => 2, 'key' => 'visitor', 'type' => 2, 'name' => '参観者', 'is_system' => 1,
			),
			//--英語
			array(
				'language_id' => 1, 'key' => 'room_administrator', 'type' => 2, 'name' => 'Room Manager', 'is_system' => 1,
			),
			array(
				'language_id' => 1, 'key' => 'chief_editor', 'type' => 2, 'name' => 'Chief editor', 'is_system' => 1,
			),
			array(
				'language_id' => 1, 'key' => 'editor', 'type' => 2, 'name' => 'Editor', 'is_system' => 1,
			),
			array(
				'language_id' => 1, 'key' => 'general_user', 'type' => 2, 'name' => 'General user', 'is_system' => 1,
			),
			array(
				'language_id' => 1, 'key' => 'visitor', 'type' => 2, 'name' => 'Visitor', 'is_system' => 1,
			)
		),
		'DefaultRolePermission' => array(
			//ルーム管理者
			array(
				'role_key' => 'room_administrator',
				'type' => 'room_role',
				'permission' => 'page_editable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'room_administrator',
				'type' => 'room_role',
				'permission' => 'block_editable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'room_administrator',
				'type' => 'room_role',
				'permission' => 'content_readable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'room_administrator',
				'type' => 'room_role',
				'permission' => 'content_creatable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'room_administrator',
				'type' => 'room_role',
				'permission' => 'content_editable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'room_administrator',
				'type' => 'room_role',
				'permission' => 'content_publishable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'room_administrator',
				'type' => 'room_role',
				'permission' => 'content_comment_creatable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'room_administrator',
				'type' => 'room_role',
				'permission' => 'content_comment_editable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'room_administrator',
				'type' => 'room_role',
				'permission' => 'content_comment_publishable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'room_administrator',
				'type' => 'room_role',
				'permission' => 'block_permission_editable',
				'value' => '1',
				'fixed' => '1',
			),
			//編集長
			array(
				'role_key' => 'chief_editor',
				'type' => 'room_role',
				'permission' => 'page_editable',
				'value' => '1',
				'fixed' => '0',
			),
			array(
				'role_key' => 'chief_editor',
				'type' => 'room_role',
				'permission' => 'block_editable',
				'value' => '1',
				'fixed' => '0',
			),
			array(
				'role_key' => 'chief_editor',
				'type' => 'room_role',
				'permission' => 'content_readable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'chief_editor',
				'type' => 'room_role',
				'permission' => 'content_creatable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'chief_editor',
				'type' => 'room_role',
				'permission' => 'content_editable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'chief_editor',
				'type' => 'room_role',
				'permission' => 'content_publishable',
				'value' => '1',
				'fixed' => '0',
			),
			array(
				'role_key' => 'chief_editor',
				'type' => 'room_role',
				'permission' => 'content_comment_creatable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'chief_editor',
				'type' => 'room_role',
				'permission' => 'content_comment_editable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'chief_editor',
				'type' => 'room_role',
				'permission' => 'content_comment_publishable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'chief_editor',
				'type' => 'room_role',
				'permission' => 'block_permission_editable',
				'value' => '0',
				'fixed' => '1',
			),
			//編集者
			array(
				'role_key' => 'editor',
				'type' => 'room_role',
				'permission' => 'page_editable',
				'value' => '0',
				'fixed' => '0',
			),
			array(
				'role_key' => 'editor',
				'type' => 'room_role',
				'permission' => 'block_editable',
				'value' => '0',
				'fixed' => '0',
			),
			array(
				'role_key' => 'editor',
				'type' => 'room_role',
				'permission' => 'content_readable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'editor',
				'type' => 'room_role',
				'permission' => 'content_creatable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'editor',
				'type' => 'room_role',
				'permission' => 'content_editable',
				'value' => '1',
				'fixed' => '0',
			),
			array(
				'role_key' => 'editor',
				'type' => 'room_role',
				'permission' => 'content_publishable',
				'value' => '0',
				'fixed' => '0',
			),
			array(
				'role_key' => 'editor',
				'type' => 'room_role',
				'permission' => 'content_comment_creatable',
				'value' => '1',
				'fixed' => '0',
			),
			array(
				'role_key' => 'editor',
				'type' => 'room_role',
				'permission' => 'content_comment_editable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'editor',
				'type' => 'room_role',
				'permission' => 'content_comment_publishable',
				'value' => '0',
				'fixed' => '0',
			),
			array(
				'role_key' => 'editor',
				'type' => 'room_role',
				'permission' => 'block_permission_editable',
				'value' => '0',
				'fixed' => '1',
			),
			//一般
			array(
				'role_key' => 'general_user',
				'type' => 'room_role',
				'permission' => 'page_editable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'general_user',
				'type' => 'room_role',
				'permission' => 'block_editable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'general_user',
				'type' => 'room_role',
				'permission' => 'content_readable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'general_user',
				'type' => 'room_role',
				'permission' => 'content_creatable',
				'value' => '1',
				'fixed' => '0',
			),
			array(
				'role_key' => 'general_user',
				'type' => 'room_role',
				'permission' => 'content_editable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'general_user',
				'type' => 'room_role',
				'permission' => 'content_publishable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'general_user',
				'type' => 'room_role',
				'permission' => 'content_comment_creatable',
				'value' => '1',
				'fixed' => '0',
			),
			array(
				'role_key' => 'general_user',
				'type' => 'room_role',
				'permission' => 'content_comment_editable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'general_user',
				'type' => 'room_role',
				'permission' => 'content_comment_publishable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'general_user',
				'type' => 'room_role',
				'permission' => 'block_permission_editable',
				'value' => '0',
				'fixed' => '1',
			),
			//ゲスト
			array(
				'role_key' => 'visitor',
				'type' => 'room_role',
				'permission' => 'page_editable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'visitor',
				'type' => 'room_role',
				'permission' => 'block_editable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'visitor',
				'type' => 'room_role',
				'permission' => 'content_readable',
				'value' => '1',
				'fixed' => '1',
			),
			array(
				'role_key' => 'visitor',
				'type' => 'room_role',
				'permission' => 'content_creatable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'visitor',
				'type' => 'room_role',
				'permission' => 'content_editable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'visitor',
				'type' => 'room_role',
				'permission' => 'content_publishable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'visitor',
				'type' => 'room_role',
				'permission' => 'content_comment_creatable',
				'value' => '0',
				'fixed' => '0',
			),
			array(
				'role_key' => 'visitor',
				'type' => 'room_role',
				'permission' => 'content_comment_editable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'visitor',
				'type' => 'room_role',
				'permission' => 'content_comment_publishable',
				'value' => '0',
				'fixed' => '1',
			),
			array(
				'role_key' => 'visitor',
				'type' => 'room_role',
				'permission' => 'block_permission_editable',
				'value' => '0',
				'fixed' => '1',
			),
			//HTMLタグの書き込み制限
			array('role_key' => 'room_administrator', 'type' => 'room_role', 'permission' => 'html_not_limited', 'value' => '0', 'fixed' => '0', ),
			array('role_key' => 'chief_editor', 'type' => 'room_role', 'permission' => 'html_not_limited', 'value' => '0', 'fixed' => '0', ),
			array('role_key' => 'editor', 'type' => 'room_role', 'permission' => 'html_not_limited', 'value' => '0', 'fixed' => '0', ),
			array('role_key' => 'general_user', 'type' => 'room_role', 'permission' => 'html_not_limited', 'value' => '0', 'fixed' => '1', ),
			array('role_key' => 'visitor', 'type' => 'room_role', 'permission' => 'html_not_limited', 'value' => '0', 'fixed' => '1', ),
			//投稿をメール通知する権限
			array('role_key' => 'room_administrator', 'type' => 'room_role', 'permission' => 'mail_content_receivable', 'value' => '1', 'fixed' => '1', ),
			array('role_key' => 'chief_editor', 'type' => 'room_role', 'permission' => 'mail_content_receivable', 'value' => '1', 'fixed' => '1', ),
			array('role_key' => 'editor', 'type' => 'room_role', 'permission' => 'mail_content_receivable', 'value' => '1', 'fixed' => '0', ),
			array('role_key' => 'general_user', 'type' => 'room_role', 'permission' => 'mail_content_receivable', 'value' => '1', 'fixed' => '0', ),
			array('role_key' => 'visitor', 'type' => 'room_role', 'permission' => 'mail_content_receivable', 'value' => '0', 'fixed' => '0', ),
			//回答をメール通知する権限
			array('role_key' => 'room_administrator', 'type' => 'room_role', 'permission' => 'mail_answer_receivable', 'value' => '1', 'fixed' => '1', ),
			array('role_key' => 'chief_editor', 'type' => 'room_role', 'permission' => 'mail_answer_receivable', 'value' => '1', 'fixed' => '0', ),
			array('role_key' => 'editor', 'type' => 'room_role', 'permission' => 'mail_answer_receivable', 'value' => '0', 'fixed' => '1', ),
			array('role_key' => 'general_user', 'type' => 'room_role', 'permission' => 'mail_answer_receivable', 'value' => '0', 'fixed' => '1', ),
			array('role_key' => 'visitor', 'type' => 'room_role', 'permission' => 'mail_answer_receivable', 'value' => '0', 'fixed' => '1', ),
			//メール設定編集権限
			array('role_key' => 'room_administrator', 'type' => 'room_role', 'permission' => 'mail_editable', 'value' => '1', 'fixed' => '1', ),
			array('role_key' => 'chief_editor', 'type' => 'room_role', 'permission' => 'mail_editable', 'value' => '1', 'fixed' => '1', ),
			array('role_key' => 'editor', 'type' => 'room_role', 'permission' => 'mail_editable', 'value' => '0', 'fixed' => '1', ),
			array('role_key' => 'general_user', 'type' => 'room_role', 'permission' => 'mail_editable', 'value' => '0', 'fixed' => '1', ),
			array('role_key' => 'visitor', 'type' => 'room_role', 'permission' => 'mail_editable', 'value' => '0', 'fixed' => '1', ),

			//グループの作成権限(会員権限ごとに設定)
			array(
				'role_key' => 'system_administrator', 'type' => 'user_role', 'permission' => 'group_creatable', 'value' => '1', 'fixed' => '0',
			),
			array(
				'role_key' => 'administrator', 'type' => 'user_role', 'permission' => 'group_creatable', 'value' => '1', 'fixed' => '0',
			),
			array(
				'role_key' => 'common_user', 'type' => 'user_role', 'permission' => 'group_creatable', 'value' => '1', 'fixed' => '0',
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		if ($direction === 'down') {
			return true;
		}

		$Role = $this->generateModel('Role');
		if ($Role->find('count') > 0) {
			return true;
		}

		foreach ($this->records as $model => $records) {
			if (!$this->updateRecords($model, $records)) {
				return false;
			}
		}
		return true;
	}
}
