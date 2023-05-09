<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionProfil()
    {
        return $this->render('profil');
    }

    public function actionDetailBiodata()
    {
        return $this->render('detail-biodata');
    }
    

}
