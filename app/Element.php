<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'elements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'premier_league_id',
        'first_name',
        'second_name',
        'web_name',
        'photo',
        'news',
        'news_added',
        'chance_of_playing_next_round',
        'chance_of_playing_this_round',
        'code',
        'cost_change_event',
        'cost_change_event_fall',
        'cost_change_start',
        'cost_change_start_fall',
        'dreamteam_count',
        'element_type',
        'ep_next',
        'ep_this',
        'event_points',
        'form',
        'now_cost',
        'points_per_game',
        'selected_by_percent',
        'special',
        'squad_number',
        'team',
        'team_code',
        'total_points',
        'transfers_in',
        'transfers_in_event',
        'transfers_out',
        'transfers_out_event',
        'value_form',
        'value_season',
        'minutes',
        'goals_scored',
        'assists',
        'clean_sheets',
        'goals_conceded',
        'own_goals',
        'penalties_saved',
        'penalties_missed',
        'yellow_cards',
        'red_cards',
        'saves',
        'bonus',
        'bps',
        'influence',
        'creativity',
        'threat',
        'ict_index',
        'status'
    ];
}
