<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;

class ArrangePositions
{
    public static function run(int $id)
    {
        DB::update("
            with RakedProposals as (
                select id, row_number() over(order by hours asc) as p
                from proposals
                where project_id = :project
            )
            update proposals
            set position = (select p from RakedProposals where proposals.id = RakedProposals.id)
            where project_id = :project
        ", ['project' => $id]);
    }
}
