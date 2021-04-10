<?php
$w = 1;
$events = get_posts(array(
    'numberposts' => -1,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  => '',
    'post_type'   => 'events',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
));
$allDates = array();
$dates_arr = array();

foreach ($events as $event) {

    setup_postdata($post);
    $d = get_field('date_event', $event->ID);
    $t = get_field('time_event', $event->ID);
    $date = date_create($d . ' ' . $t);
    $allDates[] = date_format($date, 'Y-m-d H:i:s');
    $dates_arr[$event->ID] = date_format($date, 'Y-m-d H:i:s');

    wp_reset_postdata();
};

$date = date('Y-m-d H:i:s');

function date_sort($a, $b)
{
    return strtotime($a) - strtotime($b);
}
usort($allDates, "date_sort");
foreach ($allDates as $count => $dateSingle) {
    if (strtotime($date) < strtotime($dateSingle)) {
        $nextDate = date('Y-m-d H:i:s', strtotime($dateSingle));
        break;
    }
}

$key_upcoming_event = array_search($nextDate, $dates_arr);

if ($key_upcoming_event == false) {
    function find_closest($array, $date)
    {
        foreach ($array as $day) {
        
            $interval[] = abs(strtotime($date) - strtotime($day));
            
        }

        asort($interval);
        $closest = key($interval);

        return $array[$closest];
    }

    $nextDate = find_closest($allDates, $date);
    $key_upcoming_event = array_search($nextDate, $dates_arr);
}

var_dump($key_upcoming_event);
