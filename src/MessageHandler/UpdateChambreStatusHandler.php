<?php
namespace App\MessageHandler;

use App\Entity\Chambre;
use App\Message\UpdateChambreStatusMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class UpdateChambreStatusHandler
{
    public function __construct(private EntityManagerInterface $manager) {}

    public function __invoke(UpdateChambreStatusMessage $message)
    {
        $chambre = $this->manager->getRepository(Chambre::class)->find($message->getChambreId());

        if ($chambre) {
            $chambre->setActive('disponible');
            $this->manager->flush();
        }
    }
}

