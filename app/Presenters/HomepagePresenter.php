<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use UserVarakJosef;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{

public function actionDefault(){

$Pepa = new UserVarakJosef();
$Pepa->setjmenoVarakJosef('Peppaa');

echo $Pepa->getSLUCHATKAVarakJosef(); echo'<br>';
echo $Pepa->getFavoriteMealVarakJosef();echo'<br>';
echo $Pepa->getFavoritePhoneVarakJosef();echo'<br>';
echo $Pepa->getTheMostPlayedBatllefieldVarakJosef();echo'<br>';
echo $Pepa->getFavoritePetVarakJosef();echo'<br>';

var_dump($Pepa);

    die;
    
    
    
    
}
}