<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('premier_league_id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('web_name')->nullable();
            $table->string('photo')->nullable();
            $table->longText('news')->nullable();
            $table->date('news_added')->nullable();
            $table->integer('chance_of_playing_next_round')->nullable();
            $table->integer('chance_of_playing_this_round')->nullable();
            $table->integer('code')->nullable();
            $table->integer('cost_change_event')->nullable();
            $table->integer('cost_change_event_fall')->nullable();
            $table->integer('cost_change_start')->nullable();
            $table->integer('cost_change_start_fall')->nullable();
            $table->integer('dreamteam_count')->nullable();
            $table->integer('element_type')->nullable();
            $table->float('ep_next')->nullable();
            $table->float('ep_this')->nullable();
            $table->integer('event_points')->nullable();
            $table->float('form')->nullable();
            $table->integer('now_cost')->nullable();
            $table->float('points_per_game')->nullable();
            $table->float('selected_by_percent')->nullable();
            $table->boolean('special')->nullable();
            $table->integer('squad_number')->nullable();
            $table->integer('team')->nullable();
            $table->integer('team_code')->nullable();
            $table->integer('total_points')->nullable();
            $table->integer('transfers_in')->nullable();
            $table->integer('transfers_in_event')->nullable();
            $table->integer('transfers_out')->nullable();
            $table->integer('transfers_out_event')->nullable();
            $table->float('value_form')->nullable();
            $table->float('value_season')->nullable();
            $table->integer('minutes')->nullable();
            $table->integer('goals_scored')->nullable();
            $table->integer('assists')->nullable();
            $table->integer('clean_sheets')->nullable();
            $table->integer('goals_conceded')->nullable();
            $table->integer('own_goals')->nullable();
            $table->integer('penalties_saved')->nullable();
            $table->integer('penalties_missed')->nullable();
            $table->integer('yellow_cards')->nullable();
            $table->integer('red_cards')->nullable();
            $table->integer('saves')->nullable();
            $table->integer('bonus')->nullable();
            $table->integer('bps')->nullable();
            $table->float('influence')->nullable();
            $table->float('creativity')->nullable();
            $table->float('threat')->nullable();
            $table->float('ict_index')->nullable();
            $table->char('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elements');
    }
}
