<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_CN', array (
  'validators' => 
  array (
    'This value should be false.' => '该变量的值应为 false 。',
    'This value should be true.' => '该变量的值应为 true 。',
    'This value should be of type {{ type }}.' => '该变量的类型应为 {{ type }} 。',
    'This value should be blank.' => '该变量值应为空。',
    'The value you selected is not a valid choice.' => '选定变量的值不是有效的选项。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '您至少要选择 {{ limit }} 个选项。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '您最多能选择 {{ limit }} 个选项。',
    'One or more of the given values is invalid.' => '一个或者多个给定的值无效。',
    'This field was not expected.' => '此字段是多余的。',
    'This field is missing.' => '此字段缺失。',
    'This value is not a valid date.' => '该值不是一个有效的日期（date）。',
    'This value is not a valid datetime.' => '该值不是一个有效的日期时间（datetime）。',
    'This value is not a valid email address.' => '该值不是一个有效的邮件地址。',
    'The file could not be found.' => '文件未找到。',
    'The file is not readable.' => '文件不可读。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => '文件太大 ({{ size }} {{ suffix }})。文件大小不可以超过 {{ limit }} {{ suffix }} 。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => '无效的文件类型 ({{ type }}) 。允许的文件类型有 {{ types }} 。',
    'This value should be {{ limit }} or less.' => '这个变量的值应该小于或等于 {{ limit }}。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '字符串太长，长度不可超过 {{ limit }} 个字符。',
    'This value should be {{ limit }} or more.' => '该变量的值应该大于或等于 {{ limit }}。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '字符串太短，长度不可少于 {{ limit }} 个字符。',
    'This value should not be blank.' => '该变量不应为空。',
    'This value should not be null.' => '该变量不应为 null 。',
    'This value should be null.' => '该变量应为空 null 。',
    'This value is not valid.' => '该变量值无效 。',
    'This value is not a valid time.' => '该值不是一个有效的时间。',
    'This value is not a valid URL.' => '该值不是一个有效的 URL 。',
    'The two values should be equal.' => '这两个变量的值应该相等。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => '文件太大，文件大小不可以超过 {{ limit }} {{ suffix }}。 ',
    'The file is too large.' => '文件太大。',
    'The file could not be uploaded.' => '无法上传此文件。',
    'This value should be a valid number.' => '该值应该为有效的数字。',
    'This value is not a valid country.' => '该值不是有效的国家名。',
    'This file is not a valid image.' => '该文件不是有效的图片。',
    'This is not a valid IP address.' => '该值不是有效的IP地址。',
    'This value is not a valid language.' => '该值不是有效的语言名。',
    'This value is not a valid locale.' => '该值不是有效的区域值（locale）。',
    'This value is already used.' => '该值已经被使用。',
    'The size of the image could not be detected.' => '不能解析图片大小。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '图片太宽 ({{ width }}px)，最大宽度为 {{ max_width }}px 。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '图片宽度不够 ({{ width }}px)，最小宽度为 {{ min_width }}px 。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '图片太高 ({{ height }}px)，最大高度为 {{ max_height }}px 。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '图片高度不够 ({{ height }}px)，最小高度为 {{ min_height }}px 。',
    'This value should be the user\'s current password.' => '该变量的值应为用户当前的密码。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => '该变量应为 {{ limit }} 个字符。',
    'The file was only partially uploaded.' => '该文件的上传不完整。',
    'No file was uploaded.' => '没有上传任何文件。',
    'No temporary folder was configured in php.ini.' => 'php.ini 里没有配置临时文件目录。',
    'Cannot write temporary file to disk.' => '临时文件写入磁盘失败。',
    'A PHP extension caused the upload to fail.' => '某个 PHP 扩展造成上传失败。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '该集合最少应包含 {{ limit }} 个元素。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '该集合最多包含 {{ limit }} 个元素。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '该集合应包含 {{ limit }} 个元素 element 。',
    'Invalid card number.' => '无效的信用卡号。',
    'Unsupported card type or invalid card number.' => '不支持的信用卡类型或无效的信用卡号。',
    'This is not a valid International Bank Account Number (IBAN).' => '该值不是有效的国际银行帐号（IBAN）。',
    'This value is not a valid ISBN-10.' => '该值不是有效的10位国际标准书号（ISBN-10）。',
    'This value is not a valid ISBN-13.' => '该值不是有效的13位国际标准书号（ISBN-13）。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '该值不是有效的国际标准书号（ISBN-10 或 ISBN-13）。',
    'This value is not a valid ISSN.' => '该值不是有效的国际标准期刊号（ISSN）。',
    'This value is not a valid currency.' => '该值不是有效的货币名（currency）。',
    'This value should be equal to {{ compared_value }}.' => '该值应等于 {{ compared_value }} 。',
    'This value should be greater than {{ compared_value }}.' => '该值应大于 {{ compared_value }} 。',
    'This value should be greater than or equal to {{ compared_value }}.' => '该值应大于或等于 {{ compared_value }} 。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '该值应与 {{ compared_value_type }} {{ compared_value }} 相同。',
    'This value should be less than {{ compared_value }}.' => '该值应小于 {{ compared_value }} 。',
    'This value should be less than or equal to {{ compared_value }}.' => '该值应小于或等于 {{ compared_value }} 。',
    'This value should not be equal to {{ compared_value }}.' => '该值不应先等于 {{ compared_value }} 。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '该值不应与 {{ compared_value_type }} {{ compared_value }} 相同。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '图片宽高比太大 ({{ ratio }})。允许的最大宽高比为 {{ max_ratio }}。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '图片宽高比太小 ({{ ratio }})。允许的最大宽高比为 {{ min_ratio }}。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '图片是方形的 ({{ width }}x{{ height }}px)。不允许使用方形的图片。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '图片是横向的 ({{ width }}x{{ height }}px)。不允许使用横向的图片。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '图片是纵向的 ({{ width }}x{{ height }}px)。不允许使用纵向的图片。',
    'An empty file is not allowed.' => '不允许使用空文件。',
    'The host could not be resolved.' => '主机名无法解析。',
    'This value does not match the expected {{ charset }} charset.' => '该值不符合 {{ charset }} 编码。',
    'This is not a valid Business Identifier Code (BIC).' => '这不是有效的业务标识符代码（BIC)。',
    'Error' => '错误',
    'This is not a valid UUID.' => '这不是有效的UUID。',
    'This value should be a multiple of {{ compared_value }}.' => '此值应为 {{ compared_value }} 的倍数。',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => '此业务标识符代码（BIC）与IBAN {{ iban }} 无关。',
    'This value should be valid JSON.' => '该值应该是有效的JSON。',
    'This form should not contain extra fields.' => '该表单中不可有额外字段.',
    'The uploaded file was too large. Please try to upload a smaller file.' => '上传文件太大， 请重新尝试上传一个较小的文件.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF 验证符无效， 请重新提交.',
    'fos_user.username.already_used' => '用户名已存在',
    'fos_user.username.blank' => '请输入用户名',
    'fos_user.username.short' => '用户名字数不够',
    'fos_user.username.long' => '用户名字数超出限制',
    'fos_user.email.already_used' => '邮箱已被使用',
    'fos_user.email.blank' => '请输入邮箱',
    'fos_user.email.short' => '邮箱字数不够',
    'fos_user.email.long' => '邮箱字数超出限制',
    'fos_user.email.invalid' => '邮箱格式不正确',
    'fos_user.password.blank' => '请输入密码',
    'fos_user.password.short' => '密码字数不够',
    'fos_user.password.mismatch' => '两次输入密码不一致',
    'fos_user.new_password.blank' => '请输入新密码',
    'fos_user.new_password.short' => '新密码字数不够',
    'fos_user.current_password.invalid' => '密码格式不正确',
    'fos_user.group.blank' => '请输入小组名称',
    'fos_user.group.short' => '小组名称字数不够',
    'fos_user.group.long' => '小组名称字数超出限制',
    'fos_group.name.already_used' => '此名称已在使用',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '身份验证发生异常。',
    'Authentication credentials could not be found.' => '没有找到身份验证的凭证。',
    'Authentication request could not be processed due to a system problem.' => '由于系统故障，身份验证的请求无法被处理。',
    'Invalid credentials.' => '无效的凭证。',
    'Cookie has already been used by someone else.' => 'Cookie 已经被其他人使用。',
    'Not privileged to request the resource.' => '没有权限请求此资源。',
    'Invalid CSRF token.' => '无效的 CSRF token 。',
    'Digest nonce has expired.' => '摘要随机串（digest nonce）已过期。',
    'No authentication provider found to support the authentication token.' => '没有找到支持此 token 的身份验证服务提供方。',
    'No session available, it either timed out or cookies are not enabled.' => 'Session 不可用。会话超时或没有启用 cookies 。',
    'No token could be found.' => '找不到 token 。',
    'Username could not be found.' => '找不到用户名。',
    'Account has expired.' => '帐号已过期。',
    'Credentials have expired.' => '凭证已过期。',
    'Account is disabled.' => '帐号已被禁用。',
    'Account is locked.' => '帐号已被锁定。',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => '更新小组',
    'group.show.name' => '小组名称',
    'group.new.submit' => '创建小组',
    'group.flash.updated' => '小组已被更新',
    'group.flash.created' => '小组已创建',
    'group.flash.deleted' => '小组已被删除',
    'security.login.username' => '用户名',
    'security.login.password' => '密码',
    'security.login.remember_me' => '自动登录',
    'security.login.submit' => '登录',
    'profile.show.username' => '用户名',
    'profile.show.email' => '电子邮箱',
    'profile.edit.submit' => '更新',
    'profile.flash.updated' => '用户信息已更新',
    'change_password.submit' => '修改密码',
    'change_password.flash.success' => '密码已成功修改',
    'registration.check_email' => '系统向%email%发送了一封包含激活链接的邮件，请访问该链接以启用你的帐户。',
    'registration.confirmed' => '%username%，恭喜你，你的帐户已启用！',
    'registration.back' => '返回前一页面',
    'registration.submit' => '注册',
    'registration.flash.user_created' => '用户已创建',
    'registration.email.subject' => '%username%，欢迎你',
    'registration.email.message' => '%username%，你好！

要启用你的用户帐号，请访问：%confirmationUrl%

祝好
网站团队
',
    'resetting.request.username' => '用户名或邮箱',
    'resetting.request.submit' => '重置密码',
    'resetting.reset.submit' => '修改密码',
    'resetting.flash.success' => '密码已重置。',
    'resetting.email.subject' => '重置密码',
    'resetting.email.message' => '%username%，你好！

请访问 %confirmationUrl% 以重置你的帐户密码。

祝好
网站团队
',
    'layout.logout' => '退出',
    'layout.login' => '登录',
    'layout.register' => '注册',
    'layout.logged_in_as' => '已登录为：%username%',
    'form.group_name' => '小组名称',
    'form.username' => '用户名',
    'form.email' => '电子邮箱',
    'form.current_password' => '当前密码',
    'form.password' => '密码',
    'form.password_confirmation' => '确认密码',
    'form.new_password' => '新密码',
    'form.new_password_confirmation' => '确认新密码',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => '新增 %entity_name%',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => '编辑 %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} 没有找到结果|{1} 找到 <strong>1</strong> 个结果|]1,Inf] 找到 <strong>%count%</strong> 个结果',
    'search.no_results' => '没有找到结果.',
    'list.row_actions' => '操作',
    'paginator.first' => '首页',
    'paginator.previous' => '上一页',
    'paginator.next' => '下一页',
    'paginator.last' => '尾页',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> of <strong>%results%</strong>',
    'label.true' => '可用',
    'label.false' => '不可用',
    'label.empty' => '空',
    'label.null' => '未赋值',
    'label.nullable_field' => '置空',
    'label.object' => 'PHP对象',
    'label.inaccessible' => '无法获取',
    'label.inaccessible.explanation' => '该字段的Getter方法缺失或该字段不是公共属性',
    'user.logged_in_as' => '当前登录用户',
    'user.unnamed' => '未命名用户',
    'user.anonymous' => '匿名用户',
    'user.signout' => '退出',
    'toggle_navigation' => '导航',
    'delete_modal.title' => '是否删除',
    'delete_modal.content' => '是否删除，该操作不可恢复',
    'delete_modal.action' => '确认删除',
    'action.add_new_item' => '添加一项',
    'action.add_another_item' => '再添加一项',
    'action.remove_item' => '删除一项',
    'errors' => '错误|错误',
    'form.are_you_sure' => '该表单的更改还未保存',
    'show.remaining_items' => '{1} 还有一项没有在当前列表显示|]1,Inf] 还有 %count% 项没有在当前列表显示',
    'exception.entity_not_found' => '当前记录不可用',
    'exception.entity_remove' => '该条记录不可删除，因为有其他记录依赖该条记录。',
    'exception.forbidden_action' => '无权执行该操作',
    'exception.no_entities_configured' => '没有正确设置',
    'exception.undefined_entity' => '未定义该类型记录',
  ),
  'messages' => 
  array (
    'action.new' => '新增 %entity_name%',
    'action.show' => '展示',
    'action.edit' => '编辑',
    'action.search' => '搜索',
    'action.delete' => '删除',
    'action.save' => '保存修改',
    'action.cancel' => '取消',
    'action.list' => '返回列表',
    'label.form.empty_value' => '空',
    '__name__label__' => '__name__label__',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);
$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé.',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait.',
    'fos_user.username.short' => 'Le nom d\'utilisateur est trop court.',
    'fos_user.username.long' => 'Le nom d\'utilisateur est trop long.',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée.',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait.',
    'fos_user.email.short' => 'L\'adresse e-mail est trop courte.',
    'fos_user.email.long' => 'L\'adresse e-mail est trop longue.',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide.',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait.',
    'fos_user.password.short' => 'Le mot de passe est trop court.',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques.',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait.',
    'fos_user.new_password.short' => 'Le nouveau mot de passe est trop court.',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide.',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait.',
    'fos_user.group.short' => 'Le nom est trop court.',
    'fos_user.group.long' => 'Le nom est trop long.',
    'fos_group.name.already_used' => 'Le nom est déjà utilisé.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour.',
    'group.flash.created' => 'Le groupe a été créé.',
    'group.flash.deleted' => 'Le groupe a été supprimé.',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour.',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié.',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Créer un compte',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès.',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Ce lien ne peut être utilisé qu\'une seule fois pour valider votre compte.

Cordialement,
L\'équipe
',
    'resetting.check_email' => 'Un e-mail a été envoyé. Il contient un lien sur lequel il vous faudra cliquer pour réinitialiser votre mot de passe.
Remarque : Vous ne pouvez demander un nouveau mot de passe que toutes les %tokenLifetime% heures.

Si vous ne recevez pas un email, vérifiez votre dossier spam ou essayez à nouveau.
',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès.',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Répéter le mot de passe',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Répéter le nouveau mot de passe',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Créer "%entity_name%"',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => 'Modifier %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} Aucun résultat trouvé|{1} <strong>1</strong> résultat trouvé|]1,Inf] <strong>%count%</strong> résultats trouvés',
    'search.no_results' => 'Aucun résultat trouvé',
    'list.row_actions' => 'Actions',
    'paginator.first' => 'Premier',
    'paginator.previous' => 'Précédent',
    'paginator.next' => 'Suivant',
    'paginator.last' => 'Dernier',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> sur <strong>%results%</strong>',
    'label.true' => 'Oui',
    'label.false' => 'Non',
    'label.empty' => 'Vide',
    'label.null' => 'Aucun(e)',
    'label.nullable_field' => 'Laisser vide',
    'label.object' => 'Objet PHP',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Aucun accesseur n\'existe pour cette propriété ou celle-ci n\'est pas publique.',
    'user.logged_in_as' => 'Connecté en tant que',
    'user.unnamed' => 'Utilisateur sans nom',
    'user.anonymous' => 'Utilisateur anonyme',
    'user.signout' => 'Déconnexion',
    'user.exit_impersonation' => 'Arrêter l\'impersonnalisation',
    'toggle_navigation' => 'Activer ou désactiver la navigation',
    'delete_modal.title' => 'Voulez-vous supprimer cet élément ?',
    'delete_modal.content' => 'Cette action est irréversible.',
    'delete_modal.action' => 'Supprimer',
    'action.add_new_item' => 'Ajouter un nouvel élément',
    'action.add_another_item' => 'Ajouter un autre élément',
    'action.remove_item' => 'Supprimer l\'élément',
    'errors' => 'Erreur|Erreurs',
    'form.are_you_sure' => 'Vous n\'avez pas sauvegardé vos modifications.',
    'show.remaining_items' => '{1} il y a un autre élément qui n\'est pas affiché dans cette liste|]1,Inf] %count% autres éléments ne sont pas affichés dans cette liste',
    'exception.entity_not_found' => 'Cet élément n\'est plus disponible.',
    'exception.entity_remove' => 'Cet élément ne peut être supprimé car d\'autres éléments en dépendent.',
    'exception.forbidden_action' => 'L\'action demandée ne peut être exécutée sur cet élément.',
    'exception.no_entities_configured' => 'L\'application n\'est pas correctement configurée.',
    'exception.undefined_entity' => 'L\'application n\'est pas correctement configurée pour ce type d\'élément.',
  ),
  'messages' => 
  array (
    'action.new' => 'Créer %entity_name%',
    'action.show' => 'Voir',
    'action.edit' => 'Éditer',
    'action.search' => 'Rechercher',
    'action.delete' => 'Supprimer',
    'action.save' => 'Sauvegarder les modifications',
    'action.cancel' => 'Annuler',
    'action.list' => 'Retour à la liste',
    'label.form.empty_value' => 'Aucun(e)',
    '__name__label__' => '__name__label__',
  ),
));
$catalogueZh->addFallbackCatalogue($catalogueFr);

return $catalogue;
