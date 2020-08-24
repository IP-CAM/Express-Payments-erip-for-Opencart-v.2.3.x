<?php
$_['heading_title']      = '«Экспресс Платежи: ЕРИП»';
$_['text_erip_expresspay'] 		 = '<a target="_blank" href="https://express-pay.by/"><img src="view/image/payment/erip_expresspay.png" alt="ExpressPay" title="ExpressPay" style="border: 1px solid #eeeeee; padding: 10px 10px 6px 10px;" /></a>';
$_['button_save']        = 'Сохранить';
$_['button_cancel']      = 'Отменить';
$_['token_label']     	 = 'Токен';
$_['token_comment']   	 = 'Генерирутся в панели express-pay.by';
$_['secret_key_label']       = 'Секретное слово для подписи счетов';
$_['secret_key_comment']     = 'Секретного слово, которое известно только серверу и клиенту. Используется для формирования цифровой подписи. Задается в панели express-pay.by';
$_['sign_invoices_label']     = 'Использовать цифровую подпись для API';
$_['handler_label']     = 'Адрес для уведомлений';
$_['test_mode_label']     = 'Использовать тестовый режим';
$_['name_editable_label']     = 'Разрешено изменять ФИО плательщика';
$_['name_editable_comment']     = 'Разрешается при оплате счета изменять ФИО плательщика';
$_['address_editable_label']     = 'Разрешено изменять адрес плательщика';
$_['address_editable_comment']     = 'Разрешается при оплате счета изменять адрес плательщика';
$_['amount_editable_label']     = 'Разрешено изменять сумму оплаты';
$_['amount_editable_comment']     = 'Разрешается при оплате счета изменять сумму платежа';
$_['url_api_label']     = 'Адрес API';
$_['url_sandbox_api_label']     = 'Адрес тестового API';
$_['text_payment']       = 'Оплаты';
$_['pending_status']     = 'Статус заказа после оформления';
$_['cancel_status']		 = 'Статус заказа после отмены';
$_['processing_status']  = 'Статус заказа после оплаты';
$_['status_label']       = 'Состояние:';
$_['sort_order_label']   = 'Сортировка:';
$_['text_success']       = 'Успешно';
$_['text_edit']       = 'Редактирование ЕРИП';
$_['sign_notify_label']       = 'Использовать цифровую подпись для уведомлений';
$_['secret_key_notify_comment'] = 'Секретного слово, которое известно только серверу и клиенту. Используется для формирования цифровой подписи. Задается в панели express-pay.by';
$_['secret_key_notify_label']       = 'Секретное слово для подписи уведомлений';
$_['text_contacts']       = 'Контакты';
$_['text_phone']       = 'Телефон';
$_['settings_module_label']       = 'Настройки модуля';
$_['sign_comment']       = 'Параметр проверки запросов с использование цифровой подписи';
$_['text_version']       = 'Версия ';
$_['message_success_label']       = 'Сообщение при успешном заказе';
$_['text_about'] = '«Экспресс Платежи: ЕРИП» - плагин для интеграции с сервисом «Экспресс Платежи» (express-pay.by) через API. 
<br/>Плагин позволяет выставить счет в системе ЕРИП, получить и обработать уведомление о платеже в системе ЕРИП.
<br/>Описание плагина доступно по адресу: <a target="blank" href="https://express-pay.by/cms-extensions/opencart#2_2_x">https://express-pay.by/cms-extensions/opencart#2_2_x</a>';
$_['message_success'] = 'Для оплаты заказа Вам необходимо перейти в раздел ЕРИП:

Интернет-магазины\Сервисы -> "Первая буква доменного имени интернет-магазина" -> "Доменное имя интернет-магазина"

Далее введите номер заказа "##order_id##" и нажмите "продолжить".

После поступления оплаты Ваш заказ поступит в обработку.';
?>