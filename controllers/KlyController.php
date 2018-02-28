<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Kly;

class KlyController extends Controller
{
    public function actionIndex()
    {
        $query = Kly::find();

        $pagination = new Pagination([
             'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}