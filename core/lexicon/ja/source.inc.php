<?php
/**
* Sources Japanese lexicon topic
*
* @language ja
* @package modx
* @subpackage lexicon
* @author yamamoto http://kyms.jp
* @author honda http://kogus.org
*/
$_lang['access'] = 'アクセス権限';
$_lang['base_path'] = 'ベースパス';
$_lang['base_path_relative'] = 'Base Path Relative?';
$_lang['base_url'] = 'ベースURL';
$_lang['base_url_relative'] = 'Base URL Relative?';
$_lang['minimum_role'] = '最低限必要なロール';
$_lang['path_options'] = 'パスオプション';
$_lang['policy'] = 'ポリシー';
$_lang['source'] = 'メディアソース';
$_lang['source_access_add'] = 'ユーザーグループの追加';
$_lang['source_access_remove'] = 'アクセスの削除';
$_lang['source_access_remove_confirm'] = 'このメディアソースへのユーザーグループのアクセスを削除してもよろしいですか？';
$_lang['source_access_update'] = 'アクセスの更新';
$_lang['source_create'] = 'メディアソースの新規作成';
$_lang['source_description_desc'] = 'このメディアソースの概要';
$_lang['source_duplicate'] = 'メディアソースの複製';
$_lang['source_err_ae_name'] = 'すでにその名前のメディアソースが存在しています。別の名前を指定してくださ。';
$_lang['source_err_nf'] = 'メディアソースが見つかりません。';
$_lang['source_err_nfs'] = 'id: [[+id]] のメディアソースは見つかりません。';
$_lang['source_err_ns'] = 'メディアソースを指定してください。';
$_lang['source_err_ns_name'] = 'メディアソースの名前を指定してください。';
$_lang['source_name_desc'] = 'メディアソースの名前';
$_lang['source_properties.intro_msg'] = '以下では、このメディアソースのプロパティを管理します。';
$_lang['source_remove'] = 'メディアソースの削除';
$_lang['source_remove_confirm'] = 'このメディアソースを削除してもよろしいですか？　この操作により、このメディアソースに割り当てられたテンプレート変数が壊れる場合があります。';
$_lang['source_remove_multiple'] = '複数のメディアソースを削除';
$_lang['source_remove_multiple_confirm'] = 'これらのメディアソースを削除してもよろしいですか？　この操作により、これらのメディアソースに割り当てられたテンプレート変数が壊れる場合があります。';
$_lang['source_update'] = 'メディアソースの更新';
$_lang['source_type'] = 'ソースタイプ';
$_lang['source_type_desc'] = 'メディアソースの種類・ドライバを選択。メディアソースはソースデータへのアクセスにドライバを使用します。<br /> 例）「ファイルシステム」ではサーバーのファイルシステムからファイルを収集します。「Amazon S3」では、Amazon S3のバケットからファイルを取得します。';
$_lang['source_type.file'] = 'ファイルシステム';
$_lang['source_type.file_desc'] = 'サーバー上のファイルをナビゲートする、ファイルシステムベースのメディアソース';
$_lang['source_type.s3'] = 'Amazon S3';
$_lang['source_type.s3_desc'] = 'Amazon S3のバケットを参照するメディアソース';
$_lang['source_types'] = 'ソースタイプの管理';
$_lang['source_types.intro_msg'] = 'MODXにインストールされているメディアソースタイプの一覧です。';
$_lang['source.access.intro_msg'] = 'このメディアソースへのアクセスを、特定のユーザーグループに制限できます。ユーザーグループが指定されていない場合、全ての管理画面ユーザーがアクセス可能になります。';
$_lang['sources'] = 'メディアソース';
$_lang['sources.intro_msg'] = 'ここでは全てのメディアソースを管理します。';
$_lang['user_group'] = 'ユーザーグループ';
$_lang['prop_file.allowedFileTypes_desc'] = 'If set, will restrict the files shown to only the specified extensions. Please specify in a comma-separated list, without the .';
$_lang['prop_file.basePath_desc'] = 'The file path to point the Source to.';
$_lang['prop_file.basePathRelative_desc'] = 'If the Base Path setting above is not relative to the MODX install path, set this to Yes.';
$_lang['prop_file.baseUrl_desc'] = 'The URL that this source can be accessed from.';
$_lang['prop_file.baseUrlPrependCheckSlash_desc'] = 'If true, MODX only will prepend the baseUrl if no forward slash (/) is found at the beginning of the URL when rendering the TV. Useful for setting a TV value outside the baseUrl.';
$_lang['prop_file.baseUrlRelative_desc'] = 'If the Base URL setting above is not relative to the MODX install URL, set this to Yes.';
$_lang['prop_file.imageExtensions_desc'] = 'A comma-separated list of file extensions to use as images. MODX will attempt to make thumbnails of files with these extensions.';
$_lang['prop_file.skipFiles_desc'] = 'A comma-separated list. MODX will skip over and hide files and folders that match any of these.';
$_lang['prop_file.thumbnailQuality_desc'] = 'The quality of the rendered thumbnails, in a scale from 0-100.';
$_lang['prop_file.thumbnailType_desc'] = 'The image type to render thumbnails as.';
$_lang['bucket'] = 'バケット';
$_lang['prop_s3.bucket_desc'] = 'Amazon S3のバケットからデータをロードします。';
$_lang['prop_s3.key_desc'] = 'バケットの認証に用いるAmazon Key';
$_lang['prop_s3.imageExtensions_desc'] = 'A comma-separated list of file extensions to use as images. MODX will attempt to make thumbnails of files with these extensions.';
$_lang['prop_s3.secret_key_desc'] = 'The Amazon secret key for authentication to the bucket.';
$_lang['prop_s3.skipFiles_desc'] = 'A comma-separated list. MODX will skip over and hide files and folders that match any of these.';
$_lang['prop_s3.thumbnailQuality_desc'] = 'The quality of the rendered thumbnails, in a scale from 0-100.';
$_lang['prop_s3.thumbnailType_desc'] = 'The image type to render thumbnails as.';
$_lang['prop_s3.url_desc'] = 'The URL of the Amazon S3 instance.';
$_lang['s3_no_move_folder'] = 'The S3 driver does not support moving of folders at this time.';