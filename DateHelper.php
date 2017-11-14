<?php

namespace common\helpers;

use Yii;

class DateHelper
{

    public static function getMonths()
    {
        return [            
            1 => Yii::t('common', 'January'),
            2 => Yii::t('common', 'February'),
            3 => Yii::t('common', 'March'),
            4 => Yii::t('common', 'April'),
            5 => Yii::t('common', 'May'),
            6 => Yii::t('common', 'June'),
            7 => Yii::t('common', 'July'),
            8 => Yii::t('common', 'August'),
            9 => Yii::t('common', 'September'),
            10 => Yii::t('common', 'October'),
            11 => Yii::t('common', 'November'),
            12 => Yii::t('common', 'December')
        ];
    }

    public static function getYearsForRegistration()
    {
        
        $startDate = (int) (new \DateTime())->modify('-18 years')->format('Y');
        
        return array_combine(range($startDate, 1910), range($startDate, 1910));
    }

}
