<?php

// Пример: клас получения письма стоит расширять классами получением МК, чека, и т.д., а не модифицировать


class MailGettingService {
    public function get() {
        return 'Mail';
    }
}

class MailGettingServiceMK {
    private MailGettingService $mailGettingService;

    function __construct(MailGettingService $mailGettingService) {
        $this->mailGettingService = $mailGettingService;
    }

    public function get() {
        return $this->mailGettingService->get() . PHP_EOL .'MK';
    }
}

class MailGettingServiceCheck {
    private MailGettingService $mailGettingService;

    function __construct(MailGettingService $mailGettingService) {
        $this->mailGettingService = $mailGettingService;
    }

    public function get() {
        return $this->mailGettingService->get() . PHP_EOL .'Check';
    }
}

$mk = new MailGettingServiceMK(new MailGettingService());
$check = new MailGettingServiceCheck(new MailGettingService());
echo $mk->get() . PHP_EOL .$check->get();