<?php

// Пример: отправка письма о забронированном заказе и отправка скрытой копии письма должны быть в разных классах

class Send
{
    public function __construct(
        private MailSendingService $mailSendingService,
        private HiddenMailCopy $hiddenMailCopy
    ) {
    }

    public function send(string $mail, bool $withCopy) {
        // отправка письма
        $this->mailSendingService->sendMail($mail);

        if ($withCopy) {
            // отправка скрытой копии
            $this->hiddenMailCopy->sendHiddenMailCopy($mail);
        }
    }
}

class MailSendingService
{
    public function sendMail(string $mail) {
        echo "Письмо " . $mail . " отправлено." . PHP_EOL;
    }
}

class HiddenMailCopy {
    public function sendHiddenMailCopy(string $mail) {
        echo "Скрытая копия письма " . $mail . " отправлена." . PHP_EOL;
    }
}

$message = 'для клиента';
$mail = new Send(new MailSendingService, new HiddenMailCopy);
$mail->send($message, true);
