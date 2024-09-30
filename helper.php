<?php

function to_format_ticket_no($id)
{
    global $_settings;

    return $_settings->info('department_short_name') . '-' . ($id > 0 ? sprintf('%04d', $id) : '#####');
}
