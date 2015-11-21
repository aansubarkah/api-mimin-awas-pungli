<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Markerview Entity.
 *
 * @property int $id
 * @property int $category_id
 * @property \App\Model\Entity\Category $category
 * @property int $respondent_id
 * @property \App\Model\Entity\Respondent $respondent
 * @property float $lat
 * @property float $lng
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $info
 * @property int $twitID
 * @property string $twitPlaceID
 * @property \Cake\I18n\Time $twitTime
 * @property string $twitURL
 * @property string $twitPlaceName
 * @property bool $isTwitPlacePrecise
 * @property string $twitImage
 * @property bool $pinned
 * @property bool $cleared
 * @property bool $active
 * @property string $category_name
 * @property int $twitUserID
 * @property string $respondent_name
 * @property string $respondent_contact
 * @property string $place_name
 * @property int $isTwitImageExist
 * @property int $isTwitURLExist
 * @property int $isPlaceNameExist
 */
class Markerview extends Entity
{

}
