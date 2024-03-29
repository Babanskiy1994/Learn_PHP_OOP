<?php

// Пример: существует класс отправки письма, в конструктор которого передается экземпляр класса отправки скрытой копии письма. Через время решаем вместо отпраки скрытой копии сохранять письмо в БД. Следует создать интерфейс дубликации письма и 2 имплементирующих класса: отправка скрытой копии и сохранения в БД. И передавать в конструктор класса отправки письма экземпляр, реализующий данный интерфейс.

class MailSending 
{
    public function __construct(private ICopyMail $iCopyMail) {
    }

    public function sendMail($mail) {
        // отправка письма
        echo "Письмо " . $mail . " отправлено." . PHP_EOL;
        // копия письма
        $this->iCopyMail->copyMail($mail);
    }
}

interface ICopyMail
{
    public function copyMail($mail);
}

class HiddenMailCopy implements ICopyMail
{
    public function copyMail($mail) {
        $this->sendMailCopy($mail);
    }

    private function sendMailCopy($mail) {
        echo "Скрытая копия письма " . $mail . " отправлена" . PHP_EOL;
    }
}

class DBMailCopy implements ICopyMail
{
    public function copyMail($mail) {
        $this->saveMailCopy($mail);
    }

    private function saveMailCopy($mail) {
        echo "Копия письма " . $mail . " сохранена в БД." . PHP_EOL;
    }
}

$mailCopy = new DBMailCopy;
$mail = new MailSending($mailCopy);
$mail->sendMail('123');
