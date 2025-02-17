<?php
namespace App\Message;

class UpdateChambreStatusMessage
{
    public function __construct(
        private int $chambreId,
        private \DateTime $dateFin
    ) {}

    public function getChambreId(): int { return $this->chambreId; }
    public function getDateFin(): \DateTime { return $this->dateFin; }
}
