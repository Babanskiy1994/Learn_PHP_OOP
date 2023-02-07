<?php

class Facade
{
    public function __construct(private Bios $bios, private OperatingSystem $os) {
    }

    public function turnOn() {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff() {
        $this->os->halt();
        $this->bios->powerDown();
    }
}

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}

interface Bios
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OperatingSystem $os);

    public function powerDown();
}



/* 
Применимость:

Фасад предназначен для разделения клиента и подсистемы путем внедрения многих (но иногда только одного) интерфейсов, и, конечно, уменьшения общей сложности.
*/