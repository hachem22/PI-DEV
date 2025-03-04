<?php

namespace App\Service;

use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;
use Phpml\Classification\NaiveBayes;


class SentimentAnalysisService
{
    private $classifier;

    public function __construct()
    {
        // Initialize a classifier (e.g., SVM)
        $this->classifier = new SVC(Kernel::RBF, 3.0);
    }

    public function analyze(string $text): string
    {
        // Simple training data
        $samples = [
            ['je suis heureux'], ['cest génial'], ['j adore'], ['super'], ['magnifique'], ['excellent'], ['parfait'], ['fantastique'],
            ['je suis triste'], ['cest mauvais'], ['je déteste'], ['horrible'], ['nul'], ['décevant'], ['médiocre'], ['insupportable']
        ];
        $labels = ['positif', 'positif', 'positif', 'positif', 'positif', 'positif', 'positif', 'positif', 'négatif', 'négatif', 'négatif', 'négatif', 'négatif', 'négatif', 'négatif', 'négatif'];

        // Train the model
        $this->classifier->train($samples, $labels);

        // Predict the sentiment of the text
        $prediction = $this->classifier->predict([$text]);

        return $prediction;
    }
}