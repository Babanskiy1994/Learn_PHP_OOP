<?php

// Пример: отправка письма о забронированном заказе и отправка скрытой копии письма должны быть в разных классах

class MailSending {
    private $mailCopy;

    public function __construct(HiddenMailCopy $hiddenMailCopy) {
        $this->mailCopy = $hiddenMailCopy;
    }

    public function sendMail($mail){
        // отправка письма
        echo "Письмо " . $mail . " отправлено." . PHP_EOL;
        // отправка скрытой копии
        echo $this->mailCopy->sendHiddenMailCopy($mail);
    }
}

class HiddenMailCopy {
    public function sendHiddenMailCopy($mail){
        echo "Скрытая копия письма " . $mail . " отправлена" . PHP_EOL;
    }
}

$mailCopy = new HiddenMailCopy;
$mail = new MailSending($mailCopy);
$mail->sendMail('123');
