<?php
/**
 * Menu Japanese lexicon topic
 *
 * @language ja
 * @package modx
 * @subpackage lexicon
 * @author yamamoto http://kyms.jp 2012-08-11
 * @author Nick http://smallworld.west-tokyo.com
 * @author shimojo http://www.priqia.com/
 */
$_lang['action'] = 'アクション(コントローラ)';
$_lang['action_desc'] = 'コントローラにアクションIDを割り当てます。The path to the controller is built by prefixing the Namespace path, controllers, and manager theme with this value. (Ex: user/update for core Namespace goes to [core_namespace_path]controllers/ [mgr_theme]/user/update.class.php )';
$_lang['description_desc'] = 'The text, or lexicon key, that will be used for rendering the description text of this page in the menu.';
$_lang['handler'] = 'ハンドラー(アクションより優先されます)';
$_lang['handler_desc'] = '(オプション) ここに入力された文字列がJavaScriptとしてメニューから実行されます。(例：location.href="http://modx.jp";)';
$_lang['lexicon_key'] = 'レキシコンキー(アイテム名を直接入力することもできます)';
$_lang['lexicon_key_desc'] = 'The text, or lexicon key, that will be used for rendering the title text of this page in the menu.';
$_lang['menu_create'] = 'メニューアイテム作成';
$_lang['menu_confirm_remove'] = 'このアクションをメニューから削除しますか？';
$_lang['menu_err_ae'] = 'この名前は既に使用されています。他の名前を指定してください。';
$_lang['menu_err_nf'] = 'メニューが見つかりませんでした。';
$_lang['menu_err_ns'] = 'メニューが指定されていません';
$_lang['menu_err_remove'] = 'メニューからアクションを削除中にエラーが発生しました。';
$_lang['menu_err_save'] = 'メニューにアクションを定義中にエラーが発生しました。';
$_lang['menu_parent'] = '親メニュー';
$_lang['menu_parent_err_ns'] = '親メニューを指定してください';
$_lang['menu_parent_err_nf'] = '親メニューが見つかりません。';
$_lang['menu_remove'] = 'メニューアイテムを削除';
$_lang['menu_top'] = 'トップメニュー';
$_lang['menu_update'] = 'メニューアイテムを編集';
$_lang['menus'] = 'メニュー';
$_lang['namespace'] = 'ネームスペース';
$_lang['namespace_desc'] = 'The Namespace which this menu item is based on. This will determine the path for the controller that is loaded.';
$_lang['parameters'] = 'パラメータ(コントローラ呼び出し文字列の末尾に付加)';
$_lang['parameters_desc'] = 'Any request parameters you want appended to the result URL when clicking this menu. (Ex: &expire=1)';
$_lang['permissions'] = 'パーミッション';
$_lang['permissions_desc'] = 'A permission key required to load this menu item.';
$_lang['topmenu'] = 'トップメニュー';
$_lang['topmenu_desc'] = '管理画面のトップメニュー構成をマウス操作でカスタマイズできます。';