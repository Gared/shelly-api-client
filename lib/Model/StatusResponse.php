<?php
declare(strict_types=1);

namespace ShellyClient\Model;

class StatusResponse extends AbstractDefaultResponse
{
    private string $time;

    private int $unixTime;

    private int $serial;

    private bool $hasUpdate;

    private string $mac;

    private int $ramTotal;

    private int $ramFree;

    private int $fsSize;

    private int $fsFree;

    private int $uptime;

    private float $temperature;

    private bool $overTemperature;

    /**
     * @var RelayResponse[]
     */
    private array $relays;

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function setTemperature(float $temperature): void
    {
        $this->temperature = $temperature;
    }

    public function isOverTemperature(): bool
    {
        return $this->overTemperature;
    }

    public function setOverTemperature(bool $overTemperature): void
    {
        $this->overTemperature = $overTemperature;
    }

    /**
     * @return RelayResponse[]
     */
    public function getRelays(): array
    {
        return $this->relays;
    }

    public function getRelay(int $index = 0): RelayResponse
    {
        return $this->relays[$index];
    }

    /**
     * @param RelayResponse[] $relays
     */
    public function setRelays(array $relays): void
    {
        $this->relays = $relays;
    }

    public function getTime(): string
    {
        return $this->time;
    }

    public function setTime(string $time): void
    {
        $this->time = $time;
    }

    public function getUnixTime(): int
    {
        return $this->unixTime;
    }

    public function setUnixTime(int $unixTime): void
    {
        $this->unixTime = $unixTime;
    }

    public function getSerial(): int
    {
        return $this->serial;
    }

    public function setSerial(int $serial): void
    {
        $this->serial = $serial;
    }

    public function isHasUpdate(): bool
    {
        return $this->hasUpdate;
    }

    public function setHasUpdate(bool $hasUpdate): void
    {
        $this->hasUpdate = $hasUpdate;
    }

    public function getMac(): string
    {
        return $this->mac;
    }

    public function setMac(string $mac): void
    {
        $this->mac = $mac;
    }

    public function getRamTotal(): int
    {
        return $this->ramTotal;
    }

    public function setRamTotal(int $ramTotal): void
    {
        $this->ramTotal = $ramTotal;
    }

    public function getRamFree(): int
    {
        return $this->ramFree;
    }

    public function setRamFree(int $ramFree): void
    {
        $this->ramFree = $ramFree;
    }

    public function getFsSize(): int
    {
        return $this->fsSize;
    }

    public function setFsSize(int $fsSize): void
    {
        $this->fsSize = $fsSize;
    }

    public function getFsFree(): int
    {
        return $this->fsFree;
    }

    public function setFsFree(int $fsFree): void
    {
        $this->fsFree = $fsFree;
    }

    public function getUptime(): int
    {
        return $this->uptime;
    }

    public function setUptime(int $uptime): void
    {
        $this->uptime = $uptime;
    }
}