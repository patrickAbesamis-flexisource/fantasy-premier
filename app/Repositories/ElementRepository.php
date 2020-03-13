<?php

namespace App\Repositories;

use App\Element;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\ElementInterface;


/**
 * Element repository
 */
class ElementRepository implements ElementInterface
{
    protected $element;

    /**
     * Constructor
     */
    public function __construct(Element $element)
    {
        $this->element = $element;
    }

    public function getAllElements() {
        return $this->element->selectRaw('id, CONCAT(second_name, \', \' ,first_name) AS full_name')
            ->get()
            ->all();
    }

    public function getElement(int $intId) {
        return $this->element->select(['id', 'first_name', 'second_name', 'form', 'total_points', 'influence', 'creativity', 'threat', 'ict_index', 'yellow_cards', 'red_cards'])
            ->where('id', $intId)
            ->first();
    }

    public function saveFetchedElements(object $fetchedElement) {
        $element = new Element();
        $element->premier_league_id = $fetchedElement->id;
        $element->first_name = $fetchedElement->first_name;
        $element->second_name = $fetchedElement->second_name;
        $element->web_name = $fetchedElement->web_name;
        $element->photo = $fetchedElement->photo;
        $element->news = $fetchedElement->news;
        $element->news_added = date("Y-m-d H:i:s",strtotime($fetchedElement->news_added));
        $element->chance_of_playing_next_round = $fetchedElement->chance_of_playing_next_round;
        $element->chance_of_playing_this_round = $fetchedElement->chance_of_playing_this_round;
        $element->code = $fetchedElement->code;
        $element->cost_change_event = $fetchedElement->cost_change_event;
        $element->cost_change_event_fall = $fetchedElement->cost_change_event_fall;
        $element->cost_change_start = $fetchedElement->cost_change_start;
        $element->cost_change_start_fall = $fetchedElement->cost_change_start_fall;
        $element->dreamteam_count = $fetchedElement->dreamteam_count;
        $element->element_type = $fetchedElement->element_type;
        $element->ep_next = $fetchedElement->ep_next;
        $element->ep_this = $fetchedElement->ep_this;
        $element->form = $fetchedElement->form;
        $element->now_cost = $fetchedElement->now_cost;
        $element->points_per_game = $fetchedElement->points_per_game;
        $element->selected_by_percent = $fetchedElement->selected_by_percent;
        $element->special = $fetchedElement->special;
        $element->squad_number = $fetchedElement->squad_number;
        $element->team = $fetchedElement->team;
        $element->team_code = $fetchedElement->team_code;
        $element->total_points = $fetchedElement->total_points;
        $element->transfers_in = $fetchedElement->transfers_in;
        $element->transfers_in_event = $fetchedElement->transfers_in_event;
        $element->transfers_out = $fetchedElement->transfers_out;
        $element->transfers_out_event = $fetchedElement->transfers_out_event;
        $element->value_form = $fetchedElement->value_form;
        $element->value_season = $fetchedElement->value_season;
        $element->minutes = $fetchedElement->minutes;
        $element->goals_scored = $fetchedElement->goals_scored;
        $element->assists = $fetchedElement->assists;
        $element->clean_sheets = $fetchedElement->clean_sheets;
        $element->goals_conceded = $fetchedElement->goals_conceded;
        $element->own_goals = $fetchedElement->own_goals;
        $element->penalties_saved = $fetchedElement->penalties_saved;
        $element->penalties_missed = $fetchedElement->penalties_missed;
        $element->yellow_cards = $fetchedElement->yellow_cards;
        $element->red_cards = $fetchedElement->red_cards;
        $element->saves = $fetchedElement->saves;
        $element->bonus = $fetchedElement->bonus;
        $element->bps = $fetchedElement->bps;
        $element->influence = $fetchedElement->influence;
        $element->creativity = $fetchedElement->creativity;
        $element->threat = $fetchedElement->threat;
        $element->ict_index = $fetchedElement->ict_index;
        $element->status = $fetchedElement->status;
        
        $element->save();
    }
}