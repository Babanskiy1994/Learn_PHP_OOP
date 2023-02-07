<?php

// Пример: отправка письма о забронированном заказе и отправка скрытой копии письма должны быть в разных классах

class MailSending 
{
    public function __construct(private HiddenMailCopy $hiddenMailCopy) {
    }

    public function sendMail($mail){
        // отправка письма
        echo "Письмо " . $mail . " отправлено." . PHP_EOL;
        // отправка скрытой копии
        echo $this->hiddenMailCopy->sendHiddenMailCopy($mail);
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
