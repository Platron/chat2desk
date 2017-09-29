Platron Chat2Desk SDK
===============
## Установка

Проект предполагает через установку с использованием composer
<pre><code>composer require payprocessing/chat2desk</pre></code>

## Тесты
Для работы тестов необходим PHPUnit, для установки необходимо выполнить команду
```
composer require phpunit/phpunit
```
Для того, чтобы запустить интеграционные тесты нужно скопировать файл tests/integration/UserSettingsSample.php удалив 
из названия Sample и вставив настройки магазина. После выполнить команду из корня проекта
```
vendor/bin/phpunit tests/integration
```

## Примеры использования

### 1. Отправка сообщения

```php
use Platron\Chat2desk\services\messages\MessagesPostServiceRequest;
use Platron\Chat2desk\services\messages\MessagesPostServiceResponse;
use Platron\Chat2desk\services\BaseServiceRequest;

$service = new MessagesPostServiceRequest();
$service->setClientId(1);
$service->setText('Test');
$service->setTransport(BaseServiceRequest::TRANSPORT_WHATSAPP);
$response = new MessagesPostService(Response$service->sendRequest('token'));
```

### 2. Получение клиента по номеру телефона

```php
use Platron\Chat2desk\services\clients\ClientsGetServiceRequest;
use Platron\Chat2desk\services\clients\ClientsGetServiceResponse;

$service = new ClientsGetServiceRequest();
$service->setPhone($this->phoneTo);
$response = new MessagesPostServiceResponse($service->sendRequest('token'));
```

### 3. Добавление клиента

```php
use Platron\Chat2desk\services\clients\ClientsPostServiceRequest;
use Platron\Chat2desk\services\clients\ClientsPostServiceResponse;
use Platron\Chat2desk\services\BaseServiceRequest;

$service = new ClientsPostServiceRequest();
$service->setPhone('79050000000');
$service->setTransport(BaseServiceRequest::TRANSPORT_WHATSAPP);
$response = new ClientsPostServiceResponse($service->sendRequest($this->authString));
```
